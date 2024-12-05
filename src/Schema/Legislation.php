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
 * A legal document such as an act, decree, bill, etc. (enforceable or not) or a
 * component of a legal act (like an article).
 *
 * @see https://schema.org/Legislation
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Legislation extends CreativeWork
{
    public static function factory(): Legislation
    {
        return new Legislation('https://schema.org/', 'Legislation');
    }

    /**
     * Another legislation that this legislation changes. This encompasses the notions
     * of amendment, replacement, correction, repeal, or other types of change. This
     * may be a direct change (textual or non-textual amendment) or a consequential or
     * indirect change. The property is to be used to express the existence of a change
     * relationship between two acts rather than the existence of a consolidated
     * version of the text that shows the result of the change. For consolidation
     * relationships, use the <a
     * href="/legislationConsolidates">legislationConsolidates</a> property.
     *
     * @param $legislationChanges \LengthOfRope\JSONLD\Schema\Legislation
     * @return static
     **/
    public function setLegislationChanges($legislationChanges): static {
        $this->properties['legislationChanges'] = $legislationChanges;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Legislation
     **/
    public function getLegislationChanges() {
        return $this->properties['legislationChanges'];
    }
    /**
     * Whether the legislation is currently in force, not in force, or partially in
     * force.
     *
     * @param $legislationLegalForce \LengthOfRope\JSONLD\Schema\LegalForceStatus
     * @return static
     **/
    public function setLegislationLegalForce($legislationLegalForce): static {
        $this->properties['legislationLegalForce'] = $legislationLegalForce;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\LegalForceStatus
     **/
    public function getLegislationLegalForce() {
        return $this->properties['legislationLegalForce'];
    }
    /**
     * The jurisdiction from which the legislation originates.
     *
     * @param $legislationJurisdiction \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     * @return static
     **/
    public function setLegislationJurisdiction($legislationJurisdiction): static {
        $this->properties['legislationJurisdiction'] = $legislationJurisdiction;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     **/
    public function getLegislationJurisdiction() {
        return $this->properties['legislationJurisdiction'];
    }
    /**
     * Indicates that this legislation (or part of a legislation) somehow transfers
     * another legislation in a different legislative context. This is an informative
     * link, and it has no legal value. For legally-binding links of transposition, use
     * the <a href="/legislationTransposes">legislationTransposes</a> property. For
     * example an informative consolidated law of a European Union's member state
     * "applies" the consolidated version of the European Directive implemented in it.
     *
     * @param $legislationApplies \LengthOfRope\JSONLD\Schema\Legislation
     * @return static
     **/
    public function setLegislationApplies($legislationApplies): static {
        $this->properties['legislationApplies'] = $legislationApplies;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Legislation
     **/
    public function getLegislationApplies() {
        return $this->properties['legislationApplies'];
    }
    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some
     * government service is based.
     *
     * @param $jurisdiction \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     * @return static
     **/
    public function setJurisdiction($jurisdiction): static {
        $this->properties['jurisdiction'] = $jurisdiction;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     **/
    public function getJurisdiction() {
        return $this->properties['jurisdiction'];
    }
    /**
     * Indicates another legislation taken into account in this consolidated
     * legislation (which is usually the product of an editorial process that revises
     * the legislation). This property should be used multiple times to refer to both
     * the original version or the previous consolidated version, and to the
     * legislations making the change.
     *
     * @param $legislationConsolidates \LengthOfRope\JSONLD\Schema\Legislation
     * @return static
     **/
    public function setLegislationConsolidates($legislationConsolidates): static {
        $this->properties['legislationConsolidates'] = $legislationConsolidates;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Legislation
     **/
    public function getLegislationConsolidates() {
        return $this->properties['legislationConsolidates'];
    }
    /**
     * The date of adoption or signature of the legislation. This is the date at which
     * the text is officially aknowledged to be a legislation, even though it might not
     * even be published or in force.
     *
     * @param $legislationDate \LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setLegislationDate($legislationDate): static {
        $this->properties['legislationDate'] = $legislationDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date
     **/
    public function getLegislationDate() {
        return $this->properties['legislationDate'];
    }
    /**
     * The person or organization that originally passed or made the law: typically
     * parliament (for primary legislation) or government (for secondary legislation).
     * This indicates the "legal author" of the law, as opposed to its physical author.
     *
     * @param $legislationPassedBy \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setLegislationPassedBy($legislationPassedBy): static {
        $this->properties['legislationPassedBy'] = $legislationPassedBy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getLegislationPassedBy() {
        return $this->properties['legislationPassedBy'];
    }
    /**
     * An identifier for the legislation. This can be either a string-based identifier,
     * like the CELEX at EU level or the NOR in France, or a web-based, URL/URI
     * identifier, like an ELI (European Legislation Identifier) or an URN-Lex.
     *
     * @param $legislationIdentifier \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL
     * @return static
     **/
    public function setLegislationIdentifier($legislationIdentifier): static {
        $this->properties['legislationIdentifier'] = $legislationIdentifier;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL
     **/
    public function getLegislationIdentifier() {
        return $this->properties['legislationIdentifier'];
    }
    /**
     * Indicates that this legislation (or part of legislation) fulfills the objectives
     * set by another legislation, by passing appropriate implementation measures.
     * Typically, some legislations of European Union's member states or regions
     * transpose European Directives. This indicates a legally binding link between the
     * 2 legislations.
     *
     * @param $legislationTransposes \LengthOfRope\JSONLD\Schema\Legislation
     * @return static
     **/
    public function setLegislationTransposes($legislationTransposes): static {
        $this->properties['legislationTransposes'] = $legislationTransposes;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Legislation
     **/
    public function getLegislationTransposes() {
        return $this->properties['legislationTransposes'];
    }
    /**
     * The point-in-time at which the provided description of the legislation is valid
     * (e.g.: when looking at the law on the 2016-04-07 (= dateVersion), I get the
     * consolidation of 2015-04-12 of the "National Insurance Contributions Act 2015")
     *
     * @param $legislationDateVersion \LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setLegislationDateVersion($legislationDateVersion): static {
        $this->properties['legislationDateVersion'] = $legislationDateVersion;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date
     **/
    public function getLegislationDateVersion() {
        return $this->properties['legislationDateVersion'];
    }
    /**
     * The type of the legislation. Examples of values are "law", "act", "directive",
     * "decree", "regulation", "statutory instrument", "loi organique", "règlement
     * grand-ducal", etc., depending on the country.
     *
     * @param $legislationType \LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setLegislationType($legislationType): static {
        $this->properties['legislationType'] = $legislationType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getLegislationType() {
        return $this->properties['legislationType'];
    }
    /**
     * An individual or organization that has some kind of responsibility for the
     * legislation. Typically the ministry who is/was in charge of elaborating the
     * legislation, or the adressee for potential questions about the legislation once
     * it is published.
     *
     * @param $legislationResponsible \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setLegislationResponsible($legislationResponsible): static {
        $this->properties['legislationResponsible'] = $legislationResponsible;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getLegislationResponsible() {
        return $this->properties['legislationResponsible'];
    }
}
