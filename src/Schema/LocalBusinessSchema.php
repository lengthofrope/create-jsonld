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
 * A particular physical business or branch of an organization. Examples of LocalBusiness include a restaurant, a particular branch of a restaurant chain, a branch of a bank, a medical practice, a club, a bowling alley, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class LocalBusinessSchema extends \LengthOfRope\JSONLD\Elements\ElementGroup
{
    public static function factory()
    {
        return new LocalBusinessSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.
<br /><br /> For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.
      
     **/
    private $branchCode;
    public function setBranchCode($branchCode) {
        $this->branchCode = $branchCode;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getBranchCode() {
        return $this->branchCode;
    }

    /**
     * The larger organization that this local business is a branch of, if any.
     **/
    private $branchOf;
    public function setBranchOf($branchOf) {
        $this->branchOf = $branchOf;

        return $this;
    }

    /**
     * @return OrganizationSchema     **/
    public function getBranchOf() {
        return $this->branchOf;
    }

    /**
     * The currency accepted (in <a href='http://en.wikipedia.org/wiki/ISO_4217'>ISO 4217 currency format</a>).
     **/
    private $currenciesAccepted;
    public function setCurrenciesAccepted($currenciesAccepted) {
        $this->currenciesAccepted = $currenciesAccepted;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getCurrenciesAccepted() {
        return $this->currenciesAccepted;
    }

    /**
     * The opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.<br />- Days are specified using the following two-letter combinations: <code>Mo</code>, <code>Tu</code>, <code>We</code>, <code>Th</code>, <code>Fr</code>, <code>Sa</code>, <code>Su</code>.<br />- Times are specified using 24:00 time. For example, 3pm is specified as <code>15:00</code>. <br />- Here is an example: <code>&lt;time itemprop=&quot;openingHours&quot; datetime=&quot;Tu,Th 16:00-20:00&quot;&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code>. <br />- If a business is open 7 days a week, then it can be specified as <code>&lt;time itemprop=&quot;openingHours&quot; datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all day&lt;/time&gt;</code>.
     **/
    private $openingHours;
    public function setOpeningHours($openingHours) {
        $this->openingHours = $openingHours;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getOpeningHours() {
        return $this->openingHours;
    }

    /**
     * Cash, credit card, etc.
     **/
    private $paymentAccepted;
    public function setPaymentAccepted($paymentAccepted) {
        $this->paymentAccepted = $paymentAccepted;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPaymentAccepted() {
        return $this->paymentAccepted;
    }

    /**
     * The price range of the business, for example <code>$$$</code>.
     **/
    private $priceRange;
    public function setPriceRange($priceRange) {
        $this->priceRange = $priceRange;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPriceRange() {
        return $this->priceRange;
    }


}
