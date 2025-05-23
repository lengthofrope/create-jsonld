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
 * A CDCPMDRecord is a data structure representing a record in a CDC tabular data
 * format
 * * *        used for hospital data reporting. See
 * [documentation](/docs/cdc-covid.html) for details, and the linked CDC materials
 * for authoritative
 * * *        definitions used as the source here.
 * *
 *
 * @see https://schema.org/CDCPMDRecord
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CDCPMDRecord extends StructuredValue
{
    public static function factory(): CDCPMDRecord
    {
        return new CDCPMDRecord('https://schema.org/', 'CDCPMDRecord');
    }

    /**
     * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit
     * (ICU) beds.
     *
     * @param $cvdNumICUBeds \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumICUBeds($cvdNumICUBeds): static {
        $this->properties['cvdNumICUBeds'] = $cvdNumICUBeds;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumICUBeds() {
        return $this->properties['cvdNumICUBeds'];
    }
    /**
     * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
     *
     * @param $cvdNumVent \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumVent($cvdNumVent): static {
        $this->properties['cvdNumVent'] = $cvdNumVent;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumVent() {
        return $this->properties['cvdNumVent'];
    }
    /**
     * numtotbeds - ALL HOSPITAL BEDS: Total number of all inpatient and outpatient
     * beds, including all staffed, ICU, licensed, and overflow (surge) beds used for
     * inpatients or outpatients.
     *
     * @param $cvdNumTotBeds \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumTotBeds($cvdNumTotBeds): static {
        $this->properties['cvdNumTotBeds'] = $cvdNumTotBeds;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumTotBeds() {
        return $this->properties['cvdNumTotBeds'];
    }
    /**
     * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds
     * that are occupied.
     *
     * @param $cvdNumICUBedsOcc \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumICUBedsOcc($cvdNumICUBedsOcc): static {
        $this->properties['cvdNumICUBedsOcc'] = $cvdNumICUBedsOcc;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumICUBedsOcc() {
        return $this->properties['cvdNumICUBedsOcc'];
    }
    /**
     * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed,
     * licensed, and overflow (surge) beds used for inpatients.
     *
     * @param $cvdNumBeds \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumBeds($cvdNumBeds): static {
        $this->properties['cvdNumBeds'] = $cvdNumBeds;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumBeds() {
        return $this->properties['cvdNumBeds'];
    }
    /**
     * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
     *
     * @param $cvdNumVentUse \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumVentUse($cvdNumVentUse): static {
        $this->properties['cvdNumVentUse'] = $cvdNumVentUse;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumVentUse() {
        return $this->properties['cvdNumVentUse'];
    }
    /**
     * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in
     * the hospital, ED, or any overflow location.
     *
     * @param $cvdNumC19Died \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumC19Died($cvdNumC19Died): static {
        $this->properties['cvdNumC19Died'] = $cvdNumC19Died;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumC19Died() {
        return $this->properties['cvdNumC19Died'];
    }
    /**
     * Name of the County of the NHSN facility that this data record applies to. Use
     * [[cvdFacilityId]] to identify the facility. To provide other details,
     * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     *
     * @param $cvdFacilityCounty \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCvdFacilityCounty($cvdFacilityCounty): static {
        $this->properties['cvdFacilityCounty'] = $cvdFacilityCounty;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCvdFacilityCounty() {
        return $this->properties['cvdFacilityCounty'];
    }
    /**
     * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an
     * NHSN inpatient care location who have suspected or confirmed COVID-19 and are on
     * a mechanical ventilator.
     *
     * @param $cvdNumC19MechVentPats \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumC19MechVentPats($cvdNumC19MechVentPats): static {
        $this->properties['cvdNumC19MechVentPats'] = $cvdNumC19MechVentPats;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumC19MechVentPats() {
        return $this->properties['cvdNumC19MechVentPats'];
    }
    /**
     * Identifier of the NHSN facility that this data record applies to. Use
     * [[cvdFacilityCounty]] to indicate the county. To provide other details,
     * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     *
     * @param $cvdFacilityId \LengthOfRope\JSONLD\DataType\TypeText
     * @return static
     **/
    public function setCvdFacilityId($cvdFacilityId): static {
        $this->properties['cvdFacilityId'] = $cvdFacilityId;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText
     **/
    public function getCvdFacilityId() {
        return $this->properties['cvdFacilityId'];
    }
    /**
     * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care
     * location with onset of suspected or confirmed COVID-19 14 or more days after
     * hospitalization.
     *
     * @param $cvdNumC19HOPats \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumC19HOPats($cvdNumC19HOPats): static {
        $this->properties['cvdNumC19HOPats'] = $cvdNumC19HOPats;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumC19HOPats() {
        return $this->properties['cvdNumC19HOPats'];
    }
    /**
     * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or
     * confirmed COVID-19 who are in the ED or any overflow location awaiting an
     * inpatient bed and on a mechanical ventilator.
     *
     * @param $cvdNumC19OFMechVentPats \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumC19OFMechVentPats($cvdNumC19OFMechVentPats): static {
        $this->properties['cvdNumC19OFMechVentPats'] = $cvdNumC19OFMechVentPats;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumC19OFMechVentPats() {
        return $this->properties['cvdNumC19OFMechVentPats'];
    }
    /**
     * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient
     * care location who have suspected or confirmed COVID-19.
     *
     * @param $cvdNumC19HospPats \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumC19HospPats($cvdNumC19HospPats): static {
        $this->properties['cvdNumC19HospPats'] = $cvdNumC19HospPats;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumC19HospPats() {
        return $this->properties['cvdNumC19HospPats'];
    }
    /**
     * Publication date of an online listing.
     *
     * @param $datePosted \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setDatePosted($datePosted): static {
        $this->properties['datePosted'] = $datePosted;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getDatePosted() {
        return $this->properties['datePosted'];
    }
    /**
     * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19
     * who are in the ED or any overflow location awaiting an inpatient bed.
     *
     * @param $cvdNumC19OverflowPats \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumC19OverflowPats($cvdNumC19OverflowPats): static {
        $this->properties['cvdNumC19OverflowPats'] = $cvdNumC19OverflowPats;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumC19OverflowPats() {
        return $this->properties['cvdNumC19OverflowPats'];
    }
    /**
     * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient
     * beds that are occupied.
     *
     * @param $cvdNumBedsOcc \LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setCvdNumBedsOcc($cvdNumBedsOcc): static {
        $this->properties['cvdNumBedsOcc'] = $cvdNumBedsOcc;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getCvdNumBedsOcc() {
        return $this->properties['cvdNumBedsOcc'];
    }
    /**
     * collectiondate - Date for which patient counts are reported.
     *
     * @param $cvdCollectionDate \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setCvdCollectionDate($cvdCollectionDate): static {
        $this->properties['cvdCollectionDate'] = $cvdCollectionDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getCvdCollectionDate() {
        return $this->properties['cvdCollectionDate'];
    }
}
