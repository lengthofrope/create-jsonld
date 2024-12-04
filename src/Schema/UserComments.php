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
 * UserInteraction and its subtypes is an old way of talking about users
 * interacting with pages. It is generally better to use [[Action]]-based
 * vocabulary, alongside types such as [[Comment]].
 *
 * @see https://schema.org/UserComments
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class UserComments extends UserInteraction
{
    public static function factory(): UserComments
    {
        return new UserComments('https://schema.org/', 'UserComments');
    }

    /**
     * The time at which the UserComment was made.
     *
     * @param $commentTime |
     * @return static
     **/
    public function setCommentTime($commentTime): static {
        $this->properties['commentTime'] = $commentTime;

        return $this;
    }

    /**
     * @return |
     **/
    public function getCommentTime() {
        return $this->properties['commentTime'];
    }
    /**
     * Specifies the CreativeWork associated with the UserComment.
     *
     * @param $discusses 
     * @return static
     **/
    public function setDiscusses($discusses): static {
        $this->properties['discusses'] = $discusses;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDiscusses() {
        return $this->properties['discusses'];
    }
    /**
     * The creator/author of this CreativeWork. This is the same as the Author property
     * for CreativeWork.
     *
     * @param $creator |
     * @return static
     **/
    public function setCreator($creator): static {
        $this->properties['creator'] = $creator;

        return $this;
    }

    /**
     * @return |
     **/
    public function getCreator() {
        return $this->properties['creator'];
    }
    /**
     * The text of the UserComment.
     *
     * @param $commentText 
     * @return static
     **/
    public function setCommentText($commentText): static {
        $this->properties['commentText'] = $commentText;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCommentText() {
        return $this->properties['commentText'];
    }
    /**
     * The URL at which a reply may be posted to the specified UserComment.
     *
     * @param $replyToUrl 
     * @return static
     **/
    public function setReplyToUrl($replyToUrl): static {
        $this->properties['replyToUrl'] = $replyToUrl;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReplyToUrl() {
        return $this->properties['replyToUrl'];
    }
}
