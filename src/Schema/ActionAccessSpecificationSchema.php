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
 * A set of requirements that must be fulfilled in order to perform an Action.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ActionAccessSpecificationSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new ActionAccessSpecificationSchema('https://schema.org/', 'ActionAccessSpecification');
    }

    /**
     * The beginning of the availability of the product or service included in the offer.
     *
     * @param $availabilityStarts ||
     **/
    public function setAvailabilityStarts($availabilityStarts) {
        $this->properties['availabilityStarts'] = $availabilityStarts;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getAvailabilityStarts() {
        return $this->properties['availabilityStarts'];
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]].
      
     *
     * @param $ineligibleRegion ||
     **/
    public function setIneligibleRegion($ineligibleRegion) {
        $this->properties['ineligibleRegion'] = $ineligibleRegion;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getIneligibleRegion() {
        return $this->properties['ineligibleRegion'];
    }

    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
     *
     * @param $expectsAcceptanceOf 
     **/
    public function setExpectsAcceptanceOf($expectsAcceptanceOf) {
        $this->properties['expectsAcceptanceOf'] = $expectsAcceptanceOf;

        return $this;
    }

    /**
     * @return 
     **/
    public function getExpectsAcceptanceOf() {
        return $this->properties['expectsAcceptanceOf'];
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @param $category ||||
     **/
    public function setCategory($category) {
        $this->properties['category'] = $category;

        return $this;
    }

    /**
     * @return ||||
     **/
    public function getCategory() {
        return $this->properties['category'];
    }

    /**
     * Indicates if use of the media require a subscription  (either paid or free). Allowed values are ```true``` or ```false``` (note that an earlier version had 'yes', 'no').
     *
     * @param $requiresSubscription |
     **/
    public function setRequiresSubscription($requiresSubscription) {
        $this->properties['requiresSubscription'] = $requiresSubscription;

        return $this;
    }

    /**
     * @return |
     **/
    public function getRequiresSubscription() {
        return $this->properties['requiresSubscription'];
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]].
    
     *
     * @param $eligibleRegion ||
     **/
    public function setEligibleRegion($eligibleRegion) {
        $this->properties['eligibleRegion'] = $eligibleRegion;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getEligibleRegion() {
        return $this->properties['eligibleRegion'];
    }

    /**
     * The end of the availability of the product or service included in the offer.
     *
     * @param $availabilityEnds ||
     **/
    public function setAvailabilityEnds($availabilityEnds) {
        $this->properties['availabilityEnds'] = $availabilityEnds;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getAvailabilityEnds() {
        return $this->properties['availabilityEnds'];
    }


}
