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
 * A product or service offered by a bank whereby one may deposit, withdraw or
 * transfer money and in some cases be paid interest.
 *
 * @see https://schema.org/BankAccount
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BankAccount extends FinancialProduct
{
    public static function factory(): BankAccount
    {
        return new BankAccount('https://schema.org/', 'BankAccount');
    }

    /**
     * The type of a bank account.
     *
     * @param $bankAccountType \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setBankAccountType($bankAccountType): static {
        $this->properties['bankAccountType'] = $bankAccountType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getBankAccountType() {
        return $this->properties['bankAccountType'];
    }
    /**
     * A minimum amount that has to be paid in every month.
     *
     * @param $accountMinimumInflow \LengthOfRope\JSONLD\Schema\MonetaryAmount
     * @return static
     **/
    public function setAccountMinimumInflow($accountMinimumInflow): static {
        $this->properties['accountMinimumInflow'] = $accountMinimumInflow;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount
     **/
    public function getAccountMinimumInflow() {
        return $this->properties['accountMinimumInflow'];
    }
    /**
     * An overdraft is an extension of credit from a lending institution when an
     * account reaches zero. An overdraft allows the individual to continue withdrawing
     * money even if the account has no funds in it. Basically the bank allows people
     * to borrow a set amount of money.
     *
     * @param $accountOverdraftLimit \LengthOfRope\JSONLD\Schema\MonetaryAmount
     * @return static
     **/
    public function setAccountOverdraftLimit($accountOverdraftLimit): static {
        $this->properties['accountOverdraftLimit'] = $accountOverdraftLimit;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount
     **/
    public function getAccountOverdraftLimit() {
        return $this->properties['accountOverdraftLimit'];
    }
}
