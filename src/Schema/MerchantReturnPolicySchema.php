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
 * A MerchantReturnPolicy provides information about product return policies associated with an [[Organization]], [[Product]], or [[Offer]].
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MerchantReturnPolicySchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new MerchantReturnPolicySchema('https://schema.org/', 'MerchantReturnPolicy');
    }

    /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.

     *
     * @param $additionalProperty 
     **/
    public function setAdditionalProperty($additionalProperty) {
        $this->properties['additionalProperty'] = $additionalProperty;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAdditionalProperty() {
        return $this->properties['additionalProperty'];
    }

    /**
     * The type of return fees for purchased products (for any return reason).
     *
     * @param $returnFees 
     **/
    public function setReturnFees($returnFees) {
        $this->properties['returnFees'] = $returnFees;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReturnFees() {
        return $this->properties['returnFees'];
    }

    /**
     * Seasonal override of a return policy.
     *
     * @param $returnPolicySeasonalOverride 
     **/
    public function setReturnPolicySeasonalOverride($returnPolicySeasonalOverride) {
        $this->properties['returnPolicySeasonalOverride'] = $returnPolicySeasonalOverride;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReturnPolicySeasonalOverride() {
        return $this->properties['returnPolicySeasonalOverride'];
    }

    /**
     * Are in-store returns offered? (For more advanced return methods use the [[returnMethod]] property.)
     *
     * @param $inStoreReturnsOffered 
     **/
    public function setInStoreReturnsOffered($inStoreReturnsOffered) {
        $this->properties['inStoreReturnsOffered'] = $inStoreReturnsOffered;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInStoreReturnsOffered() {
        return $this->properties['inStoreReturnsOffered'];
    }

    /**
     * The type of return fees for returns of defect products.
     *
     * @param $itemDefectReturnFees 
     **/
    public function setItemDefectReturnFees($itemDefectReturnFees) {
        $this->properties['itemDefectReturnFees'] = $itemDefectReturnFees;

        return $this;
    }

    /**
     * @return 
     **/
    public function getItemDefectReturnFees() {
        return $this->properties['itemDefectReturnFees'];
    }

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a product returned due to customer remorse.
     *
     * @param $customerRemorseReturnLabelSource 
     **/
    public function setCustomerRemorseReturnLabelSource($customerRemorseReturnLabelSource) {
        $this->properties['customerRemorseReturnLabelSource'] = $customerRemorseReturnLabelSource;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCustomerRemorseReturnLabelSource() {
        return $this->properties['customerRemorseReturnLabelSource'];
    }

    /**
     * The type of return method offered, specified from an enumeration.
     *
     * @param $returnMethod 
     **/
    public function setReturnMethod($returnMethod) {
        $this->properties['returnMethod'] = $returnMethod;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReturnMethod() {
        return $this->properties['returnMethod'];
    }

    /**
     * A refund type, from an enumerated list.
     *
     * @param $refundType 
     **/
    public function setRefundType($refundType) {
        $this->properties['refundType'] = $refundType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getRefundType() {
        return $this->properties['refundType'];
    }

    /**
     * The membership program tier an Offer (or a PriceSpecification, OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
     *
     * @param $validForMemberTier 
     **/
    public function setValidForMemberTier($validForMemberTier) {
        $this->properties['validForMemberTier'] = $validForMemberTier;

        return $this;
    }

    /**
     * @return 
     **/
    public function getValidForMemberTier() {
        return $this->properties['validForMemberTier'];
    }

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a defect product.
     *
     * @param $itemDefectReturnLabelSource 
     **/
    public function setItemDefectReturnLabelSource($itemDefectReturnLabelSource) {
        $this->properties['itemDefectReturnLabelSource'] = $itemDefectReturnLabelSource;

        return $this;
    }

    /**
     * @return 
     **/
    public function getItemDefectReturnLabelSource() {
        return $this->properties['itemDefectReturnLabelSource'];
    }

    /**
     * The country where the product has to be sent to for returns, for example "Ireland" using the [[name]] property of [[Country]]. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1). Note that this can be different from the country where the product was originally shipped from or sent to.
     *
     * @param $returnPolicyCountry |
     **/
    public function setReturnPolicyCountry($returnPolicyCountry) {
        $this->properties['returnPolicyCountry'] = $returnPolicyCountry;

        return $this;
    }

    /**
     * @return |
     **/
    public function getReturnPolicyCountry() {
        return $this->properties['returnPolicyCountry'];
    }

    /**
     * Amount of shipping costs for defect product returns. Applicable when property [[itemDefectReturnFees]] equals [[ReturnShippingFees]].
     *
     * @param $itemDefectReturnShippingFeesAmount 
     **/
    public function setItemDefectReturnShippingFeesAmount($itemDefectReturnShippingFeesAmount) {
        $this->properties['itemDefectReturnShippingFeesAmount'] = $itemDefectReturnShippingFeesAmount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getItemDefectReturnShippingFeesAmount() {
        return $this->properties['itemDefectReturnShippingFeesAmount'];
    }

    /**
     * The method (from an enumeration) by which the customer obtains a return shipping label for a product returned for any reason.
     *
     * @param $returnLabelSource 
     **/
    public function setReturnLabelSource($returnLabelSource) {
        $this->properties['returnLabelSource'] = $returnLabelSource;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReturnLabelSource() {
        return $this->properties['returnLabelSource'];
    }

    /**
     * Amount of shipping costs for product returns (for any reason). Applicable when property [[returnFees]] equals [[ReturnShippingFees]].
     *
     * @param $returnShippingFeesAmount 
     **/
    public function setReturnShippingFeesAmount($returnShippingFeesAmount) {
        $this->properties['returnShippingFeesAmount'] = $returnShippingFeesAmount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReturnShippingFeesAmount() {
        return $this->properties['returnShippingFeesAmount'];
    }

    /**
     * Specifies a Web page or service by URL, for product returns.
     *
     * @param $merchantReturnLink 
     **/
    public function setMerchantReturnLink($merchantReturnLink) {
        $this->properties['merchantReturnLink'] = $merchantReturnLink;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMerchantReturnLink() {
        return $this->properties['merchantReturnLink'];
    }

    /**
     * The amount of shipping costs if a product is returned due to customer remorse. Applicable when property [[customerRemorseReturnFees]] equals [[ReturnShippingFees]].
     *
     * @param $customerRemorseReturnShippingFeesAmount 
     **/
    public function setCustomerRemorseReturnShippingFeesAmount($customerRemorseReturnShippingFeesAmount) {
        $this->properties['customerRemorseReturnShippingFeesAmount'] = $customerRemorseReturnShippingFeesAmount;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCustomerRemorseReturnShippingFeesAmount() {
        return $this->properties['customerRemorseReturnShippingFeesAmount'];
    }

    /**
     * The type of return fees if the product is returned due to customer remorse.
     *
     * @param $customerRemorseReturnFees 
     **/
    public function setCustomerRemorseReturnFees($customerRemorseReturnFees) {
        $this->properties['customerRemorseReturnFees'] = $customerRemorseReturnFees;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCustomerRemorseReturnFees() {
        return $this->properties['customerRemorseReturnFees'];
    }

    /**
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the offer. Also used for product return policies to specify the condition of products accepted for returns.
     *
     * @param $itemCondition 
     **/
    public function setItemCondition($itemCondition) {
        $this->properties['itemCondition'] = $itemCondition;

        return $this;
    }

    /**
     * @return 
     **/
    public function getItemCondition() {
        return $this->properties['itemCondition'];
    }

    /**
     * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned. Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
     *
     * @param $merchantReturnDays ||
     **/
    public function setMerchantReturnDays($merchantReturnDays) {
        $this->properties['merchantReturnDays'] = $merchantReturnDays;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getMerchantReturnDays() {
        return $this->properties['merchantReturnDays'];
    }

    /**
     * Specifies an applicable return policy (from an enumeration).
     *
     * @param $returnPolicyCategory 
     **/
    public function setReturnPolicyCategory($returnPolicyCategory) {
        $this->properties['returnPolicyCategory'] = $returnPolicyCategory;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReturnPolicyCategory() {
        return $this->properties['returnPolicyCategory'];
    }

    /**
     * A country where a particular merchant return policy applies to, for example the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @param $applicableCountry |
     **/
    public function setApplicableCountry($applicableCountry) {
        $this->properties['applicableCountry'] = $applicableCountry;

        return $this;
    }

    /**
     * @return |
     **/
    public function getApplicableCountry() {
        return $this->properties['applicableCountry'];
    }

    /**
     * Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns, or use [[Number]] to specify a percentage of the product price paid by the customer.
     *
     * @param $restockingFee |
     **/
    public function setRestockingFee($restockingFee) {
        $this->properties['restockingFee'] = $restockingFee;

        return $this;
    }

    /**
     * @return |
     **/
    public function getRestockingFee() {
        return $this->properties['restockingFee'];
    }


}
