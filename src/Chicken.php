<?php

namespace test\src;

class Chicken extends Animal
{
    public $production;
    public $minCountProduction;
    public $maxCountProduction;

    public function __construct()
    {
        $this->production = "Eggs";
        $this->minCountProduction = 0;
        $this->maxCountProduction = 1;
        parent::__construct();
    }

    public function getProduction()
    {
        return rand($this->minCountProduction, $this->maxCountProduction);
    }
}
