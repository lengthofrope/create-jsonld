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
 * A car is a wheeled, self-powered motor vehicle used for transportation.
 *
 * @see https://schema.org/Car
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Car extends Vehicle
{
    public static function factory(): Car
    {
        return new Car('https://schema.org/', 'Car');
    }

    /**
     * The permitted total weight of cargo and installations (e.g. a roof rack) on top
     * of the vehicle.
     *
     * Typical unit code(s): KGM for kilogram, LBR for pound
     *
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 2: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]]
     * * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     *
     * @param $roofLoad \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setRoofLoad($roofLoad): static {
        $this->properties['roofLoad'] = $roofLoad;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getRoofLoad() {
        return $this->properties['roofLoad'];
    }
    /**
     * The ACRISS Car Classification Code is a code used by many car rental companies,
     * for classifying vehicles. ACRISS stands for Association of Car Rental Industry
     * Systems and Standards.
     *
     * @param $acrissCode \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setAcrissCode($acrissCode): static {
        $this->properties['acrissCode'] = $acrissCode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getAcrissCode() {
        return $this->properties['acrissCode'];
    }
}
