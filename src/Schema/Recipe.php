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
 * A recipe. For dietary restrictions covered by the recipe, a few common restrictions are enumerated via [[suitableForDiet]]. The [[keywords]] property can also be used to add more detail.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Recipe extends HowTo
{
    public static function factory(): Recipe
    {
        return new Recipe('https://schema.org/', 'Recipe');
    }

    /**
     * The method of cooking, such as Frying, Steaming, ...
     *
     * @param $cookingMethod 
     * @return static
     **/
    public function setCookingMethod($cookingMethod): static {
        $this->properties['cookingMethod'] = $cookingMethod;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCookingMethod() {
        return $this->properties['cookingMethod'];
    }

    /**
     * The time it takes to actually cook the dish, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $cookTime 
     * @return static
     **/
    public function setCookTime($cookTime): static {
        $this->properties['cookTime'] = $cookTime;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCookTime() {
        return $this->properties['cookTime'];
    }

    /**
     * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
     *
     * @param $suitableForDiet 
     * @return static
     **/
    public function setSuitableForDiet($suitableForDiet): static {
        $this->properties['suitableForDiet'] = $suitableForDiet;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSuitableForDiet() {
        return $this->properties['suitableForDiet'];
    }

    /**
     * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
     *
     * @param $recipeYield |
     * @return static
     **/
    public function setRecipeYield($recipeYield): static {
        $this->properties['recipeYield'] = $recipeYield;

        return $this;
    }

    /**
     * @return |
     **/
    public function getRecipeYield() {
        return $this->properties['recipeYield'];
    }

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     *
     * @param $ingredients 
     * @return static
     **/
    public function setIngredients($ingredients): static {
        $this->properties['ingredients'] = $ingredients;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIngredients() {
        return $this->properties['ingredients'];
    }

    /**
     * A step in making the recipe, in the form of a single item (document, video, etc.) or an ordered list with HowToStep and/or HowToSection items.
     *
     * @param $recipeInstructions ||
     * @return static
     **/
    public function setRecipeInstructions($recipeInstructions): static {
        $this->properties['recipeInstructions'] = $recipeInstructions;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getRecipeInstructions() {
        return $this->properties['recipeInstructions'];
    }

    /**
     * Nutrition information about the recipe or menu item.
     *
     * @param $nutrition 
     * @return static
     **/
    public function setNutrition($nutrition): static {
        $this->properties['nutrition'] = $nutrition;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNutrition() {
        return $this->properties['nutrition'];
    }

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     *
     * @param $recipeCategory 
     * @return static
     **/
    public function setRecipeCategory($recipeCategory): static {
        $this->properties['recipeCategory'] = $recipeCategory;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRecipeCategory() {
        return $this->properties['recipeCategory'];
    }

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     *
     * @param $recipeIngredient 
     * @return static
     **/
    public function setRecipeIngredient($recipeIngredient): static {
        $this->properties['recipeIngredient'] = $recipeIngredient;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRecipeIngredient() {
        return $this->properties['recipeIngredient'];
    }

    /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     *
     * @param $recipeCuisine 
     * @return static
     **/
    public function setRecipeCuisine($recipeCuisine): static {
        $this->properties['recipeCuisine'] = $recipeCuisine;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRecipeCuisine() {
        return $this->properties['recipeCuisine'];
    }


}
