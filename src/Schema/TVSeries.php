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
 * CreativeWorkSeries dedicated to TV broadcast and associated online delivery.
 *
 * @see https://schema.org/TVSeries
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TVSeries extends CreativeWork
{
    public static function factory(): TVSeries
    {
        return new TVSeries('https://schema.org/', 'TVSeries');
    }

    /**
     * The country of origin of something, including products as well as creative
     * works such as movie and TV content.
     *
     * In the case of TV and movie, this would be the country of the principle offices
     * of the production company or individual responsible for the movie. For other
     * kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and
     * properties such as [[contentLocation]] and [[locationCreated]] may be more
     * applicable.
     *
     * In the case of products, the country of origin of the product. The exact
     * interpretation of this may vary by context and product type, and cannot be fully
     * enumerated here.
     *
     * @param $countryOfOrigin \LengthOfRope\JSONLD\Schema\Country
     * @return static
     **/
    public function setCountryOfOrigin($countryOfOrigin): static {
        $this->properties['countryOfOrigin'] = $countryOfOrigin;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Country
     **/
    public function getCountryOfOrigin() {
        return $this->properties['countryOfOrigin'];
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
     * A season in a media series.
     *
     * @param $seasons \LengthOfRope\JSONLD\Schema\CreativeWorkSeason
     * @return static
     **/
    public function setSeasons($seasons): static {
        $this->properties['seasons'] = $seasons;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWorkSeason
     **/
    public function getSeasons() {
        return $this->properties['seasons'];
    }
    /**
     * A season in a media series.
     *
     * @param $season \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWorkSeason
     * @return static
     **/
    public function setSeason($season): static {
        $this->properties['season'] = $season;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\CreativeWorkSeason
     **/
    public function getSeason() {
        return $this->properties['season'];
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
     * A season that is part of the media series.
     *
     * @param $containsSeason \LengthOfRope\JSONLD\Schema\CreativeWorkSeason
     * @return static
     **/
    public function setContainsSeason($containsSeason): static {
        $this->properties['containsSeason'] = $containsSeason;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWorkSeason
     **/
    public function getContainsSeason() {
        return $this->properties['containsSeason'];
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
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]]
     * representing at the most general/abstract level, a work of film or television.
     *
     * For example, the motion picture known as "Ghostbusters" has a titleEIDR of
     * "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several
     * variants, which EIDR calls "edits". See [[editEIDR]].
     *
     * Since schema.org types like [[Movie]], [[TVEpisode]], [[TVSeason]], and
     * [[TVSeries]] can be used for both works and their multiple expressions, it is
     * possible to use [[titleEIDR]] alone (for a general description), or alongside
     * [[editEIDR]] for a more edit-specific description.
     *
     *
     * @param $titleEIDR \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTitleEIDR($titleEIDR): static {
        $this->properties['titleEIDR'] = $titleEIDR;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTitleEIDR() {
        return $this->properties['titleEIDR'];
    }
    /**
     * The number of seasons in this series.
     *
     * @param $numberOfSeasons \LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setNumberOfSeasons($numberOfSeasons): static {
        $this->properties['numberOfSeasons'] = $numberOfSeasons;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getNumberOfSeasons() {
        return $this->properties['numberOfSeasons'];
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
}
