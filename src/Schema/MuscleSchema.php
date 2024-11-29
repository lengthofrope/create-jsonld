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
 * A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MuscleSchema extends AnatomicalStructureSchema
{
    public static function factory(): MuscleSchema
    {
        return new MuscleSchema('https://schema.org/', 'Muscle');
    }

    /**
     * The blood vessel that carries blood from the heart to the muscle.
     *
     * @param $bloodSupply 
     * @return static
     **/
    public function setBloodSupply($bloodSupply): static {
        $this->properties['bloodSupply'] = $bloodSupply;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBloodSupply() {
        return $this->properties['bloodSupply'];
    }

    /**
     * The muscle whose action counteracts the specified muscle.
     *
     * @param $antagonist 
     * @return static
     **/
    public function setAntagonist($antagonist): static {
        $this->properties['antagonist'] = $antagonist;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAntagonist() {
        return $this->properties['antagonist'];
    }

    /**
     * The place of attachment of a muscle, or what the muscle moves.
     *
     * @param $insertion 
     * @return static
     **/
    public function setInsertion($insertion): static {
        $this->properties['insertion'] = $insertion;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInsertion() {
        return $this->properties['insertion'];
    }

    /**
     * The movement the muscle generates.
     *
     * @param $muscleAction 
     * @return static
     **/
    public function setMuscleAction($muscleAction): static {
        $this->properties['muscleAction'] = $muscleAction;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMuscleAction() {
        return $this->properties['muscleAction'];
    }

    /**
     * The underlying innervation associated with the muscle.
     *
     * @param $nerve 
     * @return static
     **/
    public function setNerve($nerve): static {
        $this->properties['nerve'] = $nerve;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNerve() {
        return $this->properties['nerve'];
    }


}
