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
 * A facility, often associated with a hospital or medical school, that is devoted
 * to the specific diagnosis and/or healthcare. Previously limited to outpatients
 * but with evolution it may be open to inpatients as well.
 *
 * @see https://schema.org/MedicalClinic
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalClinic extends MedicalBusiness
{
    public static function factory(): MedicalClinic
    {
        return new MedicalClinic('https://schema.org/', 'MedicalClinic');
    }

    /**
     * A medical specialty of the provider.
     *
     * @param $medicalSpecialty \LengthOfRope\JSONLD\Schema\MedicalSpecialty
     * @return static
     **/
    public function setMedicalSpecialty($medicalSpecialty): static {
        $this->properties['medicalSpecialty'] = $medicalSpecialty;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalSpecialty
     **/
    public function getMedicalSpecialty() {
        return $this->properties['medicalSpecialty'];
    }
    /**
     * A medical service available from this provider.
     *
     * @param $availableService \LengthOfRope\JSONLD\Schema\MedicalTest|\LengthOfRope\JSONLD\Schema\MedicalTherapy|\LengthOfRope\JSONLD\Schema\MedicalProcedure
     * @return static
     **/
    public function setAvailableService($availableService): static {
        $this->properties['availableService'] = $availableService;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalTest|\LengthOfRope\JSONLD\Schema\MedicalTherapy|\LengthOfRope\JSONLD\Schema\MedicalProcedure
     **/
    public function getAvailableService() {
        return $this->properties['availableService'];
    }
}
