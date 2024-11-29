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
class BusTripSchema extends TripSchema
{
    public static function factory()
    {
        return new BusTripSchema('https://schema.org/', 'BusTrip');
    }

    /**
     * The unique identifier for the bus.
     *
     * @param $busNumber 
     **/
    public function setBusNumber($busNumber) {
        $this->properties['busNumber'] = $busNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBusNumber() {
        return $this->properties['busNumber'];
    }

    /**
     * The name of the bus (e.g. Bolt Express).
     *
     * @param $busName 
     **/
    public function setBusName($busName) {
        $this->properties['busName'] = $busName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBusName() {
        return $this->properties['busName'];
    }

    /**
     * The stop or station from which the bus arrives.
     *
     * @param $arrivalBusStop |
     **/
    public function setArrivalBusStop($arrivalBusStop) {
        $this->properties['arrivalBusStop'] = $arrivalBusStop;

        return $this;
    }

    /**
     * @return |
     **/
    public function getArrivalBusStop() {
        return $this->properties['arrivalBusStop'];
    }

    /**
     * The stop or station from which the bus departs.
     *
     * @param $departureBusStop |
     **/
    public function setDepartureBusStop($departureBusStop) {
        $this->properties['departureBusStop'] = $departureBusStop;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDepartureBusStop() {
        return $this->properties['departureBusStop'];
    }


}
