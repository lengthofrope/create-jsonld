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
 * @see https://schema.org/Organization
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Organization extends Thing
{
    public static function factory(): Organization
    {
        return new Organization('https://schema.org/', 'Organization');
    }

    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter should
     * be used.
     *
     * @param $interactionStatistic \LengthOfRope\JSONLD\Schema\InteractionCounter
     * @return static
     **/
    public function setInteractionStatistic($interactionStatistic): static {
        $this->properties['interactionStatistic'] = $interactionStatistic;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\InteractionCounter
     **/
    public function getInteractionStatistic() {
        return $this->properties['interactionStatistic'];
    }
    /**
     * The official name of the organization, e.g. the registered company name.
     *
     * @param $legalName \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setLegalName($legalName): static {
        $this->properties['legalName'] = $legalName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getLegalName() {
        return $this->properties['legalName'];
    }
    /**
     * A credential awarded to the Person or Organization.
     *
     * @param $hasCredential \LengthOfRope\JSONLD\Schema\EducationalOccupationalCredential
     * @return static
     **/
    public function setHasCredential($hasCredential): static {
        $this->properties['hasCredential'] = $hasCredential;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\EducationalOccupationalCredential
     **/
    public function getHasCredential() {
        return $this->properties['hasCredential'];
    }
    /**
     * MemberProgram offered by an Organization, for example an eCommerce merchant or
     * an airline.
     *
     * @param $hasMemberProgram \LengthOfRope\JSONLD\Schema\MemberProgram
     * @return static
     **/
    public function setHasMemberProgram($hasMemberProgram): static {
        $this->properties['hasMemberProgram'] = $hasMemberProgram;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MemberProgram
     **/
    public function getHasMemberProgram() {
        return $this->properties['hasMemberProgram'];
    }
    /**
     * A contact point for a person or organization.
     *
     * @param $contactPoints \LengthOfRope\JSONLD\Schema\ContactPoint
     * @return static
     **/
    public function setContactPoints($contactPoints): static {
        $this->properties['contactPoints'] = $contactPoints;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ContactPoint
     **/
    public function getContactPoints() {
        return $this->properties['contactPoints'];
    }
    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic
     * that is known about - suggesting possible expertise but not implying it. We do
     * not distinguish skill levels here, or relate this to educational content,
     * events, objectives or [[JobPosting]] descriptions.
     *
     * @param $knowsAbout \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setKnowsAbout($knowsAbout): static {
        $this->properties['knowsAbout'] = $knowsAbout;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getKnowsAbout() {
        return $this->properties['knowsAbout'];
    }
    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document
     * describing the editorial principles of an [[Organization]] (or individual, e.g.
     * a [[Person]] writing a blog) that relate to their activities as a publisher,
     * e.g. ethics or diversity policies. When applied to a [[CreativeWork]] (e.g.
     * [[NewsArticle]]) the principles are those of the party primarily responsible for
     * the creation of the [[CreativeWork]].
     *
     * While such policies are most typically expressed in natural language, sometimes
     * related information (e.g. indicating a [[funder]]) can be expressed using
     * schema.org terminology.
     *
     *
     * @param $publishingPrinciples \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setPublishingPrinciples($publishingPrinciples): static {
        $this->properties['publishingPrinciples'] = $publishingPrinciples;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getPublishingPrinciples() {
        return $this->properties['publishingPrinciples'];
    }
    /**
     * Alumni of an organization.
     *
     * @param $alumni \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setAlumni($alumni): static {
        $this->properties['alumni'] = $alumni;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getAlumni() {
        return $this->properties['alumni'];
    }
    /**
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization, business
     * person, or place.
     *
     * @param $isicV4 \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setIsicV4($isicV4): static {
        $this->properties['isicV4'] = $isicV4;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getIsicV4() {
        return $this->properties['isicV4'];
    }
    /**
     * A person or organization who founded this organization.
     *
     * @param $founder \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setFounder($founder): static {
        $this->properties['founder'] = $founder;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getFounder() {
        return $this->properties['founder'];
    }
    /**
     * The telephone number.
     *
     * @param $telephone \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTelephone($telephone): static {
        $this->properties['telephone'] = $telephone;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTelephone() {
        return $this->properties['telephone'];
    }
    /**
     * Statement on diversity policy by an [[Organization]] e.g. a
     * [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement
     * describing the newsroom’s diversity policy on both staffing and sources,
     * typically providing staffing data.
     *
     * @param $diversityPolicy \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setDiversityPolicy($diversityPolicy): static {
        $this->properties['diversityPolicy'] = $diversityPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getDiversityPolicy() {
        return $this->properties['diversityPolicy'];
    }
    /**
     * A relationship between two organizations where the first includes the second,
     * e.g., as a subsidiary. See also: the more specific 'department' property.
     *
     * @param $subOrganization \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setSubOrganization($subOrganization): static {
        $this->properties['subOrganization'] = $subOrganization;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getSubOrganization() {
        return $this->properties['subOrganization'];
    }
    /**
     * The date that this organization was founded.
     *
     * @param $foundingDate \LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setFoundingDate($foundingDate): static {
        $this->properties['foundingDate'] = $foundingDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getFoundingDate() {
        return $this->properties['foundingDate'];
    }
    /**
     * The Value-added Tax ID of the organization or person.
     *
     * @param $vatID \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setVatID($vatID): static {
        $this->properties['vatID'] = $vatID;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getVatID() {
        return $this->properties['vatID'];
    }
    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known
     * language. We do not distinguish skill levels or reading/writing/speaking/signing
     * here. Use language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47).
     *
     * @param $knowsLanguage \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Language
     * @return static
     **/
    public function setKnowsLanguage($knowsLanguage): static {
        $this->properties['knowsLanguage'] = $knowsLanguage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Language
     **/
    public function getKnowsLanguage() {
        return $this->properties['knowsLanguage'];
    }
    /**
     * An organization identifier as defined in [ISO
     * 6523(-1)](https://en.wikipedia.org/wiki/ISO/IEC_6523). The identifier should be
     * in the `XXXX:YYYYYY:ZZZ` or `XXXX:YYYYYY`format. Where `XXXX` is a 4 digit _ICD_
     * (International Code Designator), `YYYYYY` is an _OID_ (Organization Identifier)
     * with all formatting characters (dots, dashes, spaces) removed with a maximal
     * length of 35 characters, and `ZZZ` is an optional OPI (Organization Part
     * Identifier) with a maximum length of 35 characters. The various components (ICD,
     * OID, OPI) are joined with a colon character (ASCII `0x3a`). Note that many
     * existing organization identifiers defined as attributes like
     * [leiCode](https://schema.org/leiCode) (`0199`), [duns](https://schema.org/duns)
     * (`0060`) or [GLN](https://schema.org/globalLocationNumber) (`0088`) can be
     * expressed using ISO-6523. If possible, ISO-6523 codes should be preferred to
     * populating [vatID](https://schema.org/vatID) or
     * [taxID](https://schema.org/taxID), as ISO identifiers are less ambiguous.
     *
     * @param $iso6523Code \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setIso6523Code($iso6523Code): static {
        $this->properties['iso6523Code'] = $iso6523Code;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getIso6523Code() {
        return $this->properties['iso6523Code'];
    }
    /**
     * An award won by or for this item.
     *
     * @param $award \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAward($award): static {
        $this->properties['award'] = $award;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAward() {
        return $this->properties['award'];
    }
    /**
     * Physical address of the item.
     *
     * @param $address \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\PostalAddress
     * @return static
     **/
    public function setAddress($address): static {
        $this->properties['address'] = $address;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\PostalAddress
     **/
    public function getAddress() {
        return $this->properties['address'];
    }
    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this
     * item. See also [[ownershipFundingInfo]].
     *
     * @param $funding \LengthOfRope\JSONLD\Schema\Grant
     * @return static
     **/
    public function setFunding($funding): static {
        $this->properties['funding'] = $funding;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Grant
     **/
    public function getFunding() {
        return $this->properties['funding'];
    }
    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     *
     * @param $hasOfferCatalog \LengthOfRope\JSONLD\Schema\OfferCatalog
     * @return static
     **/
    public function setHasOfferCatalog($hasOfferCatalog): static {
        $this->properties['hasOfferCatalog'] = $hasOfferCatalog;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\OfferCatalog
     **/
    public function getHasOfferCatalog() {
        return $this->properties['hasOfferCatalog'];
    }
    /**
     * Certification information about a product, organization, service, place, or
     * person.
     *
     * @param $hasCertification \LengthOfRope\JSONLD\Schema\Certification
     * @return static
     **/
    public function setHasCertification($hasCertification): static {
        $this->properties['hasCertification'] = $hasCertification;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Certification
     **/
    public function getHasCertification() {
        return $this->properties['hasCertification'];
    }
    /**
     * The larger organization that this organization is a [[subOrganization]] of, if
     * any.
     *
     * @param $parentOrganization \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setParentOrganization($parentOrganization): static {
        $this->properties['parentOrganization'] = $parentOrganization;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getParentOrganization() {
        return $this->properties['parentOrganization'];
    }
    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding
     * journalistic and publishing practices, or of a [[Restaurant]], a page describing
     * food source policies. In the case of a [[NewsMediaOrganization]], an
     * ethicsPolicy is typically a statement describing the personal, organizational,
     * and corporate standards of behavior expected by the organization.
     *
     * @param $ethicsPolicy \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setEthicsPolicy($ethicsPolicy): static {
        $this->properties['ethicsPolicy'] = $ethicsPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getEthicsPolicy() {
        return $this->properties['ethicsPolicy'];
    }
    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @param $hasPOS \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setHasPOS($hasPOS): static {
        $this->properties['hasPOS'] = $hasPOS;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getHasPOS() {
        return $this->properties['hasPOS'];
    }
    /**
     * A person or organization that supports (sponsors) something through some kind of
     * financial contribution.
     *
     * @param $funder \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setFunder($funder): static {
        $this->properties['funder'] = $funder;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getFunder() {
        return $this->properties['funder'];
    }
    /**
     * The fax number.
     *
     * @param $faxNumber \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setFaxNumber($faxNumber): static {
        $this->properties['faxNumber'] = $faxNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getFaxNumber() {
        return $this->properties['faxNumber'];
    }
    /**
     * Email address.
     *
     * @param $email \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEmail($email): static {
        $this->properties['email'] = $email;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEmail() {
        return $this->properties['email'];
    }
    /**
     * The North American Industry Classification System (NAICS) code for a particular
     * organization or business person.
     *
     * @param $naics \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setNaics($naics): static {
        $this->properties['naics'] = $naics;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getNaics() {
        return $this->properties['naics'];
    }
    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     * @param $event \LengthOfRope\JSONLD\Schema\Event
     * @return static
     **/
    public function setEvent($event): static {
        $this->properties['event'] = $event;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Event
     **/
    public function getEvent() {
        return $this->properties['event'];
    }
    /**
     * Upcoming or past events associated with this place or organization.
     *
     * @param $events \LengthOfRope\JSONLD\Schema\Event
     * @return static
     **/
    public function setEvents($events): static {
        $this->properties['events'] = $events;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Event
     **/
    public function getEvents() {
        return $this->properties['events'];
    }
    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a
     * keywords list are typically delimited by commas, or by repeating the property.
     *
     * @param $keywords \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setKeywords($keywords): static {
        $this->properties['keywords'] = $keywords;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getKeywords() {
        return $this->properties['keywords'];
    }
    /**
     * An Organization (or ProgramMembership) to which this Person or Organization
     * belongs.
     *
     * @param $memberOf \LengthOfRope\JSONLD\Schema\ProgramMembership|\LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\MemberProgramTier
     * @return static
     **/
    public function setMemberOf($memberOf): static {
        $this->properties['memberOf'] = $memberOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ProgramMembership|\LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\MemberProgramTier
     **/
    public function getMemberOf() {
        return $this->properties['memberOf'];
    }
    /**
     * A contact point for a person or organization.
     *
     * @param $contactPoint \LengthOfRope\JSONLD\Schema\ContactPoint
     * @return static
     **/
    public function setContactPoint($contactPoint): static {
        $this->properties['contactPoint'] = $contactPoint;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ContactPoint
     **/
    public function getContactPoint() {
        return $this->properties['contactPoint'];
    }
    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the
     * CIF/NIF in Spain.
     *
     * @param $taxID \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTaxID($taxID): static {
        $this->properties['taxID'] = $taxID;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTaxID() {
        return $this->properties['taxID'];
    }
    /**
     * An associated logo.
     *
     * @param $logo \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\ImageObject
     * @return static
     **/
    public function setLogo($logo): static {
        $this->properties['logo'] = $logo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\ImageObject
     **/
    public function getLogo() {
        return $this->properties['logo'];
    }
    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing
     * a competency that is either claimed by a person, an organization or desired or
     * required to fulfill a role or to work in an occupation.
     *
     * @param $skills \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setSkills($skills): static {
        $this->properties['skills'] = $skills;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getSkills() {
        return $this->properties['skills'];
    }
    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param $areaServed \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     * @return static
     **/
    public function setAreaServed($areaServed): static {
        $this->properties['areaServed'] = $areaServed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     **/
    public function getAreaServed() {
        return $this->properties['areaServed'];
    }
    /**
     * A relationship between an organization and a department of that organization,
     * also described as an organization (allowing different urls, logos, opening
     * hours). For example: a store with a pharmacy, or a bakery with a cafe.
     *
     * @param $department \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setDepartment($department): static {
        $this->properties['department'] = $department;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getDepartment() {
        return $this->properties['department'];
    }
    /**
     * The location of, for example, where an event is happening, where an organization
     * is located, or where an action takes place.
     *
     * @param $location \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\Schema\VirtualLocation|\LengthOfRope\JSONLD\Schema\PostalAddress
     * @return static
     **/
    public function setLocation($location): static {
        $this->properties['location'] = $location;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\Schema\VirtualLocation|\LengthOfRope\JSONLD\Schema\PostalAddress
     **/
    public function getLocation() {
        return $this->properties['location'];
    }
    /**
     * The geographic area where the service is provided.
     *
     * @param $serviceArea \LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\Schema\AdministrativeArea|\LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setServiceArea($serviceArea): static {
        $this->properties['serviceArea'] = $serviceArea;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\Schema\AdministrativeArea|\LengthOfRope\JSONLD\Schema\Place
     **/
    public function getServiceArea() {
        return $this->properties['serviceArea'];
    }
    /**
     * The number of employees in an organization, e.g. business.
     *
     * @param $numberOfEmployees \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setNumberOfEmployees($numberOfEmployees): static {
        $this->properties['numberOfEmployees'] = $numberOfEmployees;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getNumberOfEmployees() {
        return $this->properties['numberOfEmployees'];
    }
    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement
     * about policy on use of unnamed sources and the decision process required.
     *
     * @param $unnamedSourcesPolicy \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setUnnamedSourcesPolicy($unnamedSourcesPolicy): static {
        $this->properties['unnamedSourcesPolicy'] = $unnamedSourcesPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getUnnamedSourcesPolicy() {
        return $this->properties['unnamedSourcesPolicy'];
    }
    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by
     * an organization or business person.
     *
     * @param $brand \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Brand
     * @return static
     **/
    public function setBrand($brand): static {
        $this->properties['brand'] = $brand;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Brand
     **/
    public function getBrand() {
        return $this->properties['brand'];
    }
    /**
     * The date that this organization was dissolved.
     *
     * @param $dissolutionDate \LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setDissolutionDate($dissolutionDate): static {
        $this->properties['dissolutionDate'] = $dissolutionDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getDissolutionDate() {
        return $this->properties['dissolutionDate'];
    }
    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     *
     * @param $hasMerchantReturnPolicy \LengthOfRope\JSONLD\Schema\MerchantReturnPolicy
     * @return static
     **/
    public function setHasMerchantReturnPolicy($hasMerchantReturnPolicy): static {
        $this->properties['hasMerchantReturnPolicy'] = $hasMerchantReturnPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MerchantReturnPolicy
     **/
    public function getHasMerchantReturnPolicy() {
        return $this->properties['hasMerchantReturnPolicy'];
    }
    /**
     * Products owned by the organization or person.
     *
     * @param $owns \LengthOfRope\JSONLD\Schema\OwnershipInfo|\LengthOfRope\JSONLD\Schema\Product
     * @return static
     **/
    public function setOwns($owns): static {
        $this->properties['owns'] = $owns;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\OwnershipInfo|\LengthOfRope\JSONLD\Schema\Product
     **/
    public function getOwns() {
        return $this->properties['owns'];
    }
    /**
     * An organization identifier that uniquely identifies a legal entity as defined in
     * ISO 17442.
     *
     * @param $leiCode \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setLeiCode($leiCode): static {
        $this->properties['leiCode'] = $leiCode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getLeiCode() {
        return $this->properties['leiCode'];
    }
    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing
     * (in news media, the newsroom’s) disclosure and correction policy for errors.
     *
     * @param $correctionsPolicy \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setCorrectionsPolicy($correctionsPolicy): static {
        $this->properties['correctionsPolicy'] = $correctionsPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getCorrectionsPolicy() {
        return $this->properties['correctionsPolicy'];
    }
    /**
     * The payment method(s) that are accepted in general by an organization, or for
     * some specific demand or offer.
     *
     * @param $acceptedPaymentMethod \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\PaymentMethod|\LengthOfRope\JSONLD\Schema\LoanOrCredit
     * @return static
     **/
    public function setAcceptedPaymentMethod($acceptedPaymentMethod): static {
        $this->properties['acceptedPaymentMethod'] = $acceptedPaymentMethod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\PaymentMethod|\LengthOfRope\JSONLD\Schema\LoanOrCredit
     **/
    public function getAcceptedPaymentMethod() {
        return $this->properties['acceptedPaymentMethod'];
    }
    /**
     * nonprofitStatus indicates the legal status of a non-profit organization in its
     * primary place of business.
     *
     * @param $nonprofitStatus \LengthOfRope\JSONLD\Schema\NonprofitType
     * @return static
     **/
    public function setNonprofitStatus($nonprofitStatus): static {
        $this->properties['nonprofitStatus'] = $nonprofitStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\NonprofitType
     **/
    public function getNonprofitStatus() {
        return $this->properties['nonprofitStatus'];
    }
    /**
     * The <a href="https://www.gs1.org/standards/gs1-digital-link">GS1 digital
     * link</a> associated with the object. This URL should conform to the particular
     * requirements of digital links. The link should only contain the Application
     * Identifiers (AIs) that are relevant for the entity being annotated, for instance
     * a [[Product]] or an [[Organization]], and for the correct granularity. In
     * particular, for products:<ul><li>A Digital Link that contains a serial number
     * (AI <code>21</code>) should only be present on instances of
     * [[IndividualProduct]]</li><li>A Digital Link that contains a lot number (AI
     * <code>10</code>) should be annotated as [[SomeProduct]] if only products from
     * that lot are sold, or [[IndividualProduct]] if there is only a specific
     * product.</li><li>A Digital Link that contains a global model number (AI
     * <code>8013</code>)  should be attached to a [[Product]] or a
     * [[ProductModel]].</li></ul> Other item types should be adapted similarly.
     *
     * @param $hasGS1DigitalLink \LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setHasGS1DigitalLink($hasGS1DigitalLink): static {
        $this->properties['hasGS1DigitalLink'] = $hasGS1DigitalLink;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getHasGS1DigitalLink() {
        return $this->properties['hasGS1DigitalLink'];
    }
    /**
     * Review of the item.
     *
     * @param $reviews \LengthOfRope\JSONLD\Schema\Review
     * @return static
     **/
    public function setReviews($reviews): static {
        $this->properties['reviews'] = $reviews;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Review
     **/
    public function getReviews() {
        return $this->properties['reviews'];
    }
    /**
     * People working for this organization.
     *
     * @param $employees \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setEmployees($employees): static {
        $this->properties['employees'] = $employees;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getEmployees() {
        return $this->properties['employees'];
    }
    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
     * referred to as International Location Number or ILN) of the respective
     * organization, person, or place. The GLN is a 13-digit number used to identify
     * parties and physical locations.
     *
     * @param $globalLocationNumber \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setGlobalLocationNumber($globalLocationNumber): static {
        $this->properties['globalLocationNumber'] = $globalLocationNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getGlobalLocationNumber() {
        return $this->properties['globalLocationNumber'];
    }
    /**
     * A review of the item.
     *
     * @param $review \LengthOfRope\JSONLD\Schema\Review
     * @return static
     **/
    public function setReview($review): static {
        $this->properties['review'] = $review;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Review
     **/
    public function getReview() {
        return $this->properties['review'];
    }
    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]),
     * a description of organizational ownership structure; funding and grants. In a
     * news/media setting, this is with particular reference to editorial independence.
     * Note that the [[funder]] is also available and can be used to make basic
     * funder information machine-readable.
     *
     * @param $ownershipFundingInfo \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\AboutPage
     * @return static
     **/
    public function setOwnershipFundingInfo($ownershipFundingInfo): static {
        $this->properties['ownershipFundingInfo'] = $ownershipFundingInfo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\AboutPage
     **/
    public function getOwnershipFundingInfo() {
        return $this->properties['ownershipFundingInfo'];
    }
    /**
     * Awards won by or for this item.
     *
     * @param $awards \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAwards($awards): static {
        $this->properties['awards'] = $awards;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAwards() {
        return $this->properties['awards'];
    }
    /**
     * The place where the Organization was founded.
     *
     * @param $foundingLocation \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setFoundingLocation($foundingLocation): static {
        $this->properties['foundingLocation'] = $foundingLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getFoundingLocation() {
        return $this->properties['foundingLocation'];
    }
    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]),
     * a report on staffing diversity issues. In a news context this might be for
     * example ASNE or RTDNA (US) reports, or self-reported.
     *
     * @param $diversityStaffingReport \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Article
     * @return static
     **/
    public function setDiversityStaffingReport($diversityStaffingReport): static {
        $this->properties['diversityStaffingReport'] = $diversityStaffingReport;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Article
     **/
    public function getDiversityStaffingReport() {
        return $this->properties['diversityStaffingReport'];
    }
    /**
     * A slogan or motto associated with the item.
     *
     * @param $slogan \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setSlogan($slogan): static {
        $this->properties['slogan'] = $slogan;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getSlogan() {
        return $this->properties['slogan'];
    }
    /**
     * A person who founded this organization.
     *
     * @param $founders \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setFounders($founders): static {
        $this->properties['founders'] = $founders;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getFounders() {
        return $this->properties['founders'];
    }
    /**
     * Someone working for this organization.
     *
     * @param $employee \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setEmployee($employee): static {
        $this->properties['employee'] = $employee;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getEmployee() {
        return $this->properties['employee'];
    }
    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members
     * of organizations; ProgramMembership is typically for individuals.
     *
     * @param $member \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setMember($member): static {
        $this->properties['member'] = $member;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getMember() {
        return $this->properties['member'];
    }
    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business
     * person.
     *
     * @param $duns \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setDuns($duns): static {
        $this->properties['duns'] = $duns;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getDuns() {
        return $this->properties['duns'];
    }
    /**
     * A person or organization that supports a thing through a pledge, promise, or
     * financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor
     * of an event.
     *
     * @param $sponsor \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setSponsor($sponsor): static {
        $this->properties['sponsor'] = $sponsor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getSponsor() {
        return $this->properties['sponsor'];
    }
    /**
     * A pointer to products or services offered by the organization or person.
     *
     * @param $makesOffer \LengthOfRope\JSONLD\Schema\Offer
     * @return static
     **/
    public function setMakesOffer($makesOffer): static {
        $this->properties['makesOffer'] = $makesOffer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Offer
     **/
    public function getMakesOffer() {
        return $this->properties['makesOffer'];
    }
    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a
     * statement about public engagement activities (for news media, the newsroom’s),
     * including involving the public - digitally or otherwise -- in coverage
     * decisions, reporting and activities after publication.
     *
     * @param $actionableFeedbackPolicy \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setActionableFeedbackPolicy($actionableFeedbackPolicy): static {
        $this->properties['actionableFeedbackPolicy'] = $actionableFeedbackPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getActionableFeedbackPolicy() {
        return $this->properties['actionableFeedbackPolicy'];
    }
    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @param $aggregateRating \LengthOfRope\JSONLD\Schema\AggregateRating
     * @return static
     **/
    public function setAggregateRating($aggregateRating): static {
        $this->properties['aggregateRating'] = $aggregateRating;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AggregateRating
     **/
    public function getAggregateRating() {
        return $this->properties['aggregateRating'];
    }
    /**
     * A pointer to products or services sought by the organization or person (demand).
     *
     * @param $seeks \LengthOfRope\JSONLD\Schema\Demand
     * @return static
     **/
    public function setSeeks($seeks): static {
        $this->properties['seeks'] = $seeks;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Demand
     **/
    public function getSeeks() {
        return $this->properties['seeks'];
    }
    /**
     * The number of completed interactions for this entity, in a particular role (the
     * 'agent'), in a particular action (indicated in the statistic), and in a
     * particular context (i.e. interactionService).
     *
     * @param $agentInteractionStatistic \LengthOfRope\JSONLD\Schema\InteractionCounter
     * @return static
     **/
    public function setAgentInteractionStatistic($agentInteractionStatistic): static {
        $this->properties['agentInteractionStatistic'] = $agentInteractionStatistic;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\InteractionCounter
     **/
    public function getAgentInteractionStatistic() {
        return $this->properties['agentInteractionStatistic'];
    }
    /**
     * A member of this organization.
     *
     * @param $members \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setMembers($members): static {
        $this->properties['members'] = $members;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getMembers() {
        return $this->properties['members'];
    }
}
