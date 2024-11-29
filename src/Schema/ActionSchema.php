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
 * An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact expectation of each argument/role.\n\nSee also [blog post](http://blog.schema.org/2014/04/announcing-schemaorg-actions.html) and [Actions overview document](https://schema.org/docs/actions.html).
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ActionSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new ActionSchema('https://schema.org/', 'Action');
    }

    /**
     * Description of the process by which the action was performed.
     *
     * @param $actionProcess 
     **/
    public function setActionProcess($actionProcess) {
        $this->properties['actionProcess'] = $actionProcess;

        return $this;
    }

    /**
     * @return 
     **/
    public function getActionProcess() {
        return $this->properties['actionProcess'];
    }

    /**
     * The result produced in the action. E.g. John wrote *a book*.
     *
     * @param $result 
     **/
    public function setResult($result) {
        $this->properties['result'] = $result;

        return $this;
    }

    /**
     * @return 
     **/
    public function getResult() {
        return $this->properties['result'];
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
     * The direct performer or driver of the action (animate or inanimate). E.g. *John* wrote a book.
     *
     * @param $agent |
     **/
    public function setAgent($agent) {
        $this->properties['agent'] = $agent;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAgent() {
        return $this->properties['agent'];
    }

    /**
     * For failed actions, more information on the cause of the failure.
     *
     * @param $error 
     **/
    public function setError($error) {
        $this->properties['error'] = $error;

        return $this;
    }

    /**
     * @return 
     **/
    public function getError() {
        return $this->properties['error'];
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
     * Indicates the current disposition of the Action.
     *
     * @param $actionStatus 
     **/
    public function setActionStatus($actionStatus) {
        $this->properties['actionStatus'] = $actionStatus;

        return $this;
    }

    /**
     * @return 
     **/
    public function getActionStatus() {
        return $this->properties['actionStatus'];
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

    /**
     * Indicates a target EntryPoint, or url, for an Action.
     *
     * @param $target |
     **/
    public function setTarget($target) {
        $this->properties['target'] = $target;

        return $this;
    }

    /**
     * @return |
     **/
    public function getTarget() {
        return $this->properties['target'];
    }

    /**
     * Other co-agents that participated in the action indirectly. E.g. John wrote a book with *Steve*.
     *
     * @param $participant |
     **/
    public function setParticipant($participant) {
        $this->properties['participant'] = $participant;

        return $this;
    }

    /**
     * @return |
     **/
    public function getParticipant() {
        return $this->properties['participant'];
    }

    /**
     * The object that helped the agent perform the action. E.g. John wrote a book with *a pen*.
     *
     * @param $instrument 
     **/
    public function setInstrument($instrument) {
        $this->properties['instrument'] = $instrument;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInstrument() {
        return $this->properties['instrument'];
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     * @param $provider |
     **/
    public function setProvider($provider) {
        $this->properties['provider'] = $provider;

        return $this;
    }

    /**
     * @return |
     **/
    public function getProvider() {
        return $this->properties['provider'];
    }

    /**
     * The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). E.g. John read *a book*.
     *
     * @param $object 
     **/
    public function setObject($object) {
        $this->properties['object'] = $object;

        return $this;
    }

    /**
     * @return 
     **/
    public function getObject() {
        return $this->properties['object'];
    }


}
