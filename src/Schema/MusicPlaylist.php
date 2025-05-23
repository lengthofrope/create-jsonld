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
 * A collection of music tracks in playlist form.
 *
 * @see https://schema.org/MusicPlaylist
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MusicPlaylist extends CreativeWork
{
    public static function factory(): MusicPlaylist
    {
        return new MusicPlaylist('https://schema.org/', 'MusicPlaylist');
    }

    /**
     * A music recording (track)&#x2014;usually a single song.
     *
     * @param $tracks \LengthOfRope\JSONLD\Schema\MusicRecording
     * @return static
     **/
    public function setTracks($tracks): static {
        $this->properties['tracks'] = $tracks;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MusicRecording
     **/
    public function getTracks() {
        return $this->properties['tracks'];
    }
    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given,
     * the list should contain items of type MusicRecording.
     *
     * @param $track \LengthOfRope\JSONLD\Schema\MusicRecording|\LengthOfRope\JSONLD\Schema\ItemList
     * @return static
     **/
    public function setTrack($track): static {
        $this->properties['track'] = $track;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MusicRecording|\LengthOfRope\JSONLD\Schema\ItemList
     **/
    public function getTrack() {
        return $this->properties['track'];
    }
    /**
     * The number of tracks in this album or playlist.
     *
     * @param $numTracks \LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setNumTracks($numTracks): static {
        $this->properties['numTracks'] = $numTracks;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getNumTracks() {
        return $this->properties['numTracks'];
    }
}
