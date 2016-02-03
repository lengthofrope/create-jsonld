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
 * A book.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BookSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new BookSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The edition of the book.
     **/
    private $bookEdition;
    public function setBookEdition($bookEdition) {
        $this->bookEdition = $bookEdition;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getBookEdition() {
        return $this->bookEdition;
    }

    /**
     * The format of the book.
     **/
    private $bookFormat;
    public function setBookFormat($bookFormat) {
        $this->bookFormat = $bookFormat;

        return $this;
    }

    /**
     * @return BookFormatTypeSchema     **/
    public function getBookFormat() {
        return $this->bookFormat;
    }

    /**
     * The illustrator of the book.
     **/
    private $illustrator;
    public function setIllustrator($illustrator) {
        $this->illustrator = $illustrator;

        return $this;
    }

    /**
     * @return PersonSchema     **/
    public function getIllustrator() {
        return $this->illustrator;
    }

    /**
     * The ISBN of the book.
     **/
    private $isbn;
    public function setIsbn($isbn) {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getIsbn() {
        return $this->isbn;
    }

    /**
     * The number of pages in the book.
     **/
    private $numberOfPages;
    public function setNumberOfPages($numberOfPages) {
        $this->numberOfPages = $numberOfPages;

        return $this;
    }

    /**
     * @return IntegerSchema     **/
    public function getNumberOfPages() {
        return $this->numberOfPages;
    }


}
