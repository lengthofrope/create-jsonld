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
 * A type of blood vessel that specifically carries blood away from the heart.
 *
 * @see https://schema.org/Artery
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Artery extends Vessel
{
    public static function factory(): Artery
    {
        return new Artery('https://schema.org/', 'Artery');
    }

    /**
     * The area to which the artery supplies blood.
     *
     * @param $supplyTo \LengthOfRope\JSONLD\Schema\AnatomicalStructure
     * @return static
     **/
    public function setSupplyTo($supplyTo): static {
        $this->properties['supplyTo'] = $supplyTo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AnatomicalStructure
     **/
    public function getSupplyTo() {
        return $this->properties['supplyTo'];
    }
    /**
     * The branches that comprise the arterial structure.
     *
     * @param $arterialBranch \LengthOfRope\JSONLD\Schema\AnatomicalStructure
     * @return static
     **/
    public function setArterialBranch($arterialBranch): static {
        $this->properties['arterialBranch'] = $arterialBranch;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AnatomicalStructure
     **/
    public function getArterialBranch() {
        return $this->properties['arterialBranch'];
    }
}
