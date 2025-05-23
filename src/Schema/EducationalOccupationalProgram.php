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
 * A program offered by an institution which determines the learning progress to
 * achieve an outcome, usually a credential like a degree or certificate. This
 * would define a discrete set of opportunities (e.g., job, courses) that together
 * constitute a program with a clear start, end, set of requirements, and
 * transition to a new occupational opportunity (e.g., a job), or sometimes a
 * higher educational opportunity (e.g., an advanced degree).
 *
 * @see https://schema.org/EducationalOccupationalProgram
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class EducationalOccupationalProgram extends Intangible
{
    public static function factory(): EducationalOccupationalProgram
    {
        return new EducationalOccupationalProgram('https://schema.org/', 'EducationalOccupationalProgram');
    }

    /**
     * The expected length of time to complete the program if attending full-time.
     *
     * @param $timeToComplete \LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setTimeToComplete($timeToComplete): static {
        $this->properties['timeToComplete'] = $timeToComplete;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getTimeToComplete() {
        return $this->properties['timeToComplete'];
    }
    /**
     * The number of times terms of study are offered per year. Semesters and quarters
     * are common units for term. For example, if the student can only take 2 semesters
     * for the program in one year, then termsPerYear should be 2.
     *
     * @param $termsPerYear \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setTermsPerYear($termsPerYear): static {
        $this->properties['termsPerYear'] = $termsPerYear;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getTermsPerYear() {
        return $this->properties['termsPerYear'];
    }
    /**
     * A description of the qualification, award, certificate, diploma or other
     * occupational credential awarded as a consequence of successful completion of
     * this course or program.
     *
     * @param $occupationalCredentialAwarded \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\EducationalOccupationalCredential|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setOccupationalCredentialAwarded($occupationalCredentialAwarded): static {
        $this->properties['occupationalCredentialAwarded'] = $occupationalCredentialAwarded;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\EducationalOccupationalCredential|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getOccupationalCredentialAwarded() {
        return $this->properties['occupationalCredentialAwarded'];
    }
    /**
     * A course or class that is one of the learning opportunities that constitute an
     * educational / occupational program. No information is implied about whether the
     * course is mandatory or optional; no guarantee is implied about whether the
     * course will be available to everyone on the program.
     *
     * @param $hasCourse \LengthOfRope\JSONLD\Schema\Course
     * @return static
     **/
    public function setHasCourse($hasCourse): static {
        $this->properties['hasCourse'] = $hasCourse;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Course
     **/
    public function getHasCourse() {
        return $this->properties['hasCourse'];
    }
    /**
     * The date on which the program stops collecting applications for the next
     * enrollment cycle. Flexible application deadlines (for example, a program with
     * rolling admissions) can be described in a textual string, rather than as a
     * DateTime.
     *
     * @param $applicationDeadline \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setApplicationDeadline($applicationDeadline): static {
        $this->properties['applicationDeadline'] = $applicationDeadline;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getApplicationDeadline() {
        return $this->properties['applicationDeadline'];
    }
    /**
     * Similar to courseMode, the medium or means of delivery of the program as a
     * whole. The value may either be a text label (e.g. "online", "onsite" or
     * "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL
     * reference to a term from a controlled vocabulary (e.g.
     * https://ceds.ed.gov/element/001311#Asynchronous ).
     *
     * @param $educationalProgramMode \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEducationalProgramMode($educationalProgramMode): static {
        $this->properties['educationalProgramMode'] = $educationalProgramMode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEducationalProgramMode() {
        return $this->properties['educationalProgramMode'];
    }
    /**
     * The day of the week for which these opening hours are valid.
     *
     * @param $dayOfWeek \LengthOfRope\JSONLD\Schema\DayOfWeek
     * @return static
     **/
    public function setDayOfWeek($dayOfWeek): static {
        $this->properties['dayOfWeek'] = $dayOfWeek;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DayOfWeek
     **/
    public function getDayOfWeek() {
        return $this->properties['dayOfWeek'];
    }
    /**
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $startDate \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setStartDate($startDate): static {
        $this->properties['startDate'] = $startDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getStartDate() {
        return $this->properties['startDate'];
    }
    /**
     * The amount of time in a term as defined by the institution. A term is a length
     * of time where students take one or more classes. Semesters and quarters are
     * common units for term.
     *
     * @param $termDuration \LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setTermDuration($termDuration): static {
        $this->properties['termDuration'] = $termDuration;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getTermDuration() {
        return $this->properties['termDuration'];
    }
    /**
     * The date at which the program begins collecting applications for the next
     * enrollment cycle.
     *
     * @param $applicationStartDate \LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setApplicationStartDate($applicationStartDate): static {
        $this->properties['applicationStartDate'] = $applicationStartDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getApplicationStartDate() {
        return $this->properties['applicationStartDate'];
    }
    /**
     * The estimated salary earned while in the program.
     *
     * @param $trainingSalary \LengthOfRope\JSONLD\Schema\MonetaryAmountDistribution
     * @return static
     **/
    public function setTrainingSalary($trainingSalary): static {
        $this->properties['trainingSalary'] = $trainingSalary;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmountDistribution
     **/
    public function getTrainingSalary() {
        return $this->properties['trainingSalary'];
    }
    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on behalf
     * of the provider. A provider may also serve as the seller.
     *
     * @param $provider \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setProvider($provider): static {
        $this->properties['provider'] = $provider;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getProvider() {
        return $this->properties['provider'];
    }
    /**
     * A financial aid type or program which students may use to pay for tuition or
     * fees associated with the program.
     *
     * @param $financialAidEligible \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setFinancialAidEligible($financialAidEligible): static {
        $this->properties['financialAidEligible'] = $financialAidEligible;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getFinancialAidEligible() {
        return $this->properties['financialAidEligible'];
    }
    /**
     * The maximum number of students who may be enrolled in the program.
     *
     * @param $maximumEnrollment \LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setMaximumEnrollment($maximumEnrollment): static {
        $this->properties['maximumEnrollment'] = $maximumEnrollment;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getMaximumEnrollment() {
        return $this->properties['maximumEnrollment'];
    }
    /**
     * The time of day the program normally runs. For example, "evenings".
     *
     * @param $timeOfDay \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTimeOfDay($timeOfDay): static {
        $this->properties['timeOfDay'] = $timeOfDay;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTimeOfDay() {
        return $this->properties['timeOfDay'];
    }
    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product,
     * rent the DVD of a movie, perform a service, or give away tickets to an event.
     * Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell,
     * lease, etc. This property can also be used to describe a [[Demand]]. While this
     * property is listed as expected on a number of common types, it can be used in
     * others. In that case, using a second type, such as Product or a subtype of
     * Product, can clarify the nature of the offer.
     *
     *
     * @param $offers \LengthOfRope\JSONLD\Schema\Demand|\LengthOfRope\JSONLD\Schema\Offer
     * @return static
     **/
    public function setOffers($offers): static {
        $this->properties['offers'] = $offers;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Demand|\LengthOfRope\JSONLD\Schema\Offer
     **/
    public function getOffers() {
        return $this->properties['offers'];
    }
    /**
     * The number of credits or units a full-time student would be expected to take in
     * 1 term however 'term' is defined by the institution.
     *
     * @param $typicalCreditsPerTerm \LengthOfRope\JSONLD\DataType\TypeInteger|\LengthOfRope\JSONLD\Schema\StructuredValue
     * @return static
     **/
    public function setTypicalCreditsPerTerm($typicalCreditsPerTerm): static {
        $this->properties['typicalCreditsPerTerm'] = $typicalCreditsPerTerm;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger|\LengthOfRope\JSONLD\Schema\StructuredValue
     **/
    public function getTypicalCreditsPerTerm() {
        return $this->properties['typicalCreditsPerTerm'];
    }
    /**
     * A description of the qualification, award, certificate, diploma or other
     * educational credential awarded as a consequence of successful completion of this
     * course or program.
     *
     * @param $educationalCredentialAwarded \LengthOfRope\JSONLD\Schema\EducationalOccupationalCredential|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEducationalCredentialAwarded($educationalCredentialAwarded): static {
        $this->properties['educationalCredentialAwarded'] = $educationalCredentialAwarded;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\EducationalOccupationalCredential|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEducationalCredentialAwarded() {
        return $this->properties['educationalCredentialAwarded'];
    }
    /**
     * Prerequisites for enrolling in the program.
     *
     * @param $programPrerequisites \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\EducationalOccupationalCredential|\LengthOfRope\JSONLD\Schema\AlignmentObject|\LengthOfRope\JSONLD\Schema\Course
     * @return static
     **/
    public function setProgramPrerequisites($programPrerequisites): static {
        $this->properties['programPrerequisites'] = $programPrerequisites;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\EducationalOccupationalCredential|\LengthOfRope\JSONLD\Schema\AlignmentObject|\LengthOfRope\JSONLD\Schema\Course
     **/
    public function getProgramPrerequisites() {
        return $this->properties['programPrerequisites'];
    }
    /**
     * The type of educational or occupational program. For example, classroom,
     * internship, alternance, etc.
     *
     * @param $programType \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setProgramType($programType): static {
        $this->properties['programType'] = $programType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getProgramType() {
        return $this->properties['programType'];
    }
    /**
     * The number of credits or units awarded by a Course or required to complete an
     * EducationalOccupationalProgram.
     *
     * @param $numberOfCredits \LengthOfRope\JSONLD\Schema\StructuredValue|\LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setNumberOfCredits($numberOfCredits): static {
        $this->properties['numberOfCredits'] = $numberOfCredits;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\StructuredValue|\LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getNumberOfCredits() {
        return $this->properties['numberOfCredits'];
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
     * @param $occupationalCategory \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\CategoryCode
     * @return static
     **/
    public function setOccupationalCategory($occupationalCategory): static {
        $this->properties['occupationalCategory'] = $occupationalCategory;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\CategoryCode
     **/
    public function getOccupationalCategory() {
        return $this->properties['occupationalCategory'];
    }
    /**
     * The expected salary upon completing the training.
     *
     * @param $salaryUponCompletion \LengthOfRope\JSONLD\Schema\MonetaryAmountDistribution
     * @return static
     **/
    public function setSalaryUponCompletion($salaryUponCompletion): static {
        $this->properties['salaryUponCompletion'] = $salaryUponCompletion;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmountDistribution
     **/
    public function getSalaryUponCompletion() {
        return $this->properties['salaryUponCompletion'];
    }
    /**
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $endDate \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setEndDate($endDate): static {
        $this->properties['endDate'] = $endDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getEndDate() {
        return $this->properties['endDate'];
    }
}
