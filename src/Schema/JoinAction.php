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
 * An agent joins an event/group with participants/friends at a location.
 *
 * Related actions:
 *
 * * [[RegisterAction]]: Unlike RegisterAction, JoinAction refers to joining a
 * group/team of people.
 * * [[SubscribeAction]]: Unlike SubscribeAction, JoinAction does not imply that
 * you'll be receiving updates.
 * * [[FollowAction]]: Unlike FollowAction, JoinAction does not imply that you'll
 * be polling for updates.
 *
 * @see https://schema.org/JoinAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class JoinAction extends InteractAction
{
    public static function factory(): JoinAction
    {
        return new JoinAction('https://schema.org/', 'JoinAction');
    }

    /**
     * Upcoming or past event associated with this place, organization, or action.
     *
     * @param $event \LengthOfRope\JSONLD\Schema\Event
     * @return static
     **/
    public function setEvent($event): static {
        $this->properties['event'] = $event;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Event
     **/
    public function getEvent() {
        return $this->properties['event'];
    }
}
