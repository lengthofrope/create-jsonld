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
 * A profession, may involve prolonged training and/or a formal qualification.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class OccupationSchema extends IntangibleSchema
{
    public static function factory(): OccupationSchema
    {
        return new OccupationSchema('https://schema.org/', 'Occupation');
    }

    /**
     * Specific qualifications required for this role or Occupation.
     *
     * @param $qualifications |
     * @return static
     **/
    public function setQualifications($qualifications): static {
        $this->properties['qualifications'] = $qualifications;

        return $this;
    }

    /**
     * @return |
     **/
    public function getQualifications() {
        return $this->properties['qualifications'];
    }

    /**
     * Description of skills and experience needed for the position or Occupation.
     *
     * @param $experienceRequirements |
     * @return static
     **/
    public function setExperienceRequirements($experienceRequirements): static {
        $this->properties['experienceRequirements'] = $experienceRequirements;

        return $this;
    }

    /**
     * @return |
     **/
    public function getExperienceRequirements() {
        return $this->properties['experienceRequirements'];
    }

    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
     *
     * @param $estimatedSalary ||
     * @return static
     **/
    public function setEstimatedSalary($estimatedSalary): static {
        $this->properties['estimatedSalary'] = $estimatedSalary;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getEstimatedSalary() {
        return $this->properties['estimatedSalary'];
    }

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is either claimed by a person, an organization or desired or required to fulfill a role or to work in an occupation.
     *
     * @param $skills |
     * @return static
     **/
    public function setSkills($skills): static {
        $this->properties['skills'] = $skills;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSkills() {
        return $this->properties['skills'];
    }

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     *
     * @param $occupationalCategory |
     * @return static
     **/
    public function setOccupationalCategory($occupationalCategory): static {
        $this->properties['occupationalCategory'] = $occupationalCategory;

        return $this;
    }

    /**
     * @return |
     **/
    public function getOccupationalCategory() {
        return $this->properties['occupationalCategory'];
    }

    /**
     * Responsibilities associated with this role or Occupation.
     *
     * @param $responsibilities 
     * @return static
     **/
    public function setResponsibilities($responsibilities): static {
        $this->properties['responsibilities'] = $responsibilities;

        return $this;
    }

    /**
     * @return 
     **/
    public function getResponsibilities() {
        return $this->properties['responsibilities'];
    }

    /**
     *  The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
     *
     * @param $occupationLocation 
     * @return static
     **/
    public function setOccupationLocation($occupationLocation): static {
        $this->properties['occupationLocation'] = $occupationLocation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getOccupationLocation() {
        return $this->properties['occupationLocation'];
    }

    /**
     * Educational background needed for the position or Occupation.
     *
     * @param $educationRequirements |
     * @return static
     **/
    public function setEducationRequirements($educationRequirements): static {
        $this->properties['educationRequirements'] = $educationRequirements;

        return $this;
    }

    /**
     * @return |
     **/
    public function getEducationRequirements() {
        return $this->properties['educationRequirements'];
    }


}
