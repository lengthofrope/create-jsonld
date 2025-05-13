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
 * Instances of the class [[Observation]] are used to specify observations about an
 * entity at a particular time. The principal properties of an [[Observation]] are
 * [[observationAbout]], [[measuredProperty]], [[statType]], [[value] and
 * [[observationDate]]  and [[measuredProperty]]. Some but not all Observations
 * represent a [[QuantitativeValue]]. Quantitative observations can be about a
 * [[StatisticalVariable]], which is an abstract specification about which we can
 * make observations that are grounded at a particular location and time.
 *
 * * Observations can also encode a subset of simple RDF-like statements (its
 * observationAbout, a StatisticalVariable, defining the measuredPoperty; its
 * observationAbout property indicating the entity the statement is about, and
 * [[value]] )
 *
 * * In the context of a quantitative knowledge graph, typical properties could
 * include [[measuredProperty]], [[observationAbout]], [[observationDate]],
 * [[value]], [[unitCode]], [[unitText]], [[measurementMethod]].
 * *
 *
 * @see https://schema.org/Observation
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Observation extends Intangible
{
    public static function factory(): Observation
    {
        return new Observation('https://schema.org/', 'Observation');
    }

    /**
     * Identifies the denominator variable when an observation represents a ratio or
     * percentage.
     *
     * @param $measurementDenominator \LengthOfRope\JSONLD\Schema\StatisticalVariable
     * @return static
     **/
    public function setMeasurementDenominator($measurementDenominator): static {
        $this->properties['measurementDenominator'] = $measurementDenominator;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\StatisticalVariable
     **/
    public function getMeasurementDenominator() {
        return $this->properties['measurementDenominator'];
    }
    /**
     * The observationDate of an [[Observation]].
     *
     * @param $observationDate \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setObservationDate($observationDate): static {
        $this->properties['observationDate'] = $observationDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getObservationDate() {
        return $this->properties['observationDate'];
    }
    /**
     * The length of time an Observation took place over. The format follows
     * `P[0-9]*[Y|M|D|h|m|s]`. For example, P1Y is Period 1 Year, P3M is Period 3
     * Months, P3h is Period 3 hours.
     *
     * @param $observationPeriod \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setObservationPeriod($observationPeriod): static {
        $this->properties['observationPeriod'] = $observationPeriod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getObservationPeriod() {
        return $this->properties['observationPeriod'];
    }
    /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying
     * specific methods, in particular via [[MeasurementMethodEnum]].
     *
     * @param $measurementMethod \LengthOfRope\JSONLD\Schema\MeasurementMethodEnum|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setMeasurementMethod($measurementMethod): static {
        $this->properties['measurementMethod'] = $measurementMethod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MeasurementMethodEnum|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getMeasurementMethod() {
        return $this->properties['measurementMethod'];
    }
    /**
     * The [[observationAbout]] property identifies an entity, often a [[Place]],
     * associated with an [[Observation]].
     *
     * @param $observationAbout \LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setObservationAbout($observationAbout): static {
        $this->properties['observationAbout'] = $observationAbout;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getObservationAbout() {
        return $this->properties['observationAbout'];
    }
    /**
     * The variableMeasured property can indicate (repeated as necessary) the
     * variables that are measured in some dataset, either described as text or as
     * pairs of identifier and description using PropertyValue, or more explicitly as a
     * [[StatisticalVariable]].
     *
     * @param $variableMeasured \LengthOfRope\JSONLD\Schema\PropertyValue|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\StatisticalVariable|\LengthOfRope\JSONLD\Schema\Property
     * @return static
     **/
    public function setVariableMeasured($variableMeasured): static {
        $this->properties['variableMeasured'] = $variableMeasured;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PropertyValue|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\StatisticalVariable|\LengthOfRope\JSONLD\Schema\Property
     **/
    public function getVariableMeasured() {
        return $this->properties['variableMeasured'];
    }
    /**
     * A [[marginOfError]] for an [[Observation]].
     *
     * @param $marginOfError \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setMarginOfError($marginOfError): static {
        $this->properties['marginOfError'] = $marginOfError;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getMarginOfError() {
        return $this->properties['marginOfError'];
    }
    /**
     * The measuredProperty of an [[Observation]], typically via its
     * [[StatisticalVariable]]. There are various kinds of applicable [[Property]]: a
     * schema.org property, a property from other RDF-compatible systems, e.g. W3C RDF
     * Data Cube, Data Commons, Wikidata, or schema.org extensions such as
     * [GS1's](https://www.gs1.org/voc/?show=properties).
     *
     * @param $measuredProperty \LengthOfRope\JSONLD\Schema\Property
     * @return static
     **/
    public function setMeasuredProperty($measuredProperty): static {
        $this->properties['measuredProperty'] = $measuredProperty;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Property
     **/
    public function getMeasuredProperty() {
        return $this->properties['measuredProperty'];
    }
    /**
     * A technique, method or technology used in an [[Observation]],
     * [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]),
     * corresponding to the method used for measuring the corresponding variable(s)
     * (for datasets, described using [[variableMeasured]]; for [[Observation]], a
     * [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]]
     * will have an explicit representation as (or mapping to) an property such as
     * those defined in Schema.org, or other RDF vocabularies and "knowledge graphs".
     * In that case the subproperty of [[variableMeasured]] called [[measuredProperty]]
     * is applicable.
     *
     * The [[measurementTechnique]] property helps when extra clarification is needed
     * about how a [[measuredProperty]] was measured. This is oriented towards
     * scientific and scholarly dataset publication but may have broader applicability;
     * it is not intended as a full representation of measurement, but can often serve
     * as a high level summary for dataset discovery.
     *
     * For example, if [[variableMeasured]] is: molecule concentration,
     * [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or
     * "colorimetry" or "immunofluorescence". If the [[variableMeasured]] is
     * "depression rating", the [[measurementTechnique]] could be "Zung Scale" or
     * "HAM-D" or "Beck Depression Inventory".
     *
     * If there are several [[variableMeasured]] properties recorded for some given
     * data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach
     * the corresponding [[measurementTechnique]]. The value can also be from an
     * enumeration, organized as a [[MeasurementMetholdEnumeration]].
     *
     * @param $measurementTechnique \LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setMeasurementTechnique($measurementTechnique): static {
        $this->properties['measurementTechnique'] = $measurementTechnique;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getMeasurementTechnique() {
        return $this->properties['measurementTechnique'];
    }
    /**
     * Provides additional qualification to an observation. For example, a GDP
     * observation measures the Nominal value.
     *
     * @param $measurementQualifier \LengthOfRope\JSONLD\Schema\Enumeration
     * @return static
     **/
    public function setMeasurementQualifier($measurementQualifier): static {
        $this->properties['measurementQualifier'] = $measurementQualifier;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Enumeration
     **/
    public function getMeasurementQualifier() {
        return $this->properties['measurementQualifier'];
    }
}
