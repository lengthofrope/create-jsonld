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
 * A product taken by mouth that contains a dietary ingredient intended to
 * supplement the diet. Dietary ingredients may include vitamins, minerals, herbs
 * or other botanicals, amino acids, and substances such as enzymes, organ tissues,
 * glandulars and metabolites.
 *
 * @see https://schema.org/DietarySupplement
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DietarySupplement extends Substance
{
    public static function factory(): DietarySupplement
    {
        return new DietarySupplement('https://schema.org/', 'DietarySupplement');
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a
     * specific recommending authority.
     *
     * @param $maximumIntake \LengthOfRope\JSONLD\Schema\MaximumDoseSchedule
     * @return static
     **/
    public function setMaximumIntake($maximumIntake): static {
        $this->properties['maximumIntake'] = $maximumIntake;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MaximumDoseSchedule
     **/
    public function getMaximumIntake() {
        return $this->properties['maximumIntake'];
    }
    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     * @param $activeIngredient \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setActiveIngredient($activeIngredient): static {
        $this->properties['activeIngredient'] = $activeIngredient;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getActiveIngredient() {
        return $this->properties['activeIngredient'];
    }
    /**
     * The drug or supplement's legal status, including any controlled substance
     * schedules that apply.
     *
     * @param $legalStatus \LengthOfRope\JSONLD\Schema\MedicalEnumeration|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DrugLegalStatus
     * @return static
     **/
    public function setLegalStatus($legalStatus): static {
        $this->properties['legalStatus'] = $legalStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalEnumeration|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DrugLegalStatus
     **/
    public function getLegalStatus() {
        return $this->properties['legalStatus'];
    }
    /**
     * Any potential safety concern associated with the supplement. May include
     * interactions with other drugs and foods, pregnancy, breastfeeding, known adverse
     * reactions, and documented efficacy of the supplement.
     *
     * @param $safetyConsideration \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setSafetyConsideration($safetyConsideration): static {
        $this->properties['safetyConsideration'] = $safetyConsideration;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getSafetyConsideration() {
        return $this->properties['safetyConsideration'];
    }
    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     *
     * @param $proprietaryName \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setProprietaryName($proprietaryName): static {
        $this->properties['proprietaryName'] = $proprietaryName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getProprietaryName() {
        return $this->properties['proprietaryName'];
    }
    /**
     * The specific biochemical interaction through which this drug or supplement
     * produces its pharmacological effect.
     *
     * @param $mechanismOfAction \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setMechanismOfAction($mechanismOfAction): static {
        $this->properties['mechanismOfAction'] = $mechanismOfAction;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getMechanismOfAction() {
        return $this->properties['mechanismOfAction'];
    }
    /**
     * The generic name of this drug or supplement.
     *
     * @param $nonProprietaryName \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setNonProprietaryName($nonProprietaryName): static {
        $this->properties['nonProprietaryName'] = $nonProprietaryName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getNonProprietaryName() {
        return $this->properties['nonProprietaryName'];
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
    /**
     * Recommended intake of this supplement for a given population as defined by a
     * specific recommending authority.
     *
     * @param $recommendedIntake \LengthOfRope\JSONLD\Schema\RecommendedDoseSchedule
     * @return static
     **/
    public function setRecommendedIntake($recommendedIntake): static {
        $this->properties['recommendedIntake'] = $recommendedIntake;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\RecommendedDoseSchedule
     **/
    public function getRecommendedIntake() {
        return $this->properties['recommendedIntake'];
    }
    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     * @param $isProprietary \LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setIsProprietary($isProprietary): static {
        $this->properties['isProprietary'] = $isProprietary;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getIsProprietary() {
        return $this->properties['isProprietary'];
    }
}
