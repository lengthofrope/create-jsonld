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
 * A review of an item - for example, of a restaurant, movie, or store.
 *
 * @see https://schema.org/Review
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Review extends CreativeWork
{
    public static function factory(): Review
    {
        return new Review('https://schema.org/', 'Review');
    }

    /**
     * An associated [[Review]].
     *
     * @param $associatedReview \LengthOfRope\JSONLD\Schema\Review
     * @return static
     **/
    public function setAssociatedReview($associatedReview): static {
        $this->properties['associatedReview'] = $associatedReview;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Review
     **/
    public function getAssociatedReview() {
        return $this->properties['associatedReview'];
    }
    /**
     * Provides positive considerations regarding something, for example product
     * highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.
     *
     * In the case of a [[Review]], the property describes the [[itemReviewed]] from
     * the perspective of the review; in the case of a [[Product]], the product itself
     * is being described.
     *
     * The property values can be expressed either as unstructured text (repeated as
     * necessary), or if ordered, as a list (in which case the most positive is at the
     * beginning of the list).
     *
     * @param $positiveNotes \LengthOfRope\JSONLD\Schema\ItemList|\LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\Schema\ListItem|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setPositiveNotes($positiveNotes): static {
        $this->properties['positiveNotes'] = $positiveNotes;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ItemList|\LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\Schema\ListItem|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getPositiveNotes() {
        return $this->properties['positiveNotes'];
    }
    /**
     * An associated [[ClaimReview]], related by specific common content, topic or
     * claim. The expectation is that this property would be most typically used in
     * cases where a single activity is conducting both claim reviews and media
     * reviews, in which case [[relatedMediaReview]] would commonly be used on a
     * [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
     *
     * @param $associatedClaimReview \LengthOfRope\JSONLD\Schema\Review
     * @return static
     **/
    public function setAssociatedClaimReview($associatedClaimReview): static {
        $this->properties['associatedClaimReview'] = $associatedClaimReview;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Review
     **/
    public function getAssociatedClaimReview() {
        return $this->properties['associatedClaimReview'];
    }
    /**
     * The actual body of the review.
     *
     * @param $reviewBody \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setReviewBody($reviewBody): static {
        $this->properties['reviewBody'] = $reviewBody;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getReviewBody() {
        return $this->properties['reviewBody'];
    }
    /**
     * The item that is being reviewed/rated.
     *
     * @param $itemReviewed \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setItemReviewed($itemReviewed): static {
        $this->properties['itemReviewed'] = $itemReviewed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getItemReviewed() {
        return $this->properties['itemReviewed'];
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
     * The rating given in this review. Note that reviews can themselves be rated. The
     * ```reviewRating``` applies to rating given by the review. The
     * [[aggregateRating]] property applies to the review itself, as a creative work.
     *
     * @param $reviewRating \LengthOfRope\JSONLD\Schema\Rating
     * @return static
     **/
    public function setReviewRating($reviewRating): static {
        $this->properties['reviewRating'] = $reviewRating;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Rating
     **/
    public function getReviewRating() {
        return $this->properties['reviewRating'];
    }
    /**
     * Provides negative considerations regarding something, most typically in pro/con
     * lists for reviews (alongside [[positiveNotes]]). For symmetry
     *
     * In the case of a [[Review]], the property describes the [[itemReviewed]] from
     * the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. Since product descriptions
     * tend to emphasise positive claims, it may be relatively unusual to find
     * [[negativeNotes]] used in this way. Nevertheless for the sake of symmetry,
     * [[negativeNotes]] can be used on [[Product]].
     *
     * The property values can be expressed either as unstructured text (repeated as
     * necessary), or if ordered, as a list (in which case the most negative is at the
     * beginning of the list).
     *
     * @param $negativeNotes \LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\Schema\ItemList|\LengthOfRope\JSONLD\Schema\ListItem|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setNegativeNotes($negativeNotes): static {
        $this->properties['negativeNotes'] = $negativeNotes;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\Schema\ItemList|\LengthOfRope\JSONLD\Schema\ListItem|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getNegativeNotes() {
        return $this->properties['negativeNotes'];
    }
    /**
     * An associated [[MediaReview]], related by specific common content, topic or
     * claim. The expectation is that this property would be most typically used in
     * cases where a single activity is conducting both claim reviews and media
     * reviews, in which case [[relatedMediaReview]] would commonly be used on a
     * [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
     *
     * @param $associatedMediaReview \LengthOfRope\JSONLD\Schema\Review
     * @return static
     **/
    public function setAssociatedMediaReview($associatedMediaReview): static {
        $this->properties['associatedMediaReview'] = $associatedMediaReview;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Review
     **/
    public function getAssociatedMediaReview() {
        return $this->properties['associatedMediaReview'];
    }
}
