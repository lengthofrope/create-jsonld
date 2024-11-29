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
        return new WebPageSchema('https://schema.org/', 'WebPage');
    }

    /**
     * A link related to this web page, for example to other related web pages.
     *
     * @param $relatedLink 
     **/
    public function setRelatedLink($relatedLink) {
        $this->properties['relatedLink'] = $relatedLink;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRelatedLink() {
        return $this->properties['relatedLink'];
    }

    /**
     * A set of links that can help a user understand and navigate a website hierarchy.
     *
     * @param $breadcrumb |
     **/
    public function setBreadcrumb($breadcrumb) {
        $this->properties['breadcrumb'] = $breadcrumb;

        return $this;
    }

    /**
     * @return |
     **/
    public function getBreadcrumb() {
        return $this->properties['breadcrumb'];
    }

    /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
     *
     * @param $reviewedBy |
     **/
    public function setReviewedBy($reviewedBy) {
        $this->properties['reviewedBy'] = $reviewedBy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getReviewedBy() {
        return $this->properties['reviewedBy'];
    }

    /**
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     *
     * @param $significantLink 
     **/
    public function setSignificantLink($significantLink) {
        $this->properties['significantLink'] = $significantLink;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSignificantLink() {
        return $this->properties['significantLink'];
    }

    /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
     *
     * @param $lastReviewed 
     **/
    public function setLastReviewed($lastReviewed) {
        $this->properties['lastReviewed'] = $lastReviewed;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLastReviewed() {
        return $this->properties['lastReviewed'];
    }

    /**
     * Indicates the main image on the page.
     *
     * @param $primaryImageOfPage 
     **/
    public function setPrimaryImageOfPage($primaryImageOfPage) {
        $this->properties['primaryImageOfPage'] = $primaryImageOfPage;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPrimaryImageOfPage() {
        return $this->properties['primaryImageOfPage'];
    }

    /**
     * The most significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     *
     * @param $significantLinks 
     **/
    public function setSignificantLinks($significantLinks) {
        $this->properties['significantLinks'] = $significantLinks;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSignificantLinks() {
        return $this->properties['significantLinks'];
    }

    /**
     * One of the domain specialities to which this web page's content applies.
     *
     * @param $specialty 
     **/
    public function setSpecialty($specialty) {
        $this->properties['specialty'] = $specialty;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSpecialty() {
        return $this->properties['specialty'];
    }

    /**
     * Indicates if this web page element is the main subject of the page.
     *
     * @param $mainContentOfPage 
     **/
    public function setMainContentOfPage($mainContentOfPage) {
        $this->properties['mainContentOfPage'] = $mainContentOfPage;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMainContentOfPage() {
        return $this->properties['mainContentOfPage'];
    }

    /**
     * Indicates sections of a Web page that are particularly 'speakable' in the sense of being highlighted as being especially appropriate for text-to-speech conversion. Other sections of a page may also be usefully spoken in particular circumstances; the 'speakable' property serves to indicate the parts most likely to be generally useful for speech.

The *speakable* property can be repeated an arbitrary number of times, with three kinds of possible 'content-locator' values:

1.) *id-value* URL references - uses *id-value* of an element in the page being annotated. The simplest use of *speakable* has (potentially relative) URL values, referencing identified sections of the document concerned.

2.) CSS Selectors - addresses content in the annotated page, e.g. via class attribute. Use the [[cssSelector]] property.

3.)  XPaths - addresses content via XPaths (assuming an XML view of the content). Use the [[xpath]] property.


For more sophisticated markup of speakable sections beyond simple ID references, either CSS selectors or XPath expressions to pick out document section(s) as speakable. For this
we define a supporting type, [[SpeakableSpecification]]  which is defined to be a possible value of the *speakable* property.
         
     *
     * @param $speakable |
     **/
    public function setSpeakable($speakable) {
        $this->properties['speakable'] = $speakable;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSpeakable() {
        return $this->properties['speakable'];
    }


}
