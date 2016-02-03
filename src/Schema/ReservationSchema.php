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
 * Describes a reservation for travel, dining or an event. Some reservations require tickets.Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, restaurant reservations, flights, or rental cars, use http://schema.org/Offer.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ReservationSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new ReservationSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as a booking agent.
     **/
    private $bookingAgent;
    public function setBookingAgent($bookingAgent) {
        $this->bookingAgent = $bookingAgent;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     **/
    public function getBookingAgent() {
        return $this->bookingAgent;
    }

    /**
     * The date and time the reservation was booked.
     **/
    private $bookingTime;
    public function setBookingTime($bookingTime) {
        $this->bookingTime = $bookingTime;

        return $this;
    }

    /**
     * @return DateTimeSchema     **/
    public function getBookingTime() {
        return $this->bookingTime;
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     **/
    private $broker;
    public function setBroker($broker) {
        $this->broker = $broker;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     **/
    public function getBroker() {
        return $this->broker;
    }

    /**
     * The date and time the reservation was modified.
     **/
    private $modifiedTime;
    public function setModifiedTime($modifiedTime) {
        $this->modifiedTime = $modifiedTime;

        return $this;
    }

    /**
     * @return DateTimeSchema     **/
    public function getModifiedTime() {
        return $this->modifiedTime;
    }

    /**
     * The currency (in 3-letter ISO 4217 format) of the price or a price component, when attached to PriceSpecification and its subtypes.
     **/
    private $priceCurrency;
    public function setPriceCurrency($priceCurrency) {
        $this->priceCurrency = $priceCurrency;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPriceCurrency() {
        return $this->priceCurrency;
    }

    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
     **/
    private $programMembershipUsed;
    public function setProgramMembershipUsed($programMembershipUsed) {
        $this->programMembershipUsed = $programMembershipUsed;

        return $this;
    }

    /**
     * @return ProgramMembershipSchema     **/
    public function getProgramMembershipUsed() {
        return $this->programMembershipUsed;
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     **/
    private $provider;
    public function setProvider($provider) {
        $this->provider = $provider;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     **/
    public function getProvider() {
        return $this->provider;
    }

    /**
     * The thing -- flight, event, restaurant,etc. being reserved.
     **/
    private $reservationFor;
    public function setReservationFor($reservationFor) {
        $this->reservationFor = $reservationFor;

        return $this;
    }

    /**
     * @return ThingSchema     **/
    public function getReservationFor() {
        return $this->reservationFor;
    }

    /**
     * A unique identifier for the reservation.
     **/
    private $reservationId;
    public function setReservationId($reservationId) {
        $this->reservationId = $reservationId;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getReservationId() {
        return $this->reservationId;
    }

    /**
     * The current status of the reservation.
     **/
    private $reservationStatus;
    public function setReservationStatus($reservationStatus) {
        $this->reservationStatus = $reservationStatus;

        return $this;
    }

    /**
     * @return ReservationStatusTypeSchema     **/
    public function getReservationStatus() {
        return $this->reservationStatus;
    }

    /**
     * A ticket associated with the reservation.
     **/
    private $reservedTicket;
    public function setReservedTicket($reservedTicket) {
        $this->reservedTicket = $reservedTicket;

        return $this;
    }

    /**
     * @return TicketSchema     **/
    public function getReservedTicket() {
        return $this->reservedTicket;
    }

    /**
     * The total price for the reservation or ticket, including applicable taxes, shipping, etc.
     **/
    private $totalPrice;
    public function setTotalPrice($totalPrice) {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return NumberSchema|TextSchema|PriceSpecificationSchema     **/
    public function getTotalPrice() {
        return $this->totalPrice;
    }

    /**
     * The person or organization the reservation or ticket is for.
     **/
    private $underName;
    public function setUnderName($underName) {
        $this->underName = $underName;

        return $this;
    }

    /**
     * @return PersonSchema|OrganizationSchema     **/
    public function getUnderName() {
        return $this->underName;
    }


}
