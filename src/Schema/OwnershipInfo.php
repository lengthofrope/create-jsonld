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
 * A structured value providing information about when a certain organization or
 * person owned a certain product.
 *
 * @see https://schema.org/OwnershipInfo
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class OwnershipInfo extends StructuredValue
{
    public static function factory(): OwnershipInfo
    {
        return new OwnershipInfo('https://schema.org/', 'OwnershipInfo');
    }

    /**
     * The organization or person from which the product was acquired.
     *
     * @param $acquiredFrom \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setAcquiredFrom($acquiredFrom): static {
        $this->properties['acquiredFrom'] = $acquiredFrom;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getAcquiredFrom() {
        return $this->properties['acquiredFrom'];
    }
    /**
     * The date and time of obtaining the product.
     *
     * @param $ownedFrom \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setOwnedFrom($ownedFrom): static {
        $this->properties['ownedFrom'] = $ownedFrom;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getOwnedFrom() {
        return $this->properties['ownedFrom'];
    }
    /**
     * The product that this structured value is referring to.
     *
     * @param $typeOfGood \LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\Schema\Service
     * @return static
     **/
    public function setTypeOfGood($typeOfGood): static {
        $this->properties['typeOfGood'] = $typeOfGood;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\Schema\Service
     **/
    public function getTypeOfGood() {
        return $this->properties['typeOfGood'];
    }
    /**
     * The date and time of giving up ownership on the product.
     *
     * @param $ownedThrough \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setOwnedThrough($ownedThrough): static {
        $this->properties['ownedThrough'] = $ownedThrough;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getOwnedThrough() {
        return $this->properties['ownedThrough'];
    }
}
