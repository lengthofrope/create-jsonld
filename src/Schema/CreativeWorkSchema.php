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
 * The most generic kind of creative work, including books, movies, photographs, software programs, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CreativeWorkSchema extends ThingSchema
{
    public static function factory()
    {
        return new CreativeWorkSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The subject matter of the content.
     **/
    private $about;
    public function setAbout($about) {
        $this->about = $about;

        return $this;
    }

    /**
     * @return ThingSchema     
     **/
    public function getAbout() {
        return $this->about;
    }

    /**
     * Indicates that the resource is compatible with the referenced accessibility API (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
     **/
    private $accessibilityAPI;
    public function setAccessibilityAPI($accessibilityAPI) {
        $this->accessibilityAPI = $accessibilityAPI;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAccessibilityAPI() {
        return $this->accessibilityAPI;
    }

    /**
     * Identifies input methods that are sufficient to fully control the described resource (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
     **/
    private $accessibilityControl;
    public function setAccessibilityControl($accessibilityControl) {
        $this->accessibilityControl = $accessibilityControl;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAccessibilityControl() {
        return $this->accessibilityControl;
    }

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
     **/
    private $accessibilityFeature;
    public function setAccessibilityFeature($accessibilityFeature) {
        $this->accessibilityFeature = $accessibilityFeature;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAccessibilityFeature() {
        return $this->accessibilityFeature;
    }

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3 (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
     **/
    private $accessibilityHazard;
    public function setAccessibilityHazard($accessibilityHazard) {
        $this->accessibilityHazard = $accessibilityHazard;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAccessibilityHazard() {
        return $this->accessibilityHazard;
    }

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     **/
    private $accountablePerson;
    public function setAccountablePerson($accountablePerson) {
        $this->accountablePerson = $accountablePerson;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getAccountablePerson() {
        return $this->accountablePerson;
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     **/
    private $aggregateRating;
    public function setAggregateRating($aggregateRating) {
        $this->aggregateRating = $aggregateRating;

        return $this;
    }

    /**
     * @return AggregateRatingSchema     
     **/
    public function getAggregateRating() {
        return $this->aggregateRating;
    }

    /**
     * A secondary title of the CreativeWork.
     **/
    private $alternativeHeadline;
    public function setAlternativeHeadline($alternativeHeadline) {
        $this->alternativeHeadline = $alternativeHeadline;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAlternativeHeadline() {
        return $this->alternativeHeadline;
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     **/
    private $associatedMedia;
    public function setAssociatedMedia($associatedMedia) {
        $this->associatedMedia = $associatedMedia;

        return $this;
    }

    /**
     * @return MediaObjectSchema     
     **/
    public function getAssociatedMedia() {
        return $this->associatedMedia;
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     **/
    private $audience;
    public function setAudience($audience) {
        $this->audience = $audience;

        return $this;
    }

    /**
     * @return AudienceSchema     
     **/
    public function getAudience() {
        return $this->audience;
    }

    /**
     * An embedded audio object.
     **/
    private $audio;
    public function setAudio($audio) {
        $this->audio = $audio;

        return $this;
    }

    /**
     * @return AudioObjectSchema     
     **/
    public function getAudio() {
        return $this->audio;
    }

    /**
     * The author of this content. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     **/
    private $author;
    public function setAuthor($author) {
        $this->author = $author;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     
     **/
    public function getAuthor() {
        return $this->author;
    }

    /**
     * An award won by or for this item.
     **/
    private $award;
    public function setAward($award) {
        $this->award = $award;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAward() {
        return $this->award;
    }

    /**
     * Awards won by or for this item.
     **/
    private $awards;
    public function setAwards($awards) {
        $this->awards = $awards;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAwards() {
        return $this->awards;
    }

    /**
     * Fictional person connected with a creative work.
     **/
    private $character;
    public function setCharacter($character) {
        $this->character = $character;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getCharacter() {
        return $this->character;
    }

    /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     **/
    private $citation;
    public function setCitation($citation) {
        $this->citation = $citation;

        return $this;
    }

    /**
     * @return CreativeWorkSchema|TextSchema     
     **/
    public function getCitation() {
        return $this->citation;
    }

    /**
     * Comments, typically from users.
     **/
    private $comment;
    public function setComment($comment) {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return CommentSchema     
     **/
    public function getComment() {
        return $this->comment;
    }

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.
     **/
    private $commentCount;
    public function setCommentCount($commentCount) {
        $this->commentCount = $commentCount;

        return $this;
    }

    /**
     * @return IntegerSchema     
     **/
    public function getCommentCount() {
        return $this->commentCount;
    }

    /**
     * The location depicted or described in the content. For example, the location in a photograph or painting.
     **/
    private $contentLocation;
    public function setContentLocation($contentLocation) {
        $this->contentLocation = $contentLocation;

        return $this;
    }

    /**
     * @return PlaceSchema     
     **/
    public function getContentLocation() {
        return $this->contentLocation;
    }

    /**
     * Official rating of a piece of content&#x2014;for example,'MPAA PG-13'.
     **/
    private $contentRating;
    public function setContentRating($contentRating) {
        $this->contentRating = $contentRating;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getContentRating() {
        return $this->contentRating;
    }

    /**
     * A secondary contributor to the CreativeWork.
     **/
    private $contributor;
    public function setContributor($contributor) {
        $this->contributor = $contributor;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     
     **/
    public function getContributor() {
        return $this->contributor;
    }

    /**
     * The party holding the legal copyright to the CreativeWork.
     **/
    private $copyrightHolder;
    public function setCopyrightHolder($copyrightHolder) {
        $this->copyrightHolder = $copyrightHolder;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     
     **/
    public function getCopyrightHolder() {
        return $this->copyrightHolder;
    }

    /**
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     **/
    private $copyrightYear;
    public function setCopyrightYear($copyrightYear) {
        $this->copyrightYear = $copyrightYear;

        return $this;
    }

    /**
     * @return NumberSchema     
     **/
    public function getCopyrightYear() {
        return $this->copyrightYear;
    }

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     **/
    private $creator;
    public function setCreator($creator) {
        $this->creator = $creator;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     
     **/
    public function getCreator() {
        return $this->creator;
    }

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     **/
    private $dateCreated;
    public function setDateCreated($dateCreated) {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * @return DateSchema|DateTimeSchema     
     **/
    public function getDateCreated() {
        return $this->dateCreated;
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     **/
    private $dateModified;
    public function setDateModified($dateModified) {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * @return DateSchema|DateTimeSchema     
     **/
    public function getDateModified() {
        return $this->dateModified;
    }

    /**
     * Date of first broadcast/publication.
     **/
    private $datePublished;
    public function setDatePublished($datePublished) {
        $this->datePublished = $datePublished;

        return $this;
    }

    /**
     * @return DateSchema     
     **/
    public function getDatePublished() {
        return $this->datePublished;
    }

    /**
     * A link to the page containing the comments of the CreativeWork.
     **/
    private $discussionUrl;
    public function setDiscussionUrl($discussionUrl) {
        $this->discussionUrl = $discussionUrl;

        return $this;
    }

    /**
     * @return URLSchema     
     **/
    public function getDiscussionUrl() {
        return $this->discussionUrl;
    }

    /**
     * Specifies the Person who edited the CreativeWork.
     **/
    private $editor;
    public function setEditor($editor) {
        $this->editor = $editor;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getEditor() {
        return $this->editor;
    }

    /**
     * An alignment to an established educational framework.
     **/
    private $educationalAlignment;
    public function setEducationalAlignment($educationalAlignment) {
        $this->educationalAlignment = $educationalAlignment;

        return $this;
    }

    /**
     * @return AlignmentObjectSchema     
     **/
    public function getEducationalAlignment() {
        return $this->educationalAlignment;
    }

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     **/
    private $educationalUse;
    public function setEducationalUse($educationalUse) {
        $this->educationalUse = $educationalUse;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getEducationalUse() {
        return $this->educationalUse;
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
     **/
    private $encoding;
    public function setEncoding($encoding) {
        $this->encoding = $encoding;

        return $this;
    }

    /**
     * @return MediaObjectSchema     
     **/
    public function getEncoding() {
        return $this->encoding;
    }

    /**
     * A media object that encodes this CreativeWork.
     **/
    private $encodings;
    public function setEncodings($encodings) {
        $this->encodings = $encodings;

        return $this;
    }

    /**
     * @return MediaObjectSchema     
     **/
    public function getEncodings() {
        return $this->encodings;
    }

    /**
     * A creative work that this work is an example/instance/realization/derivation of.
     **/
    private $exampleOfWork;
    public function setExampleOfWork($exampleOfWork) {
        $this->exampleOfWork = $exampleOfWork;

        return $this;
    }

    /**
     * @return CreativeWorkSchema     
     **/
    public function getExampleOfWork() {
        return $this->exampleOfWork;
    }

    /**
     * Media type (aka MIME format, see <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">IANA site</a>) of the content e.g. application/zip of a SoftwareApplication binary. In cases where a CreativeWork has several media type representations, 'encoding' can be used to indicate each MediaObject alongside particular fileFormat information.
     **/
    private $fileFormat;
    public function setFileFormat($fileFormat) {
        $this->fileFormat = $fileFormat;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getFileFormat() {
        return $this->fileFormat;
    }

    /**
     * Genre of the creative work or group.
     **/
    private $genre;
    public function setGenre($genre) {
        $this->genre = $genre;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     
     **/
    public function getGenre() {
        return $this->genre;
    }

    /**
     * Indicates a CreativeWork that is (in some sense) a part of this CreativeWork.
     **/
    private $hasPart;
    public function setHasPart($hasPart) {
        $this->hasPart = $hasPart;

        return $this;
    }

    /**
     * @return CreativeWorkSchema     
     **/
    public function getHasPart() {
        return $this->hasPart;
    }

    /**
     * Headline of the article.
     **/
    private $headline;
    public function setHeadline($headline) {
        $this->headline = $headline;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getHeadline() {
        return $this->headline;
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the <a href='http://tools.ietf.org/html/bcp47'>IETF BCP 47 standard</a>.
     **/
    private $inLanguage;
    public function setInLanguage($inLanguage) {
        $this->inLanguage = $inLanguage;

        return $this;
    }

    /**
     * @return TextSchema|LanguageSchema     
     **/
    public function getInLanguage() {
        return $this->inLanguage;
    }

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
     **/
    private $interactionStatistic;
    public function setInteractionStatistic($interactionStatistic) {
        $this->interactionStatistic = $interactionStatistic;

        return $this;
    }

    /**
     * @return InteractionCounterSchema     
     **/
    public function getInteractionStatistic() {
        return $this->interactionStatistic;
    }

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     **/
    private $interactivityType;
    public function setInteractivityType($interactivityType) {
        $this->interactivityType = $interactivityType;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getInteractivityType() {
        return $this->interactivityType;
    }

    /**
     * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html.
     **/
    private $isBasedOnUrl;
    public function setIsBasedOnUrl($isBasedOnUrl) {
        $this->isBasedOnUrl = $isBasedOnUrl;

        return $this;
    }

    /**
     * @return URLSchema     
     **/
    public function getIsBasedOnUrl() {
        return $this->isBasedOnUrl;
    }

    /**
     * Indicates whether this content is family friendly.
     **/
    private $isFamilyFriendly;
    public function setIsFamilyFriendly($isFamilyFriendly) {
        $this->isFamilyFriendly = $isFamilyFriendly;

        return $this;
    }

    /**
     * @return BooleanSchema     
     **/
    public function getIsFamilyFriendly() {
        return $this->isFamilyFriendly;
    }

    /**
     * Indicates a CreativeWork that this CreativeWork is (in some sense) part of.
     **/
    private $isPartOf;
    public function setIsPartOf($isPartOf) {
        $this->isPartOf = $isPartOf;

        return $this;
    }

    /**
     * @return CreativeWorkSchema     
     **/
    public function getIsPartOf() {
        return $this->isPartOf;
    }

    /**
     * Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.
     **/
    private $keywords;
    public function setKeywords($keywords) {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getKeywords() {
        return $this->keywords;
    }

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     **/
    private $learningResourceType;
    public function setLearningResourceType($learningResourceType) {
        $this->learningResourceType = $learningResourceType;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getLearningResourceType() {
        return $this->learningResourceType;
    }

    /**
     * A license document that applies to this content, typically indicated by URL.
     **/
    private $license;
    public function setLicense($license) {
        $this->license = $license;

        return $this;
    }

    /**
     * @return CreativeWorkSchema|URLSchema     
     **/
    public function getLicense() {
        return $this->license;
    }

    /**
     * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
     **/
    private $locationCreated;
    public function setLocationCreated($locationCreated) {
        $this->locationCreated = $locationCreated;

        return $this;
    }

    /**
     * @return PlaceSchema     
     **/
    public function getLocationCreated() {
        return $this->locationCreated;
    }

    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     **/
    private $mainEntity;
    public function setMainEntity($mainEntity) {
        $this->mainEntity = $mainEntity;

        return $this;
    }

    /**
     * @return ThingSchema     
     **/
    public function getMainEntity() {
        return $this->mainEntity;
    }

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     **/
    private $mentions;
    public function setMentions($mentions) {
        $this->mentions = $mentions;

        return $this;
    }

    /**
     * @return ThingSchema     
     **/
    public function getMentions() {
        return $this->mentions;
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     **/
    private $offers;
    public function setOffers($offers) {
        $this->offers = $offers;

        return $this;
    }

    /**
     * @return OfferSchema     
     **/
    public function getOffers() {
        return $this->offers;
    }

    /**
     * The position of an item in a series or sequence of items.
     **/
    private $position;
    public function setPosition($position) {
        $this->position = $position;

        return $this;
    }

    /**
     * @return TextSchema|IntegerSchema     
     **/
    public function getPosition() {
        return $this->position;
    }

    /**
     * The person or organization who produced the work (e.g. music album, movie, tv/radio series etc.).
     **/
    private $producer;
    public function setProducer($producer) {
        $this->producer = $producer;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     
     **/
    public function getProducer() {
        return $this->producer;
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     **/
    private $provider;
    public function setProvider($provider) {
        $this->provider = $provider;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     
     **/
    public function getProvider() {
        return $this->provider;
    }

    /**
     * A publication event associated with the item.
     **/
    private $publication;
    public function setPublication($publication) {
        $this->publication = $publication;

        return $this;
    }

    /**
     * @return PublicationEventSchema     
     **/
    public function getPublication() {
        return $this->publication;
    }

    /**
     * The publisher of the creative work.
     **/
    private $publisher;
    public function setPublisher($publisher) {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     
     **/
    public function getPublisher() {
        return $this->publisher;
    }

    /**
     * Link to page describing the editorial principles of the organization primarily responsible for the creation of the CreativeWork.
     **/
    private $publishingPrinciples;
    public function setPublishingPrinciples($publishingPrinciples) {
        $this->publishingPrinciples = $publishingPrinciples;

        return $this;
    }

    /**
     * @return URLSchema     
     **/
    public function getPublishingPrinciples() {
        return $this->publishingPrinciples;
    }

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
     **/
    private $recordedAt;
    public function setRecordedAt($recordedAt) {
        $this->recordedAt = $recordedAt;

        return $this;
    }

    /**
     * @return EventSchema     
     **/
    public function getRecordedAt() {
        return $this->recordedAt;
    }

    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     **/
    private $releasedEvent;
    public function setReleasedEvent($releasedEvent) {
        $this->releasedEvent = $releasedEvent;

        return $this;
    }

    /**
     * @return PublicationEventSchema     
     **/
    public function getReleasedEvent() {
        return $this->releasedEvent;
    }

    /**
     * A review of the item.
     **/
    private $review;
    public function setReview($review) {
        $this->review = $review;

        return $this;
    }

    /**
     * @return ReviewSchema     
     **/
    public function getReview() {
        return $this->review;
    }

    /**
     * Review of the item.
     **/
    private $reviews;
    public function setReviews($reviews) {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * @return ReviewSchema     
     **/
    public function getReviews() {
        return $this->reviews;
    }

    /**
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. For example, a document could declare a schemaVersion using a URL such as http://schema.org/version/2.0/ if precise indication of schema version was required by some application. 
     **/
    private $schemaVersion;
    public function setSchemaVersion($schemaVersion) {
        $this->schemaVersion = $schemaVersion;

        return $this;
    }

    /**
     * @return URLSchema|TextSchema     
     **/
    public function getSchemaVersion() {
        return $this->schemaVersion;
    }

    /**
     * The Organization on whose behalf the creator was working.
     **/
    private $sourceOrganization;
    public function setSourceOrganization($sourceOrganization) {
        $this->sourceOrganization = $sourceOrganization;

        return $this;
    }

    /**
     * @return OrganizationSchema     
     **/
    public function getSourceOrganization() {
        return $this->sourceOrganization;
    }

    /**
     * The textual content of this CreativeWork.
     **/
    private $text;
    public function setText($text) {
        $this->text = $text;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getText() {
        return $this->text;
    }

    /**
     * A thumbnail image relevant to the Thing.
     **/
    private $thumbnailUrl;
    public function setThumbnailUrl($thumbnailUrl) {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }

    /**
     * @return URLSchema     
     **/
    public function getThumbnailUrl() {
        return $this->thumbnailUrl;
    }

    /**
     * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'P30M', 'P1H25M'.
     **/
    private $timeRequired;
    public function setTimeRequired($timeRequired) {
        $this->timeRequired = $timeRequired;

        return $this;
    }

    /**
     * @return DurationSchema     
     **/
    public function getTimeRequired() {
        return $this->timeRequired;
    }

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market.
     **/
    private $translator;
    public function setTranslator($translator) {
        $this->translator = $translator;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     
     **/
    public function getTranslator() {
        return $this->translator;
    }

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     **/
    private $typicalAgeRange;
    public function setTypicalAgeRange($typicalAgeRange) {
        $this->typicalAgeRange = $typicalAgeRange;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getTypicalAgeRange() {
        return $this->typicalAgeRange;
    }

    /**
     * The version of the CreativeWork embodied by a specified resource.
     **/
    private $version;
    public function setVersion($version) {
        $this->version = $version;

        return $this;
    }

    /**
     * @return NumberSchema     
     **/
    public function getVersion() {
        return $this->version;
    }

    /**
     * An embedded video object.
     **/
    private $video;
    public function setVideo($video) {
        $this->video = $video;

        return $this;
    }

    /**
     * @return VideoObjectSchema     
     **/
    public function getVideo() {
        return $this->video;
    }

    /**
     * Example/instance/realization/derivation of the concept of this creative work. eg. The paperback edition, first edition, or eBook.
     **/
    private $workExample;
    public function setWorkExample($workExample) {
        $this->workExample = $workExample;

        return $this;
    }

    /**
     * @return CreativeWorkSchema     
     **/
    public function getWorkExample() {
        return $this->workExample;
    }


}
