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
 * Any offered product or service. For example: a pair of shoes; a concert ticket;
 * the rental of a car; a haircut; or an episode of a TV show streamed online.
 *
 * @see https://schema.org/Product
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class Product extends Thing
{
    public static function factory(): Product
    {
        return new Product('https://schema.org/', 'Product');
    }

    /**
     * The release date of a product or product model. This can be used to distinguish
     * the exact variant of a product.
     *
     * @param $releaseDate \LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setReleaseDate($releaseDate): static {
        $this->properties['releaseDate'] = $releaseDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date
     **/
    public function getReleaseDate() {
        return $this->properties['releaseDate'];
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
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @param $isSimilarTo \LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\Schema\Service
     * @return static
     **/
    public function setIsSimilarTo($isSimilarTo): static {
        $this->properties['isSimilarTo'] = $isSimilarTo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\Schema\Service
     **/
    public function getIsSimilarTo() {
        return $this->properties['isSimilarTo'];
    }
    /**
     * The model of the product. Use with the URL of a ProductModel or a textual
     * representation of the model identifier. The URL of the ProductModel can be from
     * an external source. It is recommended to additionally provide strong product
     * identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     *
     * @param $model \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\ProductModel
     * @return static
     **/
    public function setModel($model): static {
        $this->properties['model'] = $model;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\ProductModel
     **/
    public function getModel() {
        return $this->properties['model'];
    }
    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @param $productionDate \LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setProductionDate($productionDate): static {
        $this->properties['productionDate'] = $productionDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date
     **/
    public function getProductionDate() {
        return $this->properties['productionDate'];
    }
    /**
     * Defines the energy efficiency Category (also known as "class" or "rating") for a
     * product according to an international energy efficiency standard.
     *
     * @param $hasEnergyConsumptionDetails \LengthOfRope\JSONLD\Schema\EnergyConsumptionDetails
     * @return static
     **/
    public function setHasEnergyConsumptionDetails($hasEnergyConsumptionDetails): static {
        $this->properties['hasEnergyConsumptionDetails'] = $hasEnergyConsumptionDetails;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\EnergyConsumptionDetails
     **/
    public function getHasEnergyConsumptionDetails() {
        return $this->properties['hasEnergyConsumptionDetails'];
    }
    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     * @param $material \LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setMaterial($material): static {
        $this->properties['material'] = $material;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getMaterial() {
        return $this->properties['material'];
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
     * An award won by or for this item.
     *
     * @param $award \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setAward($award): static {
        $this->properties['award'] = $award;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getAward() {
        return $this->properties['award'];
    }
    /**
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product
     * [[isVariantOf]].
     *
     * @param $inProductGroupWithID \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setInProductGroupWithID($inProductGroupWithID): static {
        $this->properties['inProductGroupWithID'] = $inProductGroupWithID;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getInProductGroupWithID() {
        return $this->properties['inProductGroupWithID'];
    }
    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this
     * item. See also [[ownershipFundingInfo]].
     *
     * @param $funding \LengthOfRope\JSONLD\Schema\Grant
     * @return static
     **/
    public function setFunding($funding): static {
        $this->properties['funding'] = $funding;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Grant
     **/
    public function getFunding() {
        return $this->properties['funding'];
    }
    /**
     * Certification information about a product, organization, service, place, or
     * person.
     *
     * @param $hasCertification \LengthOfRope\JSONLD\Schema\Certification
     * @return static
     **/
    public function setHasCertification($hasCertification): static {
        $this->properties['hasCertification'] = $hasCertification;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Certification
     **/
    public function getHasCertification() {
        return $this->properties['hasCertification'];
    }
    /**
     * The manufacturer of the product.
     *
     * @param $manufacturer \LengthOfRope\JSONLD\Schema\Organization
     * @return static
     **/
    public function setManufacturer($manufacturer): static {
        $this->properties['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization
     **/
    public function getManufacturer() {
        return $this->properties['manufacturer'];
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
     * The place where the product was assembled.
     *
     * @param $countryOfAssembly \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setCountryOfAssembly($countryOfAssembly): static {
        $this->properties['countryOfAssembly'] = $countryOfAssembly;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getCountryOfAssembly() {
        return $this->properties['countryOfAssembly'];
    }
    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a
     * keywords list are typically delimited by commas, or by repeating the property.
     *
     * @param $keywords \LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setKeywords($keywords): static {
        $this->properties['keywords'] = $keywords;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\DefinedTerm|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getKeywords() {
        return $this->properties['keywords'];
    }
    /**
     * A standardized size of a product or creative work, specified either through a
     * simple textual string (for example 'XL', '32Wx34L'), a  QuantitativeValue with a
     * unitCode, or a comprehensive and structured [[SizeSpecification]]; in other
     * cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may be
     * more applicable.
     *
     * @param $size \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\SizeSpecification|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setSize($size): static {
        $this->properties['size'] = $size;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\SizeSpecification|\LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getSize() {
        return $this->properties['size'];
    }
    /**
     * An associated logo.
     *
     * @param $logo \LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\ImageObject
     * @return static
     **/
    public function setLogo($logo): static {
        $this->properties['logo'] = $logo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\URL|\LengthOfRope\JSONLD\Schema\ImageObject
     **/
    public function getLogo() {
        return $this->properties['logo'];
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
     * Provides positive considerations regarding something, for example product
     * highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.
     *
     * In the case of a [[Review]], the property describes the [[itemReviewed]] from
     * the perspective of the review; in the case of a [[Product]], the product itself
     * is being described.
     *
     * The property values can be expressed either as unstructured text (repeated as
     * necessary), or if ordered, as a list (in which case the most positive is at the
     * beginning of the list).
     *
     * @param $positiveNotes \LengthOfRope\JSONLD\Schema\ItemList|\LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\Schema\ListItem|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setPositiveNotes($positiveNotes): static {
        $this->properties['positiveNotes'] = $positiveNotes;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ItemList|\LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\Schema\ListItem|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getPositiveNotes() {
        return $this->properties['positiveNotes'];
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
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian
     * flag'. Values are typically expressed as text, although links to controlled
     * value schemes are also supported.
     *
     * @param $pattern \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\DefinedTerm
     * @return static
     **/
    public function setPattern($pattern): static {
        $this->properties['pattern'] = $pattern;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text|\LengthOfRope\JSONLD\Schema\DefinedTerm
     **/
    public function getPattern() {
        return $this->properties['pattern'];
    }
    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by
     * an organization or business person.
     *
     * @param $brand \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Brand
     * @return static
     **/
    public function setBrand($brand): static {
        $this->properties['brand'] = $brand;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Organization|\LengthOfRope\JSONLD\Schema\Brand
     **/
    public function getBrand() {
        return $this->properties['brand'];
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
     * A pointer to another, somehow related product (or multiple products).
     *
     * @param $isRelatedTo \LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\Schema\Service
     * @return static
     **/
    public function setIsRelatedTo($isRelatedTo): static {
        $this->properties['isRelatedTo'] = $isRelatedTo;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Product|\LengthOfRope\JSONLD\Schema\Service
     **/
    public function getIsRelatedTo() {
        return $this->properties['isRelatedTo'];
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
     * The color of the product.
     *
     * @param $color \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setColor($color): static {
        $this->properties['color'] = $color;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getColor() {
        return $this->properties['color'];
    }
    /**
     * The country of origin of something, including products as well as creative
     * works such as movie and TV content.
     *
     * In the case of TV and movie, this would be the country of the principle offices
     * of the production company or individual responsible for the movie. For other
     * kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and
     * properties such as [[contentLocation]] and [[locationCreated]] may be more
     * applicable.
     *
     * In the case of products, the country of origin of the product. The exact
     * interpretation of this may vary by context and product type, and cannot be fully
     * enumerated here.
     *
     * @param $countryOfOrigin \LengthOfRope\JSONLD\Schema\Country
     * @return static
     **/
    public function setCountryOfOrigin($countryOfOrigin): static {
        $this->properties['countryOfOrigin'] = $countryOfOrigin;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Country
     **/
    public function getCountryOfOrigin() {
        return $this->properties['countryOfOrigin'];
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
     * An offer to provide this item&#x2014;for example, an offer to sell a product,
     * rent the DVD of a movie, perform a service, or give away tickets to an event.
     * Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell,
     * lease, etc. This property can also be used to describe a [[Demand]]. While this
     * property is listed as expected on a number of common types, it can be used in
     * others. In that case, using a second type, such as Product or a subtype of
     * Product, can clarify the nature of the offer.
     *
     *
     * @param $offers \LengthOfRope\JSONLD\Schema\Offer|\LengthOfRope\JSONLD\Schema\Demand
     * @return static
     **/
    public function setOffers($offers): static {
        $this->properties['offers'] = $offers;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Offer|\LengthOfRope\JSONLD\Schema\Demand
     **/
    public function getOffers() {
        return $this->properties['offers'];
    }
    /**
     * The height of the item.
     *
     * @param $height \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setHeight($height): static {
        $this->properties['height'] = $height;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getHeight() {
        return $this->properties['height'];
    }
    /**
     * A pointer to another product (or multiple products) for which this product is an
     * accessory or spare part.
     *
     * @param $isAccessoryOrSparePartFor \LengthOfRope\JSONLD\Schema\Product
     * @return static
     **/
    public function setIsAccessoryOrSparePartFor($isAccessoryOrSparePartFor): static {
        $this->properties['isAccessoryOrSparePartFor'] = $isAccessoryOrSparePartFor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Product
     **/
    public function getIsAccessoryOrSparePartFor() {
        return $this->properties['isAccessoryOrSparePartFor'];
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
     * Awards won by or for this item.
     *
     * @param $awards \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setAwards($awards): static {
        $this->properties['awards'] = $awards;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getAwards() {
        return $this->properties['awards'];
    }
    /**
     * The width of the item.
     *
     * @param $width \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setWidth($width): static {
        $this->properties['width'] = $width;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Distance|\LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getWidth() {
        return $this->properties['width'];
    }
    /**
     * Indicates the kind of product that this is a variant of. In the case of
     * [[ProductModel]], this is a pointer (from a ProductModel) to a base product from
     * which this product is a variant. It is safe to infer that the variant inherits
     * all product features from the base model, unless defined locally. This is not
     * transitive. In the case of a [[ProductGroup]], the group description also serves
     * as a template, representing a set of Products that vary on explicitly defined,
     * specific dimensions only (so it defines both a set of variants, as well as which
     * values distinguish amongst those variants). When used with [[ProductGroup]],
     * this property can apply to any [[Product]] included in the group.
     *
     * @param $isVariantOf \LengthOfRope\JSONLD\Schema\ProductModel|\LengthOfRope\JSONLD\Schema\ProductGroup
     * @return static
     **/
    public function setIsVariantOf($isVariantOf): static {
        $this->properties['isVariantOf'] = $isVariantOf;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ProductModel|\LengthOfRope\JSONLD\Schema\ProductGroup
     **/
    public function getIsVariantOf() {
        return $this->properties['isVariantOf'];
    }
    /**
     * A pointer to another product (or multiple products) for which this product is a
     * consumable.
     *
     * @param $isConsumableFor \LengthOfRope\JSONLD\Schema\Product
     * @return static
     **/
    public function setIsConsumableFor($isConsumableFor): static {
        $this->properties['isConsumableFor'] = $isConsumableFor;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Product
     **/
    public function getIsConsumableFor() {
        return $this->properties['isConsumableFor'];
    }
    /**
     * A slogan or motto associated with the item.
     *
     * @param $slogan \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setSlogan($slogan): static {
        $this->properties['slogan'] = $slogan;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getSlogan() {
        return $this->properties['slogan'];
    }
    /**
     * The place where the item (typically [[Product]]) was last processed and tested
     * before importation.
     *
     * @param $countryOfLastProcessing \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setCountryOfLastProcessing($countryOfLastProcessing): static {
        $this->properties['countryOfLastProcessing'] = $countryOfLastProcessing;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getCountryOfLastProcessing() {
        return $this->properties['countryOfLastProcessing'];
    }
    /**
     * The weight of the product or person.
     *
     * @param $weight \LengthOfRope\JSONLD\Schema\QuantitativeValue
     * @return static
     **/
    public function setWeight($weight): static {
        $this->properties['weight'] = $weight;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue
     **/
    public function getWeight() {
        return $this->properties['weight'];
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
     * Indicates the [NATO stock
     * number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a [[Product]].
     *
     *
     * @param $nsn \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setNsn($nsn): static {
        $this->properties['nsn'] = $nsn;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getNsn() {
        return $this->properties['nsn'];
    }
    /**
     * The depth of the item.
     *
     * @param $depth \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Distance
     * @return static
     **/
    public function setDepth($depth): static {
        $this->properties['depth'] = $depth;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\QuantitativeValue|\LengthOfRope\JSONLD\Schema\Distance
     **/
    public function getDepth() {
        return $this->properties['depth'];
    }
    /**
     * A color swatch image, visualizing the color of a [[Product]]. Should match the
     * textual description specified in the [[color]] property. This can be a URL or a
     * fully described ImageObject.
     *
     * @param $colorSwatch \LengthOfRope\JSONLD\Schema\ImageObject|\LengthOfRope\JSONLD\DataType\URL
     * @return static
     **/
    public function setColorSwatch($colorSwatch): static {
        $this->properties['colorSwatch'] = $colorSwatch;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\ImageObject|\LengthOfRope\JSONLD\DataType\URL
     **/
    public function getColorSwatch() {
        return $this->properties['colorSwatch'];
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
     * Provides negative considerations regarding something, most typically in pro/con
     * lists for reviews (alongside [[positiveNotes]]). For symmetry
     *
     * In the case of a [[Review]], the property describes the [[itemReviewed]] from
     * the perspective of the review; in the case of a [[Product]], the product itself
     * is being described. Since product descriptions
     * tend to emphasise positive claims, it may be relatively unusual to find
     * [[negativeNotes]] used in this way. Nevertheless for the sake of symmetry,
     * [[negativeNotes]] can be used on [[Product]].
     *
     * The property values can be expressed either as unstructured text (repeated as
     * necessary), or if ordered, as a list (in which case the most negative is at the
     * beginning of the list).
     *
     * @param $negativeNotes \LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\Schema\ItemList|\LengthOfRope\JSONLD\Schema\ListItem|\LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setNegativeNotes($negativeNotes): static {
        $this->properties['negativeNotes'] = $negativeNotes;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\WebContent|\LengthOfRope\JSONLD\Schema\ItemList|\LengthOfRope\JSONLD\Schema\ListItem|\LengthOfRope\JSONLD\DataType\Text
     **/
    public function getNegativeNotes() {
        return $this->properties['negativeNotes'];
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
     * The product identifier, such as ISBN. For example: ``` meta itemprop="productID"
     * content="isbn:123-456-789" ```.
     *
     * @param $productID \LengthOfRope\JSONLD\DataType\Text
     * @return static
     **/
    public function setProductID($productID): static {
        $this->properties['productID'] = $productID;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Text
     **/
    public function getProductID() {
        return $this->properties['productID'];
    }
    /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
     *
     * @param $purchaseDate \LengthOfRope\JSONLD\DataType\Date
     * @return static
     **/
    public function setPurchaseDate($purchaseDate): static {
        $this->properties['purchaseDate'] = $purchaseDate;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\DataType\Date
     **/
    public function getPurchaseDate() {
        return $this->properties['purchaseDate'];
    }
    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param $audience \LengthOfRope\JSONLD\Schema\Audience
     * @return static
     **/
    public function setAudience($audience): static {
        $this->properties['audience'] = $audience;

        return $this;
    }

    /**
     * @return \LengthOfRope\JSONLD\Schema\Audience
     **/
    public function getAudience() {
        return $this->properties['audience'];
    }
}
