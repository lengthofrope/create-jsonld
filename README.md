# create-jsonld

Simple PHP library to create JSON-LD output.

Usage:
```php
use \LengthOfRope\JSONLD;
use \LengthOfRope\JSONLD\Schema;

$Create = JSONLD\Create::factory()->add(
    Schema\Person::factory()
        ->setId("https://www.lengthofrope.nl/authors/#john-doe")
        ->setName("John Doe")
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
1.0.3

- Add basic validation
- Remove obsolete development dependencies

1.0.2

- Add support for linking with the @id property
- Updated the example in readme.md

1.0.1
- Restructured comments
- Added @see with link to schema.org

1.0.0

- Removed Schema word from all classes **breaking change!**
- Added underscores to classes that have a reserved name or start with a number

0.9.X

- Initial development versions