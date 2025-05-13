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
 * The geographic shape of a place. A GeoShape can be described using several
 * properties whose values are based on latitude/longitude pairs. Either whitespace
 * or commas can be used to separate latitude and longitude; whitespace should be
 * used when writing a list of several such points.
 *
 * @see https://schema.org/GeoShape
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class GeoShape extends StructuredValue
{
    public static function factory(): GeoShape
    {
        return new GeoShape('https://schema.org/', 'GeoShape');
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
     * A box is the area enclosed by the rectangle formed by two points. The first
     * point is the lower corner, the second point is the upper corner. A box is
     * expressed as two points separated by a space character.
     *
     * @param $box \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setBox($box): static {
        $this->properties['box'] = $box;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getBox() {
        return $this->properties['box'];
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
     * A line is a point-to-point path consisting of two or more points. A line is
     * expressed as a series of two or more point objects separated by space.
     *
     * @param $line \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setLine($line): static {
        $this->properties['line'] = $line;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getLine() {
        return $this->properties['line'];
    }
    /**
     * A circle is the circular region of a specified radius centered at a specified
     * latitude and longitude. A circle is expressed as a pair followed by a radius in
     * meters.
     *
     * @param $circle \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCircle($circle): static {
        $this->properties['circle'] = $circle;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCircle() {
        return $this->properties['circle'];
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
     * A polygon is the area enclosed by a point-to-point path for which the starting
     * and ending points are the same. A polygon is expressed as a series of four or
     * more space delimited points where the first and final points are identical.
     *
     * @param $polygon \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setPolygon($polygon): static {
        $this->properties['polygon'] = $polygon;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getPolygon() {
        return $this->properties['polygon'];
    }
}
