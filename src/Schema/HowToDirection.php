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
 * A direction indicating a single action to do in the instructions for how to
 * achieve a result.
 *
 * @see https://schema.org/HowToDirection
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class HowToDirection extends ListItem
{
    public static function factory(): HowToDirection
    {
        return new HowToDirection('https://schema.org/', 'HowToDirection');
    }

    /**
     * A media object representing the circumstances before performing this direction.
     *
     * @param $beforeMedia |
     * @return static
     **/
    public function setBeforeMedia($beforeMedia): static {
        $this->properties['beforeMedia'] = $beforeMedia;

        return $this;
    }

    /**
     * @return |
     **/
    public function getBeforeMedia() {
        return $this->properties['beforeMedia'];
    }
    /**
     * The length of time it takes to prepare the items to be used in instructions or a
     * direction, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $prepTime 
     * @return static
     **/
    public function setPrepTime($prepTime): static {
        $this->properties['prepTime'] = $prepTime;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPrepTime() {
        return $this->properties['prepTime'];
    }
    /**
     * A sub property of instrument. An object used (but not consumed) when performing
     * instructions or a direction.
     *
     * @param $tool |
     * @return static
     **/
    public function setTool($tool): static {
        $this->properties['tool'] = $tool;

        return $this;
    }

    /**
     * @return |
     **/
    public function getTool() {
        return $this->properties['tool'];
    }
    /**
     * The total time required to perform instructions or a direction (including time
     * to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $totalTime 
     * @return static
     **/
    public function setTotalTime($totalTime): static {
        $this->properties['totalTime'] = $totalTime;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTotalTime() {
        return $this->properties['totalTime'];
    }
    /**
     * A media object representing the circumstances while performing this direction.
     *
     * @param $duringMedia |
     * @return static
     **/
    public function setDuringMedia($duringMedia): static {
        $this->properties['duringMedia'] = $duringMedia;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDuringMedia() {
        return $this->properties['duringMedia'];
    }
    /**
     * The length of time it takes to perform instructions or a direction (not
     * including time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $performTime 
     * @return static
     **/
    public function setPerformTime($performTime): static {
        $this->properties['performTime'] = $performTime;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPerformTime() {
        return $this->properties['performTime'];
    }
    /**
     * A sub-property of instrument. A supply consumed when performing instructions or
     * a direction.
     *
     * @param $supply |
     * @return static
     **/
    public function setSupply($supply): static {
        $this->properties['supply'] = $supply;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSupply() {
        return $this->properties['supply'];
    }
    /**
     * A media object representing the circumstances after performing this direction.
     *
     * @param $afterMedia |
     * @return static
     **/
    public function setAfterMedia($afterMedia): static {
        $this->properties['afterMedia'] = $afterMedia;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAfterMedia() {
        return $this->properties['afterMedia'];
    }
}
