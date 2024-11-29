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
    public static function factory()
    {
        return new FlightSchema('https://schema.org/', 'Flight');
    }

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     *
     * @param $boardingPolicy 
     **/
    public function setBoardingPolicy($boardingPolicy) {
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
     **/
    public function setArrivalTerminal($arrivalTerminal) {
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
     **/
    public function setDepartureGate($departureGate) {
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
     **/
    public function setDepartureAirport($departureAirport) {
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
     **/
    public function setCarrier($carrier) {
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
     **/
    public function setAircraft($aircraft) {
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
     **/
    public function setSeller($seller) {
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
     **/
    public function setArrivalGate($arrivalGate) {
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
     **/
    public function setWebCheckinTime($webCheckinTime) {
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
     **/
    public function setEstimatedFlightDuration($estimatedFlightDuration) {
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
     **/
    public function setFlightDistance($flightDistance) {
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
     **/
    public function setMealService($mealService) {
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
     **/
    public function setDepartureTerminal($departureTerminal) {
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
     **/
    public function setArrivalAirport($arrivalAirport) {
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
     **/
    public function setFlightNumber($flightNumber) {
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
