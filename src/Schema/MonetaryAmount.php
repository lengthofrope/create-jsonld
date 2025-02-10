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
 * A monetary value or range. This type can be used to describe an amount of money
 * such as $50 USD, or a range as in describing a bank account being suitable for a
 * balance between £1,000 and £1,000,000 GBP, or the value of a salary, etc. It
 * is recommended to use [[PriceSpecification]] Types to describe the price of an
 * Offer, Invoice, etc.
 *
 * @see https://schema.org/MonetaryAmount
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MonetaryAmount extends StructuredValue
{
    public static function factory(): MonetaryAmount
    {
        return new MonetaryAmount('https://schema.org/', 'MonetaryAmount');
    }

    /**
     * The lower value of some characteristic or property.
     *
     * @param $minValue \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setMinValue($minValue): static {
        $this->properties['minValue'] = $minValue;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getMinValue() {
        return $this->properties['minValue'];
    }
    /**
     * The upper value of some characteristic or property.
     *
     * @param $maxValue \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setMaxValue($maxValue): static {
        $this->properties['maxValue'] = $maxValue;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getMaxValue() {
        return $this->properties['maxValue'];
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
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     *
     * @param $validThrough \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setValidThrough($validThrough): static {
        $this->properties['validThrough'] = $validThrough;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getValidThrough() {
        return $this->properties['validThrough'];
    }
    /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property
     * value node.
     *
     * * For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for
     * values is 'Number'.
     * * For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or
     * 'StructuredValue'.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     *
     * @param $value \LengthOfRope\JSONLD\DataType\TypeBoolean|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\StructuredValue
     * @return static
     **/
    public function setValue($value): static {
        $this->properties['value'] = $value;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\StructuredValue
     **/
    public function getValue() {
        return $this->properties['value'];
    }
    /**
     * The date when the item becomes valid.
     *
     * @param $validFrom \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setValidFrom($validFrom): static {
        $this->properties['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getValidFrom() {
        return $this->properties['validFrom'];
    }
}
