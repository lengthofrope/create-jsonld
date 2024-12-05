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
 * The act of taking money from a buyer in exchange for goods or services rendered.
 * An agent sells an object, product, or service to a buyer for a price. Reciprocal
 * of BuyAction.
 *
 * @see https://schema.org/SellAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SellAction extends TradeAction
{
    public static function factory(): SellAction
    {
        return new SellAction('https://schema.org/', 'SellAction');
    }

    /**
     * A sub property of participant. The participant/person/organization that bought
     * the object.
     *
     * @param $buyer \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setBuyer($buyer): static {
        $this->properties['buyer'] = $buyer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getBuyer() {
        return $this->properties['buyer'];
    }
    /**
     * The warranty promise(s) included in the offer.
     *
     * @param $warrantyPromise \LengthOfRope\JSONLD\Schema\WarrantyPromise
     * @return static
     **/
    public function setWarrantyPromise($warrantyPromise): static {
        $this->properties['warrantyPromise'] = $warrantyPromise;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\WarrantyPromise
     **/
    public function getWarrantyPromise() {
        return $this->properties['warrantyPromise'];
    }
}
