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
 * The act of physically/electronically dispatching an object for transfer from an
 * origin to a destination. Related actions:
 *
 * * [[ReceiveAction]]: The reciprocal of SendAction.
 * * [[GiveAction]]: Unlike GiveAction, SendAction does not imply the transfer of
 * ownership (e.g. I can send you my laptop, but I'm not necessarily giving it to
 * you).
 *
 * @see https://schema.org/SendAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SendAction extends TransferAction
{
    public static function factory(): SendAction
    {
        return new SendAction('https://schema.org/', 'SendAction');
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
     * A sub property of participant. The participant who is at the receiving end of
     * the action.
     *
     * @param $recipient \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Audience|\LengthOfRope\JSONLD\Schema\ContactPoint|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setRecipient($recipient): static {
        $this->properties['recipient'] = $recipient;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Audience|\LengthOfRope\JSONLD\Schema\ContactPoint|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getRecipient() {
        return $this->properties['recipient'];
    }
}
