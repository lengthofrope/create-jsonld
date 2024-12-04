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
 * A media season, e.g. TV, radio, video game etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CreativeWorkSeason extends CreativeWork
{
    public static function factory(): CreativeWorkSeason
    {
        return new CreativeWorkSeason('https://schema.org/', 'CreativeWorkSeason');
    }

    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     * @param $actor |
     * @return static
     **/
    public function setActor($actor): static {
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
     * The trailer of a movie or TV/radio series, season, episode, etc.
     *
     * @param $trailer 
     * @return static
     **/
    public function setTrailer($trailer): static {
        $this->properties['trailer'] = $trailer;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTrailer() {
        return $this->properties['trailer'];
    }

    /**
     * Position of the season within an ordered group of seasons.
     *
     * @param $seasonNumber |
     * @return static
     **/
    public function setSeasonNumber($seasonNumber): static {
        $this->properties['seasonNumber'] = $seasonNumber;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSeasonNumber() {
        return $this->properties['seasonNumber'];
    }

    /**
     * An episode of a TV, radio or game media within a series or season.
     *
     * @param $episode 
     * @return static
     **/
    public function setEpisode($episode): static {
        $this->properties['episode'] = $episode;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEpisode() {
        return $this->properties['episode'];
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $startDate |
     * @return static
     **/
    public function setStartDate($startDate): static {
        $this->properties['startDate'] = $startDate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getStartDate() {
        return $this->properties['startDate'];
    }

    /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
     *
     * @param $productionCompany 
     * @return static
     **/
    public function setProductionCompany($productionCompany): static {
        $this->properties['productionCompany'] = $productionCompany;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProductionCompany() {
        return $this->properties['productionCompany'];
    }

    /**
     * The series to which this episode or season belongs.
     *
     * @param $partOfSeries 
     * @return static
     **/
    public function setPartOfSeries($partOfSeries): static {
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
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     * @param $director 
     * @return static
     **/
    public function setDirector($director): static {
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
     * The number of episodes in this season or series.
     *
     * @param $numberOfEpisodes 
     * @return static
     **/
    public function setNumberOfEpisodes($numberOfEpisodes): static {
        $this->properties['numberOfEpisodes'] = $numberOfEpisodes;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNumberOfEpisodes() {
        return $this->properties['numberOfEpisodes'];
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $endDate |
     * @return static
     **/
    public function setEndDate($endDate): static {
        $this->properties['endDate'] = $endDate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getEndDate() {
        return $this->properties['endDate'];
    }

    /**
     * An episode of a TV/radio series or season.
     *
     * @param $episodes 
     * @return static
     **/
    public function setEpisodes($episodes): static {
        $this->properties['episodes'] = $episodes;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEpisodes() {
        return $this->properties['episodes'];
    }


}