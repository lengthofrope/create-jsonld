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
 * A DeliveryTimeSettings represents re-usable pieces of shipping information, relating to timing. It is designed for publication on an URL that may be referenced via the [[shippingSettingsLink]] property of an [[OfferShippingDetails]]. Several occurrences can be published, distinguished (and identified/referenced) by their different values for [[transitTimeLabel]].
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DeliveryTimeSettingsSchema extends StructuredValueSchema
{
    public static function factory()
    {
        return new DeliveryTimeSettingsSchema('https://schema.org/', 'DeliveryTimeSettings');
    }

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
     *
     * @param $shippingDestination 
     **/
    public function setShippingDestination($shippingDestination) {
        $this->properties['shippingDestination'] = $shippingDestination;

        return $this;
    }

    /**
     * @return 
     **/
    public function getShippingDestination() {
        return $this->properties['shippingDestination'];
    }

    /**
     * This can be marked 'true' to indicate that some published [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to all [[OfferShippingDetails]] published by the same merchant, when referenced by a [[shippingSettingsLink]] in those settings. It is not meaningful to use a 'true' value for this property alongside a transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since this property is for use with unlabelled settings.
     *
     * @param $isUnlabelledFallback 
     **/
    public function setIsUnlabelledFallback($isUnlabelledFallback) {
        $this->properties['isUnlabelledFallback'] = $isUnlabelledFallback;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsUnlabelledFallback() {
        return $this->properties['isUnlabelledFallback'];
    }

    /**
     * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     *
     * @param $transitTimeLabel 
     **/
    public function setTransitTimeLabel($transitTimeLabel) {
        $this->properties['transitTimeLabel'] = $transitTimeLabel;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTransitTimeLabel() {
        return $this->properties['transitTimeLabel'];
    }

    /**
     * The total delay between the receipt of the order and the goods reaching the final customer.
     *
     * @param $deliveryTime 
     **/
    public function setDeliveryTime($deliveryTime) {
        $this->properties['deliveryTime'] = $deliveryTime;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDeliveryTime() {
        return $this->properties['deliveryTime'];
    }


}
