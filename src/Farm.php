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
}

?>