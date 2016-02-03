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
 * A video file.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class VideoObjectSchema extends MediaObjectSchema
{
    public static function factory()
    {
        return new VideoObjectSchema();
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
     * The caption for this object.
     **/
    private $caption;
    public function setCaption($caption) {
        $this->caption = $caption;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getCaption() {
        return $this->caption;
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
     * Thumbnail image for an image or video.
     **/
    private $thumbnail;
    public function setThumbnail($thumbnail) {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * @return ImageObjectSchema     
     **/
    public function getThumbnail() {
        return $this->thumbnail;
    }

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     **/
    private $transcript;
    public function setTranscript($transcript) {
        $this->transcript = $transcript;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getTranscript() {
        return $this->transcript;
    }

    /**
     * The frame size of the video.
     **/
    private $videoFrameSize;
    public function setVideoFrameSize($videoFrameSize) {
        $this->videoFrameSize = $videoFrameSize;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getVideoFrameSize() {
        return $this->videoFrameSize;
    }

    /**
     * The quality of the video.
     **/
    private $videoQuality;
    public function setVideoQuality($videoQuality) {
        $this->videoQuality = $videoQuality;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getVideoQuality() {
        return $this->videoQuality;
    }


}
