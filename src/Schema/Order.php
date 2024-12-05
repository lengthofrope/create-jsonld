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
 * An order is a confirmation of a transaction (a receipt), which can contain
 * multiple line items, each represented by an Offer that has been accepted by the
 * customer.
 *
 * @see https://schema.org/Order
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Order extends Intangible
{
    public static function factory(): Order
    {
        return new Order('https://schema.org/', 'Order');
    }

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in
     * the order.
     *
     * @param $acceptedOffer \LengthOfRope\JSONLD\Schema\Offer
     * @return static
     **/
    public function setAcceptedOffer($acceptedOffer): static {
        $this->properties['acceptedOffer'] = $acceptedOffer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Offer
     **/
    public function getAcceptedOffer() {
        return $this->properties['acceptedOffer'];
    }
    /**
     * Party placing the order or paying the invoice.
     *
     * @param $customer \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setCustomer($customer): static {
        $this->properties['customer'] = $customer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getCustomer() {
        return $this->properties['customer'];
    }
    /**
     * Indicates whether the offer was accepted as a gift for someone other than the
     * buyer.
     *
     * @param $isGift \LengthOfRope\JSONLD\DataType\Boolean
     * @return static
     **/
    public function setIsGift($isGift): static {
        $this->properties['isGift'] = $isGift;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Boolean
     **/
    public function getIsGift() {
        return $this->properties['isGift'];
    }
    /**
     * The name of the credit card or other method of payment for the order.
     *
     * @param $paymentMethod \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\PaymentMethod
     * @return static
     **/
    public function setPaymentMethod($paymentMethod): static {
        $this->properties['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\PaymentMethod
     **/
    public function getPaymentMethod() {
        return $this->properties['paymentMethod'];
    }
    /**
     * The URL for sending a payment.
     *
     * @param $paymentUrl \LengthOfRope\JSONLD\DataType\URL
     * @return static
     **/
    public function setPaymentUrl($paymentUrl): static {
        $this->properties['paymentUrl'] = $paymentUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\URL
     **/
    public function getPaymentUrl() {
        return $this->properties['paymentUrl'];
    }
    /**
     * 'merchant' is an out-dated term for 'seller'.
     *
     * @param $merchant \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setMerchant($merchant): static {
        $this->properties['merchant'] = $merchant;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getMerchant() {
        return $this->properties['merchant'];
    }
    /**
     * The order is being paid as part of the referenced Invoice.
     *
     * @param $partOfInvoice \LengthOfRope\JSONLD\Schema\Invoice
     * @return static
     **/
    public function setPartOfInvoice($partOfInvoice): static {
        $this->properties['partOfInvoice'] = $partOfInvoice;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Invoice
     **/
    public function getPartOfInvoice() {
        return $this->properties['partOfInvoice'];
    }
    /**
     * The date that payment is due.
     *
     * @param $paymentDueDate \LengthOfRope\JSONLD\DataType\Date|\LengthOfRope\JSONLD\DataType\DateTime
     * @return static
     **/
    public function setPaymentDueDate($paymentDueDate): static {
        $this->properties['paymentDueDate'] = $paymentDueDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date|\LengthOfRope\JSONLD\DataType\DateTime
     **/
    public function getPaymentDueDate() {
        return $this->properties['paymentDueDate'];
    }
    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most
     * cases a broker never acquires or releases ownership of a product or service
     * involved in an exchange.  If it is not clear whether an entity is a broker,
     * seller, or buyer, the latter two terms are preferred.
     *
     * @param $broker \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setBroker($broker): static {
        $this->properties['broker'] = $broker;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getBroker() {
        return $this->properties['broker'];
    }
    /**
     * Any discount applied (to an Order).
     *
     * @param $discount \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\Number
     * @return static
     **/
    public function setDiscount($discount): static {
        $this->properties['discount'] = $discount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\Number
     **/
    public function getDiscount() {
        return $this->properties['discount'];
    }
    /**
     * Date order was placed.
     *
     * @param $orderDate \LengthOfRope\JSONLD\DataType\Date|\LengthOfRope\JSONLD\DataType\DateTime
     * @return static
     **/
    public function setOrderDate($orderDate): static {
        $this->properties['orderDate'] = $orderDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date|\LengthOfRope\JSONLD\DataType\DateTime
     **/
    public function getOrderDate() {
        return $this->properties['orderDate'];
    }
    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the
     * credit card).
     *
     * @param $paymentMethodId \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setPaymentMethodId($paymentMethodId): static {
        $this->properties['paymentMethodId'] = $paymentMethodId;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getPaymentMethodId() {
        return $this->properties['paymentMethodId'];
    }
    /**
     * The item ordered.
     *
     * @param $orderedItem \LengthOfRope\JSONLD\Schema\Service|\LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\Schema\OrderItem
     * @return static
     **/
    public function setOrderedItem($orderedItem): static {
        $this->properties['orderedItem'] = $orderedItem;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Service|\LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\Schema\OrderItem
     **/
    public function getOrderedItem() {
        return $this->properties['orderedItem'];
    }
    /**
     * The date that payment is due.
     *
     * @param $paymentDue \LengthOfRope\JSONLD\DataType\DateTime
     * @return static
     **/
    public function setPaymentDue($paymentDue): static {
        $this->properties['paymentDue'] = $paymentDue;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime
     **/
    public function getPaymentDue() {
        return $this->properties['paymentDue'];
    }
    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A
     * seller may also be a provider.
     *
     * @param $seller \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setSeller($seller): static {
        $this->properties['seller'] = $seller;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getSeller() {
        return $this->properties['seller'];
    }
    /**
     * The currency of the discount.
     *
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and
     * other currency types, e.g. "Ithaca HOUR".
     *
     * @param $discountCurrency \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setDiscountCurrency($discountCurrency): static {
        $this->properties['discountCurrency'] = $discountCurrency;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getDiscountCurrency() {
        return $this->properties['discountCurrency'];
    }
    /**
     * The delivery of the parcel related to this order or order item.
     *
     * @param $orderDelivery \LengthOfRope\JSONLD\Schema\ParcelDelivery
     * @return static
     **/
    public function setOrderDelivery($orderDelivery): static {
        $this->properties['orderDelivery'] = $orderDelivery;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ParcelDelivery
     **/
    public function getOrderDelivery() {
        return $this->properties['orderDelivery'];
    }
    /**
     * The billing address for the order.
     *
     * @param $billingAddress \LengthOfRope\JSONLD\Schema\PostalAddress
     * @return static
     **/
    public function setBillingAddress($billingAddress): static {
        $this->properties['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PostalAddress
     **/
    public function getBillingAddress() {
        return $this->properties['billingAddress'];
    }
    /**
     * A number that confirms the given order or payment has been received.
     *
     * @param $confirmationNumber \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setConfirmationNumber($confirmationNumber): static {
        $this->properties['confirmationNumber'] = $confirmationNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getConfirmationNumber() {
        return $this->properties['confirmationNumber'];
    }
    /**
     * The current status of the order.
     *
     * @param $orderStatus \LengthOfRope\JSONLD\Schema\OrderStatus
     * @return static
     **/
    public function setOrderStatus($orderStatus): static {
        $this->properties['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\OrderStatus
     **/
    public function getOrderStatus() {
        return $this->properties['orderStatus'];
    }
    /**
     * Code used to redeem a discount.
     *
     * @param $discountCode \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setDiscountCode($discountCode): static {
        $this->properties['discountCode'] = $discountCode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getDiscountCode() {
        return $this->properties['discountCode'];
    }
    /**
     * The identifier of the transaction.
     *
     * @param $orderNumber \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setOrderNumber($orderNumber): static {
        $this->properties['orderNumber'] = $orderNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getOrderNumber() {
        return $this->properties['orderNumber'];
    }
}
