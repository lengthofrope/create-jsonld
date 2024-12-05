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
 * An individual medical practitioner. For their official address use [[address]],
 * for affiliations to hospitals use [[hospitalAffiliation]].
 * * The [[practicesAt]] property can be used to indicate [[MedicalOrganization]]
 * hospitals, clinics, pharmacies etc. where this physician practices.
 *
 * @see https://schema.org/IndividualPhysician
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class IndividualPhysician extends Physician
{
    public static function factory(): IndividualPhysician
    {
        return new IndividualPhysician('https://schema.org/', 'IndividualPhysician');
    }

    /**
     * A [[MedicalOrganization]] where the [[IndividualPhysician]] practices.
     *
     * @param $practicesAt \LengthOfRope\JSONLD\Schema\MedicalOrganization
     * @return static
     **/
    public function setPracticesAt($practicesAt): static {
        $this->properties['practicesAt'] = $practicesAt;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalOrganization
     **/
    public function getPracticesAt() {
        return $this->properties['practicesAt'];
    }
}
