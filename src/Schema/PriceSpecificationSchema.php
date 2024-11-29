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
 * A structured value representing a price or price range. Typically, only the subclasses of this type are used for markup. It is recommended to use [[MonetaryAmount]] to describe independent amounts of money such as a salary, credit card limits, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PriceSpecificationSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new PriceSpecificationSchema('https://schema.org/', 'PriceSpecification');
    }

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.\n\nUsage guidelines:\n\n* Use the [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in the value.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.\n* Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.
      
     *
     * @param $price |
     **/
    public function setPrice($price) {
        $this->properties['price'] = $price;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPrice() {
        return $this->properties['price'];
    }

    /**
     * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (E.g. stars, miles, etc.)
     *
     * @param $membershipPointsEarned |
     **/
    public function setMembershipPointsEarned($membershipPointsEarned) {
        $this->properties['membershipPointsEarned'] = $membershipPointsEarned;

        return $this;
    }

    /**
     * @return |
     **/
    public function getMembershipPointsEarned() {
        return $this->properties['membershipPointsEarned'];
    }

    /**
     * The membership program tier an Offer (or a PriceSpecification, OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
     *
     * @param $validForMemberTier 
     **/
    public function setValidForMemberTier($validForMemberTier) {
        $this->properties['validForMemberTier'] = $validForMemberTier;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValidForMemberTier() {
        return $this->properties['validForMemberTier'];
    }

    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
     *
     * @param $valueAddedTaxIncluded 
     **/
    public function setValueAddedTaxIncluded($valueAddedTaxIncluded) {
        $this->properties['valueAddedTaxIncluded'] = $valueAddedTaxIncluded;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValueAddedTaxIncluded() {
        return $this->properties['valueAddedTaxIncluded'];
    }

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     *
     * @param $eligibleQuantity 
     **/
    public function setEligibleQuantity($eligibleQuantity) {
        $this->properties['eligibleQuantity'] = $eligibleQuantity;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEligibleQuantity() {
        return $this->properties['eligibleQuantity'];
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     * @param $validThrough |
     **/
    public function setValidThrough($validThrough) {
        $this->properties['validThrough'] = $validThrough;

        return $this;
    }

    /**
     * @return |
     **/
    public function getValidThrough() {
        return $this->properties['validThrough'];
    }

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     *
     * @param $priceCurrency 
     **/
    public function setPriceCurrency($priceCurrency) {
        $this->properties['priceCurrency'] = $priceCurrency;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPriceCurrency() {
        return $this->properties['priceCurrency'];
    }

    /**
     * The highest price if the price is a range.
     *
     * @param $maxPrice 
     **/
    public function setMaxPrice($maxPrice) {
        $this->properties['maxPrice'] = $maxPrice;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMaxPrice() {
        return $this->properties['maxPrice'];
    }

    /**
     * The date when the item becomes valid.
     *
     * @param $validFrom |
     **/
    public function setValidFrom($validFrom) {
        $this->properties['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * @return |
     **/
    public function getValidFrom() {
        return $this->properties['validFrom'];
    }

    /**
     * The lowest price if the price is a range.
     *
     * @param $minPrice 
     **/
    public function setMinPrice($minPrice) {
        $this->properties['minPrice'] = $minPrice;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMinPrice() {
        return $this->properties['minPrice'];
    }

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @param $eligibleTransactionVolume 
     **/
    public function setEligibleTransactionVolume($eligibleTransactionVolume) {
        $this->properties['eligibleTransactionVolume'] = $eligibleTransactionVolume;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEligibleTransactionVolume() {
        return $this->properties['eligibleTransactionVolume'];
    }


}
