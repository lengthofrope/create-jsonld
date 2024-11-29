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
        return new PersonSchema('https://schema.org/', 'Person');
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
     * A colleague of the person.
     *
     * @param $colleague |
     **/
    public function setColleague($colleague) {
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
     * The total financial value of the person as calculated by subtracting assets from liabilities.
     *
     * @param $netWorth |
     **/
    public function setNetWorth($netWorth) {
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
     * A contact location for a person's residence.
     *
     * @param $homeLocation |
     **/
    public function setHomeLocation($homeLocation) {
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
     * Family name. In the U.S., the last name of a Person.
     *
     * @param $familyName 
     **/
    public function setFamilyName($familyName) {
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
     **/
    public function setHonorificPrefix($honorificPrefix) {
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
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     *
     * @param $callSign 
     **/
    public function setCallSign($callSign) {
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
     **/
    public function setBirthPlace($birthPlace) {
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
     **/
    public function setFollows($follows) {
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
     * Given name. In the U.S., the first name of a Person.
     *
     * @param $givenName 
     **/
    public function setGivenName($givenName) {
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
     * A parents of the person.
     *
     * @param $parents 
     **/
    public function setParents($parents) {
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
     * The place where the person died.
     *
     * @param $deathPlace 
     **/
    public function setDeathPlace($deathPlace) {
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
     * A child of the person.
     *
     * @param $children 
     **/
    public function setChildren($children) {
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
     * A parent of this person.
     *
     * @param $parent 
     **/
    public function setParent($parent) {
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
     **/
    public function setKnows($knows) {
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
     * Date of birth.
     *
     * @param $birthDate 
     **/
    public function setBirthDate($birthDate) {
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
     **/
    public function setAlumniOf($alumniOf) {
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
     **/
    public function setAffiliation($affiliation) {
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
     **/
    public function setRelatedTo($relatedTo) {
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
     **/
    public function setJobTitle($jobTitle) {
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
     **/
    public function setHonorificSuffix($honorificSuffix) {
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
     **/
    public function setSpouse($spouse) {
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
     **/
    public function setWorkLocation($workLocation) {
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
     * A colleague of the person.
     *
     * @param $colleagues 
     **/
    public function setColleagues($colleagues) {
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
     **/
    public function setNationality($nationality) {
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
     * Event that this person is a performer or participant in.
     *
     * @param $performerIn 
     **/
    public function setPerformerIn($performerIn) {
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
     **/
    public function setDeathDate($deathDate) {
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
     **/
    public function setWorksFor($worksFor) {
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
     **/
    public function setAdditionalName($additionalName) {
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
     **/
    public function setSibling($sibling) {
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
     **/
    public function setSiblings($siblings) {
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
     * The height of the item.
     *
     * @param $height |
     **/
    public function setHeight($height) {
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
     **/
    public function setGender($gender) {
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
     * The weight of the product or person.
     *
     * @param $weight 
     **/
    public function setWeight($weight) {
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
     **/
    public function setHasOccupation($hasOccupation) {
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


}
