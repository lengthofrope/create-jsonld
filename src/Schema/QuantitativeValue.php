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
 * A point value or interval for product characteristics and other purposes.
 *
 * @see https://schema.org/QuantitativeValue
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class QuantitativeValue extends StructuredValue
{
    public static function factory(): QuantitativeValue
    {
        return new QuantitativeValue('https://schema.org/', 'QuantitativeValue');
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
     * @param $additionalProperty 
     * @return static
     **/
    public function setAdditionalProperty($additionalProperty): static {
        $this->properties['additionalProperty'] = $additionalProperty;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAdditionalProperty() {
        return $this->properties['additionalProperty'];
    }
    /**
     * The lower value of some characteristic or property.
     *
     * @param $minValue 
     * @return static
     **/
    public function setMinValue($minValue): static {
        $this->properties['minValue'] = $minValue;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMinValue() {
        return $this->properties['minValue'];
    }
    /**
     * The upper value of some characteristic or property.
     *
     * @param $maxValue 
     * @return static
     **/
    public function setMaxValue($maxValue): static {
        $this->properties['maxValue'] = $maxValue;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMaxValue() {
        return $this->properties['maxValue'];
    }
    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or
     * a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix
     * followed by a colon.
     *
     * @param $unitCode |
     * @return static
     **/
    public function setUnitCode($unitCode): static {
        $this->properties['unitCode'] = $unitCode;

        return $this;
    }

    /**
     * @return |
     **/
    public function getUnitCode() {
        return $this->properties['unitCode'];
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
     * @param $value |||
     * @return static
     **/
    public function setValue($value): static {
        $this->properties['value'] = $value;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getValue() {
        return $this->properties['value'];
    }
    /**
     * A secondary value that provides additional information on the original value,
     * e.g. a reference temperature or a type of measurement.
     *
     * @param $valueReference |||||||
     * @return static
     **/
    public function setValueReference($valueReference): static {
        $this->properties['valueReference'] = $valueReference;

        return $this;
    }

    /**
     * @return |||||||
     **/
    public function getValueReference() {
        return $this->properties['valueReference'];
    }
    /**
     * A string or text indicating the unit of measurement. Useful if you cannot
     * provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     * @param $unitText 
     * @return static
     **/
    public function setUnitText($unitText): static {
        $this->properties['unitText'] = $unitText;

        return $this;
    }

    /**
     * @return 
     **/
    public function getUnitText() {
        return $this->properties['unitText'];
    }
}
