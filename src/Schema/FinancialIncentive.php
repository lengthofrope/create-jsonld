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
 * <p>Represents financial incentives for goods/services offered by an organization
 * (or individual).</p>
 *
 * * <p>Typically contains the [[name]] of the incentive, the
 * [[incentivizedItem]], the [[incentiveAmount]], the [[incentiveStatus]],
 * [[incentiveType]], the [[provider]] of the incentive, and
 * [[eligibleWithSupplier]].</p>
 *
 * * <p>Optionally contains criteria on whether the incentive is limited based on
 * [[purchaseType]], [[purchasePriceLimit]], [[incomeLimit]], and the
 * [[qualifiedExpense]].
 * *
 *
 * @see https://schema.org/FinancialIncentive
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class FinancialIncentive extends Intangible
{
    public static function factory(): FinancialIncentive
    {
        return new FinancialIncentive('https://schema.org/', 'FinancialIncentive');
    }

    /**
     * The type of incentive offered (tax credit/rebate, tax deduction, tax waiver,
     * subsidies, etc.).
     *
     * @param $incentiveType \LengthOfRope\JSONLD\Schema\IncentiveType
     * @return static
     **/
    public function setIncentiveType($incentiveType): static {
        $this->properties['incentiveType'] = $incentiveType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\IncentiveType
     **/
    public function getIncentiveType() {
        return $this->properties['incentiveType'];
    }
    /**
     * The publisher of the article in question.
     *
     * @param $publisher \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setPublisher($publisher): static {
        $this->properties['publisher'] = $publisher;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getPublisher() {
        return $this->properties['publisher'];
    }
    /**
     * The type or specific product(s) and/or service(s) being incentivized.
     * <p>DefinedTermSets are used for product and service categories such as the
     * United Nations Standard Products and Services Code:</p>
     * {
     * "@type": "DefinedTerm",
     * "inDefinedTermSet": "https://www.unspsc.org/",
     * "termCode": "261315XX",
     * "name": "Photovoltaic module"
     * }
     *
     * <p>For a specific product or service, use the Product type:</p>
     * {
     * "@type": "Product",
     * "name": "Kenmore White 17" Microwave",
     * }
     * For multiple different incentivized items, use multiple [[DefinedTerm]] or
     * [[Product]].
     *
     * @param $incentivizedItem \LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\Product
     * @return static
     **/
    public function setIncentivizedItem($incentivizedItem): static {
        $this->properties['incentivizedItem'] = $incentivizedItem;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\Product
     **/
    public function getIncentivizedItem() {
        return $this->properties['incentivizedItem'];
    }
    /**
     * Optional. The maximum price the item can have and still qualify for this offer.
     *
     * @param $purchasePriceLimit \LengthOfRope\JSONLD\Schema\MonetaryAmount
     * @return static
     **/
    public function setPurchasePriceLimit($purchasePriceLimit): static {
        $this->properties['purchasePriceLimit'] = $purchasePriceLimit;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount
     **/
    public function getPurchasePriceLimit() {
        return $this->properties['purchasePriceLimit'];
    }
    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param $areaServed \LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     * @return static
     **/
    public function setAreaServed($areaServed): static {
        $this->properties['areaServed'] = $areaServed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     **/
    public function getAreaServed() {
        return $this->properties['areaServed'];
    }
    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on behalf
     * of the provider. A provider may also serve as the seller.
     *
     * @param $provider \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setProvider($provider): static {
        $this->properties['provider'] = $provider;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getProvider() {
        return $this->properties['provider'];
    }
    /**
     * Optional. The types of expenses that are covered by the incentive. For example
     * some incentives are only for the goods (tangible items) but the services (labor)
     * are excluded.
     *
     * @param $qualifiedExpense \LengthOfRope\JSONLD\Schema\IncentiveQualifiedExpenseType
     * @return static
     **/
    public function setQualifiedExpense($qualifiedExpense): static {
        $this->properties['qualifiedExpense'] = $qualifiedExpense;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\IncentiveQualifiedExpenseType
     **/
    public function getQualifiedExpense() {
        return $this->properties['qualifiedExpense'];
    }
    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     *
     * @param $validThrough \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setValidThrough($validThrough): static {
        $this->properties['validThrough'] = $validThrough;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getValidThrough() {
        return $this->properties['validThrough'];
    }
    /**
     * The status of the incentive (active, on hold, retired, etc.).
     *
     * @param $incentiveStatus \LengthOfRope\JSONLD\Schema\IncentiveStatus
     * @return static
     **/
    public function setIncentiveStatus($incentiveStatus): static {
        $this->properties['incentiveStatus'] = $incentiveStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\IncentiveStatus
     **/
    public function getIncentiveStatus() {
        return $this->properties['incentiveStatus'];
    }
    /**
     * The supplier of the incentivized item/service for which the incentive is valid
     * for such as a utility company, merchant, or contractor.
     *
     * @param $eligibleWithSupplier \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setEligibleWithSupplier($eligibleWithSupplier): static {
        $this->properties['eligibleWithSupplier'] = $eligibleWithSupplier;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getEligibleWithSupplier() {
        return $this->properties['eligibleWithSupplier'];
    }
    /**
     * Describes the amount that can be redeemed from this incentive.
     *
     * <p>[[QuantitativeValue]]: Use this for incentives based on price (either raw
     * amount or percentage-based). For a raw amount example, "You can claim $2,500 -
     * $7,500 from the total cost of installation" would be represented as the
     * following:</p>
     * {
     * "@type": "QuantitativeValue",
     * “minValue”: 2500,
     * “maxValue”: 7500,
     * "unitCode": "USD"
     * }
     * <p>[[QuantitivateValue]] can also be used for percentage amounts. In such cases,
     * value is used to represent the incentive’s percentage, while maxValue
     * represents a limit (if one exists) to that incentive. The unitCode should be
     * 'P1' and the unitText should be '%', while valueReference should be used for
     * holding the currency type. For example, "You can claim up to 30% of the total
     * cost of installation, up to a maximum of $7,500" would be:</p>
     * {
     * "@type": "QuantitativeValue",
     * "value": 30,
     * "unitCode": "P1",
     * "unitText": "%",
     * “maxValue”: 7500,
     * “valueReference”: “USD”
     * }
     * <p>[[UnitPriceSpecification]]: Use this for incentives that are based on amounts
     * rather than price. For example, a net metering rebate that pays $10/kWh, up to
     * $1,000:</p>
     * {
     * "@type": "UnitPriceSpecification",
     * "price": 10,
     * "priceCurrency": "USD",
     * "referenceQuantity": 1,
     * "unitCode": "DO3",
     * "unitText": "kw/h",
     * "maxPrice": 1000,
     * "description": "$10 / kwh up to $1000"
     * }
     * <p>[[LoanOrCredit]]: Use for incentives that are loan based. For example, a loan
     * of $4,000 - $50,000 with a repayment term of 10 years, interest free would look
     * like:</p>
     * {
     * "@type": "LoanOrCredit",
     * "loanTerm": {
     * "@type":"QuantitativeValue",
     * "value":"10",
     * "unitCode": "ANN"
     * },
     * "amount":[
     * {
     * "@type": "QuantitativeValue",
     * "Name":"fixed interest rate",
     * "value":"0",
     * },
     * ],
     * "amount":[
     * {
     * "@type": "MonetaryAmount",
     * "Name":"min loan amount",
     * "value":"4000",
     * "currency":"CAD"
     * },
     * {
     * "@type": "MonetaryAmount",
     * "Name":"max loan amount",
     * "value":"50000",
     * "currency":"CAD"
     * }
     * ],
     * }
     *
     * In summary: <ul><li>Use [[QuantitativeValue]] for absolute/percentage-based
     * incentives applied on the price of a good/service.</li>
     * <li>Use [[UnitPriceSpecification]] for incentives based on a per-unit basis
     * (e.g. net metering).</li>
     * <li>Use [[LoanOrCredit]] for loans/credits.</li>
     * </ul>.
     *
     * @param $incentiveAmount \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\LoanOrCredit|\LengthOfRope\JSONLD\Schema\UnitPriceSpecification
     * @return static
     **/
    public function setIncentiveAmount($incentiveAmount): static {
        $this->properties['incentiveAmount'] = $incentiveAmount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\LoanOrCredit|\LengthOfRope\JSONLD\Schema\UnitPriceSpecification
     **/
    public function getIncentiveAmount() {
        return $this->properties['incentiveAmount'];
    }
    /**
     * Optional. Income limit for which the incentive is applicable for.
     *
     * <p>If MonetaryAmount is specified, this should be based on annualized income
     * (e.g. if an incentive is limited to those making <$114,000 annually):</p>
     * {
     * "@type": "MonetaryAmount",
     * "maxValue": 114000,
     * "currency": "USD",
     * }
     *
     * Use Text for incentives that are limited based on other criteria, for example if
     * an incentive is only available to recipients making 120% of the median poverty
     * income in their area.
     *
     * @param $incomeLimit \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setIncomeLimit($incomeLimit): static {
        $this->properties['incomeLimit'] = $incomeLimit;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getIncomeLimit() {
        return $this->properties['incomeLimit'];
    }
    /**
     * Optional. The type of purchase the consumer must make in order to qualify for
     * this incentive.
     *
     * @param $purchaseType \LengthOfRope\JSONLD\Schema\PurchaseType
     * @return static
     **/
    public function setPurchaseType($purchaseType): static {
        $this->properties['purchaseType'] = $purchaseType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PurchaseType
     **/
    public function getPurchaseType() {
        return $this->properties['purchaseType'];
    }
    /**
     * The date when the item becomes valid.
     *
     * @param $validFrom \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setValidFrom($validFrom): static {
        $this->properties['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getValidFrom() {
        return $this->properties['validFrom'];
    }
}
