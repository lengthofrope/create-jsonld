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
 * When a single product is associated with multiple offers (for example, the same
 * pair of shoes is offered by different merchants), then AggregateOffer can be
 * used.
 *
 * Note: AggregateOffers are normally expected to associate multiple offers that
 * all share the same defined [[businessFunction]] value, or default to
 * http://purl.org/goodrelations/v1#Sell if businessFunction is not explicitly
 * defined.
 *
 * @see https://schema.org/AggregateOffer
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AggregateOffer extends Offer
{
    public static function factory(): AggregateOffer
    {
        return new AggregateOffer('https://schema.org/', 'AggregateOffer');
    }

    /**
     * The lowest price of all offers available.
     *
     * Usage guidelines:
     *
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     *
     * @param $lowPrice \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\Number
     * @return static
     **/
    public function setLowPrice($lowPrice): static {
        $this->properties['lowPrice'] = $lowPrice;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\Number
     **/
    public function getLowPrice() {
        return $this->properties['lowPrice'];
    }
    /**
     * The highest price of all offers available.
     *
     * Usage guidelines:
     *
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     *
     * @param $highPrice \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\Number
     * @return static
     **/
    public function setHighPrice($highPrice): static {
        $this->properties['highPrice'] = $highPrice;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\Number
     **/
    public function getHighPrice() {
        return $this->properties['highPrice'];
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
     * The number of offers for the product.
     *
     * @param $offerCount \LengthOfRope\JSONLD\DataType\Integer
     * @return static
     **/
    public function setOfferCount($offerCount): static {
        $this->properties['offerCount'] = $offerCount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Integer
     **/
    public function getOfferCount() {
        return $this->properties['offerCount'];
    }
}
