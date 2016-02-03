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
 * A contact point&#x2014;for example, a Customer Complaints department.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ContactPointSchema extends StructuredValueSchema
{
    public static function factory()
    {
        return new ContactPointSchema();
    }

    public function getDataArray()
    {
        return array();
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
     * A language someone may use with the item.
     **/
    private $availableLanguage;
    public function setAvailableLanguage($availableLanguage) {
        $this->availableLanguage = $availableLanguage;

        return $this;
    }

    /**
     * @return LanguageSchema     
     **/
    public function getAvailableLanguage() {
        return $this->availableLanguage;
    }

    /**
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
     **/
    private $contactOption;
    public function setContactOption($contactOption) {
        $this->contactOption = $contactOption;

        return $this;
    }

    /**
     * @return ContactPointOptionSchema     
     **/
    public function getContactOption() {
        return $this->contactOption;
    }

    /**
     * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
     **/
    private $contactType;
    public function setContactType($contactType) {
        $this->contactType = $contactType;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getContactType() {
        return $this->contactType;
    }

    /**
     * Email address.
     **/
    private $email;
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getEmail() {
        return $this->email;
    }

    /**
     * The fax number.
     **/
    private $faxNumber;
    public function setFaxNumber($faxNumber) {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getFaxNumber() {
        return $this->faxNumber;
    }

    /**
     * The hours during which this service or contact is available.
     **/
    private $hoursAvailable;
    public function setHoursAvailable($hoursAvailable) {
        $this->hoursAvailable = $hoursAvailable;

        return $this;
    }

    /**
     * @return OpeningHoursSpecificationSchema     
     **/
    public function getHoursAvailable() {
        return $this->hoursAvailable;
    }

    /**
     * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
     **/
    private $productSupported;
    public function setProductSupported($productSupported) {
        $this->productSupported = $productSupported;

        return $this;
    }

    /**
     * @return ProductSchema|TextSchema     
     **/
    public function getProductSupported() {
        return $this->productSupported;
    }

    /**
     * The geographic area where the service is provided.
     **/
    private $serviceArea;
    public function setServiceArea($serviceArea) {
        $this->serviceArea = $serviceArea;

        return $this;
    }

    /**
     * @return PlaceSchema|AdministrativeAreaSchema|GeoShapeSchema     
     **/
    public function getServiceArea() {
        return $this->serviceArea;
    }

    /**
     * The telephone number.
     **/
    private $telephone;
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getTelephone() {
        return $this->telephone;
    }


}
