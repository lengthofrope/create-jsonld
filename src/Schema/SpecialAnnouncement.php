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
 * A SpecialAnnouncement combines a simple date-stamped textual information update
 * *       with contextualized Web links and other structured data.  It represents
 * an information update made by a
 * *       locally-oriented organization, for example schools, pharmacies,
 * healthcare providers,  community groups, police,
 * *       local government.
 *
 * * For work in progress guidelines on Coronavirus-related markup see [this
 * doc](https://docs.google.com/document/d/14ikaGCKxo50rRM7nvKSlbUpjyIk2WMQd3IkB1lItlrM/edit#).
 *
 * * The motivating scenario for SpecialAnnouncement is the [Coronavirus
 * pandemic](https://en.wikipedia.org/wiki/2019%E2%80%9320_coronavirus_pandemic),
 * and the initial vocabulary is oriented to this urgent situation. Schema.org
 * * expect to improve the markup iteratively as it is deployed and as feedback
 * emerges from use. In addition to our
 * * usual [Github entry](https://github.com/schemaorg/schemaorg/issues/2490),
 * feedback comments can also be provided in [this
 * document](https://docs.google.com/document/d/1fpdFFxk8s87CWwACs53SGkYv3aafSxz_DTtOQxMrBJQ/edit#).
 *
 *
 * * While this schema is designed to communicate urgent crisis-related
 * information, it is not the same as an emergency warning technology like
 * [CAP](https://en.wikipedia.org/wiki/Common_Alerting_Protocol), although there
 * may be overlaps. The intent is to cover
 * * the kinds of everyday practical information being posted to existing websites
 * during an emergency situation.
 *
 * * Several kinds of information can be provided:
 *
 * * We encourage the provision of "name", "text", "datePosted", "expires" (if
 * appropriate), "category" and
 * * "url" as a simple baseline. It is important to provide a value for "category"
 * where possible, most ideally as a well known
 * * URL from Wikipedia or Wikidata. In the case of the 2019-2020 Coronavirus
 * pandemic, this should be
 * "https://en.wikipedia.org/w/index.php?title=2019-20\_coronavirus\_pandemic" or
 * "https://www.wikidata.org/wiki/Q81068910".
 *
 * * For many of the possible properties, values can either be simple links or an
 * inline description, depending on whether a summary is available. For a link,
 * provide just the URL of the appropriate page as the property's value. For an
 * inline description, use a [[WebContent]] type, and provide the url as a property
 * of that, alongside at least a simple "[[text]]" summary of the page. It is
 * * unlikely that a single SpecialAnnouncement will need all of the possible
 * properties simultaneously.
 *
 * * We expect that in many cases the page referenced might contain more
 * specialized structured data, e.g. contact info, [[openingHours]], [[Event]],
 * [[FAQPage]] etc. By linking to those pages from a [[SpecialAnnouncement]] you
 * can help make it clearer that the events are related to the situation (e.g.
 * Coronavirus) indicated by the [[category]] property of the
 * [[SpecialAnnouncement]].
 *
 * * Many [[SpecialAnnouncement]]s will relate to particular regions and to
 * identifiable local organizations. Use [[spatialCoverage]] for the region, and
 * [[announcementLocation]] to indicate specific [[LocalBusiness]]es and
 * [[CivicStructure]]s. If the announcement affects both a particular region and a
 * specific location (for example, a library closure that serves an entire region),
 * use both [[spatialCoverage]] and [[announcementLocation]].
 *
 * * The [[about]] property can be used to indicate entities that are the focus of
 * the announcement. We now recommend using [[about]] only
 * * for representing non-location entities (e.g. a [[Course]] or a
 * [[RadioStation]]). For places, use [[announcementLocation]] and
 * [[spatialCoverage]]. Consumers of this markup should be aware that the initial
 * design encouraged the use of [[about]] for locations too.
 *
 * * The basic content of [[SpecialAnnouncement]] is similar to that of an
 * [RSS](https://en.wikipedia.org/wiki/RSS) or
 * [Atom](https://en.wikipedia.org/wiki/Atom_(Web_standard)) feed. For publishers
 * without such feeds, basic feed-like information can be shared by posting
 * * [[SpecialAnnouncement]] updates in a page, e.g. using JSON-LD. For sites with
 * Atom/RSS functionality, you can point to a feed
 * * with the [[webFeed]] property. This can be a simple URL, or an inline
 * [[DataFeed]] object, with [[encodingFormat]] providing
 * * media type information, e.g. "application/rss+xml" or "application/atom+xml".
 *
 *
 * @see https://schema.org/SpecialAnnouncement
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SpecialAnnouncement extends CreativeWork
{
    public static function factory(): SpecialAnnouncement
    {
        return new SpecialAnnouncement('https://schema.org/', 'SpecialAnnouncement');
    }

    /**
     * Indicates a specific [[CivicStructure]] or [[LocalBusiness]] associated with the
     * SpecialAnnouncement. For example, a specific testing facility or business with
     * special opening hours. For a larger geographic region like a quarantine of an
     * entire region, use [[spatialCoverage]].
     *
     * @param $announcementLocation \LengthOfRope\JSONLD\Schema\CivicStructure|\LengthOfRope\JSONLD\Schema\LocalBusiness
     * @return static
     **/
    public function setAnnouncementLocation($announcementLocation): static {
        $this->properties['announcementLocation'] = $announcementLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CivicStructure|\LengthOfRope\JSONLD\Schema\LocalBusiness
     **/
    public function getAnnouncementLocation() {
        return $this->properties['announcementLocation'];
    }
    /**
     * Information about school closures.
     *
     * @param $schoolClosuresInfo \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\WebContent
     * @return static
     **/
    public function setSchoolClosuresInfo($schoolClosuresInfo): static {
        $this->properties['schoolClosuresInfo'] = $schoolClosuresInfo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\WebContent
     **/
    public function getSchoolClosuresInfo() {
        return $this->properties['schoolClosuresInfo'];
    }
    /**
     * Information about public transport closures.
     *
     * @param $publicTransportClosuresInfo \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\WebContent
     * @return static
     **/
    public function setPublicTransportClosuresInfo($publicTransportClosuresInfo): static {
        $this->properties['publicTransportClosuresInfo'] = $publicTransportClosuresInfo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\WebContent
     **/
    public function getPublicTransportClosuresInfo() {
        return $this->properties['publicTransportClosuresInfo'];
    }
    /**
     * Information about getting tested (for a [[MedicalCondition]]), e.g. in the
     * context of a pandemic.
     *
     * @param $gettingTestedInfo \LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setGettingTestedInfo($gettingTestedInfo): static {
        $this->properties['gettingTestedInfo'] = $gettingTestedInfo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getGettingTestedInfo() {
        return $this->properties['gettingTestedInfo'];
    }
    /**
     * Indicates a page with news updates and guidelines. This could often be (but is
     * not required to be) the main page containing [[SpecialAnnouncement]] markup on a
     * site.
     *
     * @param $newsUpdatesAndGuidelines \LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setNewsUpdatesAndGuidelines($newsUpdatesAndGuidelines): static {
        $this->properties['newsUpdatesAndGuidelines'] = $newsUpdatesAndGuidelines;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getNewsUpdatesAndGuidelines() {
        return $this->properties['newsUpdatesAndGuidelines'];
    }
    /**
     * Information about travel bans, e.g. in the context of a pandemic.
     *
     * @param $travelBans \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\WebContent
     * @return static
     **/
    public function setTravelBans($travelBans): static {
        $this->properties['travelBans'] = $travelBans;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\WebContent
     **/
    public function getTravelBans() {
        return $this->properties['travelBans'];
    }
    /**
     * Publication date of an online listing.
     *
     * @param $datePosted \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setDatePosted($datePosted): static {
        $this->properties['datePosted'] = $datePosted;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getDatePosted() {
        return $this->properties['datePosted'];
    }
    /**
     * Information about disease prevention.
     *
     * @param $diseasePreventionInfo \LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setDiseasePreventionInfo($diseasePreventionInfo): static {
        $this->properties['diseasePreventionInfo'] = $diseasePreventionInfo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getDiseasePreventionInfo() {
        return $this->properties['diseasePreventionInfo'];
    }
    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @param $category \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\PhysicalActivityCategory
     * @return static
     **/
    public function setCategory($category): static {
        $this->properties['category'] = $category;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\PhysicalActivityCategory
     **/
    public function getCategory() {
        return $this->properties['category'];
    }
    /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of
     * date-stamped updates. This is usually RSS or Atom.
     *
     * @param $webFeed \LengthOfRope\JSONLD\Schema\DataFeed|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setWebFeed($webFeed): static {
        $this->properties['webFeed'] = $webFeed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DataFeed|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getWebFeed() {
        return $this->properties['webFeed'];
    }
    /**
     * Guidelines about quarantine rules, e.g. in the context of a pandemic.
     *
     * @param $quarantineGuidelines \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\WebContent
     * @return static
     **/
    public function setQuarantineGuidelines($quarantineGuidelines): static {
        $this->properties['quarantineGuidelines'] = $quarantineGuidelines;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\WebContent
     **/
    public function getQuarantineGuidelines() {
        return $this->properties['quarantineGuidelines'];
    }
    /**
     * governmentBenefitsInfo provides information about government benefits associated
     * with a SpecialAnnouncement.
     *
     * @param $governmentBenefitsInfo \LengthOfRope\JSONLD\Schema\GovernmentService
     * @return static
     **/
    public function setGovernmentBenefitsInfo($governmentBenefitsInfo): static {
        $this->properties['governmentBenefitsInfo'] = $governmentBenefitsInfo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\GovernmentService
     **/
    public function getGovernmentBenefitsInfo() {
        return $this->properties['governmentBenefitsInfo'];
    }
    /**
     * Statistical information about the spread of a disease, either as [[WebContent]],
     * or
     * described directly as a [[Dataset]], or the specific [[Observation]]s in the
     * dataset. When a [[WebContent]] URL is
     * provided, the page indicated might also contain more such markup.
     *
     * @param $diseaseSpreadStatistics \LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\Schema\Dataset|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Observation
     * @return static
     **/
    public function setDiseaseSpreadStatistics($diseaseSpreadStatistics): static {
        $this->properties['diseaseSpreadStatistics'] = $diseaseSpreadStatistics;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\Schema\Dataset|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Observation
     **/
    public function getDiseaseSpreadStatistics() {
        return $this->properties['diseaseSpreadStatistics'];
    }
}
