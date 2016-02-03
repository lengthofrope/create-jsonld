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
 * A permit issued by an organization, e.g. a parking pass.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PermitSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new PermitSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The organization issuing the ticket or permit.
     **/
    private $issuedBy;
    public function setIssuedBy($issuedBy) {
        $this->issuedBy = $issuedBy;

        return $this;
    }

    /**
     * @return OrganizationSchema     **/
    public function getIssuedBy() {
        return $this->issuedBy;
    }

    /**
     * The service through with the permit was granted.
     **/
    private $issuedThrough;
    public function setIssuedThrough($issuedThrough) {
        $this->issuedThrough = $issuedThrough;

        return $this;
    }

    /**
     * @return ServiceSchema     **/
    public function getIssuedThrough() {
        return $this->issuedThrough;
    }

    /**
     * The target audience for this permit.
     **/
    private $permitAudience;
    public function setPermitAudience($permitAudience) {
        $this->permitAudience = $permitAudience;

        return $this;
    }

    /**
     * @return AudienceSchema     **/
    public function getPermitAudience() {
        return $this->permitAudience;
    }

    /**
     * The time validity of the permit.
     **/
    private $validFor;
    public function setValidFor($validFor) {
        $this->validFor = $validFor;

        return $this;
    }

    /**
     * @return DurationSchema     **/
    public function getValidFor() {
        return $this->validFor;
    }

    /**
     * The date when the item becomes valid.
     **/
    private $validFrom;
    public function setValidFrom($validFrom) {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @return DateTimeSchema     **/
    public function getValidFrom() {
        return $this->validFrom;
    }

    /**
     * The geographic area where the permit is valid.
     **/
    private $validIn;
    public function setValidIn($validIn) {
        $this->validIn = $validIn;

        return $this;
    }

    /**
     * @return AdministrativeAreaSchema     **/
    public function getValidIn() {
        return $this->validIn;
    }

    /**
     * The date when the item is no longer valid.
     **/
    private $validUntil;
    public function setValidUntil($validUntil) {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getValidUntil() {
        return $this->validUntil;
    }


}
