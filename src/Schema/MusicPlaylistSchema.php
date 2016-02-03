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
 * A collection of music tracks in playlist form.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MusicPlaylistSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new MusicPlaylistSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The number of tracks in this album or playlist.
     **/
    private $numTracks;
    public function setNumTracks($numTracks) {
        $this->numTracks = $numTracks;

        return $this;
    }

    /**
     * @return IntegerSchema     **/
    public function getNumTracks() {
        return $this->numTracks;
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
     * @return ItemListSchema|MusicRecordingSchema     **/
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
     * @return MusicRecordingSchema     **/
    public function getTracks() {
        return $this->tracks;
    }


}
