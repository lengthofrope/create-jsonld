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
 * A list of items of any sort&#x2014;for example, Top 10 Movies About Weathermen,
 * or Top 100 Party Songs. Not to be confused with HTML lists, which are often used
 * only for formatting.
 *
 * @see https://schema.org/ItemList
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ItemList extends Intangible
{
    public static function factory(): ItemList
    {
        return new ItemList('https://schema.org/', 'ItemList');
    }

    /**
     * Indicates a prototype of the elements in the list that is used to hold aggregate
     * information (ratings, offers, etc.).
     *
     * @param $aggregateElement \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setAggregateElement($aggregateElement): static {
        $this->properties['aggregateElement'] = $aggregateElement;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getAggregateElement() {
        return $this->properties['aggregateElement'];
    }
    /**
     * For itemListElement values, you can use simple strings (e.g. "Peter", "Paul",
     * "Mary"), existing entities, or use ListItem.
     *
     * Text values are best if the elements in the list are plain strings. Existing
     * entities are best for a simple, unordered list of existing things in your data.
     * ListItem is used with ordered lists when you want to provide additional context
     * about the element in that list or when the same item might be in different
     * places in different lists.
     *
     * Note: The order of elements in your mark-up is not sufficient for indicating the
     * order or elements.  Use ListItem with a 'position' property in such cases.
     *
     * @param $itemListElement \LengthOfRope\JSONLD\Schema\ListItem|\LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setItemListElement($itemListElement): static {
        $this->properties['itemListElement'] = $itemListElement;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ListItem|\LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getItemListElement() {
        return $this->properties['itemListElement'];
    }
    /**
     * The number of items in an ItemList. Note that some descriptions might not fully
     * describe all items in a list (e.g., multi-page pagination); in such cases, the
     * numberOfItems would be for the entire list.
     *
     * @param $numberOfItems \LengthOfRope\JSONLD\DataType\TypeInteger
     * @return static
     **/
    public function setNumberOfItems($numberOfItems): static {
        $this->properties['numberOfItems'] = $numberOfItems;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeInteger
     **/
    public function getNumberOfItems() {
        return $this->properties['numberOfItems'];
    }
    /**
     * Type of ordering (e.g. Ascending, Descending, Unordered).
     *
     * @param $itemListOrder \LengthOfRope\JSONLD\Schema\ItemListOrderType|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setItemListOrder($itemListOrder): static {
        $this->properties['itemListOrder'] = $itemListOrder;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ItemListOrderType|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getItemListOrder() {
        return $this->properties['itemListOrder'];
    }
}
