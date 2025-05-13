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
 * A set of organisms asserted to represent a natural cohesive biological unit.
 *
 * @see https://schema.org/Taxon
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Taxon extends Thing
{
    public static function factory(): Taxon
    {
        return new Taxon('https://schema.org/', 'Taxon');
    }

    /**
     * Closest parent taxon of the taxon in question.
     *
     * @param $parentTaxon \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Taxon|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setParentTaxon($parentTaxon): static {
        $this->properties['parentTaxon'] = $parentTaxon;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\Taxon|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getParentTaxon() {
        return $this->properties['parentTaxon'];
    }
    /**
     * A Defined Term contained in this term set.
     *
     * @param $hasDefinedTerm \LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setHasDefinedTerm($hasDefinedTerm): static {
        $this->properties['hasDefinedTerm'] = $hasDefinedTerm;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getHasDefinedTerm() {
        return $this->properties['hasDefinedTerm'];
    }
    /**
     * Closest child taxa of the taxon in question.
     *
     * @param $childTaxon \LengthOfRope\JSONLD\Schema\Taxon|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setChildTaxon($childTaxon): static {
        $this->properties['childTaxon'] = $childTaxon;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Taxon|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getChildTaxon() {
        return $this->properties['childTaxon'];
    }
    /**
     * The taxonomic rank of this taxon given preferably as a URI from a controlled
     * vocabulary – typically the ranks from TDWG TaxonRank ontology or equivalent
     * Wikidata URIs.
     *
     * @param $taxonRank \LengthOfRope\JSONLD\Schema\PropertyValue|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setTaxonRank($taxonRank): static {
        $this->properties['taxonRank'] = $taxonRank;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PropertyValue|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getTaxonRank() {
        return $this->properties['taxonRank'];
    }
}
