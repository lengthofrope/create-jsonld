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
 * The average rating based on multiple ratings or reviews.
 *
 * @see https://schema.org/AggregateRating
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AggregateRating extends Rating
{
    public static function factory(): AggregateRating
    {
        return new AggregateRating('https://schema.org/', 'AggregateRating');
    }

    /**
     * The count of total number of ratings.
     *
     * @param $ratingCount 
     * @return static
     **/
    public function setRatingCount($ratingCount): static {
        $this->properties['ratingCount'] = $ratingCount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRatingCount() {
        return $this->properties['ratingCount'];
    }
    /**
     * The count of total number of reviews.
     *
     * @param $reviewCount 
     * @return static
     **/
    public function setReviewCount($reviewCount): static {
        $this->properties['reviewCount'] = $reviewCount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReviewCount() {
        return $this->properties['reviewCount'];
    }
    /**
     * The item that is being reviewed/rated.
     *
     * @param $itemReviewed 
     * @return static
     **/
    public function setItemReviewed($itemReviewed): static {
        $this->properties['itemReviewed'] = $itemReviewed;

        return $this;
    }

    /**
     * @return 
     **/
    public function getItemReviewed() {
        return $this->properties['itemReviewed'];
    }
}
