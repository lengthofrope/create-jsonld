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
 * Residence type: Single-family home.
 *
 * @see https://schema.org/SingleFamilyResidence
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SingleFamilyResidence extends House
{
    public static function factory(): SingleFamilyResidence
    {
        return new SingleFamilyResidence('https://schema.org/', 'SingleFamilyResidence');
    }

    /**
     * The allowed total occupancy for the accommodation in persons (including infants
     * etc). For individual accommodations, this is not necessarily the legal maximum
     * but defines the permitted usage as per the contractual agreement (e.g. a double
     * room used by a single person).
     * Typical unit code(s): C62 for person.
     *
     * @param $occupancy \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setOccupancy($occupancy): static {
        $this->properties['occupancy'] = $occupancy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getOccupancy() {
        return $this->properties['occupancy'];
    }
    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or
     * lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room can be
     * put in the unitText property of the QuantitativeValue.
     *
     * @param $numberOfRooms \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setNumberOfRooms($numberOfRooms): static {
        $this->properties['numberOfRooms'] = $numberOfRooms;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getNumberOfRooms() {
        return $this->properties['numberOfRooms'];
    }
}
