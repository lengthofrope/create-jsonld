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
 * Nutritional information about the recipe.
 *
 * @see https://schema.org/NutritionInformation
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class NutritionInformation extends StructuredValue
{
    public static function factory(): NutritionInformation
    {
        return new NutritionInformation('https://schema.org/', 'NutritionInformation');
    }

    /**
     * The number of grams of carbohydrates.
     *
     * @param $carbohydrateContent \LengthOfRope\JSONLD\Schema\Mass
     * @return static
     **/
    public function setCarbohydrateContent($carbohydrateContent): static {
        $this->properties['carbohydrateContent'] = $carbohydrateContent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Mass
     **/
    public function getCarbohydrateContent() {
        return $this->properties['carbohydrateContent'];
    }
    /**
     * The number of grams of fiber.
     *
     * @param $fiberContent \LengthOfRope\JSONLD\Schema\Mass
     * @return static
     **/
    public function setFiberContent($fiberContent): static {
        $this->properties['fiberContent'] = $fiberContent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Mass
     **/
    public function getFiberContent() {
        return $this->properties['fiberContent'];
    }
    /**
     * The number of grams of saturated fat.
     *
     * @param $saturatedFatContent \LengthOfRope\JSONLD\Schema\Mass
     * @return static
     **/
    public function setSaturatedFatContent($saturatedFatContent): static {
        $this->properties['saturatedFatContent'] = $saturatedFatContent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Mass
     **/
    public function getSaturatedFatContent() {
        return $this->properties['saturatedFatContent'];
    }
    /**
     * The number of grams of fat.
     *
     * @param $fatContent \LengthOfRope\JSONLD\Schema\Mass
     * @return static
     **/
    public function setFatContent($fatContent): static {
        $this->properties['fatContent'] = $fatContent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Mass
     **/
    public function getFatContent() {
        return $this->properties['fatContent'];
    }
    /**
     * The number of grams of unsaturated fat.
     *
     * @param $unsaturatedFatContent \LengthOfRope\JSONLD\Schema\Mass
     * @return static
     **/
    public function setUnsaturatedFatContent($unsaturatedFatContent): static {
        $this->properties['unsaturatedFatContent'] = $unsaturatedFatContent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Mass
     **/
    public function getUnsaturatedFatContent() {
        return $this->properties['unsaturatedFatContent'];
    }
    /**
     * The number of grams of protein.
     *
     * @param $proteinContent \LengthOfRope\JSONLD\Schema\Mass
     * @return static
     **/
    public function setProteinContent($proteinContent): static {
        $this->properties['proteinContent'] = $proteinContent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Mass
     **/
    public function getProteinContent() {
        return $this->properties['proteinContent'];
    }
    /**
     * The number of grams of sugar.
     *
     * @param $sugarContent \LengthOfRope\JSONLD\Schema\Mass
     * @return static
     **/
    public function setSugarContent($sugarContent): static {
        $this->properties['sugarContent'] = $sugarContent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Mass
     **/
    public function getSugarContent() {
        return $this->properties['sugarContent'];
    }
    /**
     * The serving size, in terms of the number of volume or mass.
     *
     * @param $servingSize \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setServingSize($servingSize): static {
        $this->properties['servingSize'] = $servingSize;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getServingSize() {
        return $this->properties['servingSize'];
    }
    /**
     * The number of grams of trans fat.
     *
     * @param $transFatContent \LengthOfRope\JSONLD\Schema\Mass
     * @return static
     **/
    public function setTransFatContent($transFatContent): static {
        $this->properties['transFatContent'] = $transFatContent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Mass
     **/
    public function getTransFatContent() {
        return $this->properties['transFatContent'];
    }
    /**
     * The number of milligrams of cholesterol.
     *
     * @param $cholesterolContent \LengthOfRope\JSONLD\Schema\Mass
     * @return static
     **/
    public function setCholesterolContent($cholesterolContent): static {
        $this->properties['cholesterolContent'] = $cholesterolContent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Mass
     **/
    public function getCholesterolContent() {
        return $this->properties['cholesterolContent'];
    }
    /**
     * The number of calories.
     *
     * @param $calories \LengthOfRope\JSONLD\Schema\Energy
     * @return static
     **/
    public function setCalories($calories): static {
        $this->properties['calories'] = $calories;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Energy
     **/
    public function getCalories() {
        return $this->properties['calories'];
    }
    /**
     * The number of milligrams of sodium.
     *
     * @param $sodiumContent \LengthOfRope\JSONLD\Schema\Mass
     * @return static
     **/
    public function setSodiumContent($sodiumContent): static {
        $this->properties['sodiumContent'] = $sodiumContent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Mass
     **/
    public function getSodiumContent() {
        return $this->properties['sodiumContent'];
    }
}
