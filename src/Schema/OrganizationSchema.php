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
 * An organization such as a school, NGO, corporation, club, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class OrganizationSchema extends ThingSchema
{
    public static function factory()
    {
        return new OrganizationSchema();
    }

    public function getDataArray()
    {
        return array();
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
     * Alumni of an organization.
     **/
    private $alumni;
    public function setAlumni($alumni) {
        $this->alumni = $alumni;

        return $this;
    }

    /**
     * @return PersonSchema     **/
    public function getAlumni() {
        return $this->alumni;
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
     * @return PlaceSchema|AdministrativeAreaSchema|GeoShapeSchema|TextSchema     **/
    public function getAreaServed() {
        return $this->areaServed;
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
     * @return TextSchema     **/
    public function getAward() {
        return $this->award;
    }

    /**
     * Awards won by or for this item.
     **/
    private $awards;
    public function setAwards($awards) {
        $this->awards = $awards;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getAwards() {
        return $this->awards;
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     **/
    private $brand;
    public function setBrand($brand) {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return BrandSchema|OrganizationSchema     **/
    public function getBrand() {
        return $this->brand;
    }

    /**
     * A contact point for a person or organization.
     **/
    private $contactPoint;
    public function setContactPoint($contactPoint) {
        $this->contactPoint = $contactPoint;

        return $this;
    }

    /**
     * @return ContactPointSchema     **/
    public function getContactPoint() {
        return $this->contactPoint;
    }

    /**
     * A contact point for a person or organization.
     **/
    private $contactPoints;
    public function setContactPoints($contactPoints) {
        $this->contactPoints = $contactPoints;

        return $this;
    }

    /**
     * @return ContactPointSchema     **/
    public function getContactPoints() {
        return $this->contactPoints;
    }

    /**
     * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
     **/
    private $department;
    public function setDepartment($department) {
        $this->department = $department;

        return $this;
    }

    /**
     * @return OrganizationSchema     **/
    public function getDepartment() {
        return $this->department;
    }

    /**
     * The date that this organization was dissolved.
     **/
    private $dissolutionDate;
    public function setDissolutionDate($dissolutionDate) {
        $this->dissolutionDate = $dissolutionDate;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getDissolutionDate() {
        return $this->dissolutionDate;
    }

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     **/
    private $duns;
    public function setDuns($duns) {
        $this->duns = $duns;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getDuns() {
        return $this->duns;
    }

    /**
     * Email address.
     **/
    private $email;
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getEmail() {
        return $this->email;
    }

    /**
     * Someone working for this organization.
     **/
    private $employee;
    public function setEmployee($employee) {
        $this->employee = $employee;

        return $this;
    }

    /**
     * @return PersonSchema     **/
    public function getEmployee() {
        return $this->employee;
    }

    /**
     * People working for this organization.
     **/
    private $employees;
    public function setEmployees($employees) {
        $this->employees = $employees;

        return $this;
    }

    /**
     * @return PersonSchema     **/
    public function getEmployees() {
        return $this->employees;
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
     * A person who founded this organization.
     **/
    private $founder;
    public function setFounder($founder) {
        $this->founder = $founder;

        return $this;
    }

    /**
     * @return PersonSchema     **/
    public function getFounder() {
        return $this->founder;
    }

    /**
     * A person who founded this organization.
     **/
    private $founders;
    public function setFounders($founders) {
        $this->founders = $founders;

        return $this;
    }

    /**
     * @return PersonSchema     **/
    public function getFounders() {
        return $this->founders;
    }

    /**
     * The date that this organization was founded.
     **/
    private $foundingDate;
    public function setFoundingDate($foundingDate) {
        $this->foundingDate = $foundingDate;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getFoundingDate() {
        return $this->foundingDate;
    }

    /**
     * The place where the Organization was founded.
     **/
    private $foundingLocation;
    public function setFoundingLocation($foundingLocation) {
        $this->foundingLocation = $foundingLocation;

        return $this;
    }

    /**
     * @return PlaceSchema     **/
    public function getFoundingLocation() {
        return $this->foundingLocation;
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
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     **/
    private $hasOfferCatalog;
    public function setHasOfferCatalog($hasOfferCatalog) {
        $this->hasOfferCatalog = $hasOfferCatalog;

        return $this;
    }

    /**
     * @return OfferCatalogSchema     **/
    public function getHasOfferCatalog() {
        return $this->hasOfferCatalog;
    }

    /**
     * Points-of-Sales operated by the organization or person.
     **/
    private $hasPOS;
    public function setHasPOS($hasPOS) {
        $this->hasPOS = $hasPOS;

        return $this;
    }

    /**
     * @return PlaceSchema     **/
    public function getHasPOS() {
        return $this->hasPOS;
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
     * The official name of the organization, e.g. the registered company name.
     **/
    private $legalName;
    public function setLegalName($legalName) {
        $this->legalName = $legalName;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getLegalName() {
        return $this->legalName;
    }

    /**
     * The location of for example where the event is happening, an organization is located, or where an action takes place.
     **/
    private $location;
    public function setLocation($location) {
        $this->location = $location;

        return $this;
    }

    /**
     * @return PlaceSchema|PostalAddressSchema|TextSchema     **/
    public function getLocation() {
        return $this->location;
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
     * A pointer to products or services offered by the organization or person.
     **/
    private $makesOffer;
    public function setMakesOffer($makesOffer) {
        $this->makesOffer = $makesOffer;

        return $this;
    }

    /**
     * @return OfferSchema     **/
    public function getMakesOffer() {
        return $this->makesOffer;
    }

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     **/
    private $member;
    public function setMember($member) {
        $this->member = $member;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     **/
    public function getMember() {
        return $this->member;
    }

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     **/
    private $memberOf;
    public function setMemberOf($memberOf) {
        $this->memberOf = $memberOf;

        return $this;
    }

    /**
     * @return OrganizationSchema|ProgramMembershipSchema     **/
    public function getMemberOf() {
        return $this->memberOf;
    }

    /**
     * A member of this organization.
     **/
    private $members;
    public function setMembers($members) {
        $this->members = $members;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     **/
    public function getMembers() {
        return $this->members;
    }

    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     **/
    private $naics;
    public function setNaics($naics) {
        $this->naics = $naics;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getNaics() {
        return $this->naics;
    }

    /**
     * The number of employees in an organization e.g. business.
     **/
    private $numberOfEmployees;
    public function setNumberOfEmployees($numberOfEmployees) {
        $this->numberOfEmployees = $numberOfEmployees;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     **/
    public function getNumberOfEmployees() {
        return $this->numberOfEmployees;
    }

    /**
     * Products owned by the organization or person.
     **/
    private $owns;
    public function setOwns($owns) {
        $this->owns = $owns;

        return $this;
    }

    /**
     * @return OwnershipInfoSchema|ProductSchema     **/
    public function getOwns() {
        return $this->owns;
    }

    /**
     * The larger organization that this organization is a branch of, if any.
     **/
    private $parentOrganization;
    public function setParentOrganization($parentOrganization) {
        $this->parentOrganization = $parentOrganization;

        return $this;
    }

    /**
     * @return OrganizationSchema     **/
    public function getParentOrganization() {
        return $this->parentOrganization;
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
     * A pointer to products or services sought by the organization or person (demand).
     **/
    private $seeks;
    public function setSeeks($seeks) {
        $this->seeks = $seeks;

        return $this;
    }

    /**
     * @return DemandSchema     **/
    public function getSeeks() {
        return $this->seeks;
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
     * @return PlaceSchema|AdministrativeAreaSchema|GeoShapeSchema     **/
    public function getServiceArea() {
        return $this->serviceArea;
    }

    /**
     * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
     **/
    private $subOrganization;
    public function setSubOrganization($subOrganization) {
        $this->subOrganization = $subOrganization;

        return $this;
    }

    /**
     * @return OrganizationSchema     **/
    public function getSubOrganization() {
        return $this->subOrganization;
    }

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     **/
    private $taxID;
    public function setTaxID($taxID) {
        $this->taxID = $taxID;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getTaxID() {
        return $this->taxID;
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

    /**
     * The Value-added Tax ID of the organization or person.
     **/
    private $vatID;
    public function setVatID($vatID) {
        $this->vatID = $vatID;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getVatID() {
        return $this->vatID;
    }


}
