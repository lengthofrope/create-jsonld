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
 * Information about the engine of the vehicle. A vehicle can have multiple engines
 * represented by multiple engine specification entities.
 *
 * @see https://schema.org/EngineSpecification
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class EngineSpecification extends StructuredValue
{
    public static function factory(): EngineSpecification
    {
        return new EngineSpecification('https://schema.org/', 'EngineSpecification');
    }

    /**
     * The power of the vehicle's engine.
     * Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12 for
     * metric horsepower (PS, with 1 PS = 735,49875 W)
     *
     * * Note 1: There are many different ways of measuring an engine's power. For an
     * overview, see
     * [http://en.wikipedia.org/wiki/Horsepower#Engine\_power\_test\_codes](http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes).
     * * Note 2: You can link to information about how the given value has been
     * determined using the [[valueReference]] property.
     * * Note 3: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param $enginePower \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setEnginePower($enginePower): static {
        $this->properties['enginePower'] = $enginePower;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getEnginePower() {
        return $this->properties['enginePower'];
    }
    /**
     * The volume swept by all of the pistons inside the cylinders of an internal
     * combustion engine in a single movement.
     *
     * Typical unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for cubic
     * inches
     * * Note 1: You can link to information about how the given value has been
     * determined using the [[valueReference]] property.
     * * Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param $engineDisplacement \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setEngineDisplacement($engineDisplacement): static {
        $this->properties['engineDisplacement'] = $engineDisplacement;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getEngineDisplacement() {
        return $this->properties['engineDisplacement'];
    }
    /**
     * The type of engine or engines powering the vehicle.
     *
     * @param $engineType \LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setEngineType($engineType): static {
        $this->properties['engineType'] = $engineType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     **/
    public function getEngineType() {
        return $this->properties['engineType'];
    }
    /**
     * The torque (turning force) of the vehicle's engine.
     *
     * Typical unit code(s): NU for newton metre (N m), F17 for pound-force per foot,
     * or F48 for pound-force per inch
     *
     * * Note 1: You can link to information about how the given value has been
     * determined (e.g. reference RPM) using the [[valueReference]] property.
     * * Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param $torque \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setTorque($torque): static {
        $this->properties['torque'] = $torque;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getTorque() {
        return $this->properties['torque'];
    }
    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the
     * vehicle has only one engine, this property can be attached directly to the
     * vehicle.
     *
     * @param $fuelType \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setFuelType($fuelType): static {
        $this->properties['fuelType'] = $fuelType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\QualitativeValue|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getFuelType() {
        return $this->properties['fuelType'];
    }
}
