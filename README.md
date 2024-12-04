# create-jsonld

Simple PHP library to create JSON-LD output.

Usage:
```php
use \LengthOfRope\JSONLD;
use \LengthOfRope\JSONLD\Schema;

$Create = JSONLD\Create::factory()->add(
    Schema\Book::factory()
        ->setAuthor(
            Schema\Person::factory()
                ->setName("NAME")
                ->setEmail("email@example.com")
        )
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
                ->setEmail("email@example.com")
                ->setTelephone("033-1234567")
                ->setAddressRegion("Utrecht")
        )
        ->setName("Devver Company")
        ->setDescription("Just another developer")
);

echo $Create->getJSONLDScript();
```

## Version history
1.0.1
- Restructured comments
- Added @see with link to schema.org

1.0.0

- Removed Schema word from all classes **breaking change!**
- Added underscores to classes that have a reserved name or start with a number

0.9.X

- Initial development versions