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
 * An list item, e.g. a step in a checklist or how-to description.
 *
 * @see https://schema.org/ListItem
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ListItem extends Intangible
{
    public static function factory(): ListItem
    {
        return new ListItem('https://schema.org/', 'ListItem');
    }

    /**
     * The position of an item in a series or sequence of items.
     *
     * @param $position \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setPosition($position): static {
        $this->properties['position'] = $position;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getPosition() {
        return $this->properties['position'];
    }
    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a
     * list of 'artists').
     *
     * @param $item \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setItem($item): static {
        $this->properties['item'] = $item;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getItem() {
        return $this->properties['item'];
    }
    /**
     * A link to the ListItem that precedes the current one.
     *
     * @param $previousItem \LengthOfRope\JSONLD\Schema\ListItem
     * @return static
     **/
    public function setPreviousItem($previousItem): static {
        $this->properties['previousItem'] = $previousItem;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ListItem
     **/
    public function getPreviousItem() {
        return $this->properties['previousItem'];
    }
    /**
     * A link to the ListItem that follows the current one.
     *
     * @param $nextItem \LengthOfRope\JSONLD\Schema\ListItem
     * @return static
     **/
    public function setNextItem($nextItem): static {
        $this->properties['nextItem'] = $nextItem;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ListItem
     **/
    public function getNextItem() {
        return $this->properties['nextItem'];
    }
}
