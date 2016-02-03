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
 * An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the 'offers' property. Repeated events may be structured as separate Event objects.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class EventSchema extends ThingSchema
{
    public static function factory()
    {
        return new EventSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     **/
    private $aggregateRating;
    public function setAggregateRating($aggregateRating) {
        $this->aggregateRating = $aggregateRating;

        return $this;
    }

    /**
     * @return AggregateRatingSchema     **/
    public function getAggregateRating() {
        return $this->aggregateRating;
    }

    /**
     * A person or organization attending the event.
     **/
    private $attendee;
    public function setAttendee($attendee) {
        $this->attendee = $attendee;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     **/
    public function getAttendee() {
        return $this->attendee;
    }

    /**
     * A person attending the event.
     **/
    private $attendees;
    public function setAttendees($attendees) {
        $this->attendees = $attendees;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     **/
    public function getAttendees() {
        return $this->attendees;
    }

    /**
     * The time admission will commence.
     **/
    private $doorTime;
    public function setDoorTime($doorTime) {
        $this->doorTime = $doorTime;

        return $this;
    }

    /**
     * @return DateTimeSchema     **/
    public function getDoorTime() {
        return $this->doorTime;
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in <a href='http://en.wikipedia.org/wiki/ISO_8601'>ISO 8601 date format</a>.
     **/
    private $duration;
    public function setDuration($duration) {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return DurationSchema     **/
    public function getDuration() {
        return $this->duration;
    }

    /**
     * The end date and time of the item (in <a href='http://en.wikipedia.org/wiki/ISO_8601'>ISO 8601 date format</a>).
     **/
    private $endDate;
    public function setEndDate($endDate) {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getEndDate() {
        return $this->endDate;
    }

    /**
     * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
     **/
    private $eventStatus;
    public function setEventStatus($eventStatus) {
        $this->eventStatus = $eventStatus;

        return $this;
    }

    /**
     * @return EventStatusTypeSchema     **/
    public function getEventStatus() {
        return $this->eventStatus;
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the <a href='http://tools.ietf.org/html/bcp47'>IETF BCP 47 standard</a>.
     **/
    private $inLanguage;
    public function setInLanguage($inLanguage) {
        $this->inLanguage = $inLanguage;

        return $this;
    }

    /**
     * @return TextSchema|LanguageSchema     **/
    public function getInLanguage() {
        return $this->inLanguage;
    }

    /**
     * The location of for example where the event is happening, an organization is located, or where an action takes place.
     **/
    private $location;
    public function setLocation($location) {
        $this->location = $location;

        return $this;
    }

    /**
     * @return PlaceSchema|PostalAddressSchema|TextSchema     **/
    public function getLocation() {
        return $this->location;
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     **/
    private $offers;
    public function setOffers($offers) {
        $this->offers = $offers;

        return $this;
    }

    /**
     * @return OfferSchema     **/
    public function getOffers() {
        return $this->offers;
    }

    /**
     * An organizer of an Event.
     **/
    private $organizer;
    public function setOrganizer($organizer) {
        $this->organizer = $organizer;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     **/
    public function getOrganizer() {
        return $this->organizer;
    }

    /**
     * A performer at the event&#x2014;for example, a presenter, musician, musical group or actor.
     **/
    private $performer;
    public function setPerformer($performer) {
        $this->performer = $performer;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     **/
    public function getPerformer() {
        return $this->performer;
    }

    /**
     * The main performer or performers of the event&#x2014;for example, a presenter, musician, or actor.
     **/
    private $performers;
    public function setPerformers($performers) {
        $this->performers = $performers;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     **/
    public function getPerformers() {
        return $this->performers;
    }

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
     **/
    private $previousStartDate;
    public function setPreviousStartDate($previousStartDate) {
        $this->previousStartDate = $previousStartDate;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getPreviousStartDate() {
        return $this->previousStartDate;
    }

    /**
     * The CreativeWork that captured all or part of this Event.
     **/
    private $recordedIn;
    public function setRecordedIn($recordedIn) {
        $this->recordedIn = $recordedIn;

        return $this;
    }

    /**
     * @return CreativeWorkSchema     **/
    public function getRecordedIn() {
        return $this->recordedIn;
    }

    /**
     * A review of the item.
     **/
    private $review;
    public function setReview($review) {
        $this->review = $review;

        return $this;
    }

    /**
     * @return ReviewSchema     **/
    public function getReview() {
        return $this->review;
    }

    /**
     * The start date and time of the item (in <a href='http://en.wikipedia.org/wiki/ISO_8601'>ISO 8601 date format</a>).
     **/
    private $startDate;
    public function setStartDate($startDate) {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getStartDate() {
        return $this->startDate;
    }

    /**
     * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference.
     **/
    private $subEvent;
    public function setSubEvent($subEvent) {
        $this->subEvent = $subEvent;

        return $this;
    }

    /**
     * @return EventSchema     **/
    public function getSubEvent() {
        return $this->subEvent;
    }

    /**
     * Events that are a part of this event. For example, a conference event includes many presentations, each subEvents of the conference.
     **/
    private $subEvents;
    public function setSubEvents($subEvents) {
        $this->subEvents = $subEvents;

        return $this;
    }

    /**
     * @return EventSchema     **/
    public function getSubEvents() {
        return $this->subEvents;
    }

    /**
     * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
     **/
    private $superEvent;
    public function setSuperEvent($superEvent) {
        $this->superEvent = $superEvent;

        return $this;
    }

    /**
     * @return EventSchema     **/
    public function getSuperEvent() {
        return $this->superEvent;
    }

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     **/
    private $typicalAgeRange;
    public function setTypicalAgeRange($typicalAgeRange) {
        $this->typicalAgeRange = $typicalAgeRange;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getTypicalAgeRange() {
        return $this->typicalAgeRange;
    }

    /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
       Specific subproperties are available for workPerformed (e.g. a play), or a workPresented (a Movie at a ScreeningEvent).
     **/
    private $workFeatured;
    public function setWorkFeatured($workFeatured) {
        $this->workFeatured = $workFeatured;

        return $this;
    }

    /**
     * @return CreativeWorkSchema     **/
    public function getWorkFeatured() {
        return $this->workFeatured;
    }

    /**
     * A work performed in some event, for example a play performed in a TheaterEvent.
     **/
    private $workPerformed;
    public function setWorkPerformed($workPerformed) {
        $this->workPerformed = $workPerformed;

        return $this;
    }

    /**
     * @return CreativeWorkSchema     **/
    public function getWorkPerformed() {
        return $this->workPerformed;
    }


}
