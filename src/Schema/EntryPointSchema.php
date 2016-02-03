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
 * An entry point, within some Web-based protocol.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class EntryPointSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new EntryPointSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * An application that can complete the request.
     **/
    private $actionApplication;
    public function setActionApplication($actionApplication) {
        $this->actionApplication = $actionApplication;

        return $this;
    }

    /**
     * @return SoftwareApplicationSchema     **/
    public function getActionApplication() {
        return $this->actionApplication;
    }

    /**
     * The high level platform(s) where the Action can be performed for the given URL. To specify a specific application or operating system instance, use actionApplication.
     **/
    private $actionPlatform;
    public function setActionPlatform($actionPlatform) {
        $this->actionPlatform = $actionPlatform;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getActionPlatform() {
        return $this->actionPlatform;
    }

    /**
     * An application that can complete the request.
     **/
    private $application;
    public function setApplication($application) {
        $this->application = $application;

        return $this;
    }

    /**
     * @return SoftwareApplicationSchema     **/
    public function getApplication() {
        return $this->application;
    }

    /**
     * The supported content type(s) for an EntryPoint response.
     **/
    private $contentType;
    public function setContentType($contentType) {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getContentType() {
        return $this->contentType;
    }

    /**
     * The supported encoding type(s) for an EntryPoint request.
     **/
    private $encodingType;
    public function setEncodingType($encodingType) {
        $this->encodingType = $encodingType;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getEncodingType() {
        return $this->encodingType;
    }

    /**
     * An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint. Values are capitalized strings as used in HTTP.
     **/
    private $httpMethod;
    public function setHttpMethod($httpMethod) {
        $this->httpMethod = $httpMethod;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getHttpMethod() {
        return $this->httpMethod;
    }

    /**
     * A url template (RFC6570) that will be used to construct the target of the execution of the action.
     **/
    private $urlTemplate;
    public function setUrlTemplate($urlTemplate) {
        $this->urlTemplate = $urlTemplate;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getUrlTemplate() {
        return $this->urlTemplate;
    }


}
