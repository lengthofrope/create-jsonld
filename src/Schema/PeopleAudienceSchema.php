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
 * A set of characteristics belonging to people, e.g. who compose an item's target audience.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PeopleAudienceSchema extends AudienceSchema
{
    public static function factory()
    {
        return new PeopleAudienceSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * Expectations for health conditions of target audience.
     **/
    private $healthCondition;
    public function setHealthCondition($healthCondition) {
        $this->healthCondition = $healthCondition;

        return $this;
    }

    /**
     * @return MedicalConditionSchema     **/
    public function getHealthCondition() {
        return $this->healthCondition;
    }

    /**
     * Audiences defined by a person's gender.
     **/
    private $requiredGender;
    public function setRequiredGender($requiredGender) {
        $this->requiredGender = $requiredGender;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getRequiredGender() {
        return $this->requiredGender;
    }

    /**
     * Audiences defined by a person's maximum age.
     **/
    private $requiredMaxAge;
    public function setRequiredMaxAge($requiredMaxAge) {
        $this->requiredMaxAge = $requiredMaxAge;

        return $this;
    }

    /**
     * @return IntegerSchema     **/
    public function getRequiredMaxAge() {
        return $this->requiredMaxAge;
    }

    /**
     * Audiences defined by a person's minimum age.
     **/
    private $requiredMinAge;
    public function setRequiredMinAge($requiredMinAge) {
        $this->requiredMinAge = $requiredMinAge;

        return $this;
    }

    /**
     * @return IntegerSchema     **/
    public function getRequiredMinAge() {
        return $this->requiredMinAge;
    }

    /**
     * The gender of the person or audience.
     **/
    private $suggestedGender;
    public function setSuggestedGender($suggestedGender) {
        $this->suggestedGender = $suggestedGender;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getSuggestedGender() {
        return $this->suggestedGender;
    }

    /**
     * Maximal age recommended for viewing content.
     **/
    private $suggestedMaxAge;
    public function setSuggestedMaxAge($suggestedMaxAge) {
        $this->suggestedMaxAge = $suggestedMaxAge;

        return $this;
    }

    /**
     * @return NumberSchema     **/
    public function getSuggestedMaxAge() {
        return $this->suggestedMaxAge;
    }

    /**
     * Minimal age recommended for viewing content.
     **/
    private $suggestedMinAge;
    public function setSuggestedMinAge($suggestedMinAge) {
        $this->suggestedMinAge = $suggestedMinAge;

        return $this;
    }

    /**
     * @return NumberSchema     **/
    public function getSuggestedMinAge() {
        return $this->suggestedMinAge;
    }


}
