<?php

namespace test\src;

class Farm
{
    public $animals = [];
    public $productions = [];

    public function registerAnimals(array $newAnimals): void
    {
        foreach ($newAnimals as $name => $value) {
            echo "На ферме " . $value . " " . $name . PHP_EOL;
            while ($value--) {
                $className = "test\\src\\" . $name;
                $this->animals[$name][$value] = new $className;
            }
        }
    }

    public function getAllProduction($days = 7): void
    {

        foreach ($this->animals as $name => $obj) {
            $this->productions[$name] = 0;
            for ($i = 0; $i < $days; $i++) {
                for ($j = 0; $j < count($obj); $j++) {
                    $this->productions[$name] += $obj[$j]->getProduction();
                }
            }
            echo "За неделю " . $name . " Принесла " . $this->productions[$name] . " " . $obj[0]->production;
            echo PHP_EOL;
        }
    }
}
