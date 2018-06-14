<?php
namespace Ciebit\Places\Collections;

class Cities
{
    private $Cities; #ArrayObject

    public function __construct()
    {
        $this->Cities = new ArrayObject;
    }

    public function add(City $city): self
    {
        $this->Cities->append($city);
    }

    public function getArrayIterator(): ArrayIterator
    {
        $this->Cities->getIterator();
    }

    public function getArrayObject(): ArrayObject
    {
        return clone $this->Cities;
    }

    public function total(): int
    {
        return $this->Cities->count();
    }
}
