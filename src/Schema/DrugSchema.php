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
 * A chemical or biologic substance, used as a medical therapy, that has a physiological effect on an organism.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DrugSchema extends MedicalTherapySchema
{
    public static function factory()
    {
        return new DrugSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     **/
    private $activeIngredient;
    public function setActiveIngredient($activeIngredient) {
        $this->activeIngredient = $activeIngredient;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getActiveIngredient() {
        return $this->activeIngredient;
    }

    /**
     * A route by which this drug may be administered, e.g. 'oral'.
     **/
    private $administrationRoute;
    public function setAdministrationRoute($administrationRoute) {
        $this->administrationRoute = $administrationRoute;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAdministrationRoute() {
        return $this->administrationRoute;
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
     **/
    private $alcoholWarning;
    public function setAlcoholWarning($alcoholWarning) {
        $this->alcoholWarning = $alcoholWarning;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getAlcoholWarning() {
        return $this->alcoholWarning;
    }

    /**
     * An available dosage strength for the drug.
     **/
    private $availableStrength;
    public function setAvailableStrength($availableStrength) {
        $this->availableStrength = $availableStrength;

        return $this;
    }

    /**
     * @return DrugStrengthSchema     
     **/
    public function getAvailableStrength() {
        return $this->availableStrength;
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
     **/
    private $breastfeedingWarning;
    public function setBreastfeedingWarning($breastfeedingWarning) {
        $this->breastfeedingWarning = $breastfeedingWarning;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getBreastfeedingWarning() {
        return $this->breastfeedingWarning;
    }

    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     **/
    private $clinicalPharmacology;
    public function setClinicalPharmacology($clinicalPharmacology) {
        $this->clinicalPharmacology = $clinicalPharmacology;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getClinicalPharmacology() {
        return $this->clinicalPharmacology;
    }

    /**
     * Cost per unit of the drug, as reported by the source being tagged.
     **/
    private $cost;
    public function setCost($cost) {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @return DrugCostSchema     
     **/
    public function getCost() {
        return $this->cost;
    }

    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     **/
    private $dosageForm;
    public function setDosageForm($dosageForm) {
        $this->dosageForm = $dosageForm;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getDosageForm() {
        return $this->dosageForm;
    }

    /**
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     **/
    private $doseSchedule;
    public function setDoseSchedule($doseSchedule) {
        $this->doseSchedule = $doseSchedule;

        return $this;
    }

    /**
     * @return DoseScheduleSchema     
     **/
    public function getDoseSchedule() {
        return $this->doseSchedule;
    }

    /**
     * The class of drug this belongs to (e.g., statins).
     **/
    private $drugClass;
    public function setDrugClass($drugClass) {
        $this->drugClass = $drugClass;

        return $this;
    }

    /**
     * @return DrugClassSchema     
     **/
    public function getDrugClass() {
        return $this->drugClass;
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
     **/
    private $foodWarning;
    public function setFoodWarning($foodWarning) {
        $this->foodWarning = $foodWarning;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getFoodWarning() {
        return $this->foodWarning;
    }

    /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
     **/
    private $interactingDrug;
    public function setInteractingDrug($interactingDrug) {
        $this->interactingDrug = $interactingDrug;

        return $this;
    }

    /**
     * @return DrugSchema     
     **/
    public function getInteractingDrug() {
        return $this->interactingDrug;
    }

    /**
     * True if the drug is available in a generic form (regardless of name).
     **/
    private $isAvailableGenerically;
    public function setIsAvailableGenerically($isAvailableGenerically) {
        $this->isAvailableGenerically = $isAvailableGenerically;

        return $this;
    }

    /**
     * @return BooleanSchema     
     **/
    public function getIsAvailableGenerically() {
        return $this->isAvailableGenerically;
    }

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     **/
    private $isProprietary;
    public function setIsProprietary($isProprietary) {
        $this->isProprietary = $isProprietary;

        return $this;
    }

    /**
     * @return BooleanSchema     
     **/
    public function getIsProprietary() {
        return $this->isProprietary;
    }

    /**
     * Link to the drug's label details.
     **/
    private $labelDetails;
    public function setLabelDetails($labelDetails) {
        $this->labelDetails = $labelDetails;

        return $this;
    }

    /**
     * @return URLSchema     
     **/
    public function getLabelDetails() {
        return $this->labelDetails;
    }

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     **/
    private $legalStatus;
    public function setLegalStatus($legalStatus) {
        $this->legalStatus = $legalStatus;

        return $this;
    }

    /**
     * @return DrugLegalStatusSchema     
     **/
    public function getLegalStatus() {
        return $this->legalStatus;
    }

    /**
     * The manufacturer of the product.
     **/
    private $manufacturer;
    public function setManufacturer($manufacturer) {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * @return OrganizationSchema     
     **/
    public function getManufacturer() {
        return $this->manufacturer;
    }

    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     **/
    private $mechanismOfAction;
    public function setMechanismOfAction($mechanismOfAction) {
        $this->mechanismOfAction = $mechanismOfAction;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getMechanismOfAction() {
        return $this->mechanismOfAction;
    }

    /**
     * The generic name of this drug or supplement.
     **/
    private $nonProprietaryName;
    public function setNonProprietaryName($nonProprietaryName) {
        $this->nonProprietaryName = $nonProprietaryName;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getNonProprietaryName() {
        return $this->nonProprietaryName;
    }

    /**
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
     **/
    private $overdosage;
    public function setOverdosage($overdosage) {
        $this->overdosage = $overdosage;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getOverdosage() {
        return $this->overdosage;
    }

    /**
     * Pregnancy category of this drug.
     **/
    private $pregnancyCategory;
    public function setPregnancyCategory($pregnancyCategory) {
        $this->pregnancyCategory = $pregnancyCategory;

        return $this;
    }

    /**
     * @return DrugPregnancyCategorySchema     
     **/
    public function getPregnancyCategory() {
        return $this->pregnancyCategory;
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
     **/
    private $pregnancyWarning;
    public function setPregnancyWarning($pregnancyWarning) {
        $this->pregnancyWarning = $pregnancyWarning;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getPregnancyWarning() {
        return $this->pregnancyWarning;
    }

    /**
     * Link to prescribing information for the drug.
     **/
    private $prescribingInfo;
    public function setPrescribingInfo($prescribingInfo) {
        $this->prescribingInfo = $prescribingInfo;

        return $this;
    }

    /**
     * @return URLSchema     
     **/
    public function getPrescribingInfo() {
        return $this->prescribingInfo;
    }

    /**
     * Indicates whether this drug is available by prescription or over-the-counter.
     **/
    private $prescriptionStatus;
    public function setPrescriptionStatus($prescriptionStatus) {
        $this->prescriptionStatus = $prescriptionStatus;

        return $this;
    }

    /**
     * @return DrugPrescriptionStatusSchema     
     **/
    public function getPrescriptionStatus() {
        return $this->prescriptionStatus;
    }

    /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
     **/
    private $relatedDrug;
    public function setRelatedDrug($relatedDrug) {
        $this->relatedDrug = $relatedDrug;

        return $this;
    }

    /**
     * @return DrugSchema     
     **/
    public function getRelatedDrug() {
        return $this->relatedDrug;
    }

    /**
     * Any FDA or other warnings about the drug (text or URL).
     **/
    private $warning;
    public function setWarning($warning) {
        $this->warning = $warning;

        return $this;
    }

    /**
     * @return TextSchema|URLSchema     
     **/
    public function getWarning() {
        return $this->warning;
    }


}
