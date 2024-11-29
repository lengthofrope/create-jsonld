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
 * An answer offered to a question; perhaps correct, perhaps opinionated or wrong.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AnswerSchema extends CommentSchema
{
    public static function factory()
    {
        return new AnswerSchema('https://schema.org/', 'Answer');
    }

    /**
     * The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about it.
     *
     * @param $parentItem |
     **/
    public function setParentItem($parentItem) {
        $this->properties['parentItem'] = $parentItem;

        return $this;
    }

    /**
     * @return |
     **/
    public function getParentItem() {
        return $this->properties['parentItem'];
    }

    /**
     * A step-by-step or full explanation about Answer. Can outline how this Answer was achieved or contain more broad clarification or statement about it. 
     *
     * @param $answerExplanation |
     **/
    public function setAnswerExplanation($answerExplanation) {
        $this->properties['answerExplanation'] = $answerExplanation;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAnswerExplanation() {
        return $this->properties['answerExplanation'];
    }


}
