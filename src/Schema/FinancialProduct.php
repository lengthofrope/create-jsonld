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
 * A product provided to consumers and businesses by financial institutions such as banks, insurance companies, brokerage firms, consumer finance companies, and investment companies which comprise the financial services industry.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class FinancialProduct extends Service
{
    public static function factory(): FinancialProduct
    {
        return new FinancialProduct('https://schema.org/', 'FinancialProduct');
    }

    /**
     * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
     *
     * @param $feesAndCommissionsSpecification |
     * @return static
     **/
    public function setFeesAndCommissionsSpecification($feesAndCommissionsSpecification): static {
        $this->properties['feesAndCommissionsSpecification'] = $feesAndCommissionsSpecification;

        return $this;
    }

    /**
     * @return |
     **/
    public function getFeesAndCommissionsSpecification() {
        return $this->properties['feesAndCommissionsSpecification'];
    }

    /**
     * The interest rate, charged or paid, applicable to the financial product. Note: This is different from the calculated annualPercentageRate.
     *
     * @param $interestRate |
     * @return static
     **/
    public function setInterestRate($interestRate): static {
        $this->properties['interestRate'] = $interestRate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getInterestRate() {
        return $this->properties['interestRate'];
    }

    /**
     * The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the transaction.
     *
     * @param $annualPercentageRate |
     * @return static
     **/
    public function setAnnualPercentageRate($annualPercentageRate): static {
        $this->properties['annualPercentageRate'] = $annualPercentageRate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAnnualPercentageRate() {
        return $this->properties['annualPercentageRate'];
    }


}
