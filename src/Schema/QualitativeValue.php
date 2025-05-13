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
 * A predefined value for a product characteristic, e.g. the power cord plug type
 * 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
 *
 * @see https://schema.org/QualitativeValue
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class QualitativeValue extends Enumeration
{
    public static function factory(): QualitativeValue
    {
        return new QualitativeValue('https://schema.org/', 'QualitativeValue');
    }

    /**
     * This ordering relation for qualitative values indicates that the subject is
     * greater than the object.
     *
     * @param $greater \LengthOfRope\JSONLD\Schema\QualitativeValue
     * @return static
     **/
    public function setGreater($greater): static {
        $this->properties['greater'] = $greater;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QualitativeValue
     **/
    public function getGreater() {
        return $this->properties['greater'];
    }
    /**
     * A secondary value that provides additional information on the original value,
     * e.g. a reference temperature or a type of measurement.
     *
     * @param $valueReference \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\StructuredValue|\LengthOfRope\JSONLD\Schema\PropertyValue|\LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Enumeration|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementTypeEnumeration
     * @return static
     **/
    public function setValueReference($valueReference): static {
        $this->properties['valueReference'] = $valueReference;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\StructuredValue|\LengthOfRope\JSONLD\Schema\PropertyValue|\LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Enumeration|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementTypeEnumeration
     **/
    public function getValueReference() {
        return $this->properties['valueReference'];
    }
    /**
     * A property-value pair representing an additional characteristic of the entity,
     * e.g. a product feature or another characteristic for which there is no matching
     * property in schema.org.
     *
     * Note: Publishers should be aware that applications designed to use specific
     * schema.org properties (e.g. https://schema.org/width, https://schema.org/color,
     * https://schema.org/gtin13, ...) will typically expect such data to be provided
     * using those properties, rather than using the generic property/value mechanism.
     *
     *
     * @param $additionalProperty \LengthOfRope\JSONLD\Schema\PropertyValue
     * @return static
     **/
    public function setAdditionalProperty($additionalProperty): static {
        $this->properties['additionalProperty'] = $additionalProperty;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PropertyValue
     **/
    public function getAdditionalProperty() {
        return $this->properties['additionalProperty'];
    }
    /**
     * This ordering relation for qualitative values indicates that the subject is
     * lesser than or equal to the object.
     *
     * @param $lesserOrEqual \LengthOfRope\JSONLD\Schema\QualitativeValue
     * @return static
     **/
    public function setLesserOrEqual($lesserOrEqual): static {
        $this->properties['lesserOrEqual'] = $lesserOrEqual;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QualitativeValue
     **/
    public function getLesserOrEqual() {
        return $this->properties['lesserOrEqual'];
    }
    /**
     * This ordering relation for qualitative values indicates that the subject is
     * lesser than the object.
     *
     * @param $lesser \LengthOfRope\JSONLD\Schema\QualitativeValue
     * @return static
     **/
    public function setLesser($lesser): static {
        $this->properties['lesser'] = $lesser;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QualitativeValue
     **/
    public function getLesser() {
        return $this->properties['lesser'];
    }
    /**
     * This ordering relation for qualitative values indicates that the subject is
     * equal to the object.
     *
     * @param $equal \LengthOfRope\JSONLD\Schema\QualitativeValue
     * @return static
     **/
    public function setEqual($equal): static {
        $this->properties['equal'] = $equal;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QualitativeValue
     **/
    public function getEqual() {
        return $this->properties['equal'];
    }
    /**
     * This ordering relation for qualitative values indicates that the subject is not
     * equal to the object.
     *
     * @param $nonEqual \LengthOfRope\JSONLD\Schema\QualitativeValue
     * @return static
     **/
    public function setNonEqual($nonEqual): static {
        $this->properties['nonEqual'] = $nonEqual;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QualitativeValue
     **/
    public function getNonEqual() {
        return $this->properties['nonEqual'];
    }
    /**
     * This ordering relation for qualitative values indicates that the subject is
     * greater than or equal to the object.
     *
     * @param $greaterOrEqual \LengthOfRope\JSONLD\Schema\QualitativeValue
     * @return static
     **/
    public function setGreaterOrEqual($greaterOrEqual): static {
        $this->properties['greaterOrEqual'] = $greaterOrEqual;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QualitativeValue
     **/
    public function getGreaterOrEqual() {
        return $this->properties['greaterOrEqual'];
    }
}
