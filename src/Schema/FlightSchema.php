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
 * An airline flight.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class FlightSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new FlightSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     **/
    private $aircraft;
    public function setAircraft($aircraft) {
        $this->aircraft = $aircraft;

        return $this;
    }

    /**
     * @return TextSchema|VehicleSchema     
     **/
    public function getAircraft() {
        return $this->aircraft;
    }

    /**
     * The airport where the flight terminates.
     **/
    private $arrivalAirport;
    public function setArrivalAirport($arrivalAirport) {
        $this->arrivalAirport = $arrivalAirport;

        return $this;
    }

    /**
     * @return AirportSchema     
     **/
    public function getArrivalAirport() {
        return $this->arrivalAirport;
    }

    /**
     * Identifier of the flight's arrival gate.
     **/
    private $arrivalGate;
    public function setArrivalGate($arrivalGate) {
        $this->arrivalGate = $arrivalGate;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getArrivalGate() {
        return $this->arrivalGate;
    }

    /**
     * Identifier of the flight's arrival terminal.
     **/
    private $arrivalTerminal;
    public function setArrivalTerminal($arrivalTerminal) {
        $this->arrivalTerminal = $arrivalTerminal;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getArrivalTerminal() {
        return $this->arrivalTerminal;
    }

    /**
     * The expected arrival time.
     **/
    private $arrivalTime;
    public function setArrivalTime($arrivalTime) {
        $this->arrivalTime = $arrivalTime;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getArrivalTime() {
        return $this->arrivalTime;
    }

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     **/
    private $boardingPolicy;
    public function setBoardingPolicy($boardingPolicy) {
        $this->boardingPolicy = $boardingPolicy;

        return $this;
    }

    /**
     * @return BoardingPolicyTypeSchema     
     **/
    public function getBoardingPolicy() {
        return $this->boardingPolicy;
    }

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
     **/
    private $carrier;
    public function setCarrier($carrier) {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return OrganizationSchema     
     **/
    public function getCarrier() {
        return $this->carrier;
    }

    /**
     * The airport where the flight originates.
     **/
    private $departureAirport;
    public function setDepartureAirport($departureAirport) {
        $this->departureAirport = $departureAirport;

        return $this;
    }

    /**
     * @return AirportSchema     
     **/
    public function getDepartureAirport() {
        return $this->departureAirport;
    }

    /**
     * Identifier of the flight's departure gate.
     **/
    private $departureGate;
    public function setDepartureGate($departureGate) {
        $this->departureGate = $departureGate;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getDepartureGate() {
        return $this->departureGate;
    }

    /**
     * Identifier of the flight's departure terminal.
     **/
    private $departureTerminal;
    public function setDepartureTerminal($departureTerminal) {
        $this->departureTerminal = $departureTerminal;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getDepartureTerminal() {
        return $this->departureTerminal;
    }

    /**
     * The expected departure time.
     **/
    private $departureTime;
    public function setDepartureTime($departureTime) {
        $this->departureTime = $departureTime;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getDepartureTime() {
        return $this->departureTime;
    }

    /**
     * The estimated time the flight will take.
     **/
    private $estimatedFlightDuration;
    public function setEstimatedFlightDuration($estimatedFlightDuration) {
        $this->estimatedFlightDuration = $estimatedFlightDuration;

        return $this;
    }

    /**
     * @return TextSchema|DurationSchema     
     **/
    public function getEstimatedFlightDuration() {
        return $this->estimatedFlightDuration;
    }

    /**
     * The distance of the flight.
     **/
    private $flightDistance;
    public function setFlightDistance($flightDistance) {
        $this->flightDistance = $flightDistance;

        return $this;
    }

    /**
     * @return TextSchema|DistanceSchema     
     **/
    public function getFlightDistance() {
        return $this->flightDistance;
    }

    /**
     * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
     **/
    private $flightNumber;
    public function setFlightNumber($flightNumber) {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getFlightNumber() {
        return $this->flightNumber;
    }

    /**
     * Description of the meals that will be provided or available for purchase.
     **/
    private $mealService;
    public function setMealService($mealService) {
        $this->mealService = $mealService;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getMealService() {
        return $this->mealService;
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     **/
    private $provider;
    public function setProvider($provider) {
        $this->provider = $provider;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     
     **/
    public function getProvider() {
        return $this->provider;
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     **/
    private $seller;
    public function setSeller($seller) {
        $this->seller = $seller;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     
     **/
    public function getSeller() {
        return $this->seller;
    }

    /**
     * The time when a passenger can check into the flight online.
     **/
    private $webCheckinTime;
    public function setWebCheckinTime($webCheckinTime) {
        $this->webCheckinTime = $webCheckinTime;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getWebCheckinTime() {
        return $this->webCheckinTime;
    }


}
