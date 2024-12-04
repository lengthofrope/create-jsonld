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
 * A listing that describes a job opening in a certain organization.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class JobPosting extends Intangible
{
    public static function factory(): JobPosting
    {
        return new JobPosting('https://schema.org/', 'JobPosting');
    }

    /**
     * A description of the types of physical activity associated with the job. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
     *
     * @param $physicalRequirement ||
     * @return static
     **/
    public function setPhysicalRequirement($physicalRequirement): static {
        $this->properties['physicalRequirement'] = $physicalRequirement;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getPhysicalRequirement() {
        return $this->properties['physicalRequirement'];
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
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
     *
     * @param $employmentType 
     * @return static
     **/
    public function setEmploymentType($employmentType): static {
        $this->properties['employmentType'] = $employmentType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEmploymentType() {
        return $this->properties['employmentType'];
    }

    /**
     * An indicator as to whether a position is available for an immediate start.
     *
     * @param $jobImmediateStart 
     * @return static
     **/
    public function setJobImmediateStart($jobImmediateStart): static {
        $this->properties['jobImmediateStart'] = $jobImmediateStart;

        return $this;
    }

    /**
     * @return 
     **/
    public function getJobImmediateStart() {
        return $this->properties['jobImmediateStart'];
    }

    /**
     * The legal requirements such as citizenship, visa and other documentation required for an applicant to this job.
     *
     * @param $eligibilityToWorkRequirement 
     * @return static
     **/
    public function setEligibilityToWorkRequirement($eligibilityToWorkRequirement): static {
        $this->properties['eligibilityToWorkRequirement'] = $eligibilityToWorkRequirement;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEligibilityToWorkRequirement() {
        return $this->properties['eligibilityToWorkRequirement'];
    }

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     * @param $incentiveCompensation 
     * @return static
     **/
    public function setIncentiveCompensation($incentiveCompensation): static {
        $this->properties['incentiveCompensation'] = $incentiveCompensation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIncentiveCompensation() {
        return $this->properties['incentiveCompensation'];
    }

    /**
     * Organization or Person offering the job position.
     *
     * @param $hiringOrganization |
     * @return static
     **/
    public function setHiringOrganization($hiringOrganization): static {
        $this->properties['hiringOrganization'] = $hiringOrganization;

        return $this;
    }

    /**
     * @return |
     **/
    public function getHiringOrganization() {
        return $this->properties['hiringOrganization'];
    }

    /**
     * Publication date of an online listing.
     *
     * @param $datePosted |
     * @return static
     **/
    public function setDatePosted($datePosted): static {
        $this->properties['datePosted'] = $datePosted;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDatePosted() {
        return $this->properties['datePosted'];
    }

    /**
     * A (typically single) geographic location associated with the job position.
     *
     * @param $jobLocation 
     * @return static
     **/
    public function setJobLocation($jobLocation): static {
        $this->properties['jobLocation'] = $jobLocation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getJobLocation() {
        return $this->properties['jobLocation'];
    }

    /**
     * A description of any security clearance requirements of the job.
     *
     * @param $securityClearanceRequirement |
     * @return static
     **/
    public function setSecurityClearanceRequirement($securityClearanceRequirement): static {
        $this->properties['securityClearanceRequirement'] = $securityClearanceRequirement;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSecurityClearanceRequirement() {
        return $this->properties['securityClearanceRequirement'];
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
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
     *
     * @param $salaryCurrency 
     * @return static
     **/
    public function setSalaryCurrency($salaryCurrency): static {
        $this->properties['salaryCurrency'] = $salaryCurrency;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSalaryCurrency() {
        return $this->properties['salaryCurrency'];
    }

    /**
     * Description of benefits associated with the job.
     *
     * @param $jobBenefits 
     * @return static
     **/
    public function setJobBenefits($jobBenefits): static {
        $this->properties['jobBenefits'] = $jobBenefits;

        return $this;
    }

    /**
     * @return 
     **/
    public function getJobBenefits() {
        return $this->properties['jobBenefits'];
    }

    /**
     * A description of the job location (e.g. TELECOMMUTE for telecommute jobs).
     *
     * @param $jobLocationType 
     * @return static
     **/
    public function setJobLocationType($jobLocationType): static {
        $this->properties['jobLocationType'] = $jobLocationType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getJobLocationType() {
        return $this->properties['jobLocationType'];
    }

    /**
     * The Occupation for the JobPosting.
     *
     * @param $relevantOccupation 
     * @return static
     **/
    public function setRelevantOccupation($relevantOccupation): static {
        $this->properties['relevantOccupation'] = $relevantOccupation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRelevantOccupation() {
        return $this->properties['relevantOccupation'];
    }

    /**
     * The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions is unclear or not known.
     *
     * @param $totalJobOpenings 
     * @return static
     **/
    public function setTotalJobOpenings($totalJobOpenings): static {
        $this->properties['totalJobOpenings'] = $totalJobOpenings;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTotalJobOpenings() {
        return $this->properties['totalJobOpenings'];
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
     * The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be in a physical office. Note: This should not be used for citizenship or work visa requirements.
     *
     * @param $applicantLocationRequirements 
     * @return static
     **/
    public function setApplicantLocationRequirements($applicantLocationRequirements): static {
        $this->properties['applicantLocationRequirements'] = $applicantLocationRequirements;

        return $this;
    }

    /**
     * @return 
     **/
    public function getApplicantLocationRequirements() {
        return $this->properties['applicantLocationRequirements'];
    }

    /**
     * Indicates whether an [[url]] that is associated with a [[JobPosting]] enables direct application for the job, via the posting website. A job posting is considered to have directApply of [[True]] if an application process for the specified job can be directly initiated via the url(s) given (noting that e.g. multiple internet domains might nevertheless be involved at an implementation level). A value of [[False]] is appropriate if there is no clear path to applying directly online for the specified job, navigating directly from the JobPosting url(s) supplied.
     *
     * @param $directApply 
     * @return static
     **/
    public function setDirectApply($directApply): static {
        $this->properties['directApply'] = $directApply;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDirectApply() {
        return $this->properties['directApply'];
    }

    /**
     * A description of the employer, career opportunities and work environment for this position.
     *
     * @param $employerOverview 
     * @return static
     **/
    public function setEmployerOverview($employerOverview): static {
        $this->properties['employerOverview'] = $employerOverview;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEmployerOverview() {
        return $this->properties['employerOverview'];
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     * @param $validThrough |
     * @return static
     **/
    public function setValidThrough($validThrough): static {
        $this->properties['validThrough'] = $validThrough;

        return $this;
    }

    /**
     * @return |
     **/
    public function getValidThrough() {
        return $this->properties['validThrough'];
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
     * A description of any sensory requirements and levels necessary to function on the job, including hearing and vision. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
     *
     * @param $sensoryRequirement ||
     * @return static
     **/
    public function setSensoryRequirement($sensoryRequirement): static {
        $this->properties['sensoryRequirement'] = $sensoryRequirement;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getSensoryRequirement() {
        return $this->properties['sensoryRequirement'];
    }

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
     *
     * @param $workHours 
     * @return static
     **/
    public function setWorkHours($workHours): static {
        $this->properties['workHours'] = $workHours;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWorkHours() {
        return $this->properties['workHours'];
    }

    /**
     * Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.
     *
     * @param $employmentUnit 
     * @return static
     **/
    public function setEmploymentUnit($employmentUnit): static {
        $this->properties['employmentUnit'] = $employmentUnit;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEmploymentUnit() {
        return $this->properties['employmentUnit'];
    }

    /**
     * Indicates whether a [[JobPosting]] will accept experience (as indicated by [[OccupationalExperienceRequirements]]) in place of its formal educational qualifications (as indicated by [[educationRequirements]]). If true, indicates that satisfying one of these requirements is sufficient.
     *
     * @param $experienceInPlaceOfEducation 
     * @return static
     **/
    public function setExperienceInPlaceOfEducation($experienceInPlaceOfEducation): static {
        $this->properties['experienceInPlaceOfEducation'] = $experienceInPlaceOfEducation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getExperienceInPlaceOfEducation() {
        return $this->properties['experienceInPlaceOfEducation'];
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
     * The date on which a successful applicant for this job would be expected to start work. Choose a specific date in the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
     *
     * @param $jobStartDate |
     * @return static
     **/
    public function setJobStartDate($jobStartDate): static {
        $this->properties['jobStartDate'] = $jobStartDate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getJobStartDate() {
        return $this->properties['jobStartDate'];
    }

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     * @param $baseSalary ||
     * @return static
     **/
    public function setBaseSalary($baseSalary): static {
        $this->properties['baseSalary'] = $baseSalary;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getBaseSalary() {
        return $this->properties['baseSalary'];
    }

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     * @param $incentives 
     * @return static
     **/
    public function setIncentives($incentives): static {
        $this->properties['incentives'] = $incentives;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIncentives() {
        return $this->properties['incentives'];
    }

    /**
     * Contact details for further information relevant to this job posting.
     *
     * @param $applicationContact 
     * @return static
     **/
    public function setApplicationContact($applicationContact): static {
        $this->properties['applicationContact'] = $applicationContact;

        return $this;
    }

    /**
     * @return 
     **/
    public function getApplicationContact() {
        return $this->properties['applicationContact'];
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

    /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
     *
     * @param $specialCommitments 
     * @return static
     **/
    public function setSpecialCommitments($specialCommitments): static {
        $this->properties['specialCommitments'] = $specialCommitments;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSpecialCommitments() {
        return $this->properties['specialCommitments'];
    }

    /**
     * The industry associated with the job position.
     *
     * @param $industry |
     * @return static
     **/
    public function setIndustry($industry): static {
        $this->properties['industry'] = $industry;

        return $this;
    }

    /**
     * @return |
     **/
    public function getIndustry() {
        return $this->properties['industry'];
    }

    /**
     * Description of benefits associated with the job.
     *
     * @param $benefits 
     * @return static
     **/
    public function setBenefits($benefits): static {
        $this->properties['benefits'] = $benefits;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBenefits() {
        return $this->properties['benefits'];
    }

    /**
     * The title of the job.
     *
     * @param $title 
     * @return static
     **/
    public function setTitle($title): static {
        $this->properties['title'] = $title;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTitle() {
        return $this->properties['title'];
    }


}