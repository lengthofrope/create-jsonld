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
 * A demand entity represents the public, not necessarily binding, not necessarily
 * exclusive, announcement by an organization or person to seek a certain type of
 * goods or services. For describing demand using this type, the very same
 * properties used for Offer apply.
 *
 * @see https://schema.org/Demand
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Demand extends Intangible
{
    public static function factory(): Demand
    {
        return new Demand('https://schema.org/', 'Demand');
    }

    /**
     * An item being offered (or demanded). The transactional nature of the offer or
     * demand is documented using [[businessFunction]], e.g. sell, lease etc. While
     * several common expected types are listed explicitly in this definition, others
     * can be used. Using a second type, such as Product or a subtype of Product, can
     * clarify the nature of the offer.
     *
     * @param $itemOffered ||||||
     * @return static
     **/
    public function setItemOffered($itemOffered): static {
        $this->properties['itemOffered'] = $itemOffered;

        return $this;
    }

    /**
     * @return ||||||
     **/
    public function getItemOffered() {
        return $this->properties['itemOffered'];
    }
    /**
     * The beginning of the availability of the product or service included in the
     * offer.
     *
     * @param $availabilityStarts ||
     * @return static
     **/
    public function setAvailabilityStarts($availabilityStarts): static {
        $this->properties['availabilityStarts'] = $availabilityStarts;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getAvailabilityStarts() {
        return $this->properties['availabilityStarts'];
    }
    /**
     * The duration for which the given offer is valid.
     *
     * @param $eligibleDuration 
     * @return static
     **/
    public function setEligibleDuration($eligibleDuration): static {
        $this->properties['eligibleDuration'] = $eligibleDuration;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEligibleDuration() {
        return $this->properties['eligibleDuration'];
    }
    /**
     * The availability of this item&#x2014;for example In stock, Out of stock,
     * Pre-order, etc.
     *
     * @param $availability 
     * @return static
     **/
    public function setAvailability($availability): static {
        $this->properties['availability'] = $availability;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAvailability() {
        return $this->properties['availability'];
    }
    /**
     * The serial number or any alphanumeric identifier of a particular product. When
     * attached to an offer, it is a shortcut for the serial number of the product
     * included in the offer.
     *
     * @param $serialNumber 
     * @return static
     **/
    public function setSerialNumber($serialNumber): static {
        $this->properties['serialNumber'] = $serialNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSerialNumber() {
        return $this->properties['serialNumber'];
    }
    /**
     * The delivery method(s) available for this offer.
     *
     * @param $availableDeliveryMethod 
     * @return static
     **/
    public function setAvailableDeliveryMethod($availableDeliveryMethod): static {
        $this->properties['availableDeliveryMethod'] = $availableDeliveryMethod;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAvailableDeliveryMethod() {
        return $this->properties['availableDeliveryMethod'];
    }
    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery charge
     * specification is not valid, e.g. a region where the transaction is not allowed.
     *
     * See also [[eligibleRegion]].
     *
     *
     * @param $ineligibleRegion ||
     * @return static
     **/
    public function setIneligibleRegion($ineligibleRegion): static {
        $this->properties['ineligibleRegion'] = $ineligibleRegion;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getIneligibleRegion() {
        return $this->properties['ineligibleRegion'];
    }
    /**
     * The interval and unit of measurement of ordering quantities for which the offer
     * or price specification is valid. This allows e.g. specifying that a certain
     * freight charge is valid only for a certain quantity.
     *
     * @param $eligibleQuantity 
     * @return static
     **/
    public function setEligibleQuantity($eligibleQuantity): static {
        $this->properties['eligibleQuantity'] = $eligibleQuantity;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEligibleQuantity() {
        return $this->properties['eligibleQuantity'];
    }
    /**
     * The type(s) of customers for which the given offer is valid.
     *
     * @param $eligibleCustomerType 
     * @return static
     **/
    public function setEligibleCustomerType($eligibleCustomerType): static {
        $this->properties['eligibleCustomerType'] = $eligibleCustomerType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEligibleCustomerType() {
        return $this->properties['eligibleCustomerType'];
    }
    /**
     * The warranty promise(s) included in the offer.
     *
     * @param $warranty 
     * @return static
     **/
    public function setWarranty($warranty): static {
        $this->properties['warranty'] = $warranty;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWarranty() {
        return $this->properties['warranty'];
    }
    /**
     * An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric
     * unique identifier assigned by Amazon.com and its partners for product
     * identification within the Amazon organization (summary from
     * [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s
     * article).
     *
     * Note also that this is a definition for how to include ASINs in Schema.org data,
     * and not a definition of ASINs in general - see documentation from Amazon for
     * authoritative details.
     * ASINs are most commonly encoded as text strings, but the [asin] property
     * supports URL/URI as potential values too.
     *
     * @param $asin |
     * @return static
     **/
    public function setAsin($asin): static {
        $this->properties['asin'] = $asin;

        return $this;
    }

    /**
     * @return |
     **/
    public function getAsin() {
        return $this->properties['asin'];
    }
    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This
     * is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes
     * can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1
     * GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param $gtin13 
     * @return static
     **/
    public function setGtin13($gtin13): static {
        $this->properties['gtin13'] = $gtin13;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGtin13() {
        return $this->properties['gtin13'];
    }
    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A
     * seller may also be a provider.
     *
     * @param $seller |
     * @return static
     **/
    public function setSeller($seller): static {
        $this->properties['seller'] = $seller;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSeller() {
        return $this->properties['seller'];
    }
    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param $areaServed |||
     * @return static
     **/
    public function setAreaServed($areaServed): static {
        $this->properties['areaServed'] = $areaServed;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getAreaServed() {
        return $this->properties['areaServed'];
    }
    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     *
     * @param $validThrough |
     * @return static
     **/
    public function setValidThrough($validThrough): static {
        $this->properties['validThrough'] = $validThrough;

        return $this;
    }

    /**
     * @return |
     **/
    public function getValidThrough() {
        return $this->properties['validThrough'];
    }
    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the
     * offer refers.
     *
     * @param $mpn 
     * @return static
     **/
    public function setMpn($mpn): static {
        $this->properties['mpn'] = $mpn;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMpn() {
        return $this->properties['mpn'];
    }
    /**
     * One or more detailed price specifications, indicating the unit price and
     * delivery or payment charges.
     *
     * @param $priceSpecification 
     * @return static
     **/
    public function setPriceSpecification($priceSpecification): static {
        $this->properties['priceSpecification'] = $priceSpecification;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPriceSpecification() {
        return $this->properties['priceSpecification'];
    }
    /**
     * This links to a node or nodes indicating the exact quantity of the products
     * included in  an [[Offer]] or [[ProductCollection]].
     *
     * @param $includesObject 
     * @return static
     **/
    public function setIncludesObject($includesObject): static {
        $this->properties['includesObject'] = $includesObject;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIncludesObject() {
        return $this->properties['includesObject'];
    }
    /**
     * The payment method(s) that are accepted in general by an organization, or for
     * some specific demand or offer.
     *
     * @param $acceptedPaymentMethod ||
     * @return static
     **/
    public function setAcceptedPaymentMethod($acceptedPaymentMethod): static {
        $this->properties['acceptedPaymentMethod'] = $acceptedPaymentMethod;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getAcceptedPaymentMethod() {
        return $this->properties['acceptedPaymentMethod'];
    }
    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This
     * code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     * @param $gtin8 
     * @return static
     **/
    public function setGtin8($gtin8): static {
        $this->properties['gtin8'] = $gtin8;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGtin8() {
        return $this->properties['gtin8'];
    }
    /**
     * A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)).
     * GTINs identify trade items, including products and services, using numeric
     * identification codes.
     *
     * A correct [[gtin]] value should be a valid GTIN, which means that it should be
     * an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital Link"
     * URL based on such a string. The numeric component should also have a [valid GS1
     * check digit](https://www.gs1.org/services/check-digit-calculator) and meet the
     * other rules for valid GTINs. See also [GS1's GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and
     * [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more
     * details. Left-padding of the gtin values is not required or encouraged. The
     * [[gtin]] property generalizes the earlier [[gtin8]], [[gtin12]], [[gtin13]], and
     * [[gtin14]] properties.
     *
     * The GS1 [digital link
     * specifications](https://www.gs1.org/standards/Digital-Link/) expresses GTINs as
     * URLs (URIs, IRIs, etc.).
     * Digital Links should be populated into the [[hasGS1DigitalLink]] attribute.
     *
     * Note also that this is a definition for how to include GTINs in Schema.org data,
     * and not a definition of GTINs in general - see the GS1 documentation for
     * authoritative details.
     *
     * @param $gtin |
     * @return static
     **/
    public function setGtin($gtin): static {
        $this->properties['gtin'] = $gtin;

        return $this;
    }

    /**
     * @return |
     **/
    public function getGtin() {
        return $this->properties['gtin'];
    }
    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See
     * [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param $gtin14 
     * @return static
     **/
    public function setGtin14($gtin14): static {
        $this->properties['gtin14'] = $gtin14;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGtin14() {
        return $this->properties['gtin14'];
    }
    /**
     * The current approximate inventory level for the item or items.
     *
     * @param $inventoryLevel 
     * @return static
     **/
    public function setInventoryLevel($inventoryLevel): static {
        $this->properties['inventoryLevel'] = $inventoryLevel;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInventoryLevel() {
        return $this->properties['inventoryLevel'];
    }
    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or
     * component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     *
     * @param $businessFunction 
     * @return static
     **/
    public function setBusinessFunction($businessFunction): static {
        $this->properties['businessFunction'] = $businessFunction;

        return $this;
    }

    /**
     * @return 
     **/
    public function getBusinessFunction() {
        return $this->properties['businessFunction'];
    }
    /**
     * A predefined value from OfferItemCondition specifying the condition of the
     * product or service, or the products or services included in the offer. Also used
     * for product return policies to specify the condition of products accepted for
     * returns.
     *
     * @param $itemCondition 
     * @return static
     **/
    public function setItemCondition($itemCondition): static {
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
     * The typical delay between the receipt of the order and the goods either leaving
     * the warehouse or being prepared for pickup, in case the delivery method is on
     * site pickup.
     *
     * @param $deliveryLeadTime 
     * @return static
     **/
    public function setDeliveryLeadTime($deliveryLeadTime): static {
        $this->properties['deliveryLeadTime'] = $deliveryLeadTime;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDeliveryLeadTime() {
        return $this->properties['deliveryLeadTime'];
    }
    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery charge
     * specification is valid.
     *
     * See also [[ineligibleRegion]].
     *
     *
     * @param $eligibleRegion ||
     * @return static
     **/
    public function setEligibleRegion($eligibleRegion): static {
        $this->properties['eligibleRegion'] = $eligibleRegion;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getEligibleRegion() {
        return $this->properties['eligibleRegion'];
    }
    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The
     * GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company
     * Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1
     * GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param $gtin12 
     * @return static
     **/
    public function setGtin12($gtin12): static {
        $this->properties['gtin12'] = $gtin12;

        return $this;
    }

    /**
     * @return 
     **/
    public function getGtin12() {
        return $this->properties['gtin12'];
    }
    /**
     * The date when the item becomes valid.
     *
     * @param $validFrom |
     * @return static
     **/
    public function setValidFrom($validFrom): static {
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
     * The end of the availability of the product or service included in the offer.
     *
     * @param $availabilityEnds ||
     * @return static
     **/
    public function setAvailabilityEnds($availabilityEnds): static {
        $this->properties['availabilityEnds'] = $availabilityEnds;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getAvailabilityEnds() {
        return $this->properties['availabilityEnds'];
    }
    /**
     * The amount of time that is required between accepting the offer and the actual
     * usage of the resource or service.
     *
     * @param $advanceBookingRequirement 
     * @return static
     **/
    public function setAdvanceBookingRequirement($advanceBookingRequirement): static {
        $this->properties['advanceBookingRequirement'] = $advanceBookingRequirement;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAdvanceBookingRequirement() {
        return $this->properties['advanceBookingRequirement'];
    }
    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     *
     * @param $availableAtOrFrom 
     * @return static
     **/
    public function setAvailableAtOrFrom($availableAtOrFrom): static {
        $this->properties['availableAtOrFrom'] = $availableAtOrFrom;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAvailableAtOrFrom() {
        return $this->properties['availableAtOrFrom'];
    }
    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product
     * or service, or the product to which the offer refers.
     *
     * @param $sku 
     * @return static
     **/
    public function setSku($sku): static {
        $this->properties['sku'] = $sku;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSku() {
        return $this->properties['sku'];
    }
    /**
     * The transaction volume, in a monetary unit, for which the offer or price
     * specification is valid, e.g. for indicating a minimal purchasing volume, to
     * express free shipping above a certain order volume, or to limit the acceptance
     * of credit cards to purchases to a certain minimal amount.
     *
     * @param $eligibleTransactionVolume 
     * @return static
     **/
    public function setEligibleTransactionVolume($eligibleTransactionVolume): static {
        $this->properties['eligibleTransactionVolume'] = $eligibleTransactionVolume;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEligibleTransactionVolume() {
        return $this->properties['eligibleTransactionVolume'];
    }
}
