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
 * Used to describe membership in a loyalty programs (e.g. "StarAliance"), traveler
 * clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
 *
 * @see https://schema.org/ProgramMembership
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ProgramMembership extends Intangible
{
    public static function factory(): ProgramMembership
    {
        return new ProgramMembership('https://schema.org/', 'ProgramMembership');
    }

    /**
     * A member of this organization.
     *
     * @param $members \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setMembers($members): static {
        $this->properties['members'] = $members;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getMembers() {
        return $this->properties['members'];
    }
    /**
     * The Organization (airline, travelers' club, retailer, etc.) the membership is
     * made with or which offers the  MemberProgram.
     *
     * @param $hostingOrganization \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setHostingOrganization($hostingOrganization): static {
        $this->properties['hostingOrganization'] = $hostingOrganization;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getHostingOrganization() {
        return $this->properties['hostingOrganization'];
    }
    /**
     * The [MemberProgram](https://schema.org/MemberProgram) associated with a
     * [ProgramMembership](https://schema.org/ProgramMembership).
     *
     * @param $program \LengthOfRope\JSONLD\Schema\MemberProgram
     * @return static
     **/
    public function setProgram($program): static {
        $this->properties['program'] = $program;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MemberProgram
     **/
    public function getProgram() {
        return $this->properties['program'];
    }
    /**
     * The program providing the membership. It is preferable to use
     * [:program](https://schema.org/program) instead.
     *
     * @param $programName \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setProgramName($programName): static {
        $this->properties['programName'] = $programName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getProgramName() {
        return $this->properties['programName'];
    }
    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members
     * of organizations; ProgramMembership is typically for individuals.
     *
     * @param $member \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setMember($member): static {
        $this->properties['member'] = $member;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getMember() {
        return $this->properties['member'];
    }
    /**
     * The number of membership points earned by the member. If necessary, the unitText
     * can be used to express the units the points are issued in. (E.g. stars, miles,
     * etc.)
     *
     * @param $membershipPointsEarned \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setMembershipPointsEarned($membershipPointsEarned): static {
        $this->properties['membershipPointsEarned'] = $membershipPointsEarned;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getMembershipPointsEarned() {
        return $this->properties['membershipPointsEarned'];
    }
    /**
     * A unique identifier for the membership.
     *
     * @param $membershipNumber \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setMembershipNumber($membershipNumber): static {
        $this->properties['membershipNumber'] = $membershipNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getMembershipNumber() {
        return $this->properties['membershipNumber'];
    }
}
