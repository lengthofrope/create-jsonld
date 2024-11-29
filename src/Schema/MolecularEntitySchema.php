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
 * Any constitutionally or isotopically distinct atom, molecule, ion, ion pair, radical, radical ion, complex, conformer etc., identifiable as a separately distinguishable entity.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MolecularEntitySchema extends BioChemEntitySchema
{
    public static function factory()
    {
        return new MolecularEntitySchema('https://schema.org/', 'MolecularEntity');
    }

    /**
     * Systematic method of naming chemical compounds as recommended by the International Union of Pure and Applied Chemistry (IUPAC).
     *
     * @param $iupacName 
     **/
    public function setIupacName($iupacName) {
        $this->properties['iupacName'] = $iupacName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIupacName() {
        return $this->properties['iupacName'];
    }

    /**
     * A specification in form of a line notation for describing the structure of chemical species using short ASCII strings.  Double bond stereochemistry \ indicators may need to be escaped in the string in formats where the backslash is an escape character.
     *
     * @param $smiles 
     **/
    public function setSmiles($smiles) {
        $this->properties['smiles'] = $smiles;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSmiles() {
        return $this->properties['smiles'];
    }

    /**
     * The empirical formula is the simplest whole number ratio of all the atoms in a molecule.
     *
     * @param $molecularFormula 
     **/
    public function setMolecularFormula($molecularFormula) {
        $this->properties['molecularFormula'] = $molecularFormula;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMolecularFormula() {
        return $this->properties['molecularFormula'];
    }

    /**
     * Intended use of the BioChemEntity by humans.
     *
     * @param $potentialUse 
     **/
    public function setPotentialUse($potentialUse) {
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
     * InChIKey is a hashed version of the full InChI (using the SHA-256 algorithm).
     *
     * @param $inChIKey 
     **/
    public function setInChIKey($inChIKey) {
        $this->properties['inChIKey'] = $inChIKey;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInChIKey() {
        return $this->properties['inChIKey'];
    }

    /**
     * This is the molecular weight of the entity being described, not of the parent. Units should be included in the form '&lt;Number&gt; &lt;unit&gt;', for example '12 amu' or as '&lt;QuantitativeValue&gt;.
     *
     * @param $molecularWeight |
     **/
    public function setMolecularWeight($molecularWeight) {
        $this->properties['molecularWeight'] = $molecularWeight;

        return $this;
    }

    /**
     * @return |
     **/
    public function getMolecularWeight() {
        return $this->properties['molecularWeight'];
    }

    /**
     * Non-proprietary identifier for molecular entity that can be used in printed and electronic data sources thus enabling easier linking of diverse data compilations.
     *
     * @param $inChI 
     **/
    public function setInChI($inChI) {
        $this->properties['inChI'] = $inChI;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInChI() {
        return $this->properties['inChI'];
    }

    /**
     * A role played by the BioChemEntity within a chemical context.
     *
     * @param $chemicalRole 
     **/
    public function setChemicalRole($chemicalRole) {
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
     * The monoisotopic mass is the sum of the masses of the atoms in a molecule using the unbound, ground-state, rest mass of the principal (most abundant) isotope for each element instead of the isotopic average mass. Please include the units in the form '&lt;Number&gt; &lt;unit&gt;', for example '770.230488 g/mol' or as '&lt;QuantitativeValue&gt;.
     *
     * @param $monoisotopicMolecularWeight |
     **/
    public function setMonoisotopicMolecularWeight($monoisotopicMolecularWeight) {
        $this->properties['monoisotopicMolecularWeight'] = $monoisotopicMolecularWeight;

        return $this;
    }

    /**
     * @return |
     **/
    public function getMonoisotopicMolecularWeight() {
        return $this->properties['monoisotopicMolecularWeight'];
    }


}
