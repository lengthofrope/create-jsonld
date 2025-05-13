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
 * A part of a successively published publication such as a periodical or
 * multi-volume work, often numbered. It may represent a time span, such as a year.
 *
 * See also [blog
 * post](https://blog-schema.org/2014/09/02/schema-org-support-for-bibliographic-relationships-and-periodicals/).
 *
 * @see https://schema.org/PublicationVolume
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PublicationVolume extends CreativeWork
{
    public static function factory(): PublicationVolume
    {
        return new PublicationVolume('https://schema.org/', 'PublicationVolume');
    }

    /**
     * Identifies the volume of publication or multi-part work; for example, "iii" or
     * "2".
     *
     * @param $volumeNumber \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setVolumeNumber($volumeNumber): static {
        $this->properties['volumeNumber'] = $volumeNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getVolumeNumber() {
        return $this->properties['volumeNumber'];
    }
    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for
     * example, "1-6, 9, 55" or "10-12, 46-49".
     *
     * @param $pagination \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setPagination($pagination): static {
        $this->properties['pagination'] = $pagination;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getPagination() {
        return $this->properties['pagination'];
    }
    /**
     * The page on which the work ends; for example "138" or "xvi".
     *
     * @param $pageEnd \LengthOfRope\JSONLD\DataType\TypeInteger|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setPageEnd($pageEnd): static {
        $this->properties['pageEnd'] = $pageEnd;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getPageEnd() {
        return $this->properties['pageEnd'];
    }
    /**
     * The page on which the work starts; for example "135" or "xiii".
     *
     * @param $pageStart \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setPageStart($pageStart): static {
        $this->properties['pageStart'] = $pageStart;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getPageStart() {
        return $this->properties['pageStart'];
    }
}
