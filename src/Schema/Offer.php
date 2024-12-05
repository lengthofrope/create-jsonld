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
 * An offer to transfer some rights to an item or to provide a service — for
 * example, an offer to sell tickets to an event, to rent the DVD of a movie, to
 * stream a TV show over the internet, to repair a motorcycle, or to loan a book.
 *
 * Note: As the [[businessFunction]] property, which identifies the form of offer
 * (e.g. sell, lease, repair, dispose), defaults to
 * http://purl.org/goodrelations/v1#Sell; an Offer without a defined
 * businessFunction value can be assumed to be an offer to sell.
 *
 * For [GTIN](http://www.gs1.org/barcodes/technical/idkeys/gtin)-related fields,
 * see [Check Digit
 * calculator](http://www.gs1.org/barcodes/support/check_digit_calculator) and
 * [validation
 * guide](http://www.gs1us.org/resources/standards/gtin-validation-guide) from
 * [GS1](http://www.gs1.org/).
 *
 * @see https://schema.org/Offer
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Offer extends Intangible
{
    public static function factory(): Offer
    {
        return new Offer('https://schema.org/', 'Offer');
    }

    /**
     * An item being offered (or demanded). The transactional nature of the offer or
     * demand is documented using [[businessFunction]], e.g. sell, lease etc. While
     * several common expected types are listed explicitly in this definition, others
     * can be used. Using a second type, such as Product or a subtype of Product, can
     * clarify the nature of the offer.
     *
     * @param $itemOffered \LengthOfRope\JSONLD\Schema\MenuItem|\LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\Schema\Service|\LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\Schema\Trip|\LengthOfRope\JSONLD\Schema\Event|\LengthOfRope\JSONLD\Schema\AggregateOffer
     * @return static
     **/
    public function setItemOffered($itemOffered): static {
        $this->properties['itemOffered'] = $itemOffered;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MenuItem|\LengthOfRope\JSONLD\Schema\CreativeWork|\LengthOfRope\JSONLD\Schema\Service|\LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\Schema\Trip|\LengthOfRope\JSONLD\Schema\Event|\LengthOfRope\JSONLD\Schema\AggregateOffer
     **/
    public function getItemOffered() {
        return $this->properties['itemOffered'];
    }
    /**
     * The beginning of the availability of the product or service included in the
     * offer.
     *
     * @param $availabilityStarts \LengthOfRope\JSONLD\DataType\Date|\LengthOfRope\JSONLD\DataType\Time|\LengthOfRope\JSONLD\DataType\DateTime
     * @return static
     **/
    public function setAvailabilityStarts($availabilityStarts): static {
        $this->properties['availabilityStarts'] = $availabilityStarts;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date|\LengthOfRope\JSONLD\DataType\Time|\LengthOfRope\JSONLD\DataType\DateTime
     **/
    public function getAvailabilityStarts() {
        return $this->properties['availabilityStarts'];
    }
    /**
     * The duration for which the given offer is valid.
     *
     * @param $eligibleDuration \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setEligibleDuration($eligibleDuration): static {
        $this->properties['eligibleDuration'] = $eligibleDuration;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getEligibleDuration() {
        return $this->properties['eligibleDuration'];
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
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     *
     * Usage guidelines:
     *
     * * Use the [[priceCurrency]] property (with standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and
     * other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous
     * symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign)
     * such as '$' in the value.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal
     * point. Avoid using these symbols as a readability separator.
     * * Note that both
     * [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and
     * Microdata syntax allow the use of a "content=" attribute for publishing simple
     * machine-readable values alongside more human-friendly formatting.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similar Unicode symbols.
     *
     *
     * @param $price \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\Number
     * @return static
     **/
    public function setPrice($price): static {
        $this->properties['price'] = $price;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\Number
     **/
    public function getPrice() {
        return $this->properties['price'];
    }
    /**
     * The [[mobileUrl]] property is provided for specific situations in which data
     * consumers need to determine whether one of several provided URLs is a dedicated
     * 'mobile site'.
     *
     * To discourage over-use, and reflecting intial usecases, the property is expected
     * only on [[Product]] and [[Offer]], rather than [[Thing]]. The general trend in
     * web technology is towards [responsive
     * design](https://en.wikipedia.org/wiki/Responsive_web_design) in which content
     * can be flexibly adapted to a wide range of browsing environments. Pages and
     * sites referenced with the long-established [[url]] property should ideally also
     * be usable on a wide variety of devices, including mobile phones. In most cases,
     * it would be pointless and counter productive to attempt to update all [[url]]
     * markup to use [[mobileUrl]] for more mobile-oriented pages. The property is
     * intended for the case when items (primarily [[Product]] and [[Offer]]) have
     * extra URLs hosted on an additional "mobile site" alongside the main one. It
     * should not be taken as an endorsement of this publication style.
     *
     *
     * @param $mobileUrl \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setMobileUrl($mobileUrl): static {
        $this->properties['mobileUrl'] = $mobileUrl;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getMobileUrl() {
        return $this->properties['mobileUrl'];
    }
    /**
     * The availability of this item&#x2014;for example In stock, Out of stock,
     * Pre-order, etc.
     *
     * @param $availability \LengthOfRope\JSONLD\Schema\ItemAvailability
     * @return static
     **/
    public function setAvailability($availability): static {
        $this->properties['availability'] = $availability;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ItemAvailability
     **/
    public function getAvailability() {
        return $this->properties['availability'];
    }
    /**
     * The serial number or any alphanumeric identifier of a particular product. When
     * attached to an offer, it is a shortcut for the serial number of the product
     * included in the offer.
     *
     * @param $serialNumber \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setSerialNumber($serialNumber): static {
        $this->properties['serialNumber'] = $serialNumber;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getSerialNumber() {
        return $this->properties['serialNumber'];
    }
    /**
     * An additional offer that can only be obtained in combination with the first base
     * offer (e.g. supplements and extensions that are available for a surcharge).
     *
     * @param $addOn \LengthOfRope\JSONLD\Schema\Offer
     * @return static
     **/
    public function setAddOn($addOn): static {
        $this->properties['addOn'] = $addOn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Offer
     **/
    public function getAddOn() {
        return $this->properties['addOn'];
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
     * The delivery method(s) available for this offer.
     *
     * @param $availableDeliveryMethod \LengthOfRope\JSONLD\Schema\DeliveryMethod
     * @return static
     **/
    public function setAvailableDeliveryMethod($availableDeliveryMethod): static {
        $this->properties['availableDeliveryMethod'] = $availableDeliveryMethod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\DeliveryMethod
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
     * @param $ineligibleRegion \LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\GeoShape
     * @return static
     **/
    public function setIneligibleRegion($ineligibleRegion): static {
        $this->properties['ineligibleRegion'] = $ineligibleRegion;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\GeoShape
     **/
    public function getIneligibleRegion() {
        return $this->properties['ineligibleRegion'];
    }
    /**
     * The date after which the price is no longer available.
     *
     * @param $priceValidUntil \LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setPriceValidUntil($priceValidUntil): static {
        $this->properties['priceValidUntil'] = $priceValidUntil;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date
     **/
    public function getPriceValidUntil() {
        return $this->properties['priceValidUntil'];
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
     * Indicates whether this content is family friendly.
     *
     * @param $isFamilyFriendly \LengthOfRope\JSONLD\DataType\Boolean
     * @return static
     **/
    public function setIsFamilyFriendly($isFamilyFriendly): static {
        $this->properties['isFamilyFriendly'] = $isFamilyFriendly;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Boolean
     **/
    public function getIsFamilyFriendly() {
        return $this->properties['isFamilyFriendly'];
    }
    /**
     * Length of the lease for some [[Accommodation]], either particular to some
     * [[Offer]] or in some cases intrinsic to the property.
     *
     * @param $leaseLength \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Duration
     * @return static
     **/
    public function setLeaseLength($leaseLength): static {
        $this->properties['leaseLength'] = $leaseLength;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Duration
     **/
    public function getLeaseLength() {
        return $this->properties['leaseLength'];
    }
    /**
     * The interval and unit of measurement of ordering quantities for which the offer
     * or price specification is valid. This allows e.g. specifying that a certain
     * freight charge is valid only for a certain quantity.
     *
     * @param $eligibleQuantity \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setEligibleQuantity($eligibleQuantity): static {
        $this->properties['eligibleQuantity'] = $eligibleQuantity;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getEligibleQuantity() {
        return $this->properties['eligibleQuantity'];
    }
    /**
     * The type(s) of customers for which the given offer is valid.
     *
     * @param $eligibleCustomerType \LengthOfRope\JSONLD\Schema\BusinessEntityType
     * @return static
     **/
    public function setEligibleCustomerType($eligibleCustomerType): static {
        $this->properties['eligibleCustomerType'] = $eligibleCustomerType;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BusinessEntityType
     **/
    public function getEligibleCustomerType() {
        return $this->properties['eligibleCustomerType'];
    }
    /**
     * The warranty promise(s) included in the offer.
     *
     * @param $warranty \LengthOfRope\JSONLD\Schema\WarrantyPromise
     * @return static
     **/
    public function setWarranty($warranty): static {
        $this->properties['warranty'] = $warranty;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\WarrantyPromise
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
     * @param $asin \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL
     * @return static
     **/
    public function setAsin($asin): static {
        $this->properties['asin'] = $asin;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL
     **/
    public function getAsin() {
        return $this->properties['asin'];
    }
    /**
     * A URL template (RFC 6570) for a checkout page for an offer. This approach allows
     * merchants to specify a URL for online checkout of the offered product, by
     * interpolating parameters such as the logged in user ID, product ID, quantity,
     * discount code etc. Parameter naming and standardization are not specified here.
     *
     * @param $checkoutPageURLTemplate \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setCheckoutPageURLTemplate($checkoutPageURLTemplate): static {
        $this->properties['checkoutPageURLTemplate'] = $checkoutPageURLTemplate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getCheckoutPageURLTemplate() {
        return $this->properties['checkoutPageURLTemplate'];
    }
    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This
     * is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes
     * can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1
     * GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param $gtin13 \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setGtin13($gtin13): static {
        $this->properties['gtin13'] = $gtin13;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getGtin13() {
        return $this->properties['gtin13'];
    }
    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A
     * seller may also be a provider.
     *
     * @param $seller \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setSeller($seller): static {
        $this->properties['seller'] = $seller;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getSeller() {
        return $this->properties['seller'];
    }
    /**
     * Used to tag an item to be intended or suitable for consumption or use by adults
     * only.
     *
     * @param $hasAdultConsideration \LengthOfRope\JSONLD\Schema\AdultOrientedEnumeration
     * @return static
     **/
    public function setHasAdultConsideration($hasAdultConsideration): static {
        $this->properties['hasAdultConsideration'] = $hasAdultConsideration;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AdultOrientedEnumeration
     **/
    public function getHasAdultConsideration() {
        return $this->properties['hasAdultConsideration'];
    }
    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param $areaServed \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     * @return static
     **/
    public function setAreaServed($areaServed): static {
        $this->properties['areaServed'] = $areaServed;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\Place|\LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\Schema\AdministrativeArea
     **/
    public function getAreaServed() {
        return $this->properties['areaServed'];
    }
    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     *
     * @param $validThrough \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setValidThrough($validThrough): static {
        $this->properties['validThrough'] = $validThrough;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Date
     **/
    public function getValidThrough() {
        return $this->properties['validThrough'];
    }
    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the
     * offer refers.
     *
     * @param $mpn \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setMpn($mpn): static {
        $this->properties['mpn'] = $mpn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getMpn() {
        return $this->properties['mpn'];
    }
    /**
     * One or more detailed price specifications, indicating the unit price and
     * delivery or payment charges.
     *
     * @param $priceSpecification \LengthOfRope\JSONLD\Schema\PriceSpecification
     * @return static
     **/
    public function setPriceSpecification($priceSpecification): static {
        $this->properties['priceSpecification'] = $priceSpecification;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PriceSpecification
     **/
    public function getPriceSpecification() {
        return $this->properties['priceSpecification'];
    }
    /**
     * A pointer to the organization or person making the offer.
     *
     * @param $offeredBy \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setOfferedBy($offeredBy): static {
        $this->properties['offeredBy'] = $offeredBy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Person|\LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getOfferedBy() {
        return $this->properties['offeredBy'];
    }
    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     *
     * @param $hasMerchantReturnPolicy \LengthOfRope\JSONLD\Schema\MerchantReturnPolicy
     * @return static
     **/
    public function setHasMerchantReturnPolicy($hasMerchantReturnPolicy): static {
        $this->properties['hasMerchantReturnPolicy'] = $hasMerchantReturnPolicy;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\MerchantReturnPolicy
     **/
    public function getHasMerchantReturnPolicy() {
        return $this->properties['hasMerchantReturnPolicy'];
    }
    /**
     * This links to a node or nodes indicating the exact quantity of the products
     * included in  an [[Offer]] or [[ProductCollection]].
     *
     * @param $includesObject \LengthOfRope\JSONLD\Schema\TypeAndQuantityNode
     * @return static
     **/
    public function setIncludesObject($includesObject): static {
        $this->properties['includesObject'] = $includesObject;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\TypeAndQuantityNode
     **/
    public function getIncludesObject() {
        return $this->properties['includesObject'];
    }
    /**
     * The payment method(s) that are accepted in general by an organization, or for
     * some specific demand or offer.
     *
     * @param $acceptedPaymentMethod \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\PaymentMethod|\LengthOfRope\JSONLD\Schema\LoanOrCredit
     * @return static
     **/
    public function setAcceptedPaymentMethod($acceptedPaymentMethod): static {
        $this->properties['acceptedPaymentMethod'] = $acceptedPaymentMethod;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\PaymentMethod|\LengthOfRope\JSONLD\Schema\LoanOrCredit
     **/
    public function getAcceptedPaymentMethod() {
        return $this->properties['acceptedPaymentMethod'];
    }
    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @param $category \LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\Schema\PhysicalActivityCategory|\LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL
     * @return static
     **/
    public function setCategory($category): static {
        $this->properties['category'] = $category;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Thing|\LengthOfRope\JSONLD\Schema\PhysicalActivityCategory|\LengthOfRope\JSONLD\Schema\CategoryCode|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL
     **/
    public function getCategory() {
        return $this->properties['category'];
    }
    /**
     * The <a href="https://www.gs1.org/standards/gs1-digital-link">GS1 digital
     * link</a> associated with the object. This URL should conform to the particular
     * requirements of digital links. The link should only contain the Application
     * Identifiers (AIs) that are relevant for the entity being annotated, for instance
     * a [[Product]] or an [[Organization]], and for the correct granularity. In
     * particular, for products:<ul><li>A Digital Link that contains a serial number
     * (AI <code>21</code>) should only be present on instances of
     * [[IndividualProduct]]</li><li>A Digital Link that contains a lot number (AI
     * <code>10</code>) should be annotated as [[SomeProduct]] if only products from
     * that lot are sold, or [[IndividualProduct]] if there is only a specific
     * product.</li><li>A Digital Link that contains a global model number (AI
     * <code>8013</code>)  should be attached to a [[Product]] or a
     * [[ProductModel]].</li></ul> Other item types should be adapted similarly.
     *
     * @param $hasGS1DigitalLink \LengthOfRope\JSONLD\DataType\URL
     * @return static
     **/
    public function setHasGS1DigitalLink($hasGS1DigitalLink): static {
        $this->properties['hasGS1DigitalLink'] = $hasGS1DigitalLink;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\URL
     **/
    public function getHasGS1DigitalLink() {
        return $this->properties['hasGS1DigitalLink'];
    }
    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This
     * code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     * @param $gtin8 \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setGtin8($gtin8): static {
        $this->properties['gtin8'] = $gtin8;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getGtin8() {
        return $this->properties['gtin8'];
    }
    /**
     * Review of the item.
     *
     * @param $reviews \LengthOfRope\JSONLD\Schema\Review
     * @return static
     **/
    public function setReviews($reviews): static {
        $this->properties['reviews'] = $reviews;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Review
     **/
    public function getReviews() {
        return $this->properties['reviews'];
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
     * @param $gtin \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL
     * @return static
     **/
    public function setGtin($gtin): static {
        $this->properties['gtin'] = $gtin;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\DataType\URL
     **/
    public function getGtin() {
        return $this->properties['gtin'];
    }
    /**
     * A review of the item.
     *
     * @param $review \LengthOfRope\JSONLD\Schema\Review
     * @return static
     **/
    public function setReview($review): static {
        $this->properties['review'] = $review;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Review
     **/
    public function getReview() {
        return $this->properties['review'];
    }
    /**
     * The currency of the price, or a price component when attached to
     * [[PriceSpecification]] and its subtypes.
     *
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and
     * other currency types, e.g. "Ithaca HOUR".
     *
     * @param $priceCurrency \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setPriceCurrency($priceCurrency): static {
        $this->properties['priceCurrency'] = $priceCurrency;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getPriceCurrency() {
        return $this->properties['priceCurrency'];
    }
    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See
     * [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param $gtin14 \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setGtin14($gtin14): static {
        $this->properties['gtin14'] = $gtin14;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getGtin14() {
        return $this->properties['gtin14'];
    }
    /**
     * Indicates information about the shipping policies and options associated with an
     * [[Offer]].
     *
     * @param $shippingDetails \LengthOfRope\JSONLD\Schema\OfferShippingDetails
     * @return static
     **/
    public function setShippingDetails($shippingDetails): static {
        $this->properties['shippingDetails'] = $shippingDetails;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\OfferShippingDetails
     **/
    public function getShippingDetails() {
        return $this->properties['shippingDetails'];
    }
    /**
     * The current approximate inventory level for the item or items.
     *
     * @param $inventoryLevel \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setInventoryLevel($inventoryLevel): static {
        $this->properties['inventoryLevel'] = $inventoryLevel;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getInventoryLevel() {
        return $this->properties['inventoryLevel'];
    }
    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or
     * component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     *
     * @param $businessFunction \LengthOfRope\JSONLD\Schema\BusinessFunction
     * @return static
     **/
    public function setBusinessFunction($businessFunction): static {
        $this->properties['businessFunction'] = $businessFunction;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\BusinessFunction
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
     * The typical delay between the receipt of the order and the goods either leaving
     * the warehouse or being prepared for pickup, in case the delivery method is on
     * site pickup.
     *
     * @param $deliveryLeadTime \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setDeliveryLeadTime($deliveryLeadTime): static {
        $this->properties['deliveryLeadTime'] = $deliveryLeadTime;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
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
     * @param $eligibleRegion \LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setEligibleRegion($eligibleRegion): static {
        $this->properties['eligibleRegion'] = $eligibleRegion;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\GeoShape|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\Place
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
     * @param $gtin12 \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setGtin12($gtin12): static {
        $this->properties['gtin12'] = $gtin12;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getGtin12() {
        return $this->properties['gtin12'];
    }
    /**
     * The date when the item becomes valid.
     *
     * @param $validFrom \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setValidFrom($validFrom): static {
        $this->properties['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Date
     **/
    public function getValidFrom() {
        return $this->properties['validFrom'];
    }
    /**
     * The end of the availability of the product or service included in the offer.
     *
     * @param $availabilityEnds \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Time|\LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setAvailabilityEnds($availabilityEnds): static {
        $this->properties['availabilityEnds'] = $availabilityEnds;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\DateTime|\LengthOfRope\JSONLD\DataType\Time|\LengthOfRope\JSONLD\DataType\Date
     **/
    public function getAvailabilityEnds() {
        return $this->properties['availabilityEnds'];
    }
    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @param $aggregateRating \LengthOfRope\JSONLD\Schema\AggregateRating
     * @return static
     **/
    public function setAggregateRating($aggregateRating): static {
        $this->properties['aggregateRating'] = $aggregateRating;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\AggregateRating
     **/
    public function getAggregateRating() {
        return $this->properties['aggregateRating'];
    }
    /**
     * The amount of time that is required between accepting the offer and the actual
     * usage of the resource or service.
     *
     * @param $advanceBookingRequirement \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setAdvanceBookingRequirement($advanceBookingRequirement): static {
        $this->properties['advanceBookingRequirement'] = $advanceBookingRequirement;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getAdvanceBookingRequirement() {
        return $this->properties['advanceBookingRequirement'];
    }
    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     *
     * @param $availableAtOrFrom \LengthOfRope\JSONLD\Schema\Place
     * @return static
     **/
    public function setAvailableAtOrFrom($availableAtOrFrom): static {
        $this->properties['availableAtOrFrom'] = $availableAtOrFrom;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Place
     **/
    public function getAvailableAtOrFrom() {
        return $this->properties['availableAtOrFrom'];
    }
    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product
     * or service, or the product to which the offer refers.
     *
     * @param $sku \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setSku($sku): static {
        $this->properties['sku'] = $sku;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
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
     * @param $eligibleTransactionVolume \LengthOfRope\JSONLD\Schema\PriceSpecification
     * @return static
     **/
    public function setEligibleTransactionVolume($eligibleTransactionVolume): static {
        $this->properties['eligibleTransactionVolume'] = $eligibleTransactionVolume;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\PriceSpecification
     **/
    public function getEligibleTransactionVolume() {
        return $this->properties['eligibleTransactionVolume'];
    }
}
