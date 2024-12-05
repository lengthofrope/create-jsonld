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
 * A medical trial is a type of medical study that uses a scientific process to
 * compare the safety and efficacy of medical therapies or medical procedures. In
 * general, medical trials are controlled and subjects are allocated at random to
 * the different treatment and/or control groups.
 *
 * @see https://schema.org/MedicalTrial
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalTrial extends MedicalStudy
{
    public static function factory(): MedicalTrial
    {
        return new MedicalTrial('https://schema.org/', 'MedicalTrial');
    }

    /**
     * Specifics about the trial design (enumerated).
     *
     * @param $trialDesign \LengthOfRope\JSONLD\Schema\MedicalTrialDesign
     * @return static
     **/
    public function setTrialDesign($trialDesign): static {
        $this->properties['trialDesign'] = $trialDesign;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalTrialDesign
     **/
    public function getTrialDesign() {
        return $this->properties['trialDesign'];
    }
}
