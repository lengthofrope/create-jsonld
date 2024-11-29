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
 * A patient is any person recipient of health care services.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PatientSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new PatientSchema('https://schema.org/', 'Patient');
    }

    /**
     * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
     *
     * @param $diagnosis 
     **/
    public function setDiagnosis($diagnosis) {
        $this->properties['diagnosis'] = $diagnosis;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDiagnosis() {
        return $this->properties['diagnosis'];
    }

    /**
     * Specifying a drug or medicine used in a medication procedure.
     *
     * @param $drug 
     **/
    public function setDrug($drug) {
        $this->properties['drug'] = $drug;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDrug() {
        return $this->properties['drug'];
    }

    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     *
     * @param $healthCondition 
     **/
    public function setHealthCondition($healthCondition) {
        $this->properties['healthCondition'] = $healthCondition;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHealthCondition() {
        return $this->properties['healthCondition'];
    }


}
