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
        return new PostalAddressSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The country. For example, USA. You can also provide the two-letter <a href='http://en.wikipedia.org/wiki/ISO_3166-1'>ISO 3166-1 alpha-2 country code</a>.
     **/
    private $addressCountry;
    public function setAddressCountry($addressCountry) {
        $this->addressCountry = $addressCountry;

        return $this;
    }

    /**
     * @return TextSchema|CountrySchema     **/
    public function getAddressCountry() {
        return $this->addressCountry;
    }

    /**
     * The locality. For example, Mountain View.
     **/
    private $addressLocality;
    public function setAddressLocality($addressLocality) {
        $this->addressLocality = $addressLocality;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getAddressLocality() {
        return $this->addressLocality;
    }

    /**
     * The region. For example, CA.
     **/
    private $addressRegion;
    public function setAddressRegion($addressRegion) {
        $this->addressRegion = $addressRegion;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getAddressRegion() {
        return $this->addressRegion;
    }

    /**
     * The post office box number for PO box addresses.
     **/
    private $postOfficeBoxNumber;
    public function setPostOfficeBoxNumber($postOfficeBoxNumber) {
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPostOfficeBoxNumber() {
        return $this->postOfficeBoxNumber;
    }

    /**
     * The postal code. For example, 94043.
     **/
    private $postalCode;
    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPostalCode() {
        return $this->postalCode;
    }

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     **/
    private $streetAddress;
    public function setStreetAddress($streetAddress) {
        $this->streetAddress = $streetAddress;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getStreetAddress() {
        return $this->streetAddress;
    }


}
