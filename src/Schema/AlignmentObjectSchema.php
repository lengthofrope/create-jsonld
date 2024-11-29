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
 * An intangible item that describes an alignment between a learning resource and a node in an educational framework.

 * Should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AlignmentObjectSchema extends IntangibleSchema
{
    public static function factory(): AlignmentObjectSchema
    {
        return new AlignmentObjectSchema('https://schema.org/', 'AlignmentObject');
    }

    /**
     * The framework to which the resource being described is aligned.
     *
     * @param $educationalFramework 
     * @return static
     **/
    public function setEducationalFramework($educationalFramework): static {
        $this->properties['educationalFramework'] = $educationalFramework;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEducationalFramework() {
        return $this->properties['educationalFramework'];
    }

    /**
     * The URL of a node in an established educational framework.
     *
     * @param $targetUrl 
     * @return static
     **/
    public function setTargetUrl($targetUrl): static {
        $this->properties['targetUrl'] = $targetUrl;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTargetUrl() {
        return $this->properties['targetUrl'];
    }

    /**
     * A category of alignment between the learning resource and the framework node. Recommended values include: 'requires', 'textComplexity', 'readingLevel', and 'educationalSubject'.
     *
     * @param $alignmentType 
     * @return static
     **/
    public function setAlignmentType($alignmentType): static {
        $this->properties['alignmentType'] = $alignmentType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAlignmentType() {
        return $this->properties['alignmentType'];
    }

    /**
     * The description of a node in an established educational framework.
     *
     * @param $targetDescription 
     * @return static
     **/
    public function setTargetDescription($targetDescription): static {
        $this->properties['targetDescription'] = $targetDescription;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTargetDescription() {
        return $this->properties['targetDescription'];
    }

    /**
     * The name of a node in an established educational framework.
     *
     * @param $targetName 
     * @return static
     **/
    public function setTargetName($targetName): static {
        $this->properties['targetName'] = $targetName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTargetName() {
        return $this->properties['targetName'];
    }


}
