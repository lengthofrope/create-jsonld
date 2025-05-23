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
 * An accommodation is a place that can accommodate human beings, e.g. a hotel
 * room, a camping pitch, or a meeting room. Many accommodations are for overnight
 * stays, but this is not a mandatory requirement.
 * * For more specific types of accommodations not defined in schema.org, one can
 * use [[additionalType]] with external vocabularies.
 * * <br /><br />
 * * See also the <a href="/docs/hotels.html">dedicated document on the use of
 * schema.org for marking up hotels and other forms of accommodations</a>.
 *
 *
 * @see https://schema.org/Accommodation
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Accommodation extends Place
{
    public static function factory(): Accommodation
    {
        return new Accommodation('https://schema.org/', 'Accommodation');
    }

    /**
     * Category of an [[Accommodation]], following real estate conventions, e.g. RESO
     * (see
     * [PropertySubType](https://ddwiki.reso.org/display/DDW17/PropertySubType+Field),
     * and [PropertyType](https://ddwiki.reso.org/display/DDW17/PropertyType+Field)
     * fields  for suggested values).
     *
     * @param $accommodationCategory \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAccommodationCategory($accommodationCategory): static {
        $this->properties['accommodationCategory'] = $accommodationCategory;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAccommodationCategory() {
        return $this->properties['accommodationCategory'];
    }
    /**
     * Length of the lease for some [[Accommodation]], either particular to some
     * [[Offer]] or in some cases intrinsic to the property.
     *
     * @param $leaseLength \LengthOfRope\JSONLD\Schema\Duration|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setLeaseLength($leaseLength): static {
        $this->properties['leaseLength'] = $leaseLength;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getLeaseLength() {
        return $this->properties['leaseLength'];
    }
    /**
     * The total integer number of bathrooms in some [[Accommodation]], following real
     * estate conventions as [documented in
     * RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The
     * simple sum of the number of bathrooms. For example for a property with two Full
     * Bathrooms and one Half Bathroom, the Bathrooms Total Integer will be 3.". See
     * also [[numberOfRooms]].
     *
     * @param $numberOfBathroomsTotal \LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setNumberOfBathroomsTotal($numberOfBathroomsTotal): static {
        $this->properties['numberOfBathroomsTotal'] = $numberOfBathroomsTotal;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getNumberOfBathroomsTotal() {
        return $this->properties['numberOfBathroomsTotal'];
    }
    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This
     * generic property does not make a statement about whether the feature is included
     * in an offer for the main accommodation or available at extra costs.
     *
     * @param $amenityFeature \LengthOfRope\JSONLD\Schema\LocationFeatureSpecification
     * @return static
     **/
    public function setAmenityFeature($amenityFeature): static {
        $this->properties['amenityFeature'] = $amenityFeature;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\LocationFeatureSpecification
     **/
    public function getAmenityFeature() {
        return $this->properties['amenityFeature'];
    }
    /**
     * A floorplan of some [[Accommodation]].
     *
     * @param $accommodationFloorPlan \LengthOfRope\JSONLD\Schema\FloorPlan
     * @return static
     **/
    public function setAccommodationFloorPlan($accommodationFloorPlan): static {
        $this->properties['accommodationFloorPlan'] = $accommodationFloorPlan;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\FloorPlan
     **/
    public function getAccommodationFloorPlan() {
        return $this->properties['accommodationFloorPlan'];
    }
    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     *
     * @param $petsAllowed \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setPetsAllowed($petsAllowed): static {
        $this->properties['petsAllowed'] = $petsAllowed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getPetsAllowed() {
        return $this->properties['petsAllowed'];
    }
    /**
     * A page providing information on how to book a tour of some [[Place]], such as an
     * [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as
     * other kinds of tours as appropriate.
     *
     * @param $tourBookingPage \LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setTourBookingPage($tourBookingPage): static {
        $this->properties['tourBookingPage'] = $tourBookingPage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getTourBookingPage() {
        return $this->properties['tourBookingPage'];
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
     * The total integer number of bedrooms in a some [[Accommodation]],
     * [[ApartmentComplex]] or [[FloorPlan]].
     *
     * @param $numberOfBedrooms \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setNumberOfBedrooms($numberOfBedrooms): static {
        $this->properties['numberOfBedrooms'] = $numberOfBedrooms;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getNumberOfBedrooms() {
        return $this->properties['numberOfBedrooms'];
    }
    /**
     * The size of the accommodation, e.g. in square meter or squarefoot.
     * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for
     * square yard.
     *
     * @param $floorSize \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setFloorSize($floorSize): static {
        $this->properties['floorSize'] = $floorSize;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getFloorSize() {
        return $this->properties['floorSize'];
    }
    /**
     * The year an [[Accommodation]] was constructed. This corresponds to the
     * [YearBuilt field in
     * RESO](https://ddwiki.reso.org/display/DDW17/YearBuilt+Field).
     *
     * @param $yearBuilt \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setYearBuilt($yearBuilt): static {
        $this->properties['yearBuilt'] = $yearBuilt;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getYearBuilt() {
        return $this->properties['yearBuilt'];
    }
    /**
     * Number of partial bathrooms - The total number of half and ¼ bathrooms in an
     * [[Accommodation]]. This corresponds to the [BathroomsPartial field in
     * RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field).
     *
     * @param $numberOfPartialBathrooms \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setNumberOfPartialBathrooms($numberOfPartialBathrooms): static {
        $this->properties['numberOfPartialBathrooms'] = $numberOfPartialBathrooms;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getNumberOfPartialBathrooms() {
        return $this->properties['numberOfPartialBathrooms'];
    }
    /**
     * Indications regarding the permitted usage of the accommodation.
     *
     * @param $permittedUsage \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setPermittedUsage($permittedUsage): static {
        $this->properties['permittedUsage'] = $permittedUsage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getPermittedUsage() {
        return $this->properties['permittedUsage'];
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
    /**
     * The type of bed or beds included in the accommodation. For the single case of
     * just one bed of a certain type, you use bed directly with a text.
     * If you want to indicate the quantity of a certain kind of bed, use an
     * instance of BedDetails. For more detailed information, use the amenityFeature
     * property.
     *
     * @param $bed \LengthOfRope\JSONLD\Schema\BedType|\LengthOfRope\JSONLD\Schema\BedDetails|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setBed($bed): static {
        $this->properties['bed'] = $bed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BedType|\LengthOfRope\JSONLD\Schema\BedDetails|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getBed() {
        return $this->properties['bed'];
    }
    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in an
     * [[Accommodation]]. This corresponds to the [BathroomsFull field in
     * RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
     *
     * @param $numberOfFullBathrooms \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setNumberOfFullBathrooms($numberOfFullBathrooms): static {
        $this->properties['numberOfFullBathrooms'] = $numberOfFullBathrooms;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getNumberOfFullBathrooms() {
        return $this->properties['numberOfFullBathrooms'];
    }
    /**
     * The floor level for an [[Accommodation]] in a multi-storey building. Since
     * counting
     * systems [vary
     * internationally](https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations),
     * the local system should be used where possible.
     *
     * @param $floorLevel \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setFloorLevel($floorLevel): static {
        $this->properties['floorLevel'] = $floorLevel;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getFloorLevel() {
        return $this->properties['floorLevel'];
    }
}
