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
 * Indicates a range of postal codes, usually defined as the set of valid codes between [[postalCodeBegin]] and [[postalCodeEnd]], inclusively.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class PostalCodeRangeSpecificationSchema extends StructuredValueSchema
{
    public static function factory(): PostalCodeRangeSpecificationSchema
    {
        return new PostalCodeRangeSpecificationSchema('https://schema.org/', 'PostalCodeRangeSpecification');
    }

    /**
     * Last postal code in the range (included). Needs to be after [[postalCodeBegin]].
     *
     * @param $postalCodeEnd 
     * @return static
     **/
    public function setPostalCodeEnd($postalCodeEnd): static {
        $this->properties['postalCodeEnd'] = $postalCodeEnd;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPostalCodeEnd() {
        return $this->properties['postalCodeEnd'];
    }

    /**
     * First postal code in a range (included).
     *
     * @param $postalCodeBegin 
     * @return static
     **/
    public function setPostalCodeBegin($postalCodeBegin): static {
        $this->properties['postalCodeBegin'] = $postalCodeBegin;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPostalCodeBegin() {
        return $this->properties['postalCodeBegin'];
    }


}
