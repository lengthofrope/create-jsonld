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
 * An event happening at a certain time and location, such as a concert, lecture,
 * or festival. Ticketing information may be added via the [[offers]] property.
 * Repeated events may be structured as separate Event objects.
 *
 * @see https://schema.org/Event
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Event extends Thing
{
    public static function factory(): Event
    {
        return new Event('https://schema.org/', 'Event');
    }

    /**
     * The main performer or performers of the event&#x2014;for example, a presenter,
     * musician, or actor.
     *
     * @param $performers \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setPerformers($performers): static {
        $this->properties['performers'] = $performers;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getPerformers() {
        return $this->properties['performers'];
    }
    /**
     * An organizer of an Event.
     *
     * @param $organizer \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setOrganizer($organizer): static {
        $this->properties['organizer'] = $organizer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getOrganizer() {
        return $this->properties['organizer'];
    }
    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @param $contributor \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setContributor($contributor): static {
        $this->properties['contributor'] = $contributor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getContributor() {
        return $this->properties['contributor'];
    }
    /**
     * A work performed in some event, for example a play performed in a TheaterEvent.
     *
     * @param $workPerformed \LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setWorkPerformed($workPerformed): static {
        $this->properties['workPerformed'] = $workPerformed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getWorkPerformed() {
        return $this->properties['workPerformed'];
    }
    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or
     * in an event. Actors can be associated with individual items or with a series,
     * episode, clip.
     *
     * @param $actor \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\PerformingGroup
     * @return static
     **/
    public function setActor($actor): static {
        $this->properties['actor'] = $actor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\PerformingGroup
     **/
    public function getActor() {
        return $this->properties['actor'];
    }
    /**
     * The eventAttendanceMode of an event indicates whether it occurs online, offline,
     * or a mix.
     *
     * @param $eventAttendanceMode \LengthOfRope\JSONLD\Schema\EventAttendanceModeEnumeration
     * @return static
     **/
    public function setEventAttendanceMode($eventAttendanceMode): static {
        $this->properties['eventAttendanceMode'] = $eventAttendanceMode;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\EventAttendanceModeEnumeration
     **/
    public function getEventAttendanceMode() {
        return $this->properties['eventAttendanceMode'];
    }
    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this
     * item. See also [[ownershipFundingInfo]].
     *
     * @param $funding \LengthOfRope\JSONLD\Schema\Grant
     * @return static
     **/
    public function setFunding($funding): static {
        $this->properties['funding'] = $funding;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Grant
     **/
    public function getFunding() {
        return $this->properties['funding'];
    }
    /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
     * Specific subproperties are available for workPerformed (e.g. a play), or
     * a workPresented (a Movie at a ScreeningEvent).
     *
     * @param $workFeatured \LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setWorkFeatured($workFeatured): static {
        $this->properties['workFeatured'] = $workFeatured;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getWorkFeatured() {
        return $this->properties['workFeatured'];
    }
    /**
     * The maximum virtual attendee capacity of an [[Event]] whose
     * [[eventAttendanceMode]] is [[OnlineEventAttendanceMode]] (or the online aspects,
     * in the case of a [[MixedEventAttendanceMode]]).
     *
     * @param $maximumVirtualAttendeeCapacity \LengthOfRope\JSONLD\DataType\Integer
     * @return static
     **/
    public function setMaximumVirtualAttendeeCapacity($maximumVirtualAttendeeCapacity): static {
        $this->properties['maximumVirtualAttendeeCapacity'] = $maximumVirtualAttendeeCapacity;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Integer
     **/
    public function getMaximumVirtualAttendeeCapacity() {
        return $this->properties['maximumVirtualAttendeeCapacity'];
    }
    /**
     * An Event that is part of this event. For example, a conference event includes
     * many presentations, each of which is a subEvent of the conference.
     *
     * @param $subEvent \LengthOfRope\JSONLD\Schema\Event
     * @return static
     **/
    public function setSubEvent($subEvent): static {
        $this->properties['subEvent'] = $subEvent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Event
     **/
    public function getSubEvent() {
        return $this->properties['subEvent'];
    }
    /**
     * The subject matter of the content.
     *
     * @param $about \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setAbout($about): static {
        $this->properties['about'] = $about;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getAbout() {
        return $this->properties['about'];
    }
    /**
     * The CreativeWork that captured all or part of this Event.
     *
     * @param $recordedIn \LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setRecordedIn($recordedIn): static {
        $this->properties['recordedIn'] = $recordedIn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getRecordedIn() {
        return $this->properties['recordedIn'];
    }
    /**
     * A person or organization that supports (sponsors) something through some kind of
     * financial contribution.
     *
     * @param $funder \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setFunder($funder): static {
        $this->properties['funder'] = $funder;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getFunder() {
        return $this->properties['funder'];
    }
    /**
     * Events that are a part of this event. For example, a conference event includes
     * many presentations, each subEvents of the conference.
     *
     * @param $subEvents \LengthOfRope\JSONLD\Schema\Event
     * @return static
     **/
    public function setSubEvents($subEvents): static {
        $this->properties['subEvents'] = $subEvents;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Event
     **/
    public function getSubEvents() {
        return $this->properties['subEvents'];
    }
    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a
     * keywords list are typically delimited by commas, or by repeating the property.
     *
     * @param $keywords \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setKeywords($keywords): static {
        $this->properties['keywords'] = $keywords;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getKeywords() {
        return $this->properties['keywords'];
    }
    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @param $isAccessibleForFree \LengthOfRope\JSONLD\DataType\Boolean
     * @return static
     **/
    public function setIsAccessibleForFree($isAccessibleForFree): static {
        $this->properties['isAccessibleForFree'] = $isAccessibleForFree;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Boolean
     **/
    public function getIsAccessibleForFree() {
        return $this->properties['isAccessibleForFree'];
    }
    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This
     * property contains the previously scheduled start date. For rescheduled events,
     * the startDate property should be used for the newly scheduled start date. In the
     * (rare) case of an event that has been postponed and rescheduled multiple times,
     * this field may be repeated.
     *
     * @param $previousStartDate \LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setPreviousStartDate($previousStartDate): static {
        $this->properties['previousStartDate'] = $previousStartDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date
     **/
    public function getPreviousStartDate() {
        return $this->properties['previousStartDate'];
    }
    /**
     * A performer at the event&#x2014;for example, a presenter, musician, musical
     * group or actor.
     *
     * @param $performer \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setPerformer($performer): static {
        $this->properties['performer'] = $performer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getPerformer() {
        return $this->properties['performer'];
    }
    /**
     * The location of, for example, where an event is happening, where an organization
     * is located, or where an action takes place.
     *
     * @param $location \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\Schema\VirtualLocation|\LengthOfRope\JSONLD\Schema\PostalAddress
     * @return static
     **/
    public function setLocation($location): static {
        $this->properties['location'] = $location;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\Schema\VirtualLocation|\LengthOfRope\JSONLD\Schema\PostalAddress
     **/
    public function getLocation() {
        return $this->properties['location'];
    }
    /**
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $startDate \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setStartDate($startDate): static {
        $this->properties['startDate'] = $startDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Date
     **/
    public function getStartDate() {
        return $this->properties['startDate'];
    }
    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @param $typicalAgeRange \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setTypicalAgeRange($typicalAgeRange): static {
        $this->properties['typicalAgeRange'] = $typicalAgeRange;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getTypicalAgeRange() {
        return $this->properties['typicalAgeRange'];
    }
    /**
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market, or that
     * translates during some event.
     *
     * @param $translator \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setTranslator($translator): static {
        $this->properties['translator'] = $translator;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getTranslator() {
        return $this->properties['translator'];
    }
    /**
     * A review of the item.
     *
     * @param $review \LengthOfRope\JSONLD\Schema\Review
     * @return static
     **/
    public function setReview($review): static {
        $this->properties['review'] = $review;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Review
     **/
    public function getReview() {
        return $this->properties['review'];
    }
    /**
     * The number of attendee places for an event that remain unallocated.
     *
     * @param $remainingAttendeeCapacity \LengthOfRope\JSONLD\DataType\Integer
     * @return static
     **/
    public function setRemainingAttendeeCapacity($remainingAttendeeCapacity): static {
        $this->properties['remainingAttendeeCapacity'] = $remainingAttendeeCapacity;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Integer
     **/
    public function getRemainingAttendeeCapacity() {
        return $this->properties['remainingAttendeeCapacity'];
    }
    /**
     * Associates an [[Event]] with a [[Schedule]]. There are circumstances where it is
     * preferable to share a schedule for a series of
     * repeating events rather than data on the individual events themselves. For
     * example, a website or application might prefer to publish a schedule for a
     * weekly
     * gym class rather than provide data on every event. A schedule could be
     * processed by applications to add forthcoming events to a calendar. An [[Event]]
     * that
     * is associated with a [[Schedule]] using this property should not have
     * [[startDate]] or [[endDate]] properties. These are instead defined within the
     * associated
     * [[Schedule]], this avoids any ambiguity for clients using the data. The
     * property might have repeated values to specify different schedules, e.g. for
     * different months
     * or seasons.
     *
     * @param $eventSchedule \LengthOfRope\JSONLD\Schema\Schedule
     * @return static
     **/
    public function setEventSchedule($eventSchedule): static {
        $this->properties['eventSchedule'] = $eventSchedule;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Schedule
     **/
    public function getEventSchedule() {
        return $this->properties['eventSchedule'];
    }
    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product,
     * rent the DVD of a movie, perform a service, or give away tickets to an event.
     * Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell,
     * lease, etc. This property can also be used to describe a [[Demand]]. While this
     * property is listed as expected on a number of common types, it can be used in
     * others. In that case, using a second type, such as Product or a subtype of
     * Product, can clarify the nature of the offer.
     *
     *
     * @param $offers \LengthOfRope\JSONLD\Schema\Offer|\LengthOfRope\JSONLD\Schema\Demand
     * @return static
     **/
    public function setOffers($offers): static {
        $this->properties['offers'] = $offers;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Offer|\LengthOfRope\JSONLD\Schema\Demand
     **/
    public function getOffers() {
        return $this->properties['offers'];
    }
    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $duration \LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setDuration($duration): static {
        $this->properties['duration'] = $duration;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getDuration() {
        return $this->properties['duration'];
    }
    /**
     * An event that this event is a part of. For example, a collection of individual
     * music performances might each have a music festival as their superEvent.
     *
     * @param $superEvent \LengthOfRope\JSONLD\Schema\Event
     * @return static
     **/
    public function setSuperEvent($superEvent): static {
        $this->properties['superEvent'] = $superEvent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Event
     **/
    public function getSuperEvent() {
        return $this->properties['superEvent'];
    }
    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event.
     * Directors can be associated with individual items or with a series, episode,
     * clip.
     *
     * @param $director \LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setDirector($director): static {
        $this->properties['director'] = $director;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person
     **/
    public function getDirector() {
        return $this->properties['director'];
    }
    /**
     * The time admission will commence.
     *
     * @param $doorTime \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Time
     * @return static
     **/
    public function setDoorTime($doorTime): static {
        $this->properties['doorTime'] = $doorTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Time
     **/
    public function getDoorTime() {
        return $this->properties['doorTime'];
    }
    /**
     * The maximum physical attendee capacity of an [[Event]] whose
     * [[eventAttendanceMode]] is [[OfflineEventAttendanceMode]] (or the offline
     * aspects, in the case of a [[MixedEventAttendanceMode]]).
     *
     * @param $maximumPhysicalAttendeeCapacity \LengthOfRope\JSONLD\DataType\Integer
     * @return static
     **/
    public function setMaximumPhysicalAttendeeCapacity($maximumPhysicalAttendeeCapacity): static {
        $this->properties['maximumPhysicalAttendeeCapacity'] = $maximumPhysicalAttendeeCapacity;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Integer
     **/
    public function getMaximumPhysicalAttendeeCapacity() {
        return $this->properties['maximumPhysicalAttendeeCapacity'];
    }
    /**
     * A person or organization attending the event.
     *
     * @param $attendee \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setAttendee($attendee): static {
        $this->properties['attendee'] = $attendee;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getAttendee() {
        return $this->properties['attendee'];
    }
    /**
     * A person or organization that supports a thing through a pledge, promise, or
     * financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor
     * of an event.
     *
     * @param $sponsor \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setSponsor($sponsor): static {
        $this->properties['sponsor'] = $sponsor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getSponsor() {
        return $this->properties['sponsor'];
    }
    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @param $aggregateRating \LengthOfRope\JSONLD\Schema\AggregateRating
     * @return static
     **/
    public function setAggregateRating($aggregateRating): static {
        $this->properties['aggregateRating'] = $aggregateRating;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AggregateRating
     **/
    public function getAggregateRating() {
        return $this->properties['aggregateRating'];
    }
    /**
     * The language of the content or performance or used in an action. Please use one
     * of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     * @param $inLanguage \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setInLanguage($inLanguage): static {
        $this->properties['inLanguage'] = $inLanguage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getInLanguage() {
        return $this->properties['inLanguage'];
    }
    /**
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param $endDate \LengthOfRope\JSONLD\DataType\Date|\LengthOfRope\JSONLD\DataType\DateTime
     * @return static
     **/
    public function setEndDate($endDate): static {
        $this->properties['endDate'] = $endDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date|\LengthOfRope\JSONLD\DataType\DateTime
     **/
    public function getEndDate() {
        return $this->properties['endDate'];
    }
    /**
     * A person attending the event.
     *
     * @param $attendees \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setAttendees($attendees): static {
        $this->properties['attendees'] = $attendees;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getAttendees() {
        return $this->properties['attendees'];
    }
    /**
     * An eventStatus of an event represents its status; particularly useful when an
     * event is cancelled or rescheduled.
     *
     * @param $eventStatus \LengthOfRope\JSONLD\Schema\EventStatusType
     * @return static
     **/
    public function setEventStatus($eventStatus): static {
        $this->properties['eventStatus'] = $eventStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\EventStatusType
     **/
    public function getEventStatus() {
        return $this->properties['eventStatus'];
    }
    /**
     * The total number of individuals that may attend an event or venue.
     *
     * @param $maximumAttendeeCapacity \LengthOfRope\JSONLD\DataType\Integer
     * @return static
     **/
    public function setMaximumAttendeeCapacity($maximumAttendeeCapacity): static {
        $this->properties['maximumAttendeeCapacity'] = $maximumAttendeeCapacity;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Integer
     **/
    public function getMaximumAttendeeCapacity() {
        return $this->properties['maximumAttendeeCapacity'];
    }
    /**
     * The person or organization who wrote a composition, or who is the composer of a
     * work performed at some event.
     *
     * @param $composer \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setComposer($composer): static {
        $this->properties['composer'] = $composer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getComposer() {
        return $this->properties['composer'];
    }
    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param $audience \LengthOfRope\JSONLD\Schema\Audience
     * @return static
     **/
    public function setAudience($audience): static {
        $this->properties['audience'] = $audience;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Audience
     **/
    public function getAudience() {
        return $this->properties['audience'];
    }
}
