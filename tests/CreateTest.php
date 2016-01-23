<?php

namespace LengthOfRope\JSONLD;

class CreateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test if we can instantiate the class using the new operator. This should
     * be prohibited, since we have a nice factory for all classes to support chaining.
     */
    public function testCannotBeInstantiatedExternally()
    {
        $reflection = new \ReflectionClass('\LengthOfRope\JSONLD\Create');
        $constructor = $reflection->getConstructor();
        $this->assertFalse($constructor->isPublic());
    }

    /**
     * Test if the class is an IElement
     */
    public function testIsAnIElement()
    {
        $this->assertTrue(is_a(Create::factory(), 'LengthOfRope\JSONLD\Interfaces\IElement'));
    }

    /**
     * Test if the class is an ElementGroup
     */
    public function testIsAnElementGroup()
    {
        $this->assertTrue(is_a(Create::factory(), 'LengthOfRope\JSONLD\Elements\ElementGroup'));
    }

    /**
     * Test if the getDataArray() returns an array
     */
    public function testReturnsADataArray()
    {
        $this->assertTrue(is_array(Create::factory()->getDataArray()));
    }

}
