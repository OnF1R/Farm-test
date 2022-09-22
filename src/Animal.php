<?php

namespace test\src;

class Animal
{
    public $id;

    public function __construct()
    {
        $this->id = uniqid();
    }
}
