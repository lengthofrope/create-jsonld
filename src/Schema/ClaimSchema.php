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
 * A [[Claim]] in Schema.org represents a specific, factually-oriented claim that could be the [[itemReviewed]] in a [[ClaimReview]]. The content of a claim can be summarized with the [[text]] property. Variations on well known claims can have their common identity indicated via [[sameAs]] links, and summarized with a [[name]]. Ideally, a [[Claim]] description includes enough contextual information to minimize the risk of ambiguity or inclarity. In practice, many claims are better understood in the context in which they appear or the interpretations provided by claim reviews.

 * *    Beyond [[ClaimReview]], the Claim type can be associated with related creative works - for example a [[ScholarlyArticle]] or [[Question]] might be [[about]] some [[Claim]].

 * *    At this time, Schema.org does not define any types of relationship between claims. This is a natural area for future exploration.
 *   
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ClaimSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new ClaimSchema('https://schema.org/', 'Claim');
    }

    /**
     * Indicates the first known occurrence of a [[Claim]] in some [[CreativeWork]].
     *
     * @param $firstAppearance 
     **/
    public function setFirstAppearance($firstAppearance) {
        $this->properties['firstAppearance'] = $firstAppearance;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFirstAppearance() {
        return $this->properties['firstAppearance'];
    }

    /**
     * Indicates an occurrence of a [[Claim]] in some [[CreativeWork]].
     *
     * @param $appearance 
     **/
    public function setAppearance($appearance) {
        $this->properties['appearance'] = $appearance;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAppearance() {
        return $this->properties['appearance'];
    }

    /**
     * For a [[Claim]] interpreted from [[MediaObject]] content, the [[interpretedAsClaim]] property can be used to indicate a claim contained, implied or refined from the content of a [[MediaObject]].
     *
     * @param $claimInterpreter |
     **/
    public function setClaimInterpreter($claimInterpreter) {
        $this->properties['claimInterpreter'] = $claimInterpreter;

        return $this;
    }

    /**
     * @return |
     **/
    public function getClaimInterpreter() {
        return $this->properties['claimInterpreter'];
    }


}
