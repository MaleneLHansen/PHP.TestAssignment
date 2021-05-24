<?php

namespace Linkfire\Assignment\Services;

use Linkfire\Assignment\Models\Dog;
use Linkfire\Assignment\Models\Kennel;

class KennelService
{
    /**
     * @return Kennel
     */
    public function get(): Kennel
    {
        // in real life this would ask in the db for a record and return that instance if exists
        $kennel = new Kennel();
        $kennel->setName('Sunshine Kennel');

        return $kennel;
    }

    public function add(Kennel $kennel, Dog $dog): bool
    {
        $kennel->addDog($dog);

        return $kennel->contains($dog);
    }
}