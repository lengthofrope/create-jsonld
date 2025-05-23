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
 * A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
 *
 * @see https://schema.org/Rating
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Rating extends Intangible
{
    public static function factory(): Rating
    {
        return new Rating('https://schema.org/', 'Rating');
    }

    /**
     * The lowest value allowed in this rating system.
     *
     * @param $worstRating \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setWorstRating($worstRating): static {
        $this->properties['worstRating'] = $worstRating;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getWorstRating() {
        return $this->properties['worstRating'];
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
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     * @param $reviewAspect \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setReviewAspect($reviewAspect): static {
        $this->properties['reviewAspect'] = $reviewAspect;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getReviewAspect() {
        return $this->properties['reviewAspect'];
    }
    /**
     * The highest value allowed in this rating system.
     *
     * @param $bestRating \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setBestRating($bestRating): static {
        $this->properties['bestRating'] = $bestRating;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getBestRating() {
        return $this->properties['bestRating'];
    }
    /**
     * A short explanation (e.g. one to two sentences) providing background context and
     * other information that led to the conclusion expressed in the rating. This is
     * particularly applicable to ratings associated with "fact check" markup using
     * [[ClaimReview]].
     *
     * @param $ratingExplanation \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setRatingExplanation($ratingExplanation): static {
        $this->properties['ratingExplanation'] = $ratingExplanation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getRatingExplanation() {
        return $this->properties['ratingExplanation'];
    }
    /**
     * The rating for the content.
     *
     * Usage guidelines:
     *
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     *
     * @param $ratingValue \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setRatingValue($ratingValue): static {
        $this->properties['ratingValue'] = $ratingValue;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getRatingValue() {
        return $this->properties['ratingValue'];
    }
}
