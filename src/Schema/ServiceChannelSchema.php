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
        return new ServiceChannelSchema('https://schema.org/', 'ServiceChannel');
    }

    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     *
     * @param $serviceLocation 
     **/
    public function setServiceLocation($serviceLocation) {
        $this->properties['serviceLocation'] = $serviceLocation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getServiceLocation() {
        return $this->properties['serviceLocation'];
    }

    /**
     * The phone number to use to access the service.
     *
     * @param $servicePhone 
     **/
    public function setServicePhone($servicePhone) {
        $this->properties['servicePhone'] = $servicePhone;

        return $this;
    }

    /**
     * @return 
     **/
    public function getServicePhone() {
        return $this->properties['servicePhone'];
    }

    /**
     * The number to access the service by text message.
     *
     * @param $serviceSmsNumber 
     **/
    public function setServiceSmsNumber($serviceSmsNumber) {
        $this->properties['serviceSmsNumber'] = $serviceSmsNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getServiceSmsNumber() {
        return $this->properties['serviceSmsNumber'];
    }

    /**
     * The website to access the service.
     *
     * @param $serviceUrl 
     **/
    public function setServiceUrl($serviceUrl) {
        $this->properties['serviceUrl'] = $serviceUrl;

        return $this;
    }

    /**
     * @return 
     **/
    public function getServiceUrl() {
        return $this->properties['serviceUrl'];
    }

    /**
     * Estimated processing time for the service using this channel.
     *
     * @param $processingTime 
     **/
    public function setProcessingTime($processingTime) {
        $this->properties['processingTime'] = $processingTime;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProcessingTime() {
        return $this->properties['processingTime'];
    }

    /**
     * The address for accessing the service by mail.
     *
     * @param $servicePostalAddress 
     **/
    public function setServicePostalAddress($servicePostalAddress) {
        $this->properties['servicePostalAddress'] = $servicePostalAddress;

        return $this;
    }

    /**
     * @return 
     **/
    public function getServicePostalAddress() {
        return $this->properties['servicePostalAddress'];
    }

    /**
     * The service provided by this channel.
     *
     * @param $providesService 
     **/
    public function setProvidesService($providesService) {
        $this->properties['providesService'] = $providesService;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProvidesService() {
        return $this->properties['providesService'];
    }

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     * @param $availableLanguage |
     **/
    public function setAvailableLanguage($availableLanguage) {
        $this->properties['availableLanguage'] = $availableLanguage;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAvailableLanguage() {
        return $this->properties['availableLanguage'];
    }


}
