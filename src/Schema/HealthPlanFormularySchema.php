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
 * For a given health insurance plan, the specification for costs and coverage of prescription drugs.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class HealthPlanFormularySchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new HealthPlanFormularySchema('https://schema.org/', 'HealthPlanFormulary');
    }

    /**
     * The costs to the patient for services under this network or formulary.
     *
     * @param $healthPlanCostSharing 
     **/
    public function setHealthPlanCostSharing($healthPlanCostSharing) {
        $this->properties['healthPlanCostSharing'] = $healthPlanCostSharing;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHealthPlanCostSharing() {
        return $this->properties['healthPlanCostSharing'];
    }

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     *
     * @param $healthPlanDrugTier 
     **/
    public function setHealthPlanDrugTier($healthPlanDrugTier) {
        $this->properties['healthPlanDrugTier'] = $healthPlanDrugTier;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHealthPlanDrugTier() {
        return $this->properties['healthPlanDrugTier'];
    }

    /**
     * Whether prescriptions can be delivered by mail.
     *
     * @param $offersPrescriptionByMail 
     **/
    public function setOffersPrescriptionByMail($offersPrescriptionByMail) {
        $this->properties['offersPrescriptionByMail'] = $offersPrescriptionByMail;

        return $this;
    }

    /**
     * @return 
     **/
    public function getOffersPrescriptionByMail() {
        return $this->properties['offersPrescriptionByMail'];
    }


}
