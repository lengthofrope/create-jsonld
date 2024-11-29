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
 * A HyperToc represents a hypertext table of contents for complex media objects, such as [[VideoObject]], [[AudioObject]]. Items in the table of contents are indicated using the [[tocEntry]] property, and typed [[HyperTocEntry]]. For cases where the same larger work is split into multiple files, [[associatedMedia]] can be used on individual [[HyperTocEntry]] items.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class HyperTocSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new HyperTocSchema('https://schema.org/', 'HyperToc');
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     *
     * @param $associatedMedia 
     **/
    public function setAssociatedMedia($associatedMedia) {
        $this->properties['associatedMedia'] = $associatedMedia;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAssociatedMedia() {
        return $this->properties['associatedMedia'];
    }

    /**
     * Indicates a [[HyperTocEntry]] in a [[HyperToc]].
     *
     * @param $tocEntry 
     **/
    public function setTocEntry($tocEntry) {
        $this->properties['tocEntry'] = $tocEntry;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTocEntry() {
        return $this->properties['tocEntry'];
    }


}
