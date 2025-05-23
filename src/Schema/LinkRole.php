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
 * A Role that represents a Web link, e.g. as expressed via the 'url' property. Its
 * linkRelationship property can indicate URL-based and plain textual link types,
 * e.g. those in IANA link registry or others such as 'amphtml'. This structure
 * provides a placeholder where details from HTML's link element can be represented
 * outside of HTML, e.g. in JSON-LD feeds.
 *
 * @see https://schema.org/LinkRole
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class LinkRole extends Role
{
    public static function factory(): LinkRole
    {
        return new LinkRole('https://schema.org/', 'LinkRole');
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
     * Indicates the relationship type of a Web link.
     *
     * @param $linkRelationship \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setLinkRelationship($linkRelationship): static {
        $this->properties['linkRelationship'] = $linkRelationship;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getLinkRelationship() {
        return $this->properties['linkRelationship'];
    }
}
