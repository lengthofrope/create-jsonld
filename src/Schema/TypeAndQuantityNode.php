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
 * A structured value indicating the quantity, unit of measurement, and business
 * function of goods included in a bundle offer.
 *
 * @see https://schema.org/TypeAndQuantityNode
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TypeAndQuantityNode extends StructuredValue
{
    public static function factory(): TypeAndQuantityNode
    {
        return new TypeAndQuantityNode('https://schema.org/', 'TypeAndQuantityNode');
    }

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or
     * a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix
     * followed by a colon.
     *
     * @param $unitCode \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL
     * @return static
     **/
    public function setUnitCode($unitCode): static {
        $this->properties['unitCode'] = $unitCode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL
     **/
    public function getUnitCode() {
        return $this->properties['unitCode'];
    }
    /**
     * The quantity of the goods included in the offer.
     *
     * @param $amountOfThisGood \LengthOfRope\JSONLD\DataType\Number
     * @return static
     **/
    public function setAmountOfThisGood($amountOfThisGood): static {
        $this->properties['amountOfThisGood'] = $amountOfThisGood;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Number
     **/
    public function getAmountOfThisGood() {
        return $this->properties['amountOfThisGood'];
    }
    /**
     * The product that this structured value is referring to.
     *
     * @param $typeOfGood \LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\Schema\Service
     * @return static
     **/
    public function setTypeOfGood($typeOfGood): static {
        $this->properties['typeOfGood'] = $typeOfGood;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\Schema\Service
     **/
    public function getTypeOfGood() {
        return $this->properties['typeOfGood'];
    }
    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or
     * component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     *
     * @param $businessFunction \LengthOfRope\JSONLD\Schema\BusinessFunction
     * @return static
     **/
    public function setBusinessFunction($businessFunction): static {
        $this->properties['businessFunction'] = $businessFunction;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BusinessFunction
     **/
    public function getBusinessFunction() {
        return $this->properties['businessFunction'];
    }
    /**
     * A string or text indicating the unit of measurement. Useful if you cannot
     * provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     * @param $unitText \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setUnitText($unitText): static {
        $this->properties['unitText'] = $unitText;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getUnitText() {
        return $this->properties['unitText'];
    }
}
