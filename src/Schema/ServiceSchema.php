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
 * A service provided by an organization, e.g. delivery service, print services, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ServiceSchema extends IntangibleSchema
{
    public static function factory(): ServiceSchema
    {
        return new ServiceSchema('https://schema.org/', 'Service');
    }

    /**
     * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
     *
     * @param $serviceType |
     * @return static
     **/
    public function setServiceType($serviceType): static {
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
     * @return static
     **/
    public function setTermsOfService($termsOfService): static {
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
     * @return static
     **/
    public function setIsSimilarTo($isSimilarTo): static {
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
     * @return static
     **/
    public function setAward($award): static {
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
     * @return static
     **/
    public function setBroker($broker): static {
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
     * @return static
     **/
    public function setHasOfferCatalog($hasOfferCatalog): static {
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
     * @return static
     **/
    public function setHasCertification($hasCertification): static {
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
     * @return static
     **/
    public function setServiceAudience($serviceAudience): static {
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
     * @return static
     **/
    public function setLogo($logo): static {
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
     * @return static
     **/
    public function setAreaServed($areaServed): static {
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
     * @return static
     **/
    public function setServiceArea($serviceArea): static {
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
     * @return static
     **/
    public function setBrand($brand): static {
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
     * @return static
     **/
    public function setCategory($category): static {
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
     * @return static
     **/
    public function setProviderMobility($providerMobility): static {
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
     * @return static
     **/
    public function setIsRelatedTo($isRelatedTo): static {
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
     * @return static
     **/
    public function setHoursAvailable($hoursAvailable): static {
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
     * @return static
     **/
    public function setReview($review): static {
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
     * @return static
     **/
    public function setProduces($produces): static {
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
     * @return static
     **/
    public function setOffers($offers): static {
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
     * @return static
     **/
    public function setProvider($provider): static {
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
     * @return static
     **/
    public function setSlogan($slogan): static {
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
     * @return static
     **/
    public function setAggregateRating($aggregateRating): static {
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
     * @return static
     **/
    public function setServiceOutput($serviceOutput): static {
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
     * @return static
     **/
    public function setAvailableChannel($availableChannel): static {
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
     * @return static
     **/
    public function setAudience($audience): static {
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
