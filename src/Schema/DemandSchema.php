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
 * A demand entity represents the public, not necessarily binding, not necessarily exclusive, announcement by an organization or person to seek a certain type of goods or services. For describing demand using this type, the very same properties used for Offer apply.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DemandSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new DemandSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The payment method(s) accepted by seller for this offer.
     **/
    private $acceptedPaymentMethod;
    public function setAcceptedPaymentMethod($acceptedPaymentMethod) {
        $this->acceptedPaymentMethod = $acceptedPaymentMethod;

        return $this;
    }

    /**
     * @return PaymentMethodSchema     
     **/
    public function getAcceptedPaymentMethod() {
        return $this->acceptedPaymentMethod;
    }

    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     **/
    private $advanceBookingRequirement;
    public function setAdvanceBookingRequirement($advanceBookingRequirement) {
        $this->advanceBookingRequirement = $advanceBookingRequirement;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     
     **/
    public function getAdvanceBookingRequirement() {
        return $this->advanceBookingRequirement;
    }

    /**
     * The geographic area where a service or offered item is provided.
     **/
    private $areaServed;
    public function setAreaServed($areaServed) {
        $this->areaServed = $areaServed;

        return $this;
    }

    /**
     * @return PlaceSchema|AdministrativeAreaSchema|GeoShapeSchema|TextSchema     
     **/
    public function getAreaServed() {
        return $this->areaServed;
    }

    /**
     * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
     **/
    private $availability;
    public function setAvailability($availability) {
        $this->availability = $availability;

        return $this;
    }

    /**
     * @return ItemAvailabilitySchema     
     **/
    public function getAvailability() {
        return $this->availability;
    }

    /**
     * The end of the availability of the product or service included in the offer.
     **/
    private $availabilityEnds;
    public function setAvailabilityEnds($availabilityEnds) {
        $this->availabilityEnds = $availabilityEnds;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getAvailabilityEnds() {
        return $this->availabilityEnds;
    }

    /**
     * The beginning of the availability of the product or service included in the offer.
     **/
    private $availabilityStarts;
    public function setAvailabilityStarts($availabilityStarts) {
        $this->availabilityStarts = $availabilityStarts;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getAvailabilityStarts() {
        return $this->availabilityStarts;
    }

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     **/
    private $availableAtOrFrom;
    public function setAvailableAtOrFrom($availableAtOrFrom) {
        $this->availableAtOrFrom = $availableAtOrFrom;

        return $this;
    }

    /**
     * @return PlaceSchema     
     **/
    public function getAvailableAtOrFrom() {
        return $this->availableAtOrFrom;
    }

    /**
     * The delivery method(s) available for this offer.
     **/
    private $availableDeliveryMethod;
    public function setAvailableDeliveryMethod($availableDeliveryMethod) {
        $this->availableDeliveryMethod = $availableDeliveryMethod;

        return $this;
    }

    /**
     * @return DeliveryMethodSchema     
     **/
    public function getAvailableDeliveryMethod() {
        return $this->availableDeliveryMethod;
    }

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     **/
    private $businessFunction;
    public function setBusinessFunction($businessFunction) {
        $this->businessFunction = $businessFunction;

        return $this;
    }

    /**
     * @return BusinessFunctionSchema     
     **/
    public function getBusinessFunction() {
        return $this->businessFunction;
    }

    /**
     * The typical delay between the receipt of the order and the goods leaving the warehouse.
     **/
    private $deliveryLeadTime;
    public function setDeliveryLeadTime($deliveryLeadTime) {
        $this->deliveryLeadTime = $deliveryLeadTime;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     
     **/
    public function getDeliveryLeadTime() {
        return $this->deliveryLeadTime;
    }

    /**
     * The type(s) of customers for which the given offer is valid.
     **/
    private $eligibleCustomerType;
    public function setEligibleCustomerType($eligibleCustomerType) {
        $this->eligibleCustomerType = $eligibleCustomerType;

        return $this;
    }

    /**
     * @return BusinessEntityTypeSchema     
     **/
    public function getEligibleCustomerType() {
        return $this->eligibleCustomerType;
    }

    /**
     * The duration for which the given offer is valid.
     **/
    private $eligibleDuration;
    public function setEligibleDuration($eligibleDuration) {
        $this->eligibleDuration = $eligibleDuration;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     
     **/
    public function getEligibleDuration() {
        return $this->eligibleDuration;
    }

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     **/
    private $eligibleQuantity;
    public function setEligibleQuantity($eligibleQuantity) {
        $this->eligibleQuantity = $eligibleQuantity;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     
     **/
    public function getEligibleQuantity() {
        return $this->eligibleQuantity;
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
      <br><br> See also <a href="/ineligibleRegion">ineligibleRegion</a>.
    
     **/
    private $eligibleRegion;
    public function setEligibleRegion($eligibleRegion) {
        $this->eligibleRegion = $eligibleRegion;

        return $this;
    }

    /**
     * @return GeoShapeSchema|PlaceSchema|TextSchema     
     **/
    public function getEligibleRegion() {
        return $this->eligibleRegion;
    }

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     **/
    private $eligibleTransactionVolume;
    public function setEligibleTransactionVolume($eligibleTransactionVolume) {
        $this->eligibleTransactionVolume = $eligibleTransactionVolume;

        return $this;
    }

    /**
     * @return PriceSpecificationSchema     
     **/
    public function getEligibleTransactionVolume() {
        return $this->eligibleTransactionVolume;
    }

    /**
     * The <a href="http://apps.gs1.org/GDD/glossary/Pages/GTIN-12.aspx">GTIN-12</a> code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     **/
    private $gtin12;
    public function setGtin12($gtin12) {
        $this->gtin12 = $gtin12;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getGtin12() {
        return $this->gtin12;
    }

    /**
     * The <a href="http://apps.gs1.org/GDD/glossary/Pages/GTIN-13.aspx">GTIN-13</a> code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     **/
    private $gtin13;
    public function setGtin13($gtin13) {
        $this->gtin13 = $gtin13;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getGtin13() {
        return $this->gtin13;
    }

    /**
     * The <a href="http://apps.gs1.org/GDD/glossary/Pages/GTIN-14.aspx">GTIN-14</a> code of the product, or the product to which the offer refers. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     **/
    private $gtin14;
    public function setGtin14($gtin14) {
        $this->gtin14 = $gtin14;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getGtin14() {
        return $this->gtin14;
    }

    /**
     * The <a href="http://apps.gs1.org/GDD/glossary/Pages/GTIN-8.aspx">GTIN-8</a> code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     **/
    private $gtin8;
    public function setGtin8($gtin8) {
        $this->gtin8 = $gtin8;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getGtin8() {
        return $this->gtin8;
    }

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in the offer.
     **/
    private $includesObject;
    public function setIncludesObject($includesObject) {
        $this->includesObject = $includesObject;

        return $this;
    }

    /**
     * @return TypeAndQuantityNodeSchema     
     **/
    public function getIncludesObject() {
        return $this->includesObject;
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.
      <br><br> See also <a href="/eligibleRegion">eligibleRegion</a>.
      
     **/
    private $ineligibleRegion;
    public function setIneligibleRegion($ineligibleRegion) {
        $this->ineligibleRegion = $ineligibleRegion;

        return $this;
    }

    /**
     * @return GeoShapeSchema|PlaceSchema|TextSchema     
     **/
    public function getIneligibleRegion() {
        return $this->ineligibleRegion;
    }

    /**
     * The current approximate inventory level for the item or items.
     **/
    private $inventoryLevel;
    public function setInventoryLevel($inventoryLevel) {
        $this->inventoryLevel = $inventoryLevel;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     
     **/
    public function getInventoryLevel() {
        return $this->inventoryLevel;
    }

    /**
     * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     **/
    private $itemCondition;
    public function setItemCondition($itemCondition) {
        $this->itemCondition = $itemCondition;

        return $this;
    }

    /**
     * @return OfferItemConditionSchema     
     **/
    public function getItemCondition() {
        return $this->itemCondition;
    }

    /**
     * The item being offered.
     **/
    private $itemOffered;
    public function setItemOffered($itemOffered) {
        $this->itemOffered = $itemOffered;

        return $this;
    }

    /**
     * @return ProductSchema|ServiceSchema     
     **/
    public function getItemOffered() {
        return $this->itemOffered;
    }

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     **/
    private $mpn;
    public function setMpn($mpn) {
        $this->mpn = $mpn;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getMpn() {
        return $this->mpn;
    }

    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     **/
    private $priceSpecification;
    public function setPriceSpecification($priceSpecification) {
        $this->priceSpecification = $priceSpecification;

        return $this;
    }

    /**
     * @return PriceSpecificationSchema     
     **/
    public function getPriceSpecification() {
        return $this->priceSpecification;
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     **/
    private $seller;
    public function setSeller($seller) {
        $this->seller = $seller;

        return $this;
    }

    /**
     * @return OrganizationSchema|PersonSchema     
     **/
    public function getSeller() {
        return $this->seller;
    }

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     **/
    private $serialNumber;
    public function setSerialNumber($serialNumber) {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getSerialNumber() {
        return $this->serialNumber;
    }

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     **/
    private $sku;
    public function setSku($sku) {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return TextSchema     
     **/
    public function getSku() {
        return $this->sku;
    }

    /**
     * The date when the item becomes valid.
     **/
    private $validFrom;
    public function setValidFrom($validFrom) {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getValidFrom() {
        return $this->validFrom;
    }

    /**
     * The end of the validity of offer, price specification, or opening hours data.
     **/
    private $validThrough;
    public function setValidThrough($validThrough) {
        $this->validThrough = $validThrough;

        return $this;
    }

    /**
     * @return DateTimeSchema     
     **/
    public function getValidThrough() {
        return $this->validThrough;
    }

    /**
     * The warranty promise(s) included in the offer.
     **/
    private $warranty;
    public function setWarranty($warranty) {
        $this->warranty = $warranty;

        return $this;
    }

    /**
     * @return WarrantyPromiseSchema     
     **/
    public function getWarranty() {
        return $this->warranty;
    }


}
