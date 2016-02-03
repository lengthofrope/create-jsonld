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
 * A type of blood vessel that specifically carries blood to the heart.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class VeinSchema extends VesselSchema
{
    public static function factory()
    {
        return new VeinSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The vasculature that the vein drains into.
     **/
    private $drainsTo;
    public function setDrainsTo($drainsTo) {
        $this->drainsTo = $drainsTo;

        return $this;
    }

    /**
     * @return VesselSchema     
     **/
    public function getDrainsTo() {
        return $this->drainsTo;
    }

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     **/
    private $regionDrained;
    public function setRegionDrained($regionDrained) {
        $this->regionDrained = $regionDrained;

        return $this;
    }

    /**
     * @return AnatomicalStructureSchema|AnatomicalSystemSchema     
     **/
    public function getRegionDrained() {
        return $this->regionDrained;
    }

    /**
     * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
     **/
    private $tributary;
    public function setTributary($tributary) {
        $this->tributary = $tributary;

        return $this;
    }

    /**
     * @return AnatomicalStructureSchema     
     **/
    public function getTributary() {
        return $this->tributary;
    }


}
