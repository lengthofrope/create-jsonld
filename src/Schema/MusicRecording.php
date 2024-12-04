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
 * A music recording (track), usually a single song.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MusicRecording extends CreativeWork
{
    public static function factory(): MusicRecording
    {
        return new MusicRecording('https://schema.org/', 'MusicRecording');
    }

    /**
     * The playlist to which this recording belongs.
     *
     * @param $inPlaylist 
     * @return static
     **/
    public function setInPlaylist($inPlaylist): static {
        $this->properties['inPlaylist'] = $inPlaylist;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInPlaylist() {
        return $this->properties['inPlaylist'];
    }

    /**
     * The International Standard Recording Code for the recording.
     *
     * @param $isrcCode 
     * @return static
     **/
    public function setIsrcCode($isrcCode): static {
        $this->properties['isrcCode'] = $isrcCode;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsrcCode() {
        return $this->properties['isrcCode'];
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
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $duration 
     * @return static
     **/
    public function setDuration($duration): static {
        $this->properties['duration'] = $duration;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDuration() {
        return $this->properties['duration'];
    }

    /**
     * The composition this track is a recording of.
     *
     * @param $recordingOf 
     * @return static
     **/
    public function setRecordingOf($recordingOf): static {
        $this->properties['recordingOf'] = $recordingOf;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRecordingOf() {
        return $this->properties['recordingOf'];
    }

    /**
     * The album to which this recording belongs.
     *
     * @param $inAlbum 
     * @return static
     **/
    public function setInAlbum($inAlbum): static {
        $this->properties['inAlbum'] = $inAlbum;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInAlbum() {
        return $this->properties['inAlbum'];
    }


}
