# create-jsonld

Simple PHP library to create JSON-LD output.

Note:
This is a WIP JSON+LD parser that doesn't handle everything, but covers the basics.

Usage:
```php
use \LengthOfRope\JSONLD;
use \LengthOfRope\JSONLD\Schema;

$Create = JSONLD\Create::factory()->add(
    Schema\BookSchema::factory()
        ->setAuthor(
            Schema\PersonSchema::factory()
                ->setName("NAME")
                ->setEmail("email@example.com")
        )
        ->setAbout("PHP")
        ->setName("Superb PHP Book")
        ->setAlternateName("Book one of three")
)->add(
    Schema\OrganizationSchema::factory()
        ->setAddress(
            Schema\PostalAddressSchema::factory()
                ->setPostalCode("1234 AA")
                ->setStreetAddress("Somewhere 12")
                ->setAddressCountry("NL")
                ->setAddressLocality("Amersfoort")
                ->setEmail("email@example.com")
                ->setTelephone("033-1234567")
                ->setAddressRegion("Utrecht")
        )
        ->setName("Devver Company")
        ->setDescription("Just another developer")
);

echo $Create->getJSONLDScript();
```