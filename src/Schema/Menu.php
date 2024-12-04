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
 * A structured representation of food or drink items available from a FoodEstablishment.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Menu extends CreativeWork
{
    public static function factory(): Menu
    {
        return new Menu('https://schema.org/', 'Menu');
    }

    /**
     * A food or drink item contained in a menu or menu section.
     *
     * @param $hasMenuItem 
     * @return static
     **/
    public function setHasMenuItem($hasMenuItem): static {
        $this->properties['hasMenuItem'] = $hasMenuItem;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasMenuItem() {
        return $this->properties['hasMenuItem'];
    }

    /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     *
     * @param $hasMenuSection 
     * @return static
     **/
    public function setHasMenuSection($hasMenuSection): static {
        $this->properties['hasMenuSection'] = $hasMenuSection;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasMenuSection() {
        return $this->properties['hasMenuSection'];
    }


}
