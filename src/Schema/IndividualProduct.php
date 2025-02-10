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
 * A single, identifiable product instance (e.g. a laptop with a particular serial
 * number).
 *
 * @see https://schema.org/IndividualProduct
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class IndividualProduct extends Product
{
    public static function factory(): IndividualProduct
    {
        return new IndividualProduct('https://schema.org/', 'IndividualProduct');
    }

    /**
     * The serial number or any alphanumeric identifier of a particular product. When
     * attached to an offer, it is a shortcut for the serial number of the product
     * included in the offer.
     *
     * @param $serialNumber \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setSerialNumber($serialNumber): static {
        $this->properties['serialNumber'] = $serialNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getSerialNumber() {
        return $this->properties['serialNumber'];
    }
}
