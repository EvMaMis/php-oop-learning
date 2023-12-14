<?php

namespace App;
class Visitor extends Person
{
    public function doSomething() : void {
        print_r( "Name: " . $this -> name . " Age: " . $this->age . "  is visiting \n" );
    }
}