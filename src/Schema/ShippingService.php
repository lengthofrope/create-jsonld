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
 * ShippingService represents the criteria used to determine if and how an offer
 * could be shipped to a customer.
 *
 * @see https://schema.org/ShippingService
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ShippingService extends StructuredValue
{
    public static function factory(): ShippingService
    {
        return new ShippingService('https://schema.org/', 'ShippingService');
    }

    /**
     * Type of fulfillment applicable to the [[ShippingService]].
     *
     * @param $fulfillmentType \LengthOfRope\JSONLD\Schema\FulfillmentTypeEnumeration
     * @return static
     **/
    public function setFulfillmentType($fulfillmentType): static {
        $this->properties['fulfillmentType'] = $fulfillmentType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\FulfillmentTypeEnumeration
     **/
    public function getFulfillmentType() {
        return $this->properties['fulfillmentType'];
    }
    /**
     * The conditions (constraints, price) applicable to the [[ShippingService]].
     *
     * @param $shippingConditions \LengthOfRope\JSONLD\Schema\ShippingConditions
     * @return static
     **/
    public function setShippingConditions($shippingConditions): static {
        $this->properties['shippingConditions'] = $shippingConditions;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ShippingConditions
     **/
    public function getShippingConditions() {
        return $this->properties['shippingConditions'];
    }
    /**
     * The membership program tier an Offer (or a PriceSpecification,
     * OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
     *
     * @param $validForMemberTier \LengthOfRope\JSONLD\Schema\MemberProgramTier
     * @return static
     **/
    public function setValidForMemberTier($validForMemberTier): static {
        $this->properties['validForMemberTier'] = $validForMemberTier;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MemberProgramTier
     **/
    public function getValidForMemberTier() {
        return $this->properties['validForMemberTier'];
    }
    /**
     * The typical delay between the receipt of the order and the goods either leaving
     * the warehouse or being prepared for pickup, in case the delivery method is on
     * site pickup.
     *
     * In the context of [[ShippingDeliveryTime]], Typical properties: minValue,
     * maxValue, unitCode (d for DAY).  This is by common convention assumed to mean
     * business days (if a unitCode is used, coded as "d"), i.e. only counting days
     * when the business normally operates.
     *
     * In the context of [[ShippingService]], use the [[ServicePeriod]] format, that
     * contains the same information in a structured form, with cut-off time, business
     * days and duration.
     *
     * @param $handlingTime \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\ServicePeriod
     * @return static
     **/
    public function setHandlingTime($handlingTime): static {
        $this->properties['handlingTime'] = $handlingTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\ServicePeriod
     **/
    public function getHandlingTime() {
        return $this->properties['handlingTime'];
    }
}
