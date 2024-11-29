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
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ClipSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new ClipSchema('https://schema.org/', 'Clip');
    }

    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     * @param $actor |
     **/
    public function setActor($actor) {
        $this->properties['actor'] = $actor;

        return $this;
    }

    /**
     * @return |
     **/
    public function getActor() {
        return $this->properties['actor'];
    }

    /**
     * The episode to which this clip belongs.
     *
     * @param $partOfEpisode 
     **/
    public function setPartOfEpisode($partOfEpisode) {
        $this->properties['partOfEpisode'] = $partOfEpisode;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPartOfEpisode() {
        return $this->properties['partOfEpisode'];
    }

    /**
     * The season to which this episode belongs.
     *
     * @param $partOfSeason 
     **/
    public function setPartOfSeason($partOfSeason) {
        $this->properties['partOfSeason'] = $partOfSeason;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPartOfSeason() {
        return $this->properties['partOfSeason'];
    }

    /**
     * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     *
     * @param $actors 
     **/
    public function setActors($actors) {
        $this->properties['actors'] = $actors;

        return $this;
    }

    /**
     * @return 
     **/
    public function getActors() {
        return $this->properties['actors'];
    }

    /**
     * A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     * @param $directors 
     **/
    public function setDirectors($directors) {
        $this->properties['directors'] = $directors;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDirectors() {
        return $this->properties['directors'];
    }

    /**
     * Position of the clip within an ordered group of clips.
     *
     * @param $clipNumber |
     **/
    public function setClipNumber($clipNumber) {
        $this->properties['clipNumber'] = $clipNumber;

        return $this;
    }

    /**
     * @return |
     **/
    public function getClipNumber() {
        return $this->properties['clipNumber'];
    }

    /**
     * The end time of the clip expressed as the number of seconds from the beginning of the work.
     *
     * @param $endOffset |
     **/
    public function setEndOffset($endOffset) {
        $this->properties['endOffset'] = $endOffset;

        return $this;
    }

    /**
     * @return |
     **/
    public function getEndOffset() {
        return $this->properties['endOffset'];
    }

    /**
     * The series to which this episode or season belongs.
     *
     * @param $partOfSeries 
     **/
    public function setPartOfSeries($partOfSeries) {
        $this->properties['partOfSeries'] = $partOfSeries;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPartOfSeries() {
        return $this->properties['partOfSeries'];
    }

    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     *
     * @param $startOffset |
     **/
    public function setStartOffset($startOffset) {
        $this->properties['startOffset'] = $startOffset;

        return $this;
    }

    /**
     * @return |
     **/
    public function getStartOffset() {
        return $this->properties['startOffset'];
    }

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     * @param $director 
     **/
    public function setDirector($director) {
        $this->properties['director'] = $director;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDirector() {
        return $this->properties['director'];
    }

    /**
     * The composer of the soundtrack.
     *
     * @param $musicBy |
     **/
    public function setMusicBy($musicBy) {
        $this->properties['musicBy'] = $musicBy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getMusicBy() {
        return $this->properties['musicBy'];
    }


}
