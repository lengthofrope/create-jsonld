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
 * Any matter of defined composition that has discrete existence, whose origin may
 * be biological, mineral or chemical.
 *
 * @see https://schema.org/Substance
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Substance extends MedicalEntity
{
    public static function factory(): Substance
    {
        return new Substance('https://schema.org/', 'Substance');
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a
     * specific recommending authority.
     *
     * @param $maximumIntake \LengthOfRope\JSONLD\Schema\MaximumDoseSchedule
     * @return static
     **/
    public function setMaximumIntake($maximumIntake): static {
        $this->properties['maximumIntake'] = $maximumIntake;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MaximumDoseSchedule
     **/
    public function getMaximumIntake() {
        return $this->properties['maximumIntake'];
    }
    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     * @param $activeIngredient \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setActiveIngredient($activeIngredient): static {
        $this->properties['activeIngredient'] = $activeIngredient;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getActiveIngredient() {
        return $this->properties['activeIngredient'];
    }
}
