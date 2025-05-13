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
 * A description of an educational course which may be offered as distinct
 * instances which take place at different times or take place at different
 * locations, or be offered through different media or modes of study. An
 * educational course is a sequence of one or more educational events and/or
 * creative works which aims to build knowledge, competence or ability of learners.
 *
 * @see https://schema.org/Course
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Course extends CreativeWork
{
    public static function factory(): Course
    {
        return new Course('https://schema.org/', 'Course');
    }

    /**
     * An offering of the course at a specific time and place or through specific media
     * or mode of study or to a specific section of students.
     *
     * @param $hasCourseInstance \LengthOfRope\JSONLD\Schema\CourseInstance
     * @return static
     **/
    public function setHasCourseInstance($hasCourseInstance): static {
        $this->properties['hasCourseInstance'] = $hasCourseInstance;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CourseInstance
     **/
    public function getHasCourseInstance() {
        return $this->properties['hasCourseInstance'];
    }
    /**
     * A description of the qualification, award, certificate, diploma or other
     * occupational credential awarded as a consequence of successful completion of
     * this course or program.
     *
     * @param $occupationalCredentialAwarded \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\EducationalOccupationalCredential|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setOccupationalCredentialAwarded($occupationalCredentialAwarded): static {
        $this->properties['occupationalCredentialAwarded'] = $occupationalCredentialAwarded;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\EducationalOccupationalCredential|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getOccupationalCredentialAwarded() {
        return $this->properties['occupationalCredentialAwarded'];
    }
    /**
     * Requirements for taking the Course. May be completion of another [[Course]] or a
     * textual description like "permission of instructor". Requirements may be a
     * pre-requisite competency, referenced using [[AlignmentObject]].
     *
     * @param $coursePrerequisites \LengthOfRope\JSONLD\Schema\Course|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\AlignmentObject
     * @return static
     **/
    public function setCoursePrerequisites($coursePrerequisites): static {
        $this->properties['coursePrerequisites'] = $coursePrerequisites;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Course|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\AlignmentObject
     **/
    public function getCoursePrerequisites() {
        return $this->properties['coursePrerequisites'];
    }
    /**
     * A financial aid type or program which students may use to pay for tuition or
     * fees associated with the program.
     *
     * @param $financialAidEligible \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setFinancialAidEligible($financialAidEligible): static {
        $this->properties['financialAidEligible'] = $financialAidEligible;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getFinancialAidEligible() {
        return $this->properties['financialAidEligible'];
    }
    /**
     * The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or
     * 6.001).
     *
     * @param $courseCode \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCourseCode($courseCode): static {
        $this->properties['courseCode'] = $courseCode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCourseCode() {
        return $this->properties['courseCode'];
    }
    /**
     * A description of the qualification, award, certificate, diploma or other
     * educational credential awarded as a consequence of successful completion of this
     * course or program.
     *
     * @param $educationalCredentialAwarded \LengthOfRope\JSONLD\Schema\EducationalOccupationalCredential|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEducationalCredentialAwarded($educationalCredentialAwarded): static {
        $this->properties['educationalCredentialAwarded'] = $educationalCredentialAwarded;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\EducationalOccupationalCredential|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEducationalCredentialAwarded() {
        return $this->properties['educationalCredentialAwarded'];
    }
    /**
     * The number of credits or units awarded by a Course or required to complete an
     * EducationalOccupationalProgram.
     *
     * @param $numberOfCredits \LengthOfRope\JSONLD\Schema\StructuredValue|\LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setNumberOfCredits($numberOfCredits): static {
        $this->properties['numberOfCredits'] = $numberOfCredits;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\StructuredValue|\LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getNumberOfCredits() {
        return $this->properties['numberOfCredits'];
    }
    /**
     * The total number of students that have enrolled in the history of the course.
     *
     * @param $totalHistoricalEnrollment \LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setTotalHistoricalEnrollment($totalHistoricalEnrollment): static {
        $this->properties['totalHistoricalEnrollment'] = $totalHistoricalEnrollment;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getTotalHistoricalEnrollment() {
        return $this->properties['totalHistoricalEnrollment'];
    }
    /**
     * A language someone may use with or at the item, service or place. Please use one
     * of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     * @param $availableLanguage \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAvailableLanguage($availableLanguage): static {
        $this->properties['availableLanguage'] = $availableLanguage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAvailableLanguage() {
        return $this->properties['availableLanguage'];
    }
    /**
     * Indicates (typically several) Syllabus entities that lay out what each section
     * of the overall course will cover.
     *
     * @param $syllabusSections \LengthOfRope\JSONLD\Schema\Syllabus
     * @return static
     **/
    public function setSyllabusSections($syllabusSections): static {
        $this->properties['syllabusSections'] = $syllabusSections;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Syllabus
     **/
    public function getSyllabusSections() {
        return $this->properties['syllabusSections'];
    }
}
