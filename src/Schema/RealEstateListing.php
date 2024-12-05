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
 * A [[RealEstateListing]] is a listing that describes one or more real-estate
 * [[Offer]]s (whose [[businessFunction]] is typically to lease out, or to sell).
 * * *    The [[RealEstateListing]] type itself represents the overall listing, as
 * manifested in some [[WebPage]].
 * *
 *
 * @see https://schema.org/RealEstateListing
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class RealEstateListing extends WebPage
{
    public static function factory(): RealEstateListing
    {
        return new RealEstateListing('https://schema.org/', 'RealEstateListing');
    }

    /**
     * Publication date of an online listing.
     *
     * @param $datePosted \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setDatePosted($datePosted): static {
        $this->properties['datePosted'] = $datePosted;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Date
     **/
    public function getDatePosted() {
        return $this->properties['datePosted'];
    }
    /**
     * Length of the lease for some [[Accommodation]], either particular to some
     * [[Offer]] or in some cases intrinsic to the property.
     *
     * @param $leaseLength \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setLeaseLength($leaseLength): static {
        $this->properties['leaseLength'] = $leaseLength;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getLeaseLength() {
        return $this->properties['leaseLength'];
    }
}
