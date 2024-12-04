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
 * An educational or occupational credential. A diploma, academic degree, certification, qualification, badge, etc., that may be awarded to a person or other entity that meets the requirements defined by the credentialer.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class EducationalOccupationalCredential extends CreativeWork
{
    public static function factory(): EducationalOccupationalCredential
    {
        return new EducationalOccupationalCredential('https://schema.org/', 'EducationalOccupationalCredential');
    }

    /**
     * An organization that acknowledges the validity, value or utility of a credential. Note: recognition may include a process of quality assurance or accreditation.
     *
     * @param $recognizedBy 
     * @return static
     **/
    public function setRecognizedBy($recognizedBy): static {
        $this->properties['recognizedBy'] = $recognizedBy;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRecognizedBy() {
        return $this->properties['recognizedBy'];
    }

    /**
     * The geographic area where the item is valid. Applies for example to a [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]]. 
     *
     * @param $validIn 
     * @return static
     **/
    public function setValidIn($validIn): static {
        $this->properties['validIn'] = $validIn;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValidIn() {
        return $this->properties['validIn'];
    }

    /**
     * The duration of validity of a permit or similar thing.
     *
     * @param $validFor 
     * @return static
     **/
    public function setValidFor($validFor): static {
        $this->properties['validFor'] = $validFor;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValidFor() {
        return $this->properties['validFor'];
    }

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
     *
     * @param $educationalLevel ||
     * @return static
     **/
    public function setEducationalLevel($educationalLevel): static {
        $this->properties['educationalLevel'] = $educationalLevel;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getEducationalLevel() {
        return $this->properties['educationalLevel'];
    }

    /**
     * The category or type of credential being described, for example "degree”, “certificate”, “badge”, or more specific term.
     *
     * @param $credentialCategory ||
     * @return static
     **/
    public function setCredentialCategory($credentialCategory): static {
        $this->properties['credentialCategory'] = $credentialCategory;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getCredentialCategory() {
        return $this->properties['credentialCategory'];
    }

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something such as earn an Educational Occupational Credential or understand a LearningResource.
     *
     * @param $competencyRequired ||
     * @return static
     **/
    public function setCompetencyRequired($competencyRequired): static {
        $this->properties['competencyRequired'] = $competencyRequired;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getCompetencyRequired() {
        return $this->properties['competencyRequired'];
    }


}
