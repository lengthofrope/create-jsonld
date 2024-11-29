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
 * Any condition of the human body that affects the normal functioning of a person, whether physically or mentally. Includes diseases, injuries, disabilities, disorders, syndromes, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalConditionSchema extends MedicalEntitySchema
{
    public static function factory(): MedicalConditionSchema
    {
        return new MedicalConditionSchema('https://schema.org/', 'MedicalCondition');
    }

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     *
     * @param $pathophysiology 
     * @return static
     **/
    public function setPathophysiology($pathophysiology): static {
        $this->properties['pathophysiology'] = $pathophysiology;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPathophysiology() {
        return $this->properties['pathophysiology'];
    }

    /**
     * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the disease, extension of the condition to other organ systems, etc.
     *
     * @param $possibleComplication 
     * @return static
     **/
    public function setPossibleComplication($possibleComplication): static {
        $this->properties['possibleComplication'] = $possibleComplication;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPossibleComplication() {
        return $this->properties['possibleComplication'];
    }

    /**
     * A possible treatment to address this condition, sign or symptom.
     *
     * @param $possibleTreatment 
     * @return static
     **/
    public function setPossibleTreatment($possibleTreatment): static {
        $this->properties['possibleTreatment'] = $possibleTreatment;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPossibleTreatment() {
        return $this->properties['possibleTreatment'];
    }

    /**
     * The likely outcome in either the short term or long term of the medical condition.
     *
     * @param $expectedPrognosis 
     * @return static
     **/
    public function setExpectedPrognosis($expectedPrognosis): static {
        $this->properties['expectedPrognosis'] = $expectedPrognosis;

        return $this;
    }

    /**
     * @return 
     **/
    public function getExpectedPrognosis() {
        return $this->properties['expectedPrognosis'];
    }

    /**
     * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
     *
     * @param $secondaryPrevention 
     * @return static
     **/
    public function setSecondaryPrevention($secondaryPrevention): static {
        $this->properties['secondaryPrevention'] = $secondaryPrevention;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSecondaryPrevention() {
        return $this->properties['secondaryPrevention'];
    }

    /**
     * The stage of the condition, if applicable.
     *
     * @param $stage 
     * @return static
     **/
    public function setStage($stage): static {
        $this->properties['stage'] = $stage;

        return $this;
    }

    /**
     * @return 
     **/
    public function getStage() {
        return $this->properties['stage'];
    }

    /**
     * A medical test typically performed given this condition.
     *
     * @param $typicalTest 
     * @return static
     **/
    public function setTypicalTest($typicalTest): static {
        $this->properties['typicalTest'] = $typicalTest;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTypicalTest() {
        return $this->properties['typicalTest'];
    }

    /**
     * Specifying a drug or medicine used in a medication procedure.
     *
     * @param $drug 
     * @return static
     **/
    public function setDrug($drug): static {
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
     * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
     *
     * @param $differentialDiagnosis 
     * @return static
     **/
    public function setDifferentialDiagnosis($differentialDiagnosis): static {
        $this->properties['differentialDiagnosis'] = $differentialDiagnosis;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDifferentialDiagnosis() {
        return $this->properties['differentialDiagnosis'];
    }

    /**
     * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age,  coexisting condition.
     *
     * @param $riskFactor 
     * @return static
     **/
    public function setRiskFactor($riskFactor): static {
        $this->properties['riskFactor'] = $riskFactor;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRiskFactor() {
        return $this->properties['riskFactor'];
    }

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     *
     * @param $associatedAnatomy ||
     * @return static
     **/
    public function setAssociatedAnatomy($associatedAnatomy): static {
        $this->properties['associatedAnatomy'] = $associatedAnatomy;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getAssociatedAnatomy() {
        return $this->properties['associatedAnatomy'];
    }

    /**
     * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are the subjective experience of the medical condition.
     *
     * @param $signOrSymptom 
     * @return static
     **/
    public function setSignOrSymptom($signOrSymptom): static {
        $this->properties['signOrSymptom'] = $signOrSymptom;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSignOrSymptom() {
        return $this->properties['signOrSymptom'];
    }

    /**
     * The status of the study (enumerated).
     *
     * @param $status ||
     * @return static
     **/
    public function setStatus($status): static {
        $this->properties['status'] = $status;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getStatus() {
        return $this->properties['status'];
    }

    /**
     * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
     *
     * @param $primaryPrevention 
     * @return static
     **/
    public function setPrimaryPrevention($primaryPrevention): static {
        $this->properties['primaryPrevention'] = $primaryPrevention;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPrimaryPrevention() {
        return $this->properties['primaryPrevention'];
    }

    /**
     * The expected progression of the condition if it is not treated and allowed to progress naturally.
     *
     * @param $naturalProgression 
     * @return static
     **/
    public function setNaturalProgression($naturalProgression): static {
        $this->properties['naturalProgression'] = $naturalProgression;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNaturalProgression() {
        return $this->properties['naturalProgression'];
    }

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     *
     * @param $epidemiology 
     * @return static
     **/
    public function setEpidemiology($epidemiology): static {
        $this->properties['epidemiology'] = $epidemiology;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEpidemiology() {
        return $this->properties['epidemiology'];
    }


}
