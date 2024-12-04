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
 * A GeoCircle is a GeoShape representing a circular geographic area. As it is a
 * GeoShape
 * * *            it provides the simple textual property 'circle', but also
 * allows the combination of postalCode alongside geoRadius.
 * * *            The center of the circle can be indicated via the 'geoMidpoint'
 * property, or more approximately using 'address', 'postalCode'.
 * *
 *
 * @see https://schema.org/GeoCircle
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class GeoCircle extends GeoShape
{
    public static function factory(): GeoCircle
    {
        return new GeoCircle('https://schema.org/', 'GeoCircle');
    }

    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape, e.g. GeoCircle.
     *
     * @param $geoMidpoint 
     * @return static
     **/
    public function setGeoMidpoint($geoMidpoint): static {
        $this->properties['geoMidpoint'] = $geoMidpoint;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGeoMidpoint() {
        return $this->properties['geoMidpoint'];
    }
    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated
     * otherwise via Distance notation).
     *
     * @param $geoRadius ||
     * @return static
     **/
    public function setGeoRadius($geoRadius): static {
        $this->properties['geoRadius'] = $geoRadius;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getGeoRadius() {
        return $this->properties['geoRadius'];
    }
}
