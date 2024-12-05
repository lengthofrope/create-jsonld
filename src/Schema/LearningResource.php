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
 * The LearningResource type can be used to indicate [[CreativeWork]]s (whether
 * physical or digital) that have a particular and explicit orientation towards
 * learning, education, skill acquisition, and other educational purposes.
 *
 * * [[LearningResource]] is expected to be used as an addition to a primary type
 * such as [[Book]], [[VideoObject]], [[Product]] etc.
 *
 * * [[EducationEvent]] serves a similar purpose for event-like things (e.g. a
 * [[Trip]]). A [[LearningResource]] may be created as a result of an
 * [[EducationEvent]], for example by recording one.
 *
 * @see https://schema.org/LearningResource
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class LearningResource extends CreativeWork
{
    public static function factory(): LearningResource
    {
        return new LearningResource('https://schema.org/', 'LearningResource');
    }

    /**
     * An alignment to an established educational framework.
     *
     * This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource
     * [[teaches]] or [[assesses]] a competency.
     *
     * @param $educationalAlignment \LengthOfRope\JSONLD\Schema\AlignmentObject
     * @return static
     **/
    public function setEducationalAlignment($educationalAlignment): static {
        $this->properties['educationalAlignment'] = $educationalAlignment;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AlignmentObject
     **/
    public function getEducationalAlignment() {
        return $this->properties['educationalAlignment'];
    }
    /**
     * The predominant type or kind characterizing the learning resource. For example,
     * 'presentation', 'handout'.
     *
     * @param $learningResourceType \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setLearningResourceType($learningResourceType): static {
        $this->properties['learningResourceType'] = $learningResourceType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getLearningResourceType() {
        return $this->properties['learningResourceType'];
    }
    /**
     * The level in terms of progression through an educational or training context.
     * Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     *
     * @param $educationalLevel \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setEducationalLevel($educationalLevel): static {
        $this->properties['educationalLevel'] = $educationalLevel;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getEducationalLevel() {
        return $this->properties['educationalLevel'];
    }
    /**
     * The purpose of a work in the context of education; for example, 'assignment',
     * 'group work'.
     *
     * @param $educationalUse \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setEducationalUse($educationalUse): static {
        $this->properties['educationalUse'] = $educationalUse;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getEducationalUse() {
        return $this->properties['educationalUse'];
    }
    /**
     * The item being described is intended to assess the competency or learning
     * outcome defined by the referenced term.
     *
     * @param $assesses \LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setAssesses($assesses): static {
        $this->properties['assesses'] = $assesses;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getAssesses() {
        return $this->properties['assesses'];
    }
    /**
     * The item being described is intended to help a person learn the competency or
     * learning outcome defined by the referenced term.
     *
     * @param $teaches \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setTeaches($teaches): static {
        $this->properties['teaches'] = $teaches;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getTeaches() {
        return $this->properties['teaches'];
    }
    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a
     * person or other entity in order to do something such as earn an Educational
     * Occupational Credential or understand a LearningResource.
     *
     * @param $competencyRequired \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setCompetencyRequired($competencyRequired): static {
        $this->properties['competencyRequired'] = $competencyRequired;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getCompetencyRequired() {
        return $this->properties['competencyRequired'];
    }
}
