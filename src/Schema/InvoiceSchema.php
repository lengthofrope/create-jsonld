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
 * A statement of the money due for goods or services; a bill.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class InvoiceSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new InvoiceSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The identifier for the account the payment will be applied to.
     **/
    private $accountId;
    public function setAccountId($accountId) {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAccountId() {
        return $this->accountId;
    }

    /**
     * The time interval used to compute the invoice.
     **/
    private $billingPeriod;
    public function setBillingPeriod($billingPeriod) {
        $this->billingPeriod = $billingPeriod;

        return $this;
    }

    /**
     * @return DurationSchema     
     **/
    public function getBillingPeriod() {
        return $this->billingPeriod;
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     **/
    private $broker;
    public function setBroker($broker) {
        $this->broker = $broker;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     
     **/
    public function getBroker() {
        return $this->broker;
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     **/
    private $category;
    public function setCategory($category) {
        $this->category = $category;

        return $this;
    }

    /**
     * @return PhysicalActivityCategorySchema|TextSchema|ThingSchema     
     **/
    public function getCategory() {
        return $this->category;
    }

    /**
     * A number that confirms the given order or payment has been received.
     **/
    private $confirmationNumber;
    public function setConfirmationNumber($confirmationNumber) {
        $this->confirmationNumber = $confirmationNumber;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getConfirmationNumber() {
        return $this->confirmationNumber;
    }

    /**
     * Party placing the order or paying the invoice.
     **/
    private $customer;
    public function setCustomer($customer) {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     
     **/
    public function getCustomer() {
        return $this->customer;
    }

    /**
     * The minimum payment required at this time.
     **/
    private $minimumPaymentDue;
    public function setMinimumPaymentDue($minimumPaymentDue) {
        $this->minimumPaymentDue = $minimumPaymentDue;

        return $this;
    }

    /**
     * @return PriceSpecificationSchema     
     **/
    public function getMinimumPaymentDue() {
        return $this->minimumPaymentDue;
    }

    /**
     * The date that payment is due.
     **/
    private $paymentDue;
    public function setPaymentDue($paymentDue) {
        $this->paymentDue = $paymentDue;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getPaymentDue() {
        return $this->paymentDue;
    }

    /**
     * The date that payment is due.
     **/
    private $paymentDueDate;
    public function setPaymentDueDate($paymentDueDate) {
        $this->paymentDueDate = $paymentDueDate;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getPaymentDueDate() {
        return $this->paymentDueDate;
    }

    /**
     * The name of the credit card or other method of payment for the order.
     **/
    private $paymentMethod;
    public function setPaymentMethod($paymentMethod) {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @return PaymentMethodSchema     
     **/
    public function getPaymentMethod() {
        return $this->paymentMethod;
    }

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     **/
    private $paymentMethodId;
    public function setPaymentMethodId($paymentMethodId) {
        $this->paymentMethodId = $paymentMethodId;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getPaymentMethodId() {
        return $this->paymentMethodId;
    }

    /**
     * The status of payment; whether the invoice has been paid or not.
     **/
    private $paymentStatus;
    public function setPaymentStatus($paymentStatus) {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * @return TextSchema|PaymentStatusTypeSchema     
     **/
    public function getPaymentStatus() {
        return $this->paymentStatus;
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     **/
    private $provider;
    public function setProvider($provider) {
        $this->provider = $provider;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     
     **/
    public function getProvider() {
        return $this->provider;
    }

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
     **/
    private $referencesOrder;
    public function setReferencesOrder($referencesOrder) {
        $this->referencesOrder = $referencesOrder;

        return $this;
    }

    /**
     * @return OrderSchema     
     **/
    public function getReferencesOrder() {
        return $this->referencesOrder;
    }

    /**
     * The date the invoice is scheduled to be paid.
     **/
    private $scheduledPaymentDate;
    public function setScheduledPaymentDate($scheduledPaymentDate) {
        $this->scheduledPaymentDate = $scheduledPaymentDate;

        return $this;
    }

    /**
     * @return DateSchema     
     **/
    public function getScheduledPaymentDate() {
        return $this->scheduledPaymentDate;
    }

    /**
     * The total amount due.
     **/
    private $totalPaymentDue;
    public function setTotalPaymentDue($totalPaymentDue) {
        $this->totalPaymentDue = $totalPaymentDue;

        return $this;
    }

    /**
     * @return PriceSpecificationSchema     
     **/
    public function getTotalPaymentDue() {
        return $this->totalPaymentDue;
    }


}
