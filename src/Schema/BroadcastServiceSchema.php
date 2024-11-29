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
 * A delivery service through which content is provided via broadcast over the air or online.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BroadcastServiceSchema extends ServiceSchema
{
    public static function factory()
    {
        return new BroadcastServiceSchema('https://schema.org/', 'BroadcastService');
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
     * The timezone in [ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601) for which the service bases its broadcasts.
     *
     * @param $broadcastTimezone 
     **/
    public function setBroadcastTimezone($broadcastTimezone) {
        $this->properties['broadcastTimezone'] = $broadcastTimezone;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBroadcastTimezone() {
        return $this->properties['broadcastTimezone'];
    }

    /**
     * The organization owning or operating the broadcast service.
     *
     * @param $broadcaster 
     **/
    public function setBroadcaster($broadcaster) {
        $this->properties['broadcaster'] = $broadcaster;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBroadcaster() {
        return $this->properties['broadcaster'];
    }

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     *
     * @param $callSign 
     **/
    public function setCallSign($callSign) {
        $this->properties['callSign'] = $callSign;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCallSign() {
        return $this->properties['callSign'];
    }

    /**
     * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
     *
     * @param $parentService 
     **/
    public function setParentService($parentService) {
        $this->properties['parentService'] = $parentService;

        return $this;
    }

    /**
     * @return 
     **/
    public function getParentService() {
        return $this->properties['parentService'];
    }

    /**
     * The media network(s) whose content is broadcast on this station.
     *
     * @param $broadcastAffiliateOf 
     **/
    public function setBroadcastAffiliateOf($broadcastAffiliateOf) {
        $this->properties['broadcastAffiliateOf'] = $broadcastAffiliateOf;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBroadcastAffiliateOf() {
        return $this->properties['broadcastAffiliateOf'];
    }

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     * @param $videoFormat 
     **/
    public function setVideoFormat($videoFormat) {
        $this->properties['videoFormat'] = $videoFormat;

        return $this;
    }

    /**
     * @return 
     **/
    public function getVideoFormat() {
        return $this->properties['videoFormat'];
    }

    /**
     * The name displayed in the channel guide. For many US affiliates, it is the network name.
     *
     * @param $broadcastDisplayName 
     **/
    public function setBroadcastDisplayName($broadcastDisplayName) {
        $this->properties['broadcastDisplayName'] = $broadcastDisplayName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBroadcastDisplayName() {
        return $this->properties['broadcastDisplayName'];
    }

    /**
     * A broadcast channel of a broadcast service.
     *
     * @param $hasBroadcastChannel 
     **/
    public function setHasBroadcastChannel($hasBroadcastChannel) {
        $this->properties['hasBroadcastChannel'] = $hasBroadcastChannel;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasBroadcastChannel() {
        return $this->properties['hasBroadcastChannel'];
    }

    /**
     * The area within which users can expect to reach the broadcast service.
     *
     * @param $area 
     **/
    public function setArea($area) {
        $this->properties['area'] = $area;

        return $this;
    }

    /**
     * @return 
     **/
    public function getArea() {
        return $this->properties['area'];
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     * @param $inLanguage |
     **/
    public function setInLanguage($inLanguage) {
        $this->properties['inLanguage'] = $inLanguage;

        return $this;
    }

    /**
     * @return |
     **/
    public function getInLanguage() {
        return $this->properties['inLanguage'];
    }


}
