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
 * The act of providing goods, services, or money without compensation, often for
 * philanthropic reasons.
 *
 * @see https://schema.org/DonateAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DonateAction extends TransferAction
{
    public static function factory(): DonateAction
    {
        return new DonateAction('https://schema.org/', 'DonateAction');
    }

    /**
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     *
     * Usage guidelines:
     *
     * * Use the [[priceCurrency]] property (with standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and
     * other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous
     * symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign)
     * such as '$' in the value.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     * * Note that both
     * [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and
     * Microdata syntax allow the use of a "content=" attribute for publishing simple
     * machine-readable values alongside more human-friendly formatting.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similar Unicode symbols.
     *
     *
     * @param $price \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setPrice($price): static {
        $this->properties['price'] = $price;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getPrice() {
        return $this->properties['price'];
    }
    /**
     * A sub property of participant. The participant who is at the receiving end of
     * the action.
     *
     * @param $recipient \LengthOfRope\JSONLD\Schema\Audience|\LengthOfRope\JSONLD\Schema\ContactPoint|\LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setRecipient($recipient): static {
        $this->properties['recipient'] = $recipient;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Audience|\LengthOfRope\JSONLD\Schema\ContactPoint|\LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getRecipient() {
        return $this->properties['recipient'];
    }
    /**
     * One or more detailed price specifications, indicating the unit price and
     * delivery or payment charges.
     *
     * @param $priceSpecification \LengthOfRope\JSONLD\Schema\PriceSpecification
     * @return static
     **/
    public function setPriceSpecification($priceSpecification): static {
        $this->properties['priceSpecification'] = $priceSpecification;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PriceSpecification
     **/
    public function getPriceSpecification() {
        return $this->properties['priceSpecification'];
    }
    /**
     * The currency of the price, or a price component when attached to
     * [[PriceSpecification]] and its subtypes.
     *
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and
     * other currency types, e.g. "Ithaca HOUR".
     *
     * @param $priceCurrency \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setPriceCurrency($priceCurrency): static {
        $this->properties['priceCurrency'] = $priceCurrency;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getPriceCurrency() {
        return $this->properties['priceCurrency'];
    }
}
