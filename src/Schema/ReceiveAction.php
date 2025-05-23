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
 * The act of physically/electronically taking delivery of an object that has been
 * transferred from an origin to a destination. Reciprocal of SendAction.
 *
 * Related actions:
 *
 * * [[SendAction]]: The reciprocal of ReceiveAction.
 * * [[TakeAction]]: Unlike TakeAction, ReceiveAction does not imply that the
 * ownership has been transferred (e.g. I can receive a package, but it does not
 * mean the package is now mine).
 *
 * @see https://schema.org/ReceiveAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ReceiveAction extends TransferAction
{
    public static function factory(): ReceiveAction
    {
        return new ReceiveAction('https://schema.org/', 'ReceiveAction');
    }

    /**
     * A sub property of instrument. The method of delivery.
     *
     * @param $deliveryMethod \LengthOfRope\JSONLD\Schema\DeliveryMethod
     * @return static
     **/
    public function setDeliveryMethod($deliveryMethod): static {
        $this->properties['deliveryMethod'] = $deliveryMethod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DeliveryMethod
     **/
    public function getDeliveryMethod() {
        return $this->properties['deliveryMethod'];
    }
    /**
     * A sub property of participant. The participant who is at the sending end of the
     * action.
     *
     * @param $sender \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Audience|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setSender($sender): static {
        $this->properties['sender'] = $sender;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Audience|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getSender() {
        return $this->properties['sender'];
    }
}
