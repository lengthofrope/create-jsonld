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
 * A schedule defines a repeating time period used to describe a regularly occurring [[Event]]. At a minimum a schedule will specify [[repeatFrequency]] which describes the interval between occurrences of the event. Additional information can be provided to specify the schedule more precisely.
 *       This includes identifying the day(s) of the week or month when the recurring event will take place, in addition to its start and end time. Schedules may also
 *       have start and end dates to indicate when they are active, e.g. to define a limited calendar of events.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Schedule extends Intangible
{
    public static function factory(): Schedule
    {
        return new Schedule('https://schema.org/', 'Schedule');
    }

    /**
     * Defines the day(s) of the week on which a recurring [[Event]] takes place. May be specified using either [[DayOfWeek]], or alternatively [[Text]] conforming to iCal's syntax for byDay recurrence rules.
     *
     * @param $byDay |
     * @return static
     **/
    public function setByDay($byDay): static {
        $this->properties['byDay'] = $byDay;

        return $this;
    }

    /**
     * @return |
     **/
    public function getByDay() {
        return $this->properties['byDay'];
    }

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     * @param $endTime |
     * @return static
     **/
    public function setEndTime($endTime): static {
        $this->properties['endTime'] = $endTime;

        return $this;
    }

    /**
     * @return |
     **/
    public function getEndTime() {
        return $this->properties['endTime'];
    }

    /**
     * Defines the number of times a recurring [[Event]] will take place.
     *
     * @param $repeatCount 
     * @return static
     **/
    public function setRepeatCount($repeatCount): static {
        $this->properties['repeatCount'] = $repeatCount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRepeatCount() {
        return $this->properties['repeatCount'];
    }

    /**
     * Defines the week(s) of the month on which a recurring Event takes place. Specified as an Integer between 1-5. For clarity, byMonthWeek is best used in conjunction with byDay to indicate concepts like the first and third Mondays of a month.
     *
     * @param $byMonthWeek 
     * @return static
     **/
    public function setByMonthWeek($byMonthWeek): static {
        $this->properties['byMonthWeek'] = $byMonthWeek;

        return $this;
    }

    /**
     * @return 
     **/
    public function getByMonthWeek() {
        return $this->properties['byMonthWeek'];
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $startDate |
     * @return static
     **/
    public function setStartDate($startDate): static {
        $this->properties['startDate'] = $startDate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getStartDate() {
        return $this->properties['startDate'];
    }

    /**
     * Defines the day(s) of the month on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-31.
     *
     * @param $byMonthDay 
     * @return static
     **/
    public function setByMonthDay($byMonthDay): static {
        $this->properties['byMonthDay'] = $byMonthDay;

        return $this;
    }

    /**
     * @return 
     **/
    public function getByMonthDay() {
        return $this->properties['byMonthDay'];
    }

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     * @param $startTime |
     * @return static
     **/
    public function setStartTime($startTime): static {
        $this->properties['startTime'] = $startTime;

        return $this;
    }

    /**
     * @return |
     **/
    public function getStartTime() {
        return $this->properties['startTime'];
    }

    /**
     * Defines the month(s) of the year on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-12. January is 1.
     *
     * @param $byMonth 
     * @return static
     **/
    public function setByMonth($byMonth): static {
        $this->properties['byMonth'] = $byMonth;

        return $this;
    }

    /**
     * @return 
     **/
    public function getByMonth() {
        return $this->properties['byMonth'];
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $duration 
     * @return static
     **/
    public function setDuration($duration): static {
        $this->properties['duration'] = $duration;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDuration() {
        return $this->properties['duration'];
    }

    /**
     * Defines the frequency at which [[Event]]s will occur according to a schedule [[Schedule]]. The intervals between
      events should be defined as a [[Duration]] of time.
     *
     * @param $repeatFrequency |
     * @return static
     **/
    public function setRepeatFrequency($repeatFrequency): static {
        $this->properties['repeatFrequency'] = $repeatFrequency;

        return $this;
    }

    /**
     * @return |
     **/
    public function getRepeatFrequency() {
        return $this->properties['repeatFrequency'];
    }

    /**
     * Indicates the timezone for which the time(s) indicated in the [[Schedule]] are given. The value provided should be among those listed in the IANA Time Zone Database.
     *
     * @param $scheduleTimezone 
     * @return static
     **/
    public function setScheduleTimezone($scheduleTimezone): static {
        $this->properties['scheduleTimezone'] = $scheduleTimezone;

        return $this;
    }

    /**
     * @return 
     **/
    public function getScheduleTimezone() {
        return $this->properties['scheduleTimezone'];
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $endDate |
     * @return static
     **/
    public function setEndDate($endDate): static {
        $this->properties['endDate'] = $endDate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getEndDate() {
        return $this->properties['endDate'];
    }

    /**
     * Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]] will not take place. The property allows exceptions to
      a [[Schedule]] to be specified. If an exception is specified as a [[DateTime]] then only the event that would have started at that specific date and time
      should be excluded from the schedule. If an exception is specified as a [[Date]] then any event that is scheduled for that 24 hour period should be
      excluded from the schedule. This allows a whole day to be excluded from the schedule without having to itemise every scheduled event.
     *
     * @param $exceptDate |
     * @return static
     **/
    public function setExceptDate($exceptDate): static {
        $this->properties['exceptDate'] = $exceptDate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getExceptDate() {
        return $this->properties['exceptDate'];
    }


}
