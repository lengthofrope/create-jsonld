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
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 *
 * @see https://schema.org/Ticket
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Ticket extends Intangible
{
    public static function factory(): Ticket
    {
        return new Ticket('https://schema.org/', 'Ticket');
    }

    /**
     * The organization issuing the item, for example a [[Permit]], [[Ticket]], or
     * [[Certification]].
     *
     * @param $issuedBy \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setIssuedBy($issuedBy): static {
        $this->properties['issuedBy'] = $issuedBy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getIssuedBy() {
        return $this->properties['issuedBy'];
    }
    /**
     * The person or organization the reservation or ticket is for.
     *
     * @param $underName \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setUnderName($underName): static {
        $this->properties['underName'] = $underName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getUnderName() {
        return $this->properties['underName'];
    }
    /**
     * The unique identifier for the ticket.
     *
     * @param $ticketNumber \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTicketNumber($ticketNumber): static {
        $this->properties['ticketNumber'] = $ticketNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTicketNumber() {
        return $this->properties['ticketNumber'];
    }
    /**
     * The seat associated with the ticket.
     *
     * @param $ticketedSeat \LengthOfRope\JSONLD\Schema\Seat
     * @return static
     **/
    public function setTicketedSeat($ticketedSeat): static {
        $this->properties['ticketedSeat'] = $ticketedSeat;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Seat
     **/
    public function getTicketedSeat() {
        return $this->properties['ticketedSeat'];
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
     * @param $totalPrice \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\PriceSpecification|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setTotalPrice($totalPrice): static {
        $this->properties['totalPrice'] = $totalPrice;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\PriceSpecification|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getTotalPrice() {
        return $this->properties['totalPrice'];
    }
    /**
     * The date the ticket was issued.
     *
     * @param $dateIssued \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setDateIssued($dateIssued): static {
        $this->properties['dateIssued'] = $dateIssued;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getDateIssued() {
        return $this->properties['dateIssued'];
    }
    /**
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
     *
     * @param $ticketToken \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setTicketToken($ticketToken): static {
        $this->properties['ticketToken'] = $ticketToken;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getTicketToken() {
        return $this->properties['ticketToken'];
    }
}
