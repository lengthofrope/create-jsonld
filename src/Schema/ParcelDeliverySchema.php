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
 * The delivery of a parcel either via the postal service or a commercial service.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ParcelDeliverySchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new ParcelDeliverySchema('https://schema.org/', 'ParcelDelivery');
    }

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
     *
     * @param $carrier 
     **/
    public function setCarrier($carrier) {
        $this->properties['carrier'] = $carrier;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCarrier() {
        return $this->properties['carrier'];
    }

    /**
     * Destination address.
     *
     * @param $deliveryAddress 
     **/
    public function setDeliveryAddress($deliveryAddress) {
        $this->properties['deliveryAddress'] = $deliveryAddress;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDeliveryAddress() {
        return $this->properties['deliveryAddress'];
    }

    /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     *
     * @param $deliveryStatus 
     **/
    public function setDeliveryStatus($deliveryStatus) {
        $this->properties['deliveryStatus'] = $deliveryStatus;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDeliveryStatus() {
        return $this->properties['deliveryStatus'];
    }

    /**
     * The overall order the items in this delivery were included in.
     *
     * @param $partOfOrder 
     **/
    public function setPartOfOrder($partOfOrder) {
        $this->properties['partOfOrder'] = $partOfOrder;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPartOfOrder() {
        return $this->properties['partOfOrder'];
    }

    /**
     * Shipper tracking number.
     *
     * @param $trackingNumber 
     **/
    public function setTrackingNumber($trackingNumber) {
        $this->properties['trackingNumber'] = $trackingNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTrackingNumber() {
        return $this->properties['trackingNumber'];
    }

    /**
     * Shipper's address.
     *
     * @param $originAddress 
     **/
    public function setOriginAddress($originAddress) {
        $this->properties['originAddress'] = $originAddress;

        return $this;
    }

    /**
     * @return 
     **/
    public function getOriginAddress() {
        return $this->properties['originAddress'];
    }

    /**
     * Tracking url for the parcel delivery.
     *
     * @param $trackingUrl 
     **/
    public function setTrackingUrl($trackingUrl) {
        $this->properties['trackingUrl'] = $trackingUrl;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTrackingUrl() {
        return $this->properties['trackingUrl'];
    }

    /**
     * Item(s) being shipped.
     *
     * @param $itemShipped 
     **/
    public function setItemShipped($itemShipped) {
        $this->properties['itemShipped'] = $itemShipped;

        return $this;
    }

    /**
     * @return 
     **/
    public function getItemShipped() {
        return $this->properties['itemShipped'];
    }

    /**
     * The latest date the package may arrive.
     *
     * @param $expectedArrivalUntil |
     **/
    public function setExpectedArrivalUntil($expectedArrivalUntil) {
        $this->properties['expectedArrivalUntil'] = $expectedArrivalUntil;

        return $this;
    }

    /**
     * @return |
     **/
    public function getExpectedArrivalUntil() {
        return $this->properties['expectedArrivalUntil'];
    }

    /**
     * Method used for delivery or shipping.
     *
     * @param $hasDeliveryMethod 
     **/
    public function setHasDeliveryMethod($hasDeliveryMethod) {
        $this->properties['hasDeliveryMethod'] = $hasDeliveryMethod;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasDeliveryMethod() {
        return $this->properties['hasDeliveryMethod'];
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     * @param $provider |
     **/
    public function setProvider($provider) {
        $this->properties['provider'] = $provider;

        return $this;
    }

    /**
     * @return |
     **/
    public function getProvider() {
        return $this->properties['provider'];
    }

    /**
     * The earliest date the package may arrive.
     *
     * @param $expectedArrivalFrom |
     **/
    public function setExpectedArrivalFrom($expectedArrivalFrom) {
        $this->properties['expectedArrivalFrom'] = $expectedArrivalFrom;

        return $this;
    }

    /**
     * @return |
     **/
    public function getExpectedArrivalFrom() {
        return $this->properties['expectedArrivalFrom'];
    }


}
