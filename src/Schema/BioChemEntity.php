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
 * Any biological, chemical, or biochemical thing. For example: a protein; a gene;
 * a chemical; a synthetic chemical.
 *
 * @see https://schema.org/BioChemEntity
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BioChemEntity extends Thing
{
    public static function factory(): BioChemEntity
    {
        return new BioChemEntity('https://schema.org/', 'BioChemEntity');
    }

    /**
     * Subcellular location where this BioChemEntity is located; please use
     * PropertyValue if you want to include any evidence.
     *
     * @param $isLocatedInSubcellularLocation \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\PropertyValue
     * @return static
     **/
    public function setIsLocatedInSubcellularLocation($isLocatedInSubcellularLocation): static {
        $this->properties['isLocatedInSubcellularLocation'] = $isLocatedInSubcellularLocation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\PropertyValue
     **/
    public function getIsLocatedInSubcellularLocation() {
        return $this->properties['isLocatedInSubcellularLocation'];
    }
    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this
     * item. See also [[ownershipFundingInfo]].
     *
     * @param $funding \LengthOfRope\JSONLD\Schema\Grant
     * @return static
     **/
    public function setFunding($funding): static {
        $this->properties['funding'] = $funding;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Grant
     **/
    public function getFunding() {
        return $this->properties['funding'];
    }
    /**
     * Indicates a BioChemEntity that is (in some sense) a part of this BioChemEntity.
     *
     * @param $isPartOfBioChemEntity \LengthOfRope\JSONLD\Schema\BioChemEntity
     * @return static
     **/
    public function setIsPartOfBioChemEntity($isPartOfBioChemEntity): static {
        $this->properties['isPartOfBioChemEntity'] = $isPartOfBioChemEntity;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BioChemEntity
     **/
    public function getIsPartOfBioChemEntity() {
        return $this->properties['isPartOfBioChemEntity'];
    }
    /**
     * Biological process this BioChemEntity is involved in; please use PropertyValue
     * if you want to include any evidence.
     *
     * @param $isInvolvedInBiologicalProcess \LengthOfRope\JSONLD\Schema\PropertyValue|\LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setIsInvolvedInBiologicalProcess($isInvolvedInBiologicalProcess): static {
        $this->properties['isInvolvedInBiologicalProcess'] = $isInvolvedInBiologicalProcess;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PropertyValue|\LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getIsInvolvedInBiologicalProcess() {
        return $this->properties['isInvolvedInBiologicalProcess'];
    }
    /**
     * Indicates a BioChemEntity that (in some sense) has this BioChemEntity as a part.
     *
     *
     * @param $hasBioChemEntityPart \LengthOfRope\JSONLD\Schema\BioChemEntity
     * @return static
     **/
    public function setHasBioChemEntityPart($hasBioChemEntityPart): static {
        $this->properties['hasBioChemEntityPart'] = $hasBioChemEntityPart;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BioChemEntity
     **/
    public function getHasBioChemEntityPart() {
        return $this->properties['hasBioChemEntityPart'];
    }
    /**
     * A BioChemEntity that is known to interact with this item.
     *
     * @param $bioChemInteraction \LengthOfRope\JSONLD\Schema\BioChemEntity
     * @return static
     **/
    public function setBioChemInteraction($bioChemInteraction): static {
        $this->properties['bioChemInteraction'] = $bioChemInteraction;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BioChemEntity
     **/
    public function getBioChemInteraction() {
        return $this->properties['bioChemInteraction'];
    }
    /**
     * A similar BioChemEntity, e.g., obtained by fingerprint similarity algorithms.
     *
     * @param $bioChemSimilarity \LengthOfRope\JSONLD\Schema\BioChemEntity
     * @return static
     **/
    public function setBioChemSimilarity($bioChemSimilarity): static {
        $this->properties['bioChemSimilarity'] = $bioChemSimilarity;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BioChemEntity
     **/
    public function getBioChemSimilarity() {
        return $this->properties['bioChemSimilarity'];
    }
    /**
     * A common representation such as a protein sequence or chemical structure for
     * this entity. For images use schema.org/image.
     *
     * @param $hasRepresentation \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\PropertyValue
     * @return static
     **/
    public function setHasRepresentation($hasRepresentation): static {
        $this->properties['hasRepresentation'] = $hasRepresentation;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\PropertyValue
     **/
    public function getHasRepresentation() {
        return $this->properties['hasRepresentation'];
    }
    /**
     * Another BioChemEntity encoding by this one.
     *
     * @param $isEncodedByBioChemEntity \LengthOfRope\JSONLD\Schema\Gene
     * @return static
     **/
    public function setIsEncodedByBioChemEntity($isEncodedByBioChemEntity): static {
        $this->properties['isEncodedByBioChemEntity'] = $isEncodedByBioChemEntity;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Gene
     **/
    public function getIsEncodedByBioChemEntity() {
        return $this->properties['isEncodedByBioChemEntity'];
    }
    /**
     * Molecular function performed by this BioChemEntity; please use PropertyValue if
     * you want to include any evidence.
     *
     * @param $hasMolecularFunction \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\PropertyValue
     * @return static
     **/
    public function setHasMolecularFunction($hasMolecularFunction): static {
        $this->properties['hasMolecularFunction'] = $hasMolecularFunction;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\PropertyValue
     **/
    public function getHasMolecularFunction() {
        return $this->properties['hasMolecularFunction'];
    }
    /**
     * A role played by the BioChemEntity within a biological context.
     *
     * @param $biologicalRole \LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setBiologicalRole($biologicalRole): static {
        $this->properties['biologicalRole'] = $biologicalRole;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getBiologicalRole() {
        return $this->properties['biologicalRole'];
    }
    /**
     * The taxonomic grouping of the organism that expresses, encodes, or in some way
     * related to the BioChemEntity.
     *
     * @param $taxonomicRange \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\Taxon
     * @return static
     **/
    public function setTaxonomicRange($taxonomicRange): static {
        $this->properties['taxonomicRange'] = $taxonomicRange;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\Taxon
     **/
    public function getTaxonomicRange() {
        return $this->properties['taxonomicRange'];
    }
    /**
     * Disease associated to this BioChemEntity. Such disease can be a MedicalCondition
     * or a URL. If you want to add an evidence supporting the association, please use
     * PropertyValue.
     *
     * @param $associatedDisease \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\PropertyValue|\LengthOfRope\JSONLD\Schema\MedicalCondition
     * @return static
     **/
    public function setAssociatedDisease($associatedDisease): static {
        $this->properties['associatedDisease'] = $associatedDisease;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\PropertyValue|\LengthOfRope\JSONLD\Schema\MedicalCondition
     **/
    public function getAssociatedDisease() {
        return $this->properties['associatedDisease'];
    }
}
