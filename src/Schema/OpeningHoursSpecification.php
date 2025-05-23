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
 * A structured value providing information about the opening hours of a place or a
 * certain service inside a place.
 *
 *
 * * The place is __open__ if the [[opens]] property is specified, and __closed__
 * otherwise.
 *
 * If the value for the [[closes]] property is less than the value for the
 * [[opens]] property then the hour range is assumed to span over the next day.
 * *
 *
 * @see https://schema.org/OpeningHoursSpecification
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class OpeningHoursSpecification extends StructuredValue
{
    public static function factory(): OpeningHoursSpecification
    {
        return new OpeningHoursSpecification('https://schema.org/', 'OpeningHoursSpecification');
    }

    /**
     * The day of the week for which these opening hours are valid.
     *
     * @param $dayOfWeek \LengthOfRope\JSONLD\Schema\DayOfWeek
     * @return static
     **/
    public function setDayOfWeek($dayOfWeek): static {
        $this->properties['dayOfWeek'] = $dayOfWeek;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DayOfWeek
     **/
    public function getDayOfWeek() {
        return $this->properties['dayOfWeek'];
    }
    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     * @param $opens \LengthOfRope\JSONLD\DataType\TypeTime
     * @return static
     **/
    public function setOpens($opens): static {
        $this->properties['opens'] = $opens;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeTime
     **/
    public function getOpens() {
        return $this->properties['opens'];
    }
    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     *
     * @param $validThrough \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setValidThrough($validThrough): static {
        $this->properties['validThrough'] = $validThrough;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getValidThrough() {
        return $this->properties['validThrough'];
    }
    /**
     * The closing hour of the place or service on the given day(s) of the week.
     *
     * @param $closes \LengthOfRope\JSONLD\DataType\TypeTime
     * @return static
     **/
    public function setCloses($closes): static {
        $this->properties['closes'] = $closes;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeTime
     **/
    public function getCloses() {
        return $this->properties['closes'];
    }
    /**
     * The date when the item becomes valid.
     *
     * @param $validFrom \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setValidFrom($validFrom): static {
        $this->properties['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getValidFrom() {
        return $this->properties['validFrom'];
    }
}
