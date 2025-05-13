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
 * The most generic kind of creative work, including books, movies, photographs,
 * software programs, etc.
 *
 * @see https://schema.org/CreativeWork
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CreativeWork extends Thing
{
    public static function factory(): CreativeWork
    {
        return new CreativeWork('https://schema.org/', 'CreativeWork');
    }

    /**
     * The location where the CreativeWork was created, which may not be the same as
     * the location depicted in the CreativeWork.
     *
     * @param $locationCreated \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setLocationCreated($locationCreated): static {
        $this->properties['locationCreated'] = $locationCreated;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getLocationCreated() {
        return $this->properties['locationCreated'];
    }
    /**
     * Indicates whether this content is family friendly.
     *
     * @param $isFamilyFriendly \LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setIsFamilyFriendly($isFamilyFriendly): static {
        $this->properties['isFamilyFriendly'] = $isFamilyFriendly;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getIsFamilyFriendly() {
        return $this->properties['isFamilyFriendly'];
    }
    /**
     * A person or organization that supports (sponsors) something through some kind of
     * financial contribution.
     *
     * @param $funder \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setFunder($funder): static {
        $this->properties['funder'] = $funder;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getFunder() {
        return $this->properties['funder'];
    }
    /**
     * The person or organization who produced the work (e.g. music album, movie,
     * TV/radio series etc.).
     *
     * @param $producer \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setProducer($producer): static {
        $this->properties['producer'] = $producer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getProducer() {
        return $this->properties['producer'];
    }
    /**
     * The country of origin of something, including products as well as creative
     * works such as movie and TV content.
     *
     * In the case of TV and movie, this would be the country of the principle offices
     * of the production company or individual responsible for the movie. For other
     * kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and
     * properties such as [[contentLocation]] and [[locationCreated]] may be more
     * applicable.
     *
     * In the case of products, the country of origin of the product. The exact
     * interpretation of this may vary by context and product type, and cannot be fully
     * enumerated here.
     *
     * @param $countryOfOrigin \LengthOfRope\JSONLD\Schema\Country
     * @return static
     **/
    public function setCountryOfOrigin($countryOfOrigin): static {
        $this->properties['countryOfOrigin'] = $countryOfOrigin;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Country
     **/
    public function getCountryOfOrigin() {
        return $this->properties['countryOfOrigin'];
    }
    /**
     * Text that can be used to credit person(s) and/or organization(s) associated with
     * a published Creative Work.
     *
     * @param $creditText \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCreditText($creditText): static {
        $this->properties['creditText'] = $creditText;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCreditText() {
        return $this->properties['creditText'];
    }
    /**
     * A review of the item.
     *
     * @param $review \LengthOfRope\JSONLD\Schema\Review
     * @return static
     **/
    public function setReview($review): static {
        $this->properties['review'] = $review;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Review
     **/
    public function getReview() {
        return $this->properties['review'];
    }
    /**
     * Indicates a page or other link involved in archival of a [[CreativeWork]]. In
     * the case of [[MediaReview]], the items in a [[MediaReviewItem]] may often become
     * inaccessible, but be archived by archival, journalistic, activist, or law
     * enforcement organizations. In such cases, the referenced page may not directly
     * publish the content.
     *
     * @param $archivedAt \LengthOfRope\JSONLD\Schema\WebPage|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setArchivedAt($archivedAt): static {
        $this->properties['archivedAt'] = $archivedAt;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\WebPage|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getArchivedAt() {
        return $this->properties['archivedAt'];
    }
    /**
     * The schema.org [[usageInfo]] property indicates further information about a
     * [[CreativeWork]]. This property is applicable both to works that are freely
     * available and to those that require payment or other transactions. It can
     * reference additional information, e.g. community expectations on preferred
     * linking and citation conventions, as well as purchasing details. For something
     * that can be commercially licensed, usageInfo can provide detailed,
     * resource-specific information about licensing options.
     *
     * This property can be used alongside the license property which indicates
     * license(s) applicable to some piece of content. The usageInfo property can
     * provide information about other licensing options, e.g. acquiring commercial
     * usage rights for an image that is also available under non-commercial creative
     * commons licenses.
     *
     * @param $usageInfo \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setUsageInfo($usageInfo): static {
        $this->properties['usageInfo'] = $usageInfo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getUsageInfo() {
        return $this->properties['usageInfo'];
    }
    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @param $aggregateRating \LengthOfRope\JSONLD\Schema\AggregateRating
     * @return static
     **/
    public function setAggregateRating($aggregateRating): static {
        $this->properties['aggregateRating'] = $aggregateRating;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AggregateRating
     **/
    public function getAggregateRating() {
        return $this->properties['aggregateRating'];
    }
    /**
     * Headline of the article.
     *
     * @param $headline \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setHeadline($headline): static {
        $this->properties['headline'] = $headline;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getHeadline() {
        return $this->properties['headline'];
    }
    /**
     * A resource from which this work is derived or from which it is a modification or
     * adaptation.
     *
     * @param $isBasedOn \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setIsBasedOn($isBasedOn): static {
        $this->properties['isBasedOn'] = $isBasedOn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getIsBasedOn() {
        return $this->properties['isBasedOn'];
    }
    /**
     * The Organization on whose behalf the creator was working.
     *
     * @param $sourceOrganization \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setSourceOrganization($sourceOrganization): static {
        $this->properties['sourceOrganization'] = $sourceOrganization;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getSourceOrganization() {
        return $this->properties['sourceOrganization'];
    }
    /**
     * Content features of the resource, such as accessible media, alternatives and
     * supported enhancements for accessibility. Values should be drawn from the
     * [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityFeature-vocabulary).
     *
     * @param $accessibilityFeature \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAccessibilityFeature($accessibilityFeature): static {
        $this->properties['accessibilityFeature'] = $accessibilityFeature;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAccessibilityFeature() {
        return $this->properties['accessibilityFeature'];
    }
    /**
     * A publication event associated with the item.
     *
     * @param $publication \LengthOfRope\JSONLD\Schema\PublicationEvent
     * @return static
     **/
    public function setPublication($publication): static {
        $this->properties['publication'] = $publication;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PublicationEvent
     **/
    public function getPublication() {
        return $this->properties['publication'];
    }
    /**
     * The purpose of a work in the context of education; for example, 'assignment',
     * 'group work'.
     *
     * @param $educationalUse \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setEducationalUse($educationalUse): static {
        $this->properties['educationalUse'] = $educationalUse;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getEducationalUse() {
        return $this->properties['educationalUse'];
    }
    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param $audience \LengthOfRope\JSONLD\Schema\Audience
     * @return static
     **/
    public function setAudience($audience): static {
        $this->properties['audience'] = $audience;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Audience
     **/
    public function getAudience() {
        return $this->properties['audience'];
    }
    /**
     * The predominant mode of learning supported by the learning resource. Acceptable
     * values are 'active', 'expositive', or 'mixed'.
     *
     * @param $interactivityType \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setInteractivityType($interactivityType): static {
        $this->properties['interactivityType'] = $interactivityType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getInteractivityType() {
        return $this->properties['interactivityType'];
    }
    /**
     * Date of first publication or broadcast. For example the date a [[CreativeWork]]
     * was broadcast or a [[Certification]] was issued.
     *
     * @param $datePublished \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setDatePublished($datePublished): static {
        $this->properties['datePublished'] = $datePublished;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getDatePublished() {
        return $this->properties['datePublished'];
    }
    /**
     * Identifies input methods that are sufficient to fully control the described
     * resource. Values should be drawn from the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityControl-vocabulary).
     *
     * @param $accessibilityControl \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAccessibilityControl($accessibilityControl): static {
        $this->properties['accessibilityControl'] = $accessibilityControl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAccessibilityControl() {
        return $this->properties['accessibilityControl'];
    }
    /**
     * The publisher of the article in question.
     *
     * @param $publisher \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setPublisher($publisher): static {
        $this->properties['publisher'] = $publisher;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getPublisher() {
        return $this->properties['publisher'];
    }
    /**
     * The predominant type or kind characterizing the learning resource. For example,
     * 'presentation', 'handout'.
     *
     * @param $learningResourceType \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setLearningResourceType($learningResourceType): static {
        $this->properties['learningResourceType'] = $learningResourceType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getLearningResourceType() {
        return $this->properties['learningResourceType'];
    }
    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     * @param $material \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Product
     * @return static
     **/
    public function setMaterial($material): static {
        $this->properties['material'] = $material;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Product
     **/
    public function getMaterial() {
        return $this->properties['material'];
    }
    /**
     * The language of the content or performance or used in an action. Please use one
     * of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     * @param $inLanguage \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setInLanguage($inLanguage): static {
        $this->properties['inLanguage'] = $inLanguage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getInLanguage() {
        return $this->properties['inLanguage'];
    }
    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document
     * describing the editorial principles of an [[Organization]] (or individual, e.g.
     * a [[Person]] writing a blog) that relate to their activities as a publisher,
     * e.g. ethics or diversity policies. When applied to a [[CreativeWork]] (e.g.
     * [[NewsArticle]]) the principles are those of the party primarily responsible for
     * the creation of the [[CreativeWork]].
     *
     * While such policies are most typically expressed in natural language, sometimes
     * related information (e.g. indicating a [[funder]]) can be expressed using
     * schema.org terminology.
     *
     *
     * @param $publishingPrinciples \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setPublishingPrinciples($publishingPrinciples): static {
        $this->properties['publishingPrinciples'] = $publishingPrinciples;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getPublishingPrinciples() {
        return $this->properties['publishingPrinciples'];
    }
    /**
     * Conditions that affect the availability of, or method(s) of access to, an item.
     * Typically used for real world items such as an [[ArchiveComponent]] held by an
     * [[ArchiveOrganization]]. This property is not suitable for use as a general Web
     * access control mechanism. It is expressed only in natural language.
     *
     * For example "Available by appointment from the Reading Room" or "Accessible only
     * from logged-in accounts ".
     *
     * @param $conditionsOfAccess \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setConditionsOfAccess($conditionsOfAccess): static {
        $this->properties['conditionsOfAccess'] = $conditionsOfAccess;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getConditionsOfAccess() {
        return $this->properties['conditionsOfAccess'];
    }
    /**
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market, or that
     * translates during some event.
     *
     * @param $translator \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setTranslator($translator): static {
        $this->properties['translator'] = $translator;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getTranslator() {
        return $this->properties['translator'];
    }
    /**
     * Indicates a page documenting how licenses can be purchased or otherwise
     * acquired, for the current item.
     *
     * @param $acquireLicensePage \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setAcquireLicensePage($acquireLicensePage): static {
        $this->properties['acquireLicensePage'] = $acquireLicensePage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getAcquireLicensePage() {
        return $this->properties['acquireLicensePage'];
    }
    /**
     * Review of the item.
     *
     * @param $reviews \LengthOfRope\JSONLD\Schema\Review
     * @return static
     **/
    public function setReviews($reviews): static {
        $this->properties['reviews'] = $reviews;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Review
     **/
    public function getReviews() {
        return $this->properties['reviews'];
    }
    /**
     * The textual content of this CreativeWork.
     *
     * @param $text \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setText($text): static {
        $this->properties['text'] = $text;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getText() {
        return $this->properties['text'];
    }
    /**
     * An award won by or for this item.
     *
     * @param $award \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAward($award): static {
        $this->properties['award'] = $award;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAward() {
        return $this->properties['award'];
    }
    /**
     * An embedded audio object.
     *
     * @param $audio \LengthOfRope\JSONLD\Schema\Clip|\LengthOfRope\JSONLD\Schema\MusicRecording|\LengthOfRope\JSONLD\Schema\AudioObject
     * @return static
     **/
    public function setAudio($audio): static {
        $this->properties['audio'] = $audio;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Clip|\LengthOfRope\JSONLD\Schema\MusicRecording|\LengthOfRope\JSONLD\Schema\AudioObject
     **/
    public function getAudio() {
        return $this->properties['audio'];
    }
    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus
     * of the content. It is a subproperty of
     * contentLocation intended primarily for more technical and detailed
     * materials. For example with a Dataset, it indicates
     * areas that the dataset describes: a dataset of New York weather would have
     * spatialCoverage which was the place: the state of New York.
     *
     * @param $spatialCoverage \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setSpatialCoverage($spatialCoverage): static {
        $this->properties['spatialCoverage'] = $spatialCoverage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getSpatialCoverage() {
        return $this->properties['spatialCoverage'];
    }
    /**
     * The author of this content or rating. Please note that author is special in that
     * HTML 5 provides a special mechanism for indicating authorship via the rel tag.
     * That is equivalent to this and may be used interchangeably.
     *
     * @param $author \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setAuthor($author): static {
        $this->properties['author'] = $author;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getAuthor() {
        return $this->properties['author'];
    }
    /**
     * Date the content expires and is no longer useful or available. For example a
     * [[VideoObject]] or [[NewsArticle]] whose availability or relevance is
     * time-limited, a [[ClaimReview]] fact check whose publisher wants to indicate
     * that it may no longer be relevant (or helpful to highlight) after some date, or
     * a [[Certification]] the validity has expired.
     *
     * @param $expires \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setExpires($expires): static {
        $this->properties['expires'] = $expires;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getExpires() {
        return $this->properties['expires'];
    }
    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     * @param $copyrightHolder \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setCopyrightHolder($copyrightHolder): static {
        $this->properties['copyrightHolder'] = $copyrightHolder;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getCopyrightHolder() {
        return $this->properties['copyrightHolder'];
    }
    /**
     * Thumbnail image for an image or video.
     *
     * @param $thumbnail \LengthOfRope\JSONLD\Schema\ImageObject
     * @return static
     **/
    public function setThumbnail($thumbnail): static {
        $this->properties['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ImageObject
     **/
    public function getThumbnail() {
        return $this->properties['thumbnail'];
    }
    /**
     * The level in terms of progression through an educational or training context.
     * Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     *
     * @param $educationalLevel \LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEducationalLevel($educationalLevel): static {
        $this->properties['educationalLevel'] = $educationalLevel;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEducationalLevel() {
        return $this->properties['educationalLevel'];
    }
    /**
     * The specific time described by a creative work, for works (e.g. articles, video
     * objects etc.) that emphasise a particular moment within an Event.
     *
     * @param $contentReferenceTime \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setContentReferenceTime($contentReferenceTime): static {
        $this->properties['contentReferenceTime'] = $contentReferenceTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getContentReferenceTime() {
        return $this->properties['contentReferenceTime'];
    }
    /**
     * Fictional person connected with a creative work.
     *
     * @param $character \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setCharacter($character): static {
        $this->properties['character'] = $character;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getCharacter() {
        return $this->properties['character'];
    }
    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     *
     * @param $releasedEvent \LengthOfRope\JSONLD\Schema\PublicationEvent
     * @return static
     **/
    public function setReleasedEvent($releasedEvent): static {
        $this->properties['releasedEvent'] = $releasedEvent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PublicationEvent
     **/
    public function getReleasedEvent() {
        return $this->properties['releasedEvent'];
    }
    /**
     * An alignment to an established educational framework.
     *
     * This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource
     * [[teaches]] or [[assesses]] a competency.
     *
     * @param $educationalAlignment \LengthOfRope\JSONLD\Schema\AlignmentObject
     * @return static
     **/
    public function setEducationalAlignment($educationalAlignment): static {
        $this->properties['educationalAlignment'] = $educationalAlignment;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AlignmentObject
     **/
    public function getEducationalAlignment() {
        return $this->properties['educationalAlignment'];
    }
    /**
     * A media object that encodes this CreativeWork. This property is a synonym for
     * associatedMedia.
     *
     * @param $encoding \LengthOfRope\JSONLD\Schema\MediaObject
     * @return static
     **/
    public function setEncoding($encoding): static {
        $this->properties['encoding'] = $encoding;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MediaObject
     **/
    public function getEncoding() {
        return $this->properties['encoding'];
    }
    /**
     * The "spatial" property can be used in cases when more specific properties
     * (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are not
     * known to be appropriate.
     *
     * @param $spatial \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setSpatial($spatial): static {
        $this->properties['spatial'] = $spatial;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getSpatial() {
        return $this->properties['spatial'];
    }
    /**
     * Indicates the date on which the current structured data was generated /
     * published. Typically used alongside [[sdPublisher]].
     *
     * @param $sdDatePublished \LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setSdDatePublished($sdDatePublished): static {
        $this->properties['sdDatePublished'] = $sdDatePublished;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getSdDatePublished() {
        return $this->properties['sdDatePublished'];
    }
    /**
     * A citation or reference to another creative work, such as another publication,
     * web page, scholarly article, etc.
     *
     * @param $citation \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCitation($citation): static {
        $this->properties['citation'] = $citation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCitation() {
        return $this->properties['citation'];
    }
    /**
     * A resource that was used in the creation of this resource. This term can be
     * repeated for multiple sources. For example,
     * http://example.com/great-multiplication-intro.html.
     *
     * @param $isBasedOnUrl \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Product
     * @return static
     **/
    public function setIsBasedOnUrl($isBasedOnUrl): static {
        $this->properties['isBasedOnUrl'] = $isBasedOnUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Product
     **/
    public function getIsBasedOnUrl() {
        return $this->properties['isBasedOnUrl'];
    }
    /**
     * An abstract is a short description that summarizes a [[CreativeWork]].
     *
     * @param $abstract \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAbstract($abstract): static {
        $this->properties['abstract'] = $abstract;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAbstract() {
        return $this->properties['abstract'];
    }
    /**
     * Official rating of a piece of content&#x2014;for example, 'MPAA PG-13'.
     *
     * @param $contentRating \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Rating
     * @return static
     **/
    public function setContentRating($contentRating): static {
        $this->properties['contentRating'] = $contentRating;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Rating
     **/
    public function getContentRating() {
        return $this->properties['contentRating'];
    }
    /**
     * Indicates (by URL or string) a particular version of a schema used in some
     * CreativeWork. This property was created primarily to
     * indicate the use of a specific schema.org release, e.g. ```10.0``` as a
     * simple string, or more explicitly via URL,
     * ```https://schema.org/docs/releases.html#v10.0```. There may be situations in
     * which other schemas might usefully be referenced this way, e.g.
     * ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but this
     * has not been carefully explored in the community.
     *
     * @param $schemaVersion \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setSchemaVersion($schemaVersion): static {
        $this->properties['schemaVersion'] = $schemaVersion;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getSchemaVersion() {
        return $this->properties['schemaVersion'];
    }
    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     *
     * @param $mainEntity \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setMainEntity($mainEntity): static {
        $this->properties['mainEntity'] = $mainEntity;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getMainEntity() {
        return $this->properties['mainEntity'];
    }
    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this
     * item. See also [[ownershipFundingInfo]].
     *
     * @param $funding \LengthOfRope\JSONLD\Schema\Grant
     * @return static
     **/
    public function setFunding($funding): static {
        $this->properties['funding'] = $funding;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Grant
     **/
    public function getFunding() {
        return $this->properties['funding'];
    }
    /**
     * An embedded video object.
     *
     * @param $video \LengthOfRope\JSONLD\Schema\Clip|\LengthOfRope\JSONLD\Schema\VideoObject
     * @return static
     **/
    public function setVideo($video): static {
        $this->properties['video'] = $video;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Clip|\LengthOfRope\JSONLD\Schema\VideoObject
     **/
    public function getVideo() {
        return $this->properties['video'];
    }
    /**
     * A list of single or combined accessModes that are sufficient to understand all
     * the intellectual content of a resource. Values should be drawn from the
     * [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessModeSufficient-vocabulary).
     *
     * @param $accessModeSufficient \LengthOfRope\JSONLD\Schema\ItemList
     * @return static
     **/
    public function setAccessModeSufficient($accessModeSufficient): static {
        $this->properties['accessModeSufficient'] = $accessModeSufficient;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ItemList
     **/
    public function getAccessModeSufficient() {
        return $this->properties['accessModeSufficient'];
    }
    /**
     * The date on which the CreativeWork was created or the item was added to a
     * DataFeed.
     *
     * @param $dateCreated \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setDateCreated($dateCreated): static {
        $this->properties['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getDateCreated() {
        return $this->properties['dateCreated'];
    }
    /**
     * Approximate or typical time it usually takes to work with or through the content
     * of this work for the typical or target audience.
     *
     * @param $timeRequired \LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setTimeRequired($timeRequired): static {
        $this->properties['timeRequired'] = $timeRequired;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getTimeRequired() {
        return $this->properties['timeRequired'];
    }
    /**
     * The position of an item in a series or sequence of items.
     *
     * @param $position \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setPosition($position): static {
        $this->properties['position'] = $position;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getPosition() {
        return $this->properties['position'];
    }
    /**
     * A human-readable summary of specific accessibility features or deficiencies,
     * consistent with the other accessibility metadata but expressing subtleties such
     * as "short descriptions are present but long descriptions will be needed for
     * non-visual users" or "short descriptions are present and no long descriptions
     * are needed".
     *
     * @param $accessibilitySummary \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAccessibilitySummary($accessibilitySummary): static {
        $this->properties['accessibilitySummary'] = $accessibilitySummary;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAccessibilitySummary() {
        return $this->properties['accessibilitySummary'];
    }
    /**
     * Indicates a correction to a [[CreativeWork]], either via a
     * [[CorrectionComment]], textually or in another document.
     *
     * @param $correction \LengthOfRope\JSONLD\Schema\CorrectionComment|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCorrection($correction): static {
        $this->properties['correction'] = $correction;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CorrectionComment|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCorrection() {
        return $this->properties['correction'];
    }
    /**
     * A standardized size of a product or creative work, specified either through a
     * simple textual string (for example 'XL', '32Wx34L'), a  QuantitativeValue with a
     * unitCode, or a comprehensive and structured [[SizeSpecification]]; in other
     * cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may be
     * more applicable.
     *
     * @param $size \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\SizeSpecification|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setSize($size): static {
        $this->properties['size'] = $size;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\SizeSpecification|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getSize() {
        return $this->properties['size'];
    }
    /**
     * A characteristic of the described resource that is physiologically dangerous to
     * some users. Related to WCAG 2.0 guideline 2.3. Values should be drawn from the
     * [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityHazard-vocabulary).
     *
     * @param $accessibilityHazard \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAccessibilityHazard($accessibilityHazard): static {
        $this->properties['accessibilityHazard'] = $accessibilityHazard;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAccessibilityHazard() {
        return $this->properties['accessibilityHazard'];
    }
    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily
     * about a concept.
     *
     * @param $mentions \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setMentions($mentions): static {
        $this->properties['mentions'] = $mentions;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getMentions() {
        return $this->properties['mentions'];
    }
    /**
     * Media type typically expressed using a MIME format (see [IANA
     * site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN
     * reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)),
     * e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.
     *
     * In cases where a [[CreativeWork]] has several media type representations,
     * [[encoding]] can be used to indicate each [[MediaObject]] alongside particular
     * [[encodingFormat]] information.
     *
     * Unregistered or niche encoding and file formats can be indicated instead via the
     * most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
     *
     * @param $encodingFormat \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEncodingFormat($encodingFormat): static {
        $this->properties['encodingFormat'] = $encodingFormat;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEncodingFormat() {
        return $this->properties['encodingFormat'];
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
     * Text of a notice appropriate for describing the copyright aspects of this
     * Creative Work, ideally indicating the owner of the copyright for the Work.
     *
     * @param $copyrightNotice \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCopyrightNotice($copyrightNotice): static {
        $this->properties['copyrightNotice'] = $copyrightNotice;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCopyrightNotice() {
        return $this->properties['copyrightNotice'];
    }
    /**
     * The human sensory perceptual system or cognitive faculty through which a person
     * may process or perceive information. Values should be drawn from the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessMode-vocabulary).
     *
     * @param $accessMode \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAccessMode($accessMode): static {
        $this->properties['accessMode'] = $accessMode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAccessMode() {
        return $this->properties['accessMode'];
    }
    /**
     * Indicates the party responsible for generating and publishing the current
     * structured data markup, typically in cases where the structured data is derived
     * automatically from existing published content but published on a different site.
     * For example, student projects and open data initiatives often re-publish
     * existing content with more explicitly structured metadata. The
     * [[sdPublisher]] property helps make such practices more explicit.
     *
     * @param $sdPublisher \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setSdPublisher($sdPublisher): static {
        $this->properties['sdPublisher'] = $sdPublisher;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getSdPublisher() {
        return $this->properties['sdPublisher'];
    }
    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter should
     * be used.
     *
     * @param $interactionStatistic \LengthOfRope\JSONLD\Schema\InteractionCounter
     * @return static
     **/
    public function setInteractionStatistic($interactionStatistic): static {
        $this->properties['interactionStatistic'] = $interactionStatistic;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\InteractionCounter
     **/
    public function getInteractionStatistic() {
        return $this->properties['interactionStatistic'];
    }
    /**
     * Indicates an IPTCDigitalSourceEnumeration code indicating the nature of the
     * digital source(s) for some [[CreativeWork]].
     *
     * @param $digitalSourceType \LengthOfRope\JSONLD\Schema\IPTCDigitalSourceEnumeration
     * @return static
     **/
    public function setDigitalSourceType($digitalSourceType): static {
        $this->properties['digitalSourceType'] = $digitalSourceType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\IPTCDigitalSourceEnumeration
     **/
    public function getDigitalSourceType() {
        return $this->properties['digitalSourceType'];
    }
    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a
     * keywords list are typically delimited by commas, or by repeating the property.
     *
     * @param $keywords \LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setKeywords($keywords): static {
        $this->properties['keywords'] = $keywords;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getKeywords() {
        return $this->properties['keywords'];
    }
    /**
     * A creative work that this work is an example/instance/realization/derivation of.
     *
     * @param $exampleOfWork \LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setExampleOfWork($exampleOfWork): static {
        $this->properties['exampleOfWork'] = $exampleOfWork;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getExampleOfWork() {
        return $this->properties['exampleOfWork'];
    }
    /**
     * The subject matter of the content.
     *
     * @param $about \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setAbout($about): static {
        $this->properties['about'] = $about;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getAbout() {
        return $this->properties['about'];
    }
    /**
     * The creator/author of this CreativeWork. This is the same as the Author property
     * for CreativeWork.
     *
     * @param $creator \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setCreator($creator): static {
        $this->properties['creator'] = $creator;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getCreator() {
        return $this->properties['creator'];
    }
    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]]
     * representing a specific edit / edition for a work of film or television.
     *
     * For example, the motion picture known as "Ghostbusters" whose [[titleEIDR]] is
     * "10.5240/7EC7-228A-510A-053E-CBB8-J" has several edits, e.g.
     * "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3".
     *
     * Since schema.org types like [[Movie]] and [[TVEpisode]] can be used for both
     * works and their multiple expressions, it is possible to use [[titleEIDR]] alone
     * (for a general description), or alongside [[editEIDR]] for a more edit-specific
     * description.
     *
     *
     * @param $editEIDR \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEditEIDR($editEIDR): static {
        $this->properties['editEIDR'] = $editEIDR;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEditEIDR() {
        return $this->properties['editEIDR'];
    }
    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     * @param $accountablePerson \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setAccountablePerson($accountablePerson): static {
        $this->properties['accountablePerson'] = $accountablePerson;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getAccountablePerson() {
        return $this->properties['accountablePerson'];
    }
    /**
     * Used to indicate a specific claim contained, implied, translated or refined from
     * the content of a [[MediaObject]] or other [[CreativeWork]]. The interpreting
     * party can be indicated using [[claimInterpreter]].
     *
     * @param $interpretedAsClaim \LengthOfRope\JSONLD\Schema\Claim
     * @return static
     **/
    public function setInterpretedAsClaim($interpretedAsClaim): static {
        $this->properties['interpretedAsClaim'] = $interpretedAsClaim;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Claim
     **/
    public function getInterpretedAsClaim() {
        return $this->properties['interpretedAsClaim'];
    }
    /**
     * Media type, typically MIME format (see [IANA
     * site](http://www.iana.org/assignments/media-types/media-types.xhtml)) of the
     * content, e.g. application/zip of a SoftwareApplication binary. In cases where a
     * CreativeWork has several media type representations, 'encoding' can be used to
     * indicate each MediaObject alongside particular fileFormat information.
     * Unregistered or niche file formats can be indicated instead via the most
     * appropriate URL, e.g. defining Web page or a Wikipedia entry.
     *
     * @param $fileFormat \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setFileFormat($fileFormat): static {
        $this->properties['fileFormat'] = $fileFormat;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getFileFormat() {
        return $this->properties['fileFormat'];
    }
    /**
     * Indicates that the resource is compatible with the referenced accessibility API.
     * Values should be drawn from the [approved
     * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityAPI-vocabulary).
     *
     * @param $accessibilityAPI \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAccessibilityAPI($accessibilityAPI): static {
        $this->properties['accessibilityAPI'] = $accessibilityAPI;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAccessibilityAPI() {
        return $this->properties['accessibilityAPI'];
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
     * Genre of the creative work, broadcast channel or group.
     *
     * @param $genre \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setGenre($genre): static {
        $this->properties['genre'] = $genre;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getGenre() {
        return $this->properties['genre'];
    }
    /**
     * A link to the page containing the comments of the CreativeWork.
     *
     * @param $discussionUrl \LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setDiscussionUrl($discussionUrl): static {
        $this->properties['discussionUrl'] = $discussionUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getDiscussionUrl() {
        return $this->properties['discussionUrl'];
    }
    /**
     * The status of a creative work in terms of its stage in a lifecycle. Example
     * terms include Incomplete, Draft, Published, Obsolete. Some organizations define
     * a set of terms for the stages of their publication lifecycle.
     *
     * @param $creativeWorkStatus \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setCreativeWorkStatus($creativeWorkStatus): static {
        $this->properties['creativeWorkStatus'] = $creativeWorkStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getCreativeWorkStatus() {
        return $this->properties['creativeWorkStatus'];
    }
    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has
     * received. This is most applicable to works published in Web sites with
     * commenting system; additional comments may exist elsewhere.
     *
     * @param $commentCount \LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setCommentCount($commentCount): static {
        $this->properties['commentCount'] = $commentCount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getCommentCount() {
        return $this->properties['commentCount'];
    }
    /**
     * A maintainer of a [[Dataset]], software package ([[SoftwareApplication]]), or
     * other [[Project]]. A maintainer is a [[Person]] or [[Organization]] that manages
     * contributions to, and/or publication of, some (typically complex) artifact. It
     * is common for distributions of software and data to be based on "upstream"
     * sources. When [[maintainer]] is applied to a specific version of something e.g.
     * a particular version or packaging of a [[Dataset]], it is always  possible that
     * the upstream source has a different maintainer. The [[isBasedOn]] property can
     * be used to indicate such relationships between datasets to make the different
     * maintenance roles clear. Similarly in the case of software, a package may have
     * dedicated maintainers working on integration into software distributions such as
     * Ubuntu, as well as upstream maintainers of the underlying work.
     *
     *
     * @param $maintainer \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setMaintainer($maintainer): static {
        $this->properties['maintainer'] = $maintainer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getMaintainer() {
        return $this->properties['maintainer'];
    }
    /**
     * The number of words in the text of the CreativeWork such as an Article, Book,
     * etc.
     *
     * @param $wordCount \LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setWordCount($wordCount): static {
        $this->properties['wordCount'] = $wordCount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getWordCount() {
        return $this->properties['wordCount'];
    }
    /**
     * A media object that encodes this CreativeWork.
     *
     * @param $encodings \LengthOfRope\JSONLD\Schema\MediaObject
     * @return static
     **/
    public function setEncodings($encodings): static {
        $this->properties['encodings'] = $encodings;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MediaObject
     **/
    public function getEncodings() {
        return $this->properties['encodings'];
    }
    /**
     * The publishing division which published the comic.
     *
     * @param $publisherImprint \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setPublisherImprint($publisherImprint): static {
        $this->properties['publisherImprint'] = $publisherImprint;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getPublisherImprint() {
        return $this->properties['publisherImprint'];
    }
    /**
     * A media object that encodes this CreativeWork. This property is a synonym for
     * encoding.
     *
     * @param $associatedMedia \LengthOfRope\JSONLD\Schema\MediaObject
     * @return static
     **/
    public function setAssociatedMedia($associatedMedia): static {
        $this->properties['associatedMedia'] = $associatedMedia;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MediaObject
     **/
    public function getAssociatedMedia() {
        return $this->properties['associatedMedia'];
    }
    /**
     * Example/instance/realization/derivation of the concept of this creative work.
     * E.g. the paperback edition, first edition, or e-book.
     *
     * @param $workExample \LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setWorkExample($workExample): static {
        $this->properties['workExample'] = $workExample;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getWorkExample() {
        return $this->properties['workExample'];
    }
    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in
     * some sense).
     *
     * @param $hasPart \LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setHasPart($hasPart): static {
        $this->properties['hasPart'] = $hasPart;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getHasPart() {
        return $this->properties['hasPart'];
    }
    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @param $isAccessibleForFree \LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setIsAccessibleForFree($isAccessibleForFree): static {
        $this->properties['isAccessibleForFree'] = $isAccessibleForFree;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getIsAccessibleForFree() {
        return $this->properties['isAccessibleForFree'];
    }
    /**
     * A thumbnail image relevant to the Thing.
     *
     * @param $thumbnailUrl \LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setThumbnailUrl($thumbnailUrl): static {
        $this->properties['thumbnailUrl'] = $thumbnailUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getThumbnailUrl() {
        return $this->properties['thumbnailUrl'];
    }
    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     * @param $version \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setVersion($version): static {
        $this->properties['version'] = $version;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getVersion() {
        return $this->properties['version'];
    }
    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some
     * sense), is part of.
     *
     * @param $isPartOf \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setIsPartOf($isPartOf): static {
        $this->properties['isPartOf'] = $isPartOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getIsPartOf() {
        return $this->properties['isPartOf'];
    }
    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all
     * or part of the event.
     *
     * @param $recordedAt \LengthOfRope\JSONLD\Schema\Event
     * @return static
     **/
    public function setRecordedAt($recordedAt): static {
        $this->properties['recordedAt'] = $recordedAt;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Event
     **/
    public function getRecordedAt() {
        return $this->properties['recordedAt'];
    }
    /**
     * The item being described is intended to assess the competency or learning
     * outcome defined by the referenced term.
     *
     * @param $assesses \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setAssesses($assesses): static {
        $this->properties['assesses'] = $assesses;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getAssesses() {
        return $this->properties['assesses'];
    }
    /**
     * The temporalCoverage of a CreativeWork indicates the period that the content
     * applies to, i.e. that it describes, either as a DateTime or as a textual string
     * indicating a time period in [ISO 8601 time interval
     * format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In
     * the case of a Dataset it will typically indicate the relevant time period
     * in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be
     * written "2011/2012"). Other forms of content, e.g. ScholarlyArticle, Book,
     * TVSeries or TVEpisode, may indicate their temporalCoverage in broader terms -
     * textually or via well-known URL.
     * Written works such as books may sometimes have precise temporal coverage
     * too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format
     * format via "1939/1945".
     *
     * Open-ended date ranges can be written with ".." in place of the end date. For
     * example, "2015-11/.." indicates a range beginning in November 2015 and with no
     * specified final date. This is tentative and might be updated in future when ISO
     * 8601 is officially updated.
     *
     * @param $temporalCoverage \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTemporalCoverage($temporalCoverage): static {
        $this->properties['temporalCoverage'] = $temporalCoverage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTemporalCoverage() {
        return $this->properties['temporalCoverage'];
    }
    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @param $contributor \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setContributor($contributor): static {
        $this->properties['contributor'] = $contributor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getContributor() {
        return $this->properties['contributor'];
    }
    /**
     * A secondary title of the CreativeWork.
     *
     * @param $alternativeHeadline \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAlternativeHeadline($alternativeHeadline): static {
        $this->properties['alternativeHeadline'] = $alternativeHeadline;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAlternativeHeadline() {
        return $this->properties['alternativeHeadline'];
    }
    /**
     * The year during which the claimed copyright for the CreativeWork was first
     * asserted.
     *
     * @param $copyrightYear \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCopyrightYear($copyrightYear): static {
        $this->properties['copyrightYear'] = $copyrightYear;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCopyrightYear() {
        return $this->properties['copyrightYear'];
    }
    /**
     * A person or organization that supports a thing through a pledge, promise, or
     * financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor
     * of an event.
     *
     * @param $sponsor \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setSponsor($sponsor): static {
        $this->properties['sponsor'] = $sponsor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getSponsor() {
        return $this->properties['sponsor'];
    }
    /**
     * A work that is a translation of the content of this work. E.g. 西遊記 has an
     * English workTranslation “Journey to the West”, a German workTranslation
     * “Monkeys Pilgerfahrt” and a Vietnamese  translation Tây du ký bình
     * khảo.
     *
     * @param $workTranslation \LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setWorkTranslation($workTranslation): static {
        $this->properties['workTranslation'] = $workTranslation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getWorkTranslation() {
        return $this->properties['workTranslation'];
    }
    /**
     * Specifies the Person who edited the CreativeWork.
     *
     * @param $editor \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setEditor($editor): static {
        $this->properties['editor'] = $editor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getEditor() {
        return $this->properties['editor'];
    }
    /**
     * A license document that applies to this content, typically indicated by URL.
     *
     * @param $license \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setLicense($license): static {
        $this->properties['license'] = $license;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getLicense() {
        return $this->properties['license'];
    }
    /**
     * The item being described is intended to help a person learn the competency or
     * learning outcome defined by the referenced term.
     *
     * @param $teaches \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setTeaches($teaches): static {
        $this->properties['teaches'] = $teaches;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getTeaches() {
        return $this->properties['teaches'];
    }
    /**
     * The location depicted or described in the content. For example, the location in
     * a photograph or painting.
     *
     * @param $contentLocation \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setContentLocation($contentLocation): static {
        $this->properties['contentLocation'] = $contentLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getContentLocation() {
        return $this->properties['contentLocation'];
    }
    /**
     * The date on which the CreativeWork was most recently modified or when the item's
     * entry was modified within a DataFeed.
     *
     * @param $dateModified \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setDateModified($dateModified): static {
        $this->properties['dateModified'] = $dateModified;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getDateModified() {
        return $this->properties['dateModified'];
    }
    /**
     * Comments, typically from users.
     *
     * @param $comment \LengthOfRope\JSONLD\Schema\Comment
     * @return static
     **/
    public function setComment($comment): static {
        $this->properties['comment'] = $comment;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Comment
     **/
    public function getComment() {
        return $this->properties['comment'];
    }
    /**
     * Awards won by or for this item.
     *
     * @param $awards \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAwards($awards): static {
        $this->properties['awards'] = $awards;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAwards() {
        return $this->properties['awards'];
    }
    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @param $typicalAgeRange \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTypicalAgeRange($typicalAgeRange): static {
        $this->properties['typicalAgeRange'] = $typicalAgeRange;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTypicalAgeRange() {
        return $this->properties['typicalAgeRange'];
    }
    /**
     * The work that this work has been translated from. E.g. 物种起源 is a
     * translationOf “On the Origin of Species”.
     *
     * @param $translationOfWork \LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setTranslationOfWork($translationOfWork): static {
        $this->properties['translationOfWork'] = $translationOfWork;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getTranslationOfWork() {
        return $this->properties['translationOfWork'];
    }
    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian
     * flag'. Values are typically expressed as text, although links to controlled
     * value schemes are also supported.
     *
     * @param $pattern \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setPattern($pattern): static {
        $this->properties['pattern'] = $pattern;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getPattern() {
        return $this->properties['pattern'];
    }
    /**
     * A license document that applies to this structured data, typically indicated by
     * URL.
     *
     * @param $sdLicense \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setSdLicense($sdLicense): static {
        $this->properties['sdLicense'] = $sdLicense;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getSdLicense() {
        return $this->properties['sdLicense'];
    }
    /**
     * The "temporal" property can be used in cases where more specific properties
     * (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]],
     * [[datePublished]]) are not known to be appropriate.
     *
     * @param $temporal \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setTemporal($temporal): static {
        $this->properties['temporal'] = $temporal;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getTemporal() {
        return $this->properties['temporal'];
    }
}
