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
 * Season dedicated to TV broadcast and associated online delivery.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TVSeasonSchema extends \LengthOfRope\JSONLD\Elements\ElementGroup
{
    public static function factory()
    {
        return new TVSeasonSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The country of the principal offices of the production company or individual responsible for the movie or program.
     **/
    private $countryOfOrigin;
    public function setCountryOfOrigin($countryOfOrigin) {
        $this->countryOfOrigin = $countryOfOrigin;

        return $this;
    }

    /**
     * @return CountrySchema     
     **/
    public function getCountryOfOrigin() {
        return $this->countryOfOrigin;
    }

    /**
     * The TV series to which this episode or season belongs.
     **/
    private $partOfTVSeries;
    public function setPartOfTVSeries($partOfTVSeries) {
        $this->partOfTVSeries = $partOfTVSeries;

        return $this;
    }

    /**
     * @return TVSeriesSchema     
     **/
    public function getPartOfTVSeries() {
        return $this->partOfTVSeries;
    }


}
