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
class MedicalConditionSchema extends MedicalEntitySchema
{
    public static function factory()
    {
        return new MedicalConditionSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     **/
    private $associatedAnatomy;
    public function setAssociatedAnatomy($associatedAnatomy) {
        $this->associatedAnatomy = $associatedAnatomy;

        return $this;
    }

    /**
     * @return AnatomicalStructureSchema|AnatomicalSystemSchema|SuperficialAnatomySchema     
     **/
    public function getAssociatedAnatomy() {
        return $this->associatedAnatomy;
    }

    /**
     * An underlying cause. More specifically, one of the causative agent(s) that are most directly responsible for the pathophysiologic process that eventually results in the occurrence.
     **/
    private $cause;
    public function setCause($cause) {
        $this->cause = $cause;

        return $this;
    }

    /**
     * @return MedicalCauseSchema     
     **/
    public function getCause() {
        return $this->cause;
    }

    /**
     * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
     **/
    private $differentialDiagnosis;
    public function setDifferentialDiagnosis($differentialDiagnosis) {
        $this->differentialDiagnosis = $differentialDiagnosis;

        return $this;
    }

    /**
     * @return DDxElementSchema     
     **/
    public function getDifferentialDiagnosis() {
        return $this->differentialDiagnosis;
    }

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     **/
    private $epidemiology;
    public function setEpidemiology($epidemiology) {
        $this->epidemiology = $epidemiology;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getEpidemiology() {
        return $this->epidemiology;
    }

    /**
     * The likely outcome in either the short term or long term of the medical condition.
     **/
    private $expectedPrognosis;
    public function setExpectedPrognosis($expectedPrognosis) {
        $this->expectedPrognosis = $expectedPrognosis;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getExpectedPrognosis() {
        return $this->expectedPrognosis;
    }

    /**
     * The expected progression of the condition if it is not treated and allowed to progress naturally.
     **/
    private $naturalProgression;
    public function setNaturalProgression($naturalProgression) {
        $this->naturalProgression = $naturalProgression;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getNaturalProgression() {
        return $this->naturalProgression;
    }

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     **/
    private $pathophysiology;
    public function setPathophysiology($pathophysiology) {
        $this->pathophysiology = $pathophysiology;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getPathophysiology() {
        return $this->pathophysiology;
    }

    /**
     * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the disease, extension of the condition to other organ systems, etc.
     **/
    private $possibleComplication;
    public function setPossibleComplication($possibleComplication) {
        $this->possibleComplication = $possibleComplication;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getPossibleComplication() {
        return $this->possibleComplication;
    }

    /**
     * A possible treatment to address this condition, sign or symptom.
     **/
    private $possibleTreatment;
    public function setPossibleTreatment($possibleTreatment) {
        $this->possibleTreatment = $possibleTreatment;

        return $this;
    }

    /**
     * @return MedicalTherapySchema     
     **/
    public function getPossibleTreatment() {
        return $this->possibleTreatment;
    }

    /**
     * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
     **/
    private $primaryPrevention;
    public function setPrimaryPrevention($primaryPrevention) {
        $this->primaryPrevention = $primaryPrevention;

        return $this;
    }

    /**
     * @return MedicalTherapySchema     
     **/
    public function getPrimaryPrevention() {
        return $this->primaryPrevention;
    }

    /**
     * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age,  coexisting condition.
     **/
    private $riskFactor;
    public function setRiskFactor($riskFactor) {
        $this->riskFactor = $riskFactor;

        return $this;
    }

    /**
     * @return MedicalRiskFactorSchema     
     **/
    public function getRiskFactor() {
        return $this->riskFactor;
    }

    /**
     * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
     **/
    private $secondaryPrevention;
    public function setSecondaryPrevention($secondaryPrevention) {
        $this->secondaryPrevention = $secondaryPrevention;

        return $this;
    }

    /**
     * @return MedicalTherapySchema     
     **/
    public function getSecondaryPrevention() {
        return $this->secondaryPrevention;
    }

    /**
     * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are the subjective experience of the medical condition.
     **/
    private $signOrSymptom;
    public function setSignOrSymptom($signOrSymptom) {
        $this->signOrSymptom = $signOrSymptom;

        return $this;
    }

    /**
     * @return MedicalSignOrSymptomSchema     
     **/
    public function getSignOrSymptom() {
        return $this->signOrSymptom;
    }

    /**
     * The stage of the condition, if applicable.
     **/
    private $stage;
    public function setStage($stage) {
        $this->stage = $stage;

        return $this;
    }

    /**
     * @return MedicalConditionStageSchema     
     **/
    public function getStage() {
        return $this->stage;
    }

    /**
     * A more specific type of the condition, where applicable, for example 'Type 1 Diabetes', 'Type 2 Diabetes', or 'Gestational Diabetes' for Diabetes.
     **/
    private $subtype;
    public function setSubtype($subtype) {
        $this->subtype = $subtype;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getSubtype() {
        return $this->subtype;
    }

    /**
     * A medical test typically performed given this condition.
     **/
    private $typicalTest;
    public function setTypicalTest($typicalTest) {
        $this->typicalTest = $typicalTest;

        return $this;
    }

    /**
     * @return MedicalTestSchema     
     **/
    public function getTypicalTest() {
        return $this->typicalTest;
    }


}
