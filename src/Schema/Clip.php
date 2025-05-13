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
 * A short TV or radio program or a segment/part of a program.
 *
 * @see https://schema.org/Clip
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Clip extends CreativeWork
{
    public static function factory(): Clip
    {
        return new Clip('https://schema.org/', 'Clip');
    }

    /**
     * The series to which this episode or season belongs.
     *
     * @param $partOfSeries \LengthOfRope\JSONLD\Schema\CreativeWorkSeries
     * @return static
     **/
    public function setPartOfSeries($partOfSeries): static {
        $this->properties['partOfSeries'] = $partOfSeries;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWorkSeries
     **/
    public function getPartOfSeries() {
        return $this->properties['partOfSeries'];
    }
    /**
     * The episode to which this clip belongs.
     *
     * @param $partOfEpisode \LengthOfRope\JSONLD\Schema\Episode
     * @return static
     **/
    public function setPartOfEpisode($partOfEpisode): static {
        $this->properties['partOfEpisode'] = $partOfEpisode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Episode
     **/
    public function getPartOfEpisode() {
        return $this->properties['partOfEpisode'];
    }
    /**
     * A director of e.g. TV, radio, movie, video games etc. content. Directors can be
     * associated with individual items or with a series, episode, clip.
     *
     * @param $directors \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setDirectors($directors): static {
        $this->properties['directors'] = $directors;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getDirectors() {
        return $this->properties['directors'];
    }
    /**
     * The composer of the soundtrack.
     *
     * @param $musicBy \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\MusicGroup
     * @return static
     **/
    public function setMusicBy($musicBy): static {
        $this->properties['musicBy'] = $musicBy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\MusicGroup
     **/
    public function getMusicBy() {
        return $this->properties['musicBy'];
    }
    /**
     * Position of the clip within an ordered group of clips.
     *
     * @param $clipNumber \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setClipNumber($clipNumber): static {
        $this->properties['clipNumber'] = $clipNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getClipNumber() {
        return $this->properties['clipNumber'];
    }
    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event.
     * Directors can be associated with individual items or with a series, episode,
     * clip.
     *
     * @param $director \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setDirector($director): static {
        $this->properties['director'] = $director;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getDirector() {
        return $this->properties['director'];
    }
    /**
     * The end time of the clip expressed as the number of seconds from the beginning
     * of the work.
     *
     * @param $endOffset \LengthOfRope\JSONLD\Schema\HyperTocEntry|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setEndOffset($endOffset): static {
        $this->properties['endOffset'] = $endOffset;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\HyperTocEntry|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getEndOffset() {
        return $this->properties['endOffset'];
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
     * The start time of the clip expressed as the number of seconds from the beginning
     * of the work.
     *
     * @param $startOffset \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\HyperTocEntry
     * @return static
     **/
    public function setStartOffset($startOffset): static {
        $this->properties['startOffset'] = $startOffset;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\HyperTocEntry
     **/
    public function getStartOffset() {
        return $this->properties['startOffset'];
    }
    /**
     * The season to which this episode belongs.
     *
     * @param $partOfSeason \LengthOfRope\JSONLD\Schema\CreativeWorkSeason
     * @return static
     **/
    public function setPartOfSeason($partOfSeason): static {
        $this->properties['partOfSeason'] = $partOfSeason;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWorkSeason
     **/
    public function getPartOfSeason() {
        return $this->properties['partOfSeason'];
    }
    /**
     * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated
     * with individual items or with a series, episode, clip.
     *
     * @param $actors \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setActors($actors): static {
        $this->properties['actors'] = $actors;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getActors() {
        return $this->properties['actors'];
    }
}
