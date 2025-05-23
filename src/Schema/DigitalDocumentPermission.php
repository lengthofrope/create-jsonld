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
 * A permission for a particular person or group to access a particular file.
 *
 * @see https://schema.org/DigitalDocumentPermission
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DigitalDocumentPermission extends Intangible
{
    public static function factory(): DigitalDocumentPermission
    {
        return new DigitalDocumentPermission('https://schema.org/', 'DigitalDocumentPermission');
    }

    /**
     * The type of permission granted the person, organization, or audience.
     *
     * @param $permissionType \LengthOfRope\JSONLD\Schema\DigitalDocumentPermissionType
     * @return static
     **/
    public function setPermissionType($permissionType): static {
        $this->properties['permissionType'] = $permissionType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DigitalDocumentPermissionType
     **/
    public function getPermissionType() {
        return $this->properties['permissionType'];
    }
    /**
     * The person, organization, contact point, or audience that has been granted this
     * permission.
     *
     * @param $grantee \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Audience|\LengthOfRope\JSONLD\Schema\ContactPoint
     * @return static
     **/
    public function setGrantee($grantee): static {
        $this->properties['grantee'] = $grantee;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Audience|\LengthOfRope\JSONLD\Schema\ContactPoint
     **/
    public function getGrantee() {
        return $this->properties['grantee'];
    }
}
