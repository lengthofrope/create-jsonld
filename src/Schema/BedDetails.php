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
 * An entity holding detailed information about the available bed types, e.g. the
 * quantity of twin beds for a hotel room. For the single case of just one bed of a
 * certain type, you can use bed directly with a text. See also [[BedType]] (under
 * development).
 *
 * @see https://schema.org/BedDetails
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BedDetails extends Intangible
{
    public static function factory(): BedDetails
    {
        return new BedDetails('https://schema.org/', 'BedDetails');
    }

    /**
     * The type of bed to which the BedDetail refers, i.e. the type of bed available in
     * the quantity indicated by quantity.
     *
     * @param $typeOfBed |
     * @return static
     **/
    public function setTypeOfBed($typeOfBed): static {
        $this->properties['typeOfBed'] = $typeOfBed;

        return $this;
    }

    /**
     * @return |
     **/
    public function getTypeOfBed() {
        return $this->properties['typeOfBed'];
    }
    /**
     * The quantity of the given bed type available in the HotelRoom, Suite, House, or
     * Apartment.
     *
     * @param $numberOfBeds 
     * @return static
     **/
    public function setNumberOfBeds($numberOfBeds): static {
        $this->properties['numberOfBeds'] = $numberOfBeds;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNumberOfBeds() {
        return $this->properties['numberOfBeds'];
    }
}
