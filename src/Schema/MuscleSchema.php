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
 * A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MuscleSchema extends AnatomicalStructureSchema
{
    public static function factory()
    {
        return new MuscleSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The movement the muscle generates.
     **/
    private $action;
    public function setAction($action) {
        $this->action = $action;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAction() {
        return $this->action;
    }

    /**
     * The muscle whose action counteracts the specified muscle.
     **/
    private $antagonist;
    public function setAntagonist($antagonist) {
        $this->antagonist = $antagonist;

        return $this;
    }

    /**
     * @return MuscleSchema     
     **/
    public function getAntagonist() {
        return $this->antagonist;
    }

    /**
     * The blood vessel that carries blood from the heart to the muscle.
     **/
    private $bloodSupply;
    public function setBloodSupply($bloodSupply) {
        $this->bloodSupply = $bloodSupply;

        return $this;
    }

    /**
     * @return VesselSchema     
     **/
    public function getBloodSupply() {
        return $this->bloodSupply;
    }

    /**
     * The place of attachment of a muscle, or what the muscle moves.
     **/
    private $insertion;
    public function setInsertion($insertion) {
        $this->insertion = $insertion;

        return $this;
    }

    /**
     * @return AnatomicalStructureSchema     
     **/
    public function getInsertion() {
        return $this->insertion;
    }

    /**
     * The movement the muscle generates.
     **/
    private $muscleAction;
    public function setMuscleAction($muscleAction) {
        $this->muscleAction = $muscleAction;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getMuscleAction() {
        return $this->muscleAction;
    }

    /**
     * The underlying innervation associated with the muscle.
     **/
    private $nerve;
    public function setNerve($nerve) {
        $this->nerve = $nerve;

        return $this;
    }

    /**
     * @return NerveSchema     
     **/
    public function getNerve() {
        return $this->nerve;
    }

    /**
     * The place or point where a muscle arises.
     **/
    private $origin;
    public function setOrigin($origin) {
        $this->origin = $origin;

        return $this;
    }

    /**
     * @return AnatomicalStructureSchema     
     **/
    public function getOrigin() {
        return $this->origin;
    }


}
