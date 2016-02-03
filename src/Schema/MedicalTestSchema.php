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
 * Any medical test, typically performed for diagnostic purposes.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalTestSchema extends MedicalEntitySchema
{
    public static function factory()
    {
        return new MedicalTestSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * Drugs that affect the test's results.
     **/
    private $affectedBy;
    public function setAffectedBy($affectedBy) {
        $this->affectedBy = $affectedBy;

        return $this;
    }

    /**
     * @return DrugSchema     
     **/
    public function getAffectedBy() {
        return $this->affectedBy;
    }

    /**
     * Range of acceptable values for a typical patient, when applicable.
     **/
    private $normalRange;
    public function setNormalRange($normalRange) {
        $this->normalRange = $normalRange;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getNormalRange() {
        return $this->normalRange;
    }

    /**
     * A sign detected by the test.
     **/
    private $signDetected;
    public function setSignDetected($signDetected) {
        $this->signDetected = $signDetected;

        return $this;
    }

    /**
     * @return MedicalSignSchema     
     **/
    public function getSignDetected() {
        return $this->signDetected;
    }

    /**
     * A condition the test is used to diagnose.
     **/
    private $usedToDiagnose;
    public function setUsedToDiagnose($usedToDiagnose) {
        $this->usedToDiagnose = $usedToDiagnose;

        return $this;
    }

    /**
     * @return MedicalConditionSchema     
     **/
    public function getUsedToDiagnose() {
        return $this->usedToDiagnose;
    }

    /**
     * Device used to perform the test.
     **/
    private $usesDevice;
    public function setUsesDevice($usesDevice) {
        $this->usesDevice = $usesDevice;

        return $this;
    }

    /**
     * @return MedicalDeviceSchema     
     **/
    public function getUsesDevice() {
        return $this->usesDevice;
    }


}
