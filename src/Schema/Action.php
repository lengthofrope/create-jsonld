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
 * An action performed by a direct agent and indirect participants upon a direct
 * object. Optionally happens at a location with the help of an inanimate
 * instrument. The execution of the action may produce a result. Specific action
 * sub-type documentation specifies the exact expectation of each argument/role.
 *
 * See also [blog
 * post](http://blog.schema.org/2014/04/announcing-schemaorg-actions.html) and
 * [Actions overview document](https://schema.org/docs/actions.html).
 *
 * @see https://schema.org/Action
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Action extends Thing
{
    public static function factory(): Action
    {
        return new Action('https://schema.org/', 'Action');
    }

    /**
     * Description of the process by which the action was performed.
     *
     * @param $actionProcess \LengthOfRope\JSONLD\Schema\HowTo
     * @return static
     **/
    public function setActionProcess($actionProcess): static {
        $this->properties['actionProcess'] = $actionProcess;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\HowTo
     **/
    public function getActionProcess() {
        return $this->properties['actionProcess'];
    }
    /**
     * The result produced in the action. E.g. John wrote *a book*.
     *
     * @param $result \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setResult($result): static {
        $this->properties['result'] = $result;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getResult() {
        return $this->properties['result'];
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
     * The direct performer or driver of the action (animate or inanimate). E.g. *John*
     * wrote a book.
     *
     * @param $agent \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setAgent($agent): static {
        $this->properties['agent'] = $agent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getAgent() {
        return $this->properties['agent'];
    }
    /**
     * For failed actions, more information on the cause of the failure.
     *
     * @param $error \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setError($error): static {
        $this->properties['error'] = $error;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getError() {
        return $this->properties['error'];
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
     * Indicates the current disposition of the Action.
     *
     * @param $actionStatus \LengthOfRope\JSONLD\Schema\ActionStatusType
     * @return static
     **/
    public function setActionStatus($actionStatus): static {
        $this->properties['actionStatus'] = $actionStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ActionStatusType
     **/
    public function getActionStatus() {
        return $this->properties['actionStatus'];
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
    /**
     * Indicates a target EntryPoint, or url, for an Action.
     *
     * @param $target \LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\EntryPoint
     * @return static
     **/
    public function setTarget($target): static {
        $this->properties['target'] = $target;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\EntryPoint
     **/
    public function getTarget() {
        return $this->properties['target'];
    }
    /**
     * Other co-agents that participated in the action indirectly. E.g. John wrote a
     * book with *Steve*.
     *
     * @param $participant \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setParticipant($participant): static {
        $this->properties['participant'] = $participant;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getParticipant() {
        return $this->properties['participant'];
    }
    /**
     * The object that helped the agent perform the action. E.g. John wrote a book with
     * *a pen*.
     *
     * @param $instrument \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setInstrument($instrument): static {
        $this->properties['instrument'] = $instrument;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getInstrument() {
        return $this->properties['instrument'];
    }
    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on behalf
     * of the provider. A provider may also serve as the seller.
     *
     * @param $provider \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setProvider($provider): static {
        $this->properties['provider'] = $provider;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getProvider() {
        return $this->properties['provider'];
    }
    /**
     * The object upon which the action is carried out, whose state is kept intact or
     * changed. Also known as the semantic roles patient, affected or undergoer (which
     * change their state) or theme (which doesn't). E.g. John read *a book*.
     *
     * @param $object \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setObject($object): static {
        $this->properties['object'] = $object;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getObject() {
        return $this->properties['object'];
    }
}
