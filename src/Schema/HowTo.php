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
 * Instructions that explain how to achieve a result by performing a sequence of
 * steps.
 *
 * @see https://schema.org/HowTo
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class HowTo extends CreativeWork
{
    public static function factory(): HowTo
    {
        return new HowTo('https://schema.org/', 'HowTo');
    }

    /**
     * The estimated cost of the supply or supplies consumed when performing
     * instructions.
     *
     * @param $estimatedCost \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEstimatedCost($estimatedCost): static {
        $this->properties['estimatedCost'] = $estimatedCost;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEstimatedCost() {
        return $this->properties['estimatedCost'];
    }
    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a
     * HowToSection.
     *
     * @param $step \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\Schema\HowToSection|\LengthOfRope\JSONLD\Schema\HowToStep|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setStep($step): static {
        $this->properties['step'] = $step;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\Schema\HowToSection|\LengthOfRope\JSONLD\Schema\HowToStep|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getStep() {
        return $this->properties['step'];
    }
    /**
     * The total time required to perform instructions or a direction (including time
     * to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $totalTime \LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setTotalTime($totalTime): static {
        $this->properties['totalTime'] = $totalTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getTotalTime() {
        return $this->properties['totalTime'];
    }
    /**
     * A sub-property of instrument. A supply consumed when performing instructions or
     * a direction.
     *
     * @param $supply \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\HowToSupply
     * @return static
     **/
    public function setSupply($supply): static {
        $this->properties['supply'] = $supply;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\HowToSupply
     **/
    public function getSupply() {
        return $this->properties['supply'];
    }
    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection
     * (originally misnamed 'steps'; 'step' is preferred).
     *
     * @param $steps \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\ItemList
     * @return static
     **/
    public function setSteps($steps): static {
        $this->properties['steps'] = $steps;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\ItemList
     **/
    public function getSteps() {
        return $this->properties['steps'];
    }
    /**
     * The quantity that results by performing instructions. For example, a paper
     * airplane, 10 personalized candles.
     *
     * @param $yield \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setYield($yield): static {
        $this->properties['yield'] = $yield;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getYield() {
        return $this->properties['yield'];
    }
    /**
     * The length of time it takes to perform instructions or a direction (not
     * including time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $performTime \LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setPerformTime($performTime): static {
        $this->properties['performTime'] = $performTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getPerformTime() {
        return $this->properties['performTime'];
    }
    /**
     * A sub property of instrument. An object used (but not consumed) when performing
     * instructions or a direction.
     *
     * @param $tool \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\HowToTool
     * @return static
     **/
    public function setTool($tool): static {
        $this->properties['tool'] = $tool;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\HowToTool
     **/
    public function getTool() {
        return $this->properties['tool'];
    }
    /**
     * The length of time it takes to prepare the items to be used in instructions or a
     * direction, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $prepTime \LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setPrepTime($prepTime): static {
        $this->properties['prepTime'] = $prepTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getPrepTime() {
        return $this->properties['prepTime'];
    }
}
