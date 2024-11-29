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
 * A contact point&#x2014;for example, a Customer Complaints department.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ContactPointSchema extends StructuredValueSchema
{
    public static function factory(): ContactPointSchema
    {
        return new ContactPointSchema('https://schema.org/', 'ContactPoint');
    }

    /**
     * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
     *
     * @param $contactType 
     * @return static
     **/
    public function setContactType($contactType): static {
        $this->properties['contactType'] = $contactType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getContactType() {
        return $this->properties['contactType'];
    }

    /**
     * The telephone number.
     *
     * @param $telephone 
     * @return static
     **/
    public function setTelephone($telephone): static {
        $this->properties['telephone'] = $telephone;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTelephone() {
        return $this->properties['telephone'];
    }

    /**
     * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
     *
     * @param $productSupported |
     * @return static
     **/
    public function setProductSupported($productSupported): static {
        $this->properties['productSupported'] = $productSupported;

        return $this;
    }

    /**
     * @return |
     **/
    public function getProductSupported() {
        return $this->properties['productSupported'];
    }

    /**
     * The fax number.
     *
     * @param $faxNumber 
     * @return static
     **/
    public function setFaxNumber($faxNumber): static {
        $this->properties['faxNumber'] = $faxNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFaxNumber() {
        return $this->properties['faxNumber'];
    }

    /**
     * Email address.
     *
     * @param $email 
     * @return static
     **/
    public function setEmail($email): static {
        $this->properties['email'] = $email;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEmail() {
        return $this->properties['email'];
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
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
     *
     * @param $contactOption 
     * @return static
     **/
    public function setContactOption($contactOption): static {
        $this->properties['contactOption'] = $contactOption;

        return $this;
    }

    /**
     * @return 
     **/
    public function getContactOption() {
        return $this->properties['contactOption'];
    }

    /**
     * The geographic area where the service is provided.
     *
     * @param $serviceArea ||
     * @return static
     **/
    public function setServiceArea($serviceArea): static {
        $this->properties['serviceArea'] = $serviceArea;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getServiceArea() {
        return $this->properties['serviceArea'];
    }

    /**
     * The hours during which this service or contact is available.
     *
     * @param $hoursAvailable 
     * @return static
     **/
    public function setHoursAvailable($hoursAvailable): static {
        $this->properties['hoursAvailable'] = $hoursAvailable;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHoursAvailable() {
        return $this->properties['hoursAvailable'];
    }

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     * @param $availableLanguage |
     * @return static
     **/
    public function setAvailableLanguage($availableLanguage): static {
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
