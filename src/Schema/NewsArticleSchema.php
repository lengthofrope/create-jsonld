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
 * A news article.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class NewsArticleSchema extends ArticleSchema
{
    public static function factory()
    {
        return new NewsArticleSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The location where the NewsArticle was produced.
     **/
    private $dateline;
    public function setDateline($dateline) {
        $this->dateline = $dateline;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getDateline() {
        return $this->dateline;
    }

    /**
     * The number of the column in which the NewsArticle appears in the print edition.
     **/
    private $printColumn;
    public function setPrintColumn($printColumn) {
        $this->printColumn = $printColumn;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPrintColumn() {
        return $this->printColumn;
    }

    /**
     * The edition of the print product in which the NewsArticle appears.
     **/
    private $printEdition;
    public function setPrintEdition($printEdition) {
        $this->printEdition = $printEdition;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPrintEdition() {
        return $this->printEdition;
    }

    /**
     * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
     **/
    private $printPage;
    public function setPrintPage($printPage) {
        $this->printPage = $printPage;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPrintPage() {
        return $this->printPage;
    }

    /**
     * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
     **/
    private $printSection;
    public function setPrintSection($printSection) {
        $this->printSection = $printSection;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPrintSection() {
        return $this->printSection;
    }


}
