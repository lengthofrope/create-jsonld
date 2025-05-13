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
 * ServicePeriod represents a duration with some constraints about cutoff time and
 * business days. This is used e.g. in shipping for handling times or transit time.
 *
 * @see https://schema.org/ServicePeriod
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ServicePeriod extends StructuredValue
{
    public static function factory(): ServicePeriod
    {
        return new ServicePeriod('https://schema.org/', 'ServicePeriod');
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param $duration \LengthOfRope\JSONLD\Schema\Duration|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setDuration($duration): static {
        $this->properties['duration'] = $duration;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Duration|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getDuration() {
        return $this->properties['duration'];
    }
    /**
     * Order cutoff time allows merchants to describe the time after which they will no
     * longer process orders received on that day. For orders processed after cutoff
     * time, one day gets added to the delivery time estimate. This property is
     * expected to be most typically used via the [[ShippingRateSettings]] publication
     * pattern. The time is indicated using the ISO-8601 Time format, e.g.
     * "23:30:00-05:00" would represent 6:30 pm Eastern Standard Time (EST) which is 5
     * hours behind Coordinated Universal Time (UTC).
     *
     * @param $cutoffTime \LengthOfRope\JSONLD\DataType\TypeTime
     * @return static
     **/
    public function setCutoffTime($cutoffTime): static {
        $this->properties['cutoffTime'] = $cutoffTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeTime
     **/
    public function getCutoffTime() {
        return $this->properties['cutoffTime'];
    }
    /**
     * Days of the week when the merchant typically operates, indicated via opening
     * hours markup.
     *
     * @param $businessDays \LengthOfRope\JSONLD\Schema\OpeningHoursSpecification|\LengthOfRope\JSONLD\Schema\DayOfWeek
     * @return static
     **/
    public function setBusinessDays($businessDays): static {
        $this->properties['businessDays'] = $businessDays;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\OpeningHoursSpecification|\LengthOfRope\JSONLD\Schema\DayOfWeek
     **/
    public function getBusinessDays() {
        return $this->properties['businessDays'];
    }
}
