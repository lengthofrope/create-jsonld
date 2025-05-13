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
 * A MerchantReturnPolicy provides information about product return policies
 * associated with an [[Organization]], [[Product]], or [[Offer]].
 *
 * @see https://schema.org/MerchantReturnPolicy
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MerchantReturnPolicy extends Intangible
{
    public static function factory(): MerchantReturnPolicy
    {
        return new MerchantReturnPolicy('https://schema.org/', 'MerchantReturnPolicy');
    }

    /**
     * Specifies either a fixed return date or the number of days (from the delivery
     * date) that a product can be returned. Used when the [[returnPolicyCategory]]
     * property is specified as [[MerchantReturnFiniteReturnWindow]].
     *
     * @param $merchantReturnDays \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeInteger|\LengthOfRope\JSONLD\DataType\TypeDate
     * @return static
     **/
    public function setMerchantReturnDays($merchantReturnDays): static {
        $this->properties['merchantReturnDays'] = $merchantReturnDays;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeDateTime|\LengthOfRope\JSONLD\DataType\TypeInteger|\LengthOfRope\JSONLD\DataType\TypeDate
     **/
    public function getMerchantReturnDays() {
        return $this->properties['merchantReturnDays'];
    }
    /**
     * Are in-store returns offered? (For more advanced return methods use the
     * [[returnMethod]] property.)
     *
     * @param $inStoreReturnsOffered \LengthOfRope\JSONLD\DataType\TypeBoolean
     * @return static
     **/
    public function setInStoreReturnsOffered($inStoreReturnsOffered): static {
        $this->properties['inStoreReturnsOffered'] = $inStoreReturnsOffered;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeBoolean
     **/
    public function getInStoreReturnsOffered() {
        return $this->properties['inStoreReturnsOffered'];
    }
    /**
     * The method (from an enumeration) by which the customer obtains a return shipping
     * label for a defect product.
     *
     * @param $itemDefectReturnLabelSource \LengthOfRope\JSONLD\Schema\ReturnLabelSourceEnumeration
     * @return static
     **/
    public function setItemDefectReturnLabelSource($itemDefectReturnLabelSource): static {
        $this->properties['itemDefectReturnLabelSource'] = $itemDefectReturnLabelSource;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ReturnLabelSourceEnumeration
     **/
    public function getItemDefectReturnLabelSource() {
        return $this->properties['itemDefectReturnLabelSource'];
    }
    /**
     * The type of return fees for returns of defect products.
     *
     * @param $itemDefectReturnFees \LengthOfRope\JSONLD\Schema\ReturnFeesEnumeration
     * @return static
     **/
    public function setItemDefectReturnFees($itemDefectReturnFees): static {
        $this->properties['itemDefectReturnFees'] = $itemDefectReturnFees;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ReturnFeesEnumeration
     **/
    public function getItemDefectReturnFees() {
        return $this->properties['itemDefectReturnFees'];
    }
    /**
     * A property-value pair representing an additional characteristic of the entity,
     * e.g. a product feature or another characteristic for which there is no matching
     * property in schema.org.
     *
     * Note: Publishers should be aware that applications designed to use specific
     * schema.org properties (e.g. https://schema.org/width, https://schema.org/color,
     * https://schema.org/gtin13, ...) will typically expect such data to be provided
     * using those properties, rather than using the generic property/value mechanism.
     *
     *
     * @param $additionalProperty \LengthOfRope\JSONLD\Schema\PropertyValue
     * @return static
     **/
    public function setAdditionalProperty($additionalProperty): static {
        $this->properties['additionalProperty'] = $additionalProperty;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PropertyValue
     **/
    public function getAdditionalProperty() {
        return $this->properties['additionalProperty'];
    }
    /**
     * The type of return fees for purchased products (for any return reason).
     *
     * @param $returnFees \LengthOfRope\JSONLD\Schema\ReturnFeesEnumeration
     * @return static
     **/
    public function setReturnFees($returnFees): static {
        $this->properties['returnFees'] = $returnFees;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ReturnFeesEnumeration
     **/
    public function getReturnFees() {
        return $this->properties['returnFees'];
    }
    /**
     * A country where a particular merchant return policy applies to, for example the
     * two-letter ISO 3166-1 alpha-2 country code.
     *
     * @param $applicableCountry \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Country
     * @return static
     **/
    public function setApplicableCountry($applicableCountry): static {
        $this->properties['applicableCountry'] = $applicableCountry;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Country
     **/
    public function getApplicableCountry() {
        return $this->properties['applicableCountry'];
    }
    /**
     * The method (from an enumeration) by which the customer obtains a return shipping
     * label for a product returned for any reason.
     *
     * @param $returnLabelSource \LengthOfRope\JSONLD\Schema\ReturnLabelSourceEnumeration
     * @return static
     **/
    public function setReturnLabelSource($returnLabelSource): static {
        $this->properties['returnLabelSource'] = $returnLabelSource;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ReturnLabelSourceEnumeration
     **/
    public function getReturnLabelSource() {
        return $this->properties['returnLabelSource'];
    }
    /**
     * Amount of shipping costs for product returns (for any reason). Applicable when
     * property [[returnFees]] equals [[ReturnShippingFees]].
     *
     * @param $returnShippingFeesAmount \LengthOfRope\JSONLD\Schema\MonetaryAmount
     * @return static
     **/
    public function setReturnShippingFeesAmount($returnShippingFeesAmount): static {
        $this->properties['returnShippingFeesAmount'] = $returnShippingFeesAmount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount
     **/
    public function getReturnShippingFeesAmount() {
        return $this->properties['returnShippingFeesAmount'];
    }
    /**
     * The type of return method offered, specified from an enumeration.
     *
     * @param $returnMethod \LengthOfRope\JSONLD\Schema\ReturnMethodEnumeration
     * @return static
     **/
    public function setReturnMethod($returnMethod): static {
        $this->properties['returnMethod'] = $returnMethod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ReturnMethodEnumeration
     **/
    public function getReturnMethod() {
        return $this->properties['returnMethod'];
    }
    /**
     * Seasonal override of a return policy.
     *
     * @param $returnPolicySeasonalOverride \LengthOfRope\JSONLD\Schema\MerchantReturnPolicySeasonalOverride
     * @return static
     **/
    public function setReturnPolicySeasonalOverride($returnPolicySeasonalOverride): static {
        $this->properties['returnPolicySeasonalOverride'] = $returnPolicySeasonalOverride;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MerchantReturnPolicySeasonalOverride
     **/
    public function getReturnPolicySeasonalOverride() {
        return $this->properties['returnPolicySeasonalOverride'];
    }
    /**
     * Specifies an applicable return policy (from an enumeration).
     *
     * @param $returnPolicyCategory \LengthOfRope\JSONLD\Schema\MerchantReturnEnumeration
     * @return static
     **/
    public function setReturnPolicyCategory($returnPolicyCategory): static {
        $this->properties['returnPolicyCategory'] = $returnPolicyCategory;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MerchantReturnEnumeration
     **/
    public function getReturnPolicyCategory() {
        return $this->properties['returnPolicyCategory'];
    }
    /**
     * The amount of shipping costs if a product is returned due to customer remorse.
     * Applicable when property [[customerRemorseReturnFees]] equals
     * [[ReturnShippingFees]].
     *
     * @param $customerRemorseReturnShippingFeesAmount \LengthOfRope\JSONLD\Schema\MonetaryAmount
     * @return static
     **/
    public function setCustomerRemorseReturnShippingFeesAmount($customerRemorseReturnShippingFeesAmount): static {
        $this->properties['customerRemorseReturnShippingFeesAmount'] = $customerRemorseReturnShippingFeesAmount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount
     **/
    public function getCustomerRemorseReturnShippingFeesAmount() {
        return $this->properties['customerRemorseReturnShippingFeesAmount'];
    }
    /**
     * The type of return fees if the product is returned due to customer remorse.
     *
     * @param $customerRemorseReturnFees \LengthOfRope\JSONLD\Schema\ReturnFeesEnumeration
     * @return static
     **/
    public function setCustomerRemorseReturnFees($customerRemorseReturnFees): static {
        $this->properties['customerRemorseReturnFees'] = $customerRemorseReturnFees;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ReturnFeesEnumeration
     **/
    public function getCustomerRemorseReturnFees() {
        return $this->properties['customerRemorseReturnFees'];
    }
    /**
     * The method (from an enumeration) by which the customer obtains a return shipping
     * label for a product returned due to customer remorse.
     *
     * @param $customerRemorseReturnLabelSource \LengthOfRope\JSONLD\Schema\ReturnLabelSourceEnumeration
     * @return static
     **/
    public function setCustomerRemorseReturnLabelSource($customerRemorseReturnLabelSource): static {
        $this->properties['customerRemorseReturnLabelSource'] = $customerRemorseReturnLabelSource;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ReturnLabelSourceEnumeration
     **/
    public function getCustomerRemorseReturnLabelSource() {
        return $this->properties['customerRemorseReturnLabelSource'];
    }
    /**
     * A predefined value from OfferItemCondition specifying the condition of the
     * product or service, or the products or services included in the offer. Also used
     * for product return policies to specify the condition of products accepted for
     * returns.
     *
     * @param $itemCondition \LengthOfRope\JSONLD\Schema\OfferItemCondition
     * @return static
     **/
    public function setItemCondition($itemCondition): static {
        $this->properties['itemCondition'] = $itemCondition;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\OfferItemCondition
     **/
    public function getItemCondition() {
        return $this->properties['itemCondition'];
    }
    /**
     * The country where the product has to be sent to for returns, for example
     * "Ireland" using the [[name]] property of [[Country]]. You can also provide the
     * two-letter [ISO 3166-1 alpha-2 country
     * code](http://en.wikipedia.org/wiki/ISO_3166-1). Note that this can be different
     * from the country where the product was originally shipped from or sent to.
     *
     * @param $returnPolicyCountry \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Country
     * @return static
     **/
    public function setReturnPolicyCountry($returnPolicyCountry): static {
        $this->properties['returnPolicyCountry'] = $returnPolicyCountry;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeText|\LengthOfRope\JSONLD\Schema\Country
     **/
    public function getReturnPolicyCountry() {
        return $this->properties['returnPolicyCountry'];
    }
    /**
     * Specifies a Web page or service by URL, for product returns.
     *
     * @param $merchantReturnLink \LengthOfRope\JSONLD\DataType\TypeURL
     * @return static
     **/
    public function setMerchantReturnLink($merchantReturnLink): static {
        $this->properties['merchantReturnLink'] = $merchantReturnLink;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\TypeURL
     **/
    public function getMerchantReturnLink() {
        return $this->properties['merchantReturnLink'];
    }
    /**
     * A refund type, from an enumerated list.
     *
     * @param $refundType \LengthOfRope\JSONLD\Schema\RefundTypeEnumeration
     * @return static
     **/
    public function setRefundType($refundType): static {
        $this->properties['refundType'] = $refundType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\RefundTypeEnumeration
     **/
    public function getRefundType() {
        return $this->properties['refundType'];
    }
    /**
     * The membership program tier an Offer (or a PriceSpecification,
     * OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
     *
     * @param $validForMemberTier \LengthOfRope\JSONLD\Schema\MemberProgramTier
     * @return static
     **/
    public function setValidForMemberTier($validForMemberTier): static {
        $this->properties['validForMemberTier'] = $validForMemberTier;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MemberProgramTier
     **/
    public function getValidForMemberTier() {
        return $this->properties['validForMemberTier'];
    }
    /**
     * Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns, or
     * use [[Number]] to specify a percentage of the product price paid by the
     * customer.
     *
     * @param $restockingFee \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\DataType\TypeNumber
     * @return static
     **/
    public function setRestockingFee($restockingFee): static {
        $this->properties['restockingFee'] = $restockingFee;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount|\LengthOfRope\JSONLD\DataType\TypeNumber
     **/
    public function getRestockingFee() {
        return $this->properties['restockingFee'];
    }
    /**
     * Amount of shipping costs for defect product returns. Applicable when property
     * [[itemDefectReturnFees]] equals [[ReturnShippingFees]].
     *
     * @param $itemDefectReturnShippingFeesAmount \LengthOfRope\JSONLD\Schema\MonetaryAmount
     * @return static
     **/
    public function setItemDefectReturnShippingFeesAmount($itemDefectReturnShippingFeesAmount): static {
        $this->properties['itemDefectReturnShippingFeesAmount'] = $itemDefectReturnShippingFeesAmount;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MonetaryAmount
     **/
    public function getItemDefectReturnShippingFeesAmount() {
        return $this->properties['itemDefectReturnShippingFeesAmount'];
    }
}
