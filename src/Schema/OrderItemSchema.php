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
 * An order item is a line of an order. It includes the quantity and shipping details of a bought offer.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class OrderItemSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new OrderItemSchema();
    }

    public function getDataArray()
    {
        return array();
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
     * The identifier of the order item.
     **/
    private $orderItemNumber;
    public function setOrderItemNumber($orderItemNumber) {
        $this->orderItemNumber = $orderItemNumber;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getOrderItemNumber() {
        return $this->orderItemNumber;
    }

    /**
     * The current status of the order item.
     **/
    private $orderItemStatus;
    public function setOrderItemStatus($orderItemStatus) {
        $this->orderItemStatus = $orderItemStatus;

        return $this;
    }

    /**
     * @return OrderStatusSchema     
     **/
    public function getOrderItemStatus() {
        return $this->orderItemStatus;
    }

    /**
     * The number of the item ordered. If the property is not set, assume the quantity is one.
     **/
    private $orderQuantity;
    public function setOrderQuantity($orderQuantity) {
        $this->orderQuantity = $orderQuantity;

        return $this;
    }

    /**
     * @return NumberSchema     
     **/
    public function getOrderQuantity() {
        return $this->orderQuantity;
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


}
