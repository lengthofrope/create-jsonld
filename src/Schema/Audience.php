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
 * Intended audience for an item, i.e. the group for whom the item was created.
 *
 * @see https://schema.org/Audience
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Audience extends Intangible
{
    public static function factory(): Audience
    {
        return new Audience('https://schema.org/', 'Audience');
    }

    /**
     * The geographic area associated with the audience.
     *
     * @param $geographicArea \LengthOfRope\JSONLD\Schema\AdministrativeArea
     * @return static
     **/
    public function setGeographicArea($geographicArea): static {
        $this->properties['geographicArea'] = $geographicArea;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AdministrativeArea
     **/
    public function getGeographicArea() {
        return $this->properties['geographicArea'];
    }
    /**
     * The target group associated with a given audience (e.g. veterans, car owners,
     * musicians, etc.).
     *
     * @param $audienceType \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAudienceType($audienceType): static {
        $this->properties['audienceType'] = $audienceType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAudienceType() {
        return $this->properties['audienceType'];
    }
}
