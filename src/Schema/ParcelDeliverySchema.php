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
class ParcelDeliverySchema extends IntangibleSchema
{
    public static function factory()
    {
        return new ParcelDeliverySchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
     **/
    private $carrier;
    public function setCarrier($carrier) {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return OrganizationSchema     **/
    public function getCarrier() {
        return $this->carrier;
    }

    /**
     * Destination address.
     **/
    private $deliveryAddress;
    public function setDeliveryAddress($deliveryAddress) {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * @return PostalAddressSchema     **/
    public function getDeliveryAddress() {
        return $this->deliveryAddress;
    }

    /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     **/
    private $deliveryStatus;
    public function setDeliveryStatus($deliveryStatus) {
        $this->deliveryStatus = $deliveryStatus;

        return $this;
    }

    /**
     * @return DeliveryEventSchema     **/
    public function getDeliveryStatus() {
        return $this->deliveryStatus;
    }

    /**
     * The earliest date the package may arrive.
     **/
    private $expectedArrivalFrom;
    public function setExpectedArrivalFrom($expectedArrivalFrom) {
        $this->expectedArrivalFrom = $expectedArrivalFrom;

        return $this;
    }

    /**
     * @return DateTimeSchema     **/
    public function getExpectedArrivalFrom() {
        return $this->expectedArrivalFrom;
    }

    /**
     * The latest date the package may arrive.
     **/
    private $expectedArrivalUntil;
    public function setExpectedArrivalUntil($expectedArrivalUntil) {
        $this->expectedArrivalUntil = $expectedArrivalUntil;

        return $this;
    }

    /**
     * @return DateTimeSchema     **/
    public function getExpectedArrivalUntil() {
        return $this->expectedArrivalUntil;
    }

    /**
     * Method used for delivery or shipping.
     **/
    private $hasDeliveryMethod;
    public function setHasDeliveryMethod($hasDeliveryMethod) {
        $this->hasDeliveryMethod = $hasDeliveryMethod;

        return $this;
    }

    /**
     * @return DeliveryMethodSchema     **/
    public function getHasDeliveryMethod() {
        return $this->hasDeliveryMethod;
    }

    /**
     * Item(s) being shipped.
     **/
    private $itemShipped;
    public function setItemShipped($itemShipped) {
        $this->itemShipped = $itemShipped;

        return $this;
    }

    /**
     * @return ProductSchema     **/
    public function getItemShipped() {
        return $this->itemShipped;
    }

    /**
     * Shipper's address.
     **/
    private $originAddress;
    public function setOriginAddress($originAddress) {
        $this->originAddress = $originAddress;

        return $this;
    }

    /**
     * @return PostalAddressSchema     **/
    public function getOriginAddress() {
        return $this->originAddress;
    }

    /**
     * The overall order the items in this delivery were included in.
     **/
    private $partOfOrder;
    public function setPartOfOrder($partOfOrder) {
        $this->partOfOrder = $partOfOrder;

        return $this;
    }

    /**
     * @return OrderSchema     **/
    public function getPartOfOrder() {
        return $this->partOfOrder;
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     **/
    private $provider;
    public function setProvider($provider) {
        $this->provider = $provider;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     **/
    public function getProvider() {
        return $this->provider;
    }

    /**
     * Shipper tracking number.
     **/
    private $trackingNumber;
    public function setTrackingNumber($trackingNumber) {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getTrackingNumber() {
        return $this->trackingNumber;
    }

    /**
     * Tracking url for the parcel delivery.
     **/
    private $trackingUrl;
    public function setTrackingUrl($trackingUrl) {
        $this->trackingUrl = $trackingUrl;

        return $this;
    }

    /**
     * @return URLSchema     **/
    public function getTrackingUrl() {
        return $this->trackingUrl;
    }


}
