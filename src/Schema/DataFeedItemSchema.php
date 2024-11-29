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
 * A single item within a larger data feed.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DataFeedItemSchema extends IntangibleSchema
{
    public static function factory(): DataFeedItemSchema
    {
        return new DataFeedItemSchema('https://schema.org/', 'DataFeedItem');
    }

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     *
     * @param $dateCreated |
     * @return static
     **/
    public function setDateCreated($dateCreated): static {
        $this->properties['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDateCreated() {
        return $this->properties['dateCreated'];
    }

    /**
     * The datetime the item was removed from the DataFeed.
     *
     * @param $dateDeleted |
     * @return static
     **/
    public function setDateDeleted($dateDeleted): static {
        $this->properties['dateDeleted'] = $dateDeleted;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDateDeleted() {
        return $this->properties['dateDeleted'];
    }

    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists').
     *
     * @param $item 
     * @return static
     **/
    public function setItem($item): static {
        $this->properties['item'] = $item;

        return $this;
    }

    /**
     * @return 
     **/
    public function getItem() {
        return $this->properties['item'];
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     *
     * @param $dateModified |
     * @return static
     **/
    public function setDateModified($dateModified): static {
        $this->properties['dateModified'] = $dateModified;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDateModified() {
        return $this->properties['dateModified'];
    }


}
