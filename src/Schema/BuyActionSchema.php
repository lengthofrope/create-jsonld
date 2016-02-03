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
 * The act of giving money to a seller in exchange for goods or services rendered. An agent buys an object, product, or service from a seller for a price. Reciprocal of SellAction.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BuyActionSchema extends TradeActionSchema
{
    public static function factory()
    {
        return new BuyActionSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     **/
    private $seller;
    public function setSeller($seller) {
        $this->seller = $seller;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     **/
    public function getSeller() {
        return $this->seller;
    }

    /**
     * 'vendor' is an earlier term for 'seller'.
     **/
    private $vendor;
    public function setVendor($vendor) {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     **/
    public function getVendor() {
        return $this->vendor;
    }

    /**
     * The warranty promise(s) included in the offer.
     **/
    private $warrantyPromise;
    public function setWarrantyPromise($warrantyPromise) {
        $this->warrantyPromise = $warrantyPromise;

        return $this;
    }

    /**
     * @return WarrantyPromiseSchema     **/
    public function getWarrantyPromise() {
        return $this->warrantyPromise;
    }


}
