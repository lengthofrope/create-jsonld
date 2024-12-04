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

namespace LengthOfRope\JSONLD\Elements;

use LengthOfRope\JSONLD\Interfaces;

/**
 * Description of Element
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 */
abstract class Element implements Interfaces\IElement
{
    /* JSON-LD @context */
    protected $context;

    /* JSON-LD @type */
    protected $type;

    /* JSON-LD @id */
    protected $id;

    /* JSON-LD properties */
    protected $properties = array();

    protected function __construct($context, $type)
    {
        $this->context = $context;
        $this->type = $type;
    }

    /**
     * Add a JSONLD Element
     *
     * @param Interfaces\IElement $element
     * @return ElementGroup
     */
    public function add(Interfaces\IElement $element)
    {
        return $this;
    }

    /**
     * Remove a JSONLD element
     *
     * @param Interfaces\IElement $element
     * @return ElementGroup
     */
    public function remove(Interfaces\IElement $element)
    {
        return $this;
    }

    /**
     * Validate all children
     *
     * @override
     * @return boolean
     */
    public function validate()
    {
        // Loop through all properties and validate them
        foreach($this->properties as $property) {
            if ($property instanceof Interfaces\IValidator && !$property->validate()) {
                return false;
            }
        }

        return true;
    }

    /**
     * Set the ID of the element
     *
     * This is optional, but can be used to set the @id of the element in the JSON-LD
     * to link elements together. It provides additional context about the entity by
     * pointing to its canonical representation or resource on the web and is therefore
     * usually in the form of a URL.
     *
     * I.E. https://site.com/members/#johndoe
     *
     * @param string $id
     * @return static
     */
    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Retrieve the elements (and all childrens) as an array
     *
     * @return array
     */
    public function getDataArray()
    {
        $arr = array(
            '@context' => $this->context,
            '@type' => $this->type,
        );

        // Add the ID if it is set
        if ($this->id) {
            $arr['@id'] = $this->id;
        }

        foreach($this->properties as $name => $property) {
            if ($property instanceof Interfaces\IElement) {
                $arr[$name] = $property->getDataArray();
            } else {
                $arr[$name] = $property;
            }
        }

        return $arr;
    }

}
