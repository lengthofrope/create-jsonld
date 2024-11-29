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
 * The term "story" is any indivisible, re-printable
 *     	unit of a comic, including the interior stories, covers, and backmatter. Most
 *     	comics have at least two stories: a cover (ComicCoverArt) and an interior story.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ComicStorySchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new ComicStorySchema('https://schema.org/', 'ComicStory');
    }

    /**
     * The individual who adds lettering, including speech balloons and sound effects, to artwork.
     *
     * @param $letterer 
     **/
    public function setLetterer($letterer) {
        $this->properties['letterer'] = $letterer;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLetterer() {
        return $this->properties['letterer'];
    }

    /**
     * The individual who traces over the pencil drawings in ink after pencils are complete.
     *
     * @param $inker 
     **/
    public function setInker($inker) {
        $this->properties['inker'] = $inker;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInker() {
        return $this->properties['inker'];
    }

    /**
     * The individual who adds color to inked drawings.
     *
     * @param $colorist 
     **/
    public function setColorist($colorist) {
        $this->properties['colorist'] = $colorist;

        return $this;
    }

    /**
     * @return 
     **/
    public function getColorist() {
        return $this->properties['colorist'];
    }

    /**
     * The primary artist for a work
    	in a medium other than pencils or digital line art--for example, if the
    	primary artwork is done in watercolors or digital paints.
     *
     * @param $artist 
     **/
    public function setArtist($artist) {
        $this->properties['artist'] = $artist;

        return $this;
    }

    /**
     * @return 
     **/
    public function getArtist() {
        return $this->properties['artist'];
    }

    /**
     * The individual who draws the primary narrative artwork.
     *
     * @param $penciler 
     **/
    public function setPenciler($penciler) {
        $this->properties['penciler'] = $penciler;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPenciler() {
        return $this->properties['penciler'];
    }


}
