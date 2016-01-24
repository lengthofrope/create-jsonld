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

    const RDFA_SCHEMA = 'http://schema.org/docs/schema_org_rdfa.html';

    /**
     * Holds the schema.org data
     * @var string
     */
    private $schema;

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
        $this->getJSONVersionOfSchema();

        //print_r(json_decode($this->schema));
    }

    /**
     * Retrieve the latest RDFA version of schema.org and converts it to JSON-LD.
     * 
     * Note: caches the file in data and retrieves it from there as long as it exists.
     */
    private function getJSONVersionOfSchema()
    {
        // Set cachefile
        $cacheFile = dirname(dirname(__DIR__)) . '/data/schemaorg.cache.jsonld';

        if (!file_exists($cacheFile)) {
            // Create dir
            mkdir(dirname($cacheFile), 0777, true);

            // Load RDFA Schema
            $graph = new \EasyRdf_Graph(self::RDFA_SCHEMA);
            $graph->load(self::RDFA_SCHEMA, 'rdfa');

            // Lookup the output format
            $format = \EasyRdf_Format::getFormat('jsonld');

            // Serialise to the new output format
            $output = $graph->serialise($format);

            if (!is_scalar($output)) {
                $output = var_export($output, true);
            }

            $this->schema = $graph->serialise($format);

            // Write cache file
            file_put_contents($cacheFile, $this->schema);
        } else {
            $this->schema = file_get_contents($cacheFile);
        }
    }

}
