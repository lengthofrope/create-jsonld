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
     * The person or organization that countersigned the legislation. Depending on the
     * legal context, a countersignature can indicate that the signed authority
     * undertakes to assume responsibility for texts emanating from a person who is
     * inviolable and irresponsible, (for example a King, Grand Duc or President), or
     * that the authority is in charge of the implementation of the text.
     *
     * @param $legislationCountersignedBy \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setLegislationCountersignedBy($legislationCountersignedBy): static {
        $this->properties['legislationCountersignedBy'] = $legislationCountersignedBy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getLegislationCountersignedBy() {
        return $this->properties['legislationCountersignedBy'];
    }
    /**
     * The type of the legislation. Examples of values are "law", "act", "directive",
     * "decree", "regulation", "statutory instrument", "loi organique", "règlement
     * grand-ducal", etc., depending on the country.
     *
     * @param $legislationType \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\CategoryCode
     * @return static
     **/
    public function setLegislationType($legislationType): static {
        $this->properties['legislationType'] = $legislationType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\CategoryCode
     **/
    public function getLegislationType() {
        return $this->properties['legislationType'];
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
     * Another legislation that this legislation repeals (cancels, abrogates).
     *
     * @param $legislationRepeals \LengthOfRope\JSONLD\Schema\Legislation
     * @return static
     **/
    public function setLegislationRepeals($legislationRepeals): static {
        $this->properties['legislationRepeals'] = $legislationRepeals;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Legislation
     **/
    public function getLegislationRepeals() {
        return $this->properties['legislationRepeals'];
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
     * An identifier for the legislation. This can be either a string-based identifier,
     * like the CELEX at EU level or the NOR in France, or a web-based, URL/URI
     * identifier, like an ELI (European Legislation Identifier) or an URN-Lex.
     *
     * @param $legislationIdentifier \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setLegislationIdentifier($legislationIdentifier): static {
        $this->properties['legislationIdentifier'] = $legislationIdentifier;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getLegislationIdentifier() {
        return $this->properties['legislationIdentifier'];
    }
    /**
     * The date of adoption or signature of the legislation. This is the date at which
     * the text is officially aknowledged to be a legislation, even though it might not
     * even be published or in force.
     *
     * @param $legislationDate \LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setLegislationDate($legislationDate): static {
        $this->properties['legislationDate'] = $legislationDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getLegislationDate() {
        return $this->properties['legislationDate'];
    }
    /**
     * Another legislation in which this one introduces textual changes, like
     * correction of spelling mistakes, with no legal impact (for modifications that
     * have legal impact, use <a href="/legislationAmends">legislationAmends</a>).
     *
     * @param $legislationCorrects \LengthOfRope\JSONLD\Schema\Legislation
     * @return static
     **/
    public function setLegislationCorrects($legislationCorrects): static {
        $this->properties['legislationCorrects'] = $legislationCorrects;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Legislation
     **/
    public function getLegislationCorrects() {
        return $this->properties['legislationCorrects'];
    }
    /**
     * The date at which the Legislation becomes applicable. This can sometimes be
     * distinct from the date of entry into force : a text may come in force today, and
     * state it will become applicable in 3 months.
     *
     * @param $legislationDateOfApplicability \LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setLegislationDateOfApplicability($legislationDateOfApplicability): static {
        $this->properties['legislationDateOfApplicability'] = $legislationDateOfApplicability;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getLegislationDateOfApplicability() {
        return $this->properties['legislationDateOfApplicability'];
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
     * Another legislation that this legislation amends, introducing legal changes.
     *
     * @param $legislationAmends \LengthOfRope\JSONLD\Schema\Legislation
     * @return static
     **/
    public function setLegislationAmends($legislationAmends): static {
        $this->properties['legislationAmends'] = $legislationAmends;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Legislation
     **/
    public function getLegislationAmends() {
        return $this->properties['legislationAmends'];
    }
    /**
     * The jurisdiction from which the legislation originates.
     *
     * @param $legislationJurisdiction \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     * @return static
     **/
    public function setLegislationJurisdiction($legislationJurisdiction): static {
        $this->properties['legislationJurisdiction'] = $legislationJurisdiction;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     **/
    public function getLegislationJurisdiction() {
        return $this->properties['legislationJurisdiction'];
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
     * The point-in-time at which the provided description of the legislation is valid
     * (e.g.: when looking at the law on the 2016-04-07 (= dateVersion), I get the
     * consolidation of 2015-04-12 of the "National Insurance Contributions Act 2015")
     *
     * @param $legislationDateVersion \LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setLegislationDateVersion($legislationDateVersion): static {
        $this->properties['legislationDateVersion'] = $legislationDateVersion;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getLegislationDateVersion() {
        return $this->properties['legislationDateVersion'];
    }
    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some
     * government service is based.
     *
     * @param $jurisdiction \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     * @return static
     **/
    public function setJurisdiction($jurisdiction): static {
        $this->properties['jurisdiction'] = $jurisdiction;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     **/
    public function getJurisdiction() {
        return $this->properties['jurisdiction'];
    }
    /**
     * Another legislation that this one sets into force.
     *
     * @param $legislationCommences \LengthOfRope\JSONLD\Schema\Legislation
     * @return static
     **/
    public function setLegislationCommences($legislationCommences): static {
        $this->properties['legislationCommences'] = $legislationCommences;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Legislation
     **/
    public function getLegislationCommences() {
        return $this->properties['legislationCommences'];
    }
    /**
     * Indicates that this Legislation ensures the implementation of another
     * Legislation, for example by modifying national legislations so that they do not
     * contradict to an EU regulation or decision. This implies a legal meaning.
     * Transpositions of EU Directive should be captured with <a
     * href="/legislationTransposes">legislationTransposes</a>.
     *
     * @param $legislationEnsuresImplementationOf \LengthOfRope\JSONLD\Schema\Legislation
     * @return static
     **/
    public function setLegislationEnsuresImplementationOf($legislationEnsuresImplementationOf): static {
        $this->properties['legislationEnsuresImplementationOf'] = $legislationEnsuresImplementationOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Legislation
     **/
    public function getLegislationEnsuresImplementationOf() {
        return $this->properties['legislationEnsuresImplementationOf'];
    }
}
