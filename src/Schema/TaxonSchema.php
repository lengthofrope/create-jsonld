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
 * A set of organisms asserted to represent a natural cohesive biological unit.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TaxonSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new TaxonSchema('https://schema.org/', 'Taxon');
    }

    /**
     * Closest parent taxon of the taxon in question.
     *
     * @param $parentTaxon ||
     **/
    public function setParentTaxon($parentTaxon) {
        $this->properties['parentTaxon'] = $parentTaxon;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getParentTaxon() {
        return $this->properties['parentTaxon'];
    }

    /**
     * Closest child taxa of the taxon in question.
     *
     * @param $childTaxon ||
     **/
    public function setChildTaxon($childTaxon) {
        $this->properties['childTaxon'] = $childTaxon;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getChildTaxon() {
        return $this->properties['childTaxon'];
    }

    /**
     * The taxonomic rank of this taxon given preferably as a URI from a controlled vocabulary – typically the ranks from TDWG TaxonRank ontology or equivalent Wikidata URIs.
     *
     * @param $taxonRank ||
     **/
    public function setTaxonRank($taxonRank) {
        $this->properties['taxonRank'] = $taxonRank;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getTaxonRank() {
        return $this->properties['taxonRank'];
    }

    /**
     * A Defined Term contained in this term set.
     *
     * @param $hasDefinedTerm 
     **/
    public function setHasDefinedTerm($hasDefinedTerm) {
        $this->properties['hasDefinedTerm'] = $hasDefinedTerm;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasDefinedTerm() {
        return $this->properties['hasDefinedTerm'];
    }


}
