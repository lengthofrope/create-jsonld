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
        return new GeoCoordinatesSchema('https://schema.org/', 'GeoCoordinates');
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
     * Physical address of the item.
     *
     * @param $address |
     **/
    public function setAddress($address) {
        $this->properties['address'] = $address;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAddress() {
        return $this->properties['address'];
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
     * The latitude of a location. For example ```37.42242``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param $latitude |
     **/
    public function setLatitude($latitude) {
        $this->properties['latitude'] = $latitude;

        return $this;
    }

    /**
     * @return |
     **/
    public function getLatitude() {
        return $this->properties['latitude'];
    }

    /**
     * The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
     *
     * @param $elevation |
     **/
    public function setElevation($elevation) {
        $this->properties['elevation'] = $elevation;

        return $this;
    }

    /**
     * @return |
     **/
    public function getElevation() {
        return $this->properties['elevation'];
    }

    /**
     * The longitude of a location. For example ```-122.08585``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param $longitude |
     **/
    public function setLongitude($longitude) {
        $this->properties['longitude'] = $longitude;

        return $this;
    }

    /**
     * @return |
     **/
    public function getLongitude() {
        return $this->properties['longitude'];
    }


}
