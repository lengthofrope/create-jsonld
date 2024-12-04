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
 * A musical composition.
 *
 * @see https://schema.org/MusicComposition
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MusicComposition extends CreativeWork
{
    public static function factory(): MusicComposition
    {
        return new MusicComposition('https://schema.org/', 'MusicComposition');
    }

    /**
     * The date and place the work was first performed.
     *
     * @param $firstPerformance 
     * @return static
     **/
    public function setFirstPerformance($firstPerformance): static {
        $this->properties['firstPerformance'] = $firstPerformance;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFirstPerformance() {
        return $this->properties['firstPerformance'];
    }
    /**
     * An audio recording of the work.
     *
     * @param $recordedAs 
     * @return static
     **/
    public function setRecordedAs($recordedAs): static {
        $this->properties['recordedAs'] = $recordedAs;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRecordedAs() {
        return $this->properties['recordedAs'];
    }
    /**
     * The words in the song.
     *
     * @param $lyrics 
     * @return static
     **/
    public function setLyrics($lyrics): static {
        $this->properties['lyrics'] = $lyrics;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLyrics() {
        return $this->properties['lyrics'];
    }
    /**
     * The International Standard Musical Work Code for the composition.
     *
     * @param $iswcCode 
     * @return static
     **/
    public function setIswcCode($iswcCode): static {
        $this->properties['iswcCode'] = $iswcCode;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIswcCode() {
        return $this->properties['iswcCode'];
    }
    /**
     * Smaller compositions included in this work (e.g. a movement in a symphony).
     *
     * @param $includedComposition 
     * @return static
     **/
    public function setIncludedComposition($includedComposition): static {
        $this->properties['includedComposition'] = $includedComposition;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIncludedComposition() {
        return $this->properties['includedComposition'];
    }
    /**
     * The person who wrote the words.
     *
     * @param $lyricist 
     * @return static
     **/
    public function setLyricist($lyricist): static {
        $this->properties['lyricist'] = $lyricist;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLyricist() {
        return $this->properties['lyricist'];
    }
    /**
     * An arrangement derived from the composition.
     *
     * @param $musicArrangement 
     * @return static
     **/
    public function setMusicArrangement($musicArrangement): static {
        $this->properties['musicArrangement'] = $musicArrangement;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMusicArrangement() {
        return $this->properties['musicArrangement'];
    }
    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     *
     * @param $musicCompositionForm 
     * @return static
     **/
    public function setMusicCompositionForm($musicCompositionForm): static {
        $this->properties['musicCompositionForm'] = $musicCompositionForm;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMusicCompositionForm() {
        return $this->properties['musicCompositionForm'];
    }
    /**
     * The key, mode, or scale this composition uses.
     *
     * @param $musicalKey 
     * @return static
     **/
    public function setMusicalKey($musicalKey): static {
        $this->properties['musicalKey'] = $musicalKey;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMusicalKey() {
        return $this->properties['musicalKey'];
    }
    /**
     * The person or organization who wrote a composition, or who is the composer of a
     * work performed at some event.
     *
     * @param $composer |
     * @return static
     **/
    public function setComposer($composer): static {
        $this->properties['composer'] = $composer;

        return $this;
    }

    /**
     * @return |
     **/
    public function getComposer() {
        return $this->properties['composer'];
    }
}
