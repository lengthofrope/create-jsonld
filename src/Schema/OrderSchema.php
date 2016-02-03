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
        return new OrderSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     **/
    private $acceptedOffer;
    public function setAcceptedOffer($acceptedOffer) {
        $this->acceptedOffer = $acceptedOffer;

        return $this;
    }

    /**
     * @return OfferSchema     
     **/
    public function getAcceptedOffer() {
        return $this->acceptedOffer;
    }

    /**
     * The billing address for the order.
     **/
    private $billingAddress;
    public function setBillingAddress($billingAddress) {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @return PostalAddressSchema     
     **/
    public function getBillingAddress() {
        return $this->billingAddress;
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
     * Any discount applied (to an Order).
     **/
    private $discount;
    public function setDiscount($discount) {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return NumberSchema|TextSchema     
     **/
    public function getDiscount() {
        return $this->discount;
    }

    /**
     * Code used to redeem a discount.
     **/
    private $discountCode;
    public function setDiscountCode($discountCode) {
        $this->discountCode = $discountCode;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getDiscountCode() {
        return $this->discountCode;
    }

    /**
     * The currency (in 3-letter ISO 4217 format) of the discount.
     **/
    private $discountCurrency;
    public function setDiscountCurrency($discountCurrency) {
        $this->discountCurrency = $discountCurrency;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getDiscountCurrency() {
        return $this->discountCurrency;
    }

    /**
     * Was the offer accepted as a gift for someone other than the buyer.
     **/
    private $isGift;
    public function setIsGift($isGift) {
        $this->isGift = $isGift;

        return $this;
    }

    /**
     * @return BooleanSchema     
     **/
    public function getIsGift() {
        return $this->isGift;
    }

    /**
     * 'merchant' is an out-dated term for 'seller'.
     **/
    private $merchant;
    public function setMerchant($merchant) {
        $this->merchant = $merchant;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     
     **/
    public function getMerchant() {
        return $this->merchant;
    }

    /**
     * Date order was placed.
     **/
    private $orderDate;
    public function setOrderDate($orderDate) {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getOrderDate() {
        return $this->orderDate;
    }

    /**
     * The delivery of the parcel related to this order or order item.
     **/
    private $orderDelivery;
    public function setOrderDelivery($orderDelivery) {
        $this->orderDelivery = $orderDelivery;

        return $this;
    }

    /**
     * @return ParcelDeliverySchema     
     **/
    public function getOrderDelivery() {
        return $this->orderDelivery;
    }

    /**
     * The identifier of the transaction.
     **/
    private $orderNumber;
    public function setOrderNumber($orderNumber) {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getOrderNumber() {
        return $this->orderNumber;
    }

    /**
     * The current status of the order.
     **/
    private $orderStatus;
    public function setOrderStatus($orderStatus) {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * @return OrderStatusSchema     
     **/
    public function getOrderStatus() {
        return $this->orderStatus;
    }

    /**
     * The item ordered.
     **/
    private $orderedItem;
    public function setOrderedItem($orderedItem) {
        $this->orderedItem = $orderedItem;

        return $this;
    }

    /**
     * @return ProductSchema|OrderItemSchema     
     **/
    public function getOrderedItem() {
        return $this->orderedItem;
    }

    /**
     * The order is being paid as part of the referenced Invoice.
     **/
    private $partOfInvoice;
    public function setPartOfInvoice($partOfInvoice) {
        $this->partOfInvoice = $partOfInvoice;

        return $this;
    }

    /**
     * @return InvoiceSchema     
     **/
    public function getPartOfInvoice() {
        return $this->partOfInvoice;
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
     * The URL for sending a payment.
     **/
    private $paymentUrl;
    public function setPaymentUrl($paymentUrl) {
        $this->paymentUrl = $paymentUrl;

        return $this;
    }

    /**
     * @return URLSchema     
     **/
    public function getPaymentUrl() {
        return $this->paymentUrl;
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     **/
    private $seller;
    public function setSeller($seller) {
        $this->seller = $seller;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     
     **/
    public function getSeller() {
        return $this->seller;
    }


}
