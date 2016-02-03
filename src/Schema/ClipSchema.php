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
 * A short TV or radio program or a segment/part of a program.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ClipSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new ClipSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     **/
    private $actor;
    public function setActor($actor) {
        $this->actor = $actor;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getActor() {
        return $this->actor;
    }

    /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     **/
    private $actors;
    public function setActors($actors) {
        $this->actors = $actors;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getActors() {
        return $this->actors;
    }

    /**
     * Position of the clip within an ordered group of clips.
     **/
    private $clipNumber;
    public function setClipNumber($clipNumber) {
        $this->clipNumber = $clipNumber;

        return $this;
    }

    /**
     * @return IntegerSchema|TextSchema     
     **/
    public function getClipNumber() {
        return $this->clipNumber;
    }

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     **/
    private $director;
    public function setDirector($director) {
        $this->director = $director;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getDirector() {
        return $this->director;
    }

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     **/
    private $directors;
    public function setDirectors($directors) {
        $this->directors = $directors;

        return $this;
    }

    /**
     * @return PersonSchema     
     **/
    public function getDirectors() {
        return $this->directors;
    }

    /**
     * The composer of the soundtrack.
     **/
    private $musicBy;
    public function setMusicBy($musicBy) {
        $this->musicBy = $musicBy;

        return $this;
    }

    /**
     * @return MusicGroupSchema|PersonSchema     
     **/
    public function getMusicBy() {
        return $this->musicBy;
    }

    /**
     * The episode to which this clip belongs.
     **/
    private $partOfEpisode;
    public function setPartOfEpisode($partOfEpisode) {
        $this->partOfEpisode = $partOfEpisode;

        return $this;
    }

    /**
     * @return EpisodeSchema     
     **/
    public function getPartOfEpisode() {
        return $this->partOfEpisode;
    }

    /**
     * The season to which this episode belongs.
     **/
    private $partOfSeason;
    public function setPartOfSeason($partOfSeason) {
        $this->partOfSeason = $partOfSeason;

        return $this;
    }

    /**
     * @return CreativeWorkSeasonSchema     
     **/
    public function getPartOfSeason() {
        return $this->partOfSeason;
    }

    /**
     * The series to which this episode or season belongs.
     **/
    private $partOfSeries;
    public function setPartOfSeries($partOfSeries) {
        $this->partOfSeries = $partOfSeries;

        return $this;
    }

    /**
     * @return CreativeWorkSeriesSchema     
     **/
    public function getPartOfSeries() {
        return $this->partOfSeries;
    }


}
