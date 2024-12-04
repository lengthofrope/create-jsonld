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
 * Anatomical features that can be observed by sight (without dissection), including the form and proportions of the human body as well as surface landmarks that correspond to deeper subcutaneous structures. Superficial anatomy plays an important role in sports medicine, phlebotomy, and other medical specialties as underlying anatomical structures can be identified through surface palpation. For example, during back surgery, superficial anatomy can be used to palpate and count vertebrae to find the site of incision. Or in phlebotomy, superficial anatomy can be used to locate an underlying vein; for example, the median cubital vein can be located by palpating the borders of the cubital fossa (such as the epicondyles of the humerus) and then looking for the superficial signs of the vein, such as size, prominence, ability to refill after depression, and feel of surrounding tissue support. As another example, in a subluxation (dislocation) of the glenohumeral joint, the bony structure becomes pronounced with the deltoid muscle failing to cover the glenohumeral joint allowing the edges of the scapula to be superficially visible. Here, the superficial anatomy is the visible edges of the scapula, implying the underlying dislocation of the joint (the related anatomical structure).
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SuperficialAnatomy extends MedicalEntity
{
    public static function factory(): SuperficialAnatomy
    {
        return new SuperficialAnatomy('https://schema.org/', 'SuperficialAnatomy');
    }

    /**
     * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
     *
     * @param $significance 
     * @return static
     **/
    public function setSignificance($significance): static {
        $this->properties['significance'] = $significance;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSignificance() {
        return $this->properties['significance'];
    }

    /**
     * A medical therapy related to this anatomy.
     *
     * @param $relatedTherapy 
     * @return static
     **/
    public function setRelatedTherapy($relatedTherapy): static {
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
     * Anatomical systems or structures that relate to the superficial anatomy.
     *
     * @param $relatedAnatomy |
     * @return static
     **/
    public function setRelatedAnatomy($relatedAnatomy): static {
        $this->properties['relatedAnatomy'] = $relatedAnatomy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getRelatedAnatomy() {
        return $this->properties['relatedAnatomy'];
    }

    /**
     * A medical condition associated with this anatomy.
     *
     * @param $relatedCondition 
     * @return static
     **/
    public function setRelatedCondition($relatedCondition): static {
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
     * @return static
     **/
    public function setAssociatedPathophysiology($associatedPathophysiology): static {
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
