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
 * A medical study is an umbrella type covering all kinds of research studies relating to human medicine or health, including observational studies and interventional trials and registries, randomized, controlled or not. When the specific type of study is known, use one of the extensions of this type, such as MedicalTrial or MedicalObservationalStudy. Also, note that this type should be used to mark up data that describes the study itself; to tag an article that publishes the results of a study, use MedicalScholarlyArticle. Note: use the code property of MedicalEntity to store study IDs, e.g. clinicaltrials.gov ID.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalStudySchema extends MedicalEntitySchema
{
    public static function factory()
    {
        return new MedicalStudySchema('https://schema.org/', 'MedicalStudy');
    }

    /**
     * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
     *
     * @param $studySubject 
     **/
    public function setStudySubject($studySubject) {
        $this->properties['studySubject'] = $studySubject;

        return $this;
    }

    /**
     * @return 
     **/
    public function getStudySubject() {
        return $this->properties['studySubject'];
    }

    /**
     * The status of the study (enumerated).
     *
     * @param $status ||
     **/
    public function setStatus($status) {
        $this->properties['status'] = $status;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getStatus() {
        return $this->properties['status'];
    }

    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     *
     * @param $healthCondition 
     **/
    public function setHealthCondition($healthCondition) {
        $this->properties['healthCondition'] = $healthCondition;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHealthCondition() {
        return $this->properties['healthCondition'];
    }

    /**
     * The location in which the study is taking/took place.
     *
     * @param $studyLocation 
     **/
    public function setStudyLocation($studyLocation) {
        $this->properties['studyLocation'] = $studyLocation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getStudyLocation() {
        return $this->properties['studyLocation'];
    }

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     * @param $sponsor |
     **/
    public function setSponsor($sponsor) {
        $this->properties['sponsor'] = $sponsor;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSponsor() {
        return $this->properties['sponsor'];
    }


}
