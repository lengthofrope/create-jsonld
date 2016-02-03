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
 * A structured value representing a monetary amount. Typically, only the subclasses of this type are used for markup.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PriceSpecificationSchema extends StructuredValueSchema
{
    public static function factory()
    {
        return new PriceSpecificationSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     **/
    private $eligibleQuantity;
    public function setEligibleQuantity($eligibleQuantity) {
        $this->eligibleQuantity = $eligibleQuantity;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     **/
    public function getEligibleQuantity() {
        return $this->eligibleQuantity;
    }

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     **/
    private $eligibleTransactionVolume;
    public function setEligibleTransactionVolume($eligibleTransactionVolume) {
        $this->eligibleTransactionVolume = $eligibleTransactionVolume;

        return $this;
    }

    /**
     * @return PriceSpecificationSchema     **/
    public function getEligibleTransactionVolume() {
        return $this->eligibleTransactionVolume;
    }

    /**
     * The highest price if the price is a range.
     **/
    private $maxPrice;
    public function setMaxPrice($maxPrice) {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * @return NumberSchema     **/
    public function getMaxPrice() {
        return $this->maxPrice;
    }

    /**
     * The lowest price if the price is a range.
     **/
    private $minPrice;
    public function setMinPrice($minPrice) {
        $this->minPrice = $minPrice;

        return $this;
    }

    /**
     * @return NumberSchema     **/
    public function getMinPrice() {
        return $this->minPrice;
    }

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
<br />
<br />
      Usage guidelines:
<br />
<ul>
<li>Use the <a href="/priceCurrency">priceCurrency</a> property (with <a href="http://en.wikipedia.org/wiki/ISO_4217#Active_codes">ISO 4217 codes</a> e.g. "USD") instead of
      including <a href="http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign">ambiguous symbols</a> such as '$' in the value.
</li>
<li>
      Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
</li>
<li>
      Note that both <a href="http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute">RDFa</a> and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values
      alongside more human-friendly formatting.
</li>
<li>
      Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.
</li>
</ul>
      
     **/
    private $price;
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * @return NumberSchema|TextSchema     **/
    public function getPrice() {
        return $this->price;
    }

    /**
     * The currency (in 3-letter ISO 4217 format) of the price or a price component, when attached to PriceSpecification and its subtypes.
     **/
    private $priceCurrency;
    public function setPriceCurrency($priceCurrency) {
        $this->priceCurrency = $priceCurrency;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPriceCurrency() {
        return $this->priceCurrency;
    }

    /**
     * The date when the item becomes valid.
     **/
    private $validFrom;
    public function setValidFrom($validFrom) {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @return DateTimeSchema     **/
    public function getValidFrom() {
        return $this->validFrom;
    }

    /**
     * The end of the validity of offer, price specification, or opening hours data.
     **/
    private $validThrough;
    public function setValidThrough($validThrough) {
        $this->validThrough = $validThrough;

        return $this;
    }

    /**
     * @return DateTimeSchema     **/
    public function getValidThrough() {
        return $this->validThrough;
    }

    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
     **/
    private $valueAddedTaxIncluded;
    public function setValueAddedTaxIncluded($valueAddedTaxIncluded) {
        $this->valueAddedTaxIncluded = $valueAddedTaxIncluded;

        return $this;
    }

    /**
     * @return BooleanSchema     **/
    public function getValueAddedTaxIncluded() {
        return $this->valueAddedTaxIncluded;
    }


}
