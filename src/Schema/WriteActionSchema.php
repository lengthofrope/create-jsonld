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
 * The act of authoring written creative content.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class WriteActionSchema extends CreateActionSchema
{
    public static function factory()
    {
        return new WriteActionSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the <a href='http://tools.ietf.org/html/bcp47'>IETF BCP 47 standard</a>.
     **/
    private $inLanguage;
    public function setInLanguage($inLanguage) {
        $this->inLanguage = $inLanguage;

        return $this;
    }

    /**
     * @return TextSchema|LanguageSchema     
     **/
    public function getInLanguage() {
        return $this->inLanguage;
    }

    /**
     * A sub property of instrument. The language used on this action.
     **/
    private $language;
    public function setLanguage($language) {
        $this->language = $language;

        return $this;
    }

    /**
     * @return LanguageSchema     
     **/
    public function getLanguage() {
        return $this->language;
    }


}
