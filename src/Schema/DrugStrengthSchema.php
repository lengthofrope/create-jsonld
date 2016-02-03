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
        return new DrugStrengthSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     **/
    private $activeIngredient;
    public function setActiveIngredient($activeIngredient) {
        $this->activeIngredient = $activeIngredient;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getActiveIngredient() {
        return $this->activeIngredient;
    }

    /**
     * The location in which the strength is available.
     **/
    private $availableIn;
    public function setAvailableIn($availableIn) {
        $this->availableIn = $availableIn;

        return $this;
    }

    /**
     * @return AdministrativeAreaSchema     
     **/
    public function getAvailableIn() {
        return $this->availableIn;
    }

    /**
     * The units of an active ingredient's strength, e.g. mg.
     **/
    private $strengthUnit;
    public function setStrengthUnit($strengthUnit) {
        $this->strengthUnit = $strengthUnit;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getStrengthUnit() {
        return $this->strengthUnit;
    }

    /**
     * The value of an active ingredient's strength, e.g. 325.
     **/
    private $strengthValue;
    public function setStrengthValue($strengthValue) {
        $this->strengthValue = $strengthValue;

        return $this;
    }

    /**
     * @return NumberSchema     
     **/
    public function getStrengthValue() {
        return $this->strengthValue;
    }


}
