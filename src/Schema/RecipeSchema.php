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
 * A recipe.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class RecipeSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new RecipeSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The time it takes to actually cook the dish, in <a href='http://en.wikipedia.org/wiki/ISO_8601'>ISO 8601 duration format</a>.
     **/
    private $cookTime;
    public function setCookTime($cookTime) {
        $this->cookTime = $cookTime;

        return $this;
    }

    /**
     * @return DurationSchema     **/
    public function getCookTime() {
        return $this->cookTime;
    }

    /**
     * The method of cooking, such as Frying, Steaming, ...
     **/
    private $cookingMethod;
    public function setCookingMethod($cookingMethod) {
        $this->cookingMethod = $cookingMethod;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getCookingMethod() {
        return $this->cookingMethod;
    }

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     **/
    private $ingredients;
    public function setIngredients($ingredients) {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getIngredients() {
        return $this->ingredients;
    }

    /**
     * Nutrition information about the recipe.
     **/
    private $nutrition;
    public function setNutrition($nutrition) {
        $this->nutrition = $nutrition;

        return $this;
    }

    /**
     * @return NutritionInformationSchema     **/
    public function getNutrition() {
        return $this->nutrition;
    }

    /**
     * The length of time it takes to prepare the recipe, in <a href='http://en.wikipedia.org/wiki/ISO_8601'>ISO 8601 duration format</a>.
     **/
    private $prepTime;
    public function setPrepTime($prepTime) {
        $this->prepTime = $prepTime;

        return $this;
    }

    /**
     * @return DurationSchema     **/
    public function getPrepTime() {
        return $this->prepTime;
    }

    /**
     * The category of the recipe&#x2014;for example, appetizer, entree, etc.
     **/
    private $recipeCategory;
    public function setRecipeCategory($recipeCategory) {
        $this->recipeCategory = $recipeCategory;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getRecipeCategory() {
        return $this->recipeCategory;
    }

    /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     **/
    private $recipeCuisine;
    public function setRecipeCuisine($recipeCuisine) {
        $this->recipeCuisine = $recipeCuisine;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getRecipeCuisine() {
        return $this->recipeCuisine;
    }

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     **/
    private $recipeIngredient;
    public function setRecipeIngredient($recipeIngredient) {
        $this->recipeIngredient = $recipeIngredient;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getRecipeIngredient() {
        return $this->recipeIngredient;
    }

    /**
     * A step or instruction involved in making the recipe.
     **/
    private $recipeInstructions;
    public function setRecipeInstructions($recipeInstructions) {
        $this->recipeInstructions = $recipeInstructions;

        return $this;
    }

    /**
     * @return TextSchema|ItemListSchema     **/
    public function getRecipeInstructions() {
        return $this->recipeInstructions;
    }

    /**
     * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
     **/
    private $recipeYield;
    public function setRecipeYield($recipeYield) {
        $this->recipeYield = $recipeYield;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getRecipeYield() {
        return $this->recipeYield;
    }

    /**
     * The total time it takes to prepare and cook the recipe, in <a href='http://en.wikipedia.org/wiki/ISO_8601'>ISO 8601 duration format</a>.
     **/
    private $totalTime;
    public function setTotalTime($totalTime) {
        $this->totalTime = $totalTime;

        return $this;
    }

    /**
     * @return DurationSchema     **/
    public function getTotalTime() {
        return $this->totalTime;
    }


}
