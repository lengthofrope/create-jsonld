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
 * A Certification is an official and authoritative statement about a subject, for example a product, service, person, or organization. A certification is typically issued by an indendent certification body, for example a professional organization or government. It formally attests certain characteristics about the subject, for example Organizations can be ISO certified, Food products can be certified Organic or Vegan, a Person can be a certified professional, a Place can be certified for food processing. There are certifications for many domains: regulatory, organizational, recycling, food, efficiency, educational, ecological, etc. A certification is a form of credential, as are accreditations and licenses. Mapped from the [gs1:CertificationDetails](https://www.gs1.org/voc/CertificationDetails) class in the GS1 Web Vocabulary.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CertificationSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new CertificationSchema('https://schema.org/', 'Certification');
    }

    /**
     * Indicates the current status of a certification: active or inactive. See also  [gs1:certificationStatus](https://www.gs1.org/voc/certificationStatus).
     *
     * @param $certificationStatus 
     **/
    public function setCertificationStatus($certificationStatus) {
        $this->properties['certificationStatus'] = $certificationStatus;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCertificationStatus() {
        return $this->properties['certificationStatus'];
    }

    /**
     * The organization issuing the item, for example a [[Permit]], [[Ticket]], or [[Certification]].
     *
     * @param $issuedBy 
     **/
    public function setIssuedBy($issuedBy) {
        $this->properties['issuedBy'] = $issuedBy;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIssuedBy() {
        return $this->properties['issuedBy'];
    }

    /**
     * Date when a certification was last audited. See also  [gs1:certificationAuditDate](https://www.gs1.org/voc/certificationAuditDate).
     *
     * @param $auditDate |
     **/
    public function setAuditDate($auditDate) {
        $this->properties['auditDate'] = $auditDate;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAuditDate() {
        return $this->properties['auditDate'];
    }

    /**
     * A measurement of an item, For example, the inseam of pants, the wheel size of a bicycle, the gauge of a screw, or the carbon footprint measured for certification by an authority. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     *
     * @param $hasMeasurement 
     **/
    public function setHasMeasurement($hasMeasurement) {
        $this->properties['hasMeasurement'] = $hasMeasurement;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasMeasurement() {
        return $this->properties['hasMeasurement'];
    }

    /**
     * The geographic area where the item is valid. Applies for example to a [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]]. 
     *
     * @param $validIn 
     **/
    public function setValidIn($validIn) {
        $this->properties['validIn'] = $validIn;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValidIn() {
        return $this->properties['validIn'];
    }

    /**
     * The subject matter of the content.
     *
     * @param $about 
     **/
    public function setAbout($about) {
        $this->properties['about'] = $about;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAbout() {
        return $this->properties['about'];
    }

    /**
     * Identifier of a certification instance (as registered with an independent certification body). Typically this identifier can be used to consult and verify the certification instance. See also [gs1:certificationIdentification](https://www.gs1.org/voc/certificationIdentification).
     *
     * @param $certificationIdentification |
     **/
    public function setCertificationIdentification($certificationIdentification) {
        $this->properties['certificationIdentification'] = $certificationIdentification;

        return $this;
    }

    /**
     * @return |
     **/
    public function getCertificationIdentification() {
        return $this->properties['certificationIdentification'];
    }

    /**
     * Rating of a certification instance (as defined by an independent certification body). Typically this rating can be used to rate the level to which the requirements of the certification instance are fulfilled. See also [gs1:certificationValue](https://www.gs1.org/voc/certificationValue).
     *
     * @param $certificationRating 
     **/
    public function setCertificationRating($certificationRating) {
        $this->properties['certificationRating'] = $certificationRating;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCertificationRating() {
        return $this->properties['certificationRating'];
    }

    /**
     * Date of first publication or broadcast. For example the date a [[CreativeWork]] was broadcast or a [[Certification]] was issued.
     *
     * @param $datePublished |
     **/
    public function setDatePublished($datePublished) {
        $this->properties['datePublished'] = $datePublished;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDatePublished() {
        return $this->properties['datePublished'];
    }

    /**
     * An associated logo.
     *
     * @param $logo |
     **/
    public function setLogo($logo) {
        $this->properties['logo'] = $logo;

        return $this;
    }

    /**
     * @return |
     **/
    public function getLogo() {
        return $this->properties['logo'];
    }

    /**
     * The date when the item becomes valid.
     *
     * @param $validFrom |
     **/
    public function setValidFrom($validFrom) {
        $this->properties['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * @return |
     **/
    public function getValidFrom() {
        return $this->properties['validFrom'];
    }

    /**
     * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance is time-limited, a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date, or a [[Certification]] the validity has expired.
     *
     * @param $expires |
     **/
    public function setExpires($expires) {
        $this->properties['expires'] = $expires;

        return $this;
    }

    /**
     * @return |
     **/
    public function getExpires() {
        return $this->properties['expires'];
    }


}
