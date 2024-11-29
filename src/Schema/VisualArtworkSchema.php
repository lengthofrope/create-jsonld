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
class VisualArtworkSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new VisualArtworkSchema('https://schema.org/', 'VisualArtwork');
    }

    /**
     * A material used as a surface in some artwork, e.g. Canvas, Paper, Wood, Board, etc.
     *
     * @param $surface |
     **/
    public function setSurface($surface) {
        $this->properties['surface'] = $surface;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSurface() {
        return $this->properties['surface'];
    }

    /**
     * The individual who adds lettering, including speech balloons and sound effects, to artwork.
     *
     * @param $letterer 
     **/
    public function setLetterer($letterer) {
        $this->properties['letterer'] = $letterer;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLetterer() {
        return $this->properties['letterer'];
    }

    /**
     * The individual who traces over the pencil drawings in ink after pencils are complete.
     *
     * @param $inker 
     **/
    public function setInker($inker) {
        $this->properties['inker'] = $inker;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInker() {
        return $this->properties['inker'];
    }

    /**
     * The material used. (E.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
     *
     * @param $artMedium |
     **/
    public function setArtMedium($artMedium) {
        $this->properties['artMedium'] = $artMedium;

        return $this;
    }

    /**
     * @return |
     **/
    public function getArtMedium() {
        return $this->properties['artMedium'];
    }

    /**
     * The individual who adds color to inked drawings.
     *
     * @param $colorist 
     **/
    public function setColorist($colorist) {
        $this->properties['colorist'] = $colorist;

        return $this;
    }

    /**
     * @return 
     **/
    public function getColorist() {
        return $this->properties['colorist'];
    }

    /**
     * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
     *
     * @param $artEdition |
     **/
    public function setArtEdition($artEdition) {
        $this->properties['artEdition'] = $artEdition;

        return $this;
    }

    /**
     * @return |
     **/
    public function getArtEdition() {
        return $this->properties['artEdition'];
    }

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
     *
     * @param $artworkSurface |
     **/
    public function setArtworkSurface($artworkSurface) {
        $this->properties['artworkSurface'] = $artworkSurface;

        return $this;
    }

    /**
     * @return |
     **/
    public function getArtworkSurface() {
        return $this->properties['artworkSurface'];
    }

    /**
     * The primary artist for a work
    	in a medium other than pencils or digital line art--for example, if the
    	primary artwork is done in watercolors or digital paints.
     *
     * @param $artist 
     **/
    public function setArtist($artist) {
        $this->properties['artist'] = $artist;

        return $this;
    }

    /**
     * @return 
     **/
    public function getArtist() {
        return $this->properties['artist'];
    }

    /**
     * The height of the item.
     *
     * @param $height |
     **/
    public function setHeight($height) {
        $this->properties['height'] = $height;

        return $this;
    }

    /**
     * @return |
     **/
    public function getHeight() {
        return $this->properties['height'];
    }

    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
     *
     * @param $artform |
     **/
    public function setArtform($artform) {
        $this->properties['artform'] = $artform;

        return $this;
    }

    /**
     * @return |
     **/
    public function getArtform() {
        return $this->properties['artform'];
    }

    /**
     * The width of the item.
     *
     * @param $width |
     **/
    public function setWidth($width) {
        $this->properties['width'] = $width;

        return $this;
    }

    /**
     * @return |
     **/
    public function getWidth() {
        return $this->properties['width'];
    }

    /**
     * The individual who draws the primary narrative artwork.
     *
     * @param $penciler 
     **/
    public function setPenciler($penciler) {
        $this->properties['penciler'] = $penciler;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPenciler() {
        return $this->properties['penciler'];
    }

    /**
     * The weight of the product or person.
     *
     * @param $weight 
     **/
    public function setWeight($weight) {
        $this->properties['weight'] = $weight;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWeight() {
        return $this->properties['weight'];
    }

    /**
     * The depth of the item.
     *
     * @param $depth |
     **/
    public function setDepth($depth) {
        $this->properties['depth'] = $depth;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDepth() {
        return $this->properties['depth'];
    }


}
