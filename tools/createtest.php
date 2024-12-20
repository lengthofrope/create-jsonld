<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

use \LengthOfRope\JSONLD;
use LengthOfRope\JSONLD\Create;
use LengthOfRope\JSONLD\DataType;
use LengthOfRope\JSONLD\DataType\TypeDate;
use LengthOfRope\JSONLD\DataType\TypeText;
use \LengthOfRope\JSONLD\Schema;

$Create = JSONLD\Create::factory()
->add(
    Schema\Person::factory()
        ->setId("https://www.lengthofrope.nl/authors/#john-doe")
        ->setName(DataType\TypeText::factory()->setValue("John Doe"))
        ->setEmail("john.doe@example.com")
)->add(
    Schema\Book::factory()
        ->setAuthor(
            Schema\Person::factory()
                ->setName("John Doe")
                ->setEmail("john.doe@example.com")
        )
        ->setAbout("PHP")
        ->setName("Superb PHP Book")
        ->setAlternateName("Book one of three")
)->add(
    Schema\Book::factory()
        ->setAuthor(
            Schema\Person::factory()
                ->setId("https://www.lengthofrope.nl/authors/#john-doe")
        )
        ->setAbout("PHP")
        ->setName("Superb PHP Book with a linked author")
        ->setAlternateName("Book two of three")
)->add(
    Schema\Book::factory()
        ->setAuthor(
            Schema\Person::factory()
                ->setId("https://www.lengthofrope.nl/authors/#john-doe")
        )
        ->setAbout("PHP")
        ->setName("A less known but still superb PHP Book with a linked author")
        ->setAlternateName("Book three of three")
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
        ->setHasCourseInstance(Create::factory()->add(
            Schema\CourseInstance::factory()
                ->setName(TypeText::factory()->setValue("PHP Course 1"))
                ->setStartDate(TypeDate::factory()->setValue(DateTime::createFromFormat("d-m-Y", "01-01-2019")))
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
            ))->add(
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
            ))
);

// Test if the datatypes validate
if ($Create->validate()) {
    echo $Create->getJSONLD();
} else {
    echo "Some data is invalid\n";
}
//echo "<pre>";
//print_r($Create->getDataArray());

