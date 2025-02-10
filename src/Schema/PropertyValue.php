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
 * A property-value pair, e.g. representing a feature of a product or place. Use
 * the 'name' property for the name of the property. If there is an additional
 * human-readable version of the value, put that into the 'description' property.
 *
 * Always use specific schema.org properties when a) they exist and b) you can
 * populate them. Using PropertyValue as a substitute will typically not trigger
 * the same effect as using the original, specific property.
 * *
 *
 * @see https://schema.org/PropertyValue
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PropertyValue extends StructuredValue
{
    public static function factory(): PropertyValue
    {
        return new PropertyValue('https://schema.org/', 'PropertyValue');
    }

    /**
     * The lower value of some characteristic or property.
     *
     * @param $minValue \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setMinValue($minValue): static {
        $this->properties['minValue'] = $minValue;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getMinValue() {
        return $this->properties['minValue'];
    }
    /**
     * A commonly used identifier for the characteristic represented by the property,
     * e.g. a manufacturer or a standard code for a property. propertyID can be
     * (1) a prefixed string, mainly meant to be used with standards for product
     * properties; (2) a site-specific, non-prefixed string (e.g. the primary key of
     * the property or the vendor-specific ID of the property), or (3)
     * a URL indicating the type of the property, either pointing to an external
     * vocabulary, or a Web resource that describes the property (e.g. a glossary
     * entry).
     * Standards bodies should promote a standard prefix for the identifiers of
     * properties from their standards.
     *
     * @param $propertyID \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setPropertyID($propertyID): static {
        $this->properties['propertyID'] = $propertyID;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getPropertyID() {
        return $this->properties['propertyID'];
    }
    /**
     * The upper value of some characteristic or property.
     *
     * @param $maxValue \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setMaxValue($maxValue): static {
        $this->properties['maxValue'] = $maxValue;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getMaxValue() {
        return $this->properties['maxValue'];
    }
    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or
     * a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix
     * followed by a colon.
     *
     * @param $unitCode \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setUnitCode($unitCode): static {
        $this->properties['unitCode'] = $unitCode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getUnitCode() {
        return $this->properties['unitCode'];
    }
    /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying
     * specific methods, in particular via [[MeasurementMethodEnum]].
     *
     * @param $measurementMethod \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setMeasurementMethod($measurementMethod): static {
        $this->properties['measurementMethod'] = $measurementMethod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getMeasurementMethod() {
        return $this->properties['measurementMethod'];
    }
    /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property
     * value node.
     *
     * * For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for
     * values is 'Number'.
     * * For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or
     * 'StructuredValue'.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     *
     * @param $value \LengthOfRope\JSONLD\DataType\TypeBoolean|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\StructuredValue
     * @return static
     **/
    public function setValue($value): static {
        $this->properties['value'] = $value;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\StructuredValue
     **/
    public function getValue() {
        return $this->properties['value'];
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
     * @param $measurementTechnique \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum
     * @return static
     **/
    public function setMeasurementTechnique($measurementTechnique): static {
        $this->properties['measurementTechnique'] = $measurementTechnique;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum
     **/
    public function getMeasurementTechnique() {
        return $this->properties['measurementTechnique'];
    }
    /**
     * A secondary value that provides additional information on the original value,
     * e.g. a reference temperature or a type of measurement.
     *
     * @param $valueReference \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\PropertyValue|\LengthOfRope\JSONLD\Schema\MeasurementTypeEnumeration|\LengthOfRope\JSONLD\Schema\StructuredValue|\LengthOfRope\JSONLD\Schema\Enumeration|\LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setValueReference($valueReference): static {
        $this->properties['valueReference'] = $valueReference;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\PropertyValue|\LengthOfRope\JSONLD\Schema\MeasurementTypeEnumeration|\LengthOfRope\JSONLD\Schema\StructuredValue|\LengthOfRope\JSONLD\Schema\Enumeration|\LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getValueReference() {
        return $this->properties['valueReference'];
    }
    /**
     * A string or text indicating the unit of measurement. Useful if you cannot
     * provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     * @param $unitText \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setUnitText($unitText): static {
        $this->properties['unitText'] = $unitText;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getUnitText() {
        return $this->properties['unitText'];
    }
}
