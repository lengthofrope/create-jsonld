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
 * Any condition of the human body that affects the normal functioning of a person, whether physically or mentally. Includes diseases, injuries, disabilities, disorders, syndromes, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalConditionSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new MedicalConditionSchema('https://schema.org/', 'MedicalCondition');
    }

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     *
     * @param $pathophysiology 
     **/
    public function setPathophysiology($pathophysiology) {
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
     **/
    public function setPossibleComplication($possibleComplication) {
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
     **/
    public function setPossibleTreatment($possibleTreatment) {
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
     **/
    public function setExpectedPrognosis($expectedPrognosis) {
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
     **/
    public function setSecondaryPrevention($secondaryPrevention) {
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
     **/
    public function setStage($stage) {
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
     **/
    public function setTypicalTest($typicalTest) {
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
     * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
     *
     * @param $differentialDiagnosis 
     **/
    public function setDifferentialDiagnosis($differentialDiagnosis) {
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
     **/
    public function setRiskFactor($riskFactor) {
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
     **/
    public function setAssociatedAnatomy($associatedAnatomy) {
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
     **/
    public function setSignOrSymptom($signOrSymptom) {
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
     **/
    public function setStatus($status) {
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
     **/
    public function setPrimaryPrevention($primaryPrevention) {
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
     **/
    public function setNaturalProgression($naturalProgression) {
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
     **/
    public function setEpidemiology($epidemiology) {
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
