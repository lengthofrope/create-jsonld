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
 * A NewsArticle is an article whose content reports news, or provides background context and supporting materials for understanding the news.

 * A more detailed overview of [schema.org News markup](/docs/news.html) is also available.

 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class NewsArticleSchema extends ArticleSchema
{
    public static function factory(): NewsArticleSchema
    {
        return new NewsArticleSchema('https://schema.org/', 'NewsArticle');
    }

    /**
     * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
     *
     * @param $printPage 
     * @return static
     **/
    public function setPrintPage($printPage): static {
        $this->properties['printPage'] = $printPage;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPrintPage() {
        return $this->properties['printPage'];
    }

    /**
     * The edition of the print product in which the NewsArticle appears.
     *
     * @param $printEdition 
     * @return static
     **/
    public function setPrintEdition($printEdition): static {
        $this->properties['printEdition'] = $printEdition;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPrintEdition() {
        return $this->properties['printEdition'];
    }

    /**
     * A [dateline](https://en.wikipedia.org/wiki/Dateline) is a brief piece of text included in news articles that describes where and when the story was written or filed though the date is often omitted. Sometimes only a placename is provided.

Structured representations of dateline-related information can also be expressed more explicitly using [[locationCreated]] (which represents where a work was created, e.g. where a news report was written).  For location depicted or described in the content, use [[contentLocation]].

Dateline summaries are oriented more towards human readers than towards automated processing, and can vary substantially. Some examples: "BEIRUT, Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting from Washington", "Beijing/Moscow", "QUEZON CITY, Philippines".
      
     *
     * @param $dateline 
     * @return static
     **/
    public function setDateline($dateline): static {
        $this->properties['dateline'] = $dateline;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDateline() {
        return $this->properties['dateline'];
    }

    /**
     * The number of the column in which the NewsArticle appears in the print edition.
     *
     * @param $printColumn 
     * @return static
     **/
    public function setPrintColumn($printColumn): static {
        $this->properties['printColumn'] = $printColumn;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPrintColumn() {
        return $this->properties['printColumn'];
    }

    /**
     * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
     *
     * @param $printSection 
     * @return static
     **/
    public function setPrintSection($printSection): static {
        $this->properties['printSection'] = $printSection;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPrintSection() {
        return $this->properties['printSection'];
    }


}
