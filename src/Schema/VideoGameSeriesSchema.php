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
 * A <a href="/VideoGame">video game</a> series.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class VideoGameSeriesSchema extends CreativeWorkSeriesSchema
{
    public static function factory()
    {
        return new VideoGameSeriesSchema();
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
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     **/
    private $characterAttribute;
    public function setCharacterAttribute($characterAttribute) {
        $this->characterAttribute = $characterAttribute;

        return $this;
    }

    /**
     * @return ThingSchema     **/
    public function getCharacterAttribute() {
        return $this->characterAttribute;
    }

    /**
     * Cheat codes to the game.
     **/
    private $cheatCode;
    public function setCheatCode($cheatCode) {
        $this->cheatCode = $cheatCode;

        return $this;
    }

    /**
     * @return CreativeWorkSchema     **/
    public function getCheatCode() {
        return $this->cheatCode;
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
     * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
     **/
    private $gameItem;
    public function setGameItem($gameItem) {
        $this->gameItem = $gameItem;

        return $this;
    }

    /**
     * @return ThingSchema     **/
    public function getGameItem() {
        return $this->gameItem;
    }

    /**
     * Real or fictional location of the game (or part of game).
     **/
    private $gameLocation;
    public function setGameLocation($gameLocation) {
        $this->gameLocation = $gameLocation;

        return $this;
    }

    /**
     * @return URLSchema|PlaceSchema|PostalAddressSchema     **/
    public function getGameLocation() {
        return $this->gameLocation;
    }

    /**
     * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
     **/
    private $gamePlatform;
    public function setGamePlatform($gamePlatform) {
        $this->gamePlatform = $gamePlatform;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema|ThingSchema     **/
    public function getGamePlatform() {
        return $this->gamePlatform;
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
     * Indicate how many people can play this game (minimum, maximum, or range).
     **/
    private $numberOfPlayers;
    public function setNumberOfPlayers($numberOfPlayers) {
        $this->numberOfPlayers = $numberOfPlayers;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     **/
    public function getNumberOfPlayers() {
        return $this->numberOfPlayers;
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
     * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
     **/
    private $playMode;
    public function setPlayMode($playMode) {
        $this->playMode = $playMode;

        return $this;
    }

    /**
     * @return GamePlayModeSchema     **/
    public function getPlayMode() {
        return $this->playMode;
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
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     **/
    private $quest;
    public function setQuest($quest) {
        $this->quest = $quest;

        return $this;
    }

    /**
     * @return ThingSchema     **/
    public function getQuest() {
        return $this->quest;
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
