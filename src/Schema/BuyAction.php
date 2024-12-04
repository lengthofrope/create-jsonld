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
 * The act of giving money to a seller in exchange for goods or services rendered. An agent buys an object, product, or service from a seller for a price. Reciprocal of SellAction.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BuyAction extends TradeAction
{
    public static function factory(): BuyAction
    {
        return new BuyAction('https://schema.org/', 'BuyAction');
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     * @param $seller |
     * @return static
     **/
    public function setSeller($seller): static {
        $this->properties['seller'] = $seller;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSeller() {
        return $this->properties['seller'];
    }

    /**
     * 'vendor' is an earlier term for 'seller'.
     *
     * @param $vendor |
     * @return static
     **/
    public function setVendor($vendor): static {
        $this->properties['vendor'] = $vendor;

        return $this;
    }

    /**
     * @return |
     **/
    public function getVendor() {
        return $this->properties['vendor'];
    }

    /**
     * The warranty promise(s) included in the offer.
     *
     * @param $warrantyPromise 
     * @return static
     **/
    public function setWarrantyPromise($warrantyPromise): static {
        $this->properties['warrantyPromise'] = $warrantyPromise;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWarrantyPromise() {
        return $this->properties['warrantyPromise'];
    }


}
