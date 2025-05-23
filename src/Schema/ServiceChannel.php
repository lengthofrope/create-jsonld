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
 * A means for accessing a service, e.g. a government office location, web site, or
 * phone number.
 *
 * @see https://schema.org/ServiceChannel
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ServiceChannel extends Intangible
{
    public static function factory(): ServiceChannel
    {
        return new ServiceChannel('https://schema.org/', 'ServiceChannel');
    }

    /**
     * The number to access the service by text message.
     *
     * @param $serviceSmsNumber \LengthOfRope\JSONLD\Schema\ContactPoint
     * @return static
     **/
    public function setServiceSmsNumber($serviceSmsNumber): static {
        $this->properties['serviceSmsNumber'] = $serviceSmsNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ContactPoint
     **/
    public function getServiceSmsNumber() {
        return $this->properties['serviceSmsNumber'];
    }
    /**
     * The phone number to use to access the service.
     *
     * @param $servicePhone \LengthOfRope\JSONLD\Schema\ContactPoint
     * @return static
     **/
    public function setServicePhone($servicePhone): static {
        $this->properties['servicePhone'] = $servicePhone;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ContactPoint
     **/
    public function getServicePhone() {
        return $this->properties['servicePhone'];
    }
    /**
     * The service provided by this channel.
     *
     * @param $providesService \LengthOfRope\JSONLD\Schema\Service
     * @return static
     **/
    public function setProvidesService($providesService): static {
        $this->properties['providesService'] = $providesService;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Service
     **/
    public function getProvidesService() {
        return $this->properties['providesService'];
    }
    /**
     * The website to access the service.
     *
     * @param $serviceUrl \LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setServiceUrl($serviceUrl): static {
        $this->properties['serviceUrl'] = $serviceUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getServiceUrl() {
        return $this->properties['serviceUrl'];
    }
    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go
     * to access the service.
     *
     * @param $serviceLocation \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setServiceLocation($serviceLocation): static {
        $this->properties['serviceLocation'] = $serviceLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getServiceLocation() {
        return $this->properties['serviceLocation'];
    }
    /**
     * A language someone may use with or at the item, service or place. Please use one
     * of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     * @param $availableLanguage \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAvailableLanguage($availableLanguage): static {
        $this->properties['availableLanguage'] = $availableLanguage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAvailableLanguage() {
        return $this->properties['availableLanguage'];
    }
    /**
     * Estimated processing time for the service using this channel.
     *
     * @param $processingTime \LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setProcessingTime($processingTime): static {
        $this->properties['processingTime'] = $processingTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getProcessingTime() {
        return $this->properties['processingTime'];
    }
    /**
     * The address for accessing the service by mail.
     *
     * @param $servicePostalAddress \LengthOfRope\JSONLD\Schema\PostalAddress
     * @return static
     **/
    public function setServicePostalAddress($servicePostalAddress): static {
        $this->properties['servicePostalAddress'] = $servicePostalAddress;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PostalAddress
     **/
    public function getServicePostalAddress() {
        return $this->properties['servicePostalAddress'];
    }
}
