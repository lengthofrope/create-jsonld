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
 * Any part of the human body, typically a component of an anatomical system. Organs, tissues, and cells are all anatomical structures.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AnatomicalStructureSchema extends MedicalEntitySchema
{
    public static function factory()
    {
        return new AnatomicalStructureSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
     **/
    private $associatedPathophysiology;
    public function setAssociatedPathophysiology($associatedPathophysiology) {
        $this->associatedPathophysiology = $associatedPathophysiology;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAssociatedPathophysiology() {
        return $this->associatedPathophysiology;
    }

    /**
     * Location in the body of the anatomical structure.
     **/
    private $bodyLocation;
    public function setBodyLocation($bodyLocation) {
        $this->bodyLocation = $bodyLocation;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getBodyLocation() {
        return $this->bodyLocation;
    }

    /**
     * Other anatomical structures to which this structure is connected.
     **/
    private $connectedTo;
    public function setConnectedTo($connectedTo) {
        $this->connectedTo = $connectedTo;

        return $this;
    }

    /**
     * @return AnatomicalStructureSchema     
     **/
    public function getConnectedTo() {
        return $this->connectedTo;
    }

    /**
     * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
     **/
    private $diagram;
    public function setDiagram($diagram) {
        $this->diagram = $diagram;

        return $this;
    }

    /**
     * @return ImageObjectSchema     
     **/
    public function getDiagram() {
        return $this->diagram;
    }

    /**
     * Function of the anatomical structure.
     **/
    private $function;
    public function setFunction($function) {
        $this->function = $function;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getFunction() {
        return $this->function;
    }

    /**
     * The anatomical or organ system that this structure is part of.
     **/
    private $partOfSystem;
    public function setPartOfSystem($partOfSystem) {
        $this->partOfSystem = $partOfSystem;

        return $this;
    }

    /**
     * @return AnatomicalSystemSchema     
     **/
    public function getPartOfSystem() {
        return $this->partOfSystem;
    }

    /**
     * A medical condition associated with this anatomy.
     **/
    private $relatedCondition;
    public function setRelatedCondition($relatedCondition) {
        $this->relatedCondition = $relatedCondition;

        return $this;
    }

    /**
     * @return MedicalConditionSchema     
     **/
    public function getRelatedCondition() {
        return $this->relatedCondition;
    }

    /**
     * A medical therapy related to this anatomy.
     **/
    private $relatedTherapy;
    public function setRelatedTherapy($relatedTherapy) {
        $this->relatedTherapy = $relatedTherapy;

        return $this;
    }

    /**
     * @return MedicalTherapySchema     
     **/
    public function getRelatedTherapy() {
        return $this->relatedTherapy;
    }

    /**
     * Component (sub-)structure(s) that comprise this anatomical structure.
     **/
    private $subStructure;
    public function setSubStructure($subStructure) {
        $this->subStructure = $subStructure;

        return $this;
    }

    /**
     * @return AnatomicalStructureSchema     
     **/
    public function getSubStructure() {
        return $this->subStructure;
    }


}
