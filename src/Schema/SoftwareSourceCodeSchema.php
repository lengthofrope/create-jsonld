<?php

/*
 * The MIT License
 *
 * Copyright 2016 LengthOfRope, Bas de Kort <bdekort@gmail.com>.
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
 * Computer programming source code. Example: Full (compile ready) solutions, code snippet samples, scripts, templates.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SoftwareSourceCodeSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new SoftwareSourceCodeSchema('https://schema.org/', 'SoftwareSourceCode');
    }

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
     *
     * @param $sampleType 
     **/
    public function setSampleType($sampleType) {
        $this->properties['sampleType'] = $sampleType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSampleType() {
        return $this->properties['sampleType'];
    }

    /**
     * The computer programming language.
     *
     * @param $programmingLanguage |
     **/
    public function setProgrammingLanguage($programmingLanguage) {
        $this->properties['programmingLanguage'] = $programmingLanguage;

        return $this;
    }

    /**
     * @return |
     **/
    public function getProgrammingLanguage() {
        return $this->properties['programmingLanguage'];
    }

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
     *
     * @param $codeSampleType 
     **/
    public function setCodeSampleType($codeSampleType) {
        $this->properties['codeSampleType'] = $codeSampleType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCodeSampleType() {
        return $this->properties['codeSampleType'];
    }

    /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
     *
     * @param $runtime 
     **/
    public function setRuntime($runtime) {
        $this->properties['runtime'] = $runtime;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRuntime() {
        return $this->properties['runtime'];
    }

    /**
     * Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
     *
     * @param $targetProduct 
     **/
    public function setTargetProduct($targetProduct) {
        $this->properties['targetProduct'] = $targetProduct;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTargetProduct() {
        return $this->properties['targetProduct'];
    }

    /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
     *
     * @param $runtimePlatform 
     **/
    public function setRuntimePlatform($runtimePlatform) {
        $this->properties['runtimePlatform'] = $runtimePlatform;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRuntimePlatform() {
        return $this->properties['runtimePlatform'];
    }

    /**
     * Link to the repository where the un-compiled, human readable code and related code is located (SVN, GitHub, CodePlex).
     *
     * @param $codeRepository 
     **/
    public function setCodeRepository($codeRepository) {
        $this->properties['codeRepository'] = $codeRepository;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCodeRepository() {
        return $this->properties['codeRepository'];
    }


}
