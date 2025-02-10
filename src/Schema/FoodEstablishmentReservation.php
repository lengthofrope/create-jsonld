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
 * A reservation to dine at a food-related business.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of reservations.
 *
 * @see https://schema.org/FoodEstablishmentReservation
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class FoodEstablishmentReservation extends Reservation
{
    public static function factory(): FoodEstablishmentReservation
    {
        return new FoodEstablishmentReservation('https://schema.org/', 'FoodEstablishmentReservation');
    }

    /**
     * Number of people the reservation should accommodate.
     *
     * @param $partySize \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setPartySize($partySize): static {
        $this->properties['partySize'] = $partySize;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getPartySize() {
        return $this->properties['partySize'];
    }
    /**
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For actions
     * that span a period of time, when the action was performed. E.g. John wrote a
     * book from January to *December*. For media, including audio and video, it's the
     * time offset of the end of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when
     * describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @param $endTime \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeTime
     * @return static
     **/
    public function setEndTime($endTime): static {
        $this->properties['endTime'] = $endTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeTime
     **/
    public function getEndTime() {
        return $this->properties['endTime'];
    }
    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John
     * wrote a book from *January* to December. For media, including audio and video,
     * it's the time offset of the start of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when
     * describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @param $startTime \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeTime
     * @return static
     **/
    public function setStartTime($startTime): static {
        $this->properties['startTime'] = $startTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeTime
     **/
    public function getStartTime() {
        return $this->properties['startTime'];
    }
}
