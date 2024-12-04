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
 * The price for the delivery of an offer using a particular delivery method.
 *
 * @see https://schema.org/DeliveryChargeSpecification
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DeliveryChargeSpecification extends PriceSpecification
{
    public static function factory(): DeliveryChargeSpecification
    {
        return new DeliveryChargeSpecification('https://schema.org/', 'DeliveryChargeSpecification');
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery charge
     * specification is not valid, e.g. a region where the transaction is not allowed.
     *
     * See also [[eligibleRegion]].
     *
     *
     * @param $ineligibleRegion ||
     * @return static
     **/
    public function setIneligibleRegion($ineligibleRegion): static {
        $this->properties['ineligibleRegion'] = $ineligibleRegion;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getIneligibleRegion() {
        return $this->properties['ineligibleRegion'];
    }
    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param $areaServed |||
     * @return static
     **/
    public function setAreaServed($areaServed): static {
        $this->properties['areaServed'] = $areaServed;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getAreaServed() {
        return $this->properties['areaServed'];
    }
    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery charge
     * specification is valid.
     *
     * See also [[ineligibleRegion]].
     *
     *
     * @param $eligibleRegion ||
     * @return static
     **/
    public function setEligibleRegion($eligibleRegion): static {
        $this->properties['eligibleRegion'] = $eligibleRegion;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getEligibleRegion() {
        return $this->properties['eligibleRegion'];
    }
    /**
     * The delivery method(s) to which the delivery charge or payment charge
     * specification applies.
     *
     * @param $appliesToDeliveryMethod 
     * @return static
     **/
    public function setAppliesToDeliveryMethod($appliesToDeliveryMethod): static {
        $this->properties['appliesToDeliveryMethod'] = $appliesToDeliveryMethod;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAppliesToDeliveryMethod() {
        return $this->properties['appliesToDeliveryMethod'];
    }
}
