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
 * An article, such as a news article or piece of investigative report. Newspapers and magazines have articles of many different types and this is intended to cover them all.

      <br/><br/>See also <a href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html">blog post</a>.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ArticleSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new ArticleSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The actual body of the article.
     **/
    private $articleBody;
    public function setArticleBody($articleBody) {
        $this->articleBody = $articleBody;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getArticleBody() {
        return $this->articleBody;
    }

    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
     **/
    private $articleSection;
    public function setArticleSection($articleSection) {
        $this->articleSection = $articleSection;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getArticleSection() {
        return $this->articleSection;
    }

    /**
     * The page on which the work ends; for example "138" or "xvi".
     **/
    private $pageEnd;
    public function setPageEnd($pageEnd) {
        $this->pageEnd = $pageEnd;

        return $this;
    }

    /**
     * @return IntegerSchema|TextSchema     **/
    public function getPageEnd() {
        return $this->pageEnd;
    }

    /**
     * The page on which the work starts; for example "135" or "xiii".
     **/
    private $pageStart;
    public function setPageStart($pageStart) {
        $this->pageStart = $pageStart;

        return $this;
    }

    /**
     * @return IntegerSchema|TextSchema     **/
    public function getPageStart() {
        return $this->pageStart;
    }

    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     **/
    private $pagination;
    public function setPagination($pagination) {
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPagination() {
        return $this->pagination;
    }

    /**
     * The number of words in the text of the Article.
     **/
    private $wordCount;
    public function setWordCount($wordCount) {
        $this->wordCount = $wordCount;

        return $this;
    }

    /**
     * @return IntegerSchema     **/
    public function getWordCount() {
        return $this->wordCount;
    }


}
