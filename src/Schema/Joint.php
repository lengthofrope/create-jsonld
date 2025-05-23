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
 * The anatomical location at which two or more bones make contact.
 *
 * @see https://schema.org/Joint
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Joint extends AnatomicalStructure
{
    public static function factory(): Joint
    {
        return new Joint('https://schema.org/', 'Joint');
    }

    /**
     * The degree of mobility the joint allows.
     *
     * @param $functionalClass \LengthOfRope\JSONLD\Schema\MedicalEntity|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setFunctionalClass($functionalClass): static {
        $this->properties['functionalClass'] = $functionalClass;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalEntity|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getFunctionalClass() {
        return $this->properties['functionalClass'];
    }
    /**
     * The name given to how bone physically connects to each other.
     *
     * @param $structuralClass \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setStructuralClass($structuralClass): static {
        $this->properties['structuralClass'] = $structuralClass;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getStructuralClass() {
        return $this->properties['structuralClass'];
    }
    /**
     * The biomechanical properties of the bone.
     *
     * @param $biomechnicalClass \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setBiomechnicalClass($biomechnicalClass): static {
        $this->properties['biomechnicalClass'] = $biomechnicalClass;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getBiomechnicalClass() {
        return $this->properties['biomechnicalClass'];
    }
}
