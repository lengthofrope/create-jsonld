<?php

/*
 * The MIT License
 *
 * Copyright 2016 LengthOfRope, Bas de Kort <bdekort@gmail.com>.
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
 * Entities that have a somewhat fixed, physical extension.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PlaceSchema extends ThingSchema
{
    public static function factory()
    {
        return new PlaceSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org. <br /><br />

Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.

     **/
    private $additionalProperty;
    public function setAdditionalProperty($additionalProperty) {
        $this->additionalProperty = $additionalProperty;

        return $this;
    }

    /**
     * @return PropertyValueSchema     **/
    public function getAdditionalProperty() {
        return $this->additionalProperty;
    }

    /**
     * Physical address of the item.
     **/
    private $address;
    public function setAddress($address) {
        $this->address = $address;

        return $this;
    }

    /**
     * @return PostalAddressSchema|TextSchema     **/
    public function getAddress() {
        return $this->address;
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     **/
    private $aggregateRating;
    public function setAggregateRating($aggregateRating) {
        $this->aggregateRating = $aggregateRating;

        return $this;
    }

    /**
     * @return AggregateRatingSchema     **/
    public function getAggregateRating() {
        return $this->aggregateRating;
    }

    /**
     * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.
<br /><br /> For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.
      
     **/
    private $branchCode;
    public function setBranchCode($branchCode) {
        $this->branchCode = $branchCode;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getBranchCode() {
        return $this->branchCode;
    }

    /**
     * The basic containment relation between a place and one that contains it.
     **/
    private $containedIn;
    public function setContainedIn($containedIn) {
        $this->containedIn = $containedIn;

        return $this;
    }

    /**
     * @return PlaceSchema     **/
    public function getContainedIn() {
        return $this->containedIn;
    }

    /**
     * The basic containment relation between a place and one that contains it.
     **/
    private $containedInPlace;
    public function setContainedInPlace($containedInPlace) {
        $this->containedInPlace = $containedInPlace;

        return $this;
    }

    /**
     * @return PlaceSchema     **/
    public function getContainedInPlace() {
        return $this->containedInPlace;
    }

    /**
     * The basic containment relation between a place and another that it contains.
     **/
    private $containsPlace;
    public function setContainsPlace($containsPlace) {
        $this->containsPlace = $containsPlace;

        return $this;
    }

    /**
     * @return PlaceSchema     **/
    public function getContainsPlace() {
        return $this->containsPlace;
    }

    /**
     * Upcoming or past event associated with this place, organization, or action.
     **/
    private $event;
    public function setEvent($event) {
        $this->event = $event;

        return $this;
    }

    /**
     * @return EventSchema     **/
    public function getEvent() {
        return $this->event;
    }

    /**
     * Upcoming or past events associated with this place or organization.
     **/
    private $events;
    public function setEvents($events) {
        $this->events = $events;

        return $this;
    }

    /**
     * @return EventSchema     **/
    public function getEvents() {
        return $this->events;
    }

    /**
     * The fax number.
     **/
    private $faxNumber;
    public function setFaxNumber($faxNumber) {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getFaxNumber() {
        return $this->faxNumber;
    }

    /**
     * The geo coordinates of the place.
     **/
    private $geo;
    public function setGeo($geo) {
        $this->geo = $geo;

        return $this;
    }

    /**
     * @return GeoCoordinatesSchema|GeoShapeSchema     **/
    public function getGeo() {
        return $this->geo;
    }

    /**
     * The <a href="http://www.gs1.org/gln">Global Location Number</a> (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     **/
    private $globalLocationNumber;
    public function setGlobalLocationNumber($globalLocationNumber) {
        $this->globalLocationNumber = $globalLocationNumber;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getGlobalLocationNumber() {
        return $this->globalLocationNumber;
    }

    /**
     * A URL to a map of the place.
     **/
    private $hasMap;
    public function setHasMap($hasMap) {
        $this->hasMap = $hasMap;

        return $this;
    }

    /**
     * @return URLSchema|MapSchema     **/
    public function getHasMap() {
        return $this->hasMap;
    }

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     **/
    private $isicV4;
    public function setIsicV4($isicV4) {
        $this->isicV4 = $isicV4;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getIsicV4() {
        return $this->isicV4;
    }

    /**
     * An associated logo.
     **/
    private $logo;
    public function setLogo($logo) {
        $this->logo = $logo;

        return $this;
    }

    /**
     * @return ImageObjectSchema|URLSchema     **/
    public function getLogo() {
        return $this->logo;
    }

    /**
     * A URL to a map of the place.
     **/
    private $map;
    public function setMap($map) {
        $this->map = $map;

        return $this;
    }

    /**
     * @return URLSchema     **/
    public function getMap() {
        return $this->map;
    }

    /**
     * A URL to a map of the place.
     **/
    private $maps;
    public function setMaps($maps) {
        $this->maps = $maps;

        return $this;
    }

    /**
     * @return URLSchema     **/
    public function getMaps() {
        return $this->maps;
    }

    /**
     * The opening hours of a certain place.
     **/
    private $openingHoursSpecification;
    public function setOpeningHoursSpecification($openingHoursSpecification) {
        $this->openingHoursSpecification = $openingHoursSpecification;

        return $this;
    }

    /**
     * @return OpeningHoursSpecificationSchema     **/
    public function getOpeningHoursSpecification() {
        return $this->openingHoursSpecification;
    }

    /**
     * A photograph of this place.
     **/
    private $photo;
    public function setPhoto($photo) {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return ImageObjectSchema|PhotographSchema     **/
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * Photographs of this place.
     **/
    private $photos;
    public function setPhotos($photos) {
        $this->photos = $photos;

        return $this;
    }

    /**
     * @return ImageObjectSchema|PhotographSchema     **/
    public function getPhotos() {
        return $this->photos;
    }

    /**
     * A review of the item.
     **/
    private $review;
    public function setReview($review) {
        $this->review = $review;

        return $this;
    }

    /**
     * @return ReviewSchema     **/
    public function getReview() {
        return $this->review;
    }

    /**
     * Review of the item.
     **/
    private $reviews;
    public function setReviews($reviews) {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * @return ReviewSchema     **/
    public function getReviews() {
        return $this->reviews;
    }

    /**
     * The telephone number.
     **/
    private $telephone;
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getTelephone() {
        return $this->telephone;
    }


}
