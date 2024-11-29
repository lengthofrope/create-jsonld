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
 * A discrete unit of inheritance which affects one or more biological traits (Source: [https://en.wikipedia.org/wiki/Gene](https://en.wikipedia.org/wiki/Gene)). Examples include FOXP2 (Forkhead box protein P2), SCARNA21 (small Cajal body-specific RNA 21), A- (agouti genotype).
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class GeneSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new GeneSchema('https://schema.org/', 'Gene');
    }

    /**
     * Tissue, organ, biological sample, etc in which activity of this gene has been observed experimentally. For example brain, digestive system.
     *
     * @param $expressedIn |||
     **/
    public function setExpressedIn($expressedIn) {
        $this->properties['expressedIn'] = $expressedIn;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getExpressedIn() {
        return $this->properties['expressedIn'];
    }

    /**
     * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a Protein.
     *
     * @param $hasBioPolymerSequence 
     **/
    public function setHasBioPolymerSequence($hasBioPolymerSequence) {
        $this->properties['hasBioPolymerSequence'] = $hasBioPolymerSequence;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasBioPolymerSequence() {
        return $this->properties['hasBioPolymerSequence'];
    }

    /**
     * Another BioChemEntity encoded by this one. 
     *
     * @param $encodesBioChemEntity 
     **/
    public function setEncodesBioChemEntity($encodesBioChemEntity) {
        $this->properties['encodesBioChemEntity'] = $encodesBioChemEntity;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEncodesBioChemEntity() {
        return $this->properties['encodesBioChemEntity'];
    }

    /**
     * Another gene which is a variation of this one.
     *
     * @param $alternativeOf 
     **/
    public function setAlternativeOf($alternativeOf) {
        $this->properties['alternativeOf'] = $alternativeOf;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAlternativeOf() {
        return $this->properties['alternativeOf'];
    }


}
