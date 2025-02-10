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
 * Event type: Sports event.
 *
 * @see https://schema.org/SportsEvent
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SportsEvent extends Event
{
    public static function factory(): SportsEvent
    {
        return new SportsEvent('https://schema.org/', 'SportsEvent');
    }

    /**
     * A competitor in a sports event.
     *
     * @param $competitor \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\SportsTeam
     * @return static
     **/
    public function setCompetitor($competitor): static {
        $this->properties['competitor'] = $competitor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\SportsTeam
     **/
    public function getCompetitor() {
        return $this->properties['competitor'];
    }
    /**
     * The home team in a sports event.
     *
     * @param $homeTeam \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\SportsTeam
     * @return static
     **/
    public function setHomeTeam($homeTeam): static {
        $this->properties['homeTeam'] = $homeTeam;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\SportsTeam
     **/
    public function getHomeTeam() {
        return $this->properties['homeTeam'];
    }
    /**
     * The away team in a sports event.
     *
     * @param $awayTeam \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\SportsTeam
     * @return static
     **/
    public function setAwayTeam($awayTeam): static {
        $this->properties['awayTeam'] = $awayTeam;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\SportsTeam
     **/
    public function getAwayTeam() {
        return $this->properties['awayTeam'];
    }
    /**
     * A type of sport (e.g. Baseball).
     *
     * @param $sport \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setSport($sport): static {
        $this->properties['sport'] = $sport;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getSport() {
        return $this->properties['sport'];
    }
}
