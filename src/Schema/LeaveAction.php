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
 * An agent leaves an event / group with participants/friends at a location.
 *
 * Related actions:
 *
 * * [[JoinAction]]: The antonym of LeaveAction.
 * * [[UnRegisterAction]]: Unlike UnRegisterAction, LeaveAction implies leaving a
 * group/team of people rather than a service.
 *
 * @see https://schema.org/LeaveAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class LeaveAction extends InteractAction
{
    public static function factory(): LeaveAction
    {
        return new LeaveAction('https://schema.org/', 'LeaveAction');
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
