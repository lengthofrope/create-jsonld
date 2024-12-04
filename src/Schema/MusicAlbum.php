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
 * A collection of music tracks.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MusicAlbum extends MusicPlaylist
{
    public static function factory(): MusicAlbum
    {
        return new MusicAlbum('https://schema.org/', 'MusicAlbum');
    }

    /**
     * Classification of the album by its type of content: soundtrack, live album, studio album, etc.
     *
     * @param $albumProductionType 
     * @return static
     **/
    public function setAlbumProductionType($albumProductionType): static {
        $this->properties['albumProductionType'] = $albumProductionType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAlbumProductionType() {
        return $this->properties['albumProductionType'];
    }

    /**
     * A release of this album.
     *
     * @param $albumRelease 
     * @return static
     **/
    public function setAlbumRelease($albumRelease): static {
        $this->properties['albumRelease'] = $albumRelease;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAlbumRelease() {
        return $this->properties['albumRelease'];
    }

    /**
     * The artist that performed this album or recording.
     *
     * @param $byArtist |
     * @return static
     **/
    public function setByArtist($byArtist): static {
        $this->properties['byArtist'] = $byArtist;

        return $this;
    }

    /**
     * @return |
     **/
    public function getByArtist() {
        return $this->properties['byArtist'];
    }

    /**
     * The kind of release which this album is: single, EP or album.
     *
     * @param $albumReleaseType 
     * @return static
     **/
    public function setAlbumReleaseType($albumReleaseType): static {
        $this->properties['albumReleaseType'] = $albumReleaseType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAlbumReleaseType() {
        return $this->properties['albumReleaseType'];
    }


}
