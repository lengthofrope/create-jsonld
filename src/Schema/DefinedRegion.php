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
 * A DefinedRegion is a geographic area defined by potentially arbitrary (rather than political, administrative or natural geographical) criteria. Properties are provided for defining a region by reference to sets of postal codes.

 * Examples: a delivery destination when shopping. Region where regional pricing is configured.

 * Requirement 1:
 *  * Country: US
 * States: "NY", "CA"

 * Requirement 2:
 *  * Country: US
 * PostalCode Set: { [94000-94585], [97000, 97999], [13000, 13599]}
 * { [12345, 12345], [78945, 78945], }
 * Region = state, canton, prefecture, autonomous community...

 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DefinedRegion extends StructuredValue
{
    public static function factory(): DefinedRegion
    {
        return new DefinedRegion('https://schema.org/', 'DefinedRegion');
    }

    /**
     * The country. Recommended to be in 2-letter [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1) format, for example "US". For backward compatibility, a 3-letter [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country code such as "SGP" or a full country name such as "Singapore" can also be used.
     *
     * @param $addressCountry |
     * @return static
     **/
    public function setAddressCountry($addressCountry): static {
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
     * @return static
     **/
    public function setPostalCode($postalCode): static {
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
     * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
     *
     * @param $addressRegion 
     * @return static
     **/
    public function setAddressRegion($addressRegion): static {
        $this->properties['addressRegion'] = $addressRegion;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAddressRegion() {
        return $this->properties['addressRegion'];
    }

    /**
     * A defined range of postal codes indicated by a common textual prefix. Used for non-numeric systems such as UK.
     *
     * @param $postalCodePrefix 
     * @return static
     **/
    public function setPostalCodePrefix($postalCodePrefix): static {
        $this->properties['postalCodePrefix'] = $postalCodePrefix;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPostalCodePrefix() {
        return $this->properties['postalCodePrefix'];
    }

    /**
     * A defined range of postal codes.
     *
     * @param $postalCodeRange 
     * @return static
     **/
    public function setPostalCodeRange($postalCodeRange): static {
        $this->properties['postalCodeRange'] = $postalCodeRange;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPostalCodeRange() {
        return $this->properties['postalCodeRange'];
    }


}
