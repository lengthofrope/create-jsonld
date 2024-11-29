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
 * A US-style health insurance plan network.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class HealthPlanNetworkSchema extends IntangibleSchema
{
    public static function factory(): HealthPlanNetworkSchema
    {
        return new HealthPlanNetworkSchema('https://schema.org/', 'HealthPlanNetwork');
    }

    /**
     * The costs to the patient for services under this network or formulary.
     *
     * @param $healthPlanCostSharing 
     * @return static
     **/
    public function setHealthPlanCostSharing($healthPlanCostSharing): static {
        $this->properties['healthPlanCostSharing'] = $healthPlanCostSharing;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHealthPlanCostSharing() {
        return $this->properties['healthPlanCostSharing'];
    }

    /**
     * Name or unique ID of network. (Networks are often reused across different insurance plans.)
     *
     * @param $healthPlanNetworkId 
     * @return static
     **/
    public function setHealthPlanNetworkId($healthPlanNetworkId): static {
        $this->properties['healthPlanNetworkId'] = $healthPlanNetworkId;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHealthPlanNetworkId() {
        return $this->properties['healthPlanNetworkId'];
    }

    /**
     * The tier(s) for this network.
     *
     * @param $healthPlanNetworkTier 
     * @return static
     **/
    public function setHealthPlanNetworkTier($healthPlanNetworkTier): static {
        $this->properties['healthPlanNetworkTier'] = $healthPlanNetworkTier;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHealthPlanNetworkTier() {
        return $this->properties['healthPlanNetworkTier'];
    }


}
