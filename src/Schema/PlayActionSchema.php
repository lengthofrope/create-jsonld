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
 * The act of playing/exercising/training/performing for enjoyment, leisure, recreation, Competition or exercise.<p>Related actions:</p><ul><li><a href="http://schema.org/ListenAction">ListenAction</a>: Unlike ListenAction (which is under ConsumeAction), PlayAction refers to performing for an audience or at an event, rather than consuming music.</li><li><a href="http://schema.org/WatchAction">WatchAction</a>: Unlike WatchAction (which is under ConsumeAction), PlayAction refers to showing/displaying for an audience or at an event, rather than consuming visual content</li></ul>.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PlayActionSchema extends ActionSchema
{
    public static function factory()
    {
        return new PlayActionSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     **/
    private $audience;
    public function setAudience($audience) {
        $this->audience = $audience;

        return $this;
    }

    /**
     * @return AudienceSchema     
     **/
    public function getAudience() {
        return $this->audience;
    }

    /**
     * Upcoming or past event associated with this place, organization, or action.
     **/
    private $event;
    public function setEvent($event) {
        $this->event = $event;

        return $this;
    }

    /**
     * @return EventSchema     
     **/
    public function getEvent() {
        return $this->event;
    }


}