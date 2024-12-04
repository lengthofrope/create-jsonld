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
 * Size related properties of a product, typically a size code ([[name]]) and
 * optionally a [[sizeSystem]], [[sizeGroup]], and product measurements
 * ([[hasMeasurement]]). In addition, the intended audience can be defined through
 * [[suggestedAge]], [[suggestedGender]], and suggested body measurements
 * ([[suggestedMeasurement]]).
 *
 * @see https://schema.org/SizeSpecification
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SizeSpecification extends QualitativeValue
{
    public static function factory(): SizeSpecification
    {
        return new SizeSpecification('https://schema.org/', 'SizeSpecification');
    }

    /**
     * A measurement of an item, For example, the inseam of pants, the wheel size of a
     * bicycle, the gauge of a screw, or the carbon footprint measured for
     * certification by an authority. Usually an exact measurement, but can also be a
     * range of measurements for adjustable products, for example belts and ski
     * bindings.
     *
     * @param $hasMeasurement 
     * @return static
     **/
    public function setHasMeasurement($hasMeasurement): static {
        $this->properties['hasMeasurement'] = $hasMeasurement;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasMeasurement() {
        return $this->properties['hasMeasurement'];
    }
    /**
     * The age or age range for the intended audience or person, for example 3-12
     * months for infants, 1-5 years for toddlers.
     *
     * @param $suggestedAge 
     * @return static
     **/
    public function setSuggestedAge($suggestedAge): static {
        $this->properties['suggestedAge'] = $suggestedAge;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSuggestedAge() {
        return $this->properties['suggestedAge'];
    }
    /**
     * The suggested gender of the intended person or audience, for example "male",
     * "female", or "unisex".
     *
     * @param $suggestedGender |
     * @return static
     **/
    public function setSuggestedGender($suggestedGender): static {
        $this->properties['suggestedGender'] = $suggestedGender;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSuggestedGender() {
        return $this->properties['suggestedGender'];
    }
    /**
     * A suggested range of body measurements for the intended audience or person, for
     * example inseam between 32 and 34 inches or height between 170 and 190 cm.
     * Typically found on a size chart for wearable products.
     *
     * @param $suggestedMeasurement 
     * @return static
     **/
    public function setSuggestedMeasurement($suggestedMeasurement): static {
        $this->properties['suggestedMeasurement'] = $suggestedMeasurement;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSuggestedMeasurement() {
        return $this->properties['suggestedMeasurement'];
    }
    /**
     * The size group (also known as "size type") for a product's size. Size groups are
     * common in the fashion industry to define size segments and suggested audiences
     * for wearable products. Multiple values can be combined, for example "men's big
     * and tall", "petite maternity" or "regular".
     *
     * @param $sizeGroup |
     * @return static
     **/
    public function setSizeGroup($sizeGroup): static {
        $this->properties['sizeGroup'] = $sizeGroup;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSizeGroup() {
        return $this->properties['sizeGroup'];
    }
    /**
     * The size system used to identify a product's size. Typically either a standard
     * (for example, "GS1" or "ISO-EN13402"), country code (for example "US" or "JP"),
     * or a measuring system (for example "Metric" or "Imperial").
     *
     * @param $sizeSystem |
     * @return static
     **/
    public function setSizeSystem($sizeSystem): static {
        $this->properties['sizeSystem'] = $sizeSystem;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSizeSystem() {
        return $this->properties['sizeSystem'];
    }
}
