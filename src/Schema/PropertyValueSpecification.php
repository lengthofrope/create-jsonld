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
 * A Property value specification.
 *
 * @see https://schema.org/PropertyValueSpecification
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PropertyValueSpecification extends Intangible
{
    public static function factory(): PropertyValueSpecification
    {
        return new PropertyValueSpecification('https://schema.org/', 'PropertyValueSpecification');
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
     * Specifies the minimum allowed range for number of characters in a literal value.
     *
     * @param $valueMinLength \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setValueMinLength($valueMinLength): static {
        $this->properties['valueMinLength'] = $valueMinLength;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getValueMinLength() {
        return $this->properties['valueMinLength'];
    }
    /**
     * The default value of the input.  For properties that expect a literal, the
     * default is a literal value, for properties that expect an object, it's an ID
     * reference to one of the current values.
     *
     * @param $defaultValue \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setDefaultValue($defaultValue): static {
        $this->properties['defaultValue'] = $defaultValue;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getDefaultValue() {
        return $this->properties['defaultValue'];
    }
    /**
     * Whether or not a property is mutable.  Default is false. Specifying this for a
     * property that also has a value makes it act similar to a "hidden" input in an
     * HTML form.
     *
     * @param $readonlyValue \LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setReadonlyValue($readonlyValue): static {
        $this->properties['readonlyValue'] = $readonlyValue;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getReadonlyValue() {
        return $this->properties['readonlyValue'];
    }
    /**
     * Specifies a regular expression for testing literal values according to the HTML
     * spec.
     *
     * @param $valuePattern \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setValuePattern($valuePattern): static {
        $this->properties['valuePattern'] = $valuePattern;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getValuePattern() {
        return $this->properties['valuePattern'];
    }
    /**
     * Whether the property must be filled in to complete the action.  Default is
     * false.
     *
     * @param $valueRequired \LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setValueRequired($valueRequired): static {
        $this->properties['valueRequired'] = $valueRequired;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getValueRequired() {
        return $this->properties['valueRequired'];
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
     * Indicates the name of the PropertyValueSpecification to be used in URL templates
     * and form encoding in a manner analogous to HTML's input@name.
     *
     * @param $valueName \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setValueName($valueName): static {
        $this->properties['valueName'] = $valueName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getValueName() {
        return $this->properties['valueName'];
    }
    /**
     * Whether multiple values are allowed for the property.  Default is false.
     *
     * @param $multipleValues \LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setMultipleValues($multipleValues): static {
        $this->properties['multipleValues'] = $multipleValues;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getMultipleValues() {
        return $this->properties['multipleValues'];
    }
    /**
     * Specifies the allowed range for number of characters in a literal value.
     *
     * @param $valueMaxLength \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setValueMaxLength($valueMaxLength): static {
        $this->properties['valueMaxLength'] = $valueMaxLength;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getValueMaxLength() {
        return $this->properties['valueMaxLength'];
    }
    /**
     * The stepValue attribute indicates the granularity that is expected (and
     * required) of the value in a PropertyValueSpecification.
     *
     * @param $stepValue \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setStepValue($stepValue): static {
        $this->properties['stepValue'] = $stepValue;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getStepValue() {
        return $this->properties['stepValue'];
    }
}
