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
 * Codes for use with the [[mediaAuthenticityCategory]] property, indicating the
 * authenticity of a media object (in the context of how it was published or
 * shared). In general these codes are not mutually exclusive, although some
 * combinations (such as 'original' versus 'transformed', 'edited' and 'staged')
 * would be contradictory if applied in the same [[MediaReview]]. Note that the
 * application of these codes is with regard to a piece of media shared or
 * published in a particular context.
 *
 * @see https://schema.org/MediaManipulationRatingEnumeration
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MediaManipulationRatingEnumeration extends Enumeration
{
    public static function factory(): MediaManipulationRatingEnumeration
    {
        return new MediaManipulationRatingEnumeration('https://schema.org/', 'MediaManipulationRatingEnumeration');
    }

}
