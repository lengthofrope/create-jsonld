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
 * The act of producing a balanced opinion about the object for an audience. An
 * agent reviews an object with participants resulting in a review.
 *
 * @see https://schema.org/ReviewAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ReviewAction extends AssessAction
{
    public static function factory(): ReviewAction
    {
        return new ReviewAction('https://schema.org/', 'ReviewAction');
    }

    /**
     * A sub property of result. The review that resulted in the performing of the
     * action.
     *
     * @param $resultReview \LengthOfRope\JSONLD\Schema\Review
     * @return static
     **/
    public function setResultReview($resultReview): static {
        $this->properties['resultReview'] = $resultReview;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Review
     **/
    public function getResultReview() {
        return $this->properties['resultReview'];
    }
}
