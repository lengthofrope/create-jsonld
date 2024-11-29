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
 * A statistical distribution of values.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class QuantitativeValueDistributionSchema extends StructuredValueSchema
{
    public static function factory()
    {
        return new QuantitativeValueDistributionSchema('https://schema.org/', 'QuantitativeValueDistribution');
    }

    /**
     * The 90th percentile value.
     *
     * @param $percentile90 
     **/
    public function setPercentile90($percentile90) {
        $this->properties['percentile90'] = $percentile90;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPercentile90() {
        return $this->properties['percentile90'];
    }

    /**
     * The 10th percentile value.
     *
     * @param $percentile10 
     **/
    public function setPercentile10($percentile10) {
        $this->properties['percentile10'] = $percentile10;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPercentile10() {
        return $this->properties['percentile10'];
    }

    /**
     * The median value.
     *
     * @param $median 
     **/
    public function setMedian($median) {
        $this->properties['median'] = $median;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMedian() {
        return $this->properties['median'];
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $duration 
     **/
    public function setDuration($duration) {
        $this->properties['duration'] = $duration;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDuration() {
        return $this->properties['duration'];
    }

    /**
     * The 75th percentile value.
     *
     * @param $percentile75 
     **/
    public function setPercentile75($percentile75) {
        $this->properties['percentile75'] = $percentile75;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPercentile75() {
        return $this->properties['percentile75'];
    }

    /**
     * The 25th percentile value.
     *
     * @param $percentile25 
     **/
    public function setPercentile25($percentile25) {
        $this->properties['percentile25'] = $percentile25;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPercentile25() {
        return $this->properties['percentile25'];
    }


}
