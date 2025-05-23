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
 * A software application.
 *
 * @see https://schema.org/SoftwareApplication
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SoftwareApplication extends CreativeWork
{
    public static function factory(): SoftwareApplication
    {
        return new SoftwareApplication('https://schema.org/', 'SoftwareApplication');
    }

    /**
     * Countries for which the application is not supported. You can also provide the
     * two-letter ISO 3166-1 alpha-2 country code.
     *
     * @param $countriesNotSupported \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCountriesNotSupported($countriesNotSupported): static {
        $this->properties['countriesNotSupported'] = $countriesNotSupported;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCountriesNotSupported() {
        return $this->properties['countriesNotSupported'];
    }
    /**
     * Operating systems supported (Windows 7, OS X 10.6, Android 1.6).
     *
     * @param $operatingSystem \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setOperatingSystem($operatingSystem): static {
        $this->properties['operatingSystem'] = $operatingSystem;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getOperatingSystem() {
        return $this->properties['operatingSystem'];
    }
    /**
     * A link to a screenshot image of the app.
     *
     * @param $screenshot \LengthOfRope\JSONLD\Schema\ImageObject|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setScreenshot($screenshot): static {
        $this->properties['screenshot'] = $screenshot;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ImageObject|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getScreenshot() {
        return $this->properties['screenshot'];
    }
    /**
     * Version of the software instance.
     *
     * @param $softwareVersion \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setSoftwareVersion($softwareVersion): static {
        $this->properties['softwareVersion'] = $softwareVersion;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getSoftwareVersion() {
        return $this->properties['softwareVersion'];
    }
    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB
     * etc.), KB will be assumed.
     *
     * @param $fileSize \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setFileSize($fileSize): static {
        $this->properties['fileSize'] = $fileSize;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getFileSize() {
        return $this->properties['fileSize'];
    }
    /**
     * Device required to run the application. Used in cases where a specific
     * make/model is required to run the application.
     *
     * @param $availableOnDevice \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setAvailableOnDevice($availableOnDevice): static {
        $this->properties['availableOnDevice'] = $availableOnDevice;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getAvailableOnDevice() {
        return $this->properties['availableOnDevice'];
    }
    /**
     * The name of the application suite to which the application belongs (e.g. Excel
     * belongs to Office).
     *
     * @param $applicationSuite \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setApplicationSuite($applicationSuite): static {
        $this->properties['applicationSuite'] = $applicationSuite;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getApplicationSuite() {
        return $this->properties['applicationSuite'];
    }
    /**
     * Minimum memory requirements.
     *
     * @param $memoryRequirements \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setMemoryRequirements($memoryRequirements): static {
        $this->properties['memoryRequirements'] = $memoryRequirements;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getMemoryRequirements() {
        return $this->properties['memoryRequirements'];
    }
    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     *
     * @param $applicationCategory \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setApplicationCategory($applicationCategory): static {
        $this->properties['applicationCategory'] = $applicationCategory;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getApplicationCategory() {
        return $this->properties['applicationCategory'];
    }
    /**
     * Description of what changed in this version.
     *
     * @param $releaseNotes \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setReleaseNotes($releaseNotes): static {
        $this->properties['releaseNotes'] = $releaseNotes;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getReleaseNotes() {
        return $this->properties['releaseNotes'];
    }
    /**
     * URL at which the app may be installed, if different from the URL of the item.
     *
     * @param $installUrl \LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setInstallUrl($installUrl): static {
        $this->properties['installUrl'] = $installUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getInstallUrl() {
        return $this->properties['installUrl'];
    }
    /**
     * Component dependency requirements for application. This includes runtime
     * environments and shared libraries that are not included in the application
     * distribution package, but required to run the application (examples: DirectX,
     * Java or .NET runtime).
     *
     * @param $requirements \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setRequirements($requirements): static {
        $this->properties['requirements'] = $requirements;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getRequirements() {
        return $this->properties['requirements'];
    }
    /**
     * Countries for which the application is supported. You can also provide the
     * two-letter ISO 3166-1 alpha-2 country code.
     *
     * @param $countriesSupported \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCountriesSupported($countriesSupported): static {
        $this->properties['countriesSupported'] = $countriesSupported;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCountriesSupported() {
        return $this->properties['countriesSupported'];
    }
    /**
     * Supporting data for a SoftwareApplication.
     *
     * @param $supportingData \LengthOfRope\JSONLD\Schema\DataFeed
     * @return static
     **/
    public function setSupportingData($supportingData): static {
        $this->properties['supportingData'] = $supportingData;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DataFeed
     **/
    public function getSupportingData() {
        return $this->properties['supportingData'];
    }
    /**
     * Device required to run the application. Used in cases where a specific
     * make/model is required to run the application.
     *
     * @param $device \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setDevice($device): static {
        $this->properties['device'] = $device;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getDevice() {
        return $this->properties['device'];
    }
    /**
     * Software application help.
     *
     * @param $softwareHelp \LengthOfRope\JSONLD\Schema\CreativeWork
     * @return static
     **/
    public function setSoftwareHelp($softwareHelp): static {
        $this->properties['softwareHelp'] = $softwareHelp;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CreativeWork
     **/
    public function getSoftwareHelp() {
        return $this->properties['softwareHelp'];
    }
    /**
     * Processor architecture required to run the application (e.g. IA64).
     *
     * @param $processorRequirements \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setProcessorRequirements($processorRequirements): static {
        $this->properties['processorRequirements'] = $processorRequirements;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getProcessorRequirements() {
        return $this->properties['processorRequirements'];
    }
    /**
     * Component dependency requirements for application. This includes runtime
     * environments and shared libraries that are not included in the application
     * distribution package, but required to run the application (examples: DirectX,
     * Java or .NET runtime).
     *
     * @param $softwareRequirements \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setSoftwareRequirements($softwareRequirements): static {
        $this->properties['softwareRequirements'] = $softwareRequirements;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getSoftwareRequirements() {
        return $this->properties['softwareRequirements'];
    }
    /**
     * Permission(s) required to run the app (for example, a mobile app may require
     * full internet access or may run only on wifi).
     *
     * @param $permissions \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setPermissions($permissions): static {
        $this->properties['permissions'] = $permissions;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getPermissions() {
        return $this->properties['permissions'];
    }
    /**
     * Features or modules provided by this application (and possibly required by other
     * applications).
     *
     * @param $featureList \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setFeatureList($featureList): static {
        $this->properties['featureList'] = $featureList;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getFeatureList() {
        return $this->properties['featureList'];
    }
    /**
     * Additional content for a software application.
     *
     * @param $softwareAddOn \LengthOfRope\JSONLD\Schema\SoftwareApplication
     * @return static
     **/
    public function setSoftwareAddOn($softwareAddOn): static {
        $this->properties['softwareAddOn'] = $softwareAddOn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\SoftwareApplication
     **/
    public function getSoftwareAddOn() {
        return $this->properties['softwareAddOn'];
    }
    /**
     * If the file can be downloaded, URL to download the binary.
     *
     * @param $downloadUrl \LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setDownloadUrl($downloadUrl): static {
        $this->properties['downloadUrl'] = $downloadUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getDownloadUrl() {
        return $this->properties['downloadUrl'];
    }
    /**
     * Storage requirements (free space required).
     *
     * @param $storageRequirements \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setStorageRequirements($storageRequirements): static {
        $this->properties['storageRequirements'] = $storageRequirements;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getStorageRequirements() {
        return $this->properties['storageRequirements'];
    }
    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     *
     * @param $applicationSubCategory \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setApplicationSubCategory($applicationSubCategory): static {
        $this->properties['applicationSubCategory'] = $applicationSubCategory;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getApplicationSubCategory() {
        return $this->properties['applicationSubCategory'];
    }
}
