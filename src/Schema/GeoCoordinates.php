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
 * The geographic coordinates of a place or event.
 *
 * @see https://schema.org/GeoCoordinates
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class GeoCoordinates extends StructuredValue
{
    public static function factory(): GeoCoordinates
    {
        return new GeoCoordinates('https://schema.org/', 'GeoCoordinates');
    }

    /**
     * The country. Recommended to be in 2-letter [ISO 3166-1
     * alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1) format, for example "US". For
     * backward compatibility, a 3-letter [ISO 3166-1
     * alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country code such as
     * "SGP" or a full country name such as "Singapore" can also be used.
     *
     * @param $addressCountry \LengthOfRope\JSONLD\Schema\Country|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAddressCountry($addressCountry): static {
        $this->properties['addressCountry'] = $addressCountry;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Country|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAddressCountry() {
        return $this->properties['addressCountry'];
    }
    /**
     * The elevation of a location ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the
     * form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers
     * alone should be assumed to be a value in meters.
     *
     * @param $elevation \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setElevation($elevation): static {
        $this->properties['elevation'] = $elevation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getElevation() {
        return $this->properties['elevation'];
    }
    /**
     * Physical address of the item.
     *
     * @param $address \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\PostalAddress
     * @return static
     **/
    public function setAddress($address): static {
        $this->properties['address'] = $address;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\PostalAddress
     **/
    public function getAddress() {
        return $this->properties['address'];
    }
    /**
     * The postal code. For example, 94043.
     *
     * @param $postalCode \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setPostalCode($postalCode): static {
        $this->properties['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getPostalCode() {
        return $this->properties['postalCode'];
    }
    /**
     * The longitude of a location. For example ```-122.08585``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param $longitude \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setLongitude($longitude): static {
        $this->properties['longitude'] = $longitude;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getLongitude() {
        return $this->properties['longitude'];
    }
    /**
     * The latitude of a location. For example ```37.42242``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param $latitude \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setLatitude($latitude): static {
        $this->properties['latitude'] = $latitude;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getLatitude() {
        return $this->properties['latitude'];
    }
}
