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
 * An order item is a line of an order. It includes the quantity and shipping
 * details of a bought offer.
 *
 * @see https://schema.org/OrderItem
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class OrderItem extends Intangible
{
    public static function factory(): OrderItem
    {
        return new OrderItem('https://schema.org/', 'OrderItem');
    }

    /**
     * The current status of the order item.
     *
     * @param $orderItemStatus \LengthOfRope\JSONLD\Schema\OrderStatus
     * @return static
     **/
    public function setOrderItemStatus($orderItemStatus): static {
        $this->properties['orderItemStatus'] = $orderItemStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\OrderStatus
     **/
    public function getOrderItemStatus() {
        return $this->properties['orderItemStatus'];
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
     * The number of the item ordered. If the property is not set, assume the quantity
     * is one.
     *
     * @param $orderQuantity \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setOrderQuantity($orderQuantity): static {
        $this->properties['orderQuantity'] = $orderQuantity;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getOrderQuantity() {
        return $this->properties['orderQuantity'];
    }
    /**
     * The identifier of the order item.
     *
     * @param $orderItemNumber \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setOrderItemNumber($orderItemNumber): static {
        $this->properties['orderItemNumber'] = $orderItemNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getOrderItemNumber() {
        return $this->properties['orderItemNumber'];
    }
}
