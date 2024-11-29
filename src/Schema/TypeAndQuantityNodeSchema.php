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
 * A structured value indicating the quantity, unit of measurement, and business function of goods included in a bundle offer.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TypeAndQuantityNodeSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new TypeAndQuantityNodeSchema('https://schema.org/', 'TypeAndQuantityNode');
    }

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
     *
     * @param $unitCode |
     **/
    public function setUnitCode($unitCode) {
        $this->properties['unitCode'] = $unitCode;

        return $this;
    }

    /**
     * @return |
     **/
    public function getUnitCode() {
        return $this->properties['unitCode'];
    }

    /**
     * The quantity of the goods included in the offer.
     *
     * @param $amountOfThisGood 
     **/
    public function setAmountOfThisGood($amountOfThisGood) {
        $this->properties['amountOfThisGood'] = $amountOfThisGood;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAmountOfThisGood() {
        return $this->properties['amountOfThisGood'];
    }

    /**
     * The product that this structured value is referring to.
     *
     * @param $typeOfGood |
     **/
    public function setTypeOfGood($typeOfGood) {
        $this->properties['typeOfGood'] = $typeOfGood;

        return $this;
    }

    /**
     * @return |
     **/
    public function getTypeOfGood() {
        return $this->properties['typeOfGood'];
    }

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     *
     * @param $businessFunction 
     **/
    public function setBusinessFunction($businessFunction) {
        $this->properties['businessFunction'] = $businessFunction;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBusinessFunction() {
        return $this->properties['businessFunction'];
    }

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
<a href='unitCode'>unitCode</a>.
     *
     * @param $unitText 
     **/
    public function setUnitText($unitText) {
        $this->properties['unitText'] = $unitText;

        return $this;
    }

    /**
     * @return 
     **/
    public function getUnitText() {
        return $this->properties['unitText'];
    }


}
