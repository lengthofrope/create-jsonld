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
 * Any physical manifestation of a person's medical condition discoverable by
 * objective diagnostic tests or physical examination.
 *
 * @see https://schema.org/MedicalSign
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalSign extends MedicalSignOrSymptom
{
    public static function factory(): MedicalSign
    {
        return new MedicalSign('https://schema.org/', 'MedicalSign');
    }

    /**
     * A diagnostic test that can identify this sign.
     *
     * @param $identifyingTest \LengthOfRope\JSONLD\Schema\MedicalTest
     * @return static
     **/
    public function setIdentifyingTest($identifyingTest): static {
        $this->properties['identifyingTest'] = $identifyingTest;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalTest
     **/
    public function getIdentifyingTest() {
        return $this->properties['identifyingTest'];
    }
    /**
     * A physical examination that can identify this sign.
     *
     * @param $identifyingExam \LengthOfRope\JSONLD\Schema\PhysicalExam
     * @return static
     **/
    public function setIdentifyingExam($identifyingExam): static {
        $this->properties['identifyingExam'] = $identifyingExam;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PhysicalExam
     **/
    public function getIdentifyingExam() {
        return $this->properties['identifyingExam'];
    }
}
