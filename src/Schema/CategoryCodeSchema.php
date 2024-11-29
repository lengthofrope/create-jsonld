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
 * A Category Code.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CategoryCodeSchema extends DefinedTermSchema
{
    public static function factory(): CategoryCodeSchema
    {
        return new CategoryCodeSchema('https://schema.org/', 'CategoryCode');
    }

    /**
     * A [[CategoryCodeSet]] that contains this category code.
     *
     * @param $inCodeSet |
     * @return static
     **/
    public function setInCodeSet($inCodeSet): static {
        $this->properties['inCodeSet'] = $inCodeSet;

        return $this;
    }

    /**
     * @return |
     **/
    public function getInCodeSet() {
        return $this->properties['inCodeSet'];
    }

    /**
     * A short textual code that uniquely identifies the value.
     *
     * @param $codeValue 
     * @return static
     **/
    public function setCodeValue($codeValue): static {
        $this->properties['codeValue'] = $codeValue;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCodeValue() {
        return $this->properties['codeValue'];
    }


}