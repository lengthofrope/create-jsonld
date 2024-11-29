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
 * An offer to transfer some rights to an item or to provide a service — for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.\n\nNote: As the [[businessFunction]] property, which identifies the form of offer (e.g. sell, lease, repair, dispose), defaults to http://purl.org/goodrelations/v1#Sell; an Offer without a defined businessFunction value can be assumed to be an offer to sell.\n\nFor [GTIN](http://www.gs1.org/barcodes/technical/idkeys/gtin)-related fields, see [Check Digit calculator](http://www.gs1.org/barcodes/support/check_digit_calculator) and [validation guide](http://www.gs1us.org/resources/standards/gtin-validation-guide) from [GS1](http://www.gs1.org/).
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class OfferSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new OfferSchema('https://schema.org/', 'Offer');
    }

    /**
     * An item being offered (or demanded). The transactional nature of the offer or demand is documented using [[businessFunction]], e.g. sell, lease etc. While several common expected types are listed explicitly in this definition, others can be used. Using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *
     * @param $itemOffered ||||||
     **/
    public function setItemOffered($itemOffered) {
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
     * The beginning of the availability of the product or service included in the offer.
     *
     * @param $availabilityStarts ||
     **/
    public function setAvailabilityStarts($availabilityStarts) {
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
     **/
    public function setEligibleDuration($eligibleDuration) {
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
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.\n\nUsage guidelines:\n\n* Use the [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in the value.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.\n* Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.
      
     *
     * @param $price |
     **/
    public function setPrice($price) {
        $this->properties['price'] = $price;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPrice() {
        return $this->properties['price'];
    }

    /**
     * The [[mobileUrl]] property is provided for specific situations in which data consumers need to determine whether one of several provided URLs is a dedicated 'mobile site'.

To discourage over-use, and reflecting intial usecases, the property is expected only on [[Product]] and [[Offer]], rather than [[Thing]]. The general trend in web technology is towards [responsive design](https://en.wikipedia.org/wiki/Responsive_web_design) in which content can be flexibly adapted to a wide range of browsing environments. Pages and sites referenced with the long-established [[url]] property should ideally also be usable on a wide variety of devices, including mobile phones. In most cases, it would be pointless and counter productive to attempt to update all [[url]] markup to use [[mobileUrl]] for more mobile-oriented pages. The property is intended for the case when items (primarily [[Product]] and [[Offer]]) have extra URLs hosted on an additional "mobile site" alongside the main one. It should not be taken as an endorsement of this publication style.
    
     *
     * @param $mobileUrl 
     **/
    public function setMobileUrl($mobileUrl) {
        $this->properties['mobileUrl'] = $mobileUrl;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMobileUrl() {
        return $this->properties['mobileUrl'];
    }

    /**
     * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
     *
     * @param $availability 
     **/
    public function setAvailability($availability) {
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
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     *
     * @param $serialNumber 
     **/
    public function setSerialNumber($serialNumber) {
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
     * An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are available for a surcharge).
     *
     * @param $addOn 
     **/
    public function setAddOn($addOn) {
        $this->properties['addOn'] = $addOn;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAddOn() {
        return $this->properties['addOn'];
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
     * The delivery method(s) available for this offer.
     *
     * @param $availableDeliveryMethod 
     **/
    public function setAvailableDeliveryMethod($availableDeliveryMethod) {
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
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]].
      
     *
     * @param $ineligibleRegion ||
     **/
    public function setIneligibleRegion($ineligibleRegion) {
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
     * The date after which the price is no longer available.
     *
     * @param $priceValidUntil 
     **/
    public function setPriceValidUntil($priceValidUntil) {
        $this->properties['priceValidUntil'] = $priceValidUntil;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPriceValidUntil() {
        return $this->properties['priceValidUntil'];
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
     * Indicates whether this content is family friendly.
     *
     * @param $isFamilyFriendly 
     **/
    public function setIsFamilyFriendly($isFamilyFriendly) {
        $this->properties['isFamilyFriendly'] = $isFamilyFriendly;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsFamilyFriendly() {
        return $this->properties['isFamilyFriendly'];
    }

    /**
     * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
     *
     * @param $leaseLength |
     **/
    public function setLeaseLength($leaseLength) {
        $this->properties['leaseLength'] = $leaseLength;

        return $this;
    }

    /**
     * @return |
     **/
    public function getLeaseLength() {
        return $this->properties['leaseLength'];
    }

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     *
     * @param $eligibleQuantity 
     **/
    public function setEligibleQuantity($eligibleQuantity) {
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
     **/
    public function setEligibleCustomerType($eligibleCustomerType) {
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
     **/
    public function setWarranty($warranty) {
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
     * An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s article).

Note also that this is a definition for how to include ASINs in Schema.org data, and not a definition of ASINs in general - see documentation from Amazon for authoritative details.
ASINs are most commonly encoded as text strings, but the [asin] property supports URL/URI as potential values too.
     *
     * @param $asin |
     **/
    public function setAsin($asin) {
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
     * A URL template (RFC 6570) for a checkout page for an offer. This approach allows merchants to specify a URL for online checkout of the offered product, by interpolating parameters such as the logged in user ID, product ID, quantity, discount code etc. Parameter naming and standardization are not specified here.
     *
     * @param $checkoutPageURLTemplate 
     **/
    public function setCheckoutPageURLTemplate($checkoutPageURLTemplate) {
        $this->properties['checkoutPageURLTemplate'] = $checkoutPageURLTemplate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCheckoutPageURLTemplate() {
        return $this->properties['checkoutPageURLTemplate'];
    }

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     * @param $gtin13 
     **/
    public function setGtin13($gtin13) {
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
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     *
     * @param $seller |
     **/
    public function setSeller($seller) {
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
     * Used to tag an item to be intended or suitable for consumption or use by adults only.
     *
     * @param $hasAdultConsideration 
     **/
    public function setHasAdultConsideration($hasAdultConsideration) {
        $this->properties['hasAdultConsideration'] = $hasAdultConsideration;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasAdultConsideration() {
        return $this->properties['hasAdultConsideration'];
    }

    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param $areaServed |||
     **/
    public function setAreaServed($areaServed) {
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
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     * @param $validThrough |
     **/
    public function setValidThrough($validThrough) {
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
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     * @param $mpn 
     **/
    public function setMpn($mpn) {
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
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     *
     * @param $priceSpecification 
     **/
    public function setPriceSpecification($priceSpecification) {
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
     * A pointer to the organization or person making the offer.
     *
     * @param $offeredBy |
     **/
    public function setOfferedBy($offeredBy) {
        $this->properties['offeredBy'] = $offeredBy;

        return $this;
    }

    /**
     * @return |
     **/
    public function getOfferedBy() {
        return $this->properties['offeredBy'];
    }

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     *
     * @param $hasMerchantReturnPolicy 
     **/
    public function setHasMerchantReturnPolicy($hasMerchantReturnPolicy) {
        $this->properties['hasMerchantReturnPolicy'] = $hasMerchantReturnPolicy;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasMerchantReturnPolicy() {
        return $this->properties['hasMerchantReturnPolicy'];
    }

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in  an [[Offer]] or [[ProductCollection]].
     *
     * @param $includesObject 
     **/
    public function setIncludesObject($includesObject) {
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
     * The payment method(s) that are accepted in general by an organization, or for some specific demand or offer.
     *
     * @param $acceptedPaymentMethod ||
     **/
    public function setAcceptedPaymentMethod($acceptedPaymentMethod) {
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
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @param $category ||||
     **/
    public function setCategory($category) {
        $this->properties['category'] = $category;

        return $this;
    }

    /**
     * @return ||||
     **/
    public function getCategory() {
        return $this->properties['category'];
    }

    /**
     * The <a href="https://www.gs1.org/standards/gs1-digital-link">GS1 digital link</a> associated with the object. This URL should conform to the particular requirements of digital links. The link should only contain the Application Identifiers (AIs) that are relevant for the entity being annotated, for instance a [[Product]] or an [[Organization]], and for the correct granularity. In particular, for products:<ul><li>A Digital Link that contains a serial number (AI <code>21</code>) should only be present on instances of [[IndividualProduct]]</li><li>A Digital Link that contains a lot number (AI <code>10</code>) should be annotated as [[SomeProduct]] if only products from that lot are sold, or [[IndividualProduct]] if there is only a specific product.</li><li>A Digital Link that contains a global model number (AI <code>8013</code>)  should be attached to a [[Product]] or a [[ProductModel]].</li></ul> Other item types should be adapted similarly.
     *
     * @param $hasGS1DigitalLink 
     **/
    public function setHasGS1DigitalLink($hasGS1DigitalLink) {
        $this->properties['hasGS1DigitalLink'] = $hasGS1DigitalLink;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasGS1DigitalLink() {
        return $this->properties['hasGS1DigitalLink'];
    }

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     * @param $gtin8 
     **/
    public function setGtin8($gtin8) {
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
     * Review of the item.
     *
     * @param $reviews 
     **/
    public function setReviews($reviews) {
        $this->properties['reviews'] = $reviews;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReviews() {
        return $this->properties['reviews'];
    }

    /**
     * A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade items, including products and services, using numeric identification codes.

A correct [[gtin]] value should be a valid GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a string. The numeric component should also have a [valid GS1 check digit](https://www.gs1.org/services/check-digit-calculator) and meet the other rules for valid GTINs. See also [GS1's GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more details. Left-padding of the gtin values is not required or encouraged. The [[gtin]] property generalizes the earlier [[gtin8]], [[gtin12]], [[gtin13]], and [[gtin14]] properties.

The GS1 [digital link specifications](https://www.gs1.org/standards/Digital-Link/) expresses GTINs as URLs (URIs, IRIs, etc.).
Digital Links should be populated into the [[hasGS1DigitalLink]] attribute.

Note also that this is a definition for how to include GTINs in Schema.org data, and not a definition of GTINs in general - see the GS1 documentation for authoritative details.
     *
     * @param $gtin |
     **/
    public function setGtin($gtin) {
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
     * A review of the item.
     *
     * @param $review 
     **/
    public function setReview($review) {
        $this->properties['review'] = $review;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReview() {
        return $this->properties['review'];
    }

    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     *
     * @param $priceCurrency 
     **/
    public function setPriceCurrency($priceCurrency) {
        $this->properties['priceCurrency'] = $priceCurrency;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPriceCurrency() {
        return $this->properties['priceCurrency'];
    }

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     * @param $gtin14 
     **/
    public function setGtin14($gtin14) {
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
     * Indicates information about the shipping policies and options associated with an [[Offer]].
     *
     * @param $shippingDetails 
     **/
    public function setShippingDetails($shippingDetails) {
        $this->properties['shippingDetails'] = $shippingDetails;

        return $this;
    }

    /**
     * @return 
     **/
    public function getShippingDetails() {
        return $this->properties['shippingDetails'];
    }

    /**
     * The current approximate inventory level for the item or items.
     *
     * @param $inventoryLevel 
     **/
    public function setInventoryLevel($inventoryLevel) {
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
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     *
     * @param $businessFunction 
     **/
    public function setBusinessFunction($businessFunction) {
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
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
     *
     * @param $deliveryLeadTime 
     **/
    public function setDeliveryLeadTime($deliveryLeadTime) {
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
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]].
    
     *
     * @param $eligibleRegion ||
     **/
    public function setEligibleRegion($eligibleRegion) {
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
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     * @param $gtin12 
     **/
    public function setGtin12($gtin12) {
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
     * The end of the availability of the product or service included in the offer.
     *
     * @param $availabilityEnds ||
     **/
    public function setAvailabilityEnds($availabilityEnds) {
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
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @param $aggregateRating 
     **/
    public function setAggregateRating($aggregateRating) {
        $this->properties['aggregateRating'] = $aggregateRating;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAggregateRating() {
        return $this->properties['aggregateRating'];
    }

    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     *
     * @param $advanceBookingRequirement 
     **/
    public function setAdvanceBookingRequirement($advanceBookingRequirement) {
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
     **/
    public function setAvailableAtOrFrom($availableAtOrFrom) {
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
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     * @param $sku 
     **/
    public function setSku($sku) {
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
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @param $eligibleTransactionVolume 
     **/
    public function setEligibleTransactionVolume($eligibleTransactionVolume) {
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
