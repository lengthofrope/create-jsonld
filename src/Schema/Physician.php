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
 * An individual physician or a physician's office considered as a
 * [[MedicalOrganization]].
 *
 * @see https://schema.org/Physician
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Physician extends MedicalOrganization
{
    public static function factory(): Physician
    {
        return new Physician('https://schema.org/', 'Physician');
    }

    /**
     * A category describing the job, preferably using a term from a taxonomy such as
     * [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html),
     * [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or
     * similar, with the property repeated for each applicable value. Ideally the
     * taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.
     *
     * Note: for historical reasons, any textual label and formal code provided as a
     * literal may be assumed to be from O*NET-SOC.
     *
     * @param $occupationalCategory \LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setOccupationalCategory($occupationalCategory): static {
        $this->properties['occupationalCategory'] = $occupationalCategory;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getOccupationalCategory() {
        return $this->properties['occupationalCategory'];
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
    /**
     * A <a href="https://en.wikipedia.org/wiki/National_Provider_Identifier">National
     * Provider Identifier</a> (NPI)
     * is a unique 10-digit identification number issued to health care providers
     * in the United States by the Centers for Medicare and Medicaid Services.
     *
     * @param $usNPI \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setUsNPI($usNPI): static {
        $this->properties['usNPI'] = $usNPI;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getUsNPI() {
        return $this->properties['usNPI'];
    }
    /**
     * A hospital with which the physician or office is affiliated.
     *
     * @param $hospitalAffiliation \LengthOfRope\JSONLD\Schema\Hospital
     * @return static
     **/
    public function setHospitalAffiliation($hospitalAffiliation): static {
        $this->properties['hospitalAffiliation'] = $hospitalAffiliation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Hospital
     **/
    public function getHospitalAffiliation() {
        return $this->properties['hospitalAffiliation'];
    }
}
