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
 * A seasonal override of a return policy, for example used for holidays.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MerchantReturnPolicySeasonalOverrideSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new MerchantReturnPolicySeasonalOverrideSchema('https://schema.org/', 'MerchantReturnPolicySeasonalOverride');
    }

    /**
     * The type of return fees for purchased products (for any return reason).
     *
     * @param $returnFees 
     **/
    public function setReturnFees($returnFees) {
        $this->properties['returnFees'] = $returnFees;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReturnFees() {
        return $this->properties['returnFees'];
    }

    /**
     * The type of return method offered, specified from an enumeration.
     *
     * @param $returnMethod 
     **/
    public function setReturnMethod($returnMethod) {
        $this->properties['returnMethod'] = $returnMethod;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReturnMethod() {
        return $this->properties['returnMethod'];
    }

    /**
     * A refund type, from an enumerated list.
     *
     * @param $refundType 
     **/
    public function setRefundType($refundType) {
        $this->properties['refundType'] = $refundType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRefundType() {
        return $this->properties['refundType'];
    }

    /**
     * Amount of shipping costs for product returns (for any reason). Applicable when property [[returnFees]] equals [[ReturnShippingFees]].
     *
     * @param $returnShippingFeesAmount 
     **/
    public function setReturnShippingFeesAmount($returnShippingFeesAmount) {
        $this->properties['returnShippingFeesAmount'] = $returnShippingFeesAmount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReturnShippingFeesAmount() {
        return $this->properties['returnShippingFeesAmount'];
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $startDate |
     **/
    public function setStartDate($startDate) {
        $this->properties['startDate'] = $startDate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getStartDate() {
        return $this->properties['startDate'];
    }

    /**
     * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned. Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
     *
     * @param $merchantReturnDays ||
     **/
    public function setMerchantReturnDays($merchantReturnDays) {
        $this->properties['merchantReturnDays'] = $merchantReturnDays;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getMerchantReturnDays() {
        return $this->properties['merchantReturnDays'];
    }

    /**
     * Specifies an applicable return policy (from an enumeration).
     *
     * @param $returnPolicyCategory 
     **/
    public function setReturnPolicyCategory($returnPolicyCategory) {
        $this->properties['returnPolicyCategory'] = $returnPolicyCategory;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReturnPolicyCategory() {
        return $this->properties['returnPolicyCategory'];
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $endDate |
     **/
    public function setEndDate($endDate) {
        $this->properties['endDate'] = $endDate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getEndDate() {
        return $this->properties['endDate'];
    }

    /**
     * Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns, or use [[Number]] to specify a percentage of the product price paid by the customer.
     *
     * @param $restockingFee |
     **/
    public function setRestockingFee($restockingFee) {
        $this->properties['restockingFee'] = $restockingFee;

        return $this;
    }

    /**
     * @return |
     **/
    public function getRestockingFee() {
        return $this->properties['restockingFee'];
    }


}
