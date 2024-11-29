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
 * An order is a confirmation of a transaction (a receipt), which can contain multiple line items, each represented by an Offer that has been accepted by the customer.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class OrderSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new OrderSchema('https://schema.org/', 'Order');
    }

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     *
     * @param $acceptedOffer 
     **/
    public function setAcceptedOffer($acceptedOffer) {
        $this->properties['acceptedOffer'] = $acceptedOffer;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAcceptedOffer() {
        return $this->properties['acceptedOffer'];
    }

    /**
     * Party placing the order or paying the invoice.
     *
     * @param $customer |
     **/
    public function setCustomer($customer) {
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
     * Indicates whether the offer was accepted as a gift for someone other than the buyer.
     *
     * @param $isGift 
     **/
    public function setIsGift($isGift) {
        $this->properties['isGift'] = $isGift;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsGift() {
        return $this->properties['isGift'];
    }

    /**
     * The name of the credit card or other method of payment for the order.
     *
     * @param $paymentMethod |
     **/
    public function setPaymentMethod($paymentMethod) {
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
     * The URL for sending a payment.
     *
     * @param $paymentUrl 
     **/
    public function setPaymentUrl($paymentUrl) {
        $this->properties['paymentUrl'] = $paymentUrl;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPaymentUrl() {
        return $this->properties['paymentUrl'];
    }

    /**
     * 'merchant' is an out-dated term for 'seller'.
     *
     * @param $merchant |
     **/
    public function setMerchant($merchant) {
        $this->properties['merchant'] = $merchant;

        return $this;
    }

    /**
     * @return |
     **/
    public function getMerchant() {
        return $this->properties['merchant'];
    }

    /**
     * The order is being paid as part of the referenced Invoice.
     *
     * @param $partOfInvoice 
     **/
    public function setPartOfInvoice($partOfInvoice) {
        $this->properties['partOfInvoice'] = $partOfInvoice;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPartOfInvoice() {
        return $this->properties['partOfInvoice'];
    }

    /**
     * The date that payment is due.
     *
     * @param $paymentDueDate |
     **/
    public function setPaymentDueDate($paymentDueDate) {
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
     **/
    public function setBroker($broker) {
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
     * Any discount applied (to an Order).
     *
     * @param $discount |
     **/
    public function setDiscount($discount) {
        $this->properties['discount'] = $discount;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDiscount() {
        return $this->properties['discount'];
    }

    /**
     * Date order was placed.
     *
     * @param $orderDate |
     **/
    public function setOrderDate($orderDate) {
        $this->properties['orderDate'] = $orderDate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getOrderDate() {
        return $this->properties['orderDate'];
    }

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     *
     * @param $paymentMethodId 
     **/
    public function setPaymentMethodId($paymentMethodId) {
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
     * The item ordered.
     *
     * @param $orderedItem ||
     **/
    public function setOrderedItem($orderedItem) {
        $this->properties['orderedItem'] = $orderedItem;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getOrderedItem() {
        return $this->properties['orderedItem'];
    }

    /**
     * The date that payment is due.
     *
     * @param $paymentDue 
     **/
    public function setPaymentDue($paymentDue) {
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
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     * @param $seller |
     **/
    public function setSeller($seller) {
        $this->properties['seller'] = $seller;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSeller() {
        return $this->properties['seller'];
    }

    /**
     * The currency of the discount.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     *
     * @param $discountCurrency 
     **/
    public function setDiscountCurrency($discountCurrency) {
        $this->properties['discountCurrency'] = $discountCurrency;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDiscountCurrency() {
        return $this->properties['discountCurrency'];
    }

    /**
     * The delivery of the parcel related to this order or order item.
     *
     * @param $orderDelivery 
     **/
    public function setOrderDelivery($orderDelivery) {
        $this->properties['orderDelivery'] = $orderDelivery;

        return $this;
    }

    /**
     * @return 
     **/
    public function getOrderDelivery() {
        return $this->properties['orderDelivery'];
    }

    /**
     * The billing address for the order.
     *
     * @param $billingAddress 
     **/
    public function setBillingAddress($billingAddress) {
        $this->properties['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBillingAddress() {
        return $this->properties['billingAddress'];
    }

    /**
     * A number that confirms the given order or payment has been received.
     *
     * @param $confirmationNumber 
     **/
    public function setConfirmationNumber($confirmationNumber) {
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
     * The current status of the order.
     *
     * @param $orderStatus 
     **/
    public function setOrderStatus($orderStatus) {
        $this->properties['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * @return 
     **/
    public function getOrderStatus() {
        return $this->properties['orderStatus'];
    }

    /**
     * Code used to redeem a discount.
     *
     * @param $discountCode 
     **/
    public function setDiscountCode($discountCode) {
        $this->properties['discountCode'] = $discountCode;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDiscountCode() {
        return $this->properties['discountCode'];
    }

    /**
     * The identifier of the transaction.
     *
     * @param $orderNumber 
     **/
    public function setOrderNumber($orderNumber) {
        $this->properties['orderNumber'] = $orderNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getOrderNumber() {
        return $this->properties['orderNumber'];
    }


}
