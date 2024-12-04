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
 * A ProductGroup represents a group of [[Product]]s that vary only in certain well-described ways, such as by [[size]], [[color]], [[material]] etc.

 * While a ProductGroup itself is not directly offered for sale, the various varying products that it represents can be. The ProductGroup serves as a prototype or template, standing in for all of the products who have an [[isVariantOf]] relationship to it. As such, properties (including additional types) can be applied to the ProductGroup to represent characteristics shared by each of the (possibly very many) variants. Properties that reference a ProductGroup are not included in this mechanism; neither are the following specific properties [[variesBy]], [[hasVariant]], [[url]]. 
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ProductGroup extends Product
{
    public static function factory(): ProductGroup
    {
        return new ProductGroup('https://schema.org/', 'ProductGroup');
    }

    /**
     * Indicates a [[Product]] that is a member of this [[ProductGroup]] (or [[ProductModel]]).
     *
     * @param $hasVariant 
     * @return static
     **/
    public function setHasVariant($hasVariant): static {
        $this->properties['hasVariant'] = $hasVariant;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasVariant() {
        return $this->properties['hasVariant'];
    }

    /**
     * Indicates the property or properties by which the variants in a [[ProductGroup]] vary, e.g. their size, color etc. Schema.org properties can be referenced by their short name e.g. "color"; terms defined elsewhere can be referenced with their URIs.
     *
     * @param $variesBy |
     * @return static
     **/
    public function setVariesBy($variesBy): static {
        $this->properties['variesBy'] = $variesBy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getVariesBy() {
        return $this->properties['variesBy'];
    }

    /**
     * Indicates a textual identifier for a ProductGroup.
     *
     * @param $productGroupID 
     * @return static
     **/
    public function setProductGroupID($productGroupID): static {
        $this->properties['productGroupID'] = $productGroupID;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProductGroupID() {
        return $this->properties['productGroupID'];
    }


}
