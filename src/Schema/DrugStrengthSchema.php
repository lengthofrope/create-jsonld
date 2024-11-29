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
 * A specific strength in which a medical drug is available in a specific country.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DrugStrengthSchema extends MedicalIntangibleSchema
{
    public static function factory()
    {
        return new DrugStrengthSchema('https://schema.org/', 'DrugStrength');
    }

    /**
     * The units of an active ingredient's strength, e.g. mg.
     *
     * @param $strengthUnit 
     **/
    public function setStrengthUnit($strengthUnit) {
        $this->properties['strengthUnit'] = $strengthUnit;

        return $this;
    }

    /**
     * @return 
     **/
    public function getStrengthUnit() {
        return $this->properties['strengthUnit'];
    }

    /**
     * The value of an active ingredient's strength, e.g. 325.
     *
     * @param $strengthValue 
     **/
    public function setStrengthValue($strengthValue) {
        $this->properties['strengthValue'] = $strengthValue;

        return $this;
    }

    /**
     * @return 
     **/
    public function getStrengthValue() {
        return $this->properties['strengthValue'];
    }

    /**
     * The location in which the strength is available.
     *
     * @param $availableIn 
     **/
    public function setAvailableIn($availableIn) {
        $this->properties['availableIn'] = $availableIn;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAvailableIn() {
        return $this->properties['availableIn'];
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     * @param $maximumIntake 
     **/
    public function setMaximumIntake($maximumIntake) {
        $this->properties['maximumIntake'] = $maximumIntake;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMaximumIntake() {
        return $this->properties['maximumIntake'];
    }

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     * @param $activeIngredient 
     **/
    public function setActiveIngredient($activeIngredient) {
        $this->properties['activeIngredient'] = $activeIngredient;

        return $this;
    }

    /**
     * @return 
     **/
    public function getActiveIngredient() {
        return $this->properties['activeIngredient'];
    }


}
