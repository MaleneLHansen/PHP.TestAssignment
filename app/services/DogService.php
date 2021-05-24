<?php
namespace Linkfire\Assignment\Services;

use Linkfire\Assignment\Models\Dog;

class DogService
{
    /**
     * @param string $name
     * @param float $weight
     * @param int $age
     * @param string $gender
     * @return Dog
     */
    public function create(string $name, float $weight, int $age, string $gender): Dog
    {
        $dog = new Dog();
        $dog->setName($name);
        $dog->setWeight($weight);
        $dog->setAge($age);
        $dog->setGender($gender);

        return $dog;
    }

    /**
     * Update the dog
     * @param Dog $dog
     */
    public function update(Dog $dog)
    {
        // updates a dog
    }

    /**
     * @param int $identifier
     */
    public function findOne(int $identifier)
    {
        // returns a dog by its identifier
    }

    /**
     * Returns collection/array of dogs
     */
    public function findAll()
    {
        // returns all dogs registrered in the system
    }

    /**
     * Deletes a dog
     */
    public function delete()
    {
        // removes a dog, I have never actually "deleted" an instance in the db,
        // but rather inactivated it, either by using a bool or datetime.
    }
}