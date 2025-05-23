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
 * An audio file.
 *
 * @see https://schema.org/AudioObject
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class AudioObject extends MediaObject
{
    public static function factory(): AudioObject
    {
        return new AudioObject('https://schema.org/', 'AudioObject');
    }

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that
     * object.
     *
     * @param $transcript \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTranscript($transcript): static {
        $this->properties['transcript'] = $transcript;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTranscript() {
        return $this->properties['transcript'];
    }
    /**
     * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
     *
     * @param $embeddedTextCaption \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setEmbeddedTextCaption($embeddedTextCaption): static {
        $this->properties['embeddedTextCaption'] = $embeddedTextCaption;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getEmbeddedTextCaption() {
        return $this->properties['embeddedTextCaption'];
    }
    /**
     * The caption for this object. For downloadable machine formats (closed caption,
     * subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     *
     * @param $caption \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\MediaObject
     * @return static
     **/
    public function setCaption($caption): static {
        $this->properties['caption'] = $caption;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\MediaObject
     **/
    public function getCaption() {
        return $this->properties['caption'];
    }
}
