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
        return new EntryPointSchema('https://schema.org/', 'EntryPoint');
    }

    /**
     * The high level platform(s) where the Action can be performed for the given URL. To specify a specific application or operating system instance, use actionApplication.
     *
     * @param $actionPlatform ||
     **/
    public function setActionPlatform($actionPlatform) {
        $this->properties['actionPlatform'] = $actionPlatform;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getActionPlatform() {
        return $this->properties['actionPlatform'];
    }

    /**
     * The supported content type(s) for an EntryPoint response.
     *
     * @param $contentType 
     **/
    public function setContentType($contentType) {
        $this->properties['contentType'] = $contentType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getContentType() {
        return $this->properties['contentType'];
    }

    /**
     * An application that can complete the request.
     *
     * @param $actionApplication 
     **/
    public function setActionApplication($actionApplication) {
        $this->properties['actionApplication'] = $actionApplication;

        return $this;
    }

    /**
     * @return 
     **/
    public function getActionApplication() {
        return $this->properties['actionApplication'];
    }

    /**
     * The supported encoding type(s) for an EntryPoint request.
     *
     * @param $encodingType 
     **/
    public function setEncodingType($encodingType) {
        $this->properties['encodingType'] = $encodingType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEncodingType() {
        return $this->properties['encodingType'];
    }

    /**
     * An url template (RFC6570) that will be used to construct the target of the execution of the action.
     *
     * @param $urlTemplate 
     **/
    public function setUrlTemplate($urlTemplate) {
        $this->properties['urlTemplate'] = $urlTemplate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getUrlTemplate() {
        return $this->properties['urlTemplate'];
    }

    /**
     * An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint. Values are capitalized strings as used in HTTP.
     *
     * @param $httpMethod 
     **/
    public function setHttpMethod($httpMethod) {
        $this->properties['httpMethod'] = $httpMethod;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHttpMethod() {
        return $this->properties['httpMethod'];
    }

    /**
     * An application that can complete the request.
     *
     * @param $application 
     **/
    public function setApplication($application) {
        $this->properties['application'] = $application;

        return $this;
    }

    /**
     * @return 
     **/
    public function getApplication() {
        return $this->properties['application'];
    }


}
