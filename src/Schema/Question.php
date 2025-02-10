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
 * A specific question - e.g. from a user seeking answers online, or collected in a
 * Frequently Asked Questions (FAQ) document.
 *
 * @see https://schema.org/Question
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Question extends Comment
{
    public static function factory(): Question
    {
        return new Question('https://schema.org/', 'Question');
    }

    /**
     * The number of answers this question has received.
     *
     * @param $answerCount \LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setAnswerCount($answerCount): static {
        $this->properties['answerCount'] = $answerCount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getAnswerCount() {
        return $this->properties['answerCount'];
    }
    /**
     * The parent of a question, answer or item in general. Typically used for Q/A
     * discussion threads e.g. a chain of comments with the first comment being an
     * [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from
     * something to a comment about it.
     *
     * @param $parentItem \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\Schema\Comment
     * @return static
     **/
    public function setParentItem($parentItem): static {
        $this->properties['parentItem'] = $parentItem;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\Schema\Comment
     **/
    public function getParentItem() {
        return $this->properties['parentItem'];
    }
    /**
     * The answer(s) that has been accepted as best, typically on a Question/Answer
     * site. Sites vary in their selection mechanisms, e.g. drawing on community
     * opinion and/or the view of the Question author.
     *
     * @param $acceptedAnswer \LengthOfRope\JSONLD\Schema\Answer|\LengthOfRope\JSONLD\Schema\ItemList
     * @return static
     **/
    public function setAcceptedAnswer($acceptedAnswer): static {
        $this->properties['acceptedAnswer'] = $acceptedAnswer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Answer|\LengthOfRope\JSONLD\Schema\ItemList
     **/
    public function getAcceptedAnswer() {
        return $this->properties['acceptedAnswer'];
    }
    /**
     * For questions that are part of learning resources (e.g. Quiz), eduQuestionType
     * indicates the format of question being given. Example: "Multiple choice", "Open
     * ended", "Flashcard".
     *
     * @param $eduQuestionType \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEduQuestionType($eduQuestionType): static {
        $this->properties['eduQuestionType'] = $eduQuestionType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEduQuestionType() {
        return $this->properties['eduQuestionType'];
    }
    /**
     * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a
     * Question/Answer site.
     *
     * @param $suggestedAnswer \LengthOfRope\JSONLD\Schema\Answer|\LengthOfRope\JSONLD\Schema\ItemList
     * @return static
     **/
    public function setSuggestedAnswer($suggestedAnswer): static {
        $this->properties['suggestedAnswer'] = $suggestedAnswer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Answer|\LengthOfRope\JSONLD\Schema\ItemList
     **/
    public function getSuggestedAnswer() {
        return $this->properties['suggestedAnswer'];
    }
}
