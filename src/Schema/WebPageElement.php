<?php

/*
 * The MIT License
 *
 * Copyright 2024 LengthOfRope, Bas de Kort <bdekort@gmail.com>.
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
 **/

namespace LengthOfRope\JSONLD\Schema;

/**
 * A web page element, like a table or an image.
 *
 * @see https://schema.org/WebPageElement
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class WebPageElement extends CreativeWork
{
    public static function factory(): WebPageElement
    {
        return new WebPageElement('https://schema.org/', 'WebPageElement');
    }

    /**
     * An XPath, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the
     * latter case, multiple matches within a page can constitute a single conceptual
     * "Web page element".
     *
     * @param $xpath \LengthOfRope\JSONLD\DataType\TypeXPathType
     * @return static
     **/
    public function setXpath($xpath): static {
        $this->properties['xpath'] = $xpath;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeXPathType
     **/
    public function getXpath() {
        return $this->properties['xpath'];
    }
    /**
     * A CSS selector, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In
     * the latter case, multiple matches within a page can constitute a single
     * conceptual "Web page element".
     *
     * @param $cssSelector \LengthOfRope\JSONLD\DataType\TypeCssSelectorType
     * @return static
     **/
    public function setCssSelector($cssSelector): static {
        $this->properties['cssSelector'] = $cssSelector;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeCssSelectorType
     **/
    public function getCssSelector() {
        return $this->properties['cssSelector'];
    }
}
