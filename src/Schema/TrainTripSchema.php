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
 * A trip on a commercial train line.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TrainTripSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new TrainTripSchema('https://schema.org/', 'TrainTrip');
    }

    /**
     * The name of the train (e.g. The Orient Express).
     *
     * @param $trainName 
     **/
    public function setTrainName($trainName) {
        $this->properties['trainName'] = $trainName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTrainName() {
        return $this->properties['trainName'];
    }

    /**
     * The station where the train trip ends.
     *
     * @param $arrivalStation 
     **/
    public function setArrivalStation($arrivalStation) {
        $this->properties['arrivalStation'] = $arrivalStation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getArrivalStation() {
        return $this->properties['arrivalStation'];
    }

    /**
     * The station from which the train departs.
     *
     * @param $departureStation 
     **/
    public function setDepartureStation($departureStation) {
        $this->properties['departureStation'] = $departureStation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDepartureStation() {
        return $this->properties['departureStation'];
    }

    /**
     * The unique identifier for the train.
     *
     * @param $trainNumber 
     **/
    public function setTrainNumber($trainNumber) {
        $this->properties['trainNumber'] = $trainNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTrainNumber() {
        return $this->properties['trainNumber'];
    }

    /**
     * The platform from which the train departs.
     *
     * @param $departurePlatform 
     **/
    public function setDeparturePlatform($departurePlatform) {
        $this->properties['departurePlatform'] = $departurePlatform;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDeparturePlatform() {
        return $this->properties['departurePlatform'];
    }

    /**
     * The platform where the train arrives.
     *
     * @param $arrivalPlatform 
     **/
    public function setArrivalPlatform($arrivalPlatform) {
        $this->properties['arrivalPlatform'] = $arrivalPlatform;

        return $this;
    }

    /**
     * @return 
     **/
    public function getArrivalPlatform() {
        return $this->properties['arrivalPlatform'];
    }


}
