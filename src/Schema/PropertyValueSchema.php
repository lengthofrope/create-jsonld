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
 * A property-value pair, e.g. representing a feature of a product or place. Use the 'name' property for the name of the property. If there is an additional human-readable version of the value, put that into the 'description' property.
        <br/><br/>
        Always use specific schema.org properties when a) they exist and b) you can populate them. Using PropertyValue as a substitute will typically not trigger the same effect as using the original, specific property.
    
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PropertyValueSchema extends StructuredValueSchema
{
    public static function factory()
    {
        return new PropertyValueSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The upper value of some characteristic or property.
     **/
    private $maxValue;
    public function setMaxValue($maxValue) {
        $this->maxValue = $maxValue;

        return $this;
    }

    /**
     * @return NumberSchema     
     **/
    public function getMaxValue() {
        return $this->maxValue;
    }

    /**
     * The lower value of some characteristic or property.
     **/
    private $minValue;
    public function setMinValue($minValue) {
        $this->minValue = $minValue;

        return $this;
    }

    /**
     * @return NumberSchema     
     **/
    public function getMinValue() {
        return $this->minValue;
    }

    /**
     * A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property. propertyID can be
(1) a prefixed string, mainly meant to be used with standards for product properties; (2) a site-specific, non-prefixed string (e.g. the primary key of the property or the vendor-specific id of the property), or (3)
a URL indicating the type of the property, either pointing to an external vocabulary, or a Web resource that describes the property (e.g. a glossary entry).
Standards bodies should promote a standard prefix for the identifiers of properties from their standards.
     **/
    private $propertyID;
    public function setPropertyID($propertyID) {
        $this->propertyID = $propertyID;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     
     **/
    public function getPropertyID() {
        return $this->propertyID;
    }

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
     **/
    private $unitCode;
    public function setUnitCode($unitCode) {
        $this->unitCode = $unitCode;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     
     **/
    public function getUnitCode() {
        return $this->unitCode;
    }

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
<a href='unitCode'>unitCode</a>.
     **/
    private $unitText;
    public function setUnitText($unitText) {
        $this->unitText = $unitText;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getUnitText() {
        return $this->unitText;
    }

    /**
     * The value of the quantitative value or property value node. For QuantitativeValue, the recommended type for values is 'Number'. For PropertyValue, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.
     **/
    private $value;
    public function setValue($value) {
        $this->value = $value;

        return $this;
    }

    /**
     * @return NumberSchema|TextSchema|BooleanSchema|StructuredValueSchema     
     **/
    public function getValue() {
        return $this->value;
    }

    /**
     * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
     **/
    private $valueReference;
    public function setValueReference($valueReference) {
        $this->valueReference = $valueReference;

        return $this;
    }

    /**
     * @return EnumerationSchema|StructuredValueSchema|PropertyValueSchema|QualitativeValueSchema|QuantitativeValueSchema     
     **/
    public function getValueReference() {
        return $this->valueReference;
    }


}
