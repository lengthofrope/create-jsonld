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
 * A financial product for the loaning of an amount of money, or line of credit,
 * under agreed terms and charges.
 *
 * @see https://schema.org/LoanOrCredit
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class LoanOrCredit extends FinancialProduct
{
    public static function factory(): LoanOrCredit
    {
        return new LoanOrCredit('https://schema.org/', 'LoanOrCredit');
    }

    /**
     * The duration of the loan or credit agreement.
     *
     * @param $loanTerm \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setLoanTerm($loanTerm): static {
        $this->properties['loanTerm'] = $loanTerm;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getLoanTerm() {
        return $this->properties['loanTerm'];
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
     * @param $currency \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setCurrency($currency): static {
        $this->properties['currency'] = $currency;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getCurrency() {
        return $this->properties['currency'];
    }
    /**
     * The amount of money.
     *
     * @param $amount \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\DataType\Number
     * @return static
     **/
    public function setAmount($amount): static {
        $this->properties['amount'] = $amount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\DataType\Number
     **/
    public function getAmount() {
        return $this->properties['amount'];
    }
    /**
     * The type of a loan or credit.
     *
     * @param $loanType \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setLoanType($loanType): static {
        $this->properties['loanType'] = $loanType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     **/
    public function getLoanType() {
        return $this->properties['loanType'];
    }
    /**
     * The only way you get the money back in the event of default is the security.
     * Recourse is where you still have the opportunity to go back to the borrower for
     * the rest of the money.
     *
     * @param $recourseLoan \LengthOfRope\JSONLD\DataType\Boolean
     * @return static
     **/
    public function setRecourseLoan($recourseLoan): static {
        $this->properties['recourseLoan'] = $recourseLoan;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Boolean
     **/
    public function getRecourseLoan() {
        return $this->properties['recourseLoan'];
    }
    /**
     * Whether the terms for payment of interest can be renegotiated during the life of
     * the loan.
     *
     * @param $renegotiableLoan \LengthOfRope\JSONLD\DataType\Boolean
     * @return static
     **/
    public function setRenegotiableLoan($renegotiableLoan): static {
        $this->properties['renegotiableLoan'] = $renegotiableLoan;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Boolean
     **/
    public function getRenegotiableLoan() {
        return $this->properties['renegotiableLoan'];
    }
    /**
     * The period of time after any due date that the borrower has to fulfil its
     * obligations before a default (failure to pay) is deemed to have occurred.
     *
     * @param $gracePeriod \LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setGracePeriod($gracePeriod): static {
        $this->properties['gracePeriod'] = $gracePeriod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getGracePeriod() {
        return $this->properties['gracePeriod'];
    }
    /**
     * A form of paying back money previously borrowed from a lender. Repayment usually
     * takes the form of periodic payments that normally include part principal plus
     * interest in each payment.
     *
     * @param $loanRepaymentForm \LengthOfRope\JSONLD\Schema\RepaymentSpecification
     * @return static
     **/
    public function setLoanRepaymentForm($loanRepaymentForm): static {
        $this->properties['loanRepaymentForm'] = $loanRepaymentForm;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\RepaymentSpecification
     **/
    public function getLoanRepaymentForm() {
        return $this->properties['loanRepaymentForm'];
    }
    /**
     * Assets required to secure loan or credit repayments. It may take form of third
     * party pledge, goods, financial instruments (cash, securities, etc.)
     *
     * @param $requiredCollateral \LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setRequiredCollateral($requiredCollateral): static {
        $this->properties['requiredCollateral'] = $requiredCollateral;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getRequiredCollateral() {
        return $this->properties['requiredCollateral'];
    }
}
