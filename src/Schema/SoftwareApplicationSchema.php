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
 * A software application.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class SoftwareApplicationSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new SoftwareApplicationSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * Type of software application, e.g. "Game, Multimedia".
     **/
    private $applicationCategory;
    public function setApplicationCategory($applicationCategory) {
        $this->applicationCategory = $applicationCategory;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getApplicationCategory() {
        return $this->applicationCategory;
    }

    /**
     * Subcategory of the application, e.g. "Arcade Game".
     **/
    private $applicationSubCategory;
    public function setApplicationSubCategory($applicationSubCategory) {
        $this->applicationSubCategory = $applicationSubCategory;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getApplicationSubCategory() {
        return $this->applicationSubCategory;
    }

    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
     **/
    private $applicationSuite;
    public function setApplicationSuite($applicationSuite) {
        $this->applicationSuite = $applicationSuite;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getApplicationSuite() {
        return $this->applicationSuite;
    }

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     **/
    private $availableOnDevice;
    public function setAvailableOnDevice($availableOnDevice) {
        $this->availableOnDevice = $availableOnDevice;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getAvailableOnDevice() {
        return $this->availableOnDevice;
    }

    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     **/
    private $countriesNotSupported;
    public function setCountriesNotSupported($countriesNotSupported) {
        $this->countriesNotSupported = $countriesNotSupported;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getCountriesNotSupported() {
        return $this->countriesNotSupported;
    }

    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     **/
    private $countriesSupported;
    public function setCountriesSupported($countriesSupported) {
        $this->countriesSupported = $countriesSupported;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getCountriesSupported() {
        return $this->countriesSupported;
    }

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     **/
    private $device;
    public function setDevice($device) {
        $this->device = $device;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getDevice() {
        return $this->device;
    }

    /**
     * If the file can be downloaded, URL to download the binary.
     **/
    private $downloadUrl;
    public function setDownloadUrl($downloadUrl) {
        $this->downloadUrl = $downloadUrl;

        return $this;
    }

    /**
     * @return URLSchema     **/
    public function getDownloadUrl() {
        return $this->downloadUrl;
    }

    /**
     * Features or modules provided by this application (and possibly required by other applications).
     **/
    private $featureList;
    public function setFeatureList($featureList) {
        $this->featureList = $featureList;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getFeatureList() {
        return $this->featureList;
    }

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
     **/
    private $fileSize;
    public function setFileSize($fileSize) {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getFileSize() {
        return $this->fileSize;
    }

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     **/
    private $installUrl;
    public function setInstallUrl($installUrl) {
        $this->installUrl = $installUrl;

        return $this;
    }

    /**
     * @return URLSchema     **/
    public function getInstallUrl() {
        return $this->installUrl;
    }

    /**
     * Minimum memory requirements.
     **/
    private $memoryRequirements;
    public function setMemoryRequirements($memoryRequirements) {
        $this->memoryRequirements = $memoryRequirements;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getMemoryRequirements() {
        return $this->memoryRequirements;
    }

    /**
     * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
     **/
    private $operatingSystem;
    public function setOperatingSystem($operatingSystem) {
        $this->operatingSystem = $operatingSystem;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getOperatingSystem() {
        return $this->operatingSystem;
    }

    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
     **/
    private $permissions;
    public function setPermissions($permissions) {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPermissions() {
        return $this->permissions;
    }

    /**
     * Processor architecture required to run the application (e.g. IA64).
     **/
    private $processorRequirements;
    public function setProcessorRequirements($processorRequirements) {
        $this->processorRequirements = $processorRequirements;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getProcessorRequirements() {
        return $this->processorRequirements;
    }

    /**
     * Description of what changed in this version.
     **/
    private $releaseNotes;
    public function setReleaseNotes($releaseNotes) {
        $this->releaseNotes = $releaseNotes;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getReleaseNotes() {
        return $this->releaseNotes;
    }

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (Examples: DirectX, Java or .NET runtime).
     **/
    private $requirements;
    public function setRequirements($requirements) {
        $this->requirements = $requirements;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getRequirements() {
        return $this->requirements;
    }

    /**
     * A link to a screenshot image of the app.
     **/
    private $screenshot;
    public function setScreenshot($screenshot) {
        $this->screenshot = $screenshot;

        return $this;
    }

    /**
     * @return ImageObjectSchema|URLSchema     **/
    public function getScreenshot() {
        return $this->screenshot;
    }

    /**
     * Additional content for a software application.
     **/
    private $softwareAddOn;
    public function setSoftwareAddOn($softwareAddOn) {
        $this->softwareAddOn = $softwareAddOn;

        return $this;
    }

    /**
     * @return SoftwareApplicationSchema     **/
    public function getSoftwareAddOn() {
        return $this->softwareAddOn;
    }

    /**
     * Software application help.
     **/
    private $softwareHelp;
    public function setSoftwareHelp($softwareHelp) {
        $this->softwareHelp = $softwareHelp;

        return $this;
    }

    /**
     * @return CreativeWorkSchema     **/
    public function getSoftwareHelp() {
        return $this->softwareHelp;
    }

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (Examples: DirectX, Java or .NET runtime).
     **/
    private $softwareRequirements;
    public function setSoftwareRequirements($softwareRequirements) {
        $this->softwareRequirements = $softwareRequirements;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getSoftwareRequirements() {
        return $this->softwareRequirements;
    }

    /**
     * Version of the software instance.
     **/
    private $softwareVersion;
    public function setSoftwareVersion($softwareVersion) {
        $this->softwareVersion = $softwareVersion;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getSoftwareVersion() {
        return $this->softwareVersion;
    }

    /**
     * Storage requirements (free space required).
     **/
    private $storageRequirements;
    public function setStorageRequirements($storageRequirements) {
        $this->storageRequirements = $storageRequirements;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     **/
    public function getStorageRequirements() {
        return $this->storageRequirements;
    }

    /**
     * Supporting data for a SoftwareApplication.
     **/
    private $supportingData;
    public function setSupportingData($supportingData) {
        $this->supportingData = $supportingData;

        return $this;
    }

    /**
     * @return DataFeedSchema     **/
    public function getSupportingData() {
        return $this->supportingData;
    }


}
