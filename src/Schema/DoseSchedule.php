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
 * A specific dosing schedule for a drug or supplement.
 *
 * @see https://schema.org/DoseSchedule
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DoseSchedule extends MedicalIntangible
{
    public static function factory(): DoseSchedule
    {
        return new DoseSchedule('https://schema.org/', 'DoseSchedule');
    }

    /**
     * How often the dose is taken, e.g. 'daily'.
     *
     * @param $frequency \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setFrequency($frequency): static {
        $this->properties['frequency'] = $frequency;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getFrequency() {
        return $this->properties['frequency'];
    }
    /**
     * The value of the dose, e.g. 500.
     *
     * @param $doseValue \LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setDoseValue($doseValue): static {
        $this->properties['doseValue'] = $doseValue;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getDoseValue() {
        return $this->properties['doseValue'];
    }
    /**
     * The unit of the dose, e.g. 'mg'.
     *
     * @param $doseUnit \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setDoseUnit($doseUnit): static {
        $this->properties['doseUnit'] = $doseUnit;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getDoseUnit() {
        return $this->properties['doseUnit'];
    }
    /**
     * Characteristics of the population for which this is intended, or which typically
     * uses it, e.g. 'adults'.
     *
     * @param $targetPopulation \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTargetPopulation($targetPopulation): static {
        $this->properties['targetPopulation'] = $targetPopulation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTargetPopulation() {
        return $this->properties['targetPopulation'];
    }
}
