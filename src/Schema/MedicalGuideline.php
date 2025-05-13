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
 * Any recommendation made by a standard society (e.g. ACC/AHA) or consensus
 * statement that denotes how to diagnose and treat a particular condition. Note:
 * this type should be used to tag the actual guideline recommendation; if the
 * guideline recommendation occurs in a larger scholarly article, use
 * MedicalScholarlyArticle to tag the overall article, not this type. Note also:
 * the organization making the recommendation should be captured in the
 * recognizingAuthority base property of MedicalEntity.
 *
 * @see https://schema.org/MedicalGuideline
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalGuideline extends MedicalEntity
{
    public static function factory(): MedicalGuideline
    {
        return new MedicalGuideline('https://schema.org/', 'MedicalGuideline');
    }

    /**
     * The medical conditions, treatments, etc. that are the subject of the guideline.
     *
     * @param $guidelineSubject \LengthOfRope\JSONLD\Schema\MedicalEntity
     * @return static
     **/
    public function setGuidelineSubject($guidelineSubject): static {
        $this->properties['guidelineSubject'] = $guidelineSubject;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalEntity
     **/
    public function getGuidelineSubject() {
        return $this->properties['guidelineSubject'];
    }
    /**
     * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion,
     * etc.
     *
     * @param $evidenceOrigin \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEvidenceOrigin($evidenceOrigin): static {
        $this->properties['evidenceOrigin'] = $evidenceOrigin;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEvidenceOrigin() {
        return $this->properties['evidenceOrigin'];
    }
    /**
     * Date on which this guideline's recommendation was made.
     *
     * @param $guidelineDate \LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setGuidelineDate($guidelineDate): static {
        $this->properties['guidelineDate'] = $guidelineDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getGuidelineDate() {
        return $this->properties['guidelineDate'];
    }
    /**
     * Strength of evidence of the data used to formulate the guideline (enumerated).
     *
     * @param $evidenceLevel \LengthOfRope\JSONLD\Schema\MedicalEvidenceLevel
     * @return static
     **/
    public function setEvidenceLevel($evidenceLevel): static {
        $this->properties['evidenceLevel'] = $evidenceLevel;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalEvidenceLevel
     **/
    public function getEvidenceLevel() {
        return $this->properties['evidenceLevel'];
    }
}
