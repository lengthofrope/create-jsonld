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
 * A strategy of regulating the intake of food to achieve or maintain a specific health-related goal.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DietSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new DietSchema('https://schema.org/', 'Diet');
    }

    /**
     * Medical expert advice related to the plan.
     *
     * @param $expertConsiderations 
     **/
    public function setExpertConsiderations($expertConsiderations) {
        $this->properties['expertConsiderations'] = $expertConsiderations;

        return $this;
    }

    /**
     * @return 
     **/
    public function getExpertConsiderations() {
        return $this->properties['expertConsiderations'];
    }

    /**
     * People or organizations that endorse the plan.
     *
     * @param $endorsers |
     **/
    public function setEndorsers($endorsers) {
        $this->properties['endorsers'] = $endorsers;

        return $this;
    }

    /**
     * @return |
     **/
    public function getEndorsers() {
        return $this->properties['endorsers'];
    }

    /**
     * Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
     *
     * @param $dietFeatures 
     **/
    public function setDietFeatures($dietFeatures) {
        $this->properties['dietFeatures'] = $dietFeatures;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDietFeatures() {
        return $this->properties['dietFeatures'];
    }

    /**
     * Specific physiologic benefits associated to the plan.
     *
     * @param $physiologicalBenefits 
     **/
    public function setPhysiologicalBenefits($physiologicalBenefits) {
        $this->properties['physiologicalBenefits'] = $physiologicalBenefits;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPhysiologicalBenefits() {
        return $this->properties['physiologicalBenefits'];
    }

    /**
     * Specific physiologic risks associated to the diet plan.
     *
     * @param $risks 
     **/
    public function setRisks($risks) {
        $this->properties['risks'] = $risks;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRisks() {
        return $this->properties['risks'];
    }


}
