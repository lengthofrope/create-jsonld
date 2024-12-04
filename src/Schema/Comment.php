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
 * A comment on an item - for example, a comment on a blog post. The comment's content is expressed via the [[text]] property, and its topic via [[about]], properties shared with all CreativeWorks.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Comment extends CreativeWork
{
    public static function factory(): Comment
    {
        return new Comment('https://schema.org/', 'Comment');
    }

    /**
     * The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about it.
     *
     * @param $parentItem |
     * @return static
     **/
    public function setParentItem($parentItem): static {
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
     * The number of downvotes this question, answer or comment has received from the community.
     *
     * @param $downvoteCount 
     * @return static
     **/
    public function setDownvoteCount($downvoteCount): static {
        $this->properties['downvoteCount'] = $downvoteCount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDownvoteCount() {
        return $this->properties['downvoteCount'];
    }

    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
     *
     * @param $sharedContent 
     * @return static
     **/
    public function setSharedContent($sharedContent): static {
        $this->properties['sharedContent'] = $sharedContent;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSharedContent() {
        return $this->properties['sharedContent'];
    }

    /**
     * The number of upvotes this question, answer or comment has received from the community.
     *
     * @param $upvoteCount 
     * @return static
     **/
    public function setUpvoteCount($upvoteCount): static {
        $this->properties['upvoteCount'] = $upvoteCount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getUpvoteCount() {
        return $this->properties['upvoteCount'];
    }


}
