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
 * Event type: Education event.
 *
 * @see https://schema.org/EducationEvent
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class EducationEvent extends Event
{
    public static function factory(): EducationEvent
    {
        return new EducationEvent('https://schema.org/', 'EducationEvent');
    }

    /**
     * The level in terms of progression through an educational or training context.
     * Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     *
     * @param $educationalLevel \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setEducationalLevel($educationalLevel): static {
        $this->properties['educationalLevel'] = $educationalLevel;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getEducationalLevel() {
        return $this->properties['educationalLevel'];
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
}
