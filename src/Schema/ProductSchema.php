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
 * Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a car; a haircut; or an episode of a TV show streamed online.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class ProductSchema extends \LengthOfRope\JSONLD\Elements\Element
{
    public static function factory()
    {
        return new ProductSchema('https://schema.org/', 'Product');
    }

    /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
     *
     * @param $releaseDate 
     **/
    public function setReleaseDate($releaseDate) {
        $this->properties['releaseDate'] = $releaseDate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getReleaseDate() {
        return $this->properties['releaseDate'];
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
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @param $isSimilarTo |
     **/
    public function setIsSimilarTo($isSimilarTo) {
        $this->properties['isSimilarTo'] = $isSimilarTo;

        return $this;
    }

    /**
     * @return |
     **/
    public function getIsSimilarTo() {
        return $this->properties['isSimilarTo'];
    }

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     *
     * @param $model |
     **/
    public function setModel($model) {
        $this->properties['model'] = $model;

        return $this;
    }

    /**
     * @return |
     **/
    public function getModel() {
        return $this->properties['model'];
    }

    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @param $productionDate 
     **/
    public function setProductionDate($productionDate) {
        $this->properties['productionDate'] = $productionDate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProductionDate() {
        return $this->properties['productionDate'];
    }

    /**
     * Defines the energy efficiency Category (also known as "class" or "rating") for a product according to an international energy efficiency standard.
     *
     * @param $hasEnergyConsumptionDetails 
     **/
    public function setHasEnergyConsumptionDetails($hasEnergyConsumptionDetails) {
        $this->properties['hasEnergyConsumptionDetails'] = $hasEnergyConsumptionDetails;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasEnergyConsumptionDetails() {
        return $this->properties['hasEnergyConsumptionDetails'];
    }

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     * @param $material ||
     **/
    public function setMaterial($material) {
        $this->properties['material'] = $material;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getMaterial() {
        return $this->properties['material'];
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
     * An award won by or for this item.
     *
     * @param $award 
     **/
    public function setAward($award) {
        $this->properties['award'] = $award;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAward() {
        return $this->properties['award'];
    }

    /**
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product [[isVariantOf]]. 
     *
     * @param $inProductGroupWithID 
     **/
    public function setInProductGroupWithID($inProductGroupWithID) {
        $this->properties['inProductGroupWithID'] = $inProductGroupWithID;

        return $this;
    }

    /**
     * @return 
     **/
    public function getInProductGroupWithID() {
        return $this->properties['inProductGroupWithID'];
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     *
     * @param $funding 
     **/
    public function setFunding($funding) {
        $this->properties['funding'] = $funding;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFunding() {
        return $this->properties['funding'];
    }

    /**
     * Certification information about a product, organization, service, place, or person.
     *
     * @param $hasCertification 
     **/
    public function setHasCertification($hasCertification) {
        $this->properties['hasCertification'] = $hasCertification;

        return $this;
    }

    /**
     * @return 
     **/
    public function getHasCertification() {
        return $this->properties['hasCertification'];
    }

    /**
     * The manufacturer of the product.
     *
     * @param $manufacturer 
     **/
    public function setManufacturer($manufacturer) {
        $this->properties['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * @return 
     **/
    public function getManufacturer() {
        return $this->properties['manufacturer'];
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
     * The place where the product was assembled.
     *
     * @param $countryOfAssembly 
     **/
    public function setCountryOfAssembly($countryOfAssembly) {
        $this->properties['countryOfAssembly'] = $countryOfAssembly;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCountryOfAssembly() {
        return $this->properties['countryOfAssembly'];
    }

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
     *
     * @param $keywords ||
     **/
    public function setKeywords($keywords) {
        $this->properties['keywords'] = $keywords;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getKeywords() {
        return $this->properties['keywords'];
    }

    /**
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a  QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may be more applicable. 
     *
     * @param $size |||
     **/
    public function setSize($size) {
        $this->properties['size'] = $size;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getSize() {
        return $this->properties['size'];
    }

    /**
     * An associated logo.
     *
     * @param $logo |
     **/
    public function setLogo($logo) {
        $this->properties['logo'] = $logo;

        return $this;
    }

    /**
     * @return |
     **/
    public function getLogo() {
        return $this->properties['logo'];
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
     * Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.

In the case of a [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself is being described.

The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most positive is at the beginning of the list).
     *
     * @param $positiveNotes |||
     **/
    public function setPositiveNotes($positiveNotes) {
        $this->properties['positiveNotes'] = $positiveNotes;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getPositiveNotes() {
        return $this->properties['positiveNotes'];
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
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to controlled value schemes are also supported.
     *
     * @param $pattern |
     **/
    public function setPattern($pattern) {
        $this->properties['pattern'] = $pattern;

        return $this;
    }

    /**
     * @return |
     **/
    public function getPattern() {
        return $this->properties['pattern'];
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     * @param $brand |
     **/
    public function setBrand($brand) {
        $this->properties['brand'] = $brand;

        return $this;
    }

    /**
     * @return |
     **/
    public function getBrand() {
        return $this->properties['brand'];
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
     * A pointer to another, somehow related product (or multiple products).
     *
     * @param $isRelatedTo |
     **/
    public function setIsRelatedTo($isRelatedTo) {
        $this->properties['isRelatedTo'] = $isRelatedTo;

        return $this;
    }

    /**
     * @return |
     **/
    public function getIsRelatedTo() {
        return $this->properties['isRelatedTo'];
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
     * The color of the product.
     *
     * @param $color 
     **/
    public function setColor($color) {
        $this->properties['color'] = $color;

        return $this;
    }

    /**
     * @return 
     **/
    public function getColor() {
        return $this->properties['color'];
    }

    /**
     * The country of origin of something, including products as well as creative  works such as movie and TV content.

In the case of TV and movie, this would be the country of the principle offices of the production company or individual responsible for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]] and [[locationCreated]] may be more applicable.

In the case of products, the country of origin of the product. The exact interpretation of this may vary by context and product type, and cannot be fully enumerated here.
     *
     * @param $countryOfOrigin 
     **/
    public function setCountryOfOrigin($countryOfOrigin) {
        $this->properties['countryOfOrigin'] = $countryOfOrigin;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCountryOfOrigin() {
        return $this->properties['countryOfOrigin'];
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
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
      
     *
     * @param $offers |
     **/
    public function setOffers($offers) {
        $this->properties['offers'] = $offers;

        return $this;
    }

    /**
     * @return |
     **/
    public function getOffers() {
        return $this->properties['offers'];
    }

    /**
     * The height of the item.
     *
     * @param $height |
     **/
    public function setHeight($height) {
        $this->properties['height'] = $height;

        return $this;
    }

    /**
     * @return |
     **/
    public function getHeight() {
        return $this->properties['height'];
    }

    /**
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
     *
     * @param $isAccessoryOrSparePartFor 
     **/
    public function setIsAccessoryOrSparePartFor($isAccessoryOrSparePartFor) {
        $this->properties['isAccessoryOrSparePartFor'] = $isAccessoryOrSparePartFor;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsAccessoryOrSparePartFor() {
        return $this->properties['isAccessoryOrSparePartFor'];
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
     * Awards won by or for this item.
     *
     * @param $awards 
     **/
    public function setAwards($awards) {
        $this->properties['awards'] = $awards;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAwards() {
        return $this->properties['awards'];
    }

    /**
     * The width of the item.
     *
     * @param $width |
     **/
    public function setWidth($width) {
        $this->properties['width'] = $width;

        return $this;
    }

    /**
     * @return |
     **/
    public function getWidth() {
        return $this->properties['width'];
    }

    /**
     * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]], the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]], this property can apply to any [[Product]] included in the group.
     *
     * @param $isVariantOf |
     **/
    public function setIsVariantOf($isVariantOf) {
        $this->properties['isVariantOf'] = $isVariantOf;

        return $this;
    }

    /**
     * @return |
     **/
    public function getIsVariantOf() {
        return $this->properties['isVariantOf'];
    }

    /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
     *
     * @param $isConsumableFor 
     **/
    public function setIsConsumableFor($isConsumableFor) {
        $this->properties['isConsumableFor'] = $isConsumableFor;

        return $this;
    }

    /**
     * @return 
     **/
    public function getIsConsumableFor() {
        return $this->properties['isConsumableFor'];
    }

    /**
     * A slogan or motto associated with the item.
     *
     * @param $slogan 
     **/
    public function setSlogan($slogan) {
        $this->properties['slogan'] = $slogan;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSlogan() {
        return $this->properties['slogan'];
    }

    /**
     * The place where the item (typically [[Product]]) was last processed and tested before importation.
     *
     * @param $countryOfLastProcessing 
     **/
    public function setCountryOfLastProcessing($countryOfLastProcessing) {
        $this->properties['countryOfLastProcessing'] = $countryOfLastProcessing;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCountryOfLastProcessing() {
        return $this->properties['countryOfLastProcessing'];
    }

    /**
     * The weight of the product or person.
     *
     * @param $weight 
     **/
    public function setWeight($weight) {
        $this->properties['weight'] = $weight;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWeight() {
        return $this->properties['weight'];
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
     * Indicates the [NATO stock number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a [[Product]]. 
     *
     * @param $nsn 
     **/
    public function setNsn($nsn) {
        $this->properties['nsn'] = $nsn;

        return $this;
    }

    /**
     * @return 
     **/
    public function getNsn() {
        return $this->properties['nsn'];
    }

    /**
     * The depth of the item.
     *
     * @param $depth |
     **/
    public function setDepth($depth) {
        $this->properties['depth'] = $depth;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDepth() {
        return $this->properties['depth'];
    }

    /**
     * A color swatch image, visualizing the color of a [[Product]]. Should match the textual description specified in the [[color]] property. This can be a URL or a fully described ImageObject.
     *
     * @param $colorSwatch |
     **/
    public function setColorSwatch($colorSwatch) {
        $this->properties['colorSwatch'] = $colorSwatch;

        return $this;
    }

    /**
     * @return |
     **/
    public function getColorSwatch() {
        return $this->properties['colorSwatch'];
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
     * Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry 

In the case of a [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself is being described. Since product descriptions 
tend to emphasise positive claims, it may be relatively unusual to find [[negativeNotes]] used in this way. Nevertheless for the sake of symmetry, [[negativeNotes]] can be used on [[Product]].

The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most negative is at the beginning of the list).
     *
     * @param $negativeNotes |||
     **/
    public function setNegativeNotes($negativeNotes) {
        $this->properties['negativeNotes'] = $negativeNotes;

        return $this;
    }

    /**
     * @return |||
     **/
    public function getNegativeNotes() {
        return $this->properties['negativeNotes'];
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
     * The product identifier, such as ISBN. For example: ``` meta itemprop="productID" content="isbn:123-456-789" ```.
     *
     * @param $productID 
     **/
    public function setProductID($productID) {
        $this->properties['productID'] = $productID;

        return $this;
    }

    /**
     * @return 
     **/
    public function getProductID() {
        return $this->properties['productID'];
    }

    /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
     *
     * @param $purchaseDate 
     **/
    public function setPurchaseDate($purchaseDate) {
        $this->properties['purchaseDate'] = $purchaseDate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPurchaseDate() {
        return $this->properties['purchaseDate'];
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param $audience 
     **/
    public function setAudience($audience) {
        $this->properties['audience'] = $audience;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAudience() {
        return $this->properties['audience'];
    }


}
