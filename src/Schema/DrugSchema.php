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
 * A chemical or biologic substance, used as a medical therapy, that has a physiological effect on an organism. Here the term drug is used interchangeably with the term medicine although clinical knowledge makes a clear difference between them.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DrugSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new DrugSchema('https://schema.org/', 'Drug');
    }

    /**
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     *
     * @param $doseSchedule 
     **/
    public function setDoseSchedule($doseSchedule) {
        $this->properties['doseSchedule'] = $doseSchedule;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDoseSchedule() {
        return $this->properties['doseSchedule'];
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
     *
     * @param $pregnancyWarning 
     **/
    public function setPregnancyWarning($pregnancyWarning) {
        $this->properties['pregnancyWarning'] = $pregnancyWarning;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPregnancyWarning() {
        return $this->properties['pregnancyWarning'];
    }

    /**
     * The class of drug this belongs to (e.g., statins).
     *
     * @param $drugClass 
     **/
    public function setDrugClass($drugClass) {
        $this->properties['drugClass'] = $drugClass;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDrugClass() {
        return $this->properties['drugClass'];
    }

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     *
     * @param $legalStatus ||
     **/
    public function setLegalStatus($legalStatus) {
        $this->properties['legalStatus'] = $legalStatus;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getLegalStatus() {
        return $this->properties['legalStatus'];
    }

    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     *
     * @param $clinicalPharmacology 
     **/
    public function setClinicalPharmacology($clinicalPharmacology) {
        $this->properties['clinicalPharmacology'] = $clinicalPharmacology;

        return $this;
    }

    /**
     * @return 
     **/
    public function getClinicalPharmacology() {
        return $this->properties['clinicalPharmacology'];
    }

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     *
     * @param $dosageForm 
     **/
    public function setDosageForm($dosageForm) {
        $this->properties['dosageForm'] = $dosageForm;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDosageForm() {
        return $this->properties['dosageForm'];
    }

    /**
     * True if the drug is available in a generic form (regardless of name).
     *
     * @param $isAvailableGenerically 
     **/
    public function setIsAvailableGenerically($isAvailableGenerically) {
        $this->properties['isAvailableGenerically'] = $isAvailableGenerically;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsAvailableGenerically() {
        return $this->properties['isAvailableGenerically'];
    }

    /**
     * Indicates the status of drug prescription, e.g. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
     *
     * @param $prescriptionStatus |
     **/
    public function setPrescriptionStatus($prescriptionStatus) {
        $this->properties['prescriptionStatus'] = $prescriptionStatus;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPrescriptionStatus() {
        return $this->properties['prescriptionStatus'];
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
     *
     * @param $breastfeedingWarning 
     **/
    public function setBreastfeedingWarning($breastfeedingWarning) {
        $this->properties['breastfeedingWarning'] = $breastfeedingWarning;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBreastfeedingWarning() {
        return $this->properties['breastfeedingWarning'];
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
     *
     * @param $alcoholWarning 
     **/
    public function setAlcoholWarning($alcoholWarning) {
        $this->properties['alcoholWarning'] = $alcoholWarning;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAlcoholWarning() {
        return $this->properties['alcoholWarning'];
    }

    /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
     *
     * @param $relatedDrug 
     **/
    public function setRelatedDrug($relatedDrug) {
        $this->properties['relatedDrug'] = $relatedDrug;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRelatedDrug() {
        return $this->properties['relatedDrug'];
    }

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     *
     * @param $mechanismOfAction 
     **/
    public function setMechanismOfAction($mechanismOfAction) {
        $this->properties['mechanismOfAction'] = $mechanismOfAction;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMechanismOfAction() {
        return $this->properties['mechanismOfAction'];
    }

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     * @param $isProprietary 
     **/
    public function setIsProprietary($isProprietary) {
        $this->properties['isProprietary'] = $isProprietary;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsProprietary() {
        return $this->properties['isProprietary'];
    }

    /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
     *
     * @param $interactingDrug 
     **/
    public function setInteractingDrug($interactingDrug) {
        $this->properties['interactingDrug'] = $interactingDrug;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInteractingDrug() {
        return $this->properties['interactingDrug'];
    }

    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     *
     * @param $clincalPharmacology 
     **/
    public function setClincalPharmacology($clincalPharmacology) {
        $this->properties['clincalPharmacology'] = $clincalPharmacology;

        return $this;
    }

    /**
     * @return 
     **/
    public function getClincalPharmacology() {
        return $this->properties['clincalPharmacology'];
    }

    /**
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
     *
     * @param $overdosage 
     **/
    public function setOverdosage($overdosage) {
        $this->properties['overdosage'] = $overdosage;

        return $this;
    }

    /**
     * @return 
     **/
    public function getOverdosage() {
        return $this->properties['overdosage'];
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
     *
     * @param $foodWarning 
     **/
    public function setFoodWarning($foodWarning) {
        $this->properties['foodWarning'] = $foodWarning;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFoodWarning() {
        return $this->properties['foodWarning'];
    }

    /**
     * Pregnancy category of this drug.
     *
     * @param $pregnancyCategory 
     **/
    public function setPregnancyCategory($pregnancyCategory) {
        $this->properties['pregnancyCategory'] = $pregnancyCategory;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPregnancyCategory() {
        return $this->properties['pregnancyCategory'];
    }

    /**
     * An available dosage strength for the drug.
     *
     * @param $availableStrength 
     **/
    public function setAvailableStrength($availableStrength) {
        $this->properties['availableStrength'] = $availableStrength;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAvailableStrength() {
        return $this->properties['availableStrength'];
    }

    /**
     * Any FDA or other warnings about the drug (text or URL).
     *
     * @param $warning |
     **/
    public function setWarning($warning) {
        $this->properties['warning'] = $warning;

        return $this;
    }

    /**
     * @return |
     **/
    public function getWarning() {
        return $this->properties['warning'];
    }

    /**
     * A route by which this drug may be administered, e.g. 'oral'.
     *
     * @param $administrationRoute 
     **/
    public function setAdministrationRoute($administrationRoute) {
        $this->properties['administrationRoute'] = $administrationRoute;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAdministrationRoute() {
        return $this->properties['administrationRoute'];
    }

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     *
     * @param $proprietaryName 
     **/
    public function setProprietaryName($proprietaryName) {
        $this->properties['proprietaryName'] = $proprietaryName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProprietaryName() {
        return $this->properties['proprietaryName'];
    }

    /**
     * Link to prescribing information for the drug.
     *
     * @param $prescribingInfo 
     **/
    public function setPrescribingInfo($prescribingInfo) {
        $this->properties['prescribingInfo'] = $prescribingInfo;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPrescribingInfo() {
        return $this->properties['prescribingInfo'];
    }

    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     *
     * @param $maximumIntake 
     **/
    public function setMaximumIntake($maximumIntake) {
        $this->properties['maximumIntake'] = $maximumIntake;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMaximumIntake() {
        return $this->properties['maximumIntake'];
    }

    /**
     * The generic name of this drug or supplement.
     *
     * @param $nonProprietaryName 
     **/
    public function setNonProprietaryName($nonProprietaryName) {
        $this->properties['nonProprietaryName'] = $nonProprietaryName;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNonProprietaryName() {
        return $this->properties['nonProprietaryName'];
    }

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     *
     * @param $drugUnit 
     **/
    public function setDrugUnit($drugUnit) {
        $this->properties['drugUnit'] = $drugUnit;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDrugUnit() {
        return $this->properties['drugUnit'];
    }

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     * @param $activeIngredient 
     **/
    public function setActiveIngredient($activeIngredient) {
        $this->properties['activeIngredient'] = $activeIngredient;

        return $this;
    }

    /**
     * @return 
     **/
    public function getActiveIngredient() {
        return $this->properties['activeIngredient'];
    }

    /**
     * Link to the drug's label details.
     *
     * @param $labelDetails 
     **/
    public function setLabelDetails($labelDetails) {
        $this->properties['labelDetails'] = $labelDetails;

        return $this;
    }

    /**
     * @return 
     **/
    public function getLabelDetails() {
        return $this->properties['labelDetails'];
    }

    /**
     * The RxCUI drug identifier from RXNORM.
     *
     * @param $rxcui 
     **/
    public function setRxcui($rxcui) {
        $this->properties['rxcui'] = $rxcui;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRxcui() {
        return $this->properties['rxcui'];
    }

    /**
     * The insurance plans that cover this drug.
     *
     * @param $includedInHealthInsurancePlan 
     **/
    public function setIncludedInHealthInsurancePlan($includedInHealthInsurancePlan) {
        $this->properties['includedInHealthInsurancePlan'] = $includedInHealthInsurancePlan;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIncludedInHealthInsurancePlan() {
        return $this->properties['includedInHealthInsurancePlan'];
    }


}
