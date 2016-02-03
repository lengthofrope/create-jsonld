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
 * A stage of a medical condition, such as 'Stage IIIa'.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalConditionStageSchema extends MedicalIntangibleSchema
{
    public static function factory()
    {
        return new MedicalConditionStageSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The stage represented as a number, e.g. 3.
     **/
    private $stageAsNumber;
    public function setStageAsNumber($stageAsNumber) {
        $this->stageAsNumber = $stageAsNumber;

        return $this;
    }

    /**
     * @return NumberSchema     
     **/
    public function getStageAsNumber() {
        return $this->stageAsNumber;
    }

    /**
     * The substage, e.g. 'a' for Stage IIIa.
     **/
    private $subStageSuffix;
    public function setSubStageSuffix($subStageSuffix) {
        $this->subStageSuffix = $subStageSuffix;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getSubStageSuffix() {
        return $this->subStageSuffix;
    }


}
