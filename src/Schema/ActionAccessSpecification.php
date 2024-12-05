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
 * A set of requirements that must be fulfilled in order to perform an Action.
 *
 * @see https://schema.org/ActionAccessSpecification
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ActionAccessSpecification extends Intangible
{
    public static function factory(): ActionAccessSpecification
    {
        return new ActionAccessSpecification('https://schema.org/', 'ActionAccessSpecification');
    }

    /**
     * The beginning of the availability of the product or service included in the
     * offer.
     *
     * @param $availabilityStarts \LengthOfRope\JSONLD\DataType\Date|\LengthOfRope\JSONLD\DataType\Time|\LengthOfRope\JSONLD\DataType\DateTime
     * @return static
     **/
    public function setAvailabilityStarts($availabilityStarts): static {
        $this->properties['availabilityStarts'] = $availabilityStarts;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date|\LengthOfRope\JSONLD\DataType\Time|\LengthOfRope\JSONLD\DataType\DateTime
     **/
    public function getAvailabilityStarts() {
        return $this->properties['availabilityStarts'];
    }
    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery charge
     * specification is not valid, e.g. a region where the transaction is not allowed.
     *
     * See also [[eligibleRegion]].
     *
     *
     * @param $ineligibleRegion \LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\GeoShape
     * @return static
     **/
    public function setIneligibleRegion($ineligibleRegion): static {
        $this->properties['ineligibleRegion'] = $ineligibleRegion;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\GeoShape
     **/
    public function getIneligibleRegion() {
        return $this->properties['ineligibleRegion'];
    }
    /**
     * An Offer which must be accepted before the user can perform the Action. For
     * example, the user may need to buy a movie before being able to watch it.
     *
     * @param $expectsAcceptanceOf \LengthOfRope\JSONLD\Schema\Offer
     * @return static
     **/
    public function setExpectsAcceptanceOf($expectsAcceptanceOf): static {
        $this->properties['expectsAcceptanceOf'] = $expectsAcceptanceOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Offer
     **/
    public function getExpectsAcceptanceOf() {
        return $this->properties['expectsAcceptanceOf'];
    }
    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @param $category \LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\Schema\PhysicalActivityCategory|\LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setCategory($category): static {
        $this->properties['category'] = $category;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\Schema\PhysicalActivityCategory|\LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     **/
    public function getCategory() {
        return $this->properties['category'];
    }
    /**
     * Indicates if use of the media require a subscription  (either paid or free).
     * Allowed values are ```true``` or ```false``` (note that an earlier version had
     * 'yes', 'no').
     *
     * @param $requiresSubscription \LengthOfRope\JSONLD\DataType\Boolean|\LengthOfRope\JSONLD\Schema\MediaSubscription
     * @return static
     **/
    public function setRequiresSubscription($requiresSubscription): static {
        $this->properties['requiresSubscription'] = $requiresSubscription;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Boolean|\LengthOfRope\JSONLD\Schema\MediaSubscription
     **/
    public function getRequiresSubscription() {
        return $this->properties['requiresSubscription'];
    }
    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery charge
     * specification is valid.
     *
     * See also [[ineligibleRegion]].
     *
     *
     * @param $eligibleRegion \LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setEligibleRegion($eligibleRegion): static {
        $this->properties['eligibleRegion'] = $eligibleRegion;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\Place
     **/
    public function getEligibleRegion() {
        return $this->properties['eligibleRegion'];
    }
    /**
     * The end of the availability of the product or service included in the offer.
     *
     * @param $availabilityEnds \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Time|\LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setAvailabilityEnds($availabilityEnds): static {
        $this->properties['availabilityEnds'] = $availabilityEnds;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Time|\LengthOfRope\JSONLD\DataType\Date
     **/
    public function getAvailabilityEnds() {
        return $this->properties['availabilityEnds'];
    }
}
