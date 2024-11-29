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
 * A permission for a particular person or group to access a particular file.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DigitalDocumentPermissionSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new DigitalDocumentPermissionSchema('https://schema.org/', 'DigitalDocumentPermission');
    }

    /**
     * The type of permission granted the person, organization, or audience.
     *
     * @param $permissionType 
     **/
    public function setPermissionType($permissionType) {
        $this->properties['permissionType'] = $permissionType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPermissionType() {
        return $this->properties['permissionType'];
    }

    /**
     * The person, organization, contact point, or audience that has been granted this permission.
     *
     * @param $grantee |||
     **/
    public function setGrantee($grantee) {
        $this->properties['grantee'] = $grantee;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getGrantee() {
        return $this->properties['grantee'];
    }


}
