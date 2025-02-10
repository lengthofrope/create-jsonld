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
 * [[Recommendation]] is a type of [[Review]] that suggests or proposes something
 * as the best option or best course of action. Recommendations may be for products
 * or services, or other concrete things, as in the case of a ranked list or
 * product guide. A [[Guide]] may list multiple recommendations for different
 * categories. For example, in a [[Guide]] about which TVs to buy, the author may
 * have several [[Recommendation]]s.
 *
 * @see https://schema.org/Recommendation
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Recommendation extends Review
{
    public static function factory(): Recommendation
    {
        return new Recommendation('https://schema.org/', 'Recommendation');
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @param $category \LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\Schema\PhysicalActivityCategory|\LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setCategory($category): static {
        $this->properties['category'] = $category;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\Schema\PhysicalActivityCategory|\LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getCategory() {
        return $this->properties['category'];
    }
}
