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
 * A vehicle is a device that is designed or used to transport people or cargo over land, water, air, or through space.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class VehicleSchema extends ProductSchema
{
    public static function factory()
    {
        return new VehicleSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.<br />
Typical unit code(s): LTR for liters, FTQ for cubic foot/feet<br />

Note: You can use <a href="minValue">minValue</a> and <a href="maxValue">maxValue</a> to indicate ranges.
     **/
    private $cargoVolume;
    public function setCargoVolume($cargoVolume) {
        $this->cargoVolume = $cargoVolume;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     **/
    public function getCargoVolume() {
        return $this->cargoVolume;
    }

    /**
     * The date of the first registration of the vehicle with the respective public authorities.
     **/
    private $dateVehicleFirstRegistered;
    public function setDateVehicleFirstRegistered($dateVehicleFirstRegistered) {
        $this->dateVehicleFirstRegistered = $dateVehicleFirstRegistered;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getDateVehicleFirstRegistered() {
        return $this->dateVehicleFirstRegistered;
    }

    /**
     * The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
     **/
    private $driveWheelConfiguration;
    public function setDriveWheelConfiguration($driveWheelConfiguration) {
        $this->driveWheelConfiguration = $driveWheelConfiguration;

        return $this;
    }

    /**
     * @return DriveWheelConfigurationValueSchema|TextSchema     **/
    public function getDriveWheelConfiguration() {
        return $this->driveWheelConfiguration;
    }

    /**
     * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100 km).<br />
Note 1: There are unfortunately no standard unit codes for liters per 100 km.<br />
Use <a href="unitText">unitText</a> to indicate the unit of measurement, e.g. L/100 km.
Note 2: There are two ways of indicating the fuel consumption, <a href="fuelConsumption">fuelConsumption</a> (e.g. 8 liters per 100 km) and <a href="fuelEfficiency">fuelEfficiency</a> (e.g. 30 miles per gallon). They are reciprocal.<br />
Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use <a href="valueReference">valueReference</a> to link the value for the fuel consumption to another value.
     **/
    private $fuelConsumption;
    public function setFuelConsumption($fuelConsumption) {
        $this->fuelConsumption = $fuelConsumption;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     **/
    public function getFuelConsumption() {
        return $this->fuelConsumption;
    }

    /**
     * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).<br />
Note 1: There are unfortunately no standard unit codes for miles per gallon or kilometers per liter.<br />
Use <a href="unitText">unitText</a> to indicate the unit of measurement, e.g. mpg or km/L.
Note 2: There are two ways of indicating the fuel consumption, <a href="fuelConsumption">fuelConsumption</a> (e.g. 8 liters per 100 km) and <a href="fuelEfficiency">fuelEfficiency</a> (e.g. 30 miles per gallon). They are reciprocal.<br />
Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use <a href="valueReference">valueReference</a> to link the value for the fuel economy to another value.
     **/
    private $fuelEfficiency;
    public function setFuelEfficiency($fuelEfficiency) {
        $this->fuelEfficiency = $fuelEfficiency;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     **/
    public function getFuelEfficiency() {
        return $this->fuelEfficiency;
    }

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
     **/
    private $fuelType;
    public function setFuelType($fuelType) {
        $this->fuelType = $fuelType;

        return $this;
    }

    /**
     * @return TextSchema|QualitativeValueSchema|URLSchema     **/
    public function getFuelType() {
        return $this->fuelType;
    }

    /**
     * A textual description of known damages, both repaired and unrepaired.
     **/
    private $knownVehicleDamages;
    public function setKnownVehicleDamages($knownVehicleDamages) {
        $this->knownVehicleDamages = $knownVehicleDamages;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getKnownVehicleDamages() {
        return $this->knownVehicleDamages;
    }

    /**
     * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.<br />
Typical unit code(s): KMT for kilometers, SMI for statute miles
     **/
    private $mileageFromOdometer;
    public function setMileageFromOdometer($mileageFromOdometer) {
        $this->mileageFromOdometer = $mileageFromOdometer;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     **/
    public function getMileageFromOdometer() {
        return $this->mileageFromOdometer;
    }

    /**
     * The number or type of airbags in the vehicle.
     **/
    private $numberOfAirbags;
    public function setNumberOfAirbags($numberOfAirbags) {
        $this->numberOfAirbags = $numberOfAirbags;

        return $this;
    }

    /**
     * @return NumberSchema|TextSchema     **/
    public function getNumberOfAirbags() {
        return $this->numberOfAirbags;
    }

    /**
     * The number of axles.<br />
Typical unit code(s): C62
     **/
    private $numberOfAxles;
    public function setNumberOfAxles($numberOfAxles) {
        $this->numberOfAxles = $numberOfAxles;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema|NumberSchema     **/
    public function getNumberOfAxles() {
        return $this->numberOfAxles;
    }

    /**
     * The number of doors.<br />
Typical unit code(s): C62
     **/
    private $numberOfDoors;
    public function setNumberOfDoors($numberOfDoors) {
        $this->numberOfDoors = $numberOfDoors;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema|NumberSchema     **/
    public function getNumberOfDoors() {
        return $this->numberOfDoors;
    }

    /**
     * The total number of forward gears available for the transmission system of the vehicle.<br />
Typical unit code(s): C62
     **/
    private $numberOfForwardGears;
    public function setNumberOfForwardGears($numberOfForwardGears) {
        $this->numberOfForwardGears = $numberOfForwardGears;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema|NumberSchema     **/
    public function getNumberOfForwardGears() {
        return $this->numberOfForwardGears;
    }

    /**
     * The number of owners of the vehicle, including the current one.<br />
Typical unit code(s): C62
     **/
    private $numberOfPreviousOwners;
    public function setNumberOfPreviousOwners($numberOfPreviousOwners) {
        $this->numberOfPreviousOwners = $numberOfPreviousOwners;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema|NumberSchema     **/
    public function getNumberOfPreviousOwners() {
        return $this->numberOfPreviousOwners;
    }

    /**
     * The date of production of the item, e.g. vehicle.
     **/
    private $productionDate;
    public function setProductionDate($productionDate) {
        $this->productionDate = $productionDate;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getProductionDate() {
        return $this->productionDate;
    }

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     **/
    private $purchaseDate;
    public function setPurchaseDate($purchaseDate) {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getPurchaseDate() {
        return $this->purchaseDate;
    }

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     **/
    private $steeringPosition;
    public function setSteeringPosition($steeringPosition) {
        $this->steeringPosition = $steeringPosition;

        return $this;
    }

    /**
     * @return SteeringPositionValueSchema     **/
    public function getSteeringPosition() {
        return $this->steeringPosition;
    }

    /**
     * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
     **/
    private $vehicleConfiguration;
    public function setVehicleConfiguration($vehicleConfiguration) {
        $this->vehicleConfiguration = $vehicleConfiguration;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getVehicleConfiguration() {
        return $this->vehicleConfiguration;
    }

    /**
     * Information about the engine or engines of the vehicle.
     **/
    private $vehicleEngine;
    public function setVehicleEngine($vehicleEngine) {
        $this->vehicleEngine = $vehicleEngine;

        return $this;
    }

    /**
     * @return EngineSpecificationSchema     **/
    public function getVehicleEngine() {
        return $this->vehicleEngine;
    }

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
     **/
    private $vin;
    public function setVin($vin) {
        $this->vin = $vin;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getVin() {
        return $this->vin;
    }

    /**
     * The color or color combination of the interior of the vehicle.
     **/
    private $vehicleInteriorColor;
    public function setVehicleInteriorColor($vehicleInteriorColor) {
        $this->vehicleInteriorColor = $vehicleInteriorColor;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getVehicleInteriorColor() {
        return $this->vehicleInteriorColor;
    }

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.). While most interior types are characterized by the material used, an interior type can also be based on vehicle usage or target audience.
     **/
    private $vehicleInteriorType;
    public function setVehicleInteriorType($vehicleInteriorType) {
        $this->vehicleInteriorType = $vehicleInteriorType;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getVehicleInteriorType() {
        return $this->vehicleInteriorType;
    }

    /**
     * The release date of a vehicle model (often used to differentiate versions of the same make and model).
     **/
    private $vehicleModelDate;
    public function setVehicleModelDate($vehicleModelDate) {
        $this->vehicleModelDate = $vehicleModelDate;

        return $this;
    }

    /**
     * @return DateSchema     **/
    public function getVehicleModelDate() {
        return $this->vehicleModelDate;
    }

    /**
     * The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in terms of limitations set by law.<br />
Typical unit code(s): C62 for persons.
     **/
    private $vehicleSeatingCapacity;
    public function setVehicleSeatingCapacity($vehicleSeatingCapacity) {
        $this->vehicleSeatingCapacity = $vehicleSeatingCapacity;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema|NumberSchema     **/
    public function getVehicleSeatingCapacity() {
        return $this->vehicleSeatingCapacity;
    }

    /**
     * The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s) ("gearbox" for cars).
     **/
    private $vehicleTransmission;
    public function setVehicleTransmission($vehicleTransmission) {
        $this->vehicleTransmission = $vehicleTransmission;

        return $this;
    }

    /**
     * @return TextSchema|QualitativeValueSchema|URLSchema     **/
    public function getVehicleTransmission() {
        return $this->vehicleTransmission;
    }


}
