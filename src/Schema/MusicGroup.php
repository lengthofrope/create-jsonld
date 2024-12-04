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
 * A musical group, such as a band, an orchestra, or a choir. Can also be a solo
 * musician.
 *
 * @see https://schema.org/MusicGroup
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MusicGroup extends PerformingGroup
{
    public static function factory(): MusicGroup
    {
        return new MusicGroup('https://schema.org/', 'MusicGroup');
    }

    /**
     * A music album.
     *
     * @param $album 
     * @return static
     **/
    public function setAlbum($album): static {
        $this->properties['album'] = $album;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAlbum() {
        return $this->properties['album'];
    }
    /**
     * A collection of music albums.
     *
     * @param $albums 
     * @return static
     **/
    public function setAlbums($albums): static {
        $this->properties['albums'] = $albums;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAlbums() {
        return $this->properties['albums'];
    }
    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @param $genre |
     * @return static
     **/
    public function setGenre($genre): static {
        $this->properties['genre'] = $genre;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGenre() {
        return $this->properties['genre'];
    }
    /**
     * A music recording (track)&#x2014;usually a single song.
     *
     * @param $tracks 
     * @return static
     **/
    public function setTracks($tracks): static {
        $this->properties['tracks'] = $tracks;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTracks() {
        return $this->properties['tracks'];
    }
    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given,
     * the list should contain items of type MusicRecording.
     *
     * @param $track |
     * @return static
     **/
    public function setTrack($track): static {
        $this->properties['track'] = $track;

        return $this;
    }

    /**
     * @return |
     **/
    public function getTrack() {
        return $this->properties['track'];
    }
    /**
     * A member of a music group&#x2014;for example, John, Paul, George, or Ringo.
     *
     * @param $musicGroupMember 
     * @return static
     **/
    public function setMusicGroupMember($musicGroupMember): static {
        $this->properties['musicGroupMember'] = $musicGroupMember;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMusicGroupMember() {
        return $this->properties['musicGroupMember'];
    }
}
