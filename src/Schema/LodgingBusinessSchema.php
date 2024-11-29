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
 * A lodging business, such as a motel, hotel, or inn.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class LodgingBusinessSchema extends LocalBusinessSchema
{
    public static function factory()
    {
        return new LodgingBusinessSchema('https://schema.org/', 'LodgingBusiness');
    }

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
     *
     * @param $petsAllowed |
     **/
    public function setPetsAllowed($petsAllowed) {
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
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     *
     * @param $starRating 
     **/
    public function setStarRating($starRating) {
        $this->properties['starRating'] = $starRating;

        return $this;
    }

    /**
     * @return 
     **/
    public function getStarRating() {
        return $this->properties['starRating'];
    }

    /**
     * The latest someone may check out of a lodging establishment.
     *
     * @param $checkoutTime |
     **/
    public function setCheckoutTime($checkoutTime) {
        $this->properties['checkoutTime'] = $checkoutTime;

        return $this;
    }

    /**
     * @return |
     **/
    public function getCheckoutTime() {
        return $this->properties['checkoutTime'];
    }

    /**
     * The earliest someone may check into a lodging establishment.
     *
     * @param $checkinTime |
     **/
    public function setCheckinTime($checkinTime) {
        $this->properties['checkinTime'] = $checkinTime;

        return $this;
    }

    /**
     * @return |
     **/
    public function getCheckinTime() {
        return $this->properties['checkinTime'];
    }

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     *
     * @param $numberOfRooms |
     **/
    public function setNumberOfRooms($numberOfRooms) {
        $this->properties['numberOfRooms'] = $numberOfRooms;

        return $this;
    }

    /**
     * @return |
     **/
    public function getNumberOfRooms() {
        return $this->properties['numberOfRooms'];
    }

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
     *
     * @param $amenityFeature 
     **/
    public function setAmenityFeature($amenityFeature) {
        $this->properties['amenityFeature'] = $amenityFeature;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAmenityFeature() {
        return $this->properties['amenityFeature'];
    }

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     * @param $availableLanguage |
     **/
    public function setAvailableLanguage($availableLanguage) {
        $this->properties['availableLanguage'] = $availableLanguage;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAvailableLanguage() {
        return $this->properties['availableLanguage'];
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param $audience 
     **/
    public function setAudience($audience) {
        $this->properties['audience'] = $audience;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAudience() {
        return $this->properties['audience'];
    }


}
