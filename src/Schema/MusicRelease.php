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
 * A MusicRelease is a specific release of a music album.
 *
 * @see https://schema.org/MusicRelease
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MusicRelease extends MusicPlaylist
{
    public static function factory(): MusicRelease
    {
        return new MusicRelease('https://schema.org/', 'MusicRelease');
    }

    /**
     * The label that issued the release.
     *
     * @param $recordLabel \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setRecordLabel($recordLabel): static {
        $this->properties['recordLabel'] = $recordLabel;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getRecordLabel() {
        return $this->properties['recordLabel'];
    }
    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $duration \LengthOfRope\JSONLD\Schema\Duration|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setDuration($duration): static {
        $this->properties['duration'] = $duration;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getDuration() {
        return $this->properties['duration'];
    }
    /**
     * The group the release is credited to if different than the byArtist. For
     * example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady
     * Gaga.
     *
     * @param $creditedTo \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setCreditedTo($creditedTo): static {
        $this->properties['creditedTo'] = $creditedTo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getCreditedTo() {
        return $this->properties['creditedTo'];
    }
    /**
     * Format of this release (the type of recording media used, i.e. compact disc,
     * digital media, LP, etc.).
     *
     * @param $musicReleaseFormat \LengthOfRope\JSONLD\Schema\MusicReleaseFormatType
     * @return static
     **/
    public function setMusicReleaseFormat($musicReleaseFormat): static {
        $this->properties['musicReleaseFormat'] = $musicReleaseFormat;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MusicReleaseFormatType
     **/
    public function getMusicReleaseFormat() {
        return $this->properties['musicReleaseFormat'];
    }
    /**
     * The album this is a release of.
     *
     * @param $releaseOf \LengthOfRope\JSONLD\Schema\MusicAlbum
     * @return static
     **/
    public function setReleaseOf($releaseOf): static {
        $this->properties['releaseOf'] = $releaseOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MusicAlbum
     **/
    public function getReleaseOf() {
        return $this->properties['releaseOf'];
    }
    /**
     * The catalog number for the release.
     *
     * @param $catalogNumber \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCatalogNumber($catalogNumber): static {
        $this->properties['catalogNumber'] = $catalogNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCatalogNumber() {
        return $this->properties['catalogNumber'];
    }
}
