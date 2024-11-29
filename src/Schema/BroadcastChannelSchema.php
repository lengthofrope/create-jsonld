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
 * A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BroadcastChannelSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new BroadcastChannelSchema('https://schema.org/', 'BroadcastChannel');
    }

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for frequencies of AM and FM radio channels, e.g. "87 FM".
     *
     * @param $broadcastFrequency |
     **/
    public function setBroadcastFrequency($broadcastFrequency) {
        $this->properties['broadcastFrequency'] = $broadcastFrequency;

        return $this;
    }

    /**
     * @return |
     **/
    public function getBroadcastFrequency() {
        return $this->properties['broadcastFrequency'];
    }

    /**
     * The CableOrSatelliteService offering the channel.
     *
     * @param $inBroadcastLineup 
     **/
    public function setInBroadcastLineup($inBroadcastLineup) {
        $this->properties['inBroadcastLineup'] = $inBroadcastLineup;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInBroadcastLineup() {
        return $this->properties['inBroadcastLineup'];
    }

    /**
     * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
     *
     * @param $broadcastChannelId 
     **/
    public function setBroadcastChannelId($broadcastChannelId) {
        $this->properties['broadcastChannelId'] = $broadcastChannelId;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBroadcastChannelId() {
        return $this->properties['broadcastChannelId'];
    }

    /**
     * The type of service required to have access to the channel (e.g. Standard or Premium).
     *
     * @param $broadcastServiceTier 
     **/
    public function setBroadcastServiceTier($broadcastServiceTier) {
        $this->properties['broadcastServiceTier'] = $broadcastServiceTier;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBroadcastServiceTier() {
        return $this->properties['broadcastServiceTier'];
    }

    /**
     * The BroadcastService offered on this channel.
     *
     * @param $providesBroadcastService 
     **/
    public function setProvidesBroadcastService($providesBroadcastService) {
        $this->properties['providesBroadcastService'] = $providesBroadcastService;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProvidesBroadcastService() {
        return $this->properties['providesBroadcastService'];
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @param $genre |
     **/
    public function setGenre($genre) {
        $this->properties['genre'] = $genre;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGenre() {
        return $this->properties['genre'];
    }


}
