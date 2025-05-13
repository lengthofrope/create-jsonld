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
 * A reservation for air travel.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of reservations.
 * For offers of tickets, use [[Offer]].
 *
 * @see https://schema.org/FlightReservation
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class FlightReservation extends Reservation
{
    public static function factory(): FlightReservation
    {
        return new FlightReservation('https://schema.org/', 'FlightReservation');
    }

    /**
     * The priority status assigned to a passenger for security or boarding (e.g.
     * FastTrack or Priority).
     *
     * @param $passengerPriorityStatus \LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setPassengerPriorityStatus($passengerPriorityStatus): static {
        $this->properties['passengerPriorityStatus'] = $passengerPriorityStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getPassengerPriorityStatus() {
        return $this->properties['passengerPriorityStatus'];
    }
    /**
     * The airline-specific indicator of boarding order / preference.
     *
     * @param $boardingGroup \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setBoardingGroup($boardingGroup): static {
        $this->properties['boardingGroup'] = $boardingGroup;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getBoardingGroup() {
        return $this->properties['boardingGroup'];
    }
    /**
     * The type of security screening the passenger is subject to.
     *
     * @param $securityScreening \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setSecurityScreening($securityScreening): static {
        $this->properties['securityScreening'] = $securityScreening;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getSecurityScreening() {
        return $this->properties['securityScreening'];
    }
    /**
     * The passenger's sequence number as assigned by the airline.
     *
     * @param $passengerSequenceNumber \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setPassengerSequenceNumber($passengerSequenceNumber): static {
        $this->properties['passengerSequenceNumber'] = $passengerSequenceNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getPassengerSequenceNumber() {
        return $this->properties['passengerSequenceNumber'];
    }
}
