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
class PlaceSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new PlaceSchema('https://schema.org/', 'Place');
    }

    /**
     * Photographs of this place.
     *
     * @param $photos |
     **/
    public function setPhotos($photos) {
        $this->properties['photos'] = $photos;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPhotos() {
        return $this->properties['photos'];
    }

    /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.

     *
     * @param $additionalProperty 
     **/
    public function setAdditionalProperty($additionalProperty) {
        $this->properties['additionalProperty'] = $additionalProperty;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAdditionalProperty() {
        return $this->properties['additionalProperty'];
    }

    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     *
     * @param $isicV4 
     **/
    public function setIsicV4($isicV4) {
        $this->properties['isicV4'] = $isicV4;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsicV4() {
        return $this->properties['isicV4'];
    }

    /**
     * The basic containment relation between a place and one that contains it.
     *
     * @param $containedInPlace 
     **/
    public function setContainedInPlace($containedInPlace) {
        $this->properties['containedInPlace'] = $containedInPlace;

        return $this;
    }

    /**
     * @return 
     **/
    public function getContainedInPlace() {
        return $this->properties['containedInPlace'];
    }

    /**
     * The telephone number.
     *
     * @param $telephone 
     **/
    public function setTelephone($telephone) {
        $this->properties['telephone'] = $telephone;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTelephone() {
        return $this->properties['telephone'];
    }

    /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship).
     *
     * @param $geoEquals |
     **/
    public function setGeoEquals($geoEquals) {
        $this->properties['geoEquals'] = $geoEquals;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoEquals() {
        return $this->properties['geoEquals'];
    }

    /**
     * Physical address of the item.
     *
     * @param $address |
     **/
    public function setAddress($address) {
        $this->properties['address'] = $address;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAddress() {
        return $this->properties['address'];
    }

    /**
     * Certification information about a product, organization, service, place, or person.
     *
     * @param $hasCertification 
     **/
    public function setHasCertification($hasCertification) {
        $this->properties['hasCertification'] = $hasCertification;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasCertification() {
        return $this->properties['hasCertification'];
    }

    /**
     * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.\n\nFor example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.
      
     *
     * @param $branchCode 
     **/
    public function setBranchCode($branchCode) {
        $this->properties['branchCode'] = $branchCode;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBranchCode() {
        return $this->properties['branchCode'];
    }

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoWithin |
     **/
    public function setGeoWithin($geoWithin) {
        $this->properties['geoWithin'] = $geoWithin;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoWithin() {
        return $this->properties['geoWithin'];
    }

    /**
     * The fax number.
     *
     * @param $faxNumber 
     **/
    public function setFaxNumber($faxNumber) {
        $this->properties['faxNumber'] = $faxNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFaxNumber() {
        return $this->properties['faxNumber'];
    }

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     * @param $event 
     **/
    public function setEvent($event) {
        $this->properties['event'] = $event;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEvent() {
        return $this->properties['event'];
    }

    /**
     * Upcoming or past events associated with this place or organization.
     *
     * @param $events 
     **/
    public function setEvents($events) {
        $this->properties['events'] = $events;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEvents() {
        return $this->properties['events'];
    }

    /**
     * The latitude of a location. For example ```37.42242``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param $latitude |
     **/
    public function setLatitude($latitude) {
        $this->properties['latitude'] = $latitude;

        return $this;
    }

    /**
     * @return |
     **/
    public function getLatitude() {
        return $this->properties['latitude'];
    }

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
     *
     * @param $keywords ||
     **/
    public function setKeywords($keywords) {
        $this->properties['keywords'] = $keywords;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getKeywords() {
        return $this->properties['keywords'];
    }

    /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
     *
     * @param $smokingAllowed 
     **/
    public function setSmokingAllowed($smokingAllowed) {
        $this->properties['smokingAllowed'] = $smokingAllowed;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSmokingAllowed() {
        return $this->properties['smokingAllowed'];
    }

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @param $isAccessibleForFree 
     **/
    public function setIsAccessibleForFree($isAccessibleForFree) {
        $this->properties['isAccessibleForFree'] = $isAccessibleForFree;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsAccessibleForFree() {
        return $this->properties['isAccessibleForFree'];
    }

    /**
     * An associated logo.
     *
     * @param $logo |
     **/
    public function setLogo($logo) {
        $this->properties['logo'] = $logo;

        return $this;
    }

    /**
     * @return |
     **/
    public function getLogo() {
        return $this->properties['logo'];
    }

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoCovers |
     **/
    public function setGeoCovers($geoCovers) {
        $this->properties['geoCovers'] = $geoCovers;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoCovers() {
        return $this->properties['geoCovers'];
    }

    /**
     * The longitude of a location. For example ```-122.08585``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param $longitude |
     **/
    public function setLongitude($longitude) {
        $this->properties['longitude'] = $longitude;

        return $this;
    }

    /**
     * @return |
     **/
    public function getLongitude() {
        return $this->properties['longitude'];
    }

    /**
     * Indicates whether some facility (e.g. [[FoodEstablishment]], [[CovidTestingFacility]]) offers a service that can be used by driving through in a car. In the case of [[CovidTestingFacility]] such facilities could potentially help with social distancing from other potentially-infected users.
     *
     * @param $hasDriveThroughService 
     **/
    public function setHasDriveThroughService($hasDriveThroughService) {
        $this->properties['hasDriveThroughService'] = $hasDriveThroughService;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasDriveThroughService() {
        return $this->properties['hasDriveThroughService'];
    }

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoCrosses |
     **/
    public function setGeoCrosses($geoCrosses) {
        $this->properties['geoCrosses'] = $geoCrosses;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoCrosses() {
        return $this->properties['geoCrosses'];
    }

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoOverlaps |
     **/
    public function setGeoOverlaps($geoOverlaps) {
        $this->properties['geoOverlaps'] = $geoOverlaps;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoOverlaps() {
        return $this->properties['geoOverlaps'];
    }

    /**
     * The geo coordinates of the place.
     *
     * @param $geo |
     **/
    public function setGeo($geo) {
        $this->properties['geo'] = $geo;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeo() {
        return $this->properties['geo'];
    }

    /**
     * A flag to signal that the [[Place]] is open to public visitors.  If this property is omitted there is no assumed default boolean value.
     *
     * @param $publicAccess 
     **/
    public function setPublicAccess($publicAccess) {
        $this->properties['publicAccess'] = $publicAccess;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPublicAccess() {
        return $this->properties['publicAccess'];
    }

    /**
     * A URL to a map of the place.
     *
     * @param $map 
     **/
    public function setMap($map) {
        $this->properties['map'] = $map;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMap() {
        return $this->properties['map'];
    }

    /**
     * The <a href="https://www.gs1.org/standards/gs1-digital-link">GS1 digital link</a> associated with the object. This URL should conform to the particular requirements of digital links. The link should only contain the Application Identifiers (AIs) that are relevant for the entity being annotated, for instance a [[Product]] or an [[Organization]], and for the correct granularity. In particular, for products:<ul><li>A Digital Link that contains a serial number (AI <code>21</code>) should only be present on instances of [[IndividualProduct]]</li><li>A Digital Link that contains a lot number (AI <code>10</code>) should be annotated as [[SomeProduct]] if only products from that lot are sold, or [[IndividualProduct]] if there is only a specific product.</li><li>A Digital Link that contains a global model number (AI <code>8013</code>)  should be attached to a [[Product]] or a [[ProductModel]].</li></ul> Other item types should be adapted similarly.
     *
     * @param $hasGS1DigitalLink 
     **/
    public function setHasGS1DigitalLink($hasGS1DigitalLink) {
        $this->properties['hasGS1DigitalLink'] = $hasGS1DigitalLink;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasGS1DigitalLink() {
        return $this->properties['hasGS1DigitalLink'];
    }

    /**
     * Review of the item.
     *
     * @param $reviews 
     **/
    public function setReviews($reviews) {
        $this->properties['reviews'] = $reviews;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReviews() {
        return $this->properties['reviews'];
    }

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @param $globalLocationNumber 
     **/
    public function setGlobalLocationNumber($globalLocationNumber) {
        $this->properties['globalLocationNumber'] = $globalLocationNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGlobalLocationNumber() {
        return $this->properties['globalLocationNumber'];
    }

    /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: "they have no point in common. They form a set of disconnected geometries." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     * @param $geoDisjoint |
     **/
    public function setGeoDisjoint($geoDisjoint) {
        $this->properties['geoDisjoint'] = $geoDisjoint;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoDisjoint() {
        return $this->properties['geoDisjoint'];
    }

    /**
     * A review of the item.
     *
     * @param $review 
     **/
    public function setReview($review) {
        $this->properties['review'] = $review;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReview() {
        return $this->properties['review'];
    }

    /**
     * A URL to a map of the place.
     *
     * @param $maps 
     **/
    public function setMaps($maps) {
        $this->properties['maps'] = $maps;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMaps() {
        return $this->properties['maps'];
    }

    /**
     * The opening hours of a certain place.
     *
     * @param $openingHoursSpecification 
     **/
    public function setOpeningHoursSpecification($openingHoursSpecification) {
        $this->properties['openingHoursSpecification'] = $openingHoursSpecification;

        return $this;
    }

    /**
     * @return 
     **/
    public function getOpeningHoursSpecification() {
        return $this->properties['openingHoursSpecification'];
    }

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoContains |
     **/
    public function setGeoContains($geoContains) {
        $this->properties['geoContains'] = $geoContains;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoContains() {
        return $this->properties['geoContains'];
    }

    /**
     * The basic containment relation between a place and another that it contains.
     *
     * @param $containsPlace 
     **/
    public function setContainsPlace($containsPlace) {
        $this->properties['containsPlace'] = $containsPlace;

        return $this;
    }

    /**
     * @return 
     **/
    public function getContainsPlace() {
        return $this->properties['containsPlace'];
    }

    /**
     * The basic containment relation between a place and one that contains it.
     *
     * @param $containedIn 
     **/
    public function setContainedIn($containedIn) {
        $this->properties['containedIn'] = $containedIn;

        return $this;
    }

    /**
     * @return 
     **/
    public function getContainedIn() {
        return $this->properties['containedIn'];
    }

    /**
     * Represents spatial relations in which two geometries (or the places they represent) touch: "they have at least one boundary point in common, but no interior points." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     * @param $geoTouches |
     **/
    public function setGeoTouches($geoTouches) {
        $this->properties['geoTouches'] = $geoTouches;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoTouches() {
        return $this->properties['geoTouches'];
    }

    /**
     * A slogan or motto associated with the item.
     *
     * @param $slogan 
     **/
    public function setSlogan($slogan) {
        $this->properties['slogan'] = $slogan;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSlogan() {
        return $this->properties['slogan'];
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
     * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoIntersects |
     **/
    public function setGeoIntersects($geoIntersects) {
        $this->properties['geoIntersects'] = $geoIntersects;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoIntersects() {
        return $this->properties['geoIntersects'];
    }

    /**
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as other kinds of tours as appropriate.
     *
     * @param $tourBookingPage 
     **/
    public function setTourBookingPage($tourBookingPage) {
        $this->properties['tourBookingPage'] = $tourBookingPage;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTourBookingPage() {
        return $this->properties['tourBookingPage'];
    }

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoCoveredBy |
     **/
    public function setGeoCoveredBy($geoCoveredBy) {
        $this->properties['geoCoveredBy'] = $geoCoveredBy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoCoveredBy() {
        return $this->properties['geoCoveredBy'];
    }

    /**
     * A photograph of this place.
     *
     * @param $photo |
     **/
    public function setPhoto($photo) {
        $this->properties['photo'] = $photo;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPhoto() {
        return $this->properties['photo'];
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @param $aggregateRating 
     **/
    public function setAggregateRating($aggregateRating) {
        $this->properties['aggregateRating'] = $aggregateRating;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAggregateRating() {
        return $this->properties['aggregateRating'];
    }

    /**
     * A URL to a map of the place.
     *
     * @param $hasMap |
     **/
    public function setHasMap($hasMap) {
        $this->properties['hasMap'] = $hasMap;

        return $this;
    }

    /**
     * @return |
     **/
    public function getHasMap() {
        return $this->properties['hasMap'];
    }

    /**
     * The total number of individuals that may attend an event or venue.
     *
     * @param $maximumAttendeeCapacity 
     **/
    public function setMaximumAttendeeCapacity($maximumAttendeeCapacity) {
        $this->properties['maximumAttendeeCapacity'] = $maximumAttendeeCapacity;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMaximumAttendeeCapacity() {
        return $this->properties['maximumAttendeeCapacity'];
    }

    /**
     * The special opening hours of a certain place.\n\nUse this to explicitly override general opening hours brought in scope by [[openingHoursSpecification]] or [[openingHours]].
      
     *
     * @param $specialOpeningHoursSpecification 
     **/
    public function setSpecialOpeningHoursSpecification($specialOpeningHoursSpecification) {
        $this->properties['specialOpeningHoursSpecification'] = $specialOpeningHoursSpecification;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSpecialOpeningHoursSpecification() {
        return $this->properties['specialOpeningHoursSpecification'];
    }


}
