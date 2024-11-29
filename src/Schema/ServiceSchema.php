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
class ServiceSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new ServiceSchema('https://schema.org/', 'Service');
    }

    /**
     * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
     *
     * @param $serviceType |
     **/
    public function setServiceType($serviceType) {
        $this->properties['serviceType'] = $serviceType;

        return $this;
    }

    /**
     * @return |
     **/
    public function getServiceType() {
        return $this->properties['serviceType'];
    }

    /**
     * Human-readable terms of service documentation.
     *
     * @param $termsOfService |
     **/
    public function setTermsOfService($termsOfService) {
        $this->properties['termsOfService'] = $termsOfService;

        return $this;
    }

    /**
     * @return |
     **/
    public function getTermsOfService() {
        return $this->properties['termsOfService'];
    }

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @param $isSimilarTo |
     **/
    public function setIsSimilarTo($isSimilarTo) {
        $this->properties['isSimilarTo'] = $isSimilarTo;

        return $this;
    }

    /**
     * @return |
     **/
    public function getIsSimilarTo() {
        return $this->properties['isSimilarTo'];
    }

    /**
     * An award won by or for this item.
     *
     * @param $award 
     **/
    public function setAward($award) {
        $this->properties['award'] = $award;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAward() {
        return $this->properties['award'];
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     * @param $broker |
     **/
    public function setBroker($broker) {
        $this->properties['broker'] = $broker;

        return $this;
    }

    /**
     * @return |
     **/
    public function getBroker() {
        return $this->properties['broker'];
    }

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     * @param $hasOfferCatalog 
     **/
    public function setHasOfferCatalog($hasOfferCatalog) {
        $this->properties['hasOfferCatalog'] = $hasOfferCatalog;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasOfferCatalog() {
        return $this->properties['hasOfferCatalog'];
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
     * The audience eligible for this service.
     *
     * @param $serviceAudience 
     **/
    public function setServiceAudience($serviceAudience) {
        $this->properties['serviceAudience'] = $serviceAudience;

        return $this;
    }

    /**
     * @return 
     **/
    public function getServiceAudience() {
        return $this->properties['serviceAudience'];
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
     * The geographic area where a service or offered item is provided.
     *
     * @param $areaServed |||
     **/
    public function setAreaServed($areaServed) {
        $this->properties['areaServed'] = $areaServed;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getAreaServed() {
        return $this->properties['areaServed'];
    }

    /**
     * The geographic area where the service is provided.
     *
     * @param $serviceArea ||
     **/
    public function setServiceArea($serviceArea) {
        $this->properties['serviceArea'] = $serviceArea;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getServiceArea() {
        return $this->properties['serviceArea'];
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     * @param $brand |
     **/
    public function setBrand($brand) {
        $this->properties['brand'] = $brand;

        return $this;
    }

    /**
     * @return |
     **/
    public function getBrand() {
        return $this->properties['brand'];
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @param $category ||||
     **/
    public function setCategory($category) {
        $this->properties['category'] = $category;

        return $this;
    }

    /**
     * @return ||||
     **/
    public function getCategory() {
        return $this->properties['category'];
    }

    /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     *
     * @param $providerMobility 
     **/
    public function setProviderMobility($providerMobility) {
        $this->properties['providerMobility'] = $providerMobility;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProviderMobility() {
        return $this->properties['providerMobility'];
    }

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @param $isRelatedTo |
     **/
    public function setIsRelatedTo($isRelatedTo) {
        $this->properties['isRelatedTo'] = $isRelatedTo;

        return $this;
    }

    /**
     * @return |
     **/
    public function getIsRelatedTo() {
        return $this->properties['isRelatedTo'];
    }

    /**
     * The hours during which this service or contact is available.
     *
     * @param $hoursAvailable 
     **/
    public function setHoursAvailable($hoursAvailable) {
        $this->properties['hoursAvailable'] = $hoursAvailable;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHoursAvailable() {
        return $this->properties['hoursAvailable'];
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
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     *
     * @param $produces 
     **/
    public function setProduces($produces) {
        $this->properties['produces'] = $produces;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProduces() {
        return $this->properties['produces'];
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
      
     *
     * @param $offers |
     **/
    public function setOffers($offers) {
        $this->properties['offers'] = $offers;

        return $this;
    }

    /**
     * @return |
     **/
    public function getOffers() {
        return $this->properties['offers'];
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     * @param $provider |
     **/
    public function setProvider($provider) {
        $this->properties['provider'] = $provider;

        return $this;
    }

    /**
     * @return |
     **/
    public function getProvider() {
        return $this->properties['provider'];
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
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     *
     * @param $serviceOutput 
     **/
    public function setServiceOutput($serviceOutput) {
        $this->properties['serviceOutput'] = $serviceOutput;

        return $this;
    }

    /**
     * @return 
     **/
    public function getServiceOutput() {
        return $this->properties['serviceOutput'];
    }

    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
     *
     * @param $availableChannel 
     **/
    public function setAvailableChannel($availableChannel) {
        $this->properties['availableChannel'] = $availableChannel;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAvailableChannel() {
        return $this->properties['availableChannel'];
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
