<?php

namespace App;

abstract class Person
{
    protected string $name;
    protected int $age;
    protected string $id;

    public function setName(string $name) : void {
        $this->name = $name;
    }
    public function getName() : string {
        return $this->name;
    }
    public function setAge(int $age) : void {
        $this->age = $age;
    }
    public function getAge() : int {
        return $this->age;
    }
    public function setId(string $id) : void{
        $this->id = $id;
    }
    public function getId() : string {
        return $this->id;
    }


    public function __construct(string $name, int $age, string $id)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> id = $id;
    }

    abstract public function doSomething() : void;
}