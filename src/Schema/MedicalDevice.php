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
 * Any object used in a medical capacity, such as to diagnose or treat a patient.
 *
 * @see https://schema.org/MedicalDevice
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalDevice extends MedicalEntity
{
    public static function factory(): MedicalDevice
    {
        return new MedicalDevice('https://schema.org/', 'MedicalDevice');
    }

    /**
     * A description of the procedure involved in setting up, using, and/or installing
     * the device.
     *
     * @param $procedure \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setProcedure($procedure): static {
        $this->properties['procedure'] = $procedure;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getProcedure() {
        return $this->properties['procedure'];
    }
    /**
     * A description of the workup, testing, and other preparations required before
     * implanting this device.
     *
     * @param $preOp \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setPreOp($preOp): static {
        $this->properties['preOp'] = $preOp;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getPreOp() {
        return $this->properties['preOp'];
    }
    /**
     * A possible complication and/or side effect of this therapy. If it is known that
     * an adverse outcome is serious (resulting in death, disability, or permanent
     * damage; requiring hospitalization; or otherwise life-threatening or requiring
     * immediate medical attention), tag it as a seriousAdverseOutcome instead.
     *
     * @param $adverseOutcome \LengthOfRope\JSONLD\Schema\MedicalEntity
     * @return static
     **/
    public function setAdverseOutcome($adverseOutcome): static {
        $this->properties['adverseOutcome'] = $adverseOutcome;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalEntity
     **/
    public function getAdverseOutcome() {
        return $this->properties['adverseOutcome'];
    }
    /**
     * A contraindication for this therapy.
     *
     * @param $contraindication \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\MedicalContraindication
     * @return static
     **/
    public function setContraindication($contraindication): static {
        $this->properties['contraindication'] = $contraindication;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\MedicalContraindication
     **/
    public function getContraindication() {
        return $this->properties['contraindication'];
    }
    /**
     * A possible serious complication and/or serious side effect of this therapy.
     * Serious adverse outcomes include those that are life-threatening; result in
     * death, disability, or permanent damage; require hospitalization or prolong
     * existing hospitalization; cause congenital anomalies or birth defects; or
     * jeopardize the patient and may require medical or surgical intervention to
     * prevent one of the outcomes in this definition.
     *
     * @param $seriousAdverseOutcome \LengthOfRope\JSONLD\Schema\MedicalEntity
     * @return static
     **/
    public function setSeriousAdverseOutcome($seriousAdverseOutcome): static {
        $this->properties['seriousAdverseOutcome'] = $seriousAdverseOutcome;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalEntity
     **/
    public function getSeriousAdverseOutcome() {
        return $this->properties['seriousAdverseOutcome'];
    }
    /**
     * A description of the postoperative procedures, care, and/or followups for this
     * device.
     *
     * @param $postOp \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setPostOp($postOp): static {
        $this->properties['postOp'] = $postOp;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getPostOp() {
        return $this->properties['postOp'];
    }
}
