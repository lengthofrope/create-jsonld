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
 * A business entity type is a conceptual entity representing the legal form, the
 * size, the main line of business, the position in the value chain, or any
 * combination thereof, of an organization or business person.
 *
 * Commonly used values:
 *
 * * http://purl.org/goodrelations/v1#Business
 * * http://purl.org/goodrelations/v1#Enduser
 * * http://purl.org/goodrelations/v1#PublicInstitution
 * * http://purl.org/goodrelations/v1#Reseller
 * *
 *
 * @see https://schema.org/BusinessEntityType
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BusinessEntityType extends Enumeration
{
    public static function factory(): BusinessEntityType
    {
        return new BusinessEntityType('https://schema.org/', 'BusinessEntityType');
    }

}
