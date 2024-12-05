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
 * A process of care used in either a diagnostic, therapeutic, preventive or
 * palliative capacity that relies on invasive (surgical), non-invasive, or other
 * techniques.
 *
 * @see https://schema.org/MedicalProcedure
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalProcedure extends MedicalEntity
{
    public static function factory(): MedicalProcedure
    {
        return new MedicalProcedure('https://schema.org/', 'MedicalProcedure');
    }

    /**
     * Typical preparation that a patient must undergo before having the procedure
     * performed.
     *
     * @param $preparation \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\MedicalEntity
     * @return static
     **/
    public function setPreparation($preparation): static {
        $this->properties['preparation'] = $preparation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\MedicalEntity
     **/
    public function getPreparation() {
        return $this->properties['preparation'];
    }
    /**
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     *
     * @param $procedureType \LengthOfRope\JSONLD\Schema\MedicalProcedureType
     * @return static
     **/
    public function setProcedureType($procedureType): static {
        $this->properties['procedureType'] = $procedureType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalProcedureType
     **/
    public function getProcedureType() {
        return $this->properties['procedureType'];
    }
    /**
     * How the procedure is performed.
     *
     * @param $howPerformed \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setHowPerformed($howPerformed): static {
        $this->properties['howPerformed'] = $howPerformed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getHowPerformed() {
        return $this->properties['howPerformed'];
    }
    /**
     * The status of the study (enumerated).
     *
     * @param $status \LengthOfRope\JSONLD\Schema\MedicalStudyStatus|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\EventStatusType
     * @return static
     **/
    public function setStatus($status): static {
        $this->properties['status'] = $status;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalStudyStatus|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\EventStatusType
     **/
    public function getStatus() {
        return $this->properties['status'];
    }
    /**
     * Typical or recommended followup care after the procedure is performed.
     *
     * @param $followup \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setFollowup($followup): static {
        $this->properties['followup'] = $followup;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getFollowup() {
        return $this->properties['followup'];
    }
    /**
     * Location in the body of the anatomical structure.
     *
     * @param $bodyLocation \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setBodyLocation($bodyLocation): static {
        $this->properties['bodyLocation'] = $bodyLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getBodyLocation() {
        return $this->properties['bodyLocation'];
    }
}
