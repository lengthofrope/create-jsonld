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
 * (Eventually to be defined as) a supertype of GeoShape designed to accommodate definitions from Geo-Spatial best practices.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class GeospatialGeometrySchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new GeospatialGeometrySchema('https://schema.org/', 'GeospatialGeometry');
    }

    /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship).
     *
     * @param $geoEquals |
     **/
    public function setGeoEquals($geoEquals) {
        $this->properties['geoEquals'] = $geoEquals;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoEquals() {
        return $this->properties['geoEquals'];
    }

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoWithin |
     **/
    public function setGeoWithin($geoWithin) {
        $this->properties['geoWithin'] = $geoWithin;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoWithin() {
        return $this->properties['geoWithin'];
    }

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoCovers |
     **/
    public function setGeoCovers($geoCovers) {
        $this->properties['geoCovers'] = $geoCovers;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoCovers() {
        return $this->properties['geoCovers'];
    }

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoCrosses |
     **/
    public function setGeoCrosses($geoCrosses) {
        $this->properties['geoCrosses'] = $geoCrosses;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoCrosses() {
        return $this->properties['geoCrosses'];
    }

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoOverlaps |
     **/
    public function setGeoOverlaps($geoOverlaps) {
        $this->properties['geoOverlaps'] = $geoOverlaps;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoOverlaps() {
        return $this->properties['geoOverlaps'];
    }

    /**
     * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: "they have no point in common. They form a set of disconnected geometries." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     * @param $geoDisjoint |
     **/
    public function setGeoDisjoint($geoDisjoint) {
        $this->properties['geoDisjoint'] = $geoDisjoint;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoDisjoint() {
        return $this->properties['geoDisjoint'];
    }

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoContains |
     **/
    public function setGeoContains($geoContains) {
        $this->properties['geoContains'] = $geoContains;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoContains() {
        return $this->properties['geoContains'];
    }

    /**
     * Represents spatial relations in which two geometries (or the places they represent) touch: "they have at least one boundary point in common, but no interior points." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     * @param $geoTouches |
     **/
    public function setGeoTouches($geoTouches) {
        $this->properties['geoTouches'] = $geoTouches;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoTouches() {
        return $this->properties['geoTouches'];
    }

    /**
     * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoIntersects |
     **/
    public function setGeoIntersects($geoIntersects) {
        $this->properties['geoIntersects'] = $geoIntersects;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoIntersects() {
        return $this->properties['geoIntersects'];
    }

    /**
     * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param $geoCoveredBy |
     **/
    public function setGeoCoveredBy($geoCoveredBy) {
        $this->properties['geoCoveredBy'] = $geoCoveredBy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGeoCoveredBy() {
        return $this->properties['geoCoveredBy'];
    }


}
