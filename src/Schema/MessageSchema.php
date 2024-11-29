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
 * A single message from a sender to one or more organizations or people.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MessageSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new MessageSchema('https://schema.org/', 'Message');
    }

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     * @param $recipient |||
     **/
    public function setRecipient($recipient) {
        $this->properties['recipient'] = $recipient;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getRecipient() {
        return $this->properties['recipient'];
    }

    /**
     * The date/time at which the message has been read by the recipient if a single recipient exists.
     *
     * @param $dateRead |
     **/
    public function setDateRead($dateRead) {
        $this->properties['dateRead'] = $dateRead;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDateRead() {
        return $this->properties['dateRead'];
    }

    /**
     * The date/time at which the message was sent.
     *
     * @param $dateSent 
     **/
    public function setDateSent($dateSent) {
        $this->properties['dateSent'] = $dateSent;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDateSent() {
        return $this->properties['dateSent'];
    }

    /**
     * A sub property of recipient. The recipient blind copied on a message.
     *
     * @param $bccRecipient ||
     **/
    public function setBccRecipient($bccRecipient) {
        $this->properties['bccRecipient'] = $bccRecipient;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getBccRecipient() {
        return $this->properties['bccRecipient'];
    }

    /**
     * A sub property of recipient. The recipient copied on a message.
     *
     * @param $ccRecipient ||
     **/
    public function setCcRecipient($ccRecipient) {
        $this->properties['ccRecipient'] = $ccRecipient;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getCcRecipient() {
        return $this->properties['ccRecipient'];
    }

    /**
     * A sub property of recipient. The recipient who was directly sent the message.
     *
     * @param $toRecipient |||
     **/
    public function setToRecipient($toRecipient) {
        $this->properties['toRecipient'] = $toRecipient;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getToRecipient() {
        return $this->properties['toRecipient'];
    }

    /**
     * The date/time the message was received if a single recipient exists.
     *
     * @param $dateReceived 
     **/
    public function setDateReceived($dateReceived) {
        $this->properties['dateReceived'] = $dateReceived;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDateReceived() {
        return $this->properties['dateReceived'];
    }

    /**
     * A CreativeWork attached to the message.
     *
     * @param $messageAttachment 
     **/
    public function setMessageAttachment($messageAttachment) {
        $this->properties['messageAttachment'] = $messageAttachment;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMessageAttachment() {
        return $this->properties['messageAttachment'];
    }

    /**
     * A sub property of participant. The participant who is at the sending end of the action.
     *
     * @param $sender ||
     **/
    public function setSender($sender) {
        $this->properties['sender'] = $sender;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getSender() {
        return $this->properties['sender'];
    }


}
