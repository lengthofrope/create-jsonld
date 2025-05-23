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
 * A [blog](https://en.wikipedia.org/wiki/Blog), sometimes known as a "weblog".
 * Note that the individual posts ([[BlogPosting]]s) in a [[Blog]] are often
 * colloquially referred to by the same term.
 *
 * @see https://schema.org/Blog
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Blog extends CreativeWork
{
    public static function factory(): Blog
    {
        return new Blog('https://schema.org/', 'Blog');
    }

    /**
     * A posting that is part of this blog.
     *
     * @param $blogPost \LengthOfRope\JSONLD\Schema\BlogPosting
     * @return static
     **/
    public function setBlogPost($blogPost): static {
        $this->properties['blogPost'] = $blogPost;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BlogPosting
     **/
    public function getBlogPost() {
        return $this->properties['blogPost'];
    }
    /**
     * Indicates a post that is part of a [[Blog]]. Note that historically, what we
     * term a "Blog" was once known as a "weblog", and that what we term a
     * "BlogPosting" is now often colloquially referred to as a "blog".
     *
     * @param $blogPosts \LengthOfRope\JSONLD\Schema\BlogPosting
     * @return static
     **/
    public function setBlogPosts($blogPosts): static {
        $this->properties['blogPosts'] = $blogPosts;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BlogPosting
     **/
    public function getBlogPosts() {
        return $this->properties['blogPosts'];
    }
    /**
     * The International Standard Serial Number (ISSN) that identifies this serial
     * publication. You can repeat this property to identify different formats of, or
     * the linking ISSN (ISSN-L) for, this serial publication.
     *
     * @param $issn \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setIssn($issn): static {
        $this->properties['issn'] = $issn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getIssn() {
        return $this->properties['issn'];
    }
}
