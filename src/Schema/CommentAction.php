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
 * The act of generating a comment about a subject.
 *
 * @see https://schema.org/CommentAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CommentAction extends CommunicateAction
{
    public static function factory(): CommentAction
    {
        return new CommentAction('https://schema.org/', 'CommentAction');
    }

    /**
     * A sub property of result. The Comment created or sent as a result of this
     * action.
     *
     * @param $resultComment \LengthOfRope\JSONLD\Schema\Comment
     * @return static
     **/
    public function setResultComment($resultComment): static {
        $this->properties['resultComment'] = $resultComment;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Comment
     **/
    public function getResultComment() {
        return $this->properties['resultComment'];
    }
}
