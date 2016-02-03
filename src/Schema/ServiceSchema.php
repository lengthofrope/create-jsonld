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
 * A service provided by an organization, e.g. delivery service, print services, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ServiceSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new ServiceSchema();
    }

    public function getDataArray()
    {
        return array();
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
     * @return AggregateRatingSchema     
     **/
    public function getAggregateRating() {
        return $this->aggregateRating;
    }

    /**
     * The geographic area where a service or offered item is provided.
     **/
    private $areaServed;
    public function setAreaServed($areaServed) {
        $this->areaServed = $areaServed;

        return $this;
    }

    /**
     * @return PlaceSchema|AdministrativeAreaSchema|GeoShapeSchema|TextSchema     
     **/
    public function getAreaServed() {
        return $this->areaServed;
    }

    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
     **/
    private $availableChannel;
    public function setAvailableChannel($availableChannel) {
        $this->availableChannel = $availableChannel;

        return $this;
    }

    /**
     * @return ServiceChannelSchema     
     **/
    public function getAvailableChannel() {
        return $this->availableChannel;
    }

    /**
     * An award won by or for this item.
     **/
    private $award;
    public function setAward($award) {
        $this->award = $award;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAward() {
        return $this->award;
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     **/
    private $category;
    public function setCategory($category) {
        $this->category = $category;

        return $this;
    }

    /**
     * @return PhysicalActivityCategorySchema|TextSchema|ThingSchema     
     **/
    public function getCategory() {
        return $this->category;
    }

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     **/
    private $hasOfferCatalog;
    public function setHasOfferCatalog($hasOfferCatalog) {
        $this->hasOfferCatalog = $hasOfferCatalog;

        return $this;
    }

    /**
     * @return OfferCatalogSchema     
     **/
    public function getHasOfferCatalog() {
        return $this->hasOfferCatalog;
    }

    /**
     * The hours during which this service or contact is available.
     **/
    private $hoursAvailable;
    public function setHoursAvailable($hoursAvailable) {
        $this->hoursAvailable = $hoursAvailable;

        return $this;
    }

    /**
     * @return OpeningHoursSpecificationSchema     
     **/
    public function getHoursAvailable() {
        return $this->hoursAvailable;
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     **/
    private $offers;
    public function setOffers($offers) {
        $this->offers = $offers;

        return $this;
    }

    /**
     * @return OfferSchema     
     **/
    public function getOffers() {
        return $this->offers;
    }

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     **/
    private $produces;
    public function setProduces($produces) {
        $this->produces = $produces;

        return $this;
    }

    /**
     * @return ThingSchema     
     **/
    public function getProduces() {
        return $this->produces;
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     **/
    private $provider;
    public function setProvider($provider) {
        $this->provider = $provider;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     
     **/
    public function getProvider() {
        return $this->provider;
    }

    /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     **/
    private $providerMobility;
    public function setProviderMobility($providerMobility) {
        $this->providerMobility = $providerMobility;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getProviderMobility() {
        return $this->providerMobility;
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
     * @return ReviewSchema     
     **/
    public function getReview() {
        return $this->review;
    }

    /**
     * The geographic area where the service is provided.
     **/
    private $serviceArea;
    public function setServiceArea($serviceArea) {
        $this->serviceArea = $serviceArea;

        return $this;
    }

    /**
     * @return PlaceSchema|AdministrativeAreaSchema|GeoShapeSchema     
     **/
    public function getServiceArea() {
        return $this->serviceArea;
    }

    /**
     * The audience eligible for this service.
     **/
    private $serviceAudience;
    public function setServiceAudience($serviceAudience) {
        $this->serviceAudience = $serviceAudience;

        return $this;
    }

    /**
     * @return AudienceSchema     
     **/
    public function getServiceAudience() {
        return $this->serviceAudience;
    }

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     **/
    private $serviceOutput;
    public function setServiceOutput($serviceOutput) {
        $this->serviceOutput = $serviceOutput;

        return $this;
    }

    /**
     * @return ThingSchema     
     **/
    public function getServiceOutput() {
        return $this->serviceOutput;
    }

    /**
     * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
     **/
    private $serviceType;
    public function setServiceType($serviceType) {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getServiceType() {
        return $this->serviceType;
    }


}
