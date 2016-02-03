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
 * CreativeWorkSeries dedicated to TV broadcast and associated online delivery.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TVSeriesSchema extends \LengthOfRope\JSONLD\Elements\ElementGroup
{
    public static function factory()
    {
        return new TVSeriesSchema();
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
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     **/
    private $actors;
    public function setActors($actors) {
        $this->actors = $actors;

        return $this;
    }

    /**
     * @return PersonSchema     **/
    public function getActors() {
        return $this->actors;
    }

    /**
     * A season that is part of the media series.
     **/
    private $containsSeason;
    public function setContainsSeason($containsSeason) {
        $this->containsSeason = $containsSeason;

        return $this;
    }

    /**
     * @return CreativeWorkSeasonSchema     **/
    public function getContainsSeason() {
        return $this->containsSeason;
    }

    /**
     * The country of the principal offices of the production company or individual responsible for the movie or program.
     **/
    private $countryOfOrigin;
    public function setCountryOfOrigin($countryOfOrigin) {
        $this->countryOfOrigin = $countryOfOrigin;

        return $this;
    }

    /**
     * @return CountrySchema     **/
    public function getCountryOfOrigin() {
        return $this->countryOfOrigin;
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
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     **/
    private $directors;
    public function setDirectors($directors) {
        $this->directors = $directors;

        return $this;
    }

    /**
     * @return PersonSchema     **/
    public function getDirectors() {
        return $this->directors;
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
     * The composer of the soundtrack.
     **/
    private $musicBy;
    public function setMusicBy($musicBy) {
        $this->musicBy = $musicBy;

        return $this;
    }

    /**
     * @return MusicGroupSchema|PersonSchema     **/
    public function getMusicBy() {
        return $this->musicBy;
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
     * The number of seasons in this series.
     **/
    private $numberOfSeasons;
    public function setNumberOfSeasons($numberOfSeasons) {
        $this->numberOfSeasons = $numberOfSeasons;

        return $this;
    }

    /**
     * @return IntegerSchema     **/
    public function getNumberOfSeasons() {
        return $this->numberOfSeasons;
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
     * A season in a media series.
     **/
    private $season;
    public function setSeason($season) {
        $this->season = $season;

        return $this;
    }

    /**
     * @return CreativeWorkSeasonSchema     **/
    public function getSeason() {
        return $this->season;
    }

    /**
     * A season in a media series.
     **/
    private $seasons;
    public function setSeasons($seasons) {
        $this->seasons = $seasons;

        return $this;
    }

    /**
     * @return CreativeWorkSeasonSchema     **/
    public function getSeasons() {
        return $this->seasons;
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
