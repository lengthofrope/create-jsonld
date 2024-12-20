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
 * The act of traveling from a fromLocation to a destination by a specified mode of
 * transport, optionally with participants.
 *
 * @see https://schema.org/TravelAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TravelAction extends MoveAction
{
    public static function factory(): TravelAction
    {
        return new TravelAction('https://schema.org/', 'TravelAction');
    }

    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     * @param $distance \LengthOfRope\JSONLD\Schema\Distance
     * @return static
     **/
    public function setDistance($distance): static {
        $this->properties['distance'] = $distance;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Distance
     **/
    public function getDistance() {
        return $this->properties['distance'];
    }
}
