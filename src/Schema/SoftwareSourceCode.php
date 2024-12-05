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
 * Computer programming source code. Example: Full (compile ready) solutions, code
 * snippet samples, scripts, templates.
 *
 * @see https://schema.org/SoftwareSourceCode
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SoftwareSourceCode extends CreativeWork
{
    public static function factory(): SoftwareSourceCode
    {
        return new SoftwareSourceCode('https://schema.org/', 'SoftwareSourceCode');
    }

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline
     * code, scripts, template.
     *
     * @param $sampleType \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setSampleType($sampleType): static {
        $this->properties['sampleType'] = $sampleType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getSampleType() {
        return $this->properties['sampleType'];
    }
    /**
     * The computer programming language.
     *
     * @param $programmingLanguage \LengthOfRope\JSONLD\Schema\ComputerLanguage|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setProgrammingLanguage($programmingLanguage): static {
        $this->properties['programmingLanguage'] = $programmingLanguage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ComputerLanguage|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getProgrammingLanguage() {
        return $this->properties['programmingLanguage'];
    }
    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline
     * code, scripts, template.
     *
     * @param $codeSampleType \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setCodeSampleType($codeSampleType): static {
        $this->properties['codeSampleType'] = $codeSampleType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getCodeSampleType() {
        return $this->properties['codeSampleType'];
    }
    /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python
     * 2.3, .NET Framework 3.0).
     *
     * @param $runtime \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setRuntime($runtime): static {
        $this->properties['runtime'] = $runtime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getRuntime() {
        return $this->properties['runtime'];
    }
    /**
     * Target Operating System / Product to which the code applies.  If applies to
     * several versions, just the product name can be used.
     *
     * @param $targetProduct \LengthOfRope\JSONLD\Schema\SoftwareApplication
     * @return static
     **/
    public function setTargetProduct($targetProduct): static {
        $this->properties['targetProduct'] = $targetProduct;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\SoftwareApplication
     **/
    public function getTargetProduct() {
        return $this->properties['targetProduct'];
    }
    /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python
     * 2.3, .NET Framework 3.0).
     *
     * @param $runtimePlatform \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setRuntimePlatform($runtimePlatform): static {
        $this->properties['runtimePlatform'] = $runtimePlatform;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getRuntimePlatform() {
        return $this->properties['runtimePlatform'];
    }
    /**
     * Link to the repository where the un-compiled, human readable code and related
     * code is located (SVN, GitHub, CodePlex).
     *
     * @param $codeRepository \LengthOfRope\JSONLD\DataType\URL
     * @return static
     **/
    public function setCodeRepository($codeRepository): static {
        $this->properties['codeRepository'] = $codeRepository;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\URL
     **/
    public function getCodeRepository() {
        return $this->properties['codeRepository'];
    }
}
