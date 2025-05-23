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
 * Protein is here used in its widest possible definition, as classes of amino acid
 * based molecules. Amyloid-beta Protein in human (UniProt P05067), eukaryota (e.g.
 * an OrthoDB group) or even a single molecule that one can point to are all of
 * type :Protein. A protein can thus be a subclass of another protein, e.g.
 * :Protein as a UniProt record can have multiple isoforms inside it which would
 * also be :Protein. They can be imagined, synthetic, hypothetical or naturally
 * occurring.
 *
 * @see https://schema.org/Protein
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Protein extends BioChemEntity
{
    public static function factory(): Protein
    {
        return new Protein('https://schema.org/', 'Protein');
    }

    /**
     * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence
     * of a Gene or an amino acid sequence of a Protein.
     *
     * @param $hasBioPolymerSequence \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setHasBioPolymerSequence($hasBioPolymerSequence): static {
        $this->properties['hasBioPolymerSequence'] = $hasBioPolymerSequence;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getHasBioPolymerSequence() {
        return $this->properties['hasBioPolymerSequence'];
    }
}
