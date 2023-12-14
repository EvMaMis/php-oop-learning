<?php

namespace App;

trait hasEat
{
    public function eat() : void
    {
        print_r($this->getName() . " is eating \n");
    }
}