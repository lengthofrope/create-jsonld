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
 * A trip on a commercial bus line.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BusTripSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new BusTripSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The stop or station from which the bus arrives.
     **/
    private $arrivalBusStop;
    public function setArrivalBusStop($arrivalBusStop) {
        $this->arrivalBusStop = $arrivalBusStop;

        return $this;
    }

    /**
     * @return BusStationSchema|BusStopSchema     
     **/
    public function getArrivalBusStop() {
        return $this->arrivalBusStop;
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
     * The name of the bus (e.g. Bolt Express).
     **/
    private $busName;
    public function setBusName($busName) {
        $this->busName = $busName;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getBusName() {
        return $this->busName;
    }

    /**
     * The unique identifier for the bus.
     **/
    private $busNumber;
    public function setBusNumber($busNumber) {
        $this->busNumber = $busNumber;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getBusNumber() {
        return $this->busNumber;
    }

    /**
     * The stop or station from which the bus departs.
     **/
    private $departureBusStop;
    public function setDepartureBusStop($departureBusStop) {
        $this->departureBusStop = $departureBusStop;

        return $this;
    }

    /**
     * @return BusStationSchema|BusStopSchema     
     **/
    public function getDepartureBusStop() {
        return $this->departureBusStop;
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


}
