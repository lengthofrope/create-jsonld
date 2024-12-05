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
 * A book.
 *
 * @see https://schema.org/Book
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Book extends CreativeWork
{
    public static function factory(): Book
    {
        return new Book('https://schema.org/', 'Book');
    }

    /**
     * The number of pages in the book.
     *
     * @param $numberOfPages \LengthOfRope\JSONLD\Schema\Integer
     * @return static
     **/
    public function setNumberOfPages($numberOfPages): static {
        $this->properties['numberOfPages'] = $numberOfPages;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Integer
     **/
    public function getNumberOfPages() {
        return $this->properties['numberOfPages'];
    }
    /**
     * The format of the book.
     *
     * @param $bookFormat \LengthOfRope\JSONLD\Schema\BookFormatType
     * @return static
     **/
    public function setBookFormat($bookFormat): static {
        $this->properties['bookFormat'] = $bookFormat;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BookFormatType
     **/
    public function getBookFormat() {
        return $this->properties['bookFormat'];
    }
    /**
     * The illustrator of the book.
     *
     * @param $illustrator \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setIllustrator($illustrator): static {
        $this->properties['illustrator'] = $illustrator;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getIllustrator() {
        return $this->properties['illustrator'];
    }
    /**
     * The ISBN of the book.
     *
     * @param $isbn \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setIsbn($isbn): static {
        $this->properties['isbn'] = $isbn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getIsbn() {
        return $this->properties['isbn'];
    }
    /**
     * The edition of the book.
     *
     * @param $bookEdition \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setBookEdition($bookEdition): static {
        $this->properties['bookEdition'] = $bookEdition;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getBookEdition() {
        return $this->properties['bookEdition'];
    }
    /**
     * Indicates whether the book is an abridged edition.
     *
     * @param $abridged \LengthOfRope\JSONLD\DataType\Boolean
     * @return static
     **/
    public function setAbridged($abridged): static {
        $this->properties['abridged'] = $abridged;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Boolean
     **/
    public function getAbridged() {
        return $this->properties['abridged'];
    }
}
