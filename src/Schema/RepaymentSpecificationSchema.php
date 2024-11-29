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
 * A structured value representing repayment.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class RepaymentSpecificationSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new RepaymentSpecificationSchema('https://schema.org/', 'RepaymentSpecification');
    }

    /**
     * The amount to be paid as a penalty in the event of early payment of the loan.
     *
     * @param $earlyPrepaymentPenalty 
     **/
    public function setEarlyPrepaymentPenalty($earlyPrepaymentPenalty) {
        $this->properties['earlyPrepaymentPenalty'] = $earlyPrepaymentPenalty;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEarlyPrepaymentPenalty() {
        return $this->properties['earlyPrepaymentPenalty'];
    }

    /**
     * The amount of money to pay in a single payment.
     *
     * @param $loanPaymentAmount 
     **/
    public function setLoanPaymentAmount($loanPaymentAmount) {
        $this->properties['loanPaymentAmount'] = $loanPaymentAmount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLoanPaymentAmount() {
        return $this->properties['loanPaymentAmount'];
    }

    /**
     * Frequency of payments due, i.e. number of months between payments. This is defined as a frequency, i.e. the reciprocal of a period of time.
     *
     * @param $loanPaymentFrequency 
     **/
    public function setLoanPaymentFrequency($loanPaymentFrequency) {
        $this->properties['loanPaymentFrequency'] = $loanPaymentFrequency;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLoanPaymentFrequency() {
        return $this->properties['loanPaymentFrequency'];
    }

    /**
     * a type of payment made in cash during the onset of the purchase of an expensive good/service. The payment typically represents only a percentage of the full purchase price.
     *
     * @param $downPayment |
     **/
    public function setDownPayment($downPayment) {
        $this->properties['downPayment'] = $downPayment;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDownPayment() {
        return $this->properties['downPayment'];
    }

    /**
     * The number of payments contractually required at origination to repay the loan. For monthly paying loans this is the number of months from the contractual first payment date to the maturity date.
     *
     * @param $numberOfLoanPayments 
     **/
    public function setNumberOfLoanPayments($numberOfLoanPayments) {
        $this->properties['numberOfLoanPayments'] = $numberOfLoanPayments;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNumberOfLoanPayments() {
        return $this->properties['numberOfLoanPayments'];
    }


}
