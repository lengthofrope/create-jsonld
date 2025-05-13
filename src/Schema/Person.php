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
 * @see https://schema.org/Person
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Person extends Thing
{
    public static function factory(): Person
    {
        return new Person('https://schema.org/', 'Person');
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
     * An honorific suffix following a Person's name such as M.D./PhD/MSCSW.
     *
     * @param $honorificSuffix \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setHonorificSuffix($honorificSuffix): static {
        $this->properties['honorificSuffix'] = $honorificSuffix;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getHonorificSuffix() {
        return $this->properties['honorificSuffix'];
    }
    /**
     * A person or organization that supports (sponsors) something through some kind of
     * financial contribution.
     *
     * @param $funder \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setFunder($funder): static {
        $this->properties['funder'] = $funder;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getFunder() {
        return $this->properties['funder'];
    }
    /**
     * The Person's occupation. For past professions, use Role for expressing dates.
     *
     * @param $hasOccupation \LengthOfRope\JSONLD\Schema\Occupation
     * @return static
     **/
    public function setHasOccupation($hasOccupation): static {
        $this->properties['hasOccupation'] = $hasOccupation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Occupation
     **/
    public function getHasOccupation() {
        return $this->properties['hasOccupation'];
    }
    /**
     * Gender of something, typically a [[Person]], but possibly also fictional
     * characters, animals, etc. While https://schema.org/Male and
     * https://schema.org/Female may be used, text strings are also acceptable for
     * people who do not identify as a binary gender. The [[gender]] property can also
     * be used in an extended sense to cover e.g. the gender of sports teams. As with
     * the gender of individuals, we do not try to enumerate all possibilities. A
     * mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
     *
     * @param $gender \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\GenderType
     * @return static
     **/
    public function setGender($gender): static {
        $this->properties['gender'] = $gender;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\GenderType
     **/
    public function getGender() {
        return $this->properties['gender'];
    }
    /**
     * An Organization (or ProgramMembership) to which this Person or Organization
     * belongs.
     *
     * @param $memberOf \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\MemberProgramTier|\LengthOfRope\JSONLD\Schema\ProgramMembership
     * @return static
     **/
    public function setMemberOf($memberOf): static {
        $this->properties['memberOf'] = $memberOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\MemberProgramTier|\LengthOfRope\JSONLD\Schema\ProgramMembership
     **/
    public function getMemberOf() {
        return $this->properties['memberOf'];
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
     * Date of birth.
     *
     * @param $birthDate \LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setBirthDate($birthDate): static {
        $this->properties['birthDate'] = $birthDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getBirthDate() {
        return $this->properties['birthDate'];
    }
    /**
     * The weight of the product or person.
     *
     * @param $weight \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Mass
     * @return static
     **/
    public function setWeight($weight): static {
        $this->properties['weight'] = $weight;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Mass
     **/
    public function getWeight() {
        return $this->properties['weight'];
    }
    /**
     * Given name. In the U.S., the first name of a Person.
     *
     * @param $givenName \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setGivenName($givenName): static {
        $this->properties['givenName'] = $givenName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getGivenName() {
        return $this->properties['givenName'];
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
     * A parent of this person.
     *
     * @param $parent \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setParent($parent): static {
        $this->properties['parent'] = $parent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getParent() {
        return $this->properties['parent'];
    }
    /**
     * A sibling of the person.
     *
     * @param $sibling \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setSibling($sibling): static {
        $this->properties['sibling'] = $sibling;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getSibling() {
        return $this->properties['sibling'];
    }
    /**
     * The total financial value of the person as calculated by subtracting the total
     * value of liabilities from the total value of assets.
     *
     * @param $netWorth \LengthOfRope\JSONLD\Schema\PriceSpecification|\LengthOfRope\JSONLD\Schema\MonetaryAmount
     * @return static
     **/
    public function setNetWorth($netWorth): static {
        $this->properties['netWorth'] = $netWorth;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PriceSpecification|\LengthOfRope\JSONLD\Schema\MonetaryAmount
     **/
    public function getNetWorth() {
        return $this->properties['netWorth'];
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
     * The most generic bi-directional social/work relation.
     *
     * @param $knows \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setKnows($knows): static {
        $this->properties['knows'] = $knows;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getKnows() {
        return $this->properties['knows'];
    }
    /**
     * A contact location for a person's place of work.
     *
     * @param $workLocation \LengthOfRope\JSONLD\Schema\ContactPoint|\LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setWorkLocation($workLocation): static {
        $this->properties['workLocation'] = $workLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ContactPoint|\LengthOfRope\JSONLD\Schema\Place
     **/
    public function getWorkLocation() {
        return $this->properties['workLocation'];
    }
    /**
     * Event that this person is a performer or participant in.
     *
     * @param $performerIn \LengthOfRope\JSONLD\Schema\Event
     * @return static
     **/
    public function setPerformerIn($performerIn): static {
        $this->properties['performerIn'] = $performerIn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Event
     **/
    public function getPerformerIn() {
        return $this->properties['performerIn'];
    }
    /**
     * An organization that this person is affiliated with. For example, a
     * school/university, a club, or a team.
     *
     * @param $affiliation \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setAffiliation($affiliation): static {
        $this->properties['affiliation'] = $affiliation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getAffiliation() {
        return $this->properties['affiliation'];
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
     * The person's spouse.
     *
     * @param $spouse \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setSpouse($spouse): static {
        $this->properties['spouse'] = $spouse;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getSpouse() {
        return $this->properties['spouse'];
    }
    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic
     * that is known about - suggesting possible expertise but not implying it. We do
     * not distinguish skill levels here, or relate this to educational content,
     * events, objectives or [[JobPosting]] descriptions.
     *
     * @param $knowsAbout \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setKnowsAbout($knowsAbout): static {
        $this->properties['knowsAbout'] = $knowsAbout;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getKnowsAbout() {
        return $this->properties['knowsAbout'];
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
     * A colleague of the person.
     *
     * @param $colleagues \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setColleagues($colleagues): static {
        $this->properties['colleagues'] = $colleagues;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getColleagues() {
        return $this->properties['colleagues'];
    }
    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting
     * and radio communications to identify people, radio and TV stations, or vehicles.
     *
     * @param $callSign \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCallSign($callSign): static {
        $this->properties['callSign'] = $callSign;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCallSign() {
        return $this->properties['callSign'];
    }
    /**
     * A child of the person.
     *
     * @param $children \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setChildren($children): static {
        $this->properties['children'] = $children;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getChildren() {
        return $this->properties['children'];
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
     * A colleague of the person.
     *
     * @param $colleague \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setColleague($colleague): static {
        $this->properties['colleague'] = $colleague;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getColleague() {
        return $this->properties['colleague'];
    }
    /**
     * A sibling of the person.
     *
     * @param $siblings \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setSiblings($siblings): static {
        $this->properties['siblings'] = $siblings;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getSiblings() {
        return $this->properties['siblings'];
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
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     *
     * @param $honorificPrefix \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setHonorificPrefix($honorificPrefix): static {
        $this->properties['honorificPrefix'] = $honorificPrefix;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getHonorificPrefix() {
        return $this->properties['honorificPrefix'];
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
     * Organizations that the person works for.
     *
     * @param $worksFor \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setWorksFor($worksFor): static {
        $this->properties['worksFor'] = $worksFor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getWorksFor() {
        return $this->properties['worksFor'];
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
     * An organization that the person is an alumni of.
     *
     * @param $alumniOf \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\EducationalOrganization
     * @return static
     **/
    public function setAlumniOf($alumniOf): static {
        $this->properties['alumniOf'] = $alumniOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\EducationalOrganization
     **/
    public function getAlumniOf() {
        return $this->properties['alumniOf'];
    }
    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by
     * an organization or business person.
     *
     * @param $brand \LengthOfRope\JSONLD\Schema\Brand|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setBrand($brand): static {
        $this->properties['brand'] = $brand;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Brand|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getBrand() {
        return $this->properties['brand'];
    }
    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known
     * language. We do not distinguish skill levels or reading/writing/speaking/signing
     * here. Use language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47).
     *
     * @param $knowsLanguage \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setKnowsLanguage($knowsLanguage): static {
        $this->properties['knowsLanguage'] = $knowsLanguage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getKnowsLanguage() {
        return $this->properties['knowsLanguage'];
    }
    /**
     * An additional name for a Person, can be used for a middle name.
     *
     * @param $additionalName \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAdditionalName($additionalName): static {
        $this->properties['additionalName'] = $additionalName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAdditionalName() {
        return $this->properties['additionalName'];
    }
    /**
     * Family name. In the U.S., the last name of a Person.
     *
     * @param $familyName \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setFamilyName($familyName): static {
        $this->properties['familyName'] = $familyName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getFamilyName() {
        return $this->properties['familyName'];
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
     * A parents of the person.
     *
     * @param $parents \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setParents($parents): static {
        $this->properties['parents'] = $parents;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getParents() {
        return $this->properties['parents'];
    }
    /**
     * The most generic uni-directional social relation.
     *
     * @param $follows \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setFollows($follows): static {
        $this->properties['follows'] = $follows;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getFollows() {
        return $this->properties['follows'];
    }
    /**
     * The most generic familial relation.
     *
     * @param $relatedTo \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setRelatedTo($relatedTo): static {
        $this->properties['relatedTo'] = $relatedTo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getRelatedTo() {
        return $this->properties['relatedTo'];
    }
    /**
     * The job title of the person (for example, Financial Manager).
     *
     * @param $jobTitle \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setJobTitle($jobTitle): static {
        $this->properties['jobTitle'] = $jobTitle;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getJobTitle() {
        return $this->properties['jobTitle'];
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
     * Nationality of the person.
     *
     * @param $nationality \LengthOfRope\JSONLD\Schema\Country
     * @return static
     **/
    public function setNationality($nationality): static {
        $this->properties['nationality'] = $nationality;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Country
     **/
    public function getNationality() {
        return $this->properties['nationality'];
    }
    /**
     * The place where the person died.
     *
     * @param $deathPlace \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setDeathPlace($deathPlace): static {
        $this->properties['deathPlace'] = $deathPlace;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getDeathPlace() {
        return $this->properties['deathPlace'];
    }
    /**
     * A contact location for a person's residence.
     *
     * @param $homeLocation \LengthOfRope\JSONLD\Schema\ContactPoint|\LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setHomeLocation($homeLocation): static {
        $this->properties['homeLocation'] = $homeLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ContactPoint|\LengthOfRope\JSONLD\Schema\Place
     **/
    public function getHomeLocation() {
        return $this->properties['homeLocation'];
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
     * Date of death.
     *
     * @param $deathDate \LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setDeathDate($deathDate): static {
        $this->properties['deathDate'] = $deathDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getDeathDate() {
        return $this->properties['deathDate'];
    }
    /**
     * The place where the person was born.
     *
     * @param $birthPlace \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setBirthPlace($birthPlace): static {
        $this->properties['birthPlace'] = $birthPlace;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getBirthPlace() {
        return $this->properties['birthPlace'];
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
     * The height of the item.
     *
     * @param $height \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Distance
     * @return static
     **/
    public function setHeight($height): static {
        $this->properties['height'] = $height;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Distance
     **/
    public function getHeight() {
        return $this->properties['height'];
    }
}
