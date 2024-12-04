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
 * A medical organization (physical or not), such as hospital, institution or
 * clinic.
 *
 * @see https://schema.org/MedicalOrganization
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalOrganization extends Organization
{
    public static function factory(): MedicalOrganization
    {
        return new MedicalOrganization('https://schema.org/', 'MedicalOrganization');
    }

    /**
     * Name or unique ID of network. (Networks are often reused across different
     * insurance plans.)
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
     * A medical specialty of the provider.
     *
     * @param $medicalSpecialty 
     * @return static
     **/
    public function setMedicalSpecialty($medicalSpecialty): static {
        $this->properties['medicalSpecialty'] = $medicalSpecialty;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMedicalSpecialty() {
        return $this->properties['medicalSpecialty'];
    }
    /**
     * Whether the provider is accepting new patients.
     *
     * @param $isAcceptingNewPatients 
     * @return static
     **/
    public function setIsAcceptingNewPatients($isAcceptingNewPatients): static {
        $this->properties['isAcceptingNewPatients'] = $isAcceptingNewPatients;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsAcceptingNewPatients() {
        return $this->properties['isAcceptingNewPatients'];
    }
}
