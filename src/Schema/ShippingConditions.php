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
 * ShippingConditions represent a set of constraints and information about the
 * conditions of shipping a product. Such conditions may apply to only a subset of
 * the products being shipped, depending on aspects of the product like weight,
 * size, price, destination, and others. All the specified conditions must be met
 * for this ShippingConditions to apply.
 *
 * @see https://schema.org/ShippingConditions
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ShippingConditions extends StructuredValue
{
    public static function factory(): ShippingConditions
    {
        return new ShippingConditions('https://schema.org/', 'ShippingConditions');
    }

    /**
     * The shipping rate is the cost of shipping to the specified destination.
     * Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are most
     * appropriate.
     *
     * @param $shippingRate \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\Schema\ShippingRateSettings
     * @return static
     **/
    public function setShippingRate($shippingRate): static {
        $this->properties['shippingRate'] = $shippingRate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\Schema\ShippingRateSettings
     **/
    public function getShippingRate() {
        return $this->properties['shippingRate'];
    }
    /**
     * The weight of the product or person.
     *
     * @param $weight \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Mass
     * @return static
     **/
    public function setWeight($weight): static {
        $this->properties['weight'] = $weight;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Mass
     **/
    public function getWeight() {
        return $this->properties['weight'];
    }
    /**
     * Limited period during which these shipping conditions apply.
     *
     * @param $seasonalOverride \LengthOfRope\JSONLD\Schema\OpeningHoursSpecification
     * @return static
     **/
    public function setSeasonalOverride($seasonalOverride): static {
        $this->properties['seasonalOverride'] = $seasonalOverride;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\OpeningHoursSpecification
     **/
    public function getSeasonalOverride() {
        return $this->properties['seasonalOverride'];
    }
    /**
     * The depth of the item.
     *
     * @param $depth \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setDepth($depth): static {
        $this->properties['depth'] = $depth;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getDepth() {
        return $this->properties['depth'];
    }
    /**
     * Limits the number of items being shipped for which these conditions apply.
     *
     * @param $numItems \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setNumItems($numItems): static {
        $this->properties['numItems'] = $numItems;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getNumItems() {
        return $this->properties['numItems'];
    }
    /**
     * The width of the item.
     *
     * @param $width \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Distance
     * @return static
     **/
    public function setWidth($width): static {
        $this->properties['width'] = $width;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Distance
     **/
    public function getWidth() {
        return $this->properties['width'];
    }
    /**
     * The typical delay the order has been sent for delivery and the goods reach the
     * final customer.
     *
     * In the context of [[ShippingDeliveryTime]], use the [[QuantitativeValue]].
     * Typical properties: minValue, maxValue, unitCode (d for DAY).
     *
     * In the context of [[ShippingConditions]], use the [[ServicePeriod]]. It has a
     * duration (as a [[QuantitativeValue]]) and also business days and a cut-off time.
     *
     *
     * @param $transitTime \LengthOfRope\JSONLD\Schema\ServicePeriod|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setTransitTime($transitTime): static {
        $this->properties['transitTime'] = $transitTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ServicePeriod|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getTransitTime() {
        return $this->properties['transitTime'];
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
     * Indicates when shipping to a particular [[shippingDestination]] is not
     * available.
     *
     * @param $doesNotShip \LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setDoesNotShip($doesNotShip): static {
        $this->properties['doesNotShip'] = $doesNotShip;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getDoesNotShip() {
        return $this->properties['doesNotShip'];
    }
    /**
     * Minimum and maximum order value for which these shipping conditions are valid.
     *
     * @param $orderValue \LengthOfRope\JSONLD\Schema\MonetaryAmount
     * @return static
     **/
    public function setOrderValue($orderValue): static {
        $this->properties['orderValue'] = $orderValue;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount
     **/
    public function getOrderValue() {
        return $this->properties['orderValue'];
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
    /**
     * The height of the item.
     *
     * @param $height \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Distance
     * @return static
     **/
    public function setHeight($height): static {
        $this->properties['height'] = $height;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Distance
     **/
    public function getHeight() {
        return $this->properties['height'];
    }
}
