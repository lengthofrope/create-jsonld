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
 * A music recording (track), usually a single song.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MusicRecordingSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new MusicRecordingSchema();
    }

    public function getDataArray()
    {
        return array();
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

    /**
     * The duration of the item (movie, audio recording, event, etc.) in <a href='http://en.wikipedia.org/wiki/ISO_8601'>ISO 8601 date format</a>.
     **/
    private $duration;
    public function setDuration($duration) {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return DurationSchema     **/
    public function getDuration() {
        return $this->duration;
    }

    /**
     * The album to which this recording belongs.
     **/
    private $inAlbum;
    public function setInAlbum($inAlbum) {
        $this->inAlbum = $inAlbum;

        return $this;
    }

    /**
     * @return MusicAlbumSchema     **/
    public function getInAlbum() {
        return $this->inAlbum;
    }

    /**
     * The playlist to which this recording belongs.
     **/
    private $inPlaylist;
    public function setInPlaylist($inPlaylist) {
        $this->inPlaylist = $inPlaylist;

        return $this;
    }

    /**
     * @return MusicPlaylistSchema     **/
    public function getInPlaylist() {
        return $this->inPlaylist;
    }

    /**
     * The International Standard Recording Code for the recording.
     **/
    private $isrcCode;
    public function setIsrcCode($isrcCode) {
        $this->isrcCode = $isrcCode;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getIsrcCode() {
        return $this->isrcCode;
    }

    /**
     * The composition this track is a recording of.
     **/
    private $recordingOf;
    public function setRecordingOf($recordingOf) {
        $this->recordingOf = $recordingOf;

        return $this;
    }

    /**
     * @return MusicCompositionSchema     **/
    public function getRecordingOf() {
        return $this->recordingOf;
    }


}
