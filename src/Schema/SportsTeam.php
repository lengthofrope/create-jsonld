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
 * Organization: Sports team.
 *
 * @see https://schema.org/SportsTeam
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SportsTeam extends SportsOrganization
{
    public static function factory(): SportsTeam
    {
        return new SportsTeam('https://schema.org/', 'SportsTeam');
    }

    /**
     * A person that acts as performing member of a sports team; a player as opposed to
     * a coach.
     *
     * @param $athlete \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setAthlete($athlete): static {
        $this->properties['athlete'] = $athlete;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getAthlete() {
        return $this->properties['athlete'];
    }
    /**
     * A person that acts in a coaching role for a sports team.
     *
     * @param $coach \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setCoach($coach): static {
        $this->properties['coach'] = $coach;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getCoach() {
        return $this->properties['coach'];
    }
    /**
     * Gender of something, typically a [[Person]], but possibly also fictional
     * characters, animals, etc. While https://schema.org/Male and
     * https://schema.org/Female may be used, text strings are also acceptable for
     * people who do not identify as a binary gender. The [[gender]] property can also
     * be used in an extended sense to cover e.g. the gender of sports teams. As with
     * the gender of individuals, we do not try to enumerate all possibilities. A
     * mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
     *
     * @param $gender \LengthOfRope\JSONLD\Schema\GenderType|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setGender($gender): static {
        $this->properties['gender'] = $gender;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\GenderType|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getGender() {
        return $this->properties['gender'];
    }
}
