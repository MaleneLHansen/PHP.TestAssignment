<?php

namespace Test\Linkfire\Assignment;

use Linkfire\Assignment\Models\Dog;
use Linkfire\Assignment\Services\DogService;
use Test\Linkfire\Assignment\Helpers\UnitTestCase;

class DogServiceTest extends UnitTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        //some setup mocks
    }
    /**
     *
     * @test
     * @testdox Assert that dogservice create returns a dog
     *
     * Whatever I do - it can't seem to find my DogService.
     * The error is:
     *  Error: Class 'Linkfire\Assignment\Services\DogService' not found
     *
     * And I can't figure out what it is.
     */
    public function testCreateDog()
    {
        $dogService = $this->getDI()->get('dogService');
        $name = 'Fie';
        $weight = 12.2;
        $age = 8;
        $gender = 'female';
        $dog = $dogService->create($name, $weight, $age, $gender);

        $this->assertTrue($dog instanceof Dog);
        $this->assertEquals(true, $dog->isSuperCute());
        $this->assertTrue(true);
    }
}