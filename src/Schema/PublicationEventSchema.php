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
 * A PublicationEvent corresponds indifferently to the event of publication for a CreativeWork of any type e.g. a broadcast event, an on-demand event, a book/journal publication via a variety of delivery media.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PublicationEventSchema extends EventSchema
{
    public static function factory()
    {
        return new PublicationEventSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * A flag to signal that the publication is accessible for free.
     **/
    private $free;
    public function setFree($free) {
        $this->free = $free;

        return $this;
    }

    /**
     * @return BooleanSchema     
     **/
    public function getFree() {
        return $this->free;
    }

    /**
     * A flag to signal that the publication is accessible for free.
     **/
    private $isAccessibleForFree;
    public function setIsAccessibleForFree($isAccessibleForFree) {
        $this->isAccessibleForFree = $isAccessibleForFree;

        return $this;
    }

    /**
     * @return BooleanSchema     
     **/
    public function getIsAccessibleForFree() {
        return $this->isAccessibleForFree;
    }

    /**
     * A broadcast service associated with the publication event.
     **/
    private $publishedOn;
    public function setPublishedOn($publishedOn) {
        $this->publishedOn = $publishedOn;

        return $this;
    }

    /**
     * @return BroadcastServiceSchema     
     **/
    public function getPublishedOn() {
        return $this->publishedOn;
    }


}
