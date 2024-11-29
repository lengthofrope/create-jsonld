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
class DietarySupplementSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new DietarySupplementSchema('https://schema.org/', 'DietarySupplement');
    }

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     *
     * @param $legalStatus ||
     **/
    public function setLegalStatus($legalStatus) {
        $this->properties['legalStatus'] = $legalStatus;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getLegalStatus() {
        return $this->properties['legalStatus'];
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     * @param $recommendedIntake 
     **/
    public function setRecommendedIntake($recommendedIntake) {
        $this->properties['recommendedIntake'] = $recommendedIntake;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRecommendedIntake() {
        return $this->properties['recommendedIntake'];
    }

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     *
     * @param $mechanismOfAction 
     **/
    public function setMechanismOfAction($mechanismOfAction) {
        $this->properties['mechanismOfAction'] = $mechanismOfAction;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMechanismOfAction() {
        return $this->properties['mechanismOfAction'];
    }

    /**
     * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions, and documented efficacy of the supplement.
     *
     * @param $safetyConsideration 
     **/
    public function setSafetyConsideration($safetyConsideration) {
        $this->properties['safetyConsideration'] = $safetyConsideration;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSafetyConsideration() {
        return $this->properties['safetyConsideration'];
    }

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     * @param $isProprietary 
     **/
    public function setIsProprietary($isProprietary) {
        $this->properties['isProprietary'] = $isProprietary;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsProprietary() {
        return $this->properties['isProprietary'];
    }

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     *
     * @param $targetPopulation 
     **/
    public function setTargetPopulation($targetPopulation) {
        $this->properties['targetPopulation'] = $targetPopulation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTargetPopulation() {
        return $this->properties['targetPopulation'];
    }

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     *
     * @param $proprietaryName 
     **/
    public function setProprietaryName($proprietaryName) {
        $this->properties['proprietaryName'] = $proprietaryName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProprietaryName() {
        return $this->properties['proprietaryName'];
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     * @param $maximumIntake 
     **/
    public function setMaximumIntake($maximumIntake) {
        $this->properties['maximumIntake'] = $maximumIntake;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMaximumIntake() {
        return $this->properties['maximumIntake'];
    }

    /**
     * The generic name of this drug or supplement.
     *
     * @param $nonProprietaryName 
     **/
    public function setNonProprietaryName($nonProprietaryName) {
        $this->properties['nonProprietaryName'] = $nonProprietaryName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNonProprietaryName() {
        return $this->properties['nonProprietaryName'];
    }

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     * @param $activeIngredient 
     **/
    public function setActiveIngredient($activeIngredient) {
        $this->properties['activeIngredient'] = $activeIngredient;

        return $this;
    }

    /**
     * @return 
     **/
    public function getActiveIngredient() {
        return $this->properties['activeIngredient'];
    }


}
