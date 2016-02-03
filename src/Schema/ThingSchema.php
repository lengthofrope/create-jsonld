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
 * The most generic type of item.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ThingSchema extends \LengthOfRope\JSONLD\Elements\ElementGroup
{
    public static function factory()
    {
        return new ThingSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
     **/
    private $additionalType;
    public function setAdditionalType($additionalType) {
        $this->additionalType = $additionalType;

        return $this;
    }

    /**
     * @return URLSchema     **/
    public function getAdditionalType() {
        return $this->additionalType;
    }

    /**
     * An alias for the item.
     **/
    private $alternateName;
    public function setAlternateName($alternateName) {
        $this->alternateName = $alternateName;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getAlternateName() {
        return $this->alternateName;
    }

    /**
     * A short description of the item.
     **/
    private $description;
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getDescription() {
        return $this->description;
    }

    /**
     * An image of the item. This can be a <a href="http://schema.org/URL">URL</a> or a fully described <a href="http://schema.org/ImageObject">ImageObject</a>.
     **/
    private $image;
    public function setImage($image) {
        $this->image = $image;

        return $this;
    }

    /**
     * @return URLSchema|ImageObjectSchema     **/
    public function getImage() {
        return $this->image;
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described.
      <br /><br />
      See <a href="/docs/datamodel.html#mainEntityBackground">background notes</a> for details.
      
     **/
    private $mainEntityOfPage;
    public function setMainEntityOfPage($mainEntityOfPage) {
        $this->mainEntityOfPage = $mainEntityOfPage;

        return $this;
    }

    /**
     * @return CreativeWorkSchema|URLSchema     **/
    public function getMainEntityOfPage() {
        return $this->mainEntityOfPage;
    }

    /**
     * The name of the item.
     **/
    private $name;
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getName() {
        return $this->name;
    }

    /**
     * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
     **/
    private $potentialAction;
    public function setPotentialAction($potentialAction) {
        $this->potentialAction = $potentialAction;

        return $this;
    }

    /**
     * @return ActionSchema     **/
    public function getPotentialAction() {
        return $this->potentialAction;
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Freebase page, or official website.
     **/
    private $sameAs;
    public function setSameAs($sameAs) {
        $this->sameAs = $sameAs;

        return $this;
    }

    /**
     * @return URLSchema     **/
    public function getSameAs() {
        return $this->sameAs;
    }

    /**
     * URL of the item.
     **/
    private $url;
    public function setUrl($url) {
        $this->url = $url;

        return $this;
    }

    /**
     * @return URLSchema     **/
    public function getUrl() {
        return $this->url;
    }


}
