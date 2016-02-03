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
 * A collection of music tracks.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MusicAlbumSchema extends MusicPlaylistSchema
{
    public static function factory()
    {
        return new MusicAlbumSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * Classification of the album by it's type of content: soundtrack, live album, studio album, etc.
     **/
    private $albumProductionType;
    public function setAlbumProductionType($albumProductionType) {
        $this->albumProductionType = $albumProductionType;

        return $this;
    }

    /**
     * @return MusicAlbumProductionTypeSchema     **/
    public function getAlbumProductionType() {
        return $this->albumProductionType;
    }

    /**
     * A release of this album.
     **/
    private $albumRelease;
    public function setAlbumRelease($albumRelease) {
        $this->albumRelease = $albumRelease;

        return $this;
    }

    /**
     * @return MusicReleaseSchema     **/
    public function getAlbumRelease() {
        return $this->albumRelease;
    }

    /**
     * The kind of release which this album is: single, EP or album.
     **/
    private $albumReleaseType;
    public function setAlbumReleaseType($albumReleaseType) {
        $this->albumReleaseType = $albumReleaseType;

        return $this;
    }

    /**
     * @return MusicAlbumReleaseTypeSchema     **/
    public function getAlbumReleaseType() {
        return $this->albumReleaseType;
    }

    /**
     * The artist that performed this album or recording.
     **/
    private $byArtist;
    public function setByArtist($byArtist) {
        $this->byArtist = $byArtist;

        return $this;
    }

    /**
     * @return MusicGroupSchema     **/
    public function getByArtist() {
        return $this->byArtist;
    }


}
