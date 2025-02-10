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
 * A [[MediaReview]] is a more specialized form of Review dedicated to the
 * evaluation of media content online, typically in the context of fact-checking
 * and misinformation.
 * *     For more general reviews of media in the broader sense, use
 * [[UserReview]], [[CriticReview]] or other [[Review]] types. This definition is
 * *     a work in progress. While the [[MediaManipulationRatingEnumeration]] list
 * reflects significant community review amongst fact-checkers and others working
 * *     to combat misinformation, the specific structures for representing media
 * objects, their versions and publication context, are still evolving. Similarly,
 * best practices for the relationship between [[MediaReview]] and [[ClaimReview]]
 * markup have not yet been finalized.
 *
 * @see https://schema.org/MediaReview
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MediaReview extends Review
{
    public static function factory(): MediaReview
    {
        return new MediaReview('https://schema.org/', 'MediaReview');
    }

    /**
     * Link to the page containing an original version of the content, or directly to
     * an online copy of the original [[MediaObject]] content, e.g. video file.
     *
     * @param $originalMediaLink \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\WebPage|\LengthOfRope\JSONLD\Schema\MediaObject
     * @return static
     **/
    public function setOriginalMediaLink($originalMediaLink): static {
        $this->properties['originalMediaLink'] = $originalMediaLink;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\WebPage|\LengthOfRope\JSONLD\Schema\MediaObject
     **/
    public function getOriginalMediaLink() {
        return $this->properties['originalMediaLink'];
    }
    /**
     * Describes, in a [[MediaReview]] when dealing with [[DecontextualizedContent]],
     * background information that can contribute to better interpretation of the
     * [[MediaObject]].
     *
     * @param $originalMediaContextDescription \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setOriginalMediaContextDescription($originalMediaContextDescription): static {
        $this->properties['originalMediaContextDescription'] = $originalMediaContextDescription;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getOriginalMediaContextDescription() {
        return $this->properties['originalMediaContextDescription'];
    }
    /**
     * Indicates a MediaManipulationRatingEnumeration classification of a media object
     * (in the context of how it was published or shared).
     *
     * @param $mediaAuthenticityCategory \LengthOfRope\JSONLD\Schema\MediaManipulationRatingEnumeration
     * @return static
     **/
    public function setMediaAuthenticityCategory($mediaAuthenticityCategory): static {
        $this->properties['mediaAuthenticityCategory'] = $mediaAuthenticityCategory;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MediaManipulationRatingEnumeration
     **/
    public function getMediaAuthenticityCategory() {
        return $this->properties['mediaAuthenticityCategory'];
    }
}
