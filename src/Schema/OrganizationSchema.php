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
 * An organization such as a school, NGO, corporation, club, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class OrganizationSchema extends ThingSchema
{
    public static function factory()
    {
        return new OrganizationSchema('https://schema.org/', 'Organization');
    }

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
     *
     * @param $interactionStatistic 
     **/
    public function setInteractionStatistic($interactionStatistic) {
        $this->properties['interactionStatistic'] = $interactionStatistic;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInteractionStatistic() {
        return $this->properties['interactionStatistic'];
    }

    /**
     * The official name of the organization, e.g. the registered company name.
     *
     * @param $legalName 
     **/
    public function setLegalName($legalName) {
        $this->properties['legalName'] = $legalName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLegalName() {
        return $this->properties['legalName'];
    }

    /**
     * A credential awarded to the Person or Organization.
     *
     * @param $hasCredential 
     **/
    public function setHasCredential($hasCredential) {
        $this->properties['hasCredential'] = $hasCredential;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasCredential() {
        return $this->properties['hasCredential'];
    }

    /**
     * MemberProgram offered by an Organization, for example an eCommerce merchant or an airline.
     *
     * @param $hasMemberProgram 
     **/
    public function setHasMemberProgram($hasMemberProgram) {
        $this->properties['hasMemberProgram'] = $hasMemberProgram;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasMemberProgram() {
        return $this->properties['hasMemberProgram'];
    }

    /**
     * A contact point for a person or organization.
     *
     * @param $contactPoints 
     **/
    public function setContactPoints($contactPoints) {
        $this->properties['contactPoints'] = $contactPoints;

        return $this;
    }

    /**
     * @return 
     **/
    public function getContactPoints() {
        return $this->properties['contactPoints'];
    }

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]] descriptions.
     *
     * @param $knowsAbout ||
     **/
    public function setKnowsAbout($knowsAbout) {
        $this->properties['knowsAbout'] = $knowsAbout;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getKnowsAbout() {
        return $this->properties['knowsAbout'];
    }

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]] writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]].

While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology.

     *
     * @param $publishingPrinciples |
     **/
    public function setPublishingPrinciples($publishingPrinciples) {
        $this->properties['publishingPrinciples'] = $publishingPrinciples;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPublishingPrinciples() {
        return $this->properties['publishingPrinciples'];
    }

    /**
     * Alumni of an organization.
     *
     * @param $alumni 
     **/
    public function setAlumni($alumni) {
        $this->properties['alumni'] = $alumni;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAlumni() {
        return $this->properties['alumni'];
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
     * A person or organization who founded this organization.
     *
     * @param $founder |
     **/
    public function setFounder($founder) {
        $this->properties['founder'] = $founder;

        return $this;
    }

    /**
     * @return |
     **/
    public function getFounder() {
        return $this->properties['founder'];
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
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on both staffing and sources, typically providing staffing data.
     *
     * @param $diversityPolicy |
     **/
    public function setDiversityPolicy($diversityPolicy) {
        $this->properties['diversityPolicy'] = $diversityPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDiversityPolicy() {
        return $this->properties['diversityPolicy'];
    }

    /**
     * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
     *
     * @param $subOrganization 
     **/
    public function setSubOrganization($subOrganization) {
        $this->properties['subOrganization'] = $subOrganization;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSubOrganization() {
        return $this->properties['subOrganization'];
    }

    /**
     * The date that this organization was founded.
     *
     * @param $foundingDate 
     **/
    public function setFoundingDate($foundingDate) {
        $this->properties['foundingDate'] = $foundingDate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFoundingDate() {
        return $this->properties['foundingDate'];
    }

    /**
     * The Value-added Tax ID of the organization or person.
     *
     * @param $vatID 
     **/
    public function setVatID($vatID) {
        $this->properties['vatID'] = $vatID;

        return $this;
    }

    /**
     * @return 
     **/
    public function getVatID() {
        return $this->properties['vatID'];
    }

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
     *
     * @param $knowsLanguage |
     **/
    public function setKnowsLanguage($knowsLanguage) {
        $this->properties['knowsLanguage'] = $knowsLanguage;

        return $this;
    }

    /**
     * @return |
     **/
    public function getKnowsLanguage() {
        return $this->properties['knowsLanguage'];
    }

    /**
     * An organization identifier as defined in [ISO 6523(-1)](https://en.wikipedia.org/wiki/ISO/IEC_6523). The identifier should be in the `XXXX:YYYYYY:ZZZ` or `XXXX:YYYYYY`format. Where `XXXX` is a 4 digit _ICD_ (International Code Designator), `YYYYYY` is an _OID_ (Organization Identifier) with all formatting characters (dots, dashes, spaces) removed with a maximal length of 35 characters, and `ZZZ` is an optional OPI (Organization Part Identifier) with a maximum length of 35 characters. The various components (ICD, OID, OPI) are joined with a colon character (ASCII `0x3a`). Note that many existing organization identifiers defined as attributes like [leiCode](https://schema.org/leiCode) (`0199`), [duns](https://schema.org/duns) (`0060`) or [GLN](https://schema.org/globalLocationNumber) (`0088`) can be expressed using ISO-6523. If possible, ISO-6523 codes should be preferred to populating [vatID](https://schema.org/vatID) or [taxID](https://schema.org/taxID), as ISO identifiers are less ambiguous.
     *
     * @param $iso6523Code 
     **/
    public function setIso6523Code($iso6523Code) {
        $this->properties['iso6523Code'] = $iso6523Code;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIso6523Code() {
        return $this->properties['iso6523Code'];
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
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     *
     * @param $funding 
     **/
    public function setFunding($funding) {
        $this->properties['funding'] = $funding;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFunding() {
        return $this->properties['funding'];
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
     * The larger organization that this organization is a [[subOrganization]] of, if any.
     *
     * @param $parentOrganization 
     **/
    public function setParentOrganization($parentOrganization) {
        $this->properties['parentOrganization'] = $parentOrganization;

        return $this;
    }

    /**
     * @return 
     **/
    public function getParentOrganization() {
        return $this->properties['parentOrganization'];
    }

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards of behavior expected by the organization.
     *
     * @param $ethicsPolicy |
     **/
    public function setEthicsPolicy($ethicsPolicy) {
        $this->properties['ethicsPolicy'] = $ethicsPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getEthicsPolicy() {
        return $this->properties['ethicsPolicy'];
    }

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @param $hasPOS 
     **/
    public function setHasPOS($hasPOS) {
        $this->properties['hasPOS'] = $hasPOS;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasPOS() {
        return $this->properties['hasPOS'];
    }

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     *
     * @param $funder |
     **/
    public function setFunder($funder) {
        $this->properties['funder'] = $funder;

        return $this;
    }

    /**
     * @return |
     **/
    public function getFunder() {
        return $this->properties['funder'];
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
     * Email address.
     *
     * @param $email 
     **/
    public function setEmail($email) {
        $this->properties['email'] = $email;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEmail() {
        return $this->properties['email'];
    }

    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     *
     * @param $naics 
     **/
    public function setNaics($naics) {
        $this->properties['naics'] = $naics;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNaics() {
        return $this->properties['naics'];
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
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     *
     * @param $memberOf ||
     **/
    public function setMemberOf($memberOf) {
        $this->properties['memberOf'] = $memberOf;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getMemberOf() {
        return $this->properties['memberOf'];
    }

    /**
     * A contact point for a person or organization.
     *
     * @param $contactPoint 
     **/
    public function setContactPoint($contactPoint) {
        $this->properties['contactPoint'] = $contactPoint;

        return $this;
    }

    /**
     * @return 
     **/
    public function getContactPoint() {
        return $this->properties['contactPoint'];
    }

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     *
     * @param $taxID 
     **/
    public function setTaxID($taxID) {
        $this->properties['taxID'] = $taxID;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTaxID() {
        return $this->properties['taxID'];
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
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is either claimed by a person, an organization or desired or required to fulfill a role or to work in an occupation.
     *
     * @param $skills |
     **/
    public function setSkills($skills) {
        $this->properties['skills'] = $skills;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSkills() {
        return $this->properties['skills'];
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
     * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
     *
     * @param $department 
     **/
    public function setDepartment($department) {
        $this->properties['department'] = $department;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDepartment() {
        return $this->properties['department'];
    }

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     *
     * @param $location |||
     **/
    public function setLocation($location) {
        $this->properties['location'] = $location;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getLocation() {
        return $this->properties['location'];
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
     * The number of employees in an organization, e.g. business.
     *
     * @param $numberOfEmployees 
     **/
    public function setNumberOfEmployees($numberOfEmployees) {
        $this->properties['numberOfEmployees'] = $numberOfEmployees;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNumberOfEmployees() {
        return $this->properties['numberOfEmployees'];
    }

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     *
     * @param $unnamedSourcesPolicy |
     **/
    public function setUnnamedSourcesPolicy($unnamedSourcesPolicy) {
        $this->properties['unnamedSourcesPolicy'] = $unnamedSourcesPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getUnnamedSourcesPolicy() {
        return $this->properties['unnamedSourcesPolicy'];
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
     * The date that this organization was dissolved.
     *
     * @param $dissolutionDate 
     **/
    public function setDissolutionDate($dissolutionDate) {
        $this->properties['dissolutionDate'] = $dissolutionDate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDissolutionDate() {
        return $this->properties['dissolutionDate'];
    }

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     *
     * @param $hasMerchantReturnPolicy 
     **/
    public function setHasMerchantReturnPolicy($hasMerchantReturnPolicy) {
        $this->properties['hasMerchantReturnPolicy'] = $hasMerchantReturnPolicy;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasMerchantReturnPolicy() {
        return $this->properties['hasMerchantReturnPolicy'];
    }

    /**
     * Products owned by the organization or person.
     *
     * @param $owns |
     **/
    public function setOwns($owns) {
        $this->properties['owns'] = $owns;

        return $this;
    }

    /**
     * @return |
     **/
    public function getOwns() {
        return $this->properties['owns'];
    }

    /**
     * An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.
     *
     * @param $leiCode 
     **/
    public function setLeiCode($leiCode) {
        $this->properties['leiCode'] = $leiCode;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLeiCode() {
        return $this->properties['leiCode'];
    }

    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     *
     * @param $correctionsPolicy |
     **/
    public function setCorrectionsPolicy($correctionsPolicy) {
        $this->properties['correctionsPolicy'] = $correctionsPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getCorrectionsPolicy() {
        return $this->properties['correctionsPolicy'];
    }

    /**
     * The payment method(s) that are accepted in general by an organization, or for some specific demand or offer.
     *
     * @param $acceptedPaymentMethod ||
     **/
    public function setAcceptedPaymentMethod($acceptedPaymentMethod) {
        $this->properties['acceptedPaymentMethod'] = $acceptedPaymentMethod;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getAcceptedPaymentMethod() {
        return $this->properties['acceptedPaymentMethod'];
    }

    /**
     * nonprofitStatus indicates the legal status of a non-profit organization in its primary place of business.
     *
     * @param $nonprofitStatus 
     **/
    public function setNonprofitStatus($nonprofitStatus) {
        $this->properties['nonprofitStatus'] = $nonprofitStatus;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNonprofitStatus() {
        return $this->properties['nonprofitStatus'];
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
     * People working for this organization.
     *
     * @param $employees 
     **/
    public function setEmployees($employees) {
        $this->properties['employees'] = $employees;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEmployees() {
        return $this->properties['employees'];
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
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media setting, this is with particular reference to editorial independence.   Note that the [[funder]] is also available and can be used to make basic funder information machine-readable.
     *
     * @param $ownershipFundingInfo |||
     **/
    public function setOwnershipFundingInfo($ownershipFundingInfo) {
        $this->properties['ownershipFundingInfo'] = $ownershipFundingInfo;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getOwnershipFundingInfo() {
        return $this->properties['ownershipFundingInfo'];
    }

    /**
     * Awards won by or for this item.
     *
     * @param $awards 
     **/
    public function setAwards($awards) {
        $this->properties['awards'] = $awards;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAwards() {
        return $this->properties['awards'];
    }

    /**
     * The place where the Organization was founded.
     *
     * @param $foundingLocation 
     **/
    public function setFoundingLocation($foundingLocation) {
        $this->properties['foundingLocation'] = $foundingLocation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFoundingLocation() {
        return $this->properties['foundingLocation'];
    }

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might be for example ASNE or RTDNA (US) reports, or self-reported.
     *
     * @param $diversityStaffingReport |
     **/
    public function setDiversityStaffingReport($diversityStaffingReport) {
        $this->properties['diversityStaffingReport'] = $diversityStaffingReport;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDiversityStaffingReport() {
        return $this->properties['diversityStaffingReport'];
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
     * A person who founded this organization.
     *
     * @param $founders 
     **/
    public function setFounders($founders) {
        $this->properties['founders'] = $founders;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFounders() {
        return $this->properties['founders'];
    }

    /**
     * Someone working for this organization.
     *
     * @param $employee 
     **/
    public function setEmployee($employee) {
        $this->properties['employee'] = $employee;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEmployee() {
        return $this->properties['employee'];
    }

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     *
     * @param $member |
     **/
    public function setMember($member) {
        $this->properties['member'] = $member;

        return $this;
    }

    /**
     * @return |
     **/
    public function getMember() {
        return $this->properties['member'];
    }

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     *
     * @param $duns 
     **/
    public function setDuns($duns) {
        $this->properties['duns'] = $duns;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDuns() {
        return $this->properties['duns'];
    }

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     * @param $sponsor |
     **/
    public function setSponsor($sponsor) {
        $this->properties['sponsor'] = $sponsor;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSponsor() {
        return $this->properties['sponsor'];
    }

    /**
     * A pointer to products or services offered by the organization or person.
     *
     * @param $makesOffer 
     **/
    public function setMakesOffer($makesOffer) {
        $this->properties['makesOffer'] = $makesOffer;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMakesOffer() {
        return $this->properties['makesOffer'];
    }

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     *
     * @param $actionableFeedbackPolicy |
     **/
    public function setActionableFeedbackPolicy($actionableFeedbackPolicy) {
        $this->properties['actionableFeedbackPolicy'] = $actionableFeedbackPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getActionableFeedbackPolicy() {
        return $this->properties['actionableFeedbackPolicy'];
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
     * A pointer to products or services sought by the organization or person (demand).
     *
     * @param $seeks 
     **/
    public function setSeeks($seeks) {
        $this->properties['seeks'] = $seeks;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSeeks() {
        return $this->properties['seeks'];
    }

    /**
     * The number of completed interactions for this entity, in a particular role (the 'agent'), in a particular action (indicated in the statistic), and in a particular context (i.e. interactionService).
     *
     * @param $agentInteractionStatistic 
     **/
    public function setAgentInteractionStatistic($agentInteractionStatistic) {
        $this->properties['agentInteractionStatistic'] = $agentInteractionStatistic;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAgentInteractionStatistic() {
        return $this->properties['agentInteractionStatistic'];
    }

    /**
     * A member of this organization.
     *
     * @param $members |
     **/
    public function setMembers($members) {
        $this->properties['members'] = $members;

        return $this;
    }

    /**
     * @return |
     **/
    public function getMembers() {
        return $this->properties['members'];
    }


}
