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
 * A video file.
 *
 * @see https://schema.org/VideoObject
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class VideoObject extends MediaObject
{
    public static function factory(): VideoObject
    {
        return new VideoObject('https://schema.org/', 'VideoObject');
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
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that
     * object.
     *
     * @param $transcript \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTranscript($transcript): static {
        $this->properties['transcript'] = $transcript;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTranscript() {
        return $this->properties['transcript'];
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
     * The frame size of the video.
     *
     * @param $videoFrameSize \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setVideoFrameSize($videoFrameSize): static {
        $this->properties['videoFrameSize'] = $videoFrameSize;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getVideoFrameSize() {
        return $this->properties['videoFrameSize'];
    }
    /**
     * The quality of the video.
     *
     * @param $videoQuality \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setVideoQuality($videoQuality): static {
        $this->properties['videoQuality'] = $videoQuality;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getVideoQuality() {
        return $this->properties['videoQuality'];
    }
    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     *
     * @param $embeddedTextCaption \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEmbeddedTextCaption($embeddedTextCaption): static {
        $this->properties['embeddedTextCaption'] = $embeddedTextCaption;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEmbeddedTextCaption() {
        return $this->properties['embeddedTextCaption'];
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
     * The caption for this object. For downloadable machine formats (closed caption,
     * subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     *
     * @param $caption \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\MediaObject
     * @return static
     **/
    public function setCaption($caption): static {
        $this->properties['caption'] = $caption;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\MediaObject
     **/
    public function getCaption() {
        return $this->properties['caption'];
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
}
