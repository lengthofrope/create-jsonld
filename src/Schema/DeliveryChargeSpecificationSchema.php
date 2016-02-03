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
 * The price for the delivery of an offer using a particular delivery method.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DeliveryChargeSpecificationSchema extends PriceSpecificationSchema
{
    public static function factory()
    {
        return new DeliveryChargeSpecificationSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     **/
    private $appliesToDeliveryMethod;
    public function setAppliesToDeliveryMethod($appliesToDeliveryMethod) {
        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;

        return $this;
    }

    /**
     * @return DeliveryMethodSchema     
     **/
    public function getAppliesToDeliveryMethod() {
        return $this->appliesToDeliveryMethod;
    }

    /**
     * The geographic area where a service or offered item is provided.
     **/
    private $areaServed;
    public function setAreaServed($areaServed) {
        $this->areaServed = $areaServed;

        return $this;
    }

    /**
     * @return PlaceSchema|AdministrativeAreaSchema|GeoShapeSchema|TextSchema     
     **/
    public function getAreaServed() {
        return $this->areaServed;
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
      <br><br> See also <a href="/ineligibleRegion">ineligibleRegion</a>.
    
     **/
    private $eligibleRegion;
    public function setEligibleRegion($eligibleRegion) {
        $this->eligibleRegion = $eligibleRegion;

        return $this;
    }

    /**
     * @return GeoShapeSchema|PlaceSchema|TextSchema     
     **/
    public function getEligibleRegion() {
        return $this->eligibleRegion;
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.
      <br><br> See also <a href="/eligibleRegion">eligibleRegion</a>.
      
     **/
    private $ineligibleRegion;
    public function setIneligibleRegion($ineligibleRegion) {
        $this->ineligibleRegion = $ineligibleRegion;

        return $this;
    }

    /**
     * @return GeoShapeSchema|PlaceSchema|TextSchema     
     **/
    public function getIneligibleRegion() {
        return $this->ineligibleRegion;
    }


}
