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
 * A statement of the money due for goods or services; a bill.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Invoice extends Intangible
{
    public static function factory(): Invoice
    {
        return new Invoice('https://schema.org/', 'Invoice');
    }

    /**
     * Party placing the order or paying the invoice.
     *
     * @param $customer |
     * @return static
     **/
    public function setCustomer($customer): static {
        $this->properties['customer'] = $customer;

        return $this;
    }

    /**
     * @return |
     **/
    public function getCustomer() {
        return $this->properties['customer'];
    }

    /**
     * The name of the credit card or other method of payment for the order.
     *
     * @param $paymentMethod |
     * @return static
     **/
    public function setPaymentMethod($paymentMethod): static {
        $this->properties['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPaymentMethod() {
        return $this->properties['paymentMethod'];
    }

    /**
     * The date that payment is due.
     *
     * @param $paymentDueDate |
     * @return static
     **/
    public function setPaymentDueDate($paymentDueDate): static {
        $this->properties['paymentDueDate'] = $paymentDueDate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPaymentDueDate() {
        return $this->properties['paymentDueDate'];
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     *
     * @param $broker |
     * @return static
     **/
    public function setBroker($broker): static {
        $this->properties['broker'] = $broker;

        return $this;
    }

    /**
     * @return |
     **/
    public function getBroker() {
        return $this->properties['broker'];
    }

    /**
     * The total amount due.
     *
     * @param $totalPaymentDue |
     * @return static
     **/
    public function setTotalPaymentDue($totalPaymentDue): static {
        $this->properties['totalPaymentDue'] = $totalPaymentDue;

        return $this;
    }

    /**
     * @return |
     **/
    public function getTotalPaymentDue() {
        return $this->properties['totalPaymentDue'];
    }

    /**
     * The date the invoice is scheduled to be paid.
     *
     * @param $scheduledPaymentDate 
     * @return static
     **/
    public function setScheduledPaymentDate($scheduledPaymentDate): static {
        $this->properties['scheduledPaymentDate'] = $scheduledPaymentDate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getScheduledPaymentDate() {
        return $this->properties['scheduledPaymentDate'];
    }

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     *
     * @param $paymentMethodId 
     * @return static
     **/
    public function setPaymentMethodId($paymentMethodId): static {
        $this->properties['paymentMethodId'] = $paymentMethodId;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPaymentMethodId() {
        return $this->properties['paymentMethodId'];
    }

    /**
     * The date that payment is due.
     *
     * @param $paymentDue 
     * @return static
     **/
    public function setPaymentDue($paymentDue): static {
        $this->properties['paymentDue'] = $paymentDue;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPaymentDue() {
        return $this->properties['paymentDue'];
    }

    /**
     * The time interval used to compute the invoice.
     *
     * @param $billingPeriod 
     * @return static
     **/
    public function setBillingPeriod($billingPeriod): static {
        $this->properties['billingPeriod'] = $billingPeriod;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBillingPeriod() {
        return $this->properties['billingPeriod'];
    }

    /**
     * A number that confirms the given order or payment has been received.
     *
     * @param $confirmationNumber 
     * @return static
     **/
    public function setConfirmationNumber($confirmationNumber): static {
        $this->properties['confirmationNumber'] = $confirmationNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getConfirmationNumber() {
        return $this->properties['confirmationNumber'];
    }

    /**
     * The status of payment; whether the invoice has been paid or not.
     *
     * @param $paymentStatus |
     * @return static
     **/
    public function setPaymentStatus($paymentStatus): static {
        $this->properties['paymentStatus'] = $paymentStatus;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPaymentStatus() {
        return $this->properties['paymentStatus'];
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @param $category ||||
     * @return static
     **/
    public function setCategory($category): static {
        $this->properties['category'] = $category;

        return $this;
    }

    /**
     * @return ||||
     **/
    public function getCategory() {
        return $this->properties['category'];
    }

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
     *
     * @param $referencesOrder 
     * @return static
     **/
    public function setReferencesOrder($referencesOrder): static {
        $this->properties['referencesOrder'] = $referencesOrder;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReferencesOrder() {
        return $this->properties['referencesOrder'];
    }

    /**
     * The identifier for the account the payment will be applied to.
     *
     * @param $accountId 
     * @return static
     **/
    public function setAccountId($accountId): static {
        $this->properties['accountId'] = $accountId;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAccountId() {
        return $this->properties['accountId'];
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     * @param $provider |
     * @return static
     **/
    public function setProvider($provider): static {
        $this->properties['provider'] = $provider;

        return $this;
    }

    /**
     * @return |
     **/
    public function getProvider() {
        return $this->properties['provider'];
    }

    /**
     * The minimum payment required at this time.
     *
     * @param $minimumPaymentDue |
     * @return static
     **/
    public function setMinimumPaymentDue($minimumPaymentDue): static {
        $this->properties['minimumPaymentDue'] = $minimumPaymentDue;

        return $this;
    }

    /**
     * @return |
     **/
    public function getMinimumPaymentDue() {
        return $this->properties['minimumPaymentDue'];
    }


}
