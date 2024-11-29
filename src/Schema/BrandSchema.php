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
 * A brand is a name used by an organization or business person for labeling a product, product group, or similar.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BrandSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new BrandSchema('https://schema.org/', 'Brand');
    }

    /**
     * An associated logo.
     *
     * @param $logo |
     **/
    public function setLogo($logo) {
        $this->properties['logo'] = $logo;

        return $this;
    }

    /**
     * @return |
     **/
    public function getLogo() {
        return $this->properties['logo'];
    }

    /**
     * A review of the item.
     *
     * @param $review 
     **/
    public function setReview($review) {
        $this->properties['review'] = $review;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReview() {
        return $this->properties['review'];
    }

    /**
     * A slogan or motto associated with the item.
     *
     * @param $slogan 
     **/
    public function setSlogan($slogan) {
        $this->properties['slogan'] = $slogan;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSlogan() {
        return $this->properties['slogan'];
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @param $aggregateRating 
     **/
    public function setAggregateRating($aggregateRating) {
        $this->properties['aggregateRating'] = $aggregateRating;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAggregateRating() {
        return $this->properties['aggregateRating'];
    }


}
