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
 * A word, name, acronym, phrase, etc. with a formal definition. Often used in the context of category or subject classification, glossaries or dictionaries, product or creative work types, etc. Use the name property for the term being defined, use termCode if the term has an alpha-numeric code allocated, use description to provide the definition of the term.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DefinedTermSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new DefinedTermSchema('https://schema.org/', 'DefinedTerm');
    }

    /**
     * A [[DefinedTermSet]] that contains this term.
     *
     * @param $inDefinedTermSet |
     **/
    public function setInDefinedTermSet($inDefinedTermSet) {
        $this->properties['inDefinedTermSet'] = $inDefinedTermSet;

        return $this;
    }

    /**
     * @return |
     **/
    public function getInDefinedTermSet() {
        return $this->properties['inDefinedTermSet'];
    }

    /**
     * A code that identifies this [[DefinedTerm]] within a [[DefinedTermSet]].
     *
     * @param $termCode 
     **/
    public function setTermCode($termCode) {
        $this->properties['termCode'] = $termCode;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTermCode() {
        return $this->properties['termCode'];
    }


}
