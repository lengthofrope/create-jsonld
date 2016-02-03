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
 * A web page. Every web page is implicitly assumed to be declared to be of type WebPage, so the various properties about that webpage, such as <code>breadcrumb</code> may be used. We recommend explicit declaration if these properties are specified, but if they are found outside of an itemscope, they will be assumed to be about the page.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class WebPageSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new WebPageSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * A set of links that can help a user understand and navigate a website hierarchy.
     **/
    private $breadcrumb;
    public function setBreadcrumb($breadcrumb) {
        $this->breadcrumb = $breadcrumb;

        return $this;
    }

    /**
     * @return TextSchema|BreadcrumbListSchema     
     **/
    public function getBreadcrumb() {
        return $this->breadcrumb;
    }

    /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
     **/
    private $lastReviewed;
    public function setLastReviewed($lastReviewed) {
        $this->lastReviewed = $lastReviewed;

        return $this;
    }

    /**
     * @return DateSchema     
     **/
    public function getLastReviewed() {
        return $this->lastReviewed;
    }

    /**
     * Indicates if this web page element is the main subject of the page.
     **/
    private $mainContentOfPage;
    public function setMainContentOfPage($mainContentOfPage) {
        $this->mainContentOfPage = $mainContentOfPage;

        return $this;
    }

    /**
     * @return WebPageElementSchema     
     **/
    public function getMainContentOfPage() {
        return $this->mainContentOfPage;
    }

    /**
     * Indicates the main image on the page.
     **/
    private $primaryImageOfPage;
    public function setPrimaryImageOfPage($primaryImageOfPage) {
        $this->primaryImageOfPage = $primaryImageOfPage;

        return $this;
    }

    /**
     * @return ImageObjectSchema     
     **/
    public function getPrimaryImageOfPage() {
        return $this->primaryImageOfPage;
    }

    /**
     * A link related to this web page, for example to other related web pages.
     **/
    private $relatedLink;
    public function setRelatedLink($relatedLink) {
        $this->relatedLink = $relatedLink;

        return $this;
    }

    /**
     * @return URLSchema     
     **/
    public function getRelatedLink() {
        return $this->relatedLink;
    }

    /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
     **/
    private $reviewedBy;
    public function setReviewedBy($reviewedBy) {
        $this->reviewedBy = $reviewedBy;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     
     **/
    public function getReviewedBy() {
        return $this->reviewedBy;
    }

    /**
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     **/
    private $significantLink;
    public function setSignificantLink($significantLink) {
        $this->significantLink = $significantLink;

        return $this;
    }

    /**
     * @return URLSchema     
     **/
    public function getSignificantLink() {
        return $this->significantLink;
    }

    /**
     * The most significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     **/
    private $significantLinks;
    public function setSignificantLinks($significantLinks) {
        $this->significantLinks = $significantLinks;

        return $this;
    }

    /**
     * @return URLSchema     
     **/
    public function getSignificantLinks() {
        return $this->significantLinks;
    }

    /**
     * One of the domain specialities to which this web page's content applies.
     **/
    private $specialty;
    public function setSpecialty($specialty) {
        $this->specialty = $specialty;

        return $this;
    }

    /**
     * @return SpecialtySchema     
     **/
    public function getSpecialty() {
        return $this->specialty;
    }


}
