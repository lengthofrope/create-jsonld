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
 * The act of providing an object under an agreement that it will be returned at a
 * later date. Reciprocal of BorrowAction.
 *
 * Related actions:
 *
 * * [[BorrowAction]]: Reciprocal of LendAction.
 *
 * @see https://schema.org/LendAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class LendAction extends TransferAction
{
    public static function factory(): LendAction
    {
        return new LendAction('https://schema.org/', 'LendAction');
    }

    /**
     * A sub property of participant. The person that borrows the object being lent.
     *
     * @param $borrower \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setBorrower($borrower): static {
        $this->properties['borrower'] = $borrower;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getBorrower() {
        return $this->properties['borrower'];
    }
}
