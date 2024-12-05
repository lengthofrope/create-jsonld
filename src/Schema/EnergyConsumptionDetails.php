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
 * EnergyConsumptionDetails represents information related to the energy efficiency
 * of a product that consumes energy. The information that can be provided is based
 * on international regulations such as for example [EU directive
 * 2017/1369](https://eur-lex.europa.eu/eli/reg/2017/1369/oj) for energy labeling
 * and the [Energy labeling
 * rule](https://www.ftc.gov/enforcement/rules/rulemaking-regulatory-reform-proceedings/energy-water-use-labeling-consumer)
 * under the Energy Policy and Conservation Act (EPCA) in the US.
 *
 * @see https://schema.org/EnergyConsumptionDetails
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class EnergyConsumptionDetails extends Intangible
{
    public static function factory(): EnergyConsumptionDetails
    {
        return new EnergyConsumptionDetails('https://schema.org/', 'EnergyConsumptionDetails');
    }

    /**
     * Specifies the least energy efficient class on the regulated EU energy
     * consumption scale for the product category a product belongs to. For example,
     * energy consumption for televisions placed on the market after January 1, 2020 is
     * scaled from D to A+++.
     *
     * @param $energyEfficiencyScaleMin \LengthOfRope\JSONLD\Schema\EUEnergyEfficiencyEnumeration
     * @return static
     **/
    public function setEnergyEfficiencyScaleMin($energyEfficiencyScaleMin): static {
        $this->properties['energyEfficiencyScaleMin'] = $energyEfficiencyScaleMin;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\EUEnergyEfficiencyEnumeration
     **/
    public function getEnergyEfficiencyScaleMin() {
        return $this->properties['energyEfficiencyScaleMin'];
    }
    /**
     * Defines the energy efficiency Category (which could be either a rating out of
     * range of values or a yes/no certification) for a product according to an
     * international energy efficiency standard.
     *
     * @param $hasEnergyEfficiencyCategory \LengthOfRope\JSONLD\Schema\EnergyEfficiencyEnumeration
     * @return static
     **/
    public function setHasEnergyEfficiencyCategory($hasEnergyEfficiencyCategory): static {
        $this->properties['hasEnergyEfficiencyCategory'] = $hasEnergyEfficiencyCategory;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\EnergyEfficiencyEnumeration
     **/
    public function getHasEnergyEfficiencyCategory() {
        return $this->properties['hasEnergyEfficiencyCategory'];
    }
    /**
     * Specifies the most energy efficient class on the regulated EU energy consumption
     * scale for the product category a product belongs to. For example, energy
     * consumption for televisions placed on the market after January 1, 2020 is scaled
     * from D to A+++.
     *
     * @param $energyEfficiencyScaleMax \LengthOfRope\JSONLD\Schema\EUEnergyEfficiencyEnumeration
     * @return static
     **/
    public function setEnergyEfficiencyScaleMax($energyEfficiencyScaleMax): static {
        $this->properties['energyEfficiencyScaleMax'] = $energyEfficiencyScaleMax;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\EUEnergyEfficiencyEnumeration
     **/
    public function getEnergyEfficiencyScaleMax() {
        return $this->properties['energyEfficiencyScaleMax'];
    }
}
