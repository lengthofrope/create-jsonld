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
 * @see https://schema.org/CreativeWorkSeason
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CreativeWorkSeason extends CreativeWork
{
    public static function factory(): CreativeWorkSeason
    {
        return new CreativeWorkSeason('https://schema.org/', 'CreativeWorkSeason');
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
     * An episode of a TV/radio series or season.
     *
     * @param $episodes \LengthOfRope\JSONLD\Schema\Episode
     * @return static
     **/
    public function setEpisodes($episodes): static {
        $this->properties['episodes'] = $episodes;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Episode
     **/
    public function getEpisodes() {
        return $this->properties['episodes'];
    }
    /**
     * An episode of a TV, radio or game media within a series or season.
     *
     * @param $episode \LengthOfRope\JSONLD\Schema\Episode
     * @return static
     **/
    public function setEpisode($episode): static {
        $this->properties['episode'] = $episode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Episode
     **/
    public function getEpisode() {
        return $this->properties['episode'];
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
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $startDate \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setStartDate($startDate): static {
        $this->properties['startDate'] = $startDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getStartDate() {
        return $this->properties['startDate'];
    }
    /**
     * The production company or studio responsible for the item, e.g. series, video
     * game, episode etc.
     *
     * @param $productionCompany \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setProductionCompany($productionCompany): static {
        $this->properties['productionCompany'] = $productionCompany;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getProductionCompany() {
        return $this->properties['productionCompany'];
    }
    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     *
     * @param $trailer \LengthOfRope\JSONLD\Schema\VideoObject
     * @return static
     **/
    public function setTrailer($trailer): static {
        $this->properties['trailer'] = $trailer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\VideoObject
     **/
    public function getTrailer() {
        return $this->properties['trailer'];
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
     * Position of the season within an ordered group of seasons.
     *
     * @param $seasonNumber \LengthOfRope\JSONLD\DataType\TypeInteger|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setSeasonNumber($seasonNumber): static {
        $this->properties['seasonNumber'] = $seasonNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getSeasonNumber() {
        return $this->properties['seasonNumber'];
    }
    /**
     * The number of episodes in this season or series.
     *
     * @param $numberOfEpisodes \LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setNumberOfEpisodes($numberOfEpisodes): static {
        $this->properties['numberOfEpisodes'] = $numberOfEpisodes;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getNumberOfEpisodes() {
        return $this->properties['numberOfEpisodes'];
    }
    /**
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $endDate \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setEndDate($endDate): static {
        $this->properties['endDate'] = $endDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getEndDate() {
        return $this->properties['endDate'];
    }
}
