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
 * A common pathway for the electrochemical nerve impulses that are transmitted along each of the axons.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class NerveSchema extends AnatomicalStructureSchema
{
    public static function factory()
    {
        return new NerveSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The branches that delineate from the nerve bundle.
     **/
    private $branch;
    public function setBranch($branch) {
        $this->branch = $branch;

        return $this;
    }

    /**
     * @return AnatomicalStructureSchema     
     **/
    public function getBranch() {
        return $this->branch;
    }

    /**
     * The neurological pathway extension that involves muscle control.
     **/
    private $nerveMotor;
    public function setNerveMotor($nerveMotor) {
        $this->nerveMotor = $nerveMotor;

        return $this;
    }

    /**
     * @return MuscleSchema     
     **/
    public function getNerveMotor() {
        return $this->nerveMotor;
    }

    /**
     * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
     **/
    private $sensoryUnit;
    public function setSensoryUnit($sensoryUnit) {
        $this->sensoryUnit = $sensoryUnit;

        return $this;
    }

    /**
     * @return AnatomicalStructureSchema|SuperficialAnatomySchema     
     **/
    public function getSensoryUnit() {
        return $this->sensoryUnit;
    }

    /**
     * The neurological pathway that originates the neurons.
     **/
    private $sourcedFrom;
    public function setSourcedFrom($sourcedFrom) {
        $this->sourcedFrom = $sourcedFrom;

        return $this;
    }

    /**
     * @return BrainStructureSchema     
     **/
    public function getSourcedFrom() {
        return $this->sourcedFrom;
    }


}
