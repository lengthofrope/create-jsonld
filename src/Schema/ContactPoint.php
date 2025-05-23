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
 * @see https://schema.org/ContactPoint
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ContactPoint extends StructuredValue
{
    public static function factory(): ContactPoint
    {
        return new ContactPoint('https://schema.org/', 'ContactPoint');
    }

    /**
     * An option available on this contact point (e.g. a toll-free number or support
     * for hearing-impaired callers).
     *
     * @param $contactOption \LengthOfRope\JSONLD\Schema\ContactPointOption
     * @return static
     **/
    public function setContactOption($contactOption): static {
        $this->properties['contactOption'] = $contactOption;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ContactPointOption
     **/
    public function getContactOption() {
        return $this->properties['contactOption'];
    }
    /**
     * A person or organization can have different contact points, for different
     * purposes. For example, a sales contact point, a PR contact point and so on. This
     * property is used to specify the kind of contact point.
     *
     * @param $contactType \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setContactType($contactType): static {
        $this->properties['contactType'] = $contactType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getContactType() {
        return $this->properties['contactType'];
    }
    /**
     * The telephone number.
     *
     * @param $telephone \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTelephone($telephone): static {
        $this->properties['telephone'] = $telephone;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTelephone() {
        return $this->properties['telephone'];
    }
    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param $areaServed \LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     * @return static
     **/
    public function setAreaServed($areaServed): static {
        $this->properties['areaServed'] = $areaServed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     **/
    public function getAreaServed() {
        return $this->properties['areaServed'];
    }
    /**
     * The hours during which this service or contact is available.
     *
     * @param $hoursAvailable \LengthOfRope\JSONLD\Schema\OpeningHoursSpecification
     * @return static
     **/
    public function setHoursAvailable($hoursAvailable): static {
        $this->properties['hoursAvailable'] = $hoursAvailable;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\OpeningHoursSpecification
     **/
    public function getHoursAvailable() {
        return $this->properties['hoursAvailable'];
    }
    /**
     * The product or service this support contact point is related to (such as product
     * support for a particular product line). This can be a specific product or
     * product line (e.g. "iPhone") or a general category of products or services (e.g.
     * "smartphones").
     *
     * @param $productSupported \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Product
     * @return static
     **/
    public function setProductSupported($productSupported): static {
        $this->properties['productSupported'] = $productSupported;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Product
     **/
    public function getProductSupported() {
        return $this->properties['productSupported'];
    }
    /**
     * The geographic area where the service is provided.
     *
     * @param $serviceArea \LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\Schema\AdministrativeArea|\LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setServiceArea($serviceArea): static {
        $this->properties['serviceArea'] = $serviceArea;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\Schema\AdministrativeArea|\LengthOfRope\JSONLD\Schema\Place
     **/
    public function getServiceArea() {
        return $this->properties['serviceArea'];
    }
    /**
     * Email address.
     *
     * @param $email \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEmail($email): static {
        $this->properties['email'] = $email;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEmail() {
        return $this->properties['email'];
    }
    /**
     * The fax number.
     *
     * @param $faxNumber \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setFaxNumber($faxNumber): static {
        $this->properties['faxNumber'] = $faxNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getFaxNumber() {
        return $this->properties['faxNumber'];
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
}
