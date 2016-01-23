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
 * Description of ElementGroup
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 */
abstract class ElementGroup implements Interfaces\IElement
{

    /** @var Interfaces\IElement[] */
    protected $elements;

    protected function __construct()
    {
        $this->elements = new \SplObjectStorage();
    }

    /**
     * Add a JSONLD Element
     * 
     * @param Interfaces\IElement $element
     * @return ElementGroup
     */
    public function add(Interfaces\IElement $element)
    {
        $this->elements->attach($element);

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
        if ($this->elements->contains($element)) {
            $this->elements->detach($element);
        }

        return $this;
    }

    /**
     * Validate all children
     * 
     * @return boolean
     */
    public function validate()
    {
        foreach ($this->elements as $element)
        {
            if (!$element->validate()) {
                return false;
            }
        }

        return true;
    }

}
