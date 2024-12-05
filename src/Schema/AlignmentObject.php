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
 * An intangible item that describes an alignment between a learning resource and a
 * node in an educational framework.
 *
 * * Should not be used where the nature of the alignment can be described using a
 * simple property, for example to express that a resource [[teaches]] or
 * [[assesses]] a competency.
 *
 * @see https://schema.org/AlignmentObject
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AlignmentObject extends Intangible
{
    public static function factory(): AlignmentObject
    {
        return new AlignmentObject('https://schema.org/', 'AlignmentObject');
    }

    /**
     * The framework to which the resource being described is aligned.
     *
     * @param $educationalFramework \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setEducationalFramework($educationalFramework): static {
        $this->properties['educationalFramework'] = $educationalFramework;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getEducationalFramework() {
        return $this->properties['educationalFramework'];
    }
    /**
     * The URL of a node in an established educational framework.
     *
     * @param $targetUrl \LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setTargetUrl($targetUrl): static {
        $this->properties['targetUrl'] = $targetUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\URL
     **/
    public function getTargetUrl() {
        return $this->properties['targetUrl'];
    }
    /**
     * A category of alignment between the learning resource and the framework node.
     * Recommended values include: 'requires', 'textComplexity', 'readingLevel', and
     * 'educationalSubject'.
     *
     * @param $alignmentType \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setAlignmentType($alignmentType): static {
        $this->properties['alignmentType'] = $alignmentType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getAlignmentType() {
        return $this->properties['alignmentType'];
    }
    /**
     * The description of a node in an established educational framework.
     *
     * @param $targetDescription \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setTargetDescription($targetDescription): static {
        $this->properties['targetDescription'] = $targetDescription;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getTargetDescription() {
        return $this->properties['targetDescription'];
    }
    /**
     * The name of a node in an established educational framework.
     *
     * @param $targetName \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setTargetName($targetName): static {
        $this->properties['targetName'] = $targetName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getTargetName() {
        return $this->properties['targetName'];
    }
}
