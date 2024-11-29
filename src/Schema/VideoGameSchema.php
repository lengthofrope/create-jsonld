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
 * A video game is an electronic game that involves human interaction with a user interface to generate visual feedback on a video device.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class VideoGameSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new VideoGameSchema('https://schema.org/', 'VideoGame');
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
     * The server on which  it is possible to play the game.
     *
     * @param $gameServer 
     **/
    public function setGameServer($gameServer) {
        $this->properties['gameServer'] = $gameServer;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGameServer() {
        return $this->properties['gameServer'];
    }

    /**
     * Links to tips, tactics, etc.
     *
     * @param $gameTip 
     **/
    public function setGameTip($gameTip) {
        $this->properties['gameTip'] = $gameTip;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGameTip() {
        return $this->properties['gameTip'];
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
     * The edition of a video game.
     *
     * @param $gameEdition 
     **/
    public function setGameEdition($gameEdition) {
        $this->properties['gameEdition'] = $gameEdition;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGameEdition() {
        return $this->properties['gameEdition'];
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
