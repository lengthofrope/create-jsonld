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
 * The mailing address.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PostalAddressSchema extends ContactPointSchema
{
    public static function factory()
    {
        return new PostalAddressSchema('https://schema.org/', 'PostalAddress');
    }

    /**
     * The country. Recommended to be in 2-letter [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1) format, for example "US". For backward compatibility, a 3-letter [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country code such as "SGP" or a full country name such as "Singapore" can also be used.
     *
     * @param $addressCountry |
     **/
    public function setAddressCountry($addressCountry) {
        $this->properties['addressCountry'] = $addressCountry;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAddressCountry() {
        return $this->properties['addressCountry'];
    }

    /**
     * The postal code. For example, 94043.
     *
     * @param $postalCode 
     **/
    public function setPostalCode($postalCode) {
        $this->properties['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPostalCode() {
        return $this->properties['postalCode'];
    }

    /**
     * The locality in which the street address is, and which is in the region. For example, Mountain View.
     *
     * @param $addressLocality 
     **/
    public function setAddressLocality($addressLocality) {
        $this->properties['addressLocality'] = $addressLocality;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAddressLocality() {
        return $this->properties['addressLocality'];
    }

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     *
     * @param $streetAddress 
     **/
    public function setStreetAddress($streetAddress) {
        $this->properties['streetAddress'] = $streetAddress;

        return $this;
    }

    /**
     * @return 
     **/
    public function getStreetAddress() {
        return $this->properties['streetAddress'];
    }

    /**
     * The post office box number for PO box addresses.
     *
     * @param $postOfficeBoxNumber 
     **/
    public function setPostOfficeBoxNumber($postOfficeBoxNumber) {
        $this->properties['postOfficeBoxNumber'] = $postOfficeBoxNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPostOfficeBoxNumber() {
        return $this->properties['postOfficeBoxNumber'];
    }

    /**
     * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
     *
     * @param $addressRegion 
     **/
    public function setAddressRegion($addressRegion) {
        $this->properties['addressRegion'] = $addressRegion;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAddressRegion() {
        return $this->properties['addressRegion'];
    }


}
