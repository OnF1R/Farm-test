<?php



require 'src/Farm.php';
require 'src/Animal.php';
require 'src/Chicken.php';
require 'src/Cow.php';



$farm = new test\src\Farm;

$farm->registerAnimals(
    [
        'Cow' => 10,
        'Chicken' => 20,
    ]
);

$farm->getAllProduction();

$farm->buyAnimals(
    [
        'Cow' => 1,
        'Chicken' => 5,
    ]
);

$farm->getAllProduction();
