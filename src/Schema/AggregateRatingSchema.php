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
 * The average rating based on multiple ratings or reviews.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AggregateRatingSchema extends RatingSchema
{
    public static function factory()
    {
        return new AggregateRatingSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The item that is being reviewed/rated.
     **/
    private $itemReviewed;
    public function setItemReviewed($itemReviewed) {
        $this->itemReviewed = $itemReviewed;

        return $this;
    }

    /**
     * @return ThingSchema     
     **/
    public function getItemReviewed() {
        return $this->itemReviewed;
    }

    /**
     * The count of total number of ratings.
     **/
    private $ratingCount;
    public function setRatingCount($ratingCount) {
        $this->ratingCount = $ratingCount;

        return $this;
    }

    /**
     * @return IntegerSchema     
     **/
    public function getRatingCount() {
        return $this->ratingCount;
    }

    /**
     * The count of total number of reviews.
     **/
    private $reviewCount;
    public function setReviewCount($reviewCount) {
        $this->reviewCount = $reviewCount;

        return $this;
    }

    /**
     * @return IntegerSchema     
     **/
    public function getReviewCount() {
        return $this->reviewCount;
    }


}
