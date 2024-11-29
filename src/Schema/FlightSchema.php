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
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class FlightSchema extends TripSchema
{
    public static function factory(): FlightSchema
    {
        return new FlightSchema('https://schema.org/', 'Flight');
    }

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     *
     * @param $boardingPolicy 
     * @return static
     **/
    public function setBoardingPolicy($boardingPolicy): static {
        $this->properties['boardingPolicy'] = $boardingPolicy;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBoardingPolicy() {
        return $this->properties['boardingPolicy'];
    }

    /**
     * Identifier of the flight's arrival terminal.
     *
     * @param $arrivalTerminal 
     * @return static
     **/
    public function setArrivalTerminal($arrivalTerminal): static {
        $this->properties['arrivalTerminal'] = $arrivalTerminal;

        return $this;
    }

    /**
     * @return 
     **/
    public function getArrivalTerminal() {
        return $this->properties['arrivalTerminal'];
    }

    /**
     * Identifier of the flight's departure gate.
     *
     * @param $departureGate 
     * @return static
     **/
    public function setDepartureGate($departureGate): static {
        $this->properties['departureGate'] = $departureGate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDepartureGate() {
        return $this->properties['departureGate'];
    }

    /**
     * The airport where the flight originates.
     *
     * @param $departureAirport 
     * @return static
     **/
    public function setDepartureAirport($departureAirport): static {
        $this->properties['departureAirport'] = $departureAirport;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDepartureAirport() {
        return $this->properties['departureAirport'];
    }

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
     *
     * @param $carrier 
     * @return static
     **/
    public function setCarrier($carrier): static {
        $this->properties['carrier'] = $carrier;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCarrier() {
        return $this->properties['carrier'];
    }

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     *
     * @param $aircraft |
     * @return static
     **/
    public function setAircraft($aircraft): static {
        $this->properties['aircraft'] = $aircraft;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAircraft() {
        return $this->properties['aircraft'];
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     * @param $seller |
     * @return static
     **/
    public function setSeller($seller): static {
        $this->properties['seller'] = $seller;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSeller() {
        return $this->properties['seller'];
    }

    /**
     * Identifier of the flight's arrival gate.
     *
     * @param $arrivalGate 
     * @return static
     **/
    public function setArrivalGate($arrivalGate): static {
        $this->properties['arrivalGate'] = $arrivalGate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getArrivalGate() {
        return $this->properties['arrivalGate'];
    }

    /**
     * The time when a passenger can check into the flight online.
     *
     * @param $webCheckinTime 
     * @return static
     **/
    public function setWebCheckinTime($webCheckinTime): static {
        $this->properties['webCheckinTime'] = $webCheckinTime;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWebCheckinTime() {
        return $this->properties['webCheckinTime'];
    }

    /**
     * The estimated time the flight will take.
     *
     * @param $estimatedFlightDuration |
     * @return static
     **/
    public function setEstimatedFlightDuration($estimatedFlightDuration): static {
        $this->properties['estimatedFlightDuration'] = $estimatedFlightDuration;

        return $this;
    }

    /**
     * @return |
     **/
    public function getEstimatedFlightDuration() {
        return $this->properties['estimatedFlightDuration'];
    }

    /**
     * The distance of the flight.
     *
     * @param $flightDistance |
     * @return static
     **/
    public function setFlightDistance($flightDistance): static {
        $this->properties['flightDistance'] = $flightDistance;

        return $this;
    }

    /**
     * @return |
     **/
    public function getFlightDistance() {
        return $this->properties['flightDistance'];
    }

    /**
     * Description of the meals that will be provided or available for purchase.
     *
     * @param $mealService 
     * @return static
     **/
    public function setMealService($mealService): static {
        $this->properties['mealService'] = $mealService;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMealService() {
        return $this->properties['mealService'];
    }

    /**
     * Identifier of the flight's departure terminal.
     *
     * @param $departureTerminal 
     * @return static
     **/
    public function setDepartureTerminal($departureTerminal): static {
        $this->properties['departureTerminal'] = $departureTerminal;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDepartureTerminal() {
        return $this->properties['departureTerminal'];
    }

    /**
     * The airport where the flight terminates.
     *
     * @param $arrivalAirport 
     * @return static
     **/
    public function setArrivalAirport($arrivalAirport): static {
        $this->properties['arrivalAirport'] = $arrivalAirport;

        return $this;
    }

    /**
     * @return 
     **/
    public function getArrivalAirport() {
        return $this->properties['arrivalAirport'];
    }

    /**
     * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
     *
     * @param $flightNumber 
     * @return static
     **/
    public function setFlightNumber($flightNumber): static {
        $this->properties['flightNumber'] = $flightNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFlightNumber() {
        return $this->properties['flightNumber'];
    }


}
