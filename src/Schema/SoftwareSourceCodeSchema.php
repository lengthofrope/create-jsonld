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
        return new SoftwareSourceCodeSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * Link to the repository where the un-compiled, human readable code and related code is located (SVN, github, CodePlex).
     **/
    private $codeRepository;
    public function setCodeRepository($codeRepository) {
        $this->codeRepository = $codeRepository;

        return $this;
    }

    /**
     * @return URLSchema     
     **/
    public function getCodeRepository() {
        return $this->codeRepository;
    }

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
     **/
    private $codeSampleType;
    public function setCodeSampleType($codeSampleType) {
        $this->codeSampleType = $codeSampleType;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getCodeSampleType() {
        return $this->codeSampleType;
    }

    /**
     * The computer programming language.
     **/
    private $programmingLanguage;
    public function setProgrammingLanguage($programmingLanguage) {
        $this->programmingLanguage = $programmingLanguage;

        return $this;
    }

    /**
     * @return LanguageSchema     
     **/
    public function getProgrammingLanguage() {
        return $this->programmingLanguage;
    }

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0).
     **/
    private $runtime;
    public function setRuntime($runtime) {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getRuntime() {
        return $this->runtime;
    }

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0).
     **/
    private $runtimePlatform;
    public function setRuntimePlatform($runtimePlatform) {
        $this->runtimePlatform = $runtimePlatform;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getRuntimePlatform() {
        return $this->runtimePlatform;
    }

    /**
     * What type of sample: full (compile ready) solution, code snippet, inline code, scripts, template.
     **/
    private $sampleType;
    public function setSampleType($sampleType) {
        $this->sampleType = $sampleType;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getSampleType() {
        return $this->sampleType;
    }

    /**
     * Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
     **/
    private $targetProduct;
    public function setTargetProduct($targetProduct) {
        $this->targetProduct = $targetProduct;

        return $this;
    }

    /**
     * @return SoftwareApplicationSchema     
     **/
    public function getTargetProduct() {
        return $this->targetProduct;
    }


}
