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
 * A particular physical business or branch of an organization. Examples of LocalBusiness include a restaurant, a particular branch of a restaurant chain, a branch of a bank, a medical practice, a club, a bowling alley, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class LocalBusinessSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new LocalBusinessSchema('https://schema.org/', 'LocalBusiness');
    }

    /**
     * The price range of the business, for example ```$$$```.
     *
     * @param $priceRange 
     **/
    public function setPriceRange($priceRange) {
        $this->properties['priceRange'] = $priceRange;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPriceRange() {
        return $this->properties['priceRange'];
    }

    /**
     * The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.\n\n* Days are specified using the following two-letter combinations: ```Mo```, ```Tu```, ```We```, ```Th```, ```Fr```, ```Sa```, ```Su```.\n* Times are specified using 24:00 format. For example, 3pm is specified as ```15:00```, 10am as ```10:00```. \n* Here is an example: <code>&lt;time itemprop="openingHours" datetime=&quot;Tu,Th 16:00-20:00&quot;&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code>.\n* If a business is open 7 days a week, then it can be specified as <code>&lt;time itemprop=&quot;openingHours&quot; datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all day&lt;/time&gt;</code>.
     *
     * @param $openingHours 
     **/
    public function setOpeningHours($openingHours) {
        $this->properties['openingHours'] = $openingHours;

        return $this;
    }

    /**
     * @return 
     **/
    public function getOpeningHours() {
        return $this->properties['openingHours'];
    }

    /**
     * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
     *
     * @param $paymentAccepted 
     **/
    public function setPaymentAccepted($paymentAccepted) {
        $this->properties['paymentAccepted'] = $paymentAccepted;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPaymentAccepted() {
        return $this->properties['paymentAccepted'];
    }

    /**
     * The larger organization that this local business is a branch of, if any. Not to be confused with (anatomical) [[branch]].
     *
     * @param $branchOf 
     **/
    public function setBranchOf($branchOf) {
        $this->properties['branchOf'] = $branchOf;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBranchOf() {
        return $this->properties['branchOf'];
    }

    /**
     * The currency accepted.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     *
     * @param $currenciesAccepted 
     **/
    public function setCurrenciesAccepted($currenciesAccepted) {
        $this->properties['currenciesAccepted'] = $currenciesAccepted;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCurrenciesAccepted() {
        return $this->properties['currenciesAccepted'];
    }


}
