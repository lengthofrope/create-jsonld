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
 * An event involving the delivery of an item.
 *
 * @see https://schema.org/DeliveryEvent
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DeliveryEvent extends Event
{
    public static function factory(): DeliveryEvent
    {
        return new DeliveryEvent('https://schema.org/', 'DeliveryEvent');
    }

    /**
     * When the item is available for pickup from the store, locker, etc.
     *
     * @param $availableFrom \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setAvailableFrom($availableFrom): static {
        $this->properties['availableFrom'] = $availableFrom;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getAvailableFrom() {
        return $this->properties['availableFrom'];
    }
    /**
     * Method used for delivery or shipping.
     *
     * @param $hasDeliveryMethod \LengthOfRope\JSONLD\Schema\DeliveryMethod
     * @return static
     **/
    public function setHasDeliveryMethod($hasDeliveryMethod): static {
        $this->properties['hasDeliveryMethod'] = $hasDeliveryMethod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DeliveryMethod
     **/
    public function getHasDeliveryMethod() {
        return $this->properties['hasDeliveryMethod'];
    }
    /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     *
     * @param $accessCode \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAccessCode($accessCode): static {
        $this->properties['accessCode'] = $accessCode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAccessCode() {
        return $this->properties['accessCode'];
    }
    /**
     * After this date, the item will no longer be available for pickup.
     *
     * @param $availableThrough \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setAvailableThrough($availableThrough): static {
        $this->properties['availableThrough'] = $availableThrough;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getAvailableThrough() {
        return $this->properties['availableThrough'];
    }
}
