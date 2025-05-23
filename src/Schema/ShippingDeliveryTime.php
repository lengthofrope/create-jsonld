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
 * ShippingDeliveryTime provides various pieces of information about delivery times
 * for shipping.
 *
 * @see https://schema.org/ShippingDeliveryTime
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ShippingDeliveryTime extends StructuredValue
{
    public static function factory(): ShippingDeliveryTime
    {
        return new ShippingDeliveryTime('https://schema.org/', 'ShippingDeliveryTime');
    }

    /**
     * Order cutoff time allows merchants to describe the time after which they will no
     * longer process orders received on that day. For orders processed after cutoff
     * time, one day gets added to the delivery time estimate. This property is
     * expected to be most typically used via the [[ShippingRateSettings]] publication
     * pattern. The time is indicated using the ISO-8601 Time format, e.g.
     * "23:30:00-05:00" would represent 6:30 pm Eastern Standard Time (EST) which is 5
     * hours behind Coordinated Universal Time (UTC).
     *
     * @param $cutoffTime \LengthOfRope\JSONLD\DataType\TypeTime
     * @return static
     **/
    public function setCutoffTime($cutoffTime): static {
        $this->properties['cutoffTime'] = $cutoffTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeTime
     **/
    public function getCutoffTime() {
        return $this->properties['cutoffTime'];
    }
    /**
     * Days of the week when the merchant typically operates, indicated via opening
     * hours markup.
     *
     * @param $businessDays \LengthOfRope\JSONLD\Schema\OpeningHoursSpecification|\LengthOfRope\JSONLD\Schema\DayOfWeek
     * @return static
     **/
    public function setBusinessDays($businessDays): static {
        $this->properties['businessDays'] = $businessDays;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\OpeningHoursSpecification|\LengthOfRope\JSONLD\Schema\DayOfWeek
     **/
    public function getBusinessDays() {
        return $this->properties['businessDays'];
    }
    /**
     * The typical delay the order has been sent for delivery and the goods reach the
     * final customer.
     *
     * In the context of [[ShippingDeliveryTime]], use the [[QuantitativeValue]].
     * Typical properties: minValue, maxValue, unitCode (d for DAY).
     *
     * In the context of [[ShippingConditions]], use the [[ServicePeriod]]. It has a
     * duration (as a [[QuantitativeValue]]) and also business days and a cut-off time.
     *
     *
     * @param $transitTime \LengthOfRope\JSONLD\Schema\ServicePeriod|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setTransitTime($transitTime): static {
        $this->properties['transitTime'] = $transitTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ServicePeriod|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getTransitTime() {
        return $this->properties['transitTime'];
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
