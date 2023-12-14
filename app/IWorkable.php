<?php

namespace App;

interface IWorkable
{
    public function work() : void;
    public function sleep() : void;
}