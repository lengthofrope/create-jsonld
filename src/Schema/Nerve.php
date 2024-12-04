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
 * A common pathway for the electrochemical nerve impulses that are transmitted
 * along each of the axons.
 *
 * @see https://schema.org/Nerve
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Nerve extends AnatomicalStructure
{
    public static function factory(): Nerve
    {
        return new Nerve('https://schema.org/', 'Nerve');
    }

    /**
     * The branches that delineate from the nerve bundle. Not to be confused with
     * [[branchOf]].
     *
     * @param $branch 
     * @return static
     **/
    public function setBranch($branch): static {
        $this->properties['branch'] = $branch;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBranch() {
        return $this->properties['branch'];
    }
    /**
     * The neurological pathway extension that involves muscle control.
     *
     * @param $nerveMotor 
     * @return static
     **/
    public function setNerveMotor($nerveMotor): static {
        $this->properties['nerveMotor'] = $nerveMotor;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNerveMotor() {
        return $this->properties['nerveMotor'];
    }
    /**
     * The neurological pathway extension that inputs and sends information to the
     * brain or spinal cord.
     *
     * @param $sensoryUnit |
     * @return static
     **/
    public function setSensoryUnit($sensoryUnit): static {
        $this->properties['sensoryUnit'] = $sensoryUnit;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSensoryUnit() {
        return $this->properties['sensoryUnit'];
    }
    /**
     * The neurological pathway that originates the neurons.
     *
     * @param $sourcedFrom 
     * @return static
     **/
    public function setSourcedFrom($sourcedFrom): static {
        $this->properties['sourcedFrom'] = $sourcedFrom;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSourcedFrom() {
        return $this->properties['sourcedFrom'];
    }
}
