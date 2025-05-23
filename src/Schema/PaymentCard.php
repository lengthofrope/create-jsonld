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
 * A payment method using a credit, debit, store or other card to associate the
 * payment with an account.
 *
 * @see https://schema.org/PaymentCard
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PaymentCard extends FinancialProduct
{
    public static function factory(): PaymentCard
    {
        return new PaymentCard('https://schema.org/', 'PaymentCard');
    }

    /**
     * A cardholder benefit that pays the cardholder a small percentage of their net
     * expenditures.
     *
     * @param $cashBack \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setCashBack($cashBack): static {
        $this->properties['cashBack'] = $cashBack;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getCashBack() {
        return $this->properties['cashBack'];
    }
    /**
     * A floor limit is the amount of money above which credit card transactions must
     * be authorized.
     *
     * @param $floorLimit \LengthOfRope\JSONLD\Schema\MonetaryAmount
     * @return static
     **/
    public function setFloorLimit($floorLimit): static {
        $this->properties['floorLimit'] = $floorLimit;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount
     **/
    public function getFloorLimit() {
        return $this->properties['floorLimit'];
    }
    /**
     * The minimum payment is the lowest amount of money that one is required to pay on
     * a credit card statement each month.
     *
     * @param $monthlyMinimumRepaymentAmount \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setMonthlyMinimumRepaymentAmount($monthlyMinimumRepaymentAmount): static {
        $this->properties['monthlyMinimumRepaymentAmount'] = $monthlyMinimumRepaymentAmount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getMonthlyMinimumRepaymentAmount() {
        return $this->properties['monthlyMinimumRepaymentAmount'];
    }
    /**
     * A secure method for consumers to purchase products or services via debit, credit
     * or smartcards by using RFID or NFC technology.
     *
     * @param $contactlessPayment \LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setContactlessPayment($contactlessPayment): static {
        $this->properties['contactlessPayment'] = $contactlessPayment;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getContactlessPayment() {
        return $this->properties['contactlessPayment'];
    }
}
