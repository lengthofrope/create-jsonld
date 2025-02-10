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
 * The act of transferring money from one place to another place. This may occur
 * electronically or physically.
 *
 * @see https://schema.org/MoneyTransfer
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MoneyTransfer extends TransferAction
{
    public static function factory(): MoneyTransfer
    {
        return new MoneyTransfer('https://schema.org/', 'MoneyTransfer');
    }

    /**
     * A bank or bank’s branch, financial institution or international financial
     * institution operating the beneficiary’s bank account or releasing funds for
     * the beneficiary.
     *
     * @param $beneficiaryBank \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\BankOrCreditUnion
     * @return static
     **/
    public function setBeneficiaryBank($beneficiaryBank): static {
        $this->properties['beneficiaryBank'] = $beneficiaryBank;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\BankOrCreditUnion
     **/
    public function getBeneficiaryBank() {
        return $this->properties['beneficiaryBank'];
    }
    /**
     * The amount of money.
     *
     * @param $amount \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setAmount($amount): static {
        $this->properties['amount'] = $amount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getAmount() {
        return $this->properties['amount'];
    }
}
