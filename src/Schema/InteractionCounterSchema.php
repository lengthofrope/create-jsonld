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
 * A summary of how users have interacted with this CreativeWork. In most cases, authors will use a subtype to specify the specific type of interaction.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class InteractionCounterSchema extends StructuredValueSchema
{
    public static function factory()
    {
        return new InteractionCounterSchema('https://schema.org/', 'InteractionCounter');
    }

    /**
     * The Action representing the type of interaction. For up votes, +1s, etc. use [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use the most specific Action.
     *
     * @param $interactionType 
     **/
    public function setInteractionType($interactionType) {
        $this->properties['interactionType'] = $interactionType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInteractionType() {
        return $this->properties['interactionType'];
    }

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     * @param $endTime |
     **/
    public function setEndTime($endTime) {
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
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
     *
     * @param $userInteractionCount 
     **/
    public function setUserInteractionCount($userInteractionCount) {
        $this->properties['userInteractionCount'] = $userInteractionCount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getUserInteractionCount() {
        return $this->properties['userInteractionCount'];
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
     * The WebSite or SoftwareApplication where the interactions took place.
     *
     * @param $interactionService |
     **/
    public function setInteractionService($interactionService) {
        $this->properties['interactionService'] = $interactionService;

        return $this;
    }

    /**
     * @return |
     **/
    public function getInteractionService() {
        return $this->properties['interactionService'];
    }

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     *
     * @param $startTime |
     **/
    public function setStartTime($startTime) {
        $this->properties['startTime'] = $startTime;

        return $this;
    }

    /**
     * @return |
     **/
    public function getStartTime() {
        return $this->properties['startTime'];
    }


}
