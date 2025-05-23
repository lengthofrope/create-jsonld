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
 * A food or drink item listed in a menu or menu section.
 *
 * @see https://schema.org/MenuItem
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MenuItem extends Intangible
{
    public static function factory(): MenuItem
    {
        return new MenuItem('https://schema.org/', 'MenuItem');
    }

    /**
     * Additional menu item(s) such as a side dish of salad or side order of fries that
     * can be added to this menu item. Additionally it can be a menu section containing
     * allowed add-on menu items for this menu item.
     *
     * @param $menuAddOn \LengthOfRope\JSONLD\Schema\MenuSection|\LengthOfRope\JSONLD\Schema\MenuItem
     * @return static
     **/
    public function setMenuAddOn($menuAddOn): static {
        $this->properties['menuAddOn'] = $menuAddOn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MenuSection|\LengthOfRope\JSONLD\Schema\MenuItem
     **/
    public function getMenuAddOn() {
        return $this->properties['menuAddOn'];
    }
    /**
     * Indicates a dietary restriction or guideline for which this recipe or menu item
     * is suitable, e.g. diabetic, halal etc.
     *
     * @param $suitableForDiet \LengthOfRope\JSONLD\Schema\RestrictedDiet
     * @return static
     **/
    public function setSuitableForDiet($suitableForDiet): static {
        $this->properties['suitableForDiet'] = $suitableForDiet;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\RestrictedDiet
     **/
    public function getSuitableForDiet() {
        return $this->properties['suitableForDiet'];
    }
    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product,
     * rent the DVD of a movie, perform a service, or give away tickets to an event.
     * Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell,
     * lease, etc. This property can also be used to describe a [[Demand]]. While this
     * property is listed as expected on a number of common types, it can be used in
     * others. In that case, using a second type, such as Product or a subtype of
     * Product, can clarify the nature of the offer.
     *
     *
     * @param $offers \LengthOfRope\JSONLD\Schema\Demand|\LengthOfRope\JSONLD\Schema\Offer
     * @return static
     **/
    public function setOffers($offers): static {
        $this->properties['offers'] = $offers;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Demand|\LengthOfRope\JSONLD\Schema\Offer
     **/
    public function getOffers() {
        return $this->properties['offers'];
    }
    /**
     * Nutrition information about the recipe or menu item.
     *
     * @param $nutrition \LengthOfRope\JSONLD\Schema\NutritionInformation
     * @return static
     **/
    public function setNutrition($nutrition): static {
        $this->properties['nutrition'] = $nutrition;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\NutritionInformation
     **/
    public function getNutrition() {
        return $this->properties['nutrition'];
    }
}
