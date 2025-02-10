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
 * A web page that provides medical information.
 *
 * @see https://schema.org/MedicalWebPage
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalWebPage extends WebPage
{
    public static function factory(): MedicalWebPage
    {
        return new MedicalWebPage('https://schema.org/', 'MedicalWebPage');
    }

    /**
     * An aspect of medical practice that is considered on the page, such as
     * 'diagnosis', 'treatment', 'causes', 'prognosis', 'etiology', 'epidemiology',
     * etc.
     *
     * @param $aspect \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAspect($aspect): static {
        $this->properties['aspect'] = $aspect;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAspect() {
        return $this->properties['aspect'];
    }
    /**
     * Medical audience for page.
     *
     * @param $medicalAudience \LengthOfRope\JSONLD\Schema\MedicalAudienceType|\LengthOfRope\JSONLD\Schema\MedicalAudience
     * @return static
     **/
    public function setMedicalAudience($medicalAudience): static {
        $this->properties['medicalAudience'] = $medicalAudience;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalAudienceType|\LengthOfRope\JSONLD\Schema\MedicalAudience
     **/
    public function getMedicalAudience() {
        return $this->properties['medicalAudience'];
    }
}
