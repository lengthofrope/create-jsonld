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
 * A medical procedure intended primarily for therapeutic purposes, aimed at
 * improving a health condition.
 *
 * @see https://schema.org/TherapeuticProcedure
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TherapeuticProcedure extends MedicalProcedure
{
    public static function factory(): TherapeuticProcedure
    {
        return new TherapeuticProcedure('https://schema.org/', 'TherapeuticProcedure');
    }

    /**
     * A possible complication and/or side effect of this therapy. If it is known that
     * an adverse outcome is serious (resulting in death, disability, or permanent
     * damage; requiring hospitalization; or otherwise life-threatening or requiring
     * immediate medical attention), tag it as a seriousAdverseOutcome instead.
     *
     * @param $adverseOutcome \LengthOfRope\JSONLD\Schema\MedicalEntity
     * @return static
     **/
    public function setAdverseOutcome($adverseOutcome): static {
        $this->properties['adverseOutcome'] = $adverseOutcome;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalEntity
     **/
    public function getAdverseOutcome() {
        return $this->properties['adverseOutcome'];
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
    /**
     * A dosing schedule for the drug for a given population, either observed,
     * recommended, or maximum dose based on the type used.
     *
     * @param $doseSchedule \LengthOfRope\JSONLD\Schema\DoseSchedule
     * @return static
     **/
    public function setDoseSchedule($doseSchedule): static {
        $this->properties['doseSchedule'] = $doseSchedule;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DoseSchedule
     **/
    public function getDoseSchedule() {
        return $this->properties['doseSchedule'];
    }
}
