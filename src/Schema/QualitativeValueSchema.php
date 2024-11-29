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
 * A predefined value for a product characteristic, e.g. the power cord plug type 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class QualitativeValueSchema extends EnumerationSchema
{
    public static function factory(): QualitativeValueSchema
    {
        return new QualitativeValueSchema('https://schema.org/', 'QualitativeValue');
    }

    /**
     * This ordering relation for qualitative values indicates that the subject is equal to the object.
     *
     * @param $equal 
     * @return static
     **/
    public function setEqual($equal): static {
        $this->properties['equal'] = $equal;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEqual() {
        return $this->properties['equal'];
    }

    /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.

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
     * This ordering relation for qualitative values indicates that the subject is lesser than the object.
     *
     * @param $lesser 
     * @return static
     **/
    public function setLesser($lesser): static {
        $this->properties['lesser'] = $lesser;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLesser() {
        return $this->properties['lesser'];
    }

    /**
     * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
     *
     * @param $lesserOrEqual 
     * @return static
     **/
    public function setLesserOrEqual($lesserOrEqual): static {
        $this->properties['lesserOrEqual'] = $lesserOrEqual;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLesserOrEqual() {
        return $this->properties['lesserOrEqual'];
    }

    /**
     * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
     *
     * @param $greaterOrEqual 
     * @return static
     **/
    public function setGreaterOrEqual($greaterOrEqual): static {
        $this->properties['greaterOrEqual'] = $greaterOrEqual;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGreaterOrEqual() {
        return $this->properties['greaterOrEqual'];
    }

    /**
     * This ordering relation for qualitative values indicates that the subject is greater than the object.
     *
     * @param $greater 
     * @return static
     **/
    public function setGreater($greater): static {
        $this->properties['greater'] = $greater;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGreater() {
        return $this->properties['greater'];
    }

    /**
     * This ordering relation for qualitative values indicates that the subject is not equal to the object.
     *
     * @param $nonEqual 
     * @return static
     **/
    public function setNonEqual($nonEqual): static {
        $this->properties['nonEqual'] = $nonEqual;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNonEqual() {
        return $this->properties['nonEqual'];
    }

    /**
     * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
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


}
