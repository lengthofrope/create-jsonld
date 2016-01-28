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
 */

namespace LengthOfRope\JSONLD\Schema;

/**
 * An offer to transfer some rights to an item or to provide a service&#x2014;for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
      <br/><br/>
      For <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GTIN</a>-related fields, see
      <a href="http://www.gs1.org/barcodes/support/check_digit_calculator">Check Digit calculator</a>
      and <a href="http://www.gs1us.org/resources/standards/gtin-validation-guide">validation guide</a>
      from <a href="http://www.gs1.org/">GS1</a>.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 */
class Offer extends Intangible
{
    public static function factory()
    {
        return new Offer();
    }
    
    public function getDataArray()
    {
        return array();
    }
}
