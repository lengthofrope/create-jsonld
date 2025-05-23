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
 * Reference documentation for application programming interfaces (APIs).
 *
 * @see https://schema.org/APIReference
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class APIReference extends TechArticle
{
    public static function factory(): APIReference
    {
        return new APIReference('https://schema.org/', 'APIReference');
    }

    /**
     * Indicates whether API is managed or unmanaged.
     *
     * @param $programmingModel \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setProgrammingModel($programmingModel): static {
        $this->properties['programmingModel'] = $programmingModel;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getProgrammingModel() {
        return $this->properties['programmingModel'];
    }
    /**
     * Associated product/technology version. E.g., .NET Framework 4.5.
     *
     * @param $assemblyVersion \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAssemblyVersion($assemblyVersion): static {
        $this->properties['assemblyVersion'] = $assemblyVersion;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAssemblyVersion() {
        return $this->properties['assemblyVersion'];
    }
    /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     *
     * @param $targetPlatform \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setTargetPlatform($targetPlatform): static {
        $this->properties['targetPlatform'] = $targetPlatform;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getTargetPlatform() {
        return $this->properties['targetPlatform'];
    }
    /**
     * Library file name, e.g., mscorlib.dll, system.web.dll.
     *
     * @param $executableLibraryName \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setExecutableLibraryName($executableLibraryName): static {
        $this->properties['executableLibraryName'] = $executableLibraryName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getExecutableLibraryName() {
        return $this->properties['executableLibraryName'];
    }
    /**
     * Library file name, e.g., mscorlib.dll, system.web.dll.
     *
     * @param $assembly \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAssembly($assembly): static {
        $this->properties['assembly'] = $assembly;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAssembly() {
        return $this->properties['assembly'];
    }
}
