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
 * A musical group, such as a band, an orchestra, or a choir. Can also be a solo musician.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MusicGroupSchema extends PerformingGroupSchema
{
    public static function factory()
    {
        return new MusicGroupSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * A music album.
     **/
    private $album;
    public function setAlbum($album) {
        $this->album = $album;

        return $this;
    }

    /**
     * @return MusicAlbumSchema     
     **/
    public function getAlbum() {
        return $this->album;
    }

    /**
     * A collection of music albums.
     **/
    private $albums;
    public function setAlbums($albums) {
        $this->albums = $albums;

        return $this;
    }

    /**
     * @return MusicAlbumSchema     
     **/
    public function getAlbums() {
        return $this->albums;
    }

    /**
     * Genre of the creative work or group.
     **/
    private $genre;
    public function setGenre($genre) {
        $this->genre = $genre;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     
     **/
    public function getGenre() {
        return $this->genre;
    }

    /**
     * A member of a music group&#x2014;for example, John, Paul, George, or Ringo.
     **/
    private $musicGroupMember;
    public function setMusicGroupMember($musicGroupMember) {
        $this->musicGroupMember = $musicGroupMember;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getMusicGroupMember() {
        return $this->musicGroupMember;
    }

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
     **/
    private $track;
    public function setTrack($track) {
        $this->track = $track;

        return $this;
    }

    /**
     * @return ItemListSchema|MusicRecordingSchema     
     **/
    public function getTrack() {
        return $this->track;
    }

    /**
     * A music recording (track)&#x2014;usually a single song.
     **/
    private $tracks;
    public function setTracks($tracks) {
        $this->tracks = $tracks;

        return $this;
    }

    /**
     * @return MusicRecordingSchema     
     **/
    public function getTracks() {
        return $this->tracks;
    }


}
