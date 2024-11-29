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
 * A loan in which property or real estate is used as collateral. (A loan securitized against some real estate.)
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MortgageLoanSchema extends LoanOrCreditSchema
{
    public static function factory()
    {
        return new MortgageLoanSchema('https://schema.org/', 'MortgageLoan');
    }

    /**
     * Amount of mortgage mandate that can be converted into a proper mortgage at a later stage.
     *
     * @param $loanMortgageMandateAmount 
     **/
    public function setLoanMortgageMandateAmount($loanMortgageMandateAmount) {
        $this->properties['loanMortgageMandateAmount'] = $loanMortgageMandateAmount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLoanMortgageMandateAmount() {
        return $this->properties['loanMortgageMandateAmount'];
    }

    /**
     * Whether borrower is a resident of the jurisdiction where the property is located.
     *
     * @param $domiciledMortgage 
     **/
    public function setDomiciledMortgage($domiciledMortgage) {
        $this->properties['domiciledMortgage'] = $domiciledMortgage;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDomiciledMortgage() {
        return $this->properties['domiciledMortgage'];
    }


}
