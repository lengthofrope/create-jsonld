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
 * A screening of a movie or other video.
 *
 * @see https://schema.org/ScreeningEvent
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ScreeningEvent extends Event
{
    public static function factory(): ScreeningEvent
    {
        return new ScreeningEvent('https://schema.org/', 'ScreeningEvent');
    }

    /**
     * The movie presented during this event.
     *
     * @param $workPresented \LengthOfRope\JSONLD\Schema\Movie
     * @return static
     **/
    public function setWorkPresented($workPresented): static {
        $this->properties['workPresented'] = $workPresented;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Movie
     **/
    public function getWorkPresented() {
        return $this->properties['workPresented'];
    }
    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     *
     * @param $videoFormat \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setVideoFormat($videoFormat): static {
        $this->properties['videoFormat'] = $videoFormat;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getVideoFormat() {
        return $this->properties['videoFormat'];
    }
    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard
     * format](http://tools.ietf.org/html/bcp47).
     *
     * @param $subtitleLanguage \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setSubtitleLanguage($subtitleLanguage): static {
        $this->properties['subtitleLanguage'] = $subtitleLanguage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getSubtitleLanguage() {
        return $this->properties['subtitleLanguage'];
    }
}
