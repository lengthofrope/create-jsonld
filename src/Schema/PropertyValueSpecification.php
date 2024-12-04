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
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PropertyValueSpecification extends Intangible
{
    public static function factory(): PropertyValueSpecification
    {
        return new PropertyValueSpecification('https://schema.org/', 'PropertyValueSpecification');
    }

    /**
     * Specifies the allowed range for number of characters in a literal value.
     *
     * @param $valueMaxLength 
     * @return static
     **/
    public function setValueMaxLength($valueMaxLength): static {
        $this->properties['valueMaxLength'] = $valueMaxLength;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValueMaxLength() {
        return $this->properties['valueMaxLength'];
    }

    /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     *
     * @param $valueMinLength 
     * @return static
     **/
    public function setValueMinLength($valueMinLength): static {
        $this->properties['valueMinLength'] = $valueMinLength;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValueMinLength() {
        return $this->properties['valueMinLength'];
    }

    /**
     * Whether multiple values are allowed for the property.  Default is false.
     *
     * @param $multipleValues 
     * @return static
     **/
    public function setMultipleValues($multipleValues): static {
        $this->properties['multipleValues'] = $multipleValues;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMultipleValues() {
        return $this->properties['multipleValues'];
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
     * Whether or not a property is mutable.  Default is false. Specifying this for a property that also has a value makes it act similar to a "hidden" input in an HTML form.
     *
     * @param $readonlyValue 
     * @return static
     **/
    public function setReadonlyValue($readonlyValue): static {
        $this->properties['readonlyValue'] = $readonlyValue;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReadonlyValue() {
        return $this->properties['readonlyValue'];
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
     * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
     *
     * @param $stepValue 
     * @return static
     **/
    public function setStepValue($stepValue): static {
        $this->properties['stepValue'] = $stepValue;

        return $this;
    }

    /**
     * @return 
     **/
    public function getStepValue() {
        return $this->properties['stepValue'];
    }

    /**
     * The default value of the input.  For properties that expect a literal, the default is a literal value, for properties that expect an object, it's an ID reference to one of the current values.
     *
     * @param $defaultValue |
     * @return static
     **/
    public function setDefaultValue($defaultValue): static {
        $this->properties['defaultValue'] = $defaultValue;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDefaultValue() {
        return $this->properties['defaultValue'];
    }

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's input@name.
     *
     * @param $valueName 
     * @return static
     **/
    public function setValueName($valueName): static {
        $this->properties['valueName'] = $valueName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValueName() {
        return $this->properties['valueName'];
    }

    /**
     * Specifies a regular expression for testing literal values according to the HTML spec.
     *
     * @param $valuePattern 
     * @return static
     **/
    public function setValuePattern($valuePattern): static {
        $this->properties['valuePattern'] = $valuePattern;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValuePattern() {
        return $this->properties['valuePattern'];
    }

    /**
     * Whether the property must be filled in to complete the action.  Default is false.
     *
     * @param $valueRequired 
     * @return static
     **/
    public function setValueRequired($valueRequired): static {
        $this->properties['valueRequired'] = $valueRequired;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValueRequired() {
        return $this->properties['valueRequired'];
    }


}
