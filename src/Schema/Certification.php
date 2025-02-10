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
 * A Certification is an official and authoritative statement about a subject, for
 * example a product, service, person, or organization. A certification is
 * typically issued by an indendent certification body, for example a professional
 * organization or government. It formally attests certain characteristics about
 * the subject, for example Organizations can be ISO certified, Food products can
 * be certified Organic or Vegan, a Person can be a certified professional, a Place
 * can be certified for food processing. There are certifications for many domains:
 * regulatory, organizational, recycling, food, efficiency, educational,
 * ecological, etc. A certification is a form of credential, as are accreditations
 * and licenses. Mapped from the
 * [gs1:CertificationDetails](https://www.gs1.org/voc/CertificationDetails) class
 * in the GS1 Web Vocabulary.
 *
 * @see https://schema.org/Certification
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Certification extends CreativeWork
{
    public static function factory(): Certification
    {
        return new Certification('https://schema.org/', 'Certification');
    }

    /**
     * Indicates the current status of a certification: active or inactive. See also
     * [gs1:certificationStatus](https://www.gs1.org/voc/certificationStatus).
     *
     * @param $certificationStatus \LengthOfRope\JSONLD\Schema\CertificationStatusEnumeration
     * @return static
     **/
    public function setCertificationStatus($certificationStatus): static {
        $this->properties['certificationStatus'] = $certificationStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\CertificationStatusEnumeration
     **/
    public function getCertificationStatus() {
        return $this->properties['certificationStatus'];
    }
    /**
     * The organization issuing the item, for example a [[Permit]], [[Ticket]], or
     * [[Certification]].
     *
     * @param $issuedBy \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setIssuedBy($issuedBy): static {
        $this->properties['issuedBy'] = $issuedBy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getIssuedBy() {
        return $this->properties['issuedBy'];
    }
    /**
     * Date when a certification was last audited. See also
     * [gs1:certificationAuditDate](https://www.gs1.org/voc/certificationAuditDate).
     *
     * @param $auditDate \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setAuditDate($auditDate): static {
        $this->properties['auditDate'] = $auditDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getAuditDate() {
        return $this->properties['auditDate'];
    }
    /**
     * A measurement of an item, For example, the inseam of pants, the wheel size of a
     * bicycle, the gauge of a screw, or the carbon footprint measured for
     * certification by an authority. Usually an exact measurement, but can also be a
     * range of measurements for adjustable products, for example belts and ski
     * bindings.
     *
     * @param $hasMeasurement \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setHasMeasurement($hasMeasurement): static {
        $this->properties['hasMeasurement'] = $hasMeasurement;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getHasMeasurement() {
        return $this->properties['hasMeasurement'];
    }
    /**
     * The geographic area where the item is valid. Applies for example to a
     * [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]].
     *
     * @param $validIn \LengthOfRope\JSONLD\Schema\AdministrativeArea
     * @return static
     **/
    public function setValidIn($validIn): static {
        $this->properties['validIn'] = $validIn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AdministrativeArea
     **/
    public function getValidIn() {
        return $this->properties['validIn'];
    }
    /**
     * The subject matter of the content.
     *
     * @param $about \LengthOfRope\JSONLD\Schema\Thing
     * @return static
     **/
    public function setAbout($about): static {
        $this->properties['about'] = $about;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing
     **/
    public function getAbout() {
        return $this->properties['about'];
    }
    /**
     * Identifier of a certification instance (as registered with an independent
     * certification body). Typically this identifier can be used to consult and verify
     * the certification instance. See also
     * [gs1:certificationIdentification](https://www.gs1.org/voc/certificationIdentification).
     *
     * @param $certificationIdentification \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setCertificationIdentification($certificationIdentification): static {
        $this->properties['certificationIdentification'] = $certificationIdentification;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getCertificationIdentification() {
        return $this->properties['certificationIdentification'];
    }
    /**
     * Rating of a certification instance (as defined by an independent certification
     * body). Typically this rating can be used to rate the level to which the
     * requirements of the certification instance are fulfilled. See also
     * [gs1:certificationValue](https://www.gs1.org/voc/certificationValue).
     *
     * @param $certificationRating \LengthOfRope\JSONLD\Schema\Rating
     * @return static
     **/
    public function setCertificationRating($certificationRating): static {
        $this->properties['certificationRating'] = $certificationRating;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Rating
     **/
    public function getCertificationRating() {
        return $this->properties['certificationRating'];
    }
    /**
     * Date of first publication or broadcast. For example the date a [[CreativeWork]]
     * was broadcast or a [[Certification]] was issued.
     *
     * @param $datePublished \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setDatePublished($datePublished): static {
        $this->properties['datePublished'] = $datePublished;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getDatePublished() {
        return $this->properties['datePublished'];
    }
    /**
     * An associated logo.
     *
     * @param $logo \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\ImageObject
     * @return static
     **/
    public function setLogo($logo): static {
        $this->properties['logo'] = $logo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL|\LengthOfRope\JSONLD\Schema\ImageObject
     **/
    public function getLogo() {
        return $this->properties['logo'];
    }
    /**
     * The date when the item becomes valid.
     *
     * @param $validFrom \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setValidFrom($validFrom): static {
        $this->properties['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getValidFrom() {
        return $this->properties['validFrom'];
    }
    /**
     * Date the content expires and is no longer useful or available. For example a
     * [[VideoObject]] or [[NewsArticle]] whose availability or relevance is
     * time-limited, a [[ClaimReview]] fact check whose publisher wants to indicate
     * that it may no longer be relevant (or helpful to highlight) after some date, or
     * a [[Certification]] the validity has expired.
     *
     * @param $expires \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     * @return static
     **/
    public function setExpires($expires): static {
        $this->properties['expires'] = $expires;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDate|\LengthOfRope\JSONLD\DataType\TypeDateTime
     **/
    public function getExpires() {
        return $this->properties['expires'];
    }
}
