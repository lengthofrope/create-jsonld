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
 * Any medical intervention designed to prevent, treat, and cure human diseases and medical conditions, including both curative and palliative therapies. Medical therapies are typically processes of care relying upon pharmacotherapy, behavioral therapy, supportive therapy (with fluid or nutrition for example), or detoxification (e.g. hemodialysis) aimed at improving or preventing a health condition.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalTherapy extends TherapeuticProcedure
{
    public static function factory(): MedicalTherapy
    {
        return new MedicalTherapy('https://schema.org/', 'MedicalTherapy');
    }

    /**
     * A contraindication for this therapy.
     *
     * @param $contraindication |
     * @return static
     **/
    public function setContraindication($contraindication): static {
        $this->properties['contraindication'] = $contraindication;

        return $this;
    }

    /**
     * @return |
     **/
    public function getContraindication() {
        return $this->properties['contraindication'];
    }

    /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
     *
     * @param $seriousAdverseOutcome 
     * @return static
     **/
    public function setSeriousAdverseOutcome($seriousAdverseOutcome): static {
        $this->properties['seriousAdverseOutcome'] = $seriousAdverseOutcome;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSeriousAdverseOutcome() {
        return $this->properties['seriousAdverseOutcome'];
    }

    /**
     * A therapy that duplicates or overlaps this one.
     *
     * @param $duplicateTherapy 
     * @return static
     **/
    public function setDuplicateTherapy($duplicateTherapy): static {
        $this->properties['duplicateTherapy'] = $duplicateTherapy;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDuplicateTherapy() {
        return $this->properties['duplicateTherapy'];
    }


}
