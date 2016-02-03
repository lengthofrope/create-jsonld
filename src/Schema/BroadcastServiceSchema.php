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
        return new BroadcastServiceSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The area within which users can expect to reach the broadcast service.
     **/
    private $area;
    public function setArea($area) {
        $this->area = $area;

        return $this;
    }

    /**
     * @return PlaceSchema     **/
    public function getArea() {
        return $this->area;
    }

    /**
     * The media network(s) whose content is broadcast on this station.
     **/
    private $broadcastAffiliateOf;
    public function setBroadcastAffiliateOf($broadcastAffiliateOf) {
        $this->broadcastAffiliateOf = $broadcastAffiliateOf;

        return $this;
    }

    /**
     * @return OrganizationSchema     **/
    public function getBroadcastAffiliateOf() {
        return $this->broadcastAffiliateOf;
    }

    /**
     * The name displayed in the channel guide. For many US affiliates, it is the network name.
     **/
    private $broadcastDisplayName;
    public function setBroadcastDisplayName($broadcastDisplayName) {
        $this->broadcastDisplayName = $broadcastDisplayName;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getBroadcastDisplayName() {
        return $this->broadcastDisplayName;
    }

    /**
     * The timezone in <a href='http://en.wikipedia.org/wiki/ISO_8601'>ISO 8601 format</a> for which the service bases its broadcasts.
     **/
    private $timezone;
    public function setTimezone($timezone) {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getTimezone() {
        return $this->timezone;
    }

    /**
     * The organization owning or operating the broadcast service.
     **/
    private $broadcaster;
    public function setBroadcaster($broadcaster) {
        $this->broadcaster = $broadcaster;

        return $this;
    }

    /**
     * @return OrganizationSchema     **/
    public function getBroadcaster() {
        return $this->broadcaster;
    }

    /**
     * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
     **/
    private $parentService;
    public function setParentService($parentService) {
        $this->parentService = $parentService;

        return $this;
    }

    /**
     * @return BroadcastServiceSchema     **/
    public function getParentService() {
        return $this->parentService;
    }

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     **/
    private $videoFormat;
    public function setVideoFormat($videoFormat) {
        $this->videoFormat = $videoFormat;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getVideoFormat() {
        return $this->videoFormat;
    }


}
