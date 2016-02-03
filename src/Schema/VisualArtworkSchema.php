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
 * A work of art that is primarily visual in character.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class VisualArtworkSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new VisualArtworkSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
     **/
    private $artEdition;
    public function setArtEdition($artEdition) {
        $this->artEdition = $artEdition;

        return $this;
    }

    /**
     * @return TextSchema|IntegerSchema     **/
    public function getArtEdition() {
        return $this->artEdition;
    }

    /**
     * The material used. (e.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
     **/
    private $artMedium;
    public function setArtMedium($artMedium) {
        $this->artMedium = $artMedium;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getArtMedium() {
        return $this->artMedium;
    }

    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
     **/
    private $artform;
    public function setArtform($artform) {
        $this->artform = $artform;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getArtform() {
        return $this->artform;
    }

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
     **/
    private $artworkSurface;
    public function setArtworkSurface($artworkSurface) {
        $this->artworkSurface = $artworkSurface;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getArtworkSurface() {
        return $this->artworkSurface;
    }

    /**
     * The depth of the item.
     **/
    private $depth;
    public function setDepth($depth) {
        $this->depth = $depth;

        return $this;
    }

    /**
     * @return DistanceSchema|QuantitativeValueSchema     **/
    public function getDepth() {
        return $this->depth;
    }

    /**
     * The height of the item.
     **/
    private $height;
    public function setHeight($height) {
        $this->height = $height;

        return $this;
    }

    /**
     * @return DistanceSchema|QuantitativeValueSchema     **/
    public function getHeight() {
        return $this->height;
    }

    /**
     * e.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.
     **/
    private $material;
    public function setMaterial($material) {
        $this->material = $material;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getMaterial() {
        return $this->material;
    }

    /**
     * e.g. Canvas, Paper, Wood, Board, etc.
     **/
    private $surface;
    public function setSurface($surface) {
        $this->surface = $surface;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getSurface() {
        return $this->surface;
    }

    /**
     * The width of the item.
     **/
    private $width;
    public function setWidth($width) {
        $this->width = $width;

        return $this;
    }

    /**
     * @return DistanceSchema|QuantitativeValueSchema     **/
    public function getWidth() {
        return $this->width;
    }


}
