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
 **/

namespace LengthOfRope\JSONLD\Schema;

/**
 * A datasheet or vendor specification of a product (in the sense of a prototypical description).
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ProductModelSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new ProductModelSchema('https://schema.org/', 'ProductModel');
    }

    /**
     * A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
     *
     * @param $successorOf 
     **/
    public function setSuccessorOf($successorOf) {
        $this->properties['successorOf'] = $successorOf;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSuccessorOf() {
        return $this->properties['successorOf'];
    }

    /**
     * A pointer from a previous, often discontinued variant of the product to its newer variant.
     *
     * @param $predecessorOf 
     **/
    public function setPredecessorOf($predecessorOf) {
        $this->properties['predecessorOf'] = $predecessorOf;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPredecessorOf() {
        return $this->properties['predecessorOf'];
    }

    /**
     * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]], the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]], this property can apply to any [[Product]] included in the group.
     *
     * @param $isVariantOf |
     **/
    public function setIsVariantOf($isVariantOf) {
        $this->properties['isVariantOf'] = $isVariantOf;

        return $this;
    }

    /**
     * @return |
     **/
    public function getIsVariantOf() {
        return $this->properties['isVariantOf'];
    }


}
