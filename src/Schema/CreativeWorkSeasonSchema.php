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
 * A media season e.g. tv, radio, video game etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CreativeWorkSeasonSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new CreativeWorkSeasonSchema();
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
     * @return PersonSchema     **/
    public function getActor() {
        return $this->actor;
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
     * @return PersonSchema     **/
    public function getDirector() {
        return $this->director;
    }

    /**
     * The end date and time of the item (in <a href='http://en.wikipedia.org/wiki/ISO_8601'>ISO 8601 date format</a>).
     **/
    private $endDate;
    public function setEndDate($endDate) {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getEndDate() {
        return $this->endDate;
    }

    /**
     * An episode of a tv, radio or game media within a series or season.
     **/
    private $episode;
    public function setEpisode($episode) {
        $this->episode = $episode;

        return $this;
    }

    /**
     * @return EpisodeSchema     **/
    public function getEpisode() {
        return $this->episode;
    }

    /**
     * An episode of a TV/radio series or season.
     **/
    private $episodes;
    public function setEpisodes($episodes) {
        $this->episodes = $episodes;

        return $this;
    }

    /**
     * @return EpisodeSchema     **/
    public function getEpisodes() {
        return $this->episodes;
    }

    /**
     * The number of episodes in this season or series.
     **/
    private $numberOfEpisodes;
    public function setNumberOfEpisodes($numberOfEpisodes) {
        $this->numberOfEpisodes = $numberOfEpisodes;

        return $this;
    }

    /**
     * @return IntegerSchema     **/
    public function getNumberOfEpisodes() {
        return $this->numberOfEpisodes;
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
     * @return CreativeWorkSeriesSchema     **/
    public function getPartOfSeries() {
        return $this->partOfSeries;
    }

    /**
     * The production company or studio responsible for the item e.g. series, video game, episode etc.
     **/
    private $productionCompany;
    public function setProductionCompany($productionCompany) {
        $this->productionCompany = $productionCompany;

        return $this;
    }

    /**
     * @return OrganizationSchema     **/
    public function getProductionCompany() {
        return $this->productionCompany;
    }

    /**
     * Position of the season within an ordered group of seasons.
     **/
    private $seasonNumber;
    public function setSeasonNumber($seasonNumber) {
        $this->seasonNumber = $seasonNumber;

        return $this;
    }

    /**
     * @return IntegerSchema|TextSchema     **/
    public function getSeasonNumber() {
        return $this->seasonNumber;
    }

    /**
     * The start date and time of the item (in <a href='http://en.wikipedia.org/wiki/ISO_8601'>ISO 8601 date format</a>).
     **/
    private $startDate;
    public function setStartDate($startDate) {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getStartDate() {
        return $this->startDate;
    }

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     **/
    private $trailer;
    public function setTrailer($trailer) {
        $this->trailer = $trailer;

        return $this;
    }

    /**
     * @return VideoObjectSchema     **/
    public function getTrailer() {
        return $this->trailer;
    }


}
