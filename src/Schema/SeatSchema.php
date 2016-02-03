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
 * Used to describe a seat, such as a reserved seat in an event reservation.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SeatSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new SeatSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The location of the reserved seat (e.g., 27).
     **/
    private $seatNumber;
    public function setSeatNumber($seatNumber) {
        $this->seatNumber = $seatNumber;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getSeatNumber() {
        return $this->seatNumber;
    }

    /**
     * The row location of the reserved seat (e.g., B).
     **/
    private $seatRow;
    public function setSeatRow($seatRow) {
        $this->seatRow = $seatRow;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getSeatRow() {
        return $this->seatRow;
    }

    /**
     * The section location of the reserved seat (e.g. Orchestra).
     **/
    private $seatSection;
    public function setSeatSection($seatSection) {
        $this->seatSection = $seatSection;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getSeatSection() {
        return $this->seatSection;
    }

    /**
     * The type/class of the seat.
     **/
    private $seatingType;
    public function setSeatingType($seatingType) {
        $this->seatingType = $seatingType;

        return $this;
    }

    /**
     * @return TextSchema|QualitativeValueSchema     
     **/
    public function getSeatingType() {
        return $this->seatingType;
    }


}
