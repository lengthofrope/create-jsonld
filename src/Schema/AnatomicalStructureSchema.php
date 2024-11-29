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
 * Any part of the human body, typically a component of an anatomical system. Organs, tissues, and cells are all anatomical structures.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AnatomicalStructureSchema extends MedicalEntitySchema
{
    public static function factory(): AnatomicalStructureSchema
    {
        return new AnatomicalStructureSchema('https://schema.org/', 'AnatomicalStructure');
    }

    /**
     * A medical therapy related to this anatomy.
     *
     * @param $relatedTherapy 
     * @return static
     **/
    public function setRelatedTherapy($relatedTherapy): static {
        $this->properties['relatedTherapy'] = $relatedTherapy;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRelatedTherapy() {
        return $this->properties['relatedTherapy'];
    }

    /**
     * The anatomical or organ system that this structure is part of.
     *
     * @param $partOfSystem 
     * @return static
     **/
    public function setPartOfSystem($partOfSystem): static {
        $this->properties['partOfSystem'] = $partOfSystem;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPartOfSystem() {
        return $this->properties['partOfSystem'];
    }

    /**
     * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
     *
     * @param $diagram 
     * @return static
     **/
    public function setDiagram($diagram): static {
        $this->properties['diagram'] = $diagram;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDiagram() {
        return $this->properties['diagram'];
    }

    /**
     * A medical condition associated with this anatomy.
     *
     * @param $relatedCondition 
     * @return static
     **/
    public function setRelatedCondition($relatedCondition): static {
        $this->properties['relatedCondition'] = $relatedCondition;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRelatedCondition() {
        return $this->properties['relatedCondition'];
    }

    /**
     * Component (sub-)structure(s) that comprise this anatomical structure.
     *
     * @param $subStructure 
     * @return static
     **/
    public function setSubStructure($subStructure): static {
        $this->properties['subStructure'] = $subStructure;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSubStructure() {
        return $this->properties['subStructure'];
    }

    /**
     * Other anatomical structures to which this structure is connected.
     *
     * @param $connectedTo 
     * @return static
     **/
    public function setConnectedTo($connectedTo): static {
        $this->properties['connectedTo'] = $connectedTo;

        return $this;
    }

    /**
     * @return 
     **/
    public function getConnectedTo() {
        return $this->properties['connectedTo'];
    }

    /**
     * Location in the body of the anatomical structure.
     *
     * @param $bodyLocation 
     * @return static
     **/
    public function setBodyLocation($bodyLocation): static {
        $this->properties['bodyLocation'] = $bodyLocation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBodyLocation() {
        return $this->properties['bodyLocation'];
    }

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
     *
     * @param $associatedPathophysiology 
     * @return static
     **/
    public function setAssociatedPathophysiology($associatedPathophysiology): static {
        $this->properties['associatedPathophysiology'] = $associatedPathophysiology;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAssociatedPathophysiology() {
        return $this->properties['associatedPathophysiology'];
    }


}
