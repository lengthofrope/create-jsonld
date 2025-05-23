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
 * The act of obtaining an object under an agreement to return it at a later date.
 * Reciprocal of LendAction.
 *
 * Related actions:
 *
 * * [[LendAction]]: Reciprocal of BorrowAction.
 *
 * @see https://schema.org/BorrowAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BorrowAction extends TransferAction
{
    public static function factory(): BorrowAction
    {
        return new BorrowAction('https://schema.org/', 'BorrowAction');
    }

    /**
     * A sub property of participant. The person that lends the object being borrowed.
     *
     * @param $lender \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setLender($lender): static {
        $this->properties['lender'] = $lender;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getLender() {
        return $this->properties['lender'];
    }
}
