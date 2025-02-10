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
 * A reservation for lodging at a hotel, motel, inn, etc.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of reservations.
 *
 * @see https://schema.org/LodgingReservation
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class LodgingReservation extends Reservation
{
    public static function factory(): LodgingReservation
    {
        return new LodgingReservation('https://schema.org/', 'LodgingReservation');
    }

    /**
     * The number of adults staying in the unit.
     *
     * @param $numAdults \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setNumAdults($numAdults): static {
        $this->properties['numAdults'] = $numAdults;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getNumAdults() {
        return $this->properties['numAdults'];
    }
    /**
     * Textual description of the unit type (including suite vs. room, size of bed,
     * etc.).
     *
     * @param $lodgingUnitType \LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setLodgingUnitType($lodgingUnitType): static {
        $this->properties['lodgingUnitType'] = $lodgingUnitType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getLodgingUnitType() {
        return $this->properties['lodgingUnitType'];
    }
    /**
     * The latest someone may check out of a lodging establishment.
     *
     * @param $checkoutTime \LengthOfRope\JSONLD\DataType\TypeTime|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setCheckoutTime($checkoutTime): static {
        $this->properties['checkoutTime'] = $checkoutTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeTime|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getCheckoutTime() {
        return $this->properties['checkoutTime'];
    }
    /**
     * The earliest someone may check into a lodging establishment.
     *
     * @param $checkinTime \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeTime
     * @return static
     **/
    public function setCheckinTime($checkinTime): static {
        $this->properties['checkinTime'] = $checkinTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeTime
     **/
    public function getCheckinTime() {
        return $this->properties['checkinTime'];
    }
    /**
     * A full description of the lodging unit.
     *
     * @param $lodgingUnitDescription \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setLodgingUnitDescription($lodgingUnitDescription): static {
        $this->properties['lodgingUnitDescription'] = $lodgingUnitDescription;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getLodgingUnitDescription() {
        return $this->properties['lodgingUnitDescription'];
    }
    /**
     * The number of children staying in the unit.
     *
     * @param $numChildren \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setNumChildren($numChildren): static {
        $this->properties['numChildren'] = $numChildren;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getNumChildren() {
        return $this->properties['numChildren'];
    }
}
