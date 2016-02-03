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
 * A person (alive, dead, undead, or fictional).
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PersonSchema extends ThingSchema
{
    public static function factory()
    {
        return new PersonSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * An additional name for a Person, can be used for a middle name.
     **/
    private $additionalName;
    public function setAdditionalName($additionalName) {
        $this->additionalName = $additionalName;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAdditionalName() {
        return $this->additionalName;
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
     * @return PostalAddressSchema|TextSchema     
     **/
    public function getAddress() {
        return $this->address;
    }

    /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
     **/
    private $affiliation;
    public function setAffiliation($affiliation) {
        $this->affiliation = $affiliation;

        return $this;
    }

    /**
     * @return OrganizationSchema     
     **/
    public function getAffiliation() {
        return $this->affiliation;
    }

    /**
     * An organization that the person is an alumni of.
     **/
    private $alumniOf;
    public function setAlumniOf($alumniOf) {
        $this->alumniOf = $alumniOf;

        return $this;
    }

    /**
     * @return EducationalOrganizationSchema|OrganizationSchema     
     **/
    public function getAlumniOf() {
        return $this->alumniOf;
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
     * Awards won by or for this item.
     **/
    private $awards;
    public function setAwards($awards) {
        $this->awards = $awards;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAwards() {
        return $this->awards;
    }

    /**
     * Date of birth.
     **/
    private $birthDate;
    public function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * @return DateSchema     
     **/
    public function getBirthDate() {
        return $this->birthDate;
    }

    /**
     * The place where the person was born.
     **/
    private $birthPlace;
    public function setBirthPlace($birthPlace) {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    /**
     * @return PlaceSchema     
     **/
    public function getBirthPlace() {
        return $this->birthPlace;
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
     * @return BrandSchema|OrganizationSchema     
     **/
    public function getBrand() {
        return $this->brand;
    }

    /**
     * A child of the person.
     **/
    private $children;
    public function setChildren($children) {
        $this->children = $children;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getChildren() {
        return $this->children;
    }

    /**
     * A colleague of the person.
     **/
    private $colleague;
    public function setColleague($colleague) {
        $this->colleague = $colleague;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getColleague() {
        return $this->colleague;
    }

    /**
     * A colleague of the person.
     **/
    private $colleagues;
    public function setColleagues($colleagues) {
        $this->colleagues = $colleagues;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getColleagues() {
        return $this->colleagues;
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
     * @return ContactPointSchema     
     **/
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
     * @return ContactPointSchema     
     **/
    public function getContactPoints() {
        return $this->contactPoints;
    }

    /**
     * Date of death.
     **/
    private $deathDate;
    public function setDeathDate($deathDate) {
        $this->deathDate = $deathDate;

        return $this;
    }

    /**
     * @return DateSchema     
     **/
    public function getDeathDate() {
        return $this->deathDate;
    }

    /**
     * The place where the person died.
     **/
    private $deathPlace;
    public function setDeathPlace($deathPlace) {
        $this->deathPlace = $deathPlace;

        return $this;
    }

    /**
     * @return PlaceSchema     
     **/
    public function getDeathPlace() {
        return $this->deathPlace;
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
     * @return TextSchema     
     **/
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
     * @return TextSchema     
     **/
    public function getEmail() {
        return $this->email;
    }

    /**
     * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the name property.
     **/
    private $familyName;
    public function setFamilyName($familyName) {
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getFamilyName() {
        return $this->familyName;
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
     * @return TextSchema     
     **/
    public function getFaxNumber() {
        return $this->faxNumber;
    }

    /**
     * The most generic uni-directional social relation.
     **/
    private $follows;
    public function setFollows($follows) {
        $this->follows = $follows;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getFollows() {
        return $this->follows;
    }

    /**
     * Gender of the person.
     **/
    private $gender;
    public function setGender($gender) {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getGender() {
        return $this->gender;
    }

    /**
     * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the name property.
     **/
    private $givenName;
    public function setGivenName($givenName) {
        $this->givenName = $givenName;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getGivenName() {
        return $this->givenName;
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
     * @return TextSchema     
     **/
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
     * @return OfferCatalogSchema     
     **/
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
     * @return PlaceSchema     
     **/
    public function getHasPOS() {
        return $this->hasPOS;
    }

    /**
     * The height of the item.
     **/
    private $height;
    public function setHeight($height) {
        $this->height = $height;

        return $this;
    }

    /**
     * @return DistanceSchema|QuantitativeValueSchema     
     **/
    public function getHeight() {
        return $this->height;
    }

    /**
     * A contact location for a person's residence.
     **/
    private $homeLocation;
    public function setHomeLocation($homeLocation) {
        $this->homeLocation = $homeLocation;

        return $this;
    }

    /**
     * @return ContactPointSchema|PlaceSchema     
     **/
    public function getHomeLocation() {
        return $this->homeLocation;
    }

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     **/
    private $honorificPrefix;
    public function setHonorificPrefix($honorificPrefix) {
        $this->honorificPrefix = $honorificPrefix;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getHonorificPrefix() {
        return $this->honorificPrefix;
    }

    /**
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     **/
    private $honorificSuffix;
    public function setHonorificSuffix($honorificSuffix) {
        $this->honorificSuffix = $honorificSuffix;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getHonorificSuffix() {
        return $this->honorificSuffix;
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
     * @return TextSchema     
     **/
    public function getIsicV4() {
        return $this->isicV4;
    }

    /**
     * The job title of the person (for example, Financial Manager).
     **/
    private $jobTitle;
    public function setJobTitle($jobTitle) {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getJobTitle() {
        return $this->jobTitle;
    }

    /**
     * The most generic bi-directional social/work relation.
     **/
    private $knows;
    public function setKnows($knows) {
        $this->knows = $knows;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getKnows() {
        return $this->knows;
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
     * @return OfferSchema     
     **/
    public function getMakesOffer() {
        return $this->makesOffer;
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
     * @return OrganizationSchema|ProgramMembershipSchema     
     **/
    public function getMemberOf() {
        return $this->memberOf;
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
     * @return TextSchema     
     **/
    public function getNaics() {
        return $this->naics;
    }

    /**
     * Nationality of the person.
     **/
    private $nationality;
    public function setNationality($nationality) {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * @return CountrySchema     
     **/
    public function getNationality() {
        return $this->nationality;
    }

    /**
     * The total financial value of the person as calculated by subtracting assets from liabilities.
     **/
    private $netWorth;
    public function setNetWorth($netWorth) {
        $this->netWorth = $netWorth;

        return $this;
    }

    /**
     * @return PriceSpecificationSchema     
     **/
    public function getNetWorth() {
        return $this->netWorth;
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
     * @return OwnershipInfoSchema|ProductSchema     
     **/
    public function getOwns() {
        return $this->owns;
    }

    /**
     * A parent of this person.
     **/
    private $parent;
    public function setParent($parent) {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getParent() {
        return $this->parent;
    }

    /**
     * A parents of the person.
     **/
    private $parents;
    public function setParents($parents) {
        $this->parents = $parents;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getParents() {
        return $this->parents;
    }

    /**
     * Event that this person is a performer or participant in.
     **/
    private $performerIn;
    public function setPerformerIn($performerIn) {
        $this->performerIn = $performerIn;

        return $this;
    }

    /**
     * @return EventSchema     
     **/
    public function getPerformerIn() {
        return $this->performerIn;
    }

    /**
     * The most generic familial relation.
     **/
    private $relatedTo;
    public function setRelatedTo($relatedTo) {
        $this->relatedTo = $relatedTo;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getRelatedTo() {
        return $this->relatedTo;
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
     * @return DemandSchema     
     **/
    public function getSeeks() {
        return $this->seeks;
    }

    /**
     * A sibling of the person.
     **/
    private $sibling;
    public function setSibling($sibling) {
        $this->sibling = $sibling;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getSibling() {
        return $this->sibling;
    }

    /**
     * A sibling of the person.
     **/
    private $siblings;
    public function setSiblings($siblings) {
        $this->siblings = $siblings;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getSiblings() {
        return $this->siblings;
    }

    /**
     * The person's spouse.
     **/
    private $spouse;
    public function setSpouse($spouse) {
        $this->spouse = $spouse;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getSpouse() {
        return $this->spouse;
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
     * @return TextSchema     
     **/
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
     * @return TextSchema     
     **/
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
     * @return TextSchema     
     **/
    public function getVatID() {
        return $this->vatID;
    }

    /**
     * The weight of the product or person.
     **/
    private $weight;
    public function setWeight($weight) {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     
     **/
    public function getWeight() {
        return $this->weight;
    }

    /**
     * A contact location for a person's place of work.
     **/
    private $workLocation;
    public function setWorkLocation($workLocation) {
        $this->workLocation = $workLocation;

        return $this;
    }

    /**
     * @return ContactPointSchema|PlaceSchema     
     **/
    public function getWorkLocation() {
        return $this->workLocation;
    }

    /**
     * Organizations that the person works for.
     **/
    private $worksFor;
    public function setWorksFor($worksFor) {
        $this->worksFor = $worksFor;

        return $this;
    }

    /**
     * @return OrganizationSchema     
     **/
    public function getWorksFor() {
        return $this->worksFor;
    }


}
