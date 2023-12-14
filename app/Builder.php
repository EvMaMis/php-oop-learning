<?php

namespace App;

class Builder extends Worker
{

    use hasEat;
    private array $buildings;
    private int $experience;

    public function getBuildings(): array
    {
        return $this->buildings;
    }

    public function setBuildings(array $buildings): void
    {
        $this->buildings = $buildings;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function setExperience(int $experience): void
    {
        $this->experience = $experience;
    }

    public function __construct(string $name, int $age, string $id, array $buildings, int $experience)
    {
        parent::__construct($name, $age, $id);
        $this->buildings = $buildings;
        $this->experience = $experience;
    }

    public function work() : void {
        print_r("The builder builds an object #" . $this->buildings[0] . "\n");
    }

    public function sleep() : void {
        print_r("The builder is sleeping\n");
    }


}