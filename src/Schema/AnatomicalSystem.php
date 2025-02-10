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
 * An anatomical system is a group of anatomical structures that work together to
 * perform a certain task. Anatomical systems, such as organ systems, are one
 * organizing principle of anatomy, and can include circulatory, digestive,
 * endocrine, integumentary, immune, lymphatic, muscular, nervous, reproductive,
 * respiratory, skeletal, urinary, vestibular, and other systems.
 *
 * @see https://schema.org/AnatomicalSystem
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AnatomicalSystem extends MedicalEntity
{
    public static function factory(): AnatomicalSystem
    {
        return new AnatomicalSystem('https://schema.org/', 'AnatomicalSystem');
    }

    /**
     * Related anatomical structure(s) that are not part of the system but relate or
     * connect to it, such as vascular bundles associated with an organ system.
     *
     * @param $relatedStructure \LengthOfRope\JSONLD\Schema\AnatomicalStructure
     * @return static
     **/
    public function setRelatedStructure($relatedStructure): static {
        $this->properties['relatedStructure'] = $relatedStructure;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AnatomicalStructure
     **/
    public function getRelatedStructure() {
        return $this->properties['relatedStructure'];
    }
    /**
     * A medical therapy related to this anatomy.
     *
     * @param $relatedTherapy \LengthOfRope\JSONLD\Schema\MedicalTherapy
     * @return static
     **/
    public function setRelatedTherapy($relatedTherapy): static {
        $this->properties['relatedTherapy'] = $relatedTherapy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalTherapy
     **/
    public function getRelatedTherapy() {
        return $this->properties['relatedTherapy'];
    }
    /**
     * Specifying something physically contained by something else. Typically used here
     * for the underlying anatomical structures, such as organs, that comprise the
     * anatomical system.
     *
     * @param $comprisedOf \LengthOfRope\JSONLD\Schema\AnatomicalStructure|\LengthOfRope\JSONLD\Schema\AnatomicalSystem
     * @return static
     **/
    public function setComprisedOf($comprisedOf): static {
        $this->properties['comprisedOf'] = $comprisedOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AnatomicalStructure|\LengthOfRope\JSONLD\Schema\AnatomicalSystem
     **/
    public function getComprisedOf() {
        return $this->properties['comprisedOf'];
    }
    /**
     * A medical condition associated with this anatomy.
     *
     * @param $relatedCondition \LengthOfRope\JSONLD\Schema\MedicalCondition
     * @return static
     **/
    public function setRelatedCondition($relatedCondition): static {
        $this->properties['relatedCondition'] = $relatedCondition;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalCondition
     **/
    public function getRelatedCondition() {
        return $this->properties['relatedCondition'];
    }
    /**
     * If applicable, a description of the pathophysiology associated with the
     * anatomical system, including potential abnormal changes in the mechanical,
     * physical, and biochemical functions of the system.
     *
     * @param $associatedPathophysiology \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAssociatedPathophysiology($associatedPathophysiology): static {
        $this->properties['associatedPathophysiology'] = $associatedPathophysiology;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAssociatedPathophysiology() {
        return $this->properties['associatedPathophysiology'];
    }
}
