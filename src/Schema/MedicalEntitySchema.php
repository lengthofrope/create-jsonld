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
 * The most generic type of entity related to health and the practice of medicine.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalEntitySchema extends ThingSchema
{
    public static function factory(): MedicalEntitySchema
    {
        return new MedicalEntitySchema('https://schema.org/', 'MedicalEntity');
    }

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     *
     * @param $legalStatus ||
     * @return static
     **/
    public function setLegalStatus($legalStatus): static {
        $this->properties['legalStatus'] = $legalStatus;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getLegalStatus() {
        return $this->properties['legalStatus'];
    }

    /**
     * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
     *
     * @param $recognizingAuthority 
     * @return static
     **/
    public function setRecognizingAuthority($recognizingAuthority): static {
        $this->properties['recognizingAuthority'] = $recognizingAuthority;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRecognizingAuthority() {
        return $this->properties['recognizingAuthority'];
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     *
     * @param $funding 
     * @return static
     **/
    public function setFunding($funding): static {
        $this->properties['funding'] = $funding;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFunding() {
        return $this->properties['funding'];
    }

    /**
     * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     *
     * @param $code 
     * @return static
     **/
    public function setCode($code): static {
        $this->properties['code'] = $code;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCode() {
        return $this->properties['code'];
    }

    /**
     * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
     *
     * @param $medicineSystem 
     * @return static
     **/
    public function setMedicineSystem($medicineSystem): static {
        $this->properties['medicineSystem'] = $medicineSystem;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMedicineSystem() {
        return $this->properties['medicineSystem'];
    }

    /**
     * A medical study or trial related to this entity.
     *
     * @param $study 
     * @return static
     **/
    public function setStudy($study): static {
        $this->properties['study'] = $study;

        return $this;
    }

    /**
     * @return 
     **/
    public function getStudy() {
        return $this->properties['study'];
    }

    /**
     * A medical guideline related to this entity.
     *
     * @param $guideline 
     * @return static
     **/
    public function setGuideline($guideline): static {
        $this->properties['guideline'] = $guideline;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGuideline() {
        return $this->properties['guideline'];
    }

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     *
     * @param $relevantSpecialty 
     * @return static
     **/
    public function setRelevantSpecialty($relevantSpecialty): static {
        $this->properties['relevantSpecialty'] = $relevantSpecialty;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRelevantSpecialty() {
        return $this->properties['relevantSpecialty'];
    }


}
