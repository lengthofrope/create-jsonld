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
 * A compound price specification is one that bundles multiple prices that all
 * apply in combination for different dimensions of consumption. Use the name
 * property of the attached unit price specification for indicating the dimension
 * of a price component (e.g. "electricity" or "final cleaning").
 *
 * @see https://schema.org/CompoundPriceSpecification
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CompoundPriceSpecification extends PriceSpecification
{
    public static function factory(): CompoundPriceSpecification
    {
        return new CompoundPriceSpecification('https://schema.org/', 'CompoundPriceSpecification');
    }

    /**
     * Defines the type of a price specified for an offered product, for example a list
     * price, a (temporary) sale price or a manufacturer suggested retail price. If
     * multiple prices are specified for an offer the [[priceType]] property can be
     * used to identify the type of each such specified price. The value of priceType
     * can be specified as a value from enumeration PriceTypeEnumeration or as a free
     * form text string for price types that are not already predefined in
     * PriceTypeEnumeration.
     *
     * @param $priceType \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\PriceTypeEnumeration
     * @return static
     **/
    public function setPriceType($priceType): static {
        $this->properties['priceType'] = $priceType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\PriceTypeEnumeration
     **/
    public function getPriceType() {
        return $this->properties['priceType'];
    }
    /**
     * This property links to all [[UnitPriceSpecification]] nodes that apply in
     * parallel for the [[CompoundPriceSpecification]] node.
     *
     * @param $priceComponent \LengthOfRope\JSONLD\Schema\UnitPriceSpecification
     * @return static
     **/
    public function setPriceComponent($priceComponent): static {
        $this->properties['priceComponent'] = $priceComponent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\UnitPriceSpecification
     **/
    public function getPriceComponent() {
        return $this->properties['priceComponent'];
    }
}
