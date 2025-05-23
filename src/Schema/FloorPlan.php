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
 * A FloorPlan is an explicit representation of a collection of similar
 * accommodations, allowing the provision of common information (room counts,
 * sizes, layout diagrams) and offers for rental or sale. In typical use, some
 * [[ApartmentComplex]] has an [[accommodationFloorPlan]] which is a [[FloorPlan]].
 * A FloorPlan is always in the context of a particular place, either a larger
 * [[ApartmentComplex]] or a single [[Apartment]]. The visual/spatial aspects of a
 * floor plan (i.e. room layout, [see
 * wikipedia](https://en.wikipedia.org/wiki/Floor_plan)) can be indicated using
 * [[image]].
 *
 * @see https://schema.org/FloorPlan
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class FloorPlan extends Intangible
{
    public static function factory(): FloorPlan
    {
        return new FloorPlan('https://schema.org/', 'FloorPlan');
    }

    /**
     * Indicates the number of available accommodation units in an
     * [[ApartmentComplex]], or the number of accommodation units for a specific
     * [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also
     * [[numberOfAccommodationUnits]].
     *
     * @param $numberOfAvailableAccommodationUnits \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setNumberOfAvailableAccommodationUnits($numberOfAvailableAccommodationUnits): static {
        $this->properties['numberOfAvailableAccommodationUnits'] = $numberOfAvailableAccommodationUnits;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getNumberOfAvailableAccommodationUnits() {
        return $this->properties['numberOfAvailableAccommodationUnits'];
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
     * Indicates the total (available plus unavailable) number of accommodation units
     * in an [[ApartmentComplex]], or the number of accommodation units for a specific
     * [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also
     * [[numberOfAvailableAccommodationUnits]].
     *
     * @param $numberOfAccommodationUnits \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setNumberOfAccommodationUnits($numberOfAccommodationUnits): static {
        $this->properties['numberOfAccommodationUnits'] = $numberOfAccommodationUnits;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getNumberOfAccommodationUnits() {
        return $this->properties['numberOfAccommodationUnits'];
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
     * Indicates some accommodation that this floor plan describes.
     *
     * @param $isPlanForApartment \LengthOfRope\JSONLD\Schema\Accommodation
     * @return static
     **/
    public function setIsPlanForApartment($isPlanForApartment): static {
        $this->properties['isPlanForApartment'] = $isPlanForApartment;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Accommodation
     **/
    public function getIsPlanForApartment() {
        return $this->properties['isPlanForApartment'];
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
     * A schematic image showing the floorplan layout.
     *
     * @param $layoutImage \LengthOfRope\JSONLD\Schema\ImageObject|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setLayoutImage($layoutImage): static {
        $this->properties['layoutImage'] = $layoutImage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ImageObject|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getLayoutImage() {
        return $this->properties['layoutImage'];
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
}
