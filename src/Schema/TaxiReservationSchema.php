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
 * A reservation for a taxi.\n\nNote: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use [[Offer]].
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TaxiReservationSchema extends ReservationSchema
{
    public static function factory()
    {
        return new TaxiReservationSchema('https://schema.org/', 'TaxiReservation');
    }

    /**
     * Number of people the reservation should accommodate.
     *
     * @param $partySize |
     **/
    public function setPartySize($partySize) {
        $this->properties['partySize'] = $partySize;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPartySize() {
        return $this->properties['partySize'];
    }

    /**
     * When a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @param $pickupTime 
     **/
    public function setPickupTime($pickupTime) {
        $this->properties['pickupTime'] = $pickupTime;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPickupTime() {
        return $this->properties['pickupTime'];
    }

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @param $pickupLocation 
     **/
    public function setPickupLocation($pickupLocation) {
        $this->properties['pickupLocation'] = $pickupLocation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPickupLocation() {
        return $this->properties['pickupLocation'];
    }


}
