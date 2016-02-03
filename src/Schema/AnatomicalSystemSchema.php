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
 * An anatomical system is a group of anatomical structures that work together to perform a certain task. Anatomical systems, such as organ systems, are one organizing principle of anatomy, and can includes circulatory, digestive, endocrine, integumentary, immune, lymphatic, muscular, nervous, reproductive, respiratory, skeletal, urinary, vestibular, and other systems.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AnatomicalSystemSchema extends MedicalEntitySchema
{
    public static function factory()
    {
        return new AnatomicalSystemSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
     **/
    private $associatedPathophysiology;
    public function setAssociatedPathophysiology($associatedPathophysiology) {
        $this->associatedPathophysiology = $associatedPathophysiology;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getAssociatedPathophysiology() {
        return $this->associatedPathophysiology;
    }

    /**
     * The underlying anatomical structures, such as organs, that comprise the anatomical system.
     **/
    private $comprisedOf;
    public function setComprisedOf($comprisedOf) {
        $this->comprisedOf = $comprisedOf;

        return $this;
    }

    /**
     * @return AnatomicalStructureSchema|AnatomicalSystemSchema     **/
    public function getComprisedOf() {
        return $this->comprisedOf;
    }

    /**
     * A medical condition associated with this anatomy.
     **/
    private $relatedCondition;
    public function setRelatedCondition($relatedCondition) {
        $this->relatedCondition = $relatedCondition;

        return $this;
    }

    /**
     * @return MedicalConditionSchema     **/
    public function getRelatedCondition() {
        return $this->relatedCondition;
    }

    /**
     * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
     **/
    private $relatedStructure;
    public function setRelatedStructure($relatedStructure) {
        $this->relatedStructure = $relatedStructure;

        return $this;
    }

    /**
     * @return AnatomicalStructureSchema     **/
    public function getRelatedStructure() {
        return $this->relatedStructure;
    }

    /**
     * A medical therapy related to this anatomy.
     **/
    private $relatedTherapy;
    public function setRelatedTherapy($relatedTherapy) {
        $this->relatedTherapy = $relatedTherapy;

        return $this;
    }

    /**
     * @return MedicalTherapySchema     **/
    public function getRelatedTherapy() {
        return $this->relatedTherapy;
    }


}
