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
 * Describes a reservation for travel, dining or an event. Some reservations
 * require tickets.
 *
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of reservations.
 * For offers of tickets, restaurant reservations, flights, or rental cars, use
 * [[Offer]].
 *
 * @see https://schema.org/Reservation
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Reservation extends Intangible
{
    public static function factory(): Reservation
    {
        return new Reservation('https://schema.org/', 'Reservation');
    }

    /**
     * A unique identifier for the reservation.
     *
     * @param $reservationId \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setReservationId($reservationId): static {
        $this->properties['reservationId'] = $reservationId;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getReservationId() {
        return $this->properties['reservationId'];
    }
    /**
     * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as a
     * booking agent.
     *
     * @param $bookingAgent \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setBookingAgent($bookingAgent): static {
        $this->properties['bookingAgent'] = $bookingAgent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getBookingAgent() {
        return $this->properties['bookingAgent'];
    }
    /**
     * The total price for the reservation or ticket, including applicable taxes,
     * shipping, etc.
     *
     * Usage guidelines:
     *
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     *
     * @param $totalPrice \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\PriceSpecification
     * @return static
     **/
    public function setTotalPrice($totalPrice): static {
        $this->properties['totalPrice'] = $totalPrice;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\PriceSpecification
     **/
    public function getTotalPrice() {
        return $this->properties['totalPrice'];
    }
    /**
     * The date and time the reservation was modified.
     *
     * @param $modifiedTime \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setModifiedTime($modifiedTime): static {
        $this->properties['modifiedTime'] = $modifiedTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getModifiedTime() {
        return $this->properties['modifiedTime'];
    }
    /**
     * The current status of the reservation.
     *
     * @param $reservationStatus \LengthOfRope\JSONLD\Schema\ReservationStatusType
     * @return static
     **/
    public function setReservationStatus($reservationStatus): static {
        $this->properties['reservationStatus'] = $reservationStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ReservationStatusType
     **/
    public function getReservationStatus() {
        return $this->properties['reservationStatus'];
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
     * The person or organization the reservation or ticket is for.
     *
     * @param $underName \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setUnderName($underName): static {
        $this->properties['underName'] = $underName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getUnderName() {
        return $this->properties['underName'];
    }
    /**
     * The date and time the reservation was booked.
     *
     * @param $bookingTime \LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setBookingTime($bookingTime): static {
        $this->properties['bookingTime'] = $bookingTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getBookingTime() {
        return $this->properties['bookingTime'];
    }
    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most
     * cases a broker never acquires or releases ownership of a product or service
     * involved in an exchange.  If it is not clear whether an entity is a broker,
     * seller, or buyer, the latter two terms are preferred.
     *
     * @param $broker \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     * @return static
     **/
    public function setBroker($broker): static {
        $this->properties['broker'] = $broker;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person
     **/
    public function getBroker() {
        return $this->properties['broker'];
    }
    /**
     * A ticket associated with the reservation.
     *
     * @param $reservedTicket \LengthOfRope\JSONLD\Schema\Ticket
     * @return static
     **/
    public function setReservedTicket($reservedTicket): static {
        $this->properties['reservedTicket'] = $reservedTicket;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Ticket
     **/
    public function getReservedTicket() {
        return $this->properties['reservedTicket'];
    }
    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to
     * the reservation.
     *
     * @param $programMembershipUsed \LengthOfRope\JSONLD\Schema\ProgramMembership
     * @return static
     **/
    public function setProgramMembershipUsed($programMembershipUsed): static {
        $this->properties['programMembershipUsed'] = $programMembershipUsed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ProgramMembership
     **/
    public function getProgramMembershipUsed() {
        return $this->properties['programMembershipUsed'];
    }
    /**
     * The currency of the price, or a price component when attached to
     * [[PriceSpecification]] and its subtypes.
     *
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and
     * other currency types, e.g. "Ithaca HOUR".
     *
     * @param $priceCurrency \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setPriceCurrency($priceCurrency): static {
        $this->properties['priceCurrency'] = $priceCurrency;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getPriceCurrency() {
        return $this->properties['priceCurrency'];
    }
    /**
     * The thing -- flight, event, restaurant, etc. being reserved.
     *
     * @param $reservationFor \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setReservationFor($reservationFor): static {
        $this->properties['reservationFor'] = $reservationFor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getReservationFor() {
        return $this->properties['reservationFor'];
    }
}
