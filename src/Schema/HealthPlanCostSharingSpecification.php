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
 * A description of costs to the patient under a given network or formulary.
 *
 * @see https://schema.org/HealthPlanCostSharingSpecification
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class HealthPlanCostSharingSpecification extends Intangible
{
    public static function factory(): HealthPlanCostSharingSpecification
    {
        return new HealthPlanCostSharingSpecification('https://schema.org/', 'HealthPlanCostSharingSpecification');
    }

    /**
     * The copay amount.
     *
     * @param $healthPlanCopay \LengthOfRope\JSONLD\Schema\PriceSpecification
     * @return static
     **/
    public function setHealthPlanCopay($healthPlanCopay): static {
        $this->properties['healthPlanCopay'] = $healthPlanCopay;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PriceSpecification
     **/
    public function getHealthPlanCopay() {
        return $this->properties['healthPlanCopay'];
    }
    /**
     * Whether the copay is before or after deductible, etc. TODO: Is this a closed
     * set?
     *
     * @param $healthPlanCopayOption \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setHealthPlanCopayOption($healthPlanCopayOption): static {
        $this->properties['healthPlanCopayOption'] = $healthPlanCopayOption;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getHealthPlanCopayOption() {
        return $this->properties['healthPlanCopayOption'];
    }
    /**
     * The category or type of pharmacy associated with this cost sharing.
     *
     * @param $healthPlanPharmacyCategory \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setHealthPlanPharmacyCategory($healthPlanPharmacyCategory): static {
        $this->properties['healthPlanPharmacyCategory'] = $healthPlanPharmacyCategory;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getHealthPlanPharmacyCategory() {
        return $this->properties['healthPlanPharmacyCategory'];
    }
    /**
     * The rate of coinsurance expressed as a number between 0.0 and 1.0.
     *
     * @param $healthPlanCoinsuranceRate \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setHealthPlanCoinsuranceRate($healthPlanCoinsuranceRate): static {
        $this->properties['healthPlanCoinsuranceRate'] = $healthPlanCoinsuranceRate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getHealthPlanCoinsuranceRate() {
        return $this->properties['healthPlanCoinsuranceRate'];
    }
    /**
     * Whether the coinsurance applies before or after deductible, etc. TODO: Is this a
     * closed set?
     *
     * @param $healthPlanCoinsuranceOption \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setHealthPlanCoinsuranceOption($healthPlanCoinsuranceOption): static {
        $this->properties['healthPlanCoinsuranceOption'] = $healthPlanCoinsuranceOption;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getHealthPlanCoinsuranceOption() {
        return $this->properties['healthPlanCoinsuranceOption'];
    }
}
