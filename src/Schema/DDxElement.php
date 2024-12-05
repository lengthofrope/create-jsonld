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
 * An alternative, closely-related condition typically considered later in the
 * differential diagnosis process along with the signs that are used to distinguish
 * it.
 *
 * @see https://schema.org/DDxElement
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DDxElement extends MedicalIntangible
{
    public static function factory(): DDxElement
    {
        return new DDxElement('https://schema.org/', 'DDxElement');
    }

    /**
     * One or more alternative conditions considered in the differential diagnosis
     * process as output of a diagnosis process.
     *
     * @param $diagnosis \LengthOfRope\JSONLD\Schema\MedicalCondition
     * @return static
     **/
    public function setDiagnosis($diagnosis): static {
        $this->properties['diagnosis'] = $diagnosis;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalCondition
     **/
    public function getDiagnosis() {
        return $this->properties['diagnosis'];
    }
    /**
     * One of a set of signs and symptoms that can be used to distinguish this
     * diagnosis from others in the differential diagnosis.
     *
     * @param $distinguishingSign \LengthOfRope\JSONLD\Schema\MedicalSignOrSymptom
     * @return static
     **/
    public function setDistinguishingSign($distinguishingSign): static {
        $this->properties['distinguishingSign'] = $distinguishingSign;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalSignOrSymptom
     **/
    public function getDistinguishingSign() {
        return $this->properties['distinguishingSign'];
    }
}
