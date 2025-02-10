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
 * Individual comic issues are serially published as
 * *     	part of a larger series. For the sake of consistency, even one-shot
 * issues
 * *     	belong to a series comprised of a single issue. All comic issues can be
 * *     	uniquely identified by: the combination of the name and volume number of
 * the
 * *     	series to which the issue belongs; the issue number; and the variant
 * *     	description of the issue (if any).
 *
 * @see https://schema.org/ComicIssue
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ComicIssue extends PublicationIssue
{
    public static function factory(): ComicIssue
    {
        return new ComicIssue('https://schema.org/', 'ComicIssue');
    }

    /**
     * The individual who adds lettering, including speech balloons and sound effects,
     * to artwork.
     *
     * @param $letterer \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setLetterer($letterer): static {
        $this->properties['letterer'] = $letterer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getLetterer() {
        return $this->properties['letterer'];
    }
    /**
     * The individual who traces over the pencil drawings in ink after pencils are
     * complete.
     *
     * @param $inker \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setInker($inker): static {
        $this->properties['inker'] = $inker;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getInker() {
        return $this->properties['inker'];
    }
    /**
     * The individual who adds color to inked drawings.
     *
     * @param $colorist \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setColorist($colorist): static {
        $this->properties['colorist'] = $colorist;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getColorist() {
        return $this->properties['colorist'];
    }
    /**
     * The primary artist for a work
     * in a medium other than pencils or digital line art--for example, if the
     * primary artwork is done in watercolors or digital paints.
     *
     * @param $artist \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setArtist($artist): static {
        $this->properties['artist'] = $artist;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getArtist() {
        return $this->properties['artist'];
    }
    /**
     * The individual who draws the primary narrative artwork.
     *
     * @param $penciler \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setPenciler($penciler): static {
        $this->properties['penciler'] = $penciler;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getPenciler() {
        return $this->properties['penciler'];
    }
    /**
     * A description of the variant cover
     * for the issue, if the issue is a variant printing. For example, "Bryan
     * Hitch
     * Variant Cover" or "2nd Printing Variant".
     *
     * @param $variantCover \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setVariantCover($variantCover): static {
        $this->properties['variantCover'] = $variantCover;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getVariantCover() {
        return $this->properties['variantCover'];
    }
}
