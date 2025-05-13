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
 * A ShippingRateSettings represents re-usable pieces of shipping information. It
 * is designed for publication on an URL that may be referenced via the
 * [[shippingSettingsLink]] property of an [[OfferShippingDetails]]. Several
 * occurrences can be published, distinguished and matched (i.e.
 * identified/referenced) by their different values for [[shippingLabel]].
 *
 * @see https://schema.org/ShippingRateSettings
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ShippingRateSettings extends StructuredValue
{
    public static function factory(): ShippingRateSettings
    {
        return new ShippingRateSettings('https://schema.org/', 'ShippingRateSettings');
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
     * A monetary value above (or at) which the shipping rate becomes free. Intended to
     * be used via an [[OfferShippingDetails]] with [[shippingSettingsLink]] matching
     * this [[ShippingRateSettings]].
     *
     * @param $freeShippingThreshold \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\Schema\DeliveryChargeSpecification
     * @return static
     **/
    public function setFreeShippingThreshold($freeShippingThreshold): static {
        $this->properties['freeShippingThreshold'] = $freeShippingThreshold;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\Schema\DeliveryChargeSpecification
     **/
    public function getFreeShippingThreshold() {
        return $this->properties['freeShippingThreshold'];
    }
    /**
     * Fraction of the weight that is used to compute the shipping price.
     *
     * @param $weightPercentage \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setWeightPercentage($weightPercentage): static {
        $this->properties['weightPercentage'] = $weightPercentage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getWeightPercentage() {
        return $this->properties['weightPercentage'];
    }
    /**
     * This can be marked 'true' to indicate that some published
     * [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to
     * all [[OfferShippingDetails]] published by the same merchant, when referenced by
     * a [[shippingSettingsLink]] in those settings. It is not meaningful to use a
     * 'true' value for this property alongside a transitTimeLabel (for
     * [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since
     * this property is for use with unlabelled settings.
     *
     * @param $isUnlabelledFallback \LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setIsUnlabelledFallback($isUnlabelledFallback): static {
        $this->properties['isUnlabelledFallback'] = $isUnlabelledFallback;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getIsUnlabelledFallback() {
        return $this->properties['isUnlabelledFallback'];
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
     * Fraction of the value of the order that is charged as shipping cost.
     *
     * @param $orderPercentage \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setOrderPercentage($orderPercentage): static {
        $this->properties['orderPercentage'] = $orderPercentage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getOrderPercentage() {
        return $this->properties['orderPercentage'];
    }
}
