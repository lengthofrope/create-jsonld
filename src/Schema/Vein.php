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
 * A type of blood vessel that specifically carries blood to the heart.
 *
 * @see https://schema.org/Vein
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Vein extends Vessel
{
    public static function factory(): Vein
    {
        return new Vein('https://schema.org/', 'Vein');
    }

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a
     * specific part of an organ.
     *
     * @param $regionDrained \LengthOfRope\JSONLD\Schema\AnatomicalSystem|\LengthOfRope\JSONLD\Schema\AnatomicalStructure
     * @return static
     **/
    public function setRegionDrained($regionDrained): static {
        $this->properties['regionDrained'] = $regionDrained;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AnatomicalSystem|\LengthOfRope\JSONLD\Schema\AnatomicalStructure
     **/
    public function getRegionDrained() {
        return $this->properties['regionDrained'];
    }
    /**
     * The vasculature that the vein drains into.
     *
     * @param $drainsTo \LengthOfRope\JSONLD\Schema\Vessel
     * @return static
     **/
    public function setDrainsTo($drainsTo): static {
        $this->properties['drainsTo'] = $drainsTo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Vessel
     **/
    public function getDrainsTo() {
        return $this->properties['drainsTo'];
    }
    /**
     * The anatomical or organ system that the vein flows into; a larger structure that
     * the vein connects to.
     *
     * @param $tributary \LengthOfRope\JSONLD\Schema\AnatomicalStructure
     * @return static
     **/
    public function setTributary($tributary): static {
        $this->properties['tributary'] = $tributary;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AnatomicalStructure
     **/
    public function getTributary() {
        return $this->properties['tributary'];
    }
}
