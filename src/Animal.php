<?php

namespace test\src;

abstract class Animal
{
    public $id;

    public function __construct()
    {
        $this->id = uniqid();
    }
}
