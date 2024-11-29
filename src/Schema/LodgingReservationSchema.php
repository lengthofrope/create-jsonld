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
 * A reservation for lodging at a hotel, motel, inn, etc.\n\nNote: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class LodgingReservationSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new LodgingReservationSchema('https://schema.org/', 'LodgingReservation');
    }

    /**
     * The number of adults staying in the unit.
     *
     * @param $numAdults |
     **/
    public function setNumAdults($numAdults) {
        $this->properties['numAdults'] = $numAdults;

        return $this;
    }

    /**
     * @return |
     **/
    public function getNumAdults() {
        return $this->properties['numAdults'];
    }

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     *
     * @param $lodgingUnitType |
     **/
    public function setLodgingUnitType($lodgingUnitType) {
        $this->properties['lodgingUnitType'] = $lodgingUnitType;

        return $this;
    }

    /**
     * @return |
     **/
    public function getLodgingUnitType() {
        return $this->properties['lodgingUnitType'];
    }

    /**
     * The latest someone may check out of a lodging establishment.
     *
     * @param $checkoutTime |
     **/
    public function setCheckoutTime($checkoutTime) {
        $this->properties['checkoutTime'] = $checkoutTime;

        return $this;
    }

    /**
     * @return |
     **/
    public function getCheckoutTime() {
        return $this->properties['checkoutTime'];
    }

    /**
     * The earliest someone may check into a lodging establishment.
     *
     * @param $checkinTime |
     **/
    public function setCheckinTime($checkinTime) {
        $this->properties['checkinTime'] = $checkinTime;

        return $this;
    }

    /**
     * @return |
     **/
    public function getCheckinTime() {
        return $this->properties['checkinTime'];
    }

    /**
     * A full description of the lodging unit.
     *
     * @param $lodgingUnitDescription 
     **/
    public function setLodgingUnitDescription($lodgingUnitDescription) {
        $this->properties['lodgingUnitDescription'] = $lodgingUnitDescription;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLodgingUnitDescription() {
        return $this->properties['lodgingUnitDescription'];
    }

    /**
     * The number of children staying in the unit.
     *
     * @param $numChildren |
     **/
    public function setNumChildren($numChildren) {
        $this->properties['numChildren'] = $numChildren;

        return $this;
    }

    /**
     * @return |
     **/
    public function getNumChildren() {
        return $this->properties['numChildren'];
    }


}
