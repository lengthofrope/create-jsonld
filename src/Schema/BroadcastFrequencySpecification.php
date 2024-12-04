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
 * The frequency in MHz and the modulation used for a particular BroadcastService.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BroadcastFrequencySpecification extends Intangible
{
    public static function factory(): BroadcastFrequencySpecification
    {
        return new BroadcastFrequencySpecification('https://schema.org/', 'BroadcastFrequencySpecification');
    }

    /**
     * The subchannel used for the broadcast.
     *
     * @param $broadcastSubChannel 
     * @return static
     **/
    public function setBroadcastSubChannel($broadcastSubChannel): static {
        $this->properties['broadcastSubChannel'] = $broadcastSubChannel;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBroadcastSubChannel() {
        return $this->properties['broadcastSubChannel'];
    }

    /**
     * The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
     *
     * @param $broadcastSignalModulation |
     * @return static
     **/
    public function setBroadcastSignalModulation($broadcastSignalModulation): static {
        $this->properties['broadcastSignalModulation'] = $broadcastSignalModulation;

        return $this;
    }

    /**
     * @return |
     **/
    public function getBroadcastSignalModulation() {
        return $this->properties['broadcastSignalModulation'];
    }

    /**
     * The frequency in MHz for a particular broadcast.
     *
     * @param $broadcastFrequencyValue |
     * @return static
     **/
    public function setBroadcastFrequencyValue($broadcastFrequencyValue): static {
        $this->properties['broadcastFrequencyValue'] = $broadcastFrequencyValue;

        return $this;
    }

    /**
     * @return |
     **/
    public function getBroadcastFrequencyValue() {
        return $this->properties['broadcastFrequencyValue'];
    }


}
