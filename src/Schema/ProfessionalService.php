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
 * Original definition: "provider of professional services."
 *
 * The general [[ProfessionalService]] type for local businesses was deprecated due
 * to confusion with [[Service]]. For reference, the types that it included were:
 * [[Dentist]],
 * *         [[AccountingService]], [[Attorney]], [[Notary]], as well as types for
 * several kinds of [[HomeAndConstructionBusiness]]: [[Electrician]],
 * [[GeneralContractor]],
 * *         [[HousePainter]], [[Locksmith]], [[Plumber]], [[RoofingContractor]].
 * [[LegalService]] was introduced as a more inclusive supertype of [[Attorney]].
 *
 * @see https://schema.org/ProfessionalService
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ProfessionalService extends LocalBusiness
{
    public static function factory(): ProfessionalService
    {
        return new ProfessionalService('https://schema.org/', 'ProfessionalService');
    }

}
