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
 * The act of notifying an event organizer as to whether you expect to attend the event.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class RsvpActionSchema extends InformActionSchema
{
    public static function factory(): RsvpActionSchema
    {
        return new RsvpActionSchema('https://schema.org/', 'RsvpAction');
    }

    /**
     * If responding yes, the number of guests who will attend in addition to the invitee.
     *
     * @param $additionalNumberOfGuests 
     * @return static
     **/
    public function setAdditionalNumberOfGuests($additionalNumberOfGuests): static {
        $this->properties['additionalNumberOfGuests'] = $additionalNumberOfGuests;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAdditionalNumberOfGuests() {
        return $this->properties['additionalNumberOfGuests'];
    }

    /**
     * Comments, typically from users.
     *
     * @param $comment 
     * @return static
     **/
    public function setComment($comment): static {
        $this->properties['comment'] = $comment;

        return $this;
    }

    /**
     * @return 
     **/
    public function getComment() {
        return $this->properties['comment'];
    }

    /**
     * The response (yes, no, maybe) to the RSVP.
     *
     * @param $rsvpResponse 
     * @return static
     **/
    public function setRsvpResponse($rsvpResponse): static {
        $this->properties['rsvpResponse'] = $rsvpResponse;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRsvpResponse() {
        return $this->properties['rsvpResponse'];
    }


}
