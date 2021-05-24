<?php

namespace Test\Linkfire\Assignment\Helpers;

use Linkfire\Assignment\Services\DogService;
use Phalcon\Di;
use Phalcon\Test\UnitTestCase as PhalconTestCase;

abstract class UnitTestCase extends PhalconTestCase
{
    public function setUp() : void
    {
        try {
            parent::setUp();
            // Load any additional services that might be required during testing
            $di = Di::getDefault();
            // Get any DI components here. If you have a config, be sure to pass it to the parent
            /**

            $di->set(
                'dogService',
                new DogService()
            );
             */
            $this->setDi($di);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
