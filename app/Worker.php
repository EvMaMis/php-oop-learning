<?php

namespace App;
class Worker extends Person implements IWorkable
{
    use hasEat;
    public function doSomething() : void {
        print_r("Name: " . $this->name . " Age: " . $this->age . " with personal id " . $this->id . " is working \n");
    }

    public function work(): void
    {
        print_r("Name: " . $this->name . " is working \n");
    }

    public function sleep(): void
    {
        print_r("Name: " . $this->name . " is sleeping \n");
    }
}