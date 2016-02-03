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
 * Intended audience for an item, i.e. the group for whom the item was created.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AudienceSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new AudienceSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
     **/
    private $audienceType;
    public function setAudienceType($audienceType) {
        $this->audienceType = $audienceType;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAudienceType() {
        return $this->audienceType;
    }

    /**
     * The geographic area associated with the audience.
     **/
    private $geographicArea;
    public function setGeographicArea($geographicArea) {
        $this->geographicArea = $geographicArea;

        return $this;
    }

    /**
     * @return AdministrativeAreaSchema     
     **/
    public function getGeographicArea() {
        return $this->geographicArea;
    }


}