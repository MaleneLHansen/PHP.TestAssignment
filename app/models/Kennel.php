<?php


namespace Linkfire\Assignment\Models;


class Kennel
{
    private $name;
    private $dogs = [];

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getDogs(): array
    {
        return $this->dogs;
    }

    /**
     * @param Dog $dog
     */
    public function addDog(Dog $dog): void
    {
        $this->dogs[] = $dog;
    }

    public function contains(Dog $dog)
    {
        return in_array($dog, $this->dogs);
    }
}