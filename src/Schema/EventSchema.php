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
 * An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the [[offers]] property. Repeated events may be structured as separate Event objects.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class EventSchema extends ThingSchema
{
    public static function factory()
    {
        return new EventSchema('https://schema.org/', 'Event');
    }

    /**
     * The main performer or performers of the event&#x2014;for example, a presenter, musician, or actor.
     *
     * @param $performers |
     **/
    public function setPerformers($performers) {
        $this->properties['performers'] = $performers;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPerformers() {
        return $this->properties['performers'];
    }

    /**
     * An organizer of an Event.
     *
     * @param $organizer |
     **/
    public function setOrganizer($organizer) {
        $this->properties['organizer'] = $organizer;

        return $this;
    }

    /**
     * @return |
     **/
    public function getOrganizer() {
        return $this->properties['organizer'];
    }

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @param $contributor |
     **/
    public function setContributor($contributor) {
        $this->properties['contributor'] = $contributor;

        return $this;
    }

    /**
     * @return |
     **/
    public function getContributor() {
        return $this->properties['contributor'];
    }

    /**
     * A work performed in some event, for example a play performed in a TheaterEvent.
     *
     * @param $workPerformed 
     **/
    public function setWorkPerformed($workPerformed) {
        $this->properties['workPerformed'] = $workPerformed;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWorkPerformed() {
        return $this->properties['workPerformed'];
    }

    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     * @param $actor |
     **/
    public function setActor($actor) {
        $this->properties['actor'] = $actor;

        return $this;
    }

    /**
     * @return |
     **/
    public function getActor() {
        return $this->properties['actor'];
    }

    /**
     * The eventAttendanceMode of an event indicates whether it occurs online, offline, or a mix.
     *
     * @param $eventAttendanceMode 
     **/
    public function setEventAttendanceMode($eventAttendanceMode) {
        $this->properties['eventAttendanceMode'] = $eventAttendanceMode;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEventAttendanceMode() {
        return $this->properties['eventAttendanceMode'];
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     *
     * @param $funding 
     **/
    public function setFunding($funding) {
        $this->properties['funding'] = $funding;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFunding() {
        return $this->properties['funding'];
    }

    /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
       Specific subproperties are available for workPerformed (e.g. a play), or a workPresented (a Movie at a ScreeningEvent).
     *
     * @param $workFeatured 
     **/
    public function setWorkFeatured($workFeatured) {
        $this->properties['workFeatured'] = $workFeatured;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWorkFeatured() {
        return $this->properties['workFeatured'];
    }

    /**
     * The maximum virtual attendee capacity of an [[Event]] whose [[eventAttendanceMode]] is [[OnlineEventAttendanceMode]] (or the online aspects, in the case of a [[MixedEventAttendanceMode]]). 
     *
     * @param $maximumVirtualAttendeeCapacity 
     **/
    public function setMaximumVirtualAttendeeCapacity($maximumVirtualAttendeeCapacity) {
        $this->properties['maximumVirtualAttendeeCapacity'] = $maximumVirtualAttendeeCapacity;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMaximumVirtualAttendeeCapacity() {
        return $this->properties['maximumVirtualAttendeeCapacity'];
    }

    /**
     * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference.
     *
     * @param $subEvent 
     **/
    public function setSubEvent($subEvent) {
        $this->properties['subEvent'] = $subEvent;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSubEvent() {
        return $this->properties['subEvent'];
    }

    /**
     * The subject matter of the content.
     *
     * @param $about 
     **/
    public function setAbout($about) {
        $this->properties['about'] = $about;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAbout() {
        return $this->properties['about'];
    }

    /**
     * The CreativeWork that captured all or part of this Event.
     *
     * @param $recordedIn 
     **/
    public function setRecordedIn($recordedIn) {
        $this->properties['recordedIn'] = $recordedIn;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRecordedIn() {
        return $this->properties['recordedIn'];
    }

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     *
     * @param $funder |
     **/
    public function setFunder($funder) {
        $this->properties['funder'] = $funder;

        return $this;
    }

    /**
     * @return |
     **/
    public function getFunder() {
        return $this->properties['funder'];
    }

    /**
     * Events that are a part of this event. For example, a conference event includes many presentations, each subEvents of the conference.
     *
     * @param $subEvents 
     **/
    public function setSubEvents($subEvents) {
        $this->properties['subEvents'] = $subEvents;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSubEvents() {
        return $this->properties['subEvents'];
    }

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
     *
     * @param $keywords ||
     **/
    public function setKeywords($keywords) {
        $this->properties['keywords'] = $keywords;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getKeywords() {
        return $this->properties['keywords'];
    }

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @param $isAccessibleForFree 
     **/
    public function setIsAccessibleForFree($isAccessibleForFree) {
        $this->properties['isAccessibleForFree'] = $isAccessibleForFree;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsAccessibleForFree() {
        return $this->properties['isAccessibleForFree'];
    }

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
     *
     * @param $previousStartDate 
     **/
    public function setPreviousStartDate($previousStartDate) {
        $this->properties['previousStartDate'] = $previousStartDate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPreviousStartDate() {
        return $this->properties['previousStartDate'];
    }

    /**
     * A performer at the event&#x2014;for example, a presenter, musician, musical group or actor.
     *
     * @param $performer |
     **/
    public function setPerformer($performer) {
        $this->properties['performer'] = $performer;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPerformer() {
        return $this->properties['performer'];
    }

    /**
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     *
     * @param $location |||
     **/
    public function setLocation($location) {
        $this->properties['location'] = $location;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getLocation() {
        return $this->properties['location'];
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $startDate |
     **/
    public function setStartDate($startDate) {
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
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @param $typicalAgeRange 
     **/
    public function setTypicalAgeRange($typicalAgeRange) {
        $this->properties['typicalAgeRange'] = $typicalAgeRange;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTypicalAgeRange() {
        return $this->properties['typicalAgeRange'];
    }

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
     *
     * @param $translator |
     **/
    public function setTranslator($translator) {
        $this->properties['translator'] = $translator;

        return $this;
    }

    /**
     * @return |
     **/
    public function getTranslator() {
        return $this->properties['translator'];
    }

    /**
     * A review of the item.
     *
     * @param $review 
     **/
    public function setReview($review) {
        $this->properties['review'] = $review;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReview() {
        return $this->properties['review'];
    }

    /**
     * The number of attendee places for an event that remain unallocated.
     *
     * @param $remainingAttendeeCapacity 
     **/
    public function setRemainingAttendeeCapacity($remainingAttendeeCapacity) {
        $this->properties['remainingAttendeeCapacity'] = $remainingAttendeeCapacity;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRemainingAttendeeCapacity() {
        return $this->properties['remainingAttendeeCapacity'];
    }

    /**
     * Associates an [[Event]] with a [[Schedule]]. There are circumstances where it is preferable to share a schedule for a series of
      repeating events rather than data on the individual events themselves. For example, a website or application might prefer to publish a schedule for a weekly
      gym class rather than provide data on every event. A schedule could be processed by applications to add forthcoming events to a calendar. An [[Event]] that
      is associated with a [[Schedule]] using this property should not have [[startDate]] or [[endDate]] properties. These are instead defined within the associated
      [[Schedule]], this avoids any ambiguity for clients using the data. The property might have repeated values to specify different schedules, e.g. for different months
      or seasons.
     *
     * @param $eventSchedule 
     **/
    public function setEventSchedule($eventSchedule) {
        $this->properties['eventSchedule'] = $eventSchedule;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEventSchedule() {
        return $this->properties['eventSchedule'];
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
      
     *
     * @param $offers |
     **/
    public function setOffers($offers) {
        $this->properties['offers'] = $offers;

        return $this;
    }

    /**
     * @return |
     **/
    public function getOffers() {
        return $this->properties['offers'];
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $duration 
     **/
    public function setDuration($duration) {
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
     * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
     *
     * @param $superEvent 
     **/
    public function setSuperEvent($superEvent) {
        $this->properties['superEvent'] = $superEvent;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSuperEvent() {
        return $this->properties['superEvent'];
    }

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     * @param $director 
     **/
    public function setDirector($director) {
        $this->properties['director'] = $director;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDirector() {
        return $this->properties['director'];
    }

    /**
     * The time admission will commence.
     *
     * @param $doorTime |
     **/
    public function setDoorTime($doorTime) {
        $this->properties['doorTime'] = $doorTime;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDoorTime() {
        return $this->properties['doorTime'];
    }

    /**
     * The maximum physical attendee capacity of an [[Event]] whose [[eventAttendanceMode]] is [[OfflineEventAttendanceMode]] (or the offline aspects, in the case of a [[MixedEventAttendanceMode]]). 
     *
     * @param $maximumPhysicalAttendeeCapacity 
     **/
    public function setMaximumPhysicalAttendeeCapacity($maximumPhysicalAttendeeCapacity) {
        $this->properties['maximumPhysicalAttendeeCapacity'] = $maximumPhysicalAttendeeCapacity;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMaximumPhysicalAttendeeCapacity() {
        return $this->properties['maximumPhysicalAttendeeCapacity'];
    }

    /**
     * A person or organization attending the event.
     *
     * @param $attendee |
     **/
    public function setAttendee($attendee) {
        $this->properties['attendee'] = $attendee;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAttendee() {
        return $this->properties['attendee'];
    }

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     * @param $sponsor |
     **/
    public function setSponsor($sponsor) {
        $this->properties['sponsor'] = $sponsor;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSponsor() {
        return $this->properties['sponsor'];
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @param $aggregateRating 
     **/
    public function setAggregateRating($aggregateRating) {
        $this->properties['aggregateRating'] = $aggregateRating;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAggregateRating() {
        return $this->properties['aggregateRating'];
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     * @param $inLanguage |
     **/
    public function setInLanguage($inLanguage) {
        $this->properties['inLanguage'] = $inLanguage;

        return $this;
    }

    /**
     * @return |
     **/
    public function getInLanguage() {
        return $this->properties['inLanguage'];
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $endDate |
     **/
    public function setEndDate($endDate) {
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
     * A person attending the event.
     *
     * @param $attendees |
     **/
    public function setAttendees($attendees) {
        $this->properties['attendees'] = $attendees;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAttendees() {
        return $this->properties['attendees'];
    }

    /**
     * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
     *
     * @param $eventStatus 
     **/
    public function setEventStatus($eventStatus) {
        $this->properties['eventStatus'] = $eventStatus;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEventStatus() {
        return $this->properties['eventStatus'];
    }

    /**
     * The total number of individuals that may attend an event or venue.
     *
     * @param $maximumAttendeeCapacity 
     **/
    public function setMaximumAttendeeCapacity($maximumAttendeeCapacity) {
        $this->properties['maximumAttendeeCapacity'] = $maximumAttendeeCapacity;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMaximumAttendeeCapacity() {
        return $this->properties['maximumAttendeeCapacity'];
    }

    /**
     * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
     *
     * @param $composer |
     **/
    public function setComposer($composer) {
        $this->properties['composer'] = $composer;

        return $this;
    }

    /**
     * @return |
     **/
    public function getComposer() {
        return $this->properties['composer'];
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param $audience 
     **/
    public function setAudience($audience) {
        $this->properties['audience'] = $audience;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAudience() {
        return $this->properties['audience'];
    }


}
