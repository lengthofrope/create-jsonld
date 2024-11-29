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
 * A food-related business.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class FoodEstablishmentSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new FoodEstablishmentSchema('https://schema.org/', 'FoodEstablishment');
    }

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     *
     * @param $menu ||
     **/
    public function setMenu($menu) {
        $this->properties['menu'] = $menu;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getMenu() {
        return $this->properties['menu'];
    }

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     *
     * @param $hasMenu ||
     **/
    public function setHasMenu($hasMenu) {
        $this->properties['hasMenu'] = $hasMenu;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getHasMenu() {
        return $this->properties['hasMenu'];
    }

    /**
     * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     *
     * @param $starRating 
     **/
    public function setStarRating($starRating) {
        $this->properties['starRating'] = $starRating;

        return $this;
    }

    /**
     * @return 
     **/
    public function getStarRating() {
        return $this->properties['starRating'];
    }

    /**
     * The cuisine of the restaurant.
     *
     * @param $servesCuisine 
     **/
    public function setServesCuisine($servesCuisine) {
        $this->properties['servesCuisine'] = $servesCuisine;

        return $this;
    }

    /**
     * @return 
     **/
    public function getServesCuisine() {
        return $this->properties['servesCuisine'];
    }

    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards compatibility) the strings ```Yes``` or ```No```.
     *
     * @param $acceptsReservations ||
     **/
    public function setAcceptsReservations($acceptsReservations) {
        $this->properties['acceptsReservations'] = $acceptsReservations;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getAcceptsReservations() {
        return $this->properties['acceptsReservations'];
    }


}
