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
 * Any bodily activity that enhances or maintains physical fitness and overall health and wellness. Includes activity that is part of daily living and routine, structured exercise, and exercise prescribed as part of a medical treatment or recovery plan.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PhysicalActivitySchema extends LifestyleModificationSchema
{
    public static function factory(): PhysicalActivitySchema
    {
        return new PhysicalActivitySchema('https://schema.org/', 'PhysicalActivity');
    }

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     *
     * @param $pathophysiology 
     * @return static
     **/
    public function setPathophysiology($pathophysiology): static {
        $this->properties['pathophysiology'] = $pathophysiology;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPathophysiology() {
        return $this->properties['pathophysiology'];
    }

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     *
     * @param $associatedAnatomy ||
     * @return static
     **/
    public function setAssociatedAnatomy($associatedAnatomy): static {
        $this->properties['associatedAnatomy'] = $associatedAnatomy;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getAssociatedAnatomy() {
        return $this->properties['associatedAnatomy'];
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @param $category ||||
     * @return static
     **/
    public function setCategory($category): static {
        $this->properties['category'] = $category;

        return $this;
    }

    /**
     * @return ||||
     **/
    public function getCategory() {
        return $this->properties['category'];
    }

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     *
     * @param $epidemiology 
     * @return static
     **/
    public function setEpidemiology($epidemiology): static {
        $this->properties['epidemiology'] = $epidemiology;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEpidemiology() {
        return $this->properties['epidemiology'];
    }


}
