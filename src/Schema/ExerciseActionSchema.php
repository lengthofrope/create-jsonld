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
 * The act of participating in exertive activity for the purposes of improving health and fitness.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ExerciseActionSchema extends PlayActionSchema
{
    public static function factory()
    {
        return new ExerciseActionSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * A sub property of location. The course where this action was taken.
     **/
    private $course;
    public function setCourse($course) {
        $this->course = $course;

        return $this;
    }

    /**
     * @return PlaceSchema     
     **/
    public function getCourse() {
        return $this->course;
    }

    /**
     * A sub property of instrument. The diet used in this action.
     **/
    private $diet;
    public function setDiet($diet) {
        $this->diet = $diet;

        return $this;
    }

    /**
     * @return DietSchema     
     **/
    public function getDiet() {
        return $this->diet;
    }

    /**
     * The distance travelled, e.g. exercising or travelling.
     **/
    private $distance;
    public function setDistance($distance) {
        $this->distance = $distance;

        return $this;
    }

    /**
     * @return DistanceSchema     
     **/
    public function getDistance() {
        return $this->distance;
    }

    /**
     * A sub property of location. The course where this action was taken.
     **/
    private $exerciseCourse;
    public function setExerciseCourse($exerciseCourse) {
        $this->exerciseCourse = $exerciseCourse;

        return $this;
    }

    /**
     * @return PlaceSchema     
     **/
    public function getExerciseCourse() {
        return $this->exerciseCourse;
    }

    /**
     * A sub property of instrument. The exercise plan used on this action.
     **/
    private $exercisePlan;
    public function setExercisePlan($exercisePlan) {
        $this->exercisePlan = $exercisePlan;

        return $this;
    }

    /**
     * @return ExercisePlanSchema     
     **/
    public function getExercisePlan() {
        return $this->exercisePlan;
    }

    /**
     * A sub property of instrument. The diet used in this action.
     **/
    private $exerciseRelatedDiet;
    public function setExerciseRelatedDiet($exerciseRelatedDiet) {
        $this->exerciseRelatedDiet = $exerciseRelatedDiet;

        return $this;
    }

    /**
     * @return DietSchema     
     **/
    public function getExerciseRelatedDiet() {
        return $this->exerciseRelatedDiet;
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
     * @return TextSchema     
     **/
    public function getExerciseType() {
        return $this->exerciseType;
    }

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     **/
    private $fromLocation;
    public function setFromLocation($fromLocation) {
        $this->fromLocation = $fromLocation;

        return $this;
    }

    /**
     * @return PlaceSchema     
     **/
    public function getFromLocation() {
        return $this->fromLocation;
    }

    /**
     * A sub property of participant. The opponent on this action.
     **/
    private $opponent;
    public function setOpponent($opponent) {
        $this->opponent = $opponent;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getOpponent() {
        return $this->opponent;
    }

    /**
     * A sub property of location. The sports activity location where this action occurred.
     **/
    private $sportsActivityLocation;
    public function setSportsActivityLocation($sportsActivityLocation) {
        $this->sportsActivityLocation = $sportsActivityLocation;

        return $this;
    }

    /**
     * @return SportsActivityLocationSchema     
     **/
    public function getSportsActivityLocation() {
        return $this->sportsActivityLocation;
    }

    /**
     * A sub property of location. The sports event where this action occurred.
     **/
    private $sportsEvent;
    public function setSportsEvent($sportsEvent) {
        $this->sportsEvent = $sportsEvent;

        return $this;
    }

    /**
     * @return SportsEventSchema     
     **/
    public function getSportsEvent() {
        return $this->sportsEvent;
    }

    /**
     * A sub property of participant. The sports team that participated on this action.
     **/
    private $sportsTeam;
    public function setSportsTeam($sportsTeam) {
        $this->sportsTeam = $sportsTeam;

        return $this;
    }

    /**
     * @return SportsTeamSchema     
     **/
    public function getSportsTeam() {
        return $this->sportsTeam;
    }

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     **/
    private $toLocation;
    public function setToLocation($toLocation) {
        $this->toLocation = $toLocation;

        return $this;
    }

    /**
     * @return PlaceSchema     
     **/
    public function getToLocation() {
        return $this->toLocation;
    }


}
