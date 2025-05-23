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
 * A tourist trip. A created itinerary of visits to one or more places of interest
 * ([[TouristAttraction]]/[[TouristDestination]]) often linked by a similar theme,
 * geographic area, or interest to a particular [[touristType]]. The
 * [UNWTO](http://www2.unwto.org/) defines tourism trip as the Trip taken by
 * visitors.
 * *   (See examples below.)
 *
 * @see https://schema.org/TouristTrip
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TouristTrip extends Trip
{
    public static function factory(): TouristTrip
    {
        return new TouristTrip('https://schema.org/', 'TouristTrip');
    }

    /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a
     * particular country, etc.
     *
     * @param $touristType \LengthOfRope\JSONLD\Schema\Audience|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTouristType($touristType): static {
        $this->properties['touristType'] = $touristType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Audience|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTouristType() {
        return $this->properties['touristType'];
    }
}
