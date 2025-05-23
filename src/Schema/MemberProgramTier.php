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
 * A MemberProgramTier specifies a tier under a loyalty (member) program, for
 * example "gold".
 *
 * @see https://schema.org/MemberProgramTier
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MemberProgramTier extends Intangible
{
    public static function factory(): MemberProgramTier
    {
        return new MemberProgramTier('https://schema.org/', 'MemberProgramTier');
    }

    /**
     * The member program this tier is a part of.
     *
     * @param $isTierOf \LengthOfRope\JSONLD\Schema\MemberProgram
     * @return static
     **/
    public function setIsTierOf($isTierOf): static {
        $this->properties['isTierOf'] = $isTierOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MemberProgram
     **/
    public function getIsTierOf() {
        return $this->properties['isTierOf'];
    }
    /**
     * A requirement for a user to join a membership tier, for example: a CreditCard if
     * the tier requires sign up for a credit card, A UnitPriceSpecification if the
     * user is required to pay a (periodic) fee, or a MonetaryAmount if the user needs
     * to spend a minimum amount to join the tier. If a tier is free to join then this
     * property does not need to be specified.
     *
     * @param $hasTierRequirement \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\Schema\UnitPriceSpecification|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\CreditCard
     * @return static
     **/
    public function setHasTierRequirement($hasTierRequirement): static {
        $this->properties['hasTierRequirement'] = $hasTierRequirement;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\Schema\UnitPriceSpecification|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\CreditCard
     **/
    public function getHasTierRequirement() {
        return $this->properties['hasTierRequirement'];
    }
    /**
     * A member benefit for a particular tier of a loyalty program.
     *
     * @param $hasTierBenefit \LengthOfRope\JSONLD\Schema\TierBenefitEnumeration
     * @return static
     **/
    public function setHasTierBenefit($hasTierBenefit): static {
        $this->properties['hasTierBenefit'] = $hasTierBenefit;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\TierBenefitEnumeration
     **/
    public function getHasTierBenefit() {
        return $this->properties['hasTierBenefit'];
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
}
