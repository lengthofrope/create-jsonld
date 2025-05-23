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
 * The act of notifying an event organizer as to whether you expect to attend the
 * event.
 *
 * @see https://schema.org/RsvpAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class RsvpAction extends InformAction
{
    public static function factory(): RsvpAction
    {
        return new RsvpAction('https://schema.org/', 'RsvpAction');
    }

    /**
     * The response (yes, no, maybe) to the RSVP.
     *
     * @param $rsvpResponse \LengthOfRope\JSONLD\Schema\RsvpResponseType
     * @return static
     **/
    public function setRsvpResponse($rsvpResponse): static {
        $this->properties['rsvpResponse'] = $rsvpResponse;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\RsvpResponseType
     **/
    public function getRsvpResponse() {
        return $this->properties['rsvpResponse'];
    }
    /**
     * Comments, typically from users.
     *
     * @param $comment \LengthOfRope\JSONLD\Schema\Comment
     * @return static
     **/
    public function setComment($comment): static {
        $this->properties['comment'] = $comment;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Comment
     **/
    public function getComment() {
        return $this->properties['comment'];
    }
    /**
     * If responding yes, the number of guests who will attend in addition to the
     * invitee.
     *
     * @param $additionalNumberOfGuests \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setAdditionalNumberOfGuests($additionalNumberOfGuests): static {
        $this->properties['additionalNumberOfGuests'] = $additionalNumberOfGuests;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getAdditionalNumberOfGuests() {
        return $this->properties['additionalNumberOfGuests'];
    }
}
