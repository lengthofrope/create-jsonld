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
 * A structured value representing exchange rate.
 *
 * @see https://schema.org/ExchangeRateSpecification
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ExchangeRateSpecification extends StructuredValue
{
    public static function factory(): ExchangeRateSpecification
    {
        return new ExchangeRateSpecification('https://schema.org/', 'ExchangeRateSpecification');
    }

    /**
     * The currency in which the monetary amount is expressed.
     *
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and
     * other currency types, e.g. "Ithaca HOUR".
     *
     * @param $currency \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCurrency($currency): static {
        $this->properties['currency'] = $currency;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCurrency() {
        return $this->properties['currency'];
    }
    /**
     * The current price of a currency.
     *
     * @param $currentExchangeRate \LengthOfRope\JSONLD\Schema\UnitPriceSpecification
     * @return static
     **/
    public function setCurrentExchangeRate($currentExchangeRate): static {
        $this->properties['currentExchangeRate'] = $currentExchangeRate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\UnitPriceSpecification
     **/
    public function getCurrentExchangeRate() {
        return $this->properties['currentExchangeRate'];
    }
    /**
     * The difference between the price at which a broker or other intermediary buys
     * and sells foreign currency.
     *
     * @param $exchangeRateSpread \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\MonetaryAmount
     * @return static
     **/
    public function setExchangeRateSpread($exchangeRateSpread): static {
        $this->properties['exchangeRateSpread'] = $exchangeRateSpread;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\MonetaryAmount
     **/
    public function getExchangeRateSpread() {
        return $this->properties['exchangeRateSpread'];
    }
}
