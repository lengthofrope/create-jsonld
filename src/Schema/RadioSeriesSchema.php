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
 * CreativeWorkSeries dedicated to radio broadcast and associated online delivery.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class RadioSeriesSchema extends CreativeWorkSeriesSchema
{
    public static function factory(): RadioSeriesSchema
    {
        return new RadioSeriesSchema('https://schema.org/', 'RadioSeries');
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
     * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     *
     * @param $actors 
     * @return static
     **/
    public function setActors($actors): static {
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
     * A season that is part of the media series.
     *
     * @param $containsSeason 
     * @return static
     **/
    public function setContainsSeason($containsSeason): static {
        $this->properties['containsSeason'] = $containsSeason;

        return $this;
    }

    /**
     * @return 
     **/
    public function getContainsSeason() {
        return $this->properties['containsSeason'];
    }

    /**
     * The number of seasons in this series.
     *
     * @param $numberOfSeasons 
     * @return static
     **/
    public function setNumberOfSeasons($numberOfSeasons): static {
        $this->properties['numberOfSeasons'] = $numberOfSeasons;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNumberOfSeasons() {
        return $this->properties['numberOfSeasons'];
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
     * A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     * @param $directors 
     * @return static
     **/
    public function setDirectors($directors): static {
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
     * A season in a media series.
     *
     * @param $seasons 
     * @return static
     **/
    public function setSeasons($seasons): static {
        $this->properties['seasons'] = $seasons;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSeasons() {
        return $this->properties['seasons'];
    }

    /**
     * A season in a media series.
     *
     * @param $season |
     * @return static
     **/
    public function setSeason($season): static {
        $this->properties['season'] = $season;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSeason() {
        return $this->properties['season'];
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
     * The composer of the soundtrack.
     *
     * @param $musicBy |
     * @return static
     **/
    public function setMusicBy($musicBy): static {
        $this->properties['musicBy'] = $musicBy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getMusicBy() {
        return $this->properties['musicBy'];
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
