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
 * A vehicle is a device that is designed or used to transport people or cargo over land, water, air, or through space.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class VehicleSchema extends ProductSchema
{
    public static function factory(): VehicleSchema
    {
        return new VehicleSchema('https://schema.org/', 'Vehicle');
    }

    /**
     * The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in terms of limitations set by law.\n\nTypical unit code(s): C62 for persons.
     *
     * @param $vehicleSeatingCapacity |
     * @return static
     **/
    public function setVehicleSeatingCapacity($vehicleSeatingCapacity): static {
        $this->properties['vehicleSeatingCapacity'] = $vehicleSeatingCapacity;

        return $this;
    }

    /**
     * @return |
     **/
    public function getVehicleSeatingCapacity() {
        return $this->properties['vehicleSeatingCapacity'];
    }

    /**
     * The CO2 emissions in g/km. When used in combination with a QuantitativeValue, put "g/km" into the unitText property of that value, since there is no UN/CEFACT Common Code for "g/km".
     *
     * @param $emissionsCO2 
     * @return static
     **/
    public function setEmissionsCO2($emissionsCO2): static {
        $this->properties['emissionsCO2'] = $emissionsCO2;

        return $this;
    }

    /**
     * @return 
     **/
    public function getEmissionsCO2() {
        return $this->properties['emissionsCO2'];
    }

    /**
     * The number of owners of the vehicle, including the current one.\n\nTypical unit code(s): C62.
     *
     * @param $numberOfPreviousOwners |
     * @return static
     **/
    public function setNumberOfPreviousOwners($numberOfPreviousOwners): static {
        $this->properties['numberOfPreviousOwners'] = $numberOfPreviousOwners;

        return $this;
    }

    /**
     * @return |
     **/
    public function getNumberOfPreviousOwners() {
        return $this->properties['numberOfPreviousOwners'];
    }

    /**
     * The permitted weight of passengers and cargo, EXCLUDING the weight of the empty vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: Many databases specify the permitted TOTAL weight instead, which is the sum of [[weight]] and [[payload]]\n* Note 2: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 3: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 4: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param $payload 
     * @return static
     **/
    public function setPayload($payload): static {
        $this->properties['payload'] = $payload;

        return $this;
    }

    /**
     * @return 
     **/
    public function getPayload() {
        return $this->properties['payload'];
    }

    /**
     * Indicates that the vehicle meets the respective emission standard.
     *
     * @param $meetsEmissionStandard ||
     * @return static
     **/
    public function setMeetsEmissionStandard($meetsEmissionStandard): static {
        $this->properties['meetsEmissionStandard'] = $meetsEmissionStandard;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getMeetsEmissionStandard() {
        return $this->properties['meetsEmissionStandard'];
    }

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     *
     * @param $steeringPosition 
     * @return static
     **/
    public function setSteeringPosition($steeringPosition): static {
        $this->properties['steeringPosition'] = $steeringPosition;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSteeringPosition() {
        return $this->properties['steeringPosition'];
    }

    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @param $productionDate 
     * @return static
     **/
    public function setProductionDate($productionDate): static {
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
     * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
     *
     * @param $vehicleIdentificationNumber 
     * @return static
     **/
    public function setVehicleIdentificationNumber($vehicleIdentificationNumber): static {
        $this->properties['vehicleIdentificationNumber'] = $vehicleIdentificationNumber;

        return $this;
    }

    /**
     * @return 
     **/
    public function getVehicleIdentificationNumber() {
        return $this->properties['vehicleIdentificationNumber'];
    }

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     *
     * @param $callSign 
     * @return static
     **/
    public function setCallSign($callSign): static {
        $this->properties['callSign'] = $callSign;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCallSign() {
        return $this->properties['callSign'];
    }

    /**
     * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100 km).\n\n* Note 1: There are unfortunately no standard unit codes for liters per 100 km.  Use [[unitText]] to indicate the unit of measurement, e.g. L/100 km.\n* Note 2: There are two ways of indicating the fuel consumption, [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]] (e.g. 30 miles per gallon). They are reciprocal.\n* Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]] to link the value for the fuel consumption to another value.
     *
     * @param $fuelConsumption 
     * @return static
     **/
    public function setFuelConsumption($fuelConsumption): static {
        $this->properties['fuelConsumption'] = $fuelConsumption;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFuelConsumption() {
        return $this->properties['fuelConsumption'];
    }

    /**
     * The number of doors.\n\nTypical unit code(s): C62.
     *
     * @param $numberOfDoors |
     * @return static
     **/
    public function setNumberOfDoors($numberOfDoors): static {
        $this->properties['numberOfDoors'] = $numberOfDoors;

        return $this;
    }

    /**
     * @return |
     **/
    public function getNumberOfDoors() {
        return $this->properties['numberOfDoors'];
    }

    /**
     * A textual description of known damages, both repaired and unrepaired.
     *
     * @param $knownVehicleDamages 
     * @return static
     **/
    public function setKnownVehicleDamages($knownVehicleDamages): static {
        $this->properties['knownVehicleDamages'] = $knownVehicleDamages;

        return $this;
    }

    /**
     * @return 
     **/
    public function getKnownVehicleDamages() {
        return $this->properties['knownVehicleDamages'];
    }

    /**
     * The capacity of the fuel tank or in the case of electric cars, the battery. If there are multiple components for storage, this should indicate the total of all storage of the same type.\n\nTypical unit code(s): LTR for liters, GLL of US gallons, GLI for UK / imperial gallons, AMH for ampere-hours (for electrical vehicles).
     *
     * @param $fuelCapacity 
     * @return static
     **/
    public function setFuelCapacity($fuelCapacity): static {
        $this->properties['fuelCapacity'] = $fuelCapacity;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFuelCapacity() {
        return $this->properties['fuelCapacity'];
    }

    /**
     * The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.\n\nTypical unit code(s): LTR for liters, FTQ for cubic foot/feet\n\nNote: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param $cargoVolume 
     * @return static
     **/
    public function setCargoVolume($cargoVolume): static {
        $this->properties['cargoVolume'] = $cargoVolume;

        return $this;
    }

    /**
     * @return 
     **/
    public function getCargoVolume() {
        return $this->properties['cargoVolume'];
    }

    /**
     * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
     *
     * @param $vehicleConfiguration 
     * @return static
     **/
    public function setVehicleConfiguration($vehicleConfiguration): static {
        $this->properties['vehicleConfiguration'] = $vehicleConfiguration;

        return $this;
    }

    /**
     * @return 
     **/
    public function getVehicleConfiguration() {
        return $this->properties['vehicleConfiguration'];
    }

    /**
     * The color or color combination of the interior of the vehicle.
     *
     * @param $vehicleInteriorColor 
     * @return static
     **/
    public function setVehicleInteriorColor($vehicleInteriorColor): static {
        $this->properties['vehicleInteriorColor'] = $vehicleInteriorColor;

        return $this;
    }

    /**
     * @return 
     **/
    public function getVehicleInteriorColor() {
        return $this->properties['vehicleInteriorColor'];
    }

    /**
     * The release date of a vehicle model (often used to differentiate versions of the same make and model).
     *
     * @param $vehicleModelDate 
     * @return static
     **/
    public function setVehicleModelDate($vehicleModelDate): static {
        $this->properties['vehicleModelDate'] = $vehicleModelDate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getVehicleModelDate() {
        return $this->properties['vehicleModelDate'];
    }

    /**
     * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.\n\nTypical unit code(s): KMT for kilometers, SMI for statute miles.
     *
     * @param $mileageFromOdometer 
     * @return static
     **/
    public function setMileageFromOdometer($mileageFromOdometer): static {
        $this->properties['mileageFromOdometer'] = $mileageFromOdometer;

        return $this;
    }

    /**
     * @return 
     **/
    public function getMileageFromOdometer() {
        return $this->properties['mileageFromOdometer'];
    }

    /**
     * The number of persons that can be seated (e.g. in a vehicle), both in terms of the physical space available, and in terms of limitations set by law.\n\nTypical unit code(s): C62 for persons.
     *
     * @param $seatingCapacity |
     * @return static
     **/
    public function setSeatingCapacity($seatingCapacity): static {
        $this->properties['seatingCapacity'] = $seatingCapacity;

        return $this;
    }

    /**
     * @return |
     **/
    public function getSeatingCapacity() {
        return $this->properties['seatingCapacity'];
    }

    /**
     * The number or type of airbags in the vehicle.
     *
     * @param $numberOfAirbags |
     * @return static
     **/
    public function setNumberOfAirbags($numberOfAirbags): static {
        $this->properties['numberOfAirbags'] = $numberOfAirbags;

        return $this;
    }

    /**
     * @return |
     **/
    public function getNumberOfAirbags() {
        return $this->properties['numberOfAirbags'];
    }

    /**
     * The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s) ("gearbox" for cars).
     *
     * @param $vehicleTransmission ||
     * @return static
     **/
    public function setVehicleTransmission($vehicleTransmission): static {
        $this->properties['vehicleTransmission'] = $vehicleTransmission;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getVehicleTransmission() {
        return $this->properties['vehicleTransmission'];
    }

    /**
     * The release date of a vehicle model (often used to differentiate versions of the same make and model).
     *
     * @param $modelDate 
     * @return static
     **/
    public function setModelDate($modelDate): static {
        $this->properties['modelDate'] = $modelDate;

        return $this;
    }

    /**
     * @return 
     **/
    public function getModelDate() {
        return $this->properties['modelDate'];
    }

    /**
     * The total number of forward gears available for the transmission system of the vehicle.\n\nTypical unit code(s): C62.
     *
     * @param $numberOfForwardGears |
     * @return static
     **/
    public function setNumberOfForwardGears($numberOfForwardGears): static {
        $this->properties['numberOfForwardGears'] = $numberOfForwardGears;

        return $this;
    }

    /**
     * @return |
     **/
    public function getNumberOfForwardGears() {
        return $this->properties['numberOfForwardGears'];
    }

    /**
     * Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi. The legislation in many countries requires this information to be revealed when offering a car for sale.
     *
     * @param $vehicleSpecialUsage |
     * @return static
     **/
    public function setVehicleSpecialUsage($vehicleSpecialUsage): static {
        $this->properties['vehicleSpecialUsage'] = $vehicleSpecialUsage;

        return $this;
    }

    /**
     * @return |
     **/
    public function getVehicleSpecialUsage() {
        return $this->properties['vehicleSpecialUsage'];
    }

    /**
     * The time needed to accelerate the vehicle from a given start velocity to a given target velocity.\n\nTypical unit code(s): SEC for seconds\n\n* Note: There are unfortunately no standard unit codes for seconds/0..100 km/h or seconds/0..60 mph. Simply use "SEC" for seconds and indicate the velocities in the [[name]] of the [[QuantitativeValue]], or use [[valueReference]] with a [[QuantitativeValue]] of 0..60 mph or 0..100 km/h to specify the reference speeds.
     *
     * @param $accelerationTime 
     * @return static
     **/
    public function setAccelerationTime($accelerationTime): static {
        $this->properties['accelerationTime'] = $accelerationTime;

        return $this;
    }

    /**
     * @return 
     **/
    public function getAccelerationTime() {
        return $this->properties['accelerationTime'];
    }

    /**
     * Information about the engine or engines of the vehicle.
     *
     * @param $vehicleEngine 
     * @return static
     **/
    public function setVehicleEngine($vehicleEngine): static {
        $this->properties['vehicleEngine'] = $vehicleEngine;

        return $this;
    }

    /**
     * @return 
     **/
    public function getVehicleEngine() {
        return $this->properties['vehicleEngine'];
    }

    /**
     * The permitted total weight of the loaded vehicle, including passengers and cargo and the weight of the empty vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param $weightTotal 
     * @return static
     **/
    public function setWeightTotal($weightTotal): static {
        $this->properties['weightTotal'] = $weightTotal;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWeightTotal() {
        return $this->properties['weightTotal'];
    }

    /**
     * The permitted weight of a trailer attached to the vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param $trailerWeight 
     * @return static
     **/
    public function setTrailerWeight($trailerWeight): static {
        $this->properties['trailerWeight'] = $trailerWeight;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTrailerWeight() {
        return $this->properties['trailerWeight'];
    }

    /**
     * The number of axles.\n\nTypical unit code(s): C62.
     *
     * @param $numberOfAxles |
     * @return static
     **/
    public function setNumberOfAxles($numberOfAxles): static {
        $this->properties['numberOfAxles'] = $numberOfAxles;

        return $this;
    }

    /**
     * @return |
     **/
    public function getNumberOfAxles() {
        return $this->properties['numberOfAxles'];
    }

    /**
     * The speed range of the vehicle. If the vehicle is powered by an engine, the upper limit of the speed range (indicated by [[maxValue]]) should be the maximum speed achievable under regular conditions.\n\nTypical unit code(s): KMH for km/h, HM for mile per hour (0.447 04 m/s), KNT for knot\n\n*Note 1: Use [[minValue]] and [[maxValue]] to indicate the range. Typically, the minimal value is zero.\n* Note 2: There are many different ways of measuring the speed range. You can link to information about how the given value has been determined using the [[valueReference]] property.
     *
     * @param $speed 
     * @return static
     **/
    public function setSpeed($speed): static {
        $this->properties['speed'] = $speed;

        return $this;
    }

    /**
     * @return 
     **/
    public function getSpeed() {
        return $this->properties['speed'];
    }

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.). While most interior types are characterized by the material used, an interior type can also be based on vehicle usage or target audience.
     *
     * @param $vehicleInteriorType 
     * @return static
     **/
    public function setVehicleInteriorType($vehicleInteriorType): static {
        $this->properties['vehicleInteriorType'] = $vehicleInteriorType;

        return $this;
    }

    /**
     * @return 
     **/
    public function getVehicleInteriorType() {
        return $this->properties['vehicleInteriorType'];
    }

    /**
     * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).\n\n* Note 1: There are unfortunately no standard unit codes for miles per gallon or kilometers per liter. Use [[unitText]] to indicate the unit of measurement, e.g. mpg or km/L.\n* Note 2: There are two ways of indicating the fuel consumption, [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]] (e.g. 30 miles per gallon). They are reciprocal.\n* Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]] to link the value for the fuel economy to another value.
     *
     * @param $fuelEfficiency 
     * @return static
     **/
    public function setFuelEfficiency($fuelEfficiency): static {
        $this->properties['fuelEfficiency'] = $fuelEfficiency;

        return $this;
    }

    /**
     * @return 
     **/
    public function getFuelEfficiency() {
        return $this->properties['fuelEfficiency'];
    }

    /**
     * The date of the first registration of the vehicle with the respective public authorities.
     *
     * @param $dateVehicleFirstRegistered 
     * @return static
     **/
    public function setDateVehicleFirstRegistered($dateVehicleFirstRegistered): static {
        $this->properties['dateVehicleFirstRegistered'] = $dateVehicleFirstRegistered;

        return $this;
    }

    /**
     * @return 
     **/
    public function getDateVehicleFirstRegistered() {
        return $this->properties['dateVehicleFirstRegistered'];
    }

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
     *
     * @param $fuelType ||
     * @return static
     **/
    public function setFuelType($fuelType): static {
        $this->properties['fuelType'] = $fuelType;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getFuelType() {
        return $this->properties['fuelType'];
    }

    /**
     * Indicates the design and body style of the vehicle (e.g. station wagon, hatchback, etc.).
     *
     * @param $bodyType ||
     * @return static
     **/
    public function setBodyType($bodyType): static {
        $this->properties['bodyType'] = $bodyType;

        return $this;
    }

    /**
     * @return ||
     **/
    public function getBodyType() {
        return $this->properties['bodyType'];
    }

    /**
     * The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
     *
     * @param $driveWheelConfiguration |
     * @return static
     **/
    public function setDriveWheelConfiguration($driveWheelConfiguration): static {
        $this->properties['driveWheelConfiguration'] = $driveWheelConfiguration;

        return $this;
    }

    /**
     * @return |
     **/
    public function getDriveWheelConfiguration() {
        return $this->properties['driveWheelConfiguration'];
    }

    /**
     * The permitted vertical load (TWR) of a trailer attached to the vehicle. Also referred to as Tongue Load Rating (TLR) or Vertical Load Rating (VLR).\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param $tongueWeight 
     * @return static
     **/
    public function setTongueWeight($tongueWeight): static {
        $this->properties['tongueWeight'] = $tongueWeight;

        return $this;
    }

    /**
     * @return 
     **/
    public function getTongueWeight() {
        return $this->properties['tongueWeight'];
    }

    /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
     *
     * @param $purchaseDate 
     * @return static
     **/
    public function setPurchaseDate($purchaseDate): static {
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
     * The distance between the centers of the front and rear wheels.\n\nTypical unit code(s): CMT for centimeters, MTR for meters, INH for inches, FOT for foot/feet.
     *
     * @param $wheelbase 
     * @return static
     **/
    public function setWheelbase($wheelbase): static {
        $this->properties['wheelbase'] = $wheelbase;

        return $this;
    }

    /**
     * @return 
     **/
    public function getWheelbase() {
        return $this->properties['wheelbase'];
    }


}
