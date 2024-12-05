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
 * A body of structured information describing some topic(s) of interest.
 *
 * @see https://schema.org/Dataset
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Dataset extends CreativeWork
{
    public static function factory(): Dataset
    {
        return new Dataset('https://schema.org/', 'Dataset');
    }

    /**
     * A data catalog which contains this dataset (this property was previously
     * 'catalog', preferred name is now 'includedInDataCatalog').
     *
     * @param $includedDataCatalog \LengthOfRope\JSONLD\Schema\DataCatalog
     * @return static
     **/
    public function setIncludedDataCatalog($includedDataCatalog): static {
        $this->properties['includedDataCatalog'] = $includedDataCatalog;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DataCatalog
     **/
    public function getIncludedDataCatalog() {
        return $this->properties['includedDataCatalog'];
    }
    /**
     * The International Standard Serial Number (ISSN) that identifies this serial
     * publication. You can repeat this property to identify different formats of, or
     * the linking ISSN (ISSN-L) for, this serial publication.
     *
     * @param $issn \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setIssn($issn): static {
        $this->properties['issn'] = $issn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getIssn() {
        return $this->properties['issn'];
    }
    /**
     * A data catalog which contains this dataset.
     *
     * @param $includedInDataCatalog \LengthOfRope\JSONLD\Schema\DataCatalog
     * @return static
     **/
    public function setIncludedInDataCatalog($includedInDataCatalog): static {
        $this->properties['includedInDataCatalog'] = $includedInDataCatalog;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DataCatalog
     **/
    public function getIncludedInDataCatalog() {
        return $this->properties['includedInDataCatalog'];
    }
    /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying
     * specific methods, in particular via [[MeasurementMethodEnum]].
     *
     * @param $measurementMethod \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setMeasurementMethod($measurementMethod): static {
        $this->properties['measurementMethod'] = $measurementMethod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getMeasurementMethod() {
        return $this->properties['measurementMethod'];
    }
    /**
     * The variableMeasured property can indicate (repeated as necessary) the
     * variables that are measured in some dataset, either described as text or as
     * pairs of identifier and description using PropertyValue, or more explicitly as a
     * [[StatisticalVariable]].
     *
     * @param $variableMeasured \LengthOfRope\JSONLD\Schema\StatisticalVariable|\LengthOfRope\JSONLD\Schema\Property|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\PropertyValue
     * @return static
     **/
    public function setVariableMeasured($variableMeasured): static {
        $this->properties['variableMeasured'] = $variableMeasured;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\StatisticalVariable|\LengthOfRope\JSONLD\Schema\Property|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\PropertyValue
     **/
    public function getVariableMeasured() {
        return $this->properties['variableMeasured'];
    }
    /**
     * A data catalog which contains this dataset.
     *
     * @param $catalog \LengthOfRope\JSONLD\Schema\DataCatalog
     * @return static
     **/
    public function setCatalog($catalog): static {
        $this->properties['catalog'] = $catalog;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DataCatalog
     **/
    public function getCatalog() {
        return $this->properties['catalog'];
    }
    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census
     * dataset, the year 2011 (in ISO 8601 time interval format).
     *
     * @param $datasetTimeInterval \LengthOfRope\JSONLD\DataType\DateTime
     * @return static
     **/
    public function setDatasetTimeInterval($datasetTimeInterval): static {
        $this->properties['datasetTimeInterval'] = $datasetTimeInterval;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime
     **/
    public function getDatasetTimeInterval() {
        return $this->properties['datasetTimeInterval'];
    }
    /**
     * A downloadable form of this dataset, at a specific location, in a specific
     * format. This property can be repeated if different variations are available.
     * There is no expectation that different downloadable distributions must contain
     * exactly equivalent information (see also
     * [DCAT](https://www.w3.org/TR/vocab-dcat-3/#Class:Distribution) on this point).
     * Different distributions might include or exclude different subsets of the entire
     * dataset, for example.
     *
     * @param $distribution \LengthOfRope\JSONLD\Schema\DataDownload
     * @return static
     **/
    public function setDistribution($distribution): static {
        $this->properties['distribution'] = $distribution;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DataDownload
     **/
    public function getDistribution() {
        return $this->properties['distribution'];
    }
    /**
     * A technique, method or technology used in an [[Observation]],
     * [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]),
     * corresponding to the method used for measuring the corresponding variable(s)
     * (for datasets, described using [[variableMeasured]]; for [[Observation]], a
     * [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]]
     * will have an explicit representation as (or mapping to) an property such as
     * those defined in Schema.org, or other RDF vocabularies and "knowledge graphs".
     * In that case the subproperty of [[variableMeasured]] called [[measuredProperty]]
     * is applicable.
     *
     * The [[measurementTechnique]] property helps when extra clarification is needed
     * about how a [[measuredProperty]] was measured. This is oriented towards
     * scientific and scholarly dataset publication but may have broader applicability;
     * it is not intended as a full representation of measurement, but can often serve
     * as a high level summary for dataset discovery.
     *
     * For example, if [[variableMeasured]] is: molecule concentration,
     * [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or
     * "colorimetry" or "immunofluorescence". If the [[variableMeasured]] is
     * "depression rating", the [[measurementTechnique]] could be "Zung Scale" or
     * "HAM-D" or "Beck Depression Inventory".
     *
     * If there are several [[variableMeasured]] properties recorded for some given
     * data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach
     * the corresponding [[measurementTechnique]]. The value can also be from an
     * enumeration, organized as a [[MeasurementMetholdEnumeration]].
     *
     * @param $measurementTechnique \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum
     * @return static
     **/
    public function setMeasurementTechnique($measurementTechnique): static {
        $this->properties['measurementTechnique'] = $measurementTechnique;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\Schema\MeasurementMethodEnum
     **/
    public function getMeasurementTechnique() {
        return $this->properties['measurementTechnique'];
    }
}
