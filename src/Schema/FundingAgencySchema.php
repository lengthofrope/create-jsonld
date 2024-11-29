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
 * A FundingAgency is an organization that implements one or more [[FundingScheme]]s and manages
 * * *       the granting process (via [[Grant]]s, typically [[MonetaryGrant]]s).
 * * *       A funding agency is not always required for grant funding, e.g. philanthropic giving, corporate sponsorship etc.
 * *      
 * Examples of funding agencies include ERC, REA, NIH, Bill and Melinda Gates Foundation, ...
 * *      
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class FundingAgencySchema extends ProjectSchema
{
    public static function factory(): FundingAgencySchema
    {
        return new FundingAgencySchema('https://schema.org/', 'FundingAgency');
    }


}
