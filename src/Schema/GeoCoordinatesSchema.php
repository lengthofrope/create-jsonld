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
 * The geographic coordinates of a place or event.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class GeoCoordinatesSchema extends StructuredValueSchema
{
    public static function factory()
    {
        return new GeoCoordinatesSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * Physical address of the item.
     **/
    private $address;
    public function setAddress($address) {
        $this->address = $address;

        return $this;
    }

    /**
     * @return PostalAddressSchema|TextSchema     **/
    public function getAddress() {
        return $this->address;
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
     * The elevation of a location (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
     **/
    private $elevation;
    public function setElevation($elevation) {
        $this->elevation = $elevation;

        return $this;
    }

    /**
     * @return NumberSchema|TextSchema     **/
    public function getElevation() {
        return $this->elevation;
    }

    /**
     * The latitude of a location. For example <code>37.42242</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
     **/
    private $latitude;
    public function setLatitude($latitude) {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return NumberSchema|TextSchema     **/
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * The longitude of a location. For example <code>-122.08585</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
     **/
    private $longitude;
    public function setLongitude($longitude) {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return NumberSchema|TextSchema     **/
    public function getLongitude() {
        return $this->longitude;
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


}
