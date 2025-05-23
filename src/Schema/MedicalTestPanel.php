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
 * Any collection of tests commonly ordered together.
 *
 * @see https://schema.org/MedicalTestPanel
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalTestPanel extends MedicalTest
{
    public static function factory(): MedicalTestPanel
    {
        return new MedicalTestPanel('https://schema.org/', 'MedicalTestPanel');
    }

    /**
     * A component test of the panel.
     *
     * @param $subTest \LengthOfRope\JSONLD\Schema\MedicalTest
     * @return static
     **/
    public function setSubTest($subTest): static {
        $this->properties['subTest'] = $subTest;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MedicalTest
     **/
    public function getSubTest() {
        return $this->properties['subTest'];
    }
}
