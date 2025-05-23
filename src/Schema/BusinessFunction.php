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
 * The business function specifies the type of activity or access (i.e., the bundle
 * of rights) offered by the organization or business person through the offer.
 * Typical are sell, rental or lease, maintenance or repair, manufacture / produce,
 * recycle / dispose, engineering / construction, or installation. Proprietary
 * specifications of access rights are also instances of this class.
 *
 * Commonly used values:
 *
 * * http://purl.org/goodrelations/v1#ConstructionInstallation
 * * http://purl.org/goodrelations/v1#Dispose
 * * http://purl.org/goodrelations/v1#LeaseOut
 * * http://purl.org/goodrelations/v1#Maintain
 * * http://purl.org/goodrelations/v1#ProvideService
 * * http://purl.org/goodrelations/v1#Repair
 * * http://purl.org/goodrelations/v1#Sell
 * * http://purl.org/goodrelations/v1#Buy
 * *
 *
 * @see https://schema.org/BusinessFunction
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BusinessFunction extends Enumeration
{
    public static function factory(): BusinessFunction
    {
        return new BusinessFunction('https://schema.org/', 'BusinessFunction');
    }

}
