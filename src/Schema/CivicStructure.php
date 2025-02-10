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
 * A public structure, such as a town hall or concert hall.
 *
 * @see https://schema.org/CivicStructure
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CivicStructure extends Place
{
    public static function factory(): CivicStructure
    {
        return new CivicStructure('https://schema.org/', 'CivicStructure');
    }

    /**
     * The general opening hours for a business. Opening hours can be specified as a
     * weekly time range, starting with days, then times per day. Multiple days can be
     * listed with commas ',' separating each day. Day or time ranges are specified
     * using a hyphen '-'.
     *
     * * Days are specified using the following two-letter combinations: ```Mo```,
     * ```Tu```, ```We```, ```Th```, ```Fr```, ```Sa```, ```Su```.
     * * Times are specified using 24:00 format. For example, 3pm is specified as
     * ```15:00```, 10am as ```10:00```.
     * * Here is an example: <code>&lt;time itemprop="openingHours"
     * datetime=&quot;Tu,Th 16:00-20:00&quot;&gt;Tuesdays and Thursdays
     * 4-8pm&lt;/time&gt;</code>.
     * * If a business is open 7 days a week, then it can be specified as
     * <code>&lt;time itemprop=&quot;openingHours&quot;
     * datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all
     * day&lt;/time&gt;</code>.
     *
     * @param $openingHours \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setOpeningHours($openingHours): static {
        $this->properties['openingHours'] = $openingHours;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getOpeningHours() {
        return $this->properties['openingHours'];
    }
}
