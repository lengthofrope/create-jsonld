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
 * A HyperToEntry is an item within a [[HyperToc]], which represents a hypertext
 * table of contents for complex media objects, such as [[VideoObject]],
 * [[AudioObject]]. The media object itself is indicated using [[associatedMedia]].
 * Each section of interest within that content can be described with a
 * [[HyperTocEntry]], with associated [[startOffset]] and [[endOffset]]. When
 * several entries are all from the same file, [[associatedMedia]] is used on the
 * overarching [[HyperTocEntry]]; if the content has been split into multiple
 * files, they can be referenced using [[associatedMedia]] on each
 * [[HyperTocEntry]].
 *
 * @see https://schema.org/HyperTocEntry
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class HyperTocEntry extends CreativeWork
{
    public static function factory(): HyperTocEntry
    {
        return new HyperTocEntry('https://schema.org/', 'HyperTocEntry');
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for
     * encoding.
     *
     * @param $associatedMedia 
     * @return static
     **/
    public function setAssociatedMedia($associatedMedia): static {
        $this->properties['associatedMedia'] = $associatedMedia;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAssociatedMedia() {
        return $this->properties['associatedMedia'];
    }
    /**
     * A [[HyperTocEntry]] can have a [[tocContinuation]] indicated, which is another
     * [[HyperTocEntry]] that would be the default next item to play or render.
     *
     * @param $tocContinuation 
     * @return static
     **/
    public function setTocContinuation($tocContinuation): static {
        $this->properties['tocContinuation'] = $tocContinuation;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTocContinuation() {
        return $this->properties['tocContinuation'];
    }
    /**
     * Text of an utterances (spoken words, lyrics etc.) that occurs at a certain
     * section of a media object, represented as a [[HyperTocEntry]].
     *
     * @param $utterances 
     * @return static
     **/
    public function setUtterances($utterances): static {
        $this->properties['utterances'] = $utterances;

        return $this;
    }

    /**
     * @return 
     **/
    public function getUtterances() {
        return $this->properties['utterances'];
    }
}
