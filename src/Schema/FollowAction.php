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
 * The act of forming a personal connection with someone/something (object)
 * unidirectionally/asymmetrically to get updates polled from.
 *
 * Related actions:
 *
 * * [[BefriendAction]]: Unlike BefriendAction, FollowAction implies that the
 * connection is *not* necessarily reciprocal.
 * * [[SubscribeAction]]: Unlike SubscribeAction, FollowAction implies that the
 * follower acts as an active agent constantly/actively polling for updates.
 * * [[RegisterAction]]: Unlike RegisterAction, FollowAction implies that the agent
 * is interested in continuing receiving updates from the object.
 * * [[JoinAction]]: Unlike JoinAction, FollowAction implies that the agent is
 * interested in getting updates from the object.
 * * [[TrackAction]]: Unlike TrackAction, FollowAction refers to the polling of
 * updates of all aspects of animate objects rather than the location of inanimate
 * objects (e.g. you track a package, but you don't follow it).
 *
 * @see https://schema.org/FollowAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class FollowAction extends InteractAction
{
    public static function factory(): FollowAction
    {
        return new FollowAction('https://schema.org/', 'FollowAction');
    }

    /**
     * A sub property of object. The person or organization being followed.
     *
     * @param $followee |
     * @return static
     **/
    public function setFollowee($followee): static {
        $this->properties['followee'] = $followee;

        return $this;
    }

    /**
     * @return |
     **/
    public function getFollowee() {
        return $this->properties['followee'];
    }
}
