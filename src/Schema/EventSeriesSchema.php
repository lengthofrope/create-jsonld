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
 * A series of [[Event]]s. Included events can relate with the series using the [[superEvent]] property.

 * An EventSeries is a collection of events that share some unifying characteristic. For example, "The Olympic Games" is a series, which
 * is repeated regularly. The "2012 London Olympics" can be presented both as an [[Event]] in the series "Olympic Games", and as an
 * [[EventSeries]] that included a number of sporting competitions as Events.

 * The nature of the association between the events in an [[EventSeries]] can vary, but typical examples could
 * include a thematic event series (e.g. topical meetups or classes), or a series of regular events that share a location, attendee group and/or organizers.

 * EventSeries has been defined as a kind of Event to make it easy for publishers to use it in an Event context without
 * worrying about which kinds of series are really event-like enough to call an Event. In general an EventSeries
 * may seem more Event-like when the period of time is compact and when aspects such as location are fixed, but
 * it may also sometimes prove useful to describe a longer-term series as an Event.
 *    
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class EventSeriesSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new EventSeriesSchema('https://schema.org/', 'EventSeries');
    }


}
