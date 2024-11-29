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
 * Event type: Education event.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class EducationEventSchema extends EventSchema
{
    public static function factory()
    {
        return new EducationEventSchema('https://schema.org/', 'EducationEvent');
    }

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
     *
     * @param $educationalLevel ||
     **/
    public function setEducationalLevel($educationalLevel) {
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
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     *
     * @param $assesses |
     **/
    public function setAssesses($assesses) {
        $this->properties['assesses'] = $assesses;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAssesses() {
        return $this->properties['assesses'];
    }

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     *
     * @param $teaches |
     **/
    public function setTeaches($teaches) {
        $this->properties['teaches'] = $teaches;

        return $this;
    }

    /**
     * @return |
     **/
    public function getTeaches() {
        return $this->properties['teaches'];
    }


}
