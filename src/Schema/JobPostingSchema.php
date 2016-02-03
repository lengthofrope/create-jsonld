<?php

/*
 * The MIT License
 *
 * Copyright 2016 LengthOfRope, Bas de Kort <bdekort@gmail.com>.
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
 * A listing that describes a job opening in a certain organization.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class JobPostingSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new JobPostingSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     **/
    private $baseSalary;
    public function setBaseSalary($baseSalary) {
        $this->baseSalary = $baseSalary;

        return $this;
    }

    /**
     * @return NumberSchema|PriceSpecificationSchema     
     **/
    public function getBaseSalary() {
        return $this->baseSalary;
    }

    /**
     * Description of benefits associated with the job.
     **/
    private $benefits;
    public function setBenefits($benefits) {
        $this->benefits = $benefits;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getBenefits() {
        return $this->benefits;
    }

    /**
     * Publication date for the job posting.
     **/
    private $datePosted;
    public function setDatePosted($datePosted) {
        $this->datePosted = $datePosted;

        return $this;
    }

    /**
     * @return DateSchema     
     **/
    public function getDatePosted() {
        return $this->datePosted;
    }

    /**
     * Educational background needed for the position.
     **/
    private $educationRequirements;
    public function setEducationRequirements($educationRequirements) {
        $this->educationRequirements = $educationRequirements;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getEducationRequirements() {
        return $this->educationRequirements;
    }

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
     **/
    private $employmentType;
    public function setEmploymentType($employmentType) {
        $this->employmentType = $employmentType;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getEmploymentType() {
        return $this->employmentType;
    }

    /**
     * Description of skills and experience needed for the position.
     **/
    private $experienceRequirements;
    public function setExperienceRequirements($experienceRequirements) {
        $this->experienceRequirements = $experienceRequirements;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getExperienceRequirements() {
        return $this->experienceRequirements;
    }

    /**
     * Organization offering the job position.
     **/
    private $hiringOrganization;
    public function setHiringOrganization($hiringOrganization) {
        $this->hiringOrganization = $hiringOrganization;

        return $this;
    }

    /**
     * @return OrganizationSchema     
     **/
    public function getHiringOrganization() {
        return $this->hiringOrganization;
    }

    /**
     * Description of bonus and commission compensation aspects of the job.
     **/
    private $incentiveCompensation;
    public function setIncentiveCompensation($incentiveCompensation) {
        $this->incentiveCompensation = $incentiveCompensation;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getIncentiveCompensation() {
        return $this->incentiveCompensation;
    }

    /**
     * Description of bonus and commission compensation aspects of the job.
     **/
    private $incentives;
    public function setIncentives($incentives) {
        $this->incentives = $incentives;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getIncentives() {
        return $this->incentives;
    }

    /**
     * The industry associated with the job position.
     **/
    private $industry;
    public function setIndustry($industry) {
        $this->industry = $industry;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getIndustry() {
        return $this->industry;
    }

    /**
     * Description of benefits associated with the job.
     **/
    private $jobBenefits;
    public function setJobBenefits($jobBenefits) {
        $this->jobBenefits = $jobBenefits;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getJobBenefits() {
        return $this->jobBenefits;
    }

    /**
     * A (typically single) geographic location associated with the job position.
     **/
    private $jobLocation;
    public function setJobLocation($jobLocation) {
        $this->jobLocation = $jobLocation;

        return $this;
    }

    /**
     * @return PlaceSchema     
     **/
    public function getJobLocation() {
        return $this->jobLocation;
    }

    /**
     * Category or categories describing the job. Use BLS O*NET-SOC taxonomy: http://www.onetcenter.org/taxonomy.html. Ideally includes textual label and formal code, with the property repeated for each applicable value.
     **/
    private $occupationalCategory;
    public function setOccupationalCategory($occupationalCategory) {
        $this->occupationalCategory = $occupationalCategory;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getOccupationalCategory() {
        return $this->occupationalCategory;
    }

    /**
     * Specific qualifications required for this role.
     **/
    private $qualifications;
    public function setQualifications($qualifications) {
        $this->qualifications = $qualifications;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getQualifications() {
        return $this->qualifications;
    }

    /**
     * Responsibilities associated with this role.
     **/
    private $responsibilities;
    public function setResponsibilities($responsibilities) {
        $this->responsibilities = $responsibilities;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getResponsibilities() {
        return $this->responsibilities;
    }

    /**
     * The currency (coded using ISO 4217, http://en.wikipedia.org/wiki/ISO_4217 ) used for the main salary information in this job posting or for this employee.
     **/
    private $salaryCurrency;
    public function setSalaryCurrency($salaryCurrency) {
        $this->salaryCurrency = $salaryCurrency;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getSalaryCurrency() {
        return $this->salaryCurrency;
    }

    /**
     * Skills required to fulfill this role.
     **/
    private $skills;
    public function setSkills($skills) {
        $this->skills = $skills;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getSkills() {
        return $this->skills;
    }

    /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
     **/
    private $specialCommitments;
    public function setSpecialCommitments($specialCommitments) {
        $this->specialCommitments = $specialCommitments;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getSpecialCommitments() {
        return $this->specialCommitments;
    }

    /**
     * The title of the job.
     **/
    private $title;
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getTitle() {
        return $this->title;
    }

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
     **/
    private $workHours;
    public function setWorkHours($workHours) {
        $this->workHours = $workHours;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getWorkHours() {
        return $this->workHours;
    }


}
