<?php
class Cow extends Animal
{
    public $production;
    public $minCountProduction;
    public $maxCountProduction;
    public function __construct()
    {
        $this->production = "Liters of milk";
        $this->minCountProduction = 8;
        $this->maxCountProduction = 12;
        parent::__construct();
    }

    public function getProduction()
    {
        return rand($this->minCountProduction, $this->maxCountProduction);
    }
}