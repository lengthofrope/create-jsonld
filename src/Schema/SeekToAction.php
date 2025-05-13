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
 * This is the [[Action]] of navigating to a specific [[startOffset]] timestamp
 * within a [[VideoObject]], typically represented with a URL template structure.
 *
 * @see https://schema.org/SeekToAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SeekToAction extends Action
{
    public static function factory(): SeekToAction
    {
        return new SeekToAction('https://schema.org/', 'SeekToAction');
    }

    /**
     * The start time of the clip expressed as the number of seconds from the beginning
     * of the work.
     *
     * @param $startOffset \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\HyperTocEntry
     * @return static
     **/
    public function setStartOffset($startOffset): static {
        $this->properties['startOffset'] = $startOffset;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber|\LengthOfRope\JSONLD\Schema\HyperTocEntry
     **/
    public function getStartOffset() {
        return $this->properties['startOffset'];
    }
}
