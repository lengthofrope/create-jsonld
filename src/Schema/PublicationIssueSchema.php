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
 * A part of a successively published publication such as a periodical or publication volume, often numbered, usually containing a grouping of works such as articles.

      <br/><br/>See also <a href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html">blog post</a>.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PublicationIssueSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new PublicationIssueSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * Identifies the issue of publication; for example, "iii" or "2".
     **/
    private $issueNumber;
    public function setIssueNumber($issueNumber) {
        $this->issueNumber = $issueNumber;

        return $this;
    }

    /**
     * @return IntegerSchema|TextSchema     
     **/
    public function getIssueNumber() {
        return $this->issueNumber;
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
     * @return IntegerSchema|TextSchema     
     **/
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
     * @return IntegerSchema|TextSchema     
     **/
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
     * @return TextSchema     
     **/
    public function getPagination() {
        return $this->pagination;
    }


}
