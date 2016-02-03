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
 * The act of producing/preparing food.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CookActionSchema extends CreateActionSchema
{
    public static function factory()
    {
        return new CookActionSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * A sub property of location. The specific food establishment where the action occurred.
     **/
    private $foodEstablishment;
    public function setFoodEstablishment($foodEstablishment) {
        $this->foodEstablishment = $foodEstablishment;

        return $this;
    }

    /**
     * @return FoodEstablishmentSchema|PlaceSchema     
     **/
    public function getFoodEstablishment() {
        return $this->foodEstablishment;
    }

    /**
     * A sub property of location. The specific food event where the action occurred.
     **/
    private $foodEvent;
    public function setFoodEvent($foodEvent) {
        $this->foodEvent = $foodEvent;

        return $this;
    }

    /**
     * @return FoodEventSchema     
     **/
    public function getFoodEvent() {
        return $this->foodEvent;
    }

    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     **/
    private $recipe;
    public function setRecipe($recipe) {
        $this->recipe = $recipe;

        return $this;
    }

    /**
     * @return RecipeSchema     
     **/
    public function getRecipe() {
        return $this->recipe;
    }


}
