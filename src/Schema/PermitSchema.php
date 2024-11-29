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
 * A permit issued by an organization, e.g. a parking pass.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PermitSchema extends IntangibleSchema
{
    public static function factory(): PermitSchema
    {
        return new PermitSchema('https://schema.org/', 'Permit');
    }

    /**
     * The organization issuing the item, for example a [[Permit]], [[Ticket]], or [[Certification]].
     *
     * @param $issuedBy 
     * @return static
     **/
    public function setIssuedBy($issuedBy): static {
        $this->properties['issuedBy'] = $issuedBy;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIssuedBy() {
        return $this->properties['issuedBy'];
    }

    /**
     * The geographic area where the item is valid. Applies for example to a [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]]. 
     *
     * @param $validIn 
     * @return static
     **/
    public function setValidIn($validIn): static {
        $this->properties['validIn'] = $validIn;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValidIn() {
        return $this->properties['validIn'];
    }

    /**
     * The duration of validity of a permit or similar thing.
     *
     * @param $validFor 
     * @return static
     **/
    public function setValidFor($validFor): static {
        $this->properties['validFor'] = $validFor;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValidFor() {
        return $this->properties['validFor'];
    }

    /**
     * The service through which the permit was granted.
     *
     * @param $issuedThrough 
     * @return static
     **/
    public function setIssuedThrough($issuedThrough): static {
        $this->properties['issuedThrough'] = $issuedThrough;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIssuedThrough() {
        return $this->properties['issuedThrough'];
    }

    /**
     * The date when the item is no longer valid.
     *
     * @param $validUntil 
     * @return static
     **/
    public function setValidUntil($validUntil): static {
        $this->properties['validUntil'] = $validUntil;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValidUntil() {
        return $this->properties['validUntil'];
    }

    /**
     * The date when the item becomes valid.
     *
     * @param $validFrom |
     * @return static
     **/
    public function setValidFrom($validFrom): static {
        $this->properties['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * @return |
     **/
    public function getValidFrom() {
        return $this->properties['validFrom'];
    }

    /**
     * The target audience for this permit.
     *
     * @param $permitAudience 
     * @return static
     **/
    public function setPermitAudience($permitAudience): static {
        $this->properties['permitAudience'] = $permitAudience;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPermitAudience() {
        return $this->properties['permitAudience'];
    }


}
