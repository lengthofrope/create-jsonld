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
 * Fitness-related activity designed for a specific health-related purpose, including defined exercise routines as well as activity prescribed by a clinician.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ExercisePlanSchema extends \LengthOfRope\JSONLD\Elements\ElementGroup
{
    public static function factory()
    {
        return new ExercisePlanSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * Length of time to engage in the activity.
     **/
    private $activityDuration;
    public function setActivityDuration($activityDuration) {
        $this->activityDuration = $activityDuration;

        return $this;
    }

    /**
     * @return DurationSchema     **/
    public function getActivityDuration() {
        return $this->activityDuration;
    }

    /**
     * How often one should engage in the activity.
     **/
    private $activityFrequency;
    public function setActivityFrequency($activityFrequency) {
        $this->activityFrequency = $activityFrequency;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getActivityFrequency() {
        return $this->activityFrequency;
    }

    /**
     * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
     **/
    private $additionalVariable;
    public function setAdditionalVariable($additionalVariable) {
        $this->additionalVariable = $additionalVariable;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getAdditionalVariable() {
        return $this->additionalVariable;
    }

    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     **/
    private $exerciseType;
    public function setExerciseType($exerciseType) {
        $this->exerciseType = $exerciseType;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getExerciseType() {
        return $this->exerciseType;
    }

    /**
     * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
     **/
    private $intensity;
    public function setIntensity($intensity) {
        $this->intensity = $intensity;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getIntensity() {
        return $this->intensity;
    }

    /**
     * Number of times one should repeat the activity.
     **/
    private $repetitions;
    public function setRepetitions($repetitions) {
        $this->repetitions = $repetitions;

        return $this;
    }

    /**
     * @return NumberSchema     **/
    public function getRepetitions() {
        return $this->repetitions;
    }

    /**
     * How often one should break from the activity.
     **/
    private $restPeriods;
    public function setRestPeriods($restPeriods) {
        $this->restPeriods = $restPeriods;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getRestPeriods() {
        return $this->restPeriods;
    }

    /**
     * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
     **/
    private $workload;
    public function setWorkload($workload) {
        $this->workload = $workload;

        return $this;
    }

    /**
     * @return EnergySchema     **/
    public function getWorkload() {
        return $this->workload;
    }


}
