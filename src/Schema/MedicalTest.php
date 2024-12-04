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
 * Any medical test, typically performed for diagnostic purposes.
 *
 * @see https://schema.org/MedicalTest
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalTest extends MedicalEntity
{
    public static function factory(): MedicalTest
    {
        return new MedicalTest('https://schema.org/', 'MedicalTest');
    }

    /**
     * A condition the test is used to diagnose.
     *
     * @param $usedToDiagnose 
     * @return static
     **/
    public function setUsedToDiagnose($usedToDiagnose): static {
        $this->properties['usedToDiagnose'] = $usedToDiagnose;

        return $this;
    }

    /**
     * @return 
     **/
    public function getUsedToDiagnose() {
        return $this->properties['usedToDiagnose'];
    }
    /**
     * A sign detected by the test.
     *
     * @param $signDetected 
     * @return static
     **/
    public function setSignDetected($signDetected): static {
        $this->properties['signDetected'] = $signDetected;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSignDetected() {
        return $this->properties['signDetected'];
    }
    /**
     * Drugs that affect the test's results.
     *
     * @param $affectedBy 
     * @return static
     **/
    public function setAffectedBy($affectedBy): static {
        $this->properties['affectedBy'] = $affectedBy;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAffectedBy() {
        return $this->properties['affectedBy'];
    }
    /**
     * Device used to perform the test.
     *
     * @param $usesDevice 
     * @return static
     **/
    public function setUsesDevice($usesDevice): static {
        $this->properties['usesDevice'] = $usesDevice;

        return $this;
    }

    /**
     * @return 
     **/
    public function getUsesDevice() {
        return $this->properties['usesDevice'];
    }
    /**
     * Range of acceptable values for a typical patient, when applicable.
     *
     * @param $normalRange |
     * @return static
     **/
    public function setNormalRange($normalRange): static {
        $this->properties['normalRange'] = $normalRange;

        return $this;
    }

    /**
     * @return |
     **/
    public function getNormalRange() {
        return $this->properties['normalRange'];
    }
}
