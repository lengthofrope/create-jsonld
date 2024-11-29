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
 * The act of producing/preparing food.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CookActionSchema extends CreateActionSchema
{
    public static function factory(): CookActionSchema
    {
        return new CookActionSchema('https://schema.org/', 'CookAction');
    }

    /**
     * A sub property of location. The specific food establishment where the action occurred.
     *
     * @param $foodEstablishment |
     * @return static
     **/
    public function setFoodEstablishment($foodEstablishment): static {
        $this->properties['foodEstablishment'] = $foodEstablishment;

        return $this;
    }

    /**
     * @return |
     **/
    public function getFoodEstablishment() {
        return $this->properties['foodEstablishment'];
    }

    /**
     * A sub property of location. The specific food event where the action occurred.
     *
     * @param $foodEvent 
     * @return static
     **/
    public function setFoodEvent($foodEvent): static {
        $this->properties['foodEvent'] = $foodEvent;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFoodEvent() {
        return $this->properties['foodEvent'];
    }

    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     *
     * @param $recipe 
     * @return static
     **/
    public function setRecipe($recipe): static {
        $this->properties['recipe'] = $recipe;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRecipe() {
        return $this->properties['recipe'];
    }


}
