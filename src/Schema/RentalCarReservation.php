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
 * A reservation for a rental car.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of reservations.
 *
 * @see https://schema.org/RentalCarReservation
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class RentalCarReservation extends Reservation
{
    public static function factory(): RentalCarReservation
    {
        return new RentalCarReservation('https://schema.org/', 'RentalCarReservation');
    }

    /**
     * When a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @param $pickupTime \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setPickupTime($pickupTime): static {
        $this->properties['pickupTime'] = $pickupTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getPickupTime() {
        return $this->properties['pickupTime'];
    }
    /**
     * When a rental car can be dropped off.
     *
     * @param $dropoffTime \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setDropoffTime($dropoffTime): static {
        $this->properties['dropoffTime'] = $dropoffTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getDropoffTime() {
        return $this->properties['dropoffTime'];
    }
    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @param $pickupLocation \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setPickupLocation($pickupLocation): static {
        $this->properties['pickupLocation'] = $pickupLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getPickupLocation() {
        return $this->properties['pickupLocation'];
    }
    /**
     * Where a rental car can be dropped off.
     *
     * @param $dropoffLocation \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setDropoffLocation($dropoffLocation): static {
        $this->properties['dropoffLocation'] = $dropoffLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getDropoffLocation() {
        return $this->properties['dropoffLocation'];
    }
}
