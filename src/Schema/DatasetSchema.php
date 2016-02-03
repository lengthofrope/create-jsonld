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
 * A body of structured information describing some topic(s) of interest.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DatasetSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new DatasetSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * A data catalog which contains a dataset.
     **/
    private $catalog;
    public function setCatalog($catalog) {
        $this->catalog = $catalog;

        return $this;
    }

    /**
     * @return DataCatalogSchema     
     **/
    public function getCatalog() {
        return $this->catalog;
    }

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
     **/
    private $datasetTimeInterval;
    public function setDatasetTimeInterval($datasetTimeInterval) {
        $this->datasetTimeInterval = $datasetTimeInterval;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getDatasetTimeInterval() {
        return $this->datasetTimeInterval;
    }

    /**
     * A downloadable form of this dataset, at a specific location, in a specific format.
     **/
    private $distribution;
    public function setDistribution($distribution) {
        $this->distribution = $distribution;

        return $this;
    }

    /**
     * @return DataDownloadSchema     
     **/
    public function getDistribution() {
        return $this->distribution;
    }

    /**
     * A data catalog contained in the dataset.
     **/
    private $includedDataCatalog;
    public function setIncludedDataCatalog($includedDataCatalog) {
        $this->includedDataCatalog = $includedDataCatalog;

        return $this;
    }

    /**
     * @return DataCatalogSchema     
     **/
    public function getIncludedDataCatalog() {
        return $this->includedDataCatalog;
    }

    /**
     * The range of spatial applicability of a dataset, e.g. for a dataset of New York weather, the state of New York.
     **/
    private $spatial;
    public function setSpatial($spatial) {
        $this->spatial = $spatial;

        return $this;
    }

    /**
     * @return PlaceSchema     
     **/
    public function getSpatial() {
        return $this->spatial;
    }

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
     **/
    private $temporal;
    public function setTemporal($temporal) {
        $this->temporal = $temporal;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getTemporal() {
        return $this->temporal;
    }


}
