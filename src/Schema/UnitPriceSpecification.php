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
 * The price asked for a given offer by the respective organization or person.
 *
 * @see https://schema.org/UnitPriceSpecification
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class UnitPriceSpecification extends PriceSpecification
{
    public static function factory(): UnitPriceSpecification
    {
        return new UnitPriceSpecification('https://schema.org/', 'UnitPriceSpecification');
    }

    /**
     * Identifies a price component (for example, a line item on an invoice), part of
     * the total price for an offer.
     *
     * @param $priceComponentType \LengthOfRope\JSONLD\Schema\PriceComponentTypeEnumeration
     * @return static
     **/
    public function setPriceComponentType($priceComponentType): static {
        $this->properties['priceComponentType'] = $priceComponentType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PriceComponentTypeEnumeration
     **/
    public function getPriceComponentType() {
        return $this->properties['priceComponentType'];
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
     * @param $priceType \LengthOfRope\JSONLD\Schema\PriceTypeEnumeration|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setPriceType($priceType): static {
        $this->properties['priceType'] = $priceType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PriceTypeEnumeration|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getPriceType() {
        return $this->properties['priceType'];
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
     * The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh
     * of electricity. This property is a replacement for unitOfMeasurement for the
     * advanced cases where the price does not relate to a standard unit.
     *
     * @param $referenceQuantity \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setReferenceQuantity($referenceQuantity): static {
        $this->properties['referenceQuantity'] = $referenceQuantity;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getReferenceQuantity() {
        return $this->properties['referenceQuantity'];
    }
    /**
     * This property specifies the minimal quantity and rounding increment that will be
     * the basis for the billing. The unit of measurement is specified by the unitCode
     * property.
     *
     * @param $billingIncrement \LengthOfRope\JSONLD\DataType\Number
     * @return static
     **/
    public function setBillingIncrement($billingIncrement): static {
        $this->properties['billingIncrement'] = $billingIncrement;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Number
     **/
    public function getBillingIncrement() {
        return $this->properties['billingIncrement'];
    }
    /**
     * Specifies for how long this price (or price component) will be billed. Can be
     * used, for example, to model the contractual duration of a subscription or
     * payment plan. Type can be either a Duration or a Number (in which case the unit
     * of measurement, for example month, is specified by the unitCode property).
     *
     * @param $billingDuration \LengthOfRope\JSONLD\DataType\Number|\LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setBillingDuration($billingDuration): static {
        $this->properties['billingDuration'] = $billingDuration;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Number|\LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getBillingDuration() {
        return $this->properties['billingDuration'];
    }
    /**
     * Specifies after how much time this price (or price component) becomes valid and
     * billing starts. Can be used, for example, to model a price increase after the
     * first year of a subscription. The unit of measurement is specified by the
     * unitCode property.
     *
     * @param $billingStart \LengthOfRope\JSONLD\DataType\Number
     * @return static
     **/
    public function setBillingStart($billingStart): static {
        $this->properties['billingStart'] = $billingStart;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Number
     **/
    public function getBillingStart() {
        return $this->properties['billingStart'];
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
