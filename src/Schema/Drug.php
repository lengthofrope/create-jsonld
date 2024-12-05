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
 * A chemical or biologic substance, used as a medical therapy, that has a
 * physiological effect on an organism. Here the term drug is used interchangeably
 * with the term medicine although clinical knowledge makes a clear difference
 * between them.
 *
 * @see https://schema.org/Drug
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Drug extends Substance
{
    public static function factory(): Drug
    {
        return new Drug('https://schema.org/', 'Drug');
    }

    /**
     * A dosing schedule for the drug for a given population, either observed,
     * recommended, or maximum dose based on the type used.
     *
     * @param $doseSchedule \LengthOfRope\JSONLD\Schema\DoseSchedule
     * @return static
     **/
    public function setDoseSchedule($doseSchedule): static {
        $this->properties['doseSchedule'] = $doseSchedule;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DoseSchedule
     **/
    public function getDoseSchedule() {
        return $this->properties['doseSchedule'];
    }
    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use
     * during pregnancy.
     *
     * @param $pregnancyWarning \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setPregnancyWarning($pregnancyWarning): static {
        $this->properties['pregnancyWarning'] = $pregnancyWarning;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getPregnancyWarning() {
        return $this->properties['pregnancyWarning'];
    }
    /**
     * The class of drug this belongs to (e.g., statins).
     *
     * @param $drugClass \LengthOfRope\JSONLD\Schema\DrugClass
     * @return static
     **/
    public function setDrugClass($drugClass): static {
        $this->properties['drugClass'] = $drugClass;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DrugClass
     **/
    public function getDrugClass() {
        return $this->properties['drugClass'];
    }
    /**
     * The drug or supplement's legal status, including any controlled substance
     * schedules that apply.
     *
     * @param $legalStatus \LengthOfRope\JSONLD\Schema\DrugLegalStatus|\LengthOfRope\JSONLD\Schema\MedicalEnumeration|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setLegalStatus($legalStatus): static {
        $this->properties['legalStatus'] = $legalStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DrugLegalStatus|\LengthOfRope\JSONLD\Schema\MedicalEnumeration|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getLegalStatus() {
        return $this->properties['legalStatus'];
    }
    /**
     * Description of the absorption and elimination of drugs, including their
     * concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics,
     * pD).
     *
     * @param $clinicalPharmacology \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setClinicalPharmacology($clinicalPharmacology): static {
        $this->properties['clinicalPharmacology'] = $clinicalPharmacology;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getClinicalPharmacology() {
        return $this->properties['clinicalPharmacology'];
    }
    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet',
     * 'suspension', 'injection'.
     *
     * @param $dosageForm \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setDosageForm($dosageForm): static {
        $this->properties['dosageForm'] = $dosageForm;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getDosageForm() {
        return $this->properties['dosageForm'];
    }
    /**
     * True if the drug is available in a generic form (regardless of name).
     *
     * @param $isAvailableGenerically \LengthOfRope\JSONLD\DataType\Boolean
     * @return static
     **/
    public function setIsAvailableGenerically($isAvailableGenerically): static {
        $this->properties['isAvailableGenerically'] = $isAvailableGenerically;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Boolean
     **/
    public function getIsAvailableGenerically() {
        return $this->properties['isAvailableGenerically'];
    }
    /**
     * Indicates the status of drug prescription, e.g. local catalogs classifications
     * or whether the drug is available by prescription or over-the-counter, etc.
     *
     * @param $prescriptionStatus \LengthOfRope\JSONLD\Schema\DrugPrescriptionStatus|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setPrescriptionStatus($prescriptionStatus): static {
        $this->properties['prescriptionStatus'] = $prescriptionStatus;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DrugPrescriptionStatus|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getPrescriptionStatus() {
        return $this->properties['prescriptionStatus'];
    }
    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use by
     * breastfeeding mothers.
     *
     * @param $breastfeedingWarning \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setBreastfeedingWarning($breastfeedingWarning): static {
        $this->properties['breastfeedingWarning'] = $breastfeedingWarning;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getBreastfeedingWarning() {
        return $this->properties['breastfeedingWarning'];
    }
    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of
     * alcohol while taking this drug.
     *
     * @param $alcoholWarning \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setAlcoholWarning($alcoholWarning): static {
        $this->properties['alcoholWarning'] = $alcoholWarning;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getAlcoholWarning() {
        return $this->properties['alcoholWarning'];
    }
    /**
     * Any other drug related to this one, for example commonly-prescribed
     * alternatives.
     *
     * @param $relatedDrug \LengthOfRope\JSONLD\Schema\Drug
     * @return static
     **/
    public function setRelatedDrug($relatedDrug): static {
        $this->properties['relatedDrug'] = $relatedDrug;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Drug
     **/
    public function getRelatedDrug() {
        return $this->properties['relatedDrug'];
    }
    /**
     * The specific biochemical interaction through which this drug or supplement
     * produces its pharmacological effect.
     *
     * @param $mechanismOfAction \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setMechanismOfAction($mechanismOfAction): static {
        $this->properties['mechanismOfAction'] = $mechanismOfAction;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getMechanismOfAction() {
        return $this->properties['mechanismOfAction'];
    }
    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     * @param $isProprietary \LengthOfRope\JSONLD\DataType\Boolean
     * @return static
     **/
    public function setIsProprietary($isProprietary): static {
        $this->properties['isProprietary'] = $isProprietary;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Boolean
     **/
    public function getIsProprietary() {
        return $this->properties['isProprietary'];
    }
    /**
     * Another drug that is known to interact with this drug in a way that impacts the
     * effect of this drug or causes a risk to the patient. Note: disease interactions
     * are typically captured as contraindications.
     *
     * @param $interactingDrug \LengthOfRope\JSONLD\Schema\Drug
     * @return static
     **/
    public function setInteractingDrug($interactingDrug): static {
        $this->properties['interactingDrug'] = $interactingDrug;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Drug
     **/
    public function getInteractingDrug() {
        return $this->properties['interactingDrug'];
    }
    /**
     * Description of the absorption and elimination of drugs, including their
     * concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics,
     * pD).
     *
     * @param $clincalPharmacology \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setClincalPharmacology($clincalPharmacology): static {
        $this->properties['clincalPharmacology'] = $clincalPharmacology;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getClincalPharmacology() {
        return $this->properties['clincalPharmacology'];
    }
    /**
     * Any information related to overdose on a drug, including signs or symptoms,
     * treatments, contact information for emergency response.
     *
     * @param $overdosage \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setOverdosage($overdosage): static {
        $this->properties['overdosage'] = $overdosage;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getOverdosage() {
        return $this->properties['overdosage'];
    }
    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of
     * specific foods while taking this drug.
     *
     * @param $foodWarning \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setFoodWarning($foodWarning): static {
        $this->properties['foodWarning'] = $foodWarning;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getFoodWarning() {
        return $this->properties['foodWarning'];
    }
    /**
     * Pregnancy category of this drug.
     *
     * @param $pregnancyCategory \LengthOfRope\JSONLD\Schema\DrugPregnancyCategory
     * @return static
     **/
    public function setPregnancyCategory($pregnancyCategory): static {
        $this->properties['pregnancyCategory'] = $pregnancyCategory;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DrugPregnancyCategory
     **/
    public function getPregnancyCategory() {
        return $this->properties['pregnancyCategory'];
    }
    /**
     * An available dosage strength for the drug.
     *
     * @param $availableStrength \LengthOfRope\JSONLD\Schema\DrugStrength
     * @return static
     **/
    public function setAvailableStrength($availableStrength): static {
        $this->properties['availableStrength'] = $availableStrength;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DrugStrength
     **/
    public function getAvailableStrength() {
        return $this->properties['availableStrength'];
    }
    /**
     * Any FDA or other warnings about the drug (text or URL).
     *
     * @param $warning \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setWarning($warning): static {
        $this->properties['warning'] = $warning;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\URL
     **/
    public function getWarning() {
        return $this->properties['warning'];
    }
    /**
     * A route by which this drug may be administered, e.g. 'oral'.
     *
     * @param $administrationRoute \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setAdministrationRoute($administrationRoute): static {
        $this->properties['administrationRoute'] = $administrationRoute;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getAdministrationRoute() {
        return $this->properties['administrationRoute'];
    }
    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     *
     * @param $proprietaryName \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setProprietaryName($proprietaryName): static {
        $this->properties['proprietaryName'] = $proprietaryName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getProprietaryName() {
        return $this->properties['proprietaryName'];
    }
    /**
     * Link to prescribing information for the drug.
     *
     * @param $prescribingInfo \LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setPrescribingInfo($prescribingInfo): static {
        $this->properties['prescribingInfo'] = $prescribingInfo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\URL
     **/
    public function getPrescribingInfo() {
        return $this->properties['prescribingInfo'];
    }
    /**
     * Recommended intake of this supplement for a given population as defined by a
     * specific recommending authority.
     *
     * @param $maximumIntake \LengthOfRope\JSONLD\Schema\MaximumDoseSchedule
     * @return static
     **/
    public function setMaximumIntake($maximumIntake): static {
        $this->properties['maximumIntake'] = $maximumIntake;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MaximumDoseSchedule
     **/
    public function getMaximumIntake() {
        return $this->properties['maximumIntake'];
    }
    /**
     * The generic name of this drug or supplement.
     *
     * @param $nonProprietaryName \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setNonProprietaryName($nonProprietaryName): static {
        $this->properties['nonProprietaryName'] = $nonProprietaryName;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getNonProprietaryName() {
        return $this->properties['nonProprietaryName'];
    }
    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     *
     * @param $drugUnit \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setDrugUnit($drugUnit): static {
        $this->properties['drugUnit'] = $drugUnit;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getDrugUnit() {
        return $this->properties['drugUnit'];
    }
    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     * @param $activeIngredient \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setActiveIngredient($activeIngredient): static {
        $this->properties['activeIngredient'] = $activeIngredient;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getActiveIngredient() {
        return $this->properties['activeIngredient'];
    }
    /**
     * Link to the drug's label details.
     *
     * @param $labelDetails \LengthOfRope\JSONLD\Schema\URL
     * @return static
     **/
    public function setLabelDetails($labelDetails): static {
        $this->properties['labelDetails'] = $labelDetails;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\URL
     **/
    public function getLabelDetails() {
        return $this->properties['labelDetails'];
    }
    /**
     * The RxCUI drug identifier from RXNORM.
     *
     * @param $rxcui \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setRxcui($rxcui): static {
        $this->properties['rxcui'] = $rxcui;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getRxcui() {
        return $this->properties['rxcui'];
    }
    /**
     * The insurance plans that cover this drug.
     *
     * @param $includedInHealthInsurancePlan \LengthOfRope\JSONLD\Schema\HealthInsurancePlan
     * @return static
     **/
    public function setIncludedInHealthInsurancePlan($includedInHealthInsurancePlan): static {
        $this->properties['includedInHealthInsurancePlan'] = $includedInHealthInsurancePlan;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\HealthInsurancePlan
     **/
    public function getIncludedInHealthInsurancePlan() {
        return $this->properties['includedInHealthInsurancePlan'];
    }
}
