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
 * OfferShippingDetails represents information about shipping destinations.
 *
 * * Multiple of these entities can be used to represent different shipping rates
 * for different destinations:
 *
 * * One entity for Alaska/Hawaii. A different one for continental US. A different
 * one for all France.
 *
 * * Multiple of these entities can be used to represent different shipping costs
 * and delivery times.
 *
 * * Two entities that are identical but differ in rate and time:
 *
 * * E.g. Cheaper and slower: $5 in 5-7 days
 * * or Fast and expensive: $15 in 1-2 days.
 *
 * @see https://schema.org/OfferShippingDetails
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class OfferShippingDetails extends StructuredValue
{
    public static function factory(): OfferShippingDetails
    {
        return new OfferShippingDetails('https://schema.org/', 'OfferShippingDetails');
    }

    /**
     * The shipping rate is the cost of shipping to the specified destination.
     * Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are most
     * appropriate.
     *
     * @param $shippingRate \LengthOfRope\JSONLD\Schema\MonetaryAmount
     * @return static
     **/
    public function setShippingRate($shippingRate): static {
        $this->properties['shippingRate'] = $shippingRate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount
     **/
    public function getShippingRate() {
        return $this->properties['shippingRate'];
    }
    /**
     * The membership program tier an Offer (or a PriceSpecification,
     * OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
     *
     * @param $validForMemberTier \LengthOfRope\JSONLD\Schema\MemberProgramTier
     * @return static
     **/
    public function setValidForMemberTier($validForMemberTier): static {
        $this->properties['validForMemberTier'] = $validForMemberTier;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MemberProgramTier
     **/
    public function getValidForMemberTier() {
        return $this->properties['validForMemberTier'];
    }
    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in
     * several ways, e.g. postalCode ranges.
     *
     * @param $shippingDestination \LengthOfRope\JSONLD\Schema\DefinedRegion
     * @return static
     **/
    public function setShippingDestination($shippingDestination): static {
        $this->properties['shippingDestination'] = $shippingDestination;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DefinedRegion
     **/
    public function getShippingDestination() {
        return $this->properties['shippingDestination'];
    }
    /**
     * Link to a page containing [[ShippingRateSettings]] and [[DeliveryTimeSettings]]
     * details.
     *
     * @param $shippingSettingsLink \LengthOfRope\JSONLD\DataType\URL
     * @return static
     **/
    public function setShippingSettingsLink($shippingSettingsLink): static {
        $this->properties['shippingSettingsLink'] = $shippingSettingsLink;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\URL
     **/
    public function getShippingSettingsLink() {
        return $this->properties['shippingSettingsLink'];
    }
    /**
     * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]]
     * (within the context of a [[shippingSettingsLink]] cross-reference).
     *
     * @param $transitTimeLabel \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setTransitTimeLabel($transitTimeLabel): static {
        $this->properties['transitTimeLabel'] = $transitTimeLabel;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getTransitTimeLabel() {
        return $this->properties['transitTimeLabel'];
    }
    /**
     * The total delay between the receipt of the order and the goods reaching the
     * final customer.
     *
     * @param $deliveryTime \LengthOfRope\JSONLD\Schema\ShippingDeliveryTime
     * @return static
     **/
    public function setDeliveryTime($deliveryTime): static {
        $this->properties['deliveryTime'] = $deliveryTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ShippingDeliveryTime
     **/
    public function getDeliveryTime() {
        return $this->properties['deliveryTime'];
    }
    /**
     * The height of the item.
     *
     * @param $height \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setHeight($height): static {
        $this->properties['height'] = $height;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getHeight() {
        return $this->properties['height'];
    }
    /**
     * The width of the item.
     *
     * @param $width \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setWidth($width): static {
        $this->properties['width'] = $width;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getWidth() {
        return $this->properties['width'];
    }
    /**
     * The weight of the product or person.
     *
     * @param $weight \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setWeight($weight): static {
        $this->properties['weight'] = $weight;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getWeight() {
        return $this->properties['weight'];
    }
    /**
     * The depth of the item.
     *
     * @param $depth \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Distance
     * @return static
     **/
    public function setDepth($depth): static {
        $this->properties['depth'] = $depth;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Distance
     **/
    public function getDepth() {
        return $this->properties['depth'];
    }
    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not
     * available.
     *
     * @param $doesNotShip \LengthOfRope\JSONLD\DataType\Boolean
     * @return static
     **/
    public function setDoesNotShip($doesNotShip): static {
        $this->properties['doesNotShip'] = $doesNotShip;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Boolean
     **/
    public function getDoesNotShip() {
        return $this->properties['doesNotShip'];
    }
    /**
     * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]]
     * (within the context of a [[shippingSettingsLink]] cross-reference).
     *
     * @param $shippingLabel \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setShippingLabel($shippingLabel): static {
        $this->properties['shippingLabel'] = $shippingLabel;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getShippingLabel() {
        return $this->properties['shippingLabel'];
    }
    /**
     * Indicates the origin of a shipment, i.e. where it should be coming from.
     *
     * @param $shippingOrigin \LengthOfRope\JSONLD\Schema\DefinedRegion
     * @return static
     **/
    public function setShippingOrigin($shippingOrigin): static {
        $this->properties['shippingOrigin'] = $shippingOrigin;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DefinedRegion
     **/
    public function getShippingOrigin() {
        return $this->properties['shippingOrigin'];
    }
}
