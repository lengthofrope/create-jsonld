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
 * An image file.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ImageObject extends MediaObject
{
    public static function factory(): ImageObject
    {
        return new ImageObject('https://schema.org/', 'ImageObject');
    }

    /**
     * Indicates whether this image is representative of the content of the page.
     *
     * @param $representativeOfPage 
     * @return static
     **/
    public function setRepresentativeOfPage($representativeOfPage): static {
        $this->properties['representativeOfPage'] = $representativeOfPage;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRepresentativeOfPage() {
        return $this->properties['representativeOfPage'];
    }

    /**
     * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     *
     * @param $caption |
     * @return static
     **/
    public function setCaption($caption): static {
        $this->properties['caption'] = $caption;

        return $this;
    }

    /**
     * @return |
     **/
    public function getCaption() {
        return $this->properties['caption'];
    }

    /**
     * exif data for this object.
     *
     * @param $exifData |
     * @return static
     **/
    public function setExifData($exifData): static {
        $this->properties['exifData'] = $exifData;

        return $this;
    }

    /**
     * @return |
     **/
    public function getExifData() {
        return $this->properties['exifData'];
    }

    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     *
     * @param $embeddedTextCaption 
     * @return static
     **/
    public function setEmbeddedTextCaption($embeddedTextCaption): static {
        $this->properties['embeddedTextCaption'] = $embeddedTextCaption;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEmbeddedTextCaption() {
        return $this->properties['embeddedTextCaption'];
    }


}