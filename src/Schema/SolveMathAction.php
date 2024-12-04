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
 * The action that takes in a math expression and directs users to a page
 * potentially capable of solving/simplifying that expression.
 *
 * @see https://schema.org/SolveMathAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SolveMathAction extends Action
{
    public static function factory(): SolveMathAction
    {
        return new SolveMathAction('https://schema.org/', 'SolveMathAction');
    }

    /**
     * For questions that are part of learning resources (e.g. Quiz), eduQuestionType
     * indicates the format of question being given. Example: "Multiple choice", "Open
     * ended", "Flashcard".
     *
     * @param $eduQuestionType 
     * @return static
     **/
    public function setEduQuestionType($eduQuestionType): static {
        $this->properties['eduQuestionType'] = $eduQuestionType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEduQuestionType() {
        return $this->properties['eduQuestionType'];
    }
}
