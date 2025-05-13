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
 * A patient is any person recipient of health care services.
 *
 * @see https://schema.org/Patient
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Patient extends Person
{
    public static function factory(): Patient
    {
        return new Patient('https://schema.org/', 'Patient');
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
     * One or more alternative conditions considered in the differential diagnosis
     * process as output of a diagnosis process.
     *
     * @param $diagnosis \LengthOfRope\JSONLD\Schema\MedicalCondition
     * @return static
     **/
    public function setDiagnosis($diagnosis): static {
        $this->properties['diagnosis'] = $diagnosis;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalCondition
     **/
    public function getDiagnosis() {
        return $this->properties['diagnosis'];
    }
    /**
     * Specifying a drug or medicine used in a medication procedure.
     *
     * @param $drug \LengthOfRope\JSONLD\Schema\Drug
     * @return static
     **/
    public function setDrug($drug): static {
        $this->properties['drug'] = $drug;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Drug
     **/
    public function getDrug() {
        return $this->properties['drug'];
    }
}
