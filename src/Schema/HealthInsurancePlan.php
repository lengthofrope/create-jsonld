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
 * A US-style health insurance plan, including PPOs, EPOs, and HMOs.
 *
 * @see https://schema.org/HealthInsurancePlan
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class HealthInsurancePlan extends Intangible
{
    public static function factory(): HealthInsurancePlan
    {
        return new HealthInsurancePlan('https://schema.org/', 'HealthInsurancePlan');
    }

    /**
     * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even
     * across different markets.)
     *
     * @param $healthPlanId \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setHealthPlanId($healthPlanId): static {
        $this->properties['healthPlanId'] = $healthPlanId;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getHealthPlanId() {
        return $this->properties['healthPlanId'];
    }
    /**
     * The URL that goes directly to the plan brochure for the specific standard plan
     * or plan variation.
     *
     * @param $healthPlanMarketingUrl \LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setHealthPlanMarketingUrl($healthPlanMarketingUrl): static {
        $this->properties['healthPlanMarketingUrl'] = $healthPlanMarketingUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getHealthPlanMarketingUrl() {
        return $this->properties['healthPlanMarketingUrl'];
    }
    /**
     * TODO.
     *
     * @param $healthPlanDrugOption \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setHealthPlanDrugOption($healthPlanDrugOption): static {
        $this->properties['healthPlanDrugOption'] = $healthPlanDrugOption;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getHealthPlanDrugOption() {
        return $this->properties['healthPlanDrugOption'];
    }
    /**
     * Formularies covered by this plan.
     *
     * @param $includesHealthPlanFormulary \LengthOfRope\JSONLD\Schema\HealthPlanFormulary
     * @return static
     **/
    public function setIncludesHealthPlanFormulary($includesHealthPlanFormulary): static {
        $this->properties['includesHealthPlanFormulary'] = $includesHealthPlanFormulary;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\HealthPlanFormulary
     **/
    public function getIncludesHealthPlanFormulary() {
        return $this->properties['includesHealthPlanFormulary'];
    }
    /**
     * The standard for interpreting the Plan ID. The preferred is "HIOS". See the
     * Centers for Medicare & Medicaid Services for more details.
     *
     * @param $usesHealthPlanIdStandard \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setUsesHealthPlanIdStandard($usesHealthPlanIdStandard): static {
        $this->properties['usesHealthPlanIdStandard'] = $usesHealthPlanIdStandard;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getUsesHealthPlanIdStandard() {
        return $this->properties['usesHealthPlanIdStandard'];
    }
    /**
     * Networks covered by this plan.
     *
     * @param $includesHealthPlanNetwork \LengthOfRope\JSONLD\Schema\HealthPlanNetwork
     * @return static
     **/
    public function setIncludesHealthPlanNetwork($includesHealthPlanNetwork): static {
        $this->properties['includesHealthPlanNetwork'] = $includesHealthPlanNetwork;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\HealthPlanNetwork
     **/
    public function getIncludesHealthPlanNetwork() {
        return $this->properties['includesHealthPlanNetwork'];
    }
    /**
     * A contact point for a person or organization.
     *
     * @param $contactPoint \LengthOfRope\JSONLD\Schema\ContactPoint
     * @return static
     **/
    public function setContactPoint($contactPoint): static {
        $this->properties['contactPoint'] = $contactPoint;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ContactPoint
     **/
    public function getContactPoint() {
        return $this->properties['contactPoint'];
    }
    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     *
     * @param $healthPlanDrugTier \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setHealthPlanDrugTier($healthPlanDrugTier): static {
        $this->properties['healthPlanDrugTier'] = $healthPlanDrugTier;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getHealthPlanDrugTier() {
        return $this->properties['healthPlanDrugTier'];
    }
    /**
     * The URL that goes directly to the summary of benefits and coverage for the
     * specific standard plan or plan variation.
     *
     * @param $benefitsSummaryUrl \LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setBenefitsSummaryUrl($benefitsSummaryUrl): static {
        $this->properties['benefitsSummaryUrl'] = $benefitsSummaryUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getBenefitsSummaryUrl() {
        return $this->properties['benefitsSummaryUrl'];
    }
}
