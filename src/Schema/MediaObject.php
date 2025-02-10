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
 * A media object, such as an image, video, audio, or text object embedded in a web
 * page or a downloadable dataset i.e. DataDownload. Note that a creative work may
 * have many media objects associated with it on the same web page. For example, a
 * page about a single song (MusicRecording) may have a music video (VideoObject),
 * and a high and low bandwidth audio stream (2 AudioObject's).
 *
 * @see https://schema.org/MediaObject
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MediaObject extends CreativeWork
{
    public static function factory(): MediaObject
    {
        return new MediaObject('https://schema.org/', 'MediaObject');
    }

    /**
     * A NewsArticle associated with the Media Object.
     *
     * @param $associatedArticle \LengthOfRope\JSONLD\Schema\NewsArticle
     * @return static
     **/
    public function setAssociatedArticle($associatedArticle): static {
        $this->properties['associatedArticle'] = $associatedArticle;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\NewsArticle
     **/
    public function getAssociatedArticle() {
        return $this->properties['associatedArticle'];
    }
    /**
     * File size in (mega/kilo)bytes.
     *
     * @param $contentSize \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setContentSize($contentSize): static {
        $this->properties['contentSize'] = $contentSize;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getContentSize() {
        return $this->properties['contentSize'];
    }
    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery charge
     * specification is not valid, e.g. a region where the transaction is not allowed.
     *
     * See also [[eligibleRegion]].
     *
     *
     * @param $ineligibleRegion \LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\GeoShape
     * @return static
     **/
    public function setIneligibleRegion($ineligibleRegion): static {
        $this->properties['ineligibleRegion'] = $ineligibleRegion;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\GeoShape
     **/
    public function getIneligibleRegion() {
        return $this->properties['ineligibleRegion'];
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
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For actions
     * that span a period of time, when the action was performed. E.g. John wrote a
     * book from January to *December*. For media, including audio and video, it's the
     * time offset of the end of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when
     * describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @param $endTime \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeTime
     * @return static
     **/
    public function setEndTime($endTime): static {
        $this->properties['endTime'] = $endTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeTime
     **/
    public function getEndTime() {
        return $this->properties['endTime'];
    }
    /**
     * Date (including time if available) when this media object was uploaded to this
     * site.
     *
     * @param $uploadDate \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setUploadDate($uploadDate): static {
        $this->properties['uploadDate'] = $uploadDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getUploadDate() {
        return $this->properties['uploadDate'];
    }
    /**
     * Actual bytes of the media object, for example the image file or video file.
     *
     * @param $contentUrl \LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setContentUrl($contentUrl): static {
        $this->properties['contentUrl'] = $contentUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getContentUrl() {
        return $this->properties['contentUrl'];
    }
    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John
     * wrote a book from *January* to December. For media, including audio and video,
     * it's the time offset of the start of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when
     * describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @param $startTime \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeTime
     * @return static
     **/
    public function setStartTime($startTime): static {
        $this->properties['startTime'] = $startTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeTime
     **/
    public function getStartTime() {
        return $this->properties['startTime'];
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
     * The production company or studio responsible for the item, e.g. series, video
     * game, episode etc.
     *
     * @param $productionCompany \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setProductionCompany($productionCompany): static {
        $this->properties['productionCompany'] = $productionCompany;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getProductionCompany() {
        return $this->properties['productionCompany'];
    }
    /**
     * The height of the item.
     *
     * @param $height \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setHeight($height): static {
        $this->properties['height'] = $height;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getHeight() {
        return $this->properties['height'];
    }
    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $duration \LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setDuration($duration): static {
        $this->properties['duration'] = $duration;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getDuration() {
        return $this->properties['duration'];
    }
    /**
     * The [SHA-2](https://en.wikipedia.org/wiki/SHA-2) SHA256 hash of the content of
     * the item. For example, a zero-length input has value
     * 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'.
     *
     * @param $sha256 \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setSha256($sha256): static {
        $this->properties['sha256'] = $sha256;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getSha256() {
        return $this->properties['sha256'];
    }
    /**
     * The width of the item.
     *
     * @param $width \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setWidth($width): static {
        $this->properties['width'] = $width;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getWidth() {
        return $this->properties['width'];
    }
    /**
     * The bitrate of the media object.
     *
     * @param $bitrate \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setBitrate($bitrate): static {
        $this->properties['bitrate'] = $bitrate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getBitrate() {
        return $this->properties['bitrate'];
    }
    /**
     * A URL pointing to a player for a specific video. In general, this is the
     * information in the ```src``` element of an ```embed``` tag and should not be the
     * same as the content of the ```loc``` tag.
     *
     * @param $embedUrl \LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setEmbedUrl($embedUrl): static {
        $this->properties['embedUrl'] = $embedUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getEmbedUrl() {
        return $this->properties['embedUrl'];
    }
    /**
     * Indicates if use of the media require a subscription  (either paid or free).
     * Allowed values are ```true``` or ```false``` (note that an earlier version had
     * 'yes', 'no').
     *
     * @param $requiresSubscription \LengthOfRope\JSONLD\DataType\TypeBoolean|\LengthOfRope\JSONLD\Schema\MediaSubscription
     * @return static
     **/
    public function setRequiresSubscription($requiresSubscription): static {
        $this->properties['requiresSubscription'] = $requiresSubscription;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean|\LengthOfRope\JSONLD\Schema\MediaSubscription
     **/
    public function getRequiresSubscription() {
        return $this->properties['requiresSubscription'];
    }
    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     *
     * @param $playerType \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setPlayerType($playerType): static {
        $this->properties['playerType'] = $playerType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getPlayerType() {
        return $this->properties['playerType'];
    }
    /**
     * The regions where the media is allowed. If not specified, then it's assumed to
     * be allowed everywhere. Specify the countries in [ISO 3166
     * format](http://en.wikipedia.org/wiki/ISO_3166).
     *
     * @param $regionsAllowed \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setRegionsAllowed($regionsAllowed): static {
        $this->properties['regionsAllowed'] = $regionsAllowed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getRegionsAllowed() {
        return $this->properties['regionsAllowed'];
    }
    /**
     * The CreativeWork encoded by this media object.
     *
     * @param $encodesCreativeWork \LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setEncodesCreativeWork($encodesCreativeWork): static {
        $this->properties['encodesCreativeWork'] = $encodesCreativeWork;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getEncodesCreativeWork() {
        return $this->properties['encodesCreativeWork'];
    }
}
