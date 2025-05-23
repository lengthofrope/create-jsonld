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
 * A News/Media organization such as a newspaper or TV station.
 *
 * @see https://schema.org/NewsMediaOrganization
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class NewsMediaOrganization extends Organization
{
    public static function factory(): NewsMediaOrganization
    {
        return new NewsMediaOrganization('https://schema.org/', 'NewsMediaOrganization');
    }

    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing
     * (in news media, the newsroom’s) disclosure and correction policy for errors.
     *
     * @param $correctionsPolicy \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setCorrectionsPolicy($correctionsPolicy): static {
        $this->properties['correctionsPolicy'] = $correctionsPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getCorrectionsPolicy() {
        return $this->properties['correctionsPolicy'];
    }
    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]),
     * a description of organizational ownership structure; funding and grants. In a
     * news/media setting, this is with particular reference to editorial independence.
     * Note that the [[funder]] is also available and can be used to make basic
     * funder information machine-readable.
     *
     * @param $ownershipFundingInfo \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\AboutPage|\LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setOwnershipFundingInfo($ownershipFundingInfo): static {
        $this->properties['ownershipFundingInfo'] = $ownershipFundingInfo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\AboutPage|\LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getOwnershipFundingInfo() {
        return $this->properties['ownershipFundingInfo'];
    }
    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement
     * about policy on use of unnamed sources and the decision process required.
     *
     * @param $unnamedSourcesPolicy \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setUnnamedSourcesPolicy($unnamedSourcesPolicy): static {
        $this->properties['unnamedSourcesPolicy'] = $unnamedSourcesPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getUnnamedSourcesPolicy() {
        return $this->properties['unnamedSourcesPolicy'];
    }
    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding
     * journalistic and publishing practices, or of a [[Restaurant]], a page describing
     * food source policies. In the case of a [[NewsMediaOrganization]], an
     * ethicsPolicy is typically a statement describing the personal, organizational,
     * and corporate standards of behavior expected by the organization.
     *
     * @param $ethicsPolicy \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setEthicsPolicy($ethicsPolicy): static {
        $this->properties['ethicsPolicy'] = $ethicsPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getEthicsPolicy() {
        return $this->properties['ethicsPolicy'];
    }
    /**
     * For a [[NewsMediaOrganization]], a statement on coverage priorities, including
     * any public agenda or stance on issues.
     *
     * @param $missionCoveragePrioritiesPolicy \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setMissionCoveragePrioritiesPolicy($missionCoveragePrioritiesPolicy): static {
        $this->properties['missionCoveragePrioritiesPolicy'] = $missionCoveragePrioritiesPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getMissionCoveragePrioritiesPolicy() {
        return $this->properties['missionCoveragePrioritiesPolicy'];
    }
    /**
     * For a [[NewsMediaOrganization]], a link to the masthead page or a page listing
     * top editorial management.
     *
     * @param $masthead \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setMasthead($masthead): static {
        $this->properties['masthead'] = $masthead;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getMasthead() {
        return $this->properties['masthead'];
    }
    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a
     * statement about public engagement activities (for news media, the newsroom’s),
     * including involving the public - digitally or otherwise -- in coverage
     * decisions, reporting and activities after publication.
     *
     * @param $actionableFeedbackPolicy \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setActionableFeedbackPolicy($actionableFeedbackPolicy): static {
        $this->properties['actionableFeedbackPolicy'] = $actionableFeedbackPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getActionableFeedbackPolicy() {
        return $this->properties['actionableFeedbackPolicy'];
    }
    /**
     * Statement on diversity policy by an [[Organization]] e.g. a
     * [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement
     * describing the newsroom’s diversity policy on both staffing and sources,
     * typically providing staffing data.
     *
     * @param $diversityPolicy \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setDiversityPolicy($diversityPolicy): static {
        $this->properties['diversityPolicy'] = $diversityPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getDiversityPolicy() {
        return $this->properties['diversityPolicy'];
    }
    /**
     * Disclosure about verification and fact-checking processes for a
     * [[NewsMediaOrganization]] or other fact-checking [[Organization]].
     *
     * @param $verificationFactCheckingPolicy \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setVerificationFactCheckingPolicy($verificationFactCheckingPolicy): static {
        $this->properties['verificationFactCheckingPolicy'] = $verificationFactCheckingPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getVerificationFactCheckingPolicy() {
        return $this->properties['verificationFactCheckingPolicy'];
    }
    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]),
     * a report on staffing diversity issues. In a news context this might be for
     * example ASNE or RTDNA (US) reports, or self-reported.
     *
     * @param $diversityStaffingReport \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Article
     * @return static
     **/
    public function setDiversityStaffingReport($diversityStaffingReport): static {
        $this->properties['diversityStaffingReport'] = $diversityStaffingReport;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Article
     **/
    public function getDiversityStaffingReport() {
        return $this->properties['diversityStaffingReport'];
    }
    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a
     * statement explaining when authors of articles are not named in bylines.
     *
     * @param $noBylinesPolicy \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setNoBylinesPolicy($noBylinesPolicy): static {
        $this->properties['noBylinesPolicy'] = $noBylinesPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getNoBylinesPolicy() {
        return $this->properties['noBylinesPolicy'];
    }
}
