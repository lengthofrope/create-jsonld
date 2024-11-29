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
 * Specifies a location feature by providing a structured value representing a feature of an accommodation as a property-value pair of varying degrees of formality.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class LocationFeatureSpecificationSchema extends PropertyValueSchema
{
    public static function factory(): LocationFeatureSpecificationSchema
    {
        return new LocationFeatureSpecificationSchema('https://schema.org/', 'LocationFeatureSpecification');
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     * @param $validThrough |
     * @return static
     **/
    public function setValidThrough($validThrough): static {
        $this->properties['validThrough'] = $validThrough;

        return $this;
    }

    /**
     * @return |
     **/
    public function getValidThrough() {
        return $this->properties['validThrough'];
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
     * The date when the item becomes valid.
     *
     * @param $validFrom |
     * @return static
     **/
    public function setValidFrom($validFrom): static {
        $this->properties['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * @return |
     **/
    public function getValidFrom() {
        return $this->properties['validFrom'];
    }


}
