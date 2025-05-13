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
 * A CreativeWorkSeries in schema.org is a group of related items, typically but
 * not necessarily of the same kind. CreativeWorkSeries are usually organized into
 * some order, often chronological. Unlike [[ItemList]] which is a general purpose
 * data structure for lists of things, the emphasis with CreativeWorkSeries is on
 * published materials (written e.g. books and periodicals, or media such as TV,
 * radio and games).
 *
 * Specific subtypes are available for describing [[TVSeries]], [[RadioSeries]],
 * [[MovieSeries]], [[BookSeries]], [[Periodical]] and [[VideoGameSeries]]. In each
 * case, the [[hasPart]] / [[isPartOf]] properties can be used to relate the
 * CreativeWorkSeries to its parts. The general CreativeWorkSeries type serves
 * largely just to organize these more specific and practical subtypes.
 *
 * It is common for properties applicable to an item from the series to be usefully
 * applied to the containing group. Schema.org attempts to anticipate some of these
 * cases, but publishers should be free to apply properties of the series parts to
 * the series as a whole wherever they seem appropriate.
 * *
 *
 * @see https://schema.org/CreativeWorkSeries
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CreativeWorkSeries extends CreativeWork
{
    public static function factory(): CreativeWorkSeries
    {
        return new CreativeWorkSeries('https://schema.org/', 'CreativeWorkSeries');
    }

    /**
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $startDate \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setStartDate($startDate): static {
        $this->properties['startDate'] = $startDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getStartDate() {
        return $this->properties['startDate'];
    }
    /**
     * The International Standard Serial Number (ISSN) that identifies this serial
     * publication. You can repeat this property to identify different formats of, or
     * the linking ISSN (ISSN-L) for, this serial publication.
     *
     * @param $issn \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setIssn($issn): static {
        $this->properties['issn'] = $issn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getIssn() {
        return $this->properties['issn'];
    }
    /**
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $endDate \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setEndDate($endDate): static {
        $this->properties['endDate'] = $endDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getEndDate() {
        return $this->properties['endDate'];
    }
}
