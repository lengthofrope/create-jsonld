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
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SoftwareApplication extends CreativeWork
{
    public static function factory(): SoftwareApplication
    {
        return new SoftwareApplication('https://schema.org/', 'SoftwareApplication');
    }

    /**
     * Minimum memory requirements.
     *
     * @param $memoryRequirements |
     * @return static
     **/
    public function setMemoryRequirements($memoryRequirements): static {
        $this->properties['memoryRequirements'] = $memoryRequirements;

        return $this;
    }

    /**
     * @return |
     **/
    public function getMemoryRequirements() {
        return $this->properties['memoryRequirements'];
    }

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     *
     * @param $device 
     * @return static
     **/
    public function setDevice($device): static {
        $this->properties['device'] = $device;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDevice() {
        return $this->properties['device'];
    }

    /**
     * A link to a screenshot image of the app.
     *
     * @param $screenshot |
     * @return static
     **/
    public function setScreenshot($screenshot): static {
        $this->properties['screenshot'] = $screenshot;

        return $this;
    }

    /**
     * @return |
     **/
    public function getScreenshot() {
        return $this->properties['screenshot'];
    }

    /**
     * Description of what changed in this version.
     *
     * @param $releaseNotes |
     * @return static
     **/
    public function setReleaseNotes($releaseNotes): static {
        $this->properties['releaseNotes'] = $releaseNotes;

        return $this;
    }

    /**
     * @return |
     **/
    public function getReleaseNotes() {
        return $this->properties['releaseNotes'];
    }

    /**
     * Supporting data for a SoftwareApplication.
     *
     * @param $supportingData 
     * @return static
     **/
    public function setSupportingData($supportingData): static {
        $this->properties['supportingData'] = $supportingData;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSupportingData() {
        return $this->properties['supportingData'];
    }

    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     *
     * @param $applicationCategory |
     * @return static
     **/
    public function setApplicationCategory($applicationCategory): static {
        $this->properties['applicationCategory'] = $applicationCategory;

        return $this;
    }

    /**
     * @return |
     **/
    public function getApplicationCategory() {
        return $this->properties['applicationCategory'];
    }

    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @param $countriesNotSupported 
     * @return static
     **/
    public function setCountriesNotSupported($countriesNotSupported): static {
        $this->properties['countriesNotSupported'] = $countriesNotSupported;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCountriesNotSupported() {
        return $this->properties['countriesNotSupported'];
    }

    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
     *
     * @param $permissions 
     * @return static
     **/
    public function setPermissions($permissions): static {
        $this->properties['permissions'] = $permissions;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPermissions() {
        return $this->properties['permissions'];
    }

    /**
     * Operating systems supported (Windows 7, OS X 10.6, Android 1.6).
     *
     * @param $operatingSystem 
     * @return static
     **/
    public function setOperatingSystem($operatingSystem): static {
        $this->properties['operatingSystem'] = $operatingSystem;

        return $this;
    }

    /**
     * @return 
     **/
    public function getOperatingSystem() {
        return $this->properties['operatingSystem'];
    }

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     *
     * @param $availableOnDevice 
     * @return static
     **/
    public function setAvailableOnDevice($availableOnDevice): static {
        $this->properties['availableOnDevice'] = $availableOnDevice;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAvailableOnDevice() {
        return $this->properties['availableOnDevice'];
    }

    /**
     * Software application help.
     *
     * @param $softwareHelp 
     * @return static
     **/
    public function setSoftwareHelp($softwareHelp): static {
        $this->properties['softwareHelp'] = $softwareHelp;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSoftwareHelp() {
        return $this->properties['softwareHelp'];
    }

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
     *
     * @param $fileSize 
     * @return static
     **/
    public function setFileSize($fileSize): static {
        $this->properties['fileSize'] = $fileSize;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFileSize() {
        return $this->properties['fileSize'];
    }

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (examples: DirectX, Java or .NET runtime).
     *
     * @param $requirements |
     * @return static
     **/
    public function setRequirements($requirements): static {
        $this->properties['requirements'] = $requirements;

        return $this;
    }

    /**
     * @return |
     **/
    public function getRequirements() {
        return $this->properties['requirements'];
    }

    /**
     * Storage requirements (free space required).
     *
     * @param $storageRequirements |
     * @return static
     **/
    public function setStorageRequirements($storageRequirements): static {
        $this->properties['storageRequirements'] = $storageRequirements;

        return $this;
    }

    /**
     * @return |
     **/
    public function getStorageRequirements() {
        return $this->properties['storageRequirements'];
    }

    /**
     * Processor architecture required to run the application (e.g. IA64).
     *
     * @param $processorRequirements 
     * @return static
     **/
    public function setProcessorRequirements($processorRequirements): static {
        $this->properties['processorRequirements'] = $processorRequirements;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProcessorRequirements() {
        return $this->properties['processorRequirements'];
    }

    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @param $countriesSupported 
     * @return static
     **/
    public function setCountriesSupported($countriesSupported): static {
        $this->properties['countriesSupported'] = $countriesSupported;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCountriesSupported() {
        return $this->properties['countriesSupported'];
    }

    /**
     * Additional content for a software application.
     *
     * @param $softwareAddOn 
     * @return static
     **/
    public function setSoftwareAddOn($softwareAddOn): static {
        $this->properties['softwareAddOn'] = $softwareAddOn;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSoftwareAddOn() {
        return $this->properties['softwareAddOn'];
    }

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (examples: DirectX, Java or .NET runtime).
     *
     * @param $softwareRequirements |
     * @return static
     **/
    public function setSoftwareRequirements($softwareRequirements): static {
        $this->properties['softwareRequirements'] = $softwareRequirements;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSoftwareRequirements() {
        return $this->properties['softwareRequirements'];
    }

    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
     *
     * @param $applicationSuite 
     * @return static
     **/
    public function setApplicationSuite($applicationSuite): static {
        $this->properties['applicationSuite'] = $applicationSuite;

        return $this;
    }

    /**
     * @return 
     **/
    public function getApplicationSuite() {
        return $this->properties['applicationSuite'];
    }

    /**
     * If the file can be downloaded, URL to download the binary.
     *
     * @param $downloadUrl 
     * @return static
     **/
    public function setDownloadUrl($downloadUrl): static {
        $this->properties['downloadUrl'] = $downloadUrl;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDownloadUrl() {
        return $this->properties['downloadUrl'];
    }

    /**
     * Version of the software instance.
     *
     * @param $softwareVersion 
     * @return static
     **/
    public function setSoftwareVersion($softwareVersion): static {
        $this->properties['softwareVersion'] = $softwareVersion;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSoftwareVersion() {
        return $this->properties['softwareVersion'];
    }

    /**
     * Features or modules provided by this application (and possibly required by other applications).
     *
     * @param $featureList |
     * @return static
     **/
    public function setFeatureList($featureList): static {
        $this->properties['featureList'] = $featureList;

        return $this;
    }

    /**
     * @return |
     **/
    public function getFeatureList() {
        return $this->properties['featureList'];
    }

    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     *
     * @param $applicationSubCategory |
     * @return static
     **/
    public function setApplicationSubCategory($applicationSubCategory): static {
        $this->properties['applicationSubCategory'] = $applicationSubCategory;

        return $this;
    }

    /**
     * @return |
     **/
    public function getApplicationSubCategory() {
        return $this->properties['applicationSubCategory'];
    }

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     *
     * @param $installUrl 
     * @return static
     **/
    public function setInstallUrl($installUrl): static {
        $this->properties['installUrl'] = $installUrl;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInstallUrl() {
        return $this->properties['installUrl'];
    }


}
