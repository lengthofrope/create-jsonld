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
 * A trip or journey. An itinerary of visits to one or more places.
 *
 * @see https://schema.org/Trip
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Trip extends Intangible
{
    public static function factory(): Trip
    {
        return new Trip('https://schema.org/', 'Trip');
    }

    /**
     * The expected departure time.
     *
     * @param $departureTime \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Time
     * @return static
     **/
    public function setDepartureTime($departureTime): static {
        $this->properties['departureTime'] = $departureTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Time
     **/
    public function getDepartureTime() {
        return $this->properties['departureTime'];
    }
    /**
     * Identifies that this [[Trip]] is a subTrip of another Trip.  For example Day 1,
     * Day 2, etc. of a multi-day trip.
     *
     * @param $partOfTrip \LengthOfRope\JSONLD\Schema\Trip
     * @return static
     **/
    public function setPartOfTrip($partOfTrip): static {
        $this->properties['partOfTrip'] = $partOfTrip;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Trip
     **/
    public function getPartOfTrip() {
        return $this->properties['partOfTrip'];
    }
    /**
     * The location of origin of the trip, prior to any destination(s).
     *
     * @param $tripOrigin \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setTripOrigin($tripOrigin): static {
        $this->properties['tripOrigin'] = $tripOrigin;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getTripOrigin() {
        return $this->properties['tripOrigin'];
    }
    /**
     * Destination(s) ( [[Place]] ) that make up a trip. For a trip where destination
     * order is important use [[ItemList]] to specify that order (see examples).
     *
     * @param $itinerary \LengthOfRope\JSONLD\Schema\ItemList|\LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setItinerary($itinerary): static {
        $this->properties['itinerary'] = $itinerary;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ItemList|\LengthOfRope\JSONLD\Schema\Place
     **/
    public function getItinerary() {
        return $this->properties['itinerary'];
    }
    /**
     * The expected arrival time.
     *
     * @param $arrivalTime \LengthOfRope\JSONLD\DataType\Time|\LengthOfRope\JSONLD\DataType\DateTime
     * @return static
     **/
    public function setArrivalTime($arrivalTime): static {
        $this->properties['arrivalTime'] = $arrivalTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Time|\LengthOfRope\JSONLD\DataType\DateTime
     **/
    public function getArrivalTime() {
        return $this->properties['arrivalTime'];
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
     * Identifies a [[Trip]] that is a subTrip of this Trip.  For example Day 1, Day 2,
     * etc. of a multi-day trip.
     *
     * @param $subTrip \LengthOfRope\JSONLD\Schema\Trip
     * @return static
     **/
    public function setSubTrip($subTrip): static {
        $this->properties['subTrip'] = $subTrip;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Trip
     **/
    public function getSubTrip() {
        return $this->properties['subTrip'];
    }
}
