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
 * A chemical substance is 'a portion of matter of constant composition, composed of molecular entities of the same type or of different types' (source: [ChEBI:59999](https://www.ebi.ac.uk/chebi/searchId.do?chebiId=59999)).
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ChemicalSubstanceSchema extends BioChemEntitySchema
{
    public static function factory(): ChemicalSubstanceSchema
    {
        return new ChemicalSubstanceSchema('https://schema.org/', 'ChemicalSubstance');
    }

    /**
     * Intended use of the BioChemEntity by humans.
     *
     * @param $potentialUse 
     * @return static
     **/
    public function setPotentialUse($potentialUse): static {
        $this->properties['potentialUse'] = $potentialUse;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPotentialUse() {
        return $this->properties['potentialUse'];
    }

    /**
     * A role played by the BioChemEntity within a chemical context.
     *
     * @param $chemicalRole 
     * @return static
     **/
    public function setChemicalRole($chemicalRole): static {
        $this->properties['chemicalRole'] = $chemicalRole;

        return $this;
    }

    /**
     * @return 
     **/
    public function getChemicalRole() {
        return $this->properties['chemicalRole'];
    }

    /**
     * The chemical composition describes the identity and relative ratio of the chemical elements that make up the substance.
     *
     * @param $chemicalComposition 
     * @return static
     **/
    public function setChemicalComposition($chemicalComposition): static {
        $this->properties['chemicalComposition'] = $chemicalComposition;

        return $this;
    }

    /**
     * @return 
     **/
    public function getChemicalComposition() {
        return $this->properties['chemicalComposition'];
    }


}