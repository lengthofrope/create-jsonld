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
 * A video game series.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class VideoGameSeriesSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new VideoGameSeriesSchema('https://schema.org/', 'VideoGameSeries');
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
     * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
     *
     * @param $gamePlatform ||
     **/
    public function setGamePlatform($gamePlatform) {
        $this->properties['gamePlatform'] = $gamePlatform;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getGamePlatform() {
        return $this->properties['gamePlatform'];
    }

    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     *
     * @param $trailer 
     **/
    public function setTrailer($trailer) {
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
     * A season that is part of the media series.
     *
     * @param $containsSeason 
     **/
    public function setContainsSeason($containsSeason) {
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
     **/
    public function setNumberOfSeasons($numberOfSeasons) {
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
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     *
     * @param $quest 
     **/
    public function setQuest($quest) {
        $this->properties['quest'] = $quest;

        return $this;
    }

    /**
     * @return 
     **/
    public function getQuest() {
        return $this->properties['quest'];
    }

    /**
     * An episode of a TV, radio or game media within a series or season.
     *
     * @param $episode 
     **/
    public function setEpisode($episode) {
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
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     * @param $numberOfPlayers 
     **/
    public function setNumberOfPlayers($numberOfPlayers) {
        $this->properties['numberOfPlayers'] = $numberOfPlayers;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNumberOfPlayers() {
        return $this->properties['numberOfPlayers'];
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
     * Cheat codes to the game.
     *
     * @param $cheatCode 
     **/
    public function setCheatCode($cheatCode) {
        $this->properties['cheatCode'] = $cheatCode;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCheatCode() {
        return $this->properties['cheatCode'];
    }

    /**
     * A season in a media series.
     *
     * @param $seasons 
     **/
    public function setSeasons($seasons) {
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
     * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
     *
     * @param $gameItem 
     **/
    public function setGameItem($gameItem) {
        $this->properties['gameItem'] = $gameItem;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGameItem() {
        return $this->properties['gameItem'];
    }

    /**
     * Real or fictional location of the game (or part of game).
     *
     * @param $gameLocation ||
     **/
    public function setGameLocation($gameLocation) {
        $this->properties['gameLocation'] = $gameLocation;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getGameLocation() {
        return $this->properties['gameLocation'];
    }

    /**
     * A season in a media series.
     *
     * @param $season |
     **/
    public function setSeason($season) {
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
     **/
    public function setProductionCompany($productionCompany) {
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
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     *
     * @param $characterAttribute 
     **/
    public function setCharacterAttribute($characterAttribute) {
        $this->properties['characterAttribute'] = $characterAttribute;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCharacterAttribute() {
        return $this->properties['characterAttribute'];
    }

    /**
     * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
     *
     * @param $playMode 
     **/
    public function setPlayMode($playMode) {
        $this->properties['playMode'] = $playMode;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPlayMode() {
        return $this->properties['playMode'];
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
     * The number of episodes in this season or series.
     *
     * @param $numberOfEpisodes 
     **/
    public function setNumberOfEpisodes($numberOfEpisodes) {
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

    /**
     * An episode of a TV/radio series or season.
     *
     * @param $episodes 
     **/
    public function setEpisodes($episodes) {
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
