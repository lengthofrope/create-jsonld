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
 * The act of authoring written creative content.
 *
 * @see https://schema.org/WriteAction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class WriteAction extends CreateAction
{
    public static function factory(): WriteAction
    {
        return new WriteAction('https://schema.org/', 'WriteAction');
    }

    /**
     * The language of the content or performance or used in an action. Please use one
     * of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     * @param $inLanguage \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setInLanguage($inLanguage): static {
        $this->properties['inLanguage'] = $inLanguage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Language|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getInLanguage() {
        return $this->properties['inLanguage'];
    }
    /**
     * A sub property of instrument. The language used on this action.
     *
     * @param $language \LengthOfRope\JSONLD\Schema\Language
     * @return static
     **/
    public function setLanguage($language): static {
        $this->properties['language'] = $language;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Language
     **/
    public function getLanguage() {
        return $this->properties['language'];
    }
}
