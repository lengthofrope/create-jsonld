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
 * An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact expectation of each argument/role.
      <br/><br/>See also <a href="http://blog.schema.org/2014/04/announcing-schemaorg-actions.html">blog post</a>
      and <a href="http://schema.org/docs/actions.html">Actions overview document</a>.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ActionSchema extends ThingSchema
{
    public static function factory()
    {
        return new ActionSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * Indicates the current disposition of the Action.
     **/
    private $actionStatus;
    public function setActionStatus($actionStatus) {
        $this->actionStatus = $actionStatus;

        return $this;
    }

    /**
     * @return ActionStatusTypeSchema     **/
    public function getActionStatus() {
        return $this->actionStatus;
    }

    /**
     * The direct performer or driver of the action (animate or inanimate). e.g. *John* wrote a book.
     **/
    private $agent;
    public function setAgent($agent) {
        $this->agent = $agent;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     **/
    public function getAgent() {
        return $this->agent;
    }

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to *December*.

Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     **/
    private $endTime;
    public function setEndTime($endTime) {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @return DateTimeSchema     **/
    public function getEndTime() {
        return $this->endTime;
    }

    /**
     * For failed actions, more information on the cause of the failure.
     **/
    private $error;
    public function setError($error) {
        $this->error = $error;

        return $this;
    }

    /**
     * @return ThingSchema     **/
    public function getError() {
        return $this->error;
    }

    /**
     * The object that helped the agent perform the action. e.g. John wrote a book with *a pen*.
     **/
    private $instrument;
    public function setInstrument($instrument) {
        $this->instrument = $instrument;

        return $this;
    }

    /**
     * @return ThingSchema     **/
    public function getInstrument() {
        return $this->instrument;
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
     * The object upon the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). e.g. John read *a book*.
     **/
    private $object;
    public function setObject($object) {
        $this->object = $object;

        return $this;
    }

    /**
     * @return ThingSchema     **/
    public function getObject() {
        return $this->object;
    }

    /**
     * Other co-agents that participated in the action indirectly. e.g. John wrote a book with *Steve*.
     **/
    private $participant;
    public function setParticipant($participant) {
        $this->participant = $participant;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     **/
    public function getParticipant() {
        return $this->participant;
    }

    /**
     * The result produced in the action. e.g. John wrote *a book*.
     **/
    private $result;
    public function setResult($result) {
        $this->result = $result;

        return $this;
    }

    /**
     * @return ThingSchema     **/
    public function getResult() {
        return $this->result;
    }

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from *January* to December.

Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     **/
    private $startTime;
    public function setStartTime($startTime) {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * @return DateTimeSchema     **/
    public function getStartTime() {
        return $this->startTime;
    }

    /**
     * Indicates a target EntryPoint for an Action.
     **/
    private $target;
    public function setTarget($target) {
        $this->target = $target;

        return $this;
    }

    /**
     * @return EntryPointSchema     **/
    public function getTarget() {
        return $this->target;
    }


}
