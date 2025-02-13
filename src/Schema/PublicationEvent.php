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
 * A PublicationEvent corresponds indifferently to the event of publication for a
 * CreativeWork of any type, e.g. a broadcast event, an on-demand event, a
 * book/journal publication via a variety of delivery media.
 *
 * @see https://schema.org/PublicationEvent
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PublicationEvent extends Event
{
    public static function factory(): PublicationEvent
    {
        return new PublicationEvent('https://schema.org/', 'PublicationEvent');
    }

    /**
     * An agent associated with the publication event.
     *
     * @param $publishedBy \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setPublishedBy($publishedBy): static {
        $this->properties['publishedBy'] = $publishedBy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getPublishedBy() {
        return $this->properties['publishedBy'];
    }
    /**
     * A broadcast service associated with the publication event.
     *
     * @param $publishedOn \LengthOfRope\JSONLD\Schema\BroadcastService
     * @return static
     **/
    public function setPublishedOn($publishedOn): static {
        $this->properties['publishedOn'] = $publishedOn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BroadcastService
     **/
    public function getPublishedOn() {
        return $this->properties['publishedOn'];
    }
    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @param $free \LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setFree($free): static {
        $this->properties['free'] = $free;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getFree() {
        return $this->properties['free'];
    }
}
