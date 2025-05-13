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
 * Any rule set or interactive tool for estimating the risk of developing a
 * complication or condition.
 *
 * @see https://schema.org/MedicalRiskEstimator
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalRiskEstimator extends MedicalEntity
{
    public static function factory(): MedicalRiskEstimator
    {
        return new MedicalRiskEstimator('https://schema.org/', 'MedicalRiskEstimator');
    }

    /**
     * A modifiable or non-modifiable risk factor included in the calculation, e.g.
     * age, coexisting condition.
     *
     * @param $includedRiskFactor \LengthOfRope\JSONLD\Schema\MedicalRiskFactor
     * @return static
     **/
    public function setIncludedRiskFactor($includedRiskFactor): static {
        $this->properties['includedRiskFactor'] = $includedRiskFactor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalRiskFactor
     **/
    public function getIncludedRiskFactor() {
        return $this->properties['includedRiskFactor'];
    }
    /**
     * The condition, complication, or symptom whose risk is being estimated.
     *
     * @param $estimatesRiskOf \LengthOfRope\JSONLD\Schema\MedicalEntity
     * @return static
     **/
    public function setEstimatesRiskOf($estimatesRiskOf): static {
        $this->properties['estimatesRiskOf'] = $estimatesRiskOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalEntity
     **/
    public function getEstimatesRiskOf() {
        return $this->properties['estimatesRiskOf'];
    }
}
