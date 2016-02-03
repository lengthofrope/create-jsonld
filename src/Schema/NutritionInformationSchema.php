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
 * Nutritional information about the recipe.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class NutritionInformationSchema extends StructuredValueSchema
{
    public static function factory()
    {
        return new NutritionInformationSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The number of calories.
     **/
    private $calories;
    public function setCalories($calories) {
        $this->calories = $calories;

        return $this;
    }

    /**
     * @return EnergySchema     **/
    public function getCalories() {
        return $this->calories;
    }

    /**
     * The number of grams of carbohydrates.
     **/
    private $carbohydrateContent;
    public function setCarbohydrateContent($carbohydrateContent) {
        $this->carbohydrateContent = $carbohydrateContent;

        return $this;
    }

    /**
     * @return MassSchema     **/
    public function getCarbohydrateContent() {
        return $this->carbohydrateContent;
    }

    /**
     * The number of milligrams of cholesterol.
     **/
    private $cholesterolContent;
    public function setCholesterolContent($cholesterolContent) {
        $this->cholesterolContent = $cholesterolContent;

        return $this;
    }

    /**
     * @return MassSchema     **/
    public function getCholesterolContent() {
        return $this->cholesterolContent;
    }

    /**
     * The number of grams of fat.
     **/
    private $fatContent;
    public function setFatContent($fatContent) {
        $this->fatContent = $fatContent;

        return $this;
    }

    /**
     * @return MassSchema     **/
    public function getFatContent() {
        return $this->fatContent;
    }

    /**
     * The number of grams of fiber.
     **/
    private $fiberContent;
    public function setFiberContent($fiberContent) {
        $this->fiberContent = $fiberContent;

        return $this;
    }

    /**
     * @return MassSchema     **/
    public function getFiberContent() {
        return $this->fiberContent;
    }

    /**
     * The number of grams of protein.
     **/
    private $proteinContent;
    public function setProteinContent($proteinContent) {
        $this->proteinContent = $proteinContent;

        return $this;
    }

    /**
     * @return MassSchema     **/
    public function getProteinContent() {
        return $this->proteinContent;
    }

    /**
     * The number of grams of saturated fat.
     **/
    private $saturatedFatContent;
    public function setSaturatedFatContent($saturatedFatContent) {
        $this->saturatedFatContent = $saturatedFatContent;

        return $this;
    }

    /**
     * @return MassSchema     **/
    public function getSaturatedFatContent() {
        return $this->saturatedFatContent;
    }

    /**
     * The serving size, in terms of the number of volume or mass.
     **/
    private $servingSize;
    public function setServingSize($servingSize) {
        $this->servingSize = $servingSize;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getServingSize() {
        return $this->servingSize;
    }

    /**
     * The number of milligrams of sodium.
     **/
    private $sodiumContent;
    public function setSodiumContent($sodiumContent) {
        $this->sodiumContent = $sodiumContent;

        return $this;
    }

    /**
     * @return MassSchema     **/
    public function getSodiumContent() {
        return $this->sodiumContent;
    }

    /**
     * The number of grams of sugar.
     **/
    private $sugarContent;
    public function setSugarContent($sugarContent) {
        $this->sugarContent = $sugarContent;

        return $this;
    }

    /**
     * @return MassSchema     **/
    public function getSugarContent() {
        return $this->sugarContent;
    }

    /**
     * The number of grams of trans fat.
     **/
    private $transFatContent;
    public function setTransFatContent($transFatContent) {
        $this->transFatContent = $transFatContent;

        return $this;
    }

    /**
     * @return MassSchema     **/
    public function getTransFatContent() {
        return $this->transFatContent;
    }

    /**
     * The number of grams of unsaturated fat.
     **/
    private $unsaturatedFatContent;
    public function setUnsaturatedFatContent($unsaturatedFatContent) {
        $this->unsaturatedFatContent = $unsaturatedFatContent;

        return $this;
    }

    /**
     * @return MassSchema     **/
    public function getUnsaturatedFatContent() {
        return $this->unsaturatedFatContent;
    }


}
