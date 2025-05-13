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
 * An airline flight.
 *
 * @see https://schema.org/Flight
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Flight extends Trip
{
    public static function factory(): Flight
    {
        return new Flight('https://schema.org/', 'Flight');
    }

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and
     * flights.
     *
     * @param $carrier \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setCarrier($carrier): static {
        $this->properties['carrier'] = $carrier;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getCarrier() {
        return $this->properties['carrier'];
    }
    /**
     * The distance of the flight.
     *
     * @param $flightDistance \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Distance
     * @return static
     **/
    public function setFlightDistance($flightDistance): static {
        $this->properties['flightDistance'] = $flightDistance;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Distance
     **/
    public function getFlightDistance() {
        return $this->properties['flightDistance'];
    }
    /**
     * The type of boarding policy used by the airline (e.g. zone-based or
     * group-based).
     *
     * @param $boardingPolicy \LengthOfRope\JSONLD\Schema\BoardingPolicyType
     * @return static
     **/
    public function setBoardingPolicy($boardingPolicy): static {
        $this->properties['boardingPolicy'] = $boardingPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BoardingPolicyType
     **/
    public function getBoardingPolicy() {
        return $this->properties['boardingPolicy'];
    }
    /**
     * The airport where the flight originates.
     *
     * @param $departureAirport \LengthOfRope\JSONLD\Schema\Airport
     * @return static
     **/
    public function setDepartureAirport($departureAirport): static {
        $this->properties['departureAirport'] = $departureAirport;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Airport
     **/
    public function getDepartureAirport() {
        return $this->properties['departureAirport'];
    }
    /**
     * Description of the meals that will be provided or available for purchase.
     *
     * @param $mealService \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setMealService($mealService): static {
        $this->properties['mealService'] = $mealService;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getMealService() {
        return $this->properties['mealService'];
    }
    /**
     * The time when a passenger can check into the flight online.
     *
     * @param $webCheckinTime \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setWebCheckinTime($webCheckinTime): static {
        $this->properties['webCheckinTime'] = $webCheckinTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getWebCheckinTime() {
        return $this->properties['webCheckinTime'];
    }
    /**
     * The estimated time the flight will take.
     *
     * @param $estimatedFlightDuration \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setEstimatedFlightDuration($estimatedFlightDuration): static {
        $this->properties['estimatedFlightDuration'] = $estimatedFlightDuration;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getEstimatedFlightDuration() {
        return $this->properties['estimatedFlightDuration'];
    }
    /**
     * Identifier of the flight's arrival gate.
     *
     * @param $arrivalGate \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setArrivalGate($arrivalGate): static {
        $this->properties['arrivalGate'] = $arrivalGate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getArrivalGate() {
        return $this->properties['arrivalGate'];
    }
    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A
     * seller may also be a provider.
     *
     * @param $seller \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setSeller($seller): static {
        $this->properties['seller'] = $seller;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getSeller() {
        return $this->properties['seller'];
    }
    /**
     * The airport where the flight terminates.
     *
     * @param $arrivalAirport \LengthOfRope\JSONLD\Schema\Airport
     * @return static
     **/
    public function setArrivalAirport($arrivalAirport): static {
        $this->properties['arrivalAirport'] = $arrivalAirport;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Airport
     **/
    public function getArrivalAirport() {
        return $this->properties['arrivalAirport'];
    }
    /**
     * The kind of aircraft (e.g., "Boeing 747").
     *
     * @param $aircraft \LengthOfRope\JSONLD\Schema\Vehicle|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAircraft($aircraft): static {
        $this->properties['aircraft'] = $aircraft;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Vehicle|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAircraft() {
        return $this->properties['aircraft'];
    }
    /**
     * Identifier of the flight's departure terminal.
     *
     * @param $departureTerminal \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setDepartureTerminal($departureTerminal): static {
        $this->properties['departureTerminal'] = $departureTerminal;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getDepartureTerminal() {
        return $this->properties['departureTerminal'];
    }
    /**
     * The unique identifier for a flight including the airline IATA code. For example,
     * if describing United flight 110, where the IATA code for United is 'UA', the
     * flightNumber is 'UA110'.
     *
     * @param $flightNumber \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setFlightNumber($flightNumber): static {
        $this->properties['flightNumber'] = $flightNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getFlightNumber() {
        return $this->properties['flightNumber'];
    }
    /**
     * Identifier of the flight's arrival terminal.
     *
     * @param $arrivalTerminal \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setArrivalTerminal($arrivalTerminal): static {
        $this->properties['arrivalTerminal'] = $arrivalTerminal;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getArrivalTerminal() {
        return $this->properties['arrivalTerminal'];
    }
    /**
     * Identifier of the flight's departure gate.
     *
     * @param $departureGate \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setDepartureGate($departureGate): static {
        $this->properties['departureGate'] = $departureGate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getDepartureGate() {
        return $this->properties['departureGate'];
    }
}
