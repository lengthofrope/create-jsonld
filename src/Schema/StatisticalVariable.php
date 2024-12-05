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
 * [[StatisticalVariable]] represents any type of statistical metric that can be
 * measured at a place and time. The usage pattern for [[StatisticalVariable]] is
 * typically expressed using [[Observation]] with an explicit [[populationType]],
 * which is a type, typically drawn from Schema.org. Each [[StatisticalVariable]]
 * is marked as a [[ConstraintNode]], meaning that some properties (those listed
 * using [[constraintProperty]]) serve in this setting solely to define the
 * statistical variable rather than literally describe a specific person, place or
 * thing. For example, a [[StatisticalVariable]] Median_Height_Person_Female
 * representing the median height of women, could be written as follows: the
 * population type is [[Person]]; the measuredProperty [[height]]; the [[statType]]
 * [[median]]; the [[gender]] [[Female]]. It is important to note that there are
 * many kinds of scientific quantitative observation which are not fully, perfectly
 * or unambiguously described following this pattern, or with solely Schema.org
 * terminology. The approach taken here is designed to allow partial, incremental
 * or minimal description of [[StatisticalVariable]]s, and the use of detailed sets
 * of entity and property IDs from external repositories. The
 * [[measurementMethod]], [[unitCode]] and [[unitText]] properties can also be used
 * to clarify the specific nature and notation of an observed measurement.
 *
 * @see https://schema.org/StatisticalVariable
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class StatisticalVariable extends ConstraintNode
{
    public static function factory(): StatisticalVariable
    {
        return new StatisticalVariable('https://schema.org/', 'StatisticalVariable');
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
     * Indicates the kind of statistic represented by a [[StatisticalVariable]], e.g.
     * mean, count etc. The value of statType is a property, either from within
     * Schema.org (e.g. [[median]], [[marginOfError]], [[maxValue]], [[minValue]]) or
     * from other compatible (e.g. RDF) systems such as DataCommons.org or
     * Wikidata.org.
     *
     * @param $statType \LengthOfRope\JSONLD\Schema\Property|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL
     * @return static
     **/
    public function setStatType($statType): static {
        $this->properties['statType'] = $statType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Property|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL
     **/
    public function getStatType() {
        return $this->properties['statType'];
    }
    /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying
     * specific methods, in particular via [[MeasurementMethodEnum]].
     *
     * @param $measurementMethod \LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setMeasurementMethod($measurementMethod): static {
        $this->properties['measurementMethod'] = $measurementMethod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getMeasurementMethod() {
        return $this->properties['measurementMethod'];
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
     * @param $measurementTechnique \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum
     * @return static
     **/
    public function setMeasurementTechnique($measurementTechnique): static {
        $this->properties['measurementTechnique'] = $measurementTechnique;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum
     **/
    public function getMeasurementTechnique() {
        return $this->properties['measurementTechnique'];
    }
    /**
     * Indicates the populationType common to all members of a
     * [[StatisticalPopulation]] or all cases within the scope of a
     * [[StatisticalVariable]].
     *
     * @param $populationType \LengthOfRope\JSONLD\Schema\Class
     * @return static
     **/
    public function setPopulationType($populationType): static {
        $this->properties['populationType'] = $populationType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Class
     **/
    public function getPopulationType() {
        return $this->properties['populationType'];
    }
}
