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
 * A reservation for lodging at a hotel, motel, inn, etc.Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class LodgingReservationSchema extends ReservationSchema
{
    public static function factory()
    {
        return new LodgingReservationSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The earliest someone may check into a lodging establishment.
     **/
    private $checkinTime;
    public function setCheckinTime($checkinTime) {
        $this->checkinTime = $checkinTime;

        return $this;
    }

    /**
     * @return DateTimeSchema     **/
    public function getCheckinTime() {
        return $this->checkinTime;
    }

    /**
     * The latest someone may check out of a lodging establishment.
     **/
    private $checkoutTime;
    public function setCheckoutTime($checkoutTime) {
        $this->checkoutTime = $checkoutTime;

        return $this;
    }

    /**
     * @return DateTimeSchema     **/
    public function getCheckoutTime() {
        return $this->checkoutTime;
    }

    /**
     * A full description of the lodging unit.
     **/
    private $lodgingUnitDescription;
    public function setLodgingUnitDescription($lodgingUnitDescription) {
        $this->lodgingUnitDescription = $lodgingUnitDescription;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getLodgingUnitDescription() {
        return $this->lodgingUnitDescription;
    }

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     **/
    private $lodgingUnitType;
    public function setLodgingUnitType($lodgingUnitType) {
        $this->lodgingUnitType = $lodgingUnitType;

        return $this;
    }

    /**
     * @return TextSchema|QualitativeValueSchema     **/
    public function getLodgingUnitType() {
        return $this->lodgingUnitType;
    }

    /**
     * The number of adults staying in the unit.
     **/
    private $numAdults;
    public function setNumAdults($numAdults) {
        $this->numAdults = $numAdults;

        return $this;
    }

    /**
     * @return IntegerSchema|QuantitativeValueSchema     **/
    public function getNumAdults() {
        return $this->numAdults;
    }

    /**
     * The number of children staying in the unit.
     **/
    private $numChildren;
    public function setNumChildren($numChildren) {
        $this->numChildren = $numChildren;

        return $this;
    }

    /**
     * @return IntegerSchema|QuantitativeValueSchema     **/
    public function getNumChildren() {
        return $this->numChildren;
    }


}
