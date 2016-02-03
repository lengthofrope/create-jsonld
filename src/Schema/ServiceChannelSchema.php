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
 * A means for accessing a service, e.g. a government office location, web site, or phone number.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ServiceChannelSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new ServiceChannelSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * A language someone may use with the item.
     **/
    private $availableLanguage;
    public function setAvailableLanguage($availableLanguage) {
        $this->availableLanguage = $availableLanguage;

        return $this;
    }

    /**
     * @return LanguageSchema     **/
    public function getAvailableLanguage() {
        return $this->availableLanguage;
    }

    /**
     * Estimated processing time for the service using this channel.
     **/
    private $processingTime;
    public function setProcessingTime($processingTime) {
        $this->processingTime = $processingTime;

        return $this;
    }

    /**
     * @return DurationSchema     **/
    public function getProcessingTime() {
        return $this->processingTime;
    }

    /**
     * The service provided by this channel.
     **/
    private $providesService;
    public function setProvidesService($providesService) {
        $this->providesService = $providesService;

        return $this;
    }

    /**
     * @return ServiceSchema     **/
    public function getProvidesService() {
        return $this->providesService;
    }

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     **/
    private $serviceLocation;
    public function setServiceLocation($serviceLocation) {
        $this->serviceLocation = $serviceLocation;

        return $this;
    }

    /**
     * @return PlaceSchema     **/
    public function getServiceLocation() {
        return $this->serviceLocation;
    }

    /**
     * The phone number to use to access the service.
     **/
    private $servicePhone;
    public function setServicePhone($servicePhone) {
        $this->servicePhone = $servicePhone;

        return $this;
    }

    /**
     * @return ContactPointSchema     **/
    public function getServicePhone() {
        return $this->servicePhone;
    }

    /**
     * The address for accessing the service by mail.
     **/
    private $servicePostalAddress;
    public function setServicePostalAddress($servicePostalAddress) {
        $this->servicePostalAddress = $servicePostalAddress;

        return $this;
    }

    /**
     * @return PostalAddressSchema     **/
    public function getServicePostalAddress() {
        return $this->servicePostalAddress;
    }

    /**
     * The number to access the service by text message.
     **/
    private $serviceSmsNumber;
    public function setServiceSmsNumber($serviceSmsNumber) {
        $this->serviceSmsNumber = $serviceSmsNumber;

        return $this;
    }

    /**
     * @return ContactPointSchema     **/
    public function getServiceSmsNumber() {
        return $this->serviceSmsNumber;
    }

    /**
     * The website to access the service.
     **/
    private $serviceUrl;
    public function setServiceUrl($serviceUrl) {
        $this->serviceUrl = $serviceUrl;

        return $this;
    }

    /**
     * @return URLSchema     **/
    public function getServiceUrl() {
        return $this->serviceUrl;
    }


}
