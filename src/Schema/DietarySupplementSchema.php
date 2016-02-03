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
 * A product taken by mouth that contains a dietary ingredient intended to supplement the diet. Dietary ingredients may include vitamins, minerals, herbs or other botanicals, amino acids, and substances such as enzymes, organ tissues, glandulars and metabolites.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DietarySupplementSchema extends MedicalTherapySchema
{
    public static function factory()
    {
        return new DietarySupplementSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     **/
    private $activeIngredient;
    public function setActiveIngredient($activeIngredient) {
        $this->activeIngredient = $activeIngredient;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getActiveIngredient() {
        return $this->activeIngredient;
    }

    /**
     * Descriptive information establishing a historical perspective on the supplement. May include the rationale for the name, the population where the supplement first came to prominence, etc.
     **/
    private $background;
    public function setBackground($background) {
        $this->background = $background;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getBackground() {
        return $this->background;
    }

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     **/
    private $dosageForm;
    public function setDosageForm($dosageForm) {
        $this->dosageForm = $dosageForm;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getDosageForm() {
        return $this->dosageForm;
    }

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     **/
    private $isProprietary;
    public function setIsProprietary($isProprietary) {
        $this->isProprietary = $isProprietary;

        return $this;
    }

    /**
     * @return BooleanSchema     
     **/
    public function getIsProprietary() {
        return $this->isProprietary;
    }

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     **/
    private $legalStatus;
    public function setLegalStatus($legalStatus) {
        $this->legalStatus = $legalStatus;

        return $this;
    }

    /**
     * @return DrugLegalStatusSchema     
     **/
    public function getLegalStatus() {
        return $this->legalStatus;
    }

    /**
     * The manufacturer of the product.
     **/
    private $manufacturer;
    public function setManufacturer($manufacturer) {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * @return OrganizationSchema     
     **/
    public function getManufacturer() {
        return $this->manufacturer;
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     **/
    private $maximumIntake;
    public function setMaximumIntake($maximumIntake) {
        $this->maximumIntake = $maximumIntake;

        return $this;
    }

    /**
     * @return MaximumDoseScheduleSchema     
     **/
    public function getMaximumIntake() {
        return $this->maximumIntake;
    }

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     **/
    private $mechanismOfAction;
    public function setMechanismOfAction($mechanismOfAction) {
        $this->mechanismOfAction = $mechanismOfAction;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getMechanismOfAction() {
        return $this->mechanismOfAction;
    }

    /**
     * The generic name of this drug or supplement.
     **/
    private $nonProprietaryName;
    public function setNonProprietaryName($nonProprietaryName) {
        $this->nonProprietaryName = $nonProprietaryName;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getNonProprietaryName() {
        return $this->nonProprietaryName;
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     **/
    private $recommendedIntake;
    public function setRecommendedIntake($recommendedIntake) {
        $this->recommendedIntake = $recommendedIntake;

        return $this;
    }

    /**
     * @return RecommendedDoseScheduleSchema     
     **/
    public function getRecommendedIntake() {
        return $this->recommendedIntake;
    }

    /**
     * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions, and documented efficacy of the supplement.
     **/
    private $safetyConsideration;
    public function setSafetyConsideration($safetyConsideration) {
        $this->safetyConsideration = $safetyConsideration;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getSafetyConsideration() {
        return $this->safetyConsideration;
    }

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     **/
    private $targetPopulation;
    public function setTargetPopulation($targetPopulation) {
        $this->targetPopulation = $targetPopulation;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getTargetPopulation() {
        return $this->targetPopulation;
    }


}
