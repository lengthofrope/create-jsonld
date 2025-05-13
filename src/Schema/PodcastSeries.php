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
 * A podcast is an episodic series of digital audio or video files which a user can
 * download and listen to.
 *
 * @see https://schema.org/PodcastSeries
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PodcastSeries extends CreativeWorkSeries
{
    public static function factory(): PodcastSeries
    {
        return new PodcastSeries('https://schema.org/', 'PodcastSeries');
    }

    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or
     * in an event. Actors can be associated with individual items or with a series,
     * episode, clip.
     *
     * @param $actor \LengthOfRope\JSONLD\Schema\PerformingGroup|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setActor($actor): static {
        $this->properties['actor'] = $actor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PerformingGroup|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getActor() {
        return $this->properties['actor'];
    }
    /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of
     * date-stamped updates. This is usually RSS or Atom.
     *
     * @param $webFeed \LengthOfRope\JSONLD\Schema\DataFeed|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setWebFeed($webFeed): static {
        $this->properties['webFeed'] = $webFeed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DataFeed|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getWebFeed() {
        return $this->properties['webFeed'];
    }
}
