<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

use \LengthOfRope\JSONLD;
use \LengthOfRope\JSONLD\Schema;

$Create = JSONLD\Create::factory()->add(
    Schema\Book::factory()
        ->setAuthor(Schema\Person::factory()->setName("John Doe")->setEmail("john.doe@example.com"))
        ->setAbout("PHP")
        ->setName("Superb PHP Book")
        ->setAlternateName("Book one of three")
)->add(
    Schema\Organization::factory()
        ->setAddress(
            Schema\PostalAddress::factory()
                ->setPostalCode("1234 AA")
                ->setStreetAddress("Somewhere 12")
                ->setAddressCountry("NL")
                ->setAddressLocality("Amersfoort")
                ->setEmail("john.doe@example.com")
                ->setTelephone("033-1234567")
                ->setAddressRegion("Utrecht")
        )
        ->setName("LengthOfRope")
        ->setDescription("Just another developer")
)->add(
    Schema\Course::factory()
        ->setName("PHP Course")
        ->setDescription("Learn PHP in 3 days")
        ->setProvider(
            Schema\Organization::factory()
                ->setName("LengthOfRope")
                ->setSameAs("https://www.lengthofrope.nl")
                ->setImage("https://www.lengthofrope.nl/logo.png")
        )
        ->setHasCourseInstance(
            Schema\CourseInstance::factory()
                ->setName("PHP Course 1")
                ->setStartDate("2019-01-01")
                ->setEndDate("2019-01-03")
                ->setLocation(
                    Schema\Place::factory()
                        ->setName("LengthOfRope")
                        ->setAddress(
                            Schema\PostalAddress::factory()
                                ->setPostalCode("1234 AA")
                                ->setStreetAddress("Somewhere 12")
                                ->setAddressCountry("NL")
                                ->setAddressLocality("Amersfoort")
                        )
                )
        )
);

//echo "<pre>";
//print_r($Create->getDataArray());
print_r($Create->getJSONLDScript());
