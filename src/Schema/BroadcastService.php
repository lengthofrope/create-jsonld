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
 * A delivery service through which content is provided via broadcast over the air
 * or online.
 *
 * @see https://schema.org/BroadcastService
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BroadcastService extends Service
{
    public static function factory(): BroadcastService
    {
        return new BroadcastService('https://schema.org/', 'BroadcastService');
    }

    /**
     * The area within which users can expect to reach the broadcast service.
     *
     * @param $area \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setArea($area): static {
        $this->properties['area'] = $area;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getArea() {
        return $this->properties['area'];
    }
    /**
     * The timezone in [ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601) for
     * which the service bases its broadcasts.
     *
     * @param $broadcastTimezone \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setBroadcastTimezone($broadcastTimezone): static {
        $this->properties['broadcastTimezone'] = $broadcastTimezone;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getBroadcastTimezone() {
        return $this->properties['broadcastTimezone'];
    }
    /**
     * The media network(s) whose content is broadcast on this station.
     *
     * @param $broadcastAffiliateOf \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setBroadcastAffiliateOf($broadcastAffiliateOf): static {
        $this->properties['broadcastAffiliateOf'] = $broadcastAffiliateOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getBroadcastAffiliateOf() {
        return $this->properties['broadcastAffiliateOf'];
    }
    /**
     * The language of the content or performance or used in an action. Please use one
     * of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     * @param $inLanguage \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setInLanguage($inLanguage): static {
        $this->properties['inLanguage'] = $inLanguage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getInLanguage() {
        return $this->properties['inLanguage'];
    }
    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges,
     * e.g. 87-99. In addition a shortcut idiom is supported for frequencies of AM and
     * FM radio channels, e.g. "87 FM".
     *
     * @param $broadcastFrequency \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\BroadcastFrequencySpecification
     * @return static
     **/
    public function setBroadcastFrequency($broadcastFrequency): static {
        $this->properties['broadcastFrequency'] = $broadcastFrequency;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\BroadcastFrequencySpecification
     **/
    public function getBroadcastFrequency() {
        return $this->properties['broadcastFrequency'];
    }
    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting
     * and radio communications to identify people, radio and TV stations, or vehicles.
     *
     * @param $callSign \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCallSign($callSign): static {
        $this->properties['callSign'] = $callSign;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCallSign() {
        return $this->properties['callSign'];
    }
    /**
     * The organization owning or operating the broadcast service.
     *
     * @param $broadcaster \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setBroadcaster($broadcaster): static {
        $this->properties['broadcaster'] = $broadcaster;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getBroadcaster() {
        return $this->properties['broadcaster'];
    }
    /**
     * The name displayed in the channel guide. For many US affiliates, it is the
     * network name.
     *
     * @param $broadcastDisplayName \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setBroadcastDisplayName($broadcastDisplayName): static {
        $this->properties['broadcastDisplayName'] = $broadcastDisplayName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getBroadcastDisplayName() {
        return $this->properties['broadcastDisplayName'];
    }
    /**
     * A broadcast service to which the broadcast service may belong to such as
     * regional variations of a national channel.
     *
     * @param $parentService \LengthOfRope\JSONLD\Schema\BroadcastService
     * @return static
     **/
    public function setParentService($parentService): static {
        $this->properties['parentService'] = $parentService;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BroadcastService
     **/
    public function getParentService() {
        return $this->properties['parentService'];
    }
    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     * @param $videoFormat \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setVideoFormat($videoFormat): static {
        $this->properties['videoFormat'] = $videoFormat;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getVideoFormat() {
        return $this->properties['videoFormat'];
    }
    /**
     * A broadcast channel of a broadcast service.
     *
     * @param $hasBroadcastChannel \LengthOfRope\JSONLD\Schema\BroadcastChannel
     * @return static
     **/
    public function setHasBroadcastChannel($hasBroadcastChannel): static {
        $this->properties['hasBroadcastChannel'] = $hasBroadcastChannel;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BroadcastChannel
     **/
    public function getHasBroadcastChannel() {
        return $this->properties['hasBroadcastChannel'];
    }
}
