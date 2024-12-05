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
 * A summary of how users have interacted with this CreativeWork. In most cases,
 * authors will use a subtype to specify the specific type of interaction.
 *
 * @see https://schema.org/InteractionCounter
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class InteractionCounter extends StructuredValue
{
    public static function factory(): InteractionCounter
    {
        return new InteractionCounter('https://schema.org/', 'InteractionCounter');
    }

    /**
     * The Action representing the type of interaction. For up votes, +1s, etc. use
     * [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use the most
     * specific Action.
     *
     * @param $interactionType \LengthOfRope\JSONLD\Schema\Action
     * @return static
     **/
    public function setInteractionType($interactionType): static {
        $this->properties['interactionType'] = $interactionType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Action
     **/
    public function getInteractionType() {
        return $this->properties['interactionType'];
    }
    /**
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For actions
     * that span a period of time, when the action was performed. E.g. John wrote a
     * book from January to *December*. For media, including audio and video, it's the
     * time offset of the end of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when
     * describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @param $endTime \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Time
     * @return static
     **/
    public function setEndTime($endTime): static {
        $this->properties['endTime'] = $endTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Time
     **/
    public function getEndTime() {
        return $this->properties['endTime'];
    }
    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication.
     *
     * @param $userInteractionCount \LengthOfRope\JSONLD\Schema\Integer
     * @return static
     **/
    public function setUserInteractionCount($userInteractionCount): static {
        $this->properties['userInteractionCount'] = $userInteractionCount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Integer
     **/
    public function getUserInteractionCount() {
        return $this->properties['userInteractionCount'];
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
     * The WebSite or SoftwareApplication where the interactions took place.
     *
     * @param $interactionService \LengthOfRope\JSONLD\Schema\WebSite|\LengthOfRope\JSONLD\Schema\SoftwareApplication
     * @return static
     **/
    public function setInteractionService($interactionService): static {
        $this->properties['interactionService'] = $interactionService;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\WebSite|\LengthOfRope\JSONLD\Schema\SoftwareApplication
     **/
    public function getInteractionService() {
        return $this->properties['interactionService'];
    }
    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John
     * wrote a book from *January* to December. For media, including audio and video,
     * it's the time offset of the start of a clip within a larger file.
     *
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when
     * describing dates with times. This situation may be clarified in future
     * revisions.
     *
     * @param $startTime \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Time
     * @return static
     **/
    public function setStartTime($startTime): static {
        $this->properties['startTime'] = $startTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Time
     **/
    public function getStartTime() {
        return $this->properties['startTime'];
    }
}
