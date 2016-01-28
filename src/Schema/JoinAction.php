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
 */

namespace LengthOfRope\JSONLD\Schema;

/**
 * An agent joins an event/group with participants/friends at a location.<p>Related actions:</p><ul><li><a href="http://schema.org/RegisterAction">RegisterAction</a>: Unlike RegisterAction, JoinAction refers to joining a group/team of people.</li><li><a href="http://schema.org/SubscribeAction">SubscribeAction</a>: Unlike SubscribeAction, JoinAction does not imply that you'll be receiving updates.</li><li><a href="http://schema.org/FollowAction">FollowAction</a>: Unlike FollowAction, JoinAction does not imply that you'll be polling for updates</li></ul>.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 */
class JoinAction extends InteractAction
{
    public static function factory()
    {
        return new JoinAction();
    }
    
    public function getDataArray()
    {
        return array();
    }
}
