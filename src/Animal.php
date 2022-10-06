<?php

namespace test\src;

abstract class Animal
{
    public $id;

    public function __construct()
    {
        $this->id = uniqid();
    }

    public function getProduction()
    {
        return rand($this->minCountProduction, $this->maxCountProduction);
    }
}
