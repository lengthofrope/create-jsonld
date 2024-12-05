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
 * Represents additional information about a relationship or property. For example
 * a Role can be used to say that a 'member' role linking some SportsTeam to a
 * player occurred during a particular time period. Or that a Person's 'actor' role
 * in a Movie was for some particular characterName. Such properties can be
 * attached to a Role entity, which is then associated with the main entities using
 * ordinary properties like 'member' or 'actor'.
 *
 * See also [blog post](http://blog.schema.org/2014/06/introducing-role.html).
 *
 * @see https://schema.org/Role
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Role extends Intangible
{
    public static function factory(): Role
    {
        return new Role('https://schema.org/', 'Role');
    }

    /**
     * A position played, performed or filled by a person or organization, as part of
     * an organization. For example, an athlete in a SportsTeam might play in the
     * position named 'Quarterback'.
     *
     * @param $namedPosition \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setNamedPosition($namedPosition): static {
        $this->properties['namedPosition'] = $namedPosition;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     **/
    public function getNamedPosition() {
        return $this->properties['namedPosition'];
    }
    /**
     * A role played, performed or filled by a person or organization. For example, the
     * team of creators for a comic book might fill the roles named 'inker',
     * 'penciller', and 'letterer'; or an athlete in a SportsTeam might play in the
     * position named 'Quarterback'.
     *
     * @param $roleName \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setRoleName($roleName): static {
        $this->properties['roleName'] = $roleName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     **/
    public function getRoleName() {
        return $this->properties['roleName'];
    }
    /**
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $startDate \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setStartDate($startDate): static {
        $this->properties['startDate'] = $startDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Date
     **/
    public function getStartDate() {
        return $this->properties['startDate'];
    }
    /**
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $endDate \LengthOfRope\JSONLD\DataType\Date|\LengthOfRope\JSONLD\DataType\DateTime
     * @return static
     **/
    public function setEndDate($endDate): static {
        $this->properties['endDate'] = $endDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date|\LengthOfRope\JSONLD\DataType\DateTime
     **/
    public function getEndDate() {
        return $this->properties['endDate'];
    }
}
