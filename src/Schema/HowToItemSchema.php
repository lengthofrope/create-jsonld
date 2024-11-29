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
 * An item used as either a tool or supply when performing the instructions for how to achieve a result.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class HowToItemSchema extends ListItemSchema
{
    public static function factory(): HowToItemSchema
    {
        return new HowToItemSchema('https://schema.org/', 'HowToItem');
    }

    /**
     * The required quantity of the item(s).
     *
     * @param $requiredQuantity ||
     * @return static
     **/
    public function setRequiredQuantity($requiredQuantity): static {
        $this->properties['requiredQuantity'] = $requiredQuantity;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getRequiredQuantity() {
        return $this->properties['requiredQuantity'];
    }


}
