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
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class TicketSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new TicketSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The date the ticket was issued.
     **/
    private $dateIssued;
    public function setDateIssued($dateIssued) {
        $this->dateIssued = $dateIssued;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getDateIssued() {
        return $this->dateIssued;
    }

    /**
     * The organization issuing the ticket or permit.
     **/
    private $issuedBy;
    public function setIssuedBy($issuedBy) {
        $this->issuedBy = $issuedBy;

        return $this;
    }

    /**
     * @return OrganizationSchema     
     **/
    public function getIssuedBy() {
        return $this->issuedBy;
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
     * @return TextSchema     
     **/
    public function getPriceCurrency() {
        return $this->priceCurrency;
    }

    /**
     * The unique identifier for the ticket.
     **/
    private $ticketNumber;
    public function setTicketNumber($ticketNumber) {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getTicketNumber() {
        return $this->ticketNumber;
    }

    /**
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
     **/
    private $ticketToken;
    public function setTicketToken($ticketToken) {
        $this->ticketToken = $ticketToken;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     
     **/
    public function getTicketToken() {
        return $this->ticketToken;
    }

    /**
     * The seat associated with the ticket.
     **/
    private $ticketedSeat;
    public function setTicketedSeat($ticketedSeat) {
        $this->ticketedSeat = $ticketedSeat;

        return $this;
    }

    /**
     * @return SeatSchema     
     **/
    public function getTicketedSeat() {
        return $this->ticketedSeat;
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
     * @return NumberSchema|TextSchema|PriceSpecificationSchema     
     **/
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
     * @return PersonSchema|OrganizationSchema     
     **/
    public function getUnderName() {
        return $this->underName;
    }


}
