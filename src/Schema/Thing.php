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
 * The most generic type of item.
 *
 * @see https://schema.org/Thing
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Thing extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory(): Thing
    {
        return new Thing('https://schema.org/', 'Thing');
    }

    /**
     * The name of the item.
     *
     * @param $name \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setName($name): static {
        $this->properties['name'] = $name;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getName() {
        return $this->properties['name'];
    }
    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties (in
     * particular, name) may be necessary for the description to be useful for
     * disambiguation.
     *
     * @param $disambiguatingDescription \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setDisambiguatingDescription($disambiguatingDescription): static {
        $this->properties['disambiguatingDescription'] = $disambiguatingDescription;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getDisambiguatingDescription() {
        return $this->properties['disambiguatingDescription'];
    }
    /**
     * Indicates a potential Action, which describes an idealized action in which this
     * thing would play an 'object' role.
     *
     * @param $potentialAction \LengthOfRope\JSONLD\Schema\Action
     * @return static
     **/
    public function setPotentialAction($potentialAction): static {
        $this->properties['potentialAction'] = $potentialAction;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Action
     **/
    public function getPotentialAction() {
        return $this->properties['potentialAction'];
    }
    /**
     * URL of the item.
     *
     * @param $url \LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setUrl($url): static {
        $this->properties['url'] = $url;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\URL
     **/
    public function getUrl() {
        return $this->properties['url'];
    }
    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated
     * properties for representing many of these, either as textual strings or as URL
     * (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more
     * details.
     *
     *
     * @param $identifier \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\PropertyValue
     * @return static
     **/
    public function setIdentifier($identifier): static {
        $this->properties['identifier'] = $identifier;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\PropertyValue
     **/
    public function getIdentifier() {
        return $this->properties['identifier'];
    }
    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param $subjectOf \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\Schema\Event
     * @return static
     **/
    public function setSubjectOf($subjectOf): static {
        $this->properties['subjectOf'] = $subjectOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\Schema\Event
     **/
    public function getSubjectOf() {
        return $this->properties['subjectOf'];
    }
    /**
     * A description of the item.
     *
     * @param $description \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\TextObject
     * @return static
     **/
    public function setDescription($description): static {
        $this->properties['description'] = $description;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\TextObject
     **/
    public function getDescription() {
        return $this->properties['description'];
    }
    /**
     * An additional type for the item, typically used for adding more specific types
     * from external vocabularies in microdata syntax. This is a relationship between
     * something and a class that the thing is in. Typically the value is a
     * URI-identified RDF class, and in this case corresponds to the
     * use of rdf:type in RDF. Text values can be used sparingly, for cases where
     * useful information can be added without their being an appropriate schema to
     * reference. In the case of text values, the class label should follow the
     * schema.org <a href="https://schema.org/docs/styleguide.html">style guide</a>.
     *
     * @param $additionalType \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setAdditionalType($additionalType): static {
        $this->properties['additionalType'] = $additionalType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     **/
    public function getAdditionalType() {
        return $this->properties['additionalType'];
    }
    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param $image \LengthOfRope\JSONLD\Schema\ImageObject|\LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setImage($image): static {
        $this->properties['image'] = $image;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ImageObject|\LengthOfRope\JSONLD\Schema\URL
     **/
    public function getImage() {
        return $this->properties['image'];
    }
    /**
     * URL of a reference Web page that unambiguously indicates the item's identity.
     * E.g. the URL of the item's Wikipedia page, Wikidata entry, or official website.
     *
     * @param $sameAs \LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setSameAs($sameAs): static {
        $this->properties['sameAs'] = $sameAs;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\URL
     **/
    public function getSameAs() {
        return $this->properties['sameAs'];
    }
    /**
     * An alias for the item.
     *
     * @param $alternateName \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setAlternateName($alternateName): static {
        $this->properties['alternateName'] = $alternateName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getAlternateName() {
        return $this->properties['alternateName'];
    }
    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity
     * being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param $mainEntityOfPage \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setMainEntityOfPage($mainEntityOfPage): static {
        $this->properties['mainEntityOfPage'] = $mainEntityOfPage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\Schema\URL
     **/
    public function getMainEntityOfPage() {
        return $this->properties['mainEntityOfPage'];
    }
}
