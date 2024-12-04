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
 * Residence type: Apartment complex.
 *
 * @see https://schema.org/ApartmentComplex
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ApartmentComplex extends Residence
{
    public static function factory(): ApartmentComplex
    {
        return new ApartmentComplex('https://schema.org/', 'ApartmentComplex');
    }

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     *
     * @param $petsAllowed |
     * @return static
     **/
    public function setPetsAllowed($petsAllowed): static {
        $this->properties['petsAllowed'] = $petsAllowed;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPetsAllowed() {
        return $this->properties['petsAllowed'];
    }
    /**
     * The total integer number of bedrooms in a some [[Accommodation]],
     * [[ApartmentComplex]] or [[FloorPlan]].
     *
     * @param $numberOfBedrooms |
     * @return static
     **/
    public function setNumberOfBedrooms($numberOfBedrooms): static {
        $this->properties['numberOfBedrooms'] = $numberOfBedrooms;

        return $this;
    }

    /**
     * @return |
     **/
    public function getNumberOfBedrooms() {
        return $this->properties['numberOfBedrooms'];
    }
    /**
     * Indicates the number of available accommodation units in an
     * [[ApartmentComplex]], or the number of accommodation units for a specific
     * [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also
     * [[numberOfAccommodationUnits]].
     *
     * @param $numberOfAvailableAccommodationUnits 
     * @return static
     **/
    public function setNumberOfAvailableAccommodationUnits($numberOfAvailableAccommodationUnits): static {
        $this->properties['numberOfAvailableAccommodationUnits'] = $numberOfAvailableAccommodationUnits;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNumberOfAvailableAccommodationUnits() {
        return $this->properties['numberOfAvailableAccommodationUnits'];
    }
    /**
     * Indicates the total (available plus unavailable) number of accommodation units
     * in an [[ApartmentComplex]], or the number of accommodation units for a specific
     * [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also
     * [[numberOfAvailableAccommodationUnits]].
     *
     * @param $numberOfAccommodationUnits 
     * @return static
     **/
    public function setNumberOfAccommodationUnits($numberOfAccommodationUnits): static {
        $this->properties['numberOfAccommodationUnits'] = $numberOfAccommodationUnits;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNumberOfAccommodationUnits() {
        return $this->properties['numberOfAccommodationUnits'];
    }
    /**
     * A page providing information on how to book a tour of some [[Place]], such as an
     * [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as
     * other kinds of tours as appropriate.
     *
     * @param $tourBookingPage 
     * @return static
     **/
    public function setTourBookingPage($tourBookingPage): static {
        $this->properties['tourBookingPage'] = $tourBookingPage;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTourBookingPage() {
        return $this->properties['tourBookingPage'];
    }
}
