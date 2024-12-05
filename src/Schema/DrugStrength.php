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
 * A specific strength in which a medical drug is available in a specific country.
 *
 * @see https://schema.org/DrugStrength
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DrugStrength extends MedicalIntangible
{
    public static function factory(): DrugStrength
    {
        return new DrugStrength('https://schema.org/', 'DrugStrength');
    }

    /**
     * The units of an active ingredient's strength, e.g. mg.
     *
     * @param $strengthUnit \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setStrengthUnit($strengthUnit): static {
        $this->properties['strengthUnit'] = $strengthUnit;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getStrengthUnit() {
        return $this->properties['strengthUnit'];
    }
    /**
     * The value of an active ingredient's strength, e.g. 325.
     *
     * @param $strengthValue \LengthOfRope\JSONLD\DataType\Number
     * @return static
     **/
    public function setStrengthValue($strengthValue): static {
        $this->properties['strengthValue'] = $strengthValue;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Number
     **/
    public function getStrengthValue() {
        return $this->properties['strengthValue'];
    }
    /**
     * The location in which the strength is available.
     *
     * @param $availableIn \LengthOfRope\JSONLD\Schema\AdministrativeArea
     * @return static
     **/
    public function setAvailableIn($availableIn): static {
        $this->properties['availableIn'] = $availableIn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AdministrativeArea
     **/
    public function getAvailableIn() {
        return $this->properties['availableIn'];
    }
    /**
     * Recommended intake of this supplement for a given population as defined by a
     * specific recommending authority.
     *
     * @param $maximumIntake \LengthOfRope\JSONLD\Schema\MaximumDoseSchedule
     * @return static
     **/
    public function setMaximumIntake($maximumIntake): static {
        $this->properties['maximumIntake'] = $maximumIntake;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MaximumDoseSchedule
     **/
    public function getMaximumIntake() {
        return $this->properties['maximumIntake'];
    }
    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     * @param $activeIngredient \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setActiveIngredient($activeIngredient): static {
        $this->properties['activeIngredient'] = $activeIngredient;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getActiveIngredient() {
        return $this->properties['activeIngredient'];
    }
}
