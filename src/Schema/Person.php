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
 * A person (alive, dead, undead, or fictional).
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Person extends Thing
{
    public static function factory(): Person
    {
        return new Person('https://schema.org/', 'Person');
    }

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
     *
     * @param $interactionStatistic 
     * @return static
     **/
    public function setInteractionStatistic($interactionStatistic): static {
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
     * A credential awarded to the Person or Organization.
     *
     * @param $hasCredential 
     * @return static
     **/
    public function setHasCredential($hasCredential): static {
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
     * A colleague of the person.
     *
     * @param $colleague |
     * @return static
     **/
    public function setColleague($colleague): static {
        $this->properties['colleague'] = $colleague;

        return $this;
    }

    /**
     * @return |
     **/
    public function getColleague() {
        return $this->properties['colleague'];
    }

    /**
     * A contact point for a person or organization.
     *
     * @param $contactPoints 
     * @return static
     **/
    public function setContactPoints($contactPoints): static {
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
     * The total financial value of the person as calculated by subtracting assets from liabilities.
     *
     * @param $netWorth |
     * @return static
     **/
    public function setNetWorth($netWorth): static {
        $this->properties['netWorth'] = $netWorth;

        return $this;
    }

    /**
     * @return |
     **/
    public function getNetWorth() {
        return $this->properties['netWorth'];
    }

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]] descriptions.
     *
     * @param $knowsAbout ||
     * @return static
     **/
    public function setKnowsAbout($knowsAbout): static {
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
     * @return static
     **/
    public function setPublishingPrinciples($publishingPrinciples): static {
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
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     *
     * @param $isicV4 
     * @return static
     **/
    public function setIsicV4($isicV4): static {
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
     * The telephone number.
     *
     * @param $telephone 
     * @return static
     **/
    public function setTelephone($telephone): static {
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
     * A contact location for a person's residence.
     *
     * @param $homeLocation |
     * @return static
     **/
    public function setHomeLocation($homeLocation): static {
        $this->properties['homeLocation'] = $homeLocation;

        return $this;
    }

    /**
     * @return |
     **/
    public function getHomeLocation() {
        return $this->properties['homeLocation'];
    }

    /**
     * The Value-added Tax ID of the organization or person.
     *
     * @param $vatID 
     * @return static
     **/
    public function setVatID($vatID): static {
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
     * @return static
     **/
    public function setKnowsLanguage($knowsLanguage): static {
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
     * Family name. In the U.S., the last name of a Person.
     *
     * @param $familyName 
     * @return static
     **/
    public function setFamilyName($familyName): static {
        $this->properties['familyName'] = $familyName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFamilyName() {
        return $this->properties['familyName'];
    }

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     *
     * @param $honorificPrefix 
     * @return static
     **/
    public function setHonorificPrefix($honorificPrefix): static {
        $this->properties['honorificPrefix'] = $honorificPrefix;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHonorificPrefix() {
        return $this->properties['honorificPrefix'];
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
     * Physical address of the item.
     *
     * @param $address |
     * @return static
     **/
    public function setAddress($address): static {
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
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     *
     * @param $callSign 
     * @return static
     **/
    public function setCallSign($callSign): static {
        $this->properties['callSign'] = $callSign;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCallSign() {
        return $this->properties['callSign'];
    }

    /**
     * The place where the person was born.
     *
     * @param $birthPlace 
     * @return static
     **/
    public function setBirthPlace($birthPlace): static {
        $this->properties['birthPlace'] = $birthPlace;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBirthPlace() {
        return $this->properties['birthPlace'];
    }

    /**
     * The most generic uni-directional social relation.
     *
     * @param $follows 
     * @return static
     **/
    public function setFollows($follows): static {
        $this->properties['follows'] = $follows;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFollows() {
        return $this->properties['follows'];
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     *
     * @param $funding 
     * @return static
     **/
    public function setFunding($funding): static {
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
     * Given name. In the U.S., the first name of a Person.
     *
     * @param $givenName 
     * @return static
     **/
    public function setGivenName($givenName): static {
        $this->properties['givenName'] = $givenName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGivenName() {
        return $this->properties['givenName'];
    }

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @param $hasPOS 
     * @return static
     **/
    public function setHasPOS($hasPOS): static {
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
     * @return static
     **/
    public function setFunder($funder): static {
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
     * A parents of the person.
     *
     * @param $parents 
     * @return static
     **/
    public function setParents($parents): static {
        $this->properties['parents'] = $parents;

        return $this;
    }

    /**
     * @return 
     **/
    public function getParents() {
        return $this->properties['parents'];
    }

    /**
     * The fax number.
     *
     * @param $faxNumber 
     * @return static
     **/
    public function setFaxNumber($faxNumber): static {
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
     * The place where the person died.
     *
     * @param $deathPlace 
     * @return static
     **/
    public function setDeathPlace($deathPlace): static {
        $this->properties['deathPlace'] = $deathPlace;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDeathPlace() {
        return $this->properties['deathPlace'];
    }

    /**
     * Email address.
     *
     * @param $email 
     * @return static
     **/
    public function setEmail($email): static {
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
     * @return static
     **/
    public function setNaics($naics): static {
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
     * A child of the person.
     *
     * @param $children 
     * @return static
     **/
    public function setChildren($children): static {
        $this->properties['children'] = $children;

        return $this;
    }

    /**
     * @return 
     **/
    public function getChildren() {
        return $this->properties['children'];
    }

    /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     *
     * @param $memberOf ||
     * @return static
     **/
    public function setMemberOf($memberOf): static {
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
     * @return static
     **/
    public function setContactPoint($contactPoint): static {
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
     * @return static
     **/
    public function setTaxID($taxID): static {
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
     * A parent of this person.
     *
     * @param $parent 
     * @return static
     **/
    public function setParent($parent): static {
        $this->properties['parent'] = $parent;

        return $this;
    }

    /**
     * @return 
     **/
    public function getParent() {
        return $this->properties['parent'];
    }

    /**
     * The most generic bi-directional social/work relation.
     *
     * @param $knows 
     * @return static
     **/
    public function setKnows($knows): static {
        $this->properties['knows'] = $knows;

        return $this;
    }

    /**
     * @return 
     **/
    public function getKnows() {
        return $this->properties['knows'];
    }

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is either claimed by a person, an organization or desired or required to fulfill a role or to work in an occupation.
     *
     * @param $skills |
     * @return static
     **/
    public function setSkills($skills): static {
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
     * Date of birth.
     *
     * @param $birthDate 
     * @return static
     **/
    public function setBirthDate($birthDate): static {
        $this->properties['birthDate'] = $birthDate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBirthDate() {
        return $this->properties['birthDate'];
    }

    /**
     * An organization that the person is an alumni of.
     *
     * @param $alumniOf |
     * @return static
     **/
    public function setAlumniOf($alumniOf): static {
        $this->properties['alumniOf'] = $alumniOf;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAlumniOf() {
        return $this->properties['alumniOf'];
    }

    /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
     *
     * @param $affiliation 
     * @return static
     **/
    public function setAffiliation($affiliation): static {
        $this->properties['affiliation'] = $affiliation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAffiliation() {
        return $this->properties['affiliation'];
    }

    /**
     * The most generic familial relation.
     *
     * @param $relatedTo 
     * @return static
     **/
    public function setRelatedTo($relatedTo): static {
        $this->properties['relatedTo'] = $relatedTo;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRelatedTo() {
        return $this->properties['relatedTo'];
    }

    /**
     * The job title of the person (for example, Financial Manager).
     *
     * @param $jobTitle |
     * @return static
     **/
    public function setJobTitle($jobTitle): static {
        $this->properties['jobTitle'] = $jobTitle;

        return $this;
    }

    /**
     * @return |
     **/
    public function getJobTitle() {
        return $this->properties['jobTitle'];
    }

    /**
     * An honorific suffix following a Person's name such as M.D./PhD/MSCSW.
     *
     * @param $honorificSuffix 
     * @return static
     **/
    public function setHonorificSuffix($honorificSuffix): static {
        $this->properties['honorificSuffix'] = $honorificSuffix;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHonorificSuffix() {
        return $this->properties['honorificSuffix'];
    }

    /**
     * The person's spouse.
     *
     * @param $spouse 
     * @return static
     **/
    public function setSpouse($spouse): static {
        $this->properties['spouse'] = $spouse;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSpouse() {
        return $this->properties['spouse'];
    }

    /**
     * A contact location for a person's place of work.
     *
     * @param $workLocation |
     * @return static
     **/
    public function setWorkLocation($workLocation): static {
        $this->properties['workLocation'] = $workLocation;

        return $this;
    }

    /**
     * @return |
     **/
    public function getWorkLocation() {
        return $this->properties['workLocation'];
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
     * A colleague of the person.
     *
     * @param $colleagues 
     * @return static
     **/
    public function setColleagues($colleagues): static {
        $this->properties['colleagues'] = $colleagues;

        return $this;
    }

    /**
     * @return 
     **/
    public function getColleagues() {
        return $this->properties['colleagues'];
    }

    /**
     * Nationality of the person.
     *
     * @param $nationality 
     * @return static
     **/
    public function setNationality($nationality): static {
        $this->properties['nationality'] = $nationality;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNationality() {
        return $this->properties['nationality'];
    }

    /**
     * Products owned by the organization or person.
     *
     * @param $owns |
     * @return static
     **/
    public function setOwns($owns): static {
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
     * Event that this person is a performer or participant in.
     *
     * @param $performerIn 
     * @return static
     **/
    public function setPerformerIn($performerIn): static {
        $this->properties['performerIn'] = $performerIn;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPerformerIn() {
        return $this->properties['performerIn'];
    }

    /**
     * Date of death.
     *
     * @param $deathDate 
     * @return static
     **/
    public function setDeathDate($deathDate): static {
        $this->properties['deathDate'] = $deathDate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDeathDate() {
        return $this->properties['deathDate'];
    }

    /**
     * Organizations that the person works for.
     *
     * @param $worksFor 
     * @return static
     **/
    public function setWorksFor($worksFor): static {
        $this->properties['worksFor'] = $worksFor;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWorksFor() {
        return $this->properties['worksFor'];
    }

    /**
     * An additional name for a Person, can be used for a middle name.
     *
     * @param $additionalName 
     * @return static
     **/
    public function setAdditionalName($additionalName): static {
        $this->properties['additionalName'] = $additionalName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAdditionalName() {
        return $this->properties['additionalName'];
    }

    /**
     * A sibling of the person.
     *
     * @param $sibling 
     * @return static
     **/
    public function setSibling($sibling): static {
        $this->properties['sibling'] = $sibling;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSibling() {
        return $this->properties['sibling'];
    }

    /**
     * A sibling of the person.
     *
     * @param $siblings 
     * @return static
     **/
    public function setSiblings($siblings): static {
        $this->properties['siblings'] = $siblings;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSiblings() {
        return $this->properties['siblings'];
    }

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     *
     * @param $globalLocationNumber 
     * @return static
     **/
    public function setGlobalLocationNumber($globalLocationNumber): static {
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
     * The height of the item.
     *
     * @param $height |
     * @return static
     **/
    public function setHeight($height): static {
        $this->properties['height'] = $height;

        return $this;
    }

    /**
     * @return |
     **/
    public function getHeight() {
        return $this->properties['height'];
    }

    /**
     * Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender. The [[gender]] property can also be used in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
     *
     * @param $gender |
     * @return static
     **/
    public function setGender($gender): static {
        $this->properties['gender'] = $gender;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGender() {
        return $this->properties['gender'];
    }

    /**
     * Awards won by or for this item.
     *
     * @param $awards 
     * @return static
     **/
    public function setAwards($awards): static {
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
     * The weight of the product or person.
     *
     * @param $weight 
     * @return static
     **/
    public function setWeight($weight): static {
        $this->properties['weight'] = $weight;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWeight() {
        return $this->properties['weight'];
    }

    /**
     * The Person's occupation. For past professions, use Role for expressing dates.
     *
     * @param $hasOccupation 
     * @return static
     **/
    public function setHasOccupation($hasOccupation): static {
        $this->properties['hasOccupation'] = $hasOccupation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasOccupation() {
        return $this->properties['hasOccupation'];
    }

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     *
     * @param $duns 
     * @return static
     **/
    public function setDuns($duns): static {
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
     * @return static
     **/
    public function setSponsor($sponsor): static {
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
     * @return static
     **/
    public function setMakesOffer($makesOffer): static {
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
     * A pointer to products or services sought by the organization or person (demand).
     *
     * @param $seeks 
     * @return static
     **/
    public function setSeeks($seeks): static {
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
     * @return static
     **/
    public function setAgentInteractionStatistic($agentInteractionStatistic): static {
        $this->properties['agentInteractionStatistic'] = $agentInteractionStatistic;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAgentInteractionStatistic() {
        return $this->properties['agentInteractionStatistic'];
    }


}
