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
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class NewsMediaOrganizationSchema extends OrganizationSchema
{
    public static function factory(): NewsMediaOrganizationSchema
    {
        return new NewsMediaOrganizationSchema('https://schema.org/', 'NewsMediaOrganization');
    }

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on both staffing and sources, typically providing staffing data.
     *
     * @param $diversityPolicy |
     * @return static
     **/
    public function setDiversityPolicy($diversityPolicy): static {
        $this->properties['diversityPolicy'] = $diversityPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDiversityPolicy() {
        return $this->properties['diversityPolicy'];
    }

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards of behavior expected by the organization.
     *
     * @param $ethicsPolicy |
     * @return static
     **/
    public function setEthicsPolicy($ethicsPolicy): static {
        $this->properties['ethicsPolicy'] = $ethicsPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getEthicsPolicy() {
        return $this->properties['ethicsPolicy'];
    }

    /**
     * For a [[NewsMediaOrganization]], a link to the masthead page or a page listing top editorial management.
     *
     * @param $masthead |
     * @return static
     **/
    public function setMasthead($masthead): static {
        $this->properties['masthead'] = $masthead;

        return $this;
    }

    /**
     * @return |
     **/
    public function getMasthead() {
        return $this->properties['masthead'];
    }

    /**
     * Disclosure about verification and fact-checking processes for a [[NewsMediaOrganization]] or other fact-checking [[Organization]].
     *
     * @param $verificationFactCheckingPolicy |
     * @return static
     **/
    public function setVerificationFactCheckingPolicy($verificationFactCheckingPolicy): static {
        $this->properties['verificationFactCheckingPolicy'] = $verificationFactCheckingPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getVerificationFactCheckingPolicy() {
        return $this->properties['verificationFactCheckingPolicy'];
    }

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement explaining when authors of articles are not named in bylines.
     *
     * @param $noBylinesPolicy |
     * @return static
     **/
    public function setNoBylinesPolicy($noBylinesPolicy): static {
        $this->properties['noBylinesPolicy'] = $noBylinesPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getNoBylinesPolicy() {
        return $this->properties['noBylinesPolicy'];
    }

    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     *
     * @param $unnamedSourcesPolicy |
     * @return static
     **/
    public function setUnnamedSourcesPolicy($unnamedSourcesPolicy): static {
        $this->properties['unnamedSourcesPolicy'] = $unnamedSourcesPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getUnnamedSourcesPolicy() {
        return $this->properties['unnamedSourcesPolicy'];
    }

    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     *
     * @param $correctionsPolicy |
     * @return static
     **/
    public function setCorrectionsPolicy($correctionsPolicy): static {
        $this->properties['correctionsPolicy'] = $correctionsPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getCorrectionsPolicy() {
        return $this->properties['correctionsPolicy'];
    }

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media setting, this is with particular reference to editorial independence.   Note that the [[funder]] is also available and can be used to make basic funder information machine-readable.
     *
     * @param $ownershipFundingInfo |||
     * @return static
     **/
    public function setOwnershipFundingInfo($ownershipFundingInfo): static {
        $this->properties['ownershipFundingInfo'] = $ownershipFundingInfo;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getOwnershipFundingInfo() {
        return $this->properties['ownershipFundingInfo'];
    }

    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might be for example ASNE or RTDNA (US) reports, or self-reported.
     *
     * @param $diversityStaffingReport |
     * @return static
     **/
    public function setDiversityStaffingReport($diversityStaffingReport): static {
        $this->properties['diversityStaffingReport'] = $diversityStaffingReport;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDiversityStaffingReport() {
        return $this->properties['diversityStaffingReport'];
    }

    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     *
     * @param $actionableFeedbackPolicy |
     * @return static
     **/
    public function setActionableFeedbackPolicy($actionableFeedbackPolicy): static {
        $this->properties['actionableFeedbackPolicy'] = $actionableFeedbackPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getActionableFeedbackPolicy() {
        return $this->properties['actionableFeedbackPolicy'];
    }

    /**
     * For a [[NewsMediaOrganization]], a statement on coverage priorities, including any public agenda or stance on issues.
     *
     * @param $missionCoveragePrioritiesPolicy |
     * @return static
     **/
    public function setMissionCoveragePrioritiesPolicy($missionCoveragePrioritiesPolicy): static {
        $this->properties['missionCoveragePrioritiesPolicy'] = $missionCoveragePrioritiesPolicy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getMissionCoveragePrioritiesPolicy() {
        return $this->properties['missionCoveragePrioritiesPolicy'];
    }


}
