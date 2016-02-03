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
 * A musical composition.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MusicCompositionSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new MusicCompositionSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The person or organization who wrote the composition.
     **/
    private $composer;
    public function setComposer($composer) {
        $this->composer = $composer;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     **/
    public function getComposer() {
        return $this->composer;
    }

    /**
     * The date and place the work was first performed.
     **/
    private $firstPerformance;
    public function setFirstPerformance($firstPerformance) {
        $this->firstPerformance = $firstPerformance;

        return $this;
    }

    /**
     * @return EventSchema     **/
    public function getFirstPerformance() {
        return $this->firstPerformance;
    }

    /**
     * Smaller compositions included in this work (e.g. a movement in a symphony).
     **/
    private $includedComposition;
    public function setIncludedComposition($includedComposition) {
        $this->includedComposition = $includedComposition;

        return $this;
    }

    /**
     * @return MusicCompositionSchema     **/
    public function getIncludedComposition() {
        return $this->includedComposition;
    }

    /**
     * The International Standard Musical Work Code for the composition.
     **/
    private $iswcCode;
    public function setIswcCode($iswcCode) {
        $this->iswcCode = $iswcCode;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getIswcCode() {
        return $this->iswcCode;
    }

    /**
     * The person who wrote the words.
     **/
    private $lyricist;
    public function setLyricist($lyricist) {
        $this->lyricist = $lyricist;

        return $this;
    }

    /**
     * @return PersonSchema     **/
    public function getLyricist() {
        return $this->lyricist;
    }

    /**
     * The words in the song.
     **/
    private $lyrics;
    public function setLyrics($lyrics) {
        $this->lyrics = $lyrics;

        return $this;
    }

    /**
     * @return CreativeWorkSchema     **/
    public function getLyrics() {
        return $this->lyrics;
    }

    /**
     * An arrangement derived from the composition.
     **/
    private $musicArrangement;
    public function setMusicArrangement($musicArrangement) {
        $this->musicArrangement = $musicArrangement;

        return $this;
    }

    /**
     * @return MusicCompositionSchema     **/
    public function getMusicArrangement() {
        return $this->musicArrangement;
    }

    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     **/
    private $musicCompositionForm;
    public function setMusicCompositionForm($musicCompositionForm) {
        $this->musicCompositionForm = $musicCompositionForm;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getMusicCompositionForm() {
        return $this->musicCompositionForm;
    }

    /**
     * The key, mode, or scale this composition uses.
     **/
    private $musicalKey;
    public function setMusicalKey($musicalKey) {
        $this->musicalKey = $musicalKey;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getMusicalKey() {
        return $this->musicalKey;
    }

    /**
     * An audio recording of the work.
     **/
    private $recordedAs;
    public function setRecordedAs($recordedAs) {
        $this->recordedAs = $recordedAs;

        return $this;
    }

    /**
     * @return MusicRecordingSchema     **/
    public function getRecordedAs() {
        return $this->recordedAs;
    }


}
