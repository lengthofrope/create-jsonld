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
 * The act of participating in exertive activity for the purposes of improving
 * health and fitness.
 *
 * @see https://schema.org/ExerciseAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ExerciseAction extends PlayAction
{
    public static function factory(): ExerciseAction
    {
        return new ExerciseAction('https://schema.org/', 'ExerciseAction');
    }

    /**
     * A sub property of instrument. The exercise plan used on this action.
     *
     * @param $exercisePlan \LengthOfRope\JSONLD\Schema\ExercisePlan
     * @return static
     **/
    public function setExercisePlan($exercisePlan): static {
        $this->properties['exercisePlan'] = $exercisePlan;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ExercisePlan
     **/
    public function getExercisePlan() {
        return $this->properties['exercisePlan'];
    }
    /**
     * A sub property of location. The final location of the object or the agent after
     * the action.
     *
     * @param $toLocation \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setToLocation($toLocation): static {
        $this->properties['toLocation'] = $toLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getToLocation() {
        return $this->properties['toLocation'];
    }
    /**
     * A sub property of location. The course where this action was taken.
     *
     * @param $exerciseCourse \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setExerciseCourse($exerciseCourse): static {
        $this->properties['exerciseCourse'] = $exerciseCourse;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getExerciseCourse() {
        return $this->properties['exerciseCourse'];
    }
    /**
     * A sub property of location. The original location of the object or the agent
     * before the action.
     *
     * @param $fromLocation \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setFromLocation($fromLocation): static {
        $this->properties['fromLocation'] = $fromLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getFromLocation() {
        return $this->properties['fromLocation'];
    }
    /**
     * A sub property of location. The sports activity location where this action
     * occurred.
     *
     * @param $sportsActivityLocation \LengthOfRope\JSONLD\Schema\SportsActivityLocation
     * @return static
     **/
    public function setSportsActivityLocation($sportsActivityLocation): static {
        $this->properties['sportsActivityLocation'] = $sportsActivityLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\SportsActivityLocation
     **/
    public function getSportsActivityLocation() {
        return $this->properties['sportsActivityLocation'];
    }
    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     * @param $distance \LengthOfRope\JSONLD\Schema\Distance
     * @return static
     **/
    public function setDistance($distance): static {
        $this->properties['distance'] = $distance;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Distance
     **/
    public function getDistance() {
        return $this->properties['distance'];
    }
    /**
     * A sub property of instrument. The diet used in this action.
     *
     * @param $diet \LengthOfRope\JSONLD\Schema\Diet
     * @return static
     **/
    public function setDiet($diet): static {
        $this->properties['diet'] = $diet;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Diet
     **/
    public function getDiet() {
        return $this->properties['diet'];
    }
    /**
     * A sub property of instrument. The diet used in this action.
     *
     * @param $exerciseRelatedDiet \LengthOfRope\JSONLD\Schema\Diet
     * @return static
     **/
    public function setExerciseRelatedDiet($exerciseRelatedDiet): static {
        $this->properties['exerciseRelatedDiet'] = $exerciseRelatedDiet;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Diet
     **/
    public function getExerciseRelatedDiet() {
        return $this->properties['exerciseRelatedDiet'];
    }
    /**
     * A sub property of participant. The sports team that participated on this action.
     *
     * @param $sportsTeam \LengthOfRope\JSONLD\Schema\SportsTeam
     * @return static
     **/
    public function setSportsTeam($sportsTeam): static {
        $this->properties['sportsTeam'] = $sportsTeam;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\SportsTeam
     **/
    public function getSportsTeam() {
        return $this->properties['sportsTeam'];
    }
    /**
     * A sub property of location. The sports event where this action occurred.
     *
     * @param $sportsEvent \LengthOfRope\JSONLD\Schema\SportsEvent
     * @return static
     **/
    public function setSportsEvent($sportsEvent): static {
        $this->properties['sportsEvent'] = $sportsEvent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\SportsEvent
     **/
    public function getSportsEvent() {
        return $this->properties['sportsEvent'];
    }
    /**
     * A sub property of participant. The opponent on this action.
     *
     * @param $opponent \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setOpponent($opponent): static {
        $this->properties['opponent'] = $opponent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getOpponent() {
        return $this->properties['opponent'];
    }
    /**
     * A sub property of location. The course where this action was taken.
     *
     * @param $course \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setCourse($course): static {
        $this->properties['course'] = $course;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getCourse() {
        return $this->properties['course'];
    }
    /**
     * Type(s) of exercise or activity, such as strength training, flexibility
     * training, aerobics, cardiac rehabilitation, etc.
     *
     * @param $exerciseType \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setExerciseType($exerciseType): static {
        $this->properties['exerciseType'] = $exerciseType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getExerciseType() {
        return $this->properties['exerciseType'];
    }
}
