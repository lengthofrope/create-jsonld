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
 * An airport.
 *
 * @see https://schema.org/Airport
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Airport extends CivicStructure
{
    public static function factory(): Airport
    {
        return new Airport('https://schema.org/', 'Airport');
    }

    /**
     * ICAO identifier for an airport.
     *
     * @param $icaoCode \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setIcaoCode($icaoCode): static {
        $this->properties['icaoCode'] = $icaoCode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getIcaoCode() {
        return $this->properties['icaoCode'];
    }
    /**
     * IATA identifier for an airline or airport.
     *
     * @param $iataCode \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setIataCode($iataCode): static {
        $this->properties['iataCode'] = $iataCode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getIataCode() {
        return $this->properties['iataCode'];
    }
}
