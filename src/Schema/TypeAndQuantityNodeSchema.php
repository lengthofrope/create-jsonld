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
class TypeAndQuantityNodeSchema extends StructuredValueSchema
{
    public static function factory()
    {
        return new TypeAndQuantityNodeSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The quantity of the goods included in the offer.
     **/
    private $amountOfThisGood;
    public function setAmountOfThisGood($amountOfThisGood) {
        $this->amountOfThisGood = $amountOfThisGood;

        return $this;
    }

    /**
     * @return NumberSchema     **/
    public function getAmountOfThisGood() {
        return $this->amountOfThisGood;
    }

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     **/
    private $businessFunction;
    public function setBusinessFunction($businessFunction) {
        $this->businessFunction = $businessFunction;

        return $this;
    }

    /**
     * @return BusinessFunctionSchema     **/
    public function getBusinessFunction() {
        return $this->businessFunction;
    }

    /**
     * The product that this structured value is referring to.
     **/
    private $typeOfGood;
    public function setTypeOfGood($typeOfGood) {
        $this->typeOfGood = $typeOfGood;

        return $this;
    }

    /**
     * @return ProductSchema     **/
    public function getTypeOfGood() {
        return $this->typeOfGood;
    }

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
     **/
    private $unitCode;
    public function setUnitCode($unitCode) {
        $this->unitCode = $unitCode;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getUnitCode() {
        return $this->unitCode;
    }

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
<a href='unitCode'>unitCode</a>.
     **/
    private $unitText;
    public function setUnitText($unitText) {
        $this->unitText = $unitText;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getUnitText() {
        return $this->unitText;
    }


}
