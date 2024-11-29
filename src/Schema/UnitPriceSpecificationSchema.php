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
 * The price asked for a given offer by the respective organization or person.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class UnitPriceSpecificationSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new UnitPriceSpecificationSchema('https://schema.org/', 'UnitPriceSpecification');
    }

    /**
     * Identifies a price component (for example, a line item on an invoice), part of the total price for an offer.
     *
     * @param $priceComponentType 
     **/
    public function setPriceComponentType($priceComponentType) {
        $this->properties['priceComponentType'] = $priceComponentType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPriceComponentType() {
        return $this->properties['priceComponentType'];
    }

    /**
     * Defines the type of a price specified for an offered product, for example a list price, a (temporary) sale price or a manufacturer suggested retail price. If multiple prices are specified for an offer the [[priceType]] property can be used to identify the type of each such specified price. The value of priceType can be specified as a value from enumeration PriceTypeEnumeration or as a free form text string for price types that are not already predefined in PriceTypeEnumeration.
     *
     * @param $priceType |
     **/
    public function setPriceType($priceType) {
        $this->properties['priceType'] = $priceType;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPriceType() {
        return $this->properties['priceType'];
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
     * The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh of electricity. This property is a replacement for unitOfMeasurement for the advanced cases where the price does not relate to a standard unit.
     *
     * @param $referenceQuantity 
     **/
    public function setReferenceQuantity($referenceQuantity) {
        $this->properties['referenceQuantity'] = $referenceQuantity;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReferenceQuantity() {
        return $this->properties['referenceQuantity'];
    }

    /**
     * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement is specified by the unitCode property.
     *
     * @param $billingIncrement 
     **/
    public function setBillingIncrement($billingIncrement) {
        $this->properties['billingIncrement'] = $billingIncrement;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBillingIncrement() {
        return $this->properties['billingIncrement'];
    }

    /**
     * Specifies for how long this price (or price component) will be billed. Can be used, for example, to model the contractual duration of a subscription or payment plan. Type can be either a Duration or a Number (in which case the unit of measurement, for example month, is specified by the unitCode property).
     *
     * @param $billingDuration ||
     **/
    public function setBillingDuration($billingDuration) {
        $this->properties['billingDuration'] = $billingDuration;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getBillingDuration() {
        return $this->properties['billingDuration'];
    }

    /**
     * Specifies after how much time this price (or price component) becomes valid and billing starts. Can be used, for example, to model a price increase after the first year of a subscription. The unit of measurement is specified by the unitCode property.
     *
     * @param $billingStart 
     **/
    public function setBillingStart($billingStart) {
        $this->properties['billingStart'] = $billingStart;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBillingStart() {
        return $this->properties['billingStart'];
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
