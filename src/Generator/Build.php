<?php

/*
 * The MIT License
 *
 * Copyright 2016 LengthOfRope, Bas de Kort <bdekort@gmail.com>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace LengthOfRope\JSONLD\Generator;

/**
 * Fetch the data and build all classes
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 */
class Build
{

    const RDFA_SCHEMA = 'https://schema.org/version/latest/schemaorg-current-https.jsonld';

    /**
     * Holds the schema.org data
     * @var string
     */
    private $schema;
    private $types = array();
    private $props = array();

    /**
     * Factory
     * @return \LengthOfRope\JSONLD\Generator\Build
     */
    public static function factory()
    {
        return new Build();
    }

    private function __construct()
    {
        set_time_limit(0);
        $this->getJSONVersionOfSchema();

        $this->parse();

        $this->write();
    }

    /**
     * Retrieve the latest RDFA version of schema.org and converts it to JSON-LD.
     *
     * Note: caches the file in data and retrieves it from there as long as it exists.
     */
    private function getJSONVersionOfSchema()
    {
        // Set cachefile
        $cacheFile = dirname(dirname(__DIR__)) . '/data/schemaorg.cache';

        if (!file_exists($cacheFile)) {
            // Create dir
            if (!file_exists(dirname($cacheFile))) {
                mkdir(dirname($cacheFile), 0777, true);
            }
            $this->schema = json_decode(file_get_contents(self::RDFA_SCHEMA));

            // Write cache file
            file_put_contents($cacheFile, serialize($this->schema));
        } else {
            $this->schema = unserialize(file_get_contents($cacheFile));
        }
    }

    private function parse()
    {
        foreach ($this->schema->{'@graph'} as $key => $item) {
            $types = $item->{'@type'};
            if ($types !== 'rdf:Property') {
                // Skip all but properties
                continue;
            }

            if (!isset($item->{'schema:domainIncludes'})) {
                continue;
            }

            // Convert domain and range to arrays
            $domains = array();
            if (!is_array($item->{'schema:domainIncludes'})) {
                $item->{'schema:domainIncludes'} = array($item->{'schema:domainIncludes'});
            }

            foreach ($item->{'schema:domainIncludes'} as $dom) {
                if (!in_array($dom->{'@id'}, $domains)) {
                    $domains[] = $dom->{'@id'};
                }
            }

            $item->{'schema:domainIncludes'} = $domains;

            $range = array();
            if (!is_array($item->{'schema:rangeIncludes'})) {
                $item->{'schema:rangeIncludes'} = array($item->{'schema:rangeIncludes'});
            }

            foreach ($item->{'schema:rangeIncludes'} as $ran) {
                $range[] = array(
                    'id'    => $ran->{'@id'},
                    'class' => str_replace('schema:', '', $ran->{'@id'}) . 'Schema'
                );
            }

            $item->rangeIncludes = $range;

            $this->props[$item->{'@id'}] = $item;
        }

        foreach ($this->schema->{'@graph'} as $key => $item) {
            $types = $item->{'@type'};
            if ($types === 'rdf:Property') {
                // Skip properties in first run
                continue;
            }

            $item->props = array();

            // Add properties to item
            foreach ($this->props as $prop) {
                try {
                    if (in_array($item->{'@id'}, $prop->{'schema:domainIncludes'})) {
                        if (!isset($item->props[$prop->{'rdfs:label'}])) {
                            $item->props[$prop->{'rdfs:label'}] = array(
                                'id'             => $prop->{'@id'},
                                'domainIncludes' => $prop->{'schema:domainIncludes'},
                                'rangeIncludes'  => $prop->{'schema:rangeIncludes'},
                                'comment'        => $prop->{'rdfs:comment'},
                                'label'          => $prop->{'rdfs:label'},
                                'getter'         => 'get' . ucfirst($prop->{'rdfs:label'}),
                                'setter'         => 'set' . ucfirst($prop->{'rdfs:label'}),
                            );
                        }
                    }
                } catch (\TypeError $e) {
                    // Skip properties that are not in the domainIncludes
                }
            }

            if (is_array($types)) {
                foreach ($types as $type) {
                    $this->types[$type][$item->{'@id'}] = $item;
                }
            } else if (!empty($types)) {
                $this->types[$types][$item->{'@id'}] = $item;
            }
        }
    }

    private function write()
    {
        $dir = dirname(__DIR__) . '/Schema/';
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $loader = new \Twig\Loader\FilesystemLoader(dirname(dirname(__DIR__)) . '/tools/');
        $twig   = new \Twig\Environment($loader);

        foreach ($this->types['rdfs:Class'] as $item) {
            $label = is_object($item->{'rdfs:label'})  ? $item->{'rdfs:label'}->{'@value'} : $item->{'rdfs:label'};
            $comment = is_object($item->{'rdfs:comment'})  ? $item->{'rdfs:comment'}->{'@value'} : $item->{'rdfs:comment'};

            // Add * to all comment lines excdept the first one
            foreach(explode("\n", $comment) as $key => $line) {
                if ($key == 0) {
                    continue;
                }
                $comment = str_replace($line, ' * ' . $line, $comment);
            }


            // Add Schema to all classes to prevent failures (classes Class or Float) are reserved.
            $class = $label;

            // If class is reserverd word or starts with a number, prefix with _
            if (is_numeric(substr($class, 0, 1)) || in_array($class, array('Class', 'Float'))) {
                $class = '_' . $class;
            }

            if (in_array($class, array('DataType'))) {
                continue;
            }

            $classextends = @$item->{'rdfs:subClassOf'};

            // We do not support multiple inheritance (yet) so if array, just take the first one
            if (is_array($classextends)) {
                $classextends = $classextends[0];
            }

            $classextends = @str_replace('schema:', '', $classextends->{'@id'});
            if (empty($classextends)) {
                $classextends = '\LengthOfRope\JSONLD\Elements\Element';
            }
            $file = $dir . $class . '.php';

            $context = @explode(":", $item->{'@id'});
            $context = $this->schema->{'@context'}->{$context[0]};

            // Multiline property comments
            foreach ($item->props as $key => $prop) {
                $item->props[$key]['comment'] = $this->multiline($prop['comment'], 80, 5);
            }

            $content = $twig->render('template.twig', array(
                'class'        => $class,
                'classcomment' => $this->multiline($comment),
                'classExtends' => $classextends,
                'properties'   => $item->props,
                'context'      => $context,
                'type'         => $label,
            ));


            file_put_contents($file, $content);
        }
    }

    /**
     * Shorten lines to a maximum length and add * to the beginning of each line
     *
     * @param string $longLine
     * @param int $maxLength
     * @param int $indent
     * @return string with EOL tags
     */
    private function multiline(string $longLine, int $maxLength = 80, int $indent = 1): string
    {
        // Convert \n to PHP_EOL
        $longLine = str_replace('\n', PHP_EOL, $longLine);

        $lines = explode(PHP_EOL, wordwrap($longLine, $maxLength));
        $shortened = '';
        foreach ($lines as $line) {
            $line = trim($line);
            if (strlen($line) !== 0) {
                $line = ' ' . $line;
            }
            $shortened .= str_pad('*', $indent + 1, ' ', STR_PAD_LEFT) . $line . PHP_EOL;
        }

        // Remove last EOL
        $shortened = substr($shortened, 0, -1);

        return $shortened;
    }

}
