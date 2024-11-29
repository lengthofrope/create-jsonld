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
 * An anatomical system is a group of anatomical structures that work together to perform a certain task. Anatomical systems, such as organ systems, are one organizing principle of anatomy, and can include circulatory, digestive, endocrine, integumentary, immune, lymphatic, muscular, nervous, reproductive, respiratory, skeletal, urinary, vestibular, and other systems.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AnatomicalSystemSchema extends MedicalEntitySchema
{
    public static function factory()
    {
        return new AnatomicalSystemSchema('https://schema.org/', 'AnatomicalSystem');
    }

    /**
     * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
     *
     * @param $relatedStructure 
     **/
    public function setRelatedStructure($relatedStructure) {
        $this->properties['relatedStructure'] = $relatedStructure;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRelatedStructure() {
        return $this->properties['relatedStructure'];
    }

    /**
     * A medical therapy related to this anatomy.
     *
     * @param $relatedTherapy 
     **/
    public function setRelatedTherapy($relatedTherapy) {
        $this->properties['relatedTherapy'] = $relatedTherapy;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRelatedTherapy() {
        return $this->properties['relatedTherapy'];
    }

    /**
     * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the anatomical system.
     *
     * @param $comprisedOf |
     **/
    public function setComprisedOf($comprisedOf) {
        $this->properties['comprisedOf'] = $comprisedOf;

        return $this;
    }

    /**
     * @return |
     **/
    public function getComprisedOf() {
        return $this->properties['comprisedOf'];
    }

    /**
     * A medical condition associated with this anatomy.
     *
     * @param $relatedCondition 
     **/
    public function setRelatedCondition($relatedCondition) {
        $this->properties['relatedCondition'] = $relatedCondition;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRelatedCondition() {
        return $this->properties['relatedCondition'];
    }

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
     *
     * @param $associatedPathophysiology 
     **/
    public function setAssociatedPathophysiology($associatedPathophysiology) {
        $this->properties['associatedPathophysiology'] = $associatedPathophysiology;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAssociatedPathophysiology() {
        return $this->properties['associatedPathophysiology'];
    }


}
