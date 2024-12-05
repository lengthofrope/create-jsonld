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
 * A set of characteristics belonging to people, e.g. who compose an item's target
 * audience.
 *
 * @see https://schema.org/PeopleAudience
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PeopleAudience extends Audience
{
    public static function factory(): PeopleAudience
    {
        return new PeopleAudience('https://schema.org/', 'PeopleAudience');
    }

    /**
     * Audiences defined by a person's minimum age.
     *
     * @param $requiredMinAge \LengthOfRope\JSONLD\Schema\Integer
     * @return static
     **/
    public function setRequiredMinAge($requiredMinAge): static {
        $this->properties['requiredMinAge'] = $requiredMinAge;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Integer
     **/
    public function getRequiredMinAge() {
        return $this->properties['requiredMinAge'];
    }
    /**
     * Audiences defined by a person's maximum age.
     *
     * @param $requiredMaxAge \LengthOfRope\JSONLD\Schema\Integer
     * @return static
     **/
    public function setRequiredMaxAge($requiredMaxAge): static {
        $this->properties['requiredMaxAge'] = $requiredMaxAge;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Integer
     **/
    public function getRequiredMaxAge() {
        return $this->properties['requiredMaxAge'];
    }
    /**
     * The age or age range for the intended audience or person, for example 3-12
     * months for infants, 1-5 years for toddlers.
     *
     * @param $suggestedAge \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setSuggestedAge($suggestedAge): static {
        $this->properties['suggestedAge'] = $suggestedAge;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getSuggestedAge() {
        return $this->properties['suggestedAge'];
    }
    /**
     * The suggested gender of the intended person or audience, for example "male",
     * "female", or "unisex".
     *
     * @param $suggestedGender \LengthOfRope\JSONLD\Schema\GenderType|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setSuggestedGender($suggestedGender): static {
        $this->properties['suggestedGender'] = $suggestedGender;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\GenderType|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getSuggestedGender() {
        return $this->properties['suggestedGender'];
    }
    /**
     * Specifying the health condition(s) of a patient, medical study, or other target
     * audience.
     *
     * @param $healthCondition \LengthOfRope\JSONLD\Schema\MedicalCondition
     * @return static
     **/
    public function setHealthCondition($healthCondition): static {
        $this->properties['healthCondition'] = $healthCondition;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalCondition
     **/
    public function getHealthCondition() {
        return $this->properties['healthCondition'];
    }
    /**
     * A suggested range of body measurements for the intended audience or person, for
     * example inseam between 32 and 34 inches or height between 170 and 190 cm.
     * Typically found on a size chart for wearable products.
     *
     * @param $suggestedMeasurement \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setSuggestedMeasurement($suggestedMeasurement): static {
        $this->properties['suggestedMeasurement'] = $suggestedMeasurement;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getSuggestedMeasurement() {
        return $this->properties['suggestedMeasurement'];
    }
    /**
     * Audiences defined by a person's gender.
     *
     * @param $requiredGender \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setRequiredGender($requiredGender): static {
        $this->properties['requiredGender'] = $requiredGender;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getRequiredGender() {
        return $this->properties['requiredGender'];
    }
    /**
     * Minimum recommended age in years for the audience or user.
     *
     * @param $suggestedMinAge \LengthOfRope\JSONLD\DataType\Number
     * @return static
     **/
    public function setSuggestedMinAge($suggestedMinAge): static {
        $this->properties['suggestedMinAge'] = $suggestedMinAge;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Number
     **/
    public function getSuggestedMinAge() {
        return $this->properties['suggestedMinAge'];
    }
    /**
     * Maximum recommended age in years for the audience or user.
     *
     * @param $suggestedMaxAge \LengthOfRope\JSONLD\DataType\Number
     * @return static
     **/
    public function setSuggestedMaxAge($suggestedMaxAge): static {
        $this->properties['suggestedMaxAge'] = $suggestedMaxAge;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Number
     **/
    public function getSuggestedMaxAge() {
        return $this->properties['suggestedMaxAge'];
    }
}
