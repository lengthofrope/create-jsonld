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
 * An instance of a [[Course]] which is distinct from other instances because it is
 * offered at a different time or location or through different media or modes of
 * study or to a specific section of students.
 *
 * @see https://schema.org/CourseInstance
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CourseInstance extends Event
{
    public static function factory(): CourseInstance
    {
        return new CourseInstance('https://schema.org/', 'CourseInstance');
    }

    /**
     * A person assigned to instruct or provide instructional assistance for the
     * [[CourseInstance]].
     *
     * @param $instructor \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setInstructor($instructor): static {
        $this->properties['instructor'] = $instructor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getInstructor() {
        return $this->properties['instructor'];
    }
    /**
     * The amount of work expected of students taking the course, often provided as a
     * figure per week or per month, and may be broken down by type. For example, "2
     * hours of lectures, 1 hour of lab work and 3 hours of independent study per
     * week".
     *
     * @param $courseWorkload \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCourseWorkload($courseWorkload): static {
        $this->properties['courseWorkload'] = $courseWorkload;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCourseWorkload() {
        return $this->properties['courseWorkload'];
    }
    /**
     * Represents the length and pace of a course, expressed as a [[Schedule]].
     *
     * @param $courseSchedule \LengthOfRope\JSONLD\Schema\Schedule
     * @return static
     **/
    public function setCourseSchedule($courseSchedule): static {
        $this->properties['courseSchedule'] = $courseSchedule;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Schedule
     **/
    public function getCourseSchedule() {
        return $this->properties['courseSchedule'];
    }
    /**
     * The medium or means of delivery of the course instance or the mode of study,
     * either as a text label (e.g. "online", "onsite" or "blended"; "synchronous" or
     * "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from
     * a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous).
     *
     * @param $courseMode \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setCourseMode($courseMode): static {
        $this->properties['courseMode'] = $courseMode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getCourseMode() {
        return $this->properties['courseMode'];
    }
}
