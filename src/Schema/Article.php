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
 * An article, such as a news article or piece of investigative report. Newspapers
 * and magazines have articles of many different types and this is intended to
 * cover them all.
 *
 * See also [blog
 * post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
 *
 * @see https://schema.org/Article
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Article extends CreativeWork
{
    public static function factory(): Article
    {
        return new Article('https://schema.org/', 'Article');
    }

    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for
     * example, "1-6, 9, 55" or "10-12, 46-49".
     *
     * @param $pagination 
     * @return static
     **/
    public function setPagination($pagination): static {
        $this->properties['pagination'] = $pagination;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPagination() {
        return $this->properties['pagination'];
    }
    /**
     * The page on which the work starts; for example "135" or "xiii".
     *
     * @param $pageStart |
     * @return static
     **/
    public function setPageStart($pageStart): static {
        $this->properties['pageStart'] = $pageStart;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPageStart() {
        return $this->properties['pageStart'];
    }
    /**
     * For an [[Article]], typically a [[NewsArticle]], the backstory property provides
     * a textual summary giving a brief explanation of why and how an article was
     * created. In a journalistic setting this could include information about
     * reporting process, methods, interviews, data sources, etc.
     *
     * @param $backstory |
     * @return static
     **/
    public function setBackstory($backstory): static {
        $this->properties['backstory'] = $backstory;

        return $this;
    }

    /**
     * @return |
     **/
    public function getBackstory() {
        return $this->properties['backstory'];
    }
    /**
     * The actual body of the article.
     *
     * @param $articleBody 
     * @return static
     **/
    public function setArticleBody($articleBody): static {
        $this->properties['articleBody'] = $articleBody;

        return $this;
    }

    /**
     * @return 
     **/
    public function getArticleBody() {
        return $this->properties['articleBody'];
    }
    /**
     * The number of words in the text of the Article.
     *
     * @param $wordCount 
     * @return static
     **/
    public function setWordCount($wordCount): static {
        $this->properties['wordCount'] = $wordCount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWordCount() {
        return $this->properties['wordCount'];
    }
    /**
     * The page on which the work ends; for example "138" or "xvi".
     *
     * @param $pageEnd |
     * @return static
     **/
    public function setPageEnd($pageEnd): static {
        $this->properties['pageEnd'] = $pageEnd;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPageEnd() {
        return $this->properties['pageEnd'];
    }
    /**
     * Indicates sections of a Web page that are particularly 'speakable' in the sense
     * of being highlighted as being especially appropriate for text-to-speech
     * conversion. Other sections of a page may also be usefully spoken in particular
     * circumstances; the 'speakable' property serves to indicate the parts most likely
     * to be generally useful for speech.
     *
     * The *speakable* property can be repeated an arbitrary number of times, with
     * three kinds of possible 'content-locator' values:
     *
     * 1.) *id-value* URL references - uses *id-value* of an element in the page being
     * annotated. The simplest use of *speakable* has (potentially relative) URL
     * values, referencing identified sections of the document concerned.
     *
     * 2.) CSS Selectors - addresses content in the annotated page, e.g. via class
     * attribute. Use the [[cssSelector]] property.
     *
     * 3.)  XPaths - addresses content via XPaths (assuming an XML view of the
     * content). Use the [[xpath]] property.
     *
     *
     * For more sophisticated markup of speakable sections beyond simple ID references,
     * either CSS selectors or XPath expressions to pick out document section(s) as
     * speakable. For this
     * we define a supporting type, [[SpeakableSpecification]]  which is defined to be
     * a possible value of the *speakable* property.
     *
     *
     * @param $speakable |
     * @return static
     **/
    public function setSpeakable($speakable): static {
        $this->properties['speakable'] = $speakable;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSpeakable() {
        return $this->properties['speakable'];
    }
    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper, such
     * as Sports, Lifestyle, etc.
     *
     * @param $articleSection 
     * @return static
     **/
    public function setArticleSection($articleSection): static {
        $this->properties['articleSection'] = $articleSection;

        return $this;
    }

    /**
     * @return 
     **/
    public function getArticleSection() {
        return $this->properties['articleSection'];
    }
}
