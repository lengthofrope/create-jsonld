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
 * An image, video, or audio object embedded in a web page. Note that a creative work may have many media objects associated with it on the same web page. For example, a page about a single song (MusicRecording) may have a music video (VideoObject), and a high and low bandwidth audio stream (2 AudioObject's).
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MediaObjectSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new MediaObjectSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * A NewsArticle associated with the Media Object.
     **/
    private $associatedArticle;
    public function setAssociatedArticle($associatedArticle) {
        $this->associatedArticle = $associatedArticle;

        return $this;
    }

    /**
     * @return NewsArticleSchema     **/
    public function getAssociatedArticle() {
        return $this->associatedArticle;
    }

    /**
     * The bitrate of the media object.
     **/
    private $bitrate;
    public function setBitrate($bitrate) {
        $this->bitrate = $bitrate;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getBitrate() {
        return $this->bitrate;
    }

    /**
     * File size in (mega/kilo) bytes.
     **/
    private $contentSize;
    public function setContentSize($contentSize) {
        $this->contentSize = $contentSize;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getContentSize() {
        return $this->contentSize;
    }

    /**
     * Actual bytes of the media object, for example the image file or video file.
     **/
    private $contentUrl;
    public function setContentUrl($contentUrl) {
        $this->contentUrl = $contentUrl;

        return $this;
    }

    /**
     * @return URLSchema     **/
    public function getContentUrl() {
        return $this->contentUrl;
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in <a href='http://en.wikipedia.org/wiki/ISO_8601'>ISO 8601 date format</a>.
     **/
    private $duration;
    public function setDuration($duration) {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return DurationSchema     **/
    public function getDuration() {
        return $this->duration;
    }

    /**
     * A URL pointing to a player for a specific video. In general, this is the information in the <code>src</code> element of an <code>embed</code> tag and should not be the same as the content of the <code>loc</code> tag.
     **/
    private $embedUrl;
    public function setEmbedUrl($embedUrl) {
        $this->embedUrl = $embedUrl;

        return $this;
    }

    /**
     * @return URLSchema     **/
    public function getEmbedUrl() {
        return $this->embedUrl;
    }

    /**
     * The CreativeWork encoded by this media object.
     **/
    private $encodesCreativeWork;
    public function setEncodesCreativeWork($encodesCreativeWork) {
        $this->encodesCreativeWork = $encodesCreativeWork;

        return $this;
    }

    /**
     * @return CreativeWorkSchema     **/
    public function getEncodesCreativeWork() {
        return $this->encodesCreativeWork;
    }

    /**
     * mp3, mpeg4, etc.
     **/
    private $encodingFormat;
    public function setEncodingFormat($encodingFormat) {
        $this->encodingFormat = $encodingFormat;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getEncodingFormat() {
        return $this->encodingFormat;
    }

    /**
     * Date the content expires and is no longer useful or available. Useful for videos.
     **/
    private $expires;
    public function setExpires($expires) {
        $this->expires = $expires;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getExpires() {
        return $this->expires;
    }

    /**
     * The height of the item.
     **/
    private $height;
    public function setHeight($height) {
        $this->height = $height;

        return $this;
    }

    /**
     * @return DistanceSchema|QuantitativeValueSchema     **/
    public function getHeight() {
        return $this->height;
    }

    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     **/
    private $playerType;
    public function setPlayerType($playerType) {
        $this->playerType = $playerType;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPlayerType() {
        return $this->playerType;
    }

    /**
     * The production company or studio responsible for the item e.g. series, video game, episode etc.
     **/
    private $productionCompany;
    public function setProductionCompany($productionCompany) {
        $this->productionCompany = $productionCompany;

        return $this;
    }

    /**
     * @return OrganizationSchema     **/
    public function getProductionCompany() {
        return $this->productionCompany;
    }

    /**
     * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in <a href='http://en.wikipedia.org/wiki/ISO_3166'>ISO 3166 format</a>.
     **/
    private $regionsAllowed;
    public function setRegionsAllowed($regionsAllowed) {
        $this->regionsAllowed = $regionsAllowed;

        return $this;
    }

    /**
     * @return PlaceSchema     **/
    public function getRegionsAllowed() {
        return $this->regionsAllowed;
    }

    /**
     * Indicates if use of the media require a subscription  (either paid or free). Allowed values are <code>true</code> or <code>false</code> (note that an earlier version had 'yes', 'no').
     **/
    private $requiresSubscription;
    public function setRequiresSubscription($requiresSubscription) {
        $this->requiresSubscription = $requiresSubscription;

        return $this;
    }

    /**
     * @return BooleanSchema     **/
    public function getRequiresSubscription() {
        return $this->requiresSubscription;
    }

    /**
     * Date when this media object was uploaded to this site.
     **/
    private $uploadDate;
    public function setUploadDate($uploadDate) {
        $this->uploadDate = $uploadDate;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getUploadDate() {
        return $this->uploadDate;
    }

    /**
     * The width of the item.
     **/
    private $width;
    public function setWidth($width) {
        $this->width = $width;

        return $this;
    }

    /**
     * @return DistanceSchema|QuantitativeValueSchema     **/
    public function getWidth() {
        return $this->width;
    }


}
