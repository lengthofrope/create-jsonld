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
 * A WebSite is a set of related web pages and other items typically served from a
 * single web domain and accessible via URLs.
 *
 * @see https://schema.org/WebSite
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class WebSite extends CreativeWork
{
    public static function factory(): WebSite
    {
        return new WebSite('https://schema.org/', 'WebSite');
    }

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial
     * publication. You can repeat this property to identify different formats of, or
     * the linking ISSN (ISSN-L) for, this serial publication.
     *
     * @param $issn \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setIssn($issn): static {
        $this->properties['issn'] = $issn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getIssn() {
        return $this->properties['issn'];
    }
}
