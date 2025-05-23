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
 * A tourist attraction.  In principle any Thing can be a [[TouristAttraction]],
 * from a [[Mountain]] and [[LandmarksOrHistoricalBuildings]] to a
 * [[LocalBusiness]].  This Type can be used on its own to describe a general
 * [[TouristAttraction]], or be used as an [[additionalType]] to add tourist
 * attraction properties to any other type.  (See examples below)
 *
 * @see https://schema.org/TouristAttraction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TouristAttraction extends Place
{
    public static function factory(): TouristAttraction
    {
        return new TouristAttraction('https://schema.org/', 'TouristAttraction');
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
    /**
     * A language someone may use with or at the item, service or place. Please use one
     * of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     * @param $availableLanguage \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAvailableLanguage($availableLanguage): static {
        $this->properties['availableLanguage'] = $availableLanguage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAvailableLanguage() {
        return $this->properties['availableLanguage'];
    }
}
