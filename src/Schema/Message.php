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
 * A single message from a sender to one or more organizations or people.
 *
 * @see https://schema.org/Message
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Message extends CreativeWork
{
    public static function factory(): Message
    {
        return new Message('https://schema.org/', 'Message');
    }

    /**
     * The date/time the message was received if a single recipient exists.
     *
     * @param $dateReceived \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setDateReceived($dateReceived): static {
        $this->properties['dateReceived'] = $dateReceived;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getDateReceived() {
        return $this->properties['dateReceived'];
    }
    /**
     * A sub property of recipient. The recipient copied on a message.
     *
     * @param $ccRecipient \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\ContactPoint
     * @return static
     **/
    public function setCcRecipient($ccRecipient): static {
        $this->properties['ccRecipient'] = $ccRecipient;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\ContactPoint
     **/
    public function getCcRecipient() {
        return $this->properties['ccRecipient'];
    }
    /**
     * A CreativeWork attached to the message.
     *
     * @param $messageAttachment \LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setMessageAttachment($messageAttachment): static {
        $this->properties['messageAttachment'] = $messageAttachment;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getMessageAttachment() {
        return $this->properties['messageAttachment'];
    }
    /**
     * A sub property of recipient. The recipient blind copied on a message.
     *
     * @param $bccRecipient \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\ContactPoint
     * @return static
     **/
    public function setBccRecipient($bccRecipient): static {
        $this->properties['bccRecipient'] = $bccRecipient;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\ContactPoint
     **/
    public function getBccRecipient() {
        return $this->properties['bccRecipient'];
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
    /**
     * The date/time at which the message has been read by the recipient if a single
     * recipient exists.
     *
     * @param $dateRead \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setDateRead($dateRead): static {
        $this->properties['dateRead'] = $dateRead;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getDateRead() {
        return $this->properties['dateRead'];
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
    /**
     * A sub property of recipient. The recipient who was directly sent the message.
     *
     * @param $toRecipient \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Audience|\LengthOfRope\JSONLD\Schema\ContactPoint|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setToRecipient($toRecipient): static {
        $this->properties['toRecipient'] = $toRecipient;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Audience|\LengthOfRope\JSONLD\Schema\ContactPoint|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getToRecipient() {
        return $this->properties['toRecipient'];
    }
    /**
     * The date/time at which the message was sent.
     *
     * @param $dateSent \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setDateSent($dateSent): static {
        $this->properties['dateSent'] = $dateSent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getDateSent() {
        return $this->properties['dateSent'];
    }
}
