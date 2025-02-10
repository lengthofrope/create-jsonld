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
 * A structured value representing a price or price range. Typically, only the
 * subclasses of this type are used for markup. It is recommended to use
 * [[MonetaryAmount]] to describe independent amounts of money such as a salary,
 * credit card limits, etc.
 *
 * @see https://schema.org/PriceSpecification
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PriceSpecification extends StructuredValue
{
    public static function factory(): PriceSpecification
    {
        return new PriceSpecification('https://schema.org/', 'PriceSpecification');
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
     * The number of membership points earned by the member. If necessary, the unitText
     * can be used to express the units the points are issued in. (E.g. stars, miles,
     * etc.)
     *
     * @param $membershipPointsEarned \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setMembershipPointsEarned($membershipPointsEarned): static {
        $this->properties['membershipPointsEarned'] = $membershipPointsEarned;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getMembershipPointsEarned() {
        return $this->properties['membershipPointsEarned'];
    }
    /**
     * The membership program tier an Offer (or a PriceSpecification,
     * OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
     *
     * @param $validForMemberTier \LengthOfRope\JSONLD\Schema\MemberProgramTier
     * @return static
     **/
    public function setValidForMemberTier($validForMemberTier): static {
        $this->properties['validForMemberTier'] = $validForMemberTier;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MemberProgramTier
     **/
    public function getValidForMemberTier() {
        return $this->properties['validForMemberTier'];
    }
    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the price
     * specification or not.
     *
     * @param $valueAddedTaxIncluded \LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setValueAddedTaxIncluded($valueAddedTaxIncluded): static {
        $this->properties['valueAddedTaxIncluded'] = $valueAddedTaxIncluded;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getValueAddedTaxIncluded() {
        return $this->properties['valueAddedTaxIncluded'];
    }
    /**
     * The interval and unit of measurement of ordering quantities for which the offer
     * or price specification is valid. This allows e.g. specifying that a certain
     * freight charge is valid only for a certain quantity.
     *
     * @param $eligibleQuantity \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setEligibleQuantity($eligibleQuantity): static {
        $this->properties['eligibleQuantity'] = $eligibleQuantity;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getEligibleQuantity() {
        return $this->properties['eligibleQuantity'];
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
    /**
     * The highest price if the price is a range.
     *
     * @param $maxPrice \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setMaxPrice($maxPrice): static {
        $this->properties['maxPrice'] = $maxPrice;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getMaxPrice() {
        return $this->properties['maxPrice'];
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
    /**
     * The lowest price if the price is a range.
     *
     * @param $minPrice \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setMinPrice($minPrice): static {
        $this->properties['minPrice'] = $minPrice;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getMinPrice() {
        return $this->properties['minPrice'];
    }
    /**
     * The transaction volume, in a monetary unit, for which the offer or price
     * specification is valid, e.g. for indicating a minimal purchasing volume, to
     * express free shipping above a certain order volume, or to limit the acceptance
     * of credit cards to purchases to a certain minimal amount.
     *
     * @param $eligibleTransactionVolume \LengthOfRope\JSONLD\Schema\PriceSpecification
     * @return static
     **/
    public function setEligibleTransactionVolume($eligibleTransactionVolume): static {
        $this->properties['eligibleTransactionVolume'] = $eligibleTransactionVolume;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PriceSpecification
     **/
    public function getEligibleTransactionVolume() {
        return $this->properties['eligibleTransactionVolume'];
    }
}
