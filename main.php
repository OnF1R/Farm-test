<?php

namespace test\src;

require 'src/Farm.php';
require 'src/Animal.php';
require 'src/Chicken.php';
require 'src/Cow.php';



$farm = new Farm;

$farm->registerAnimals(
    [
        'Cow' => 10,
        'Chicken' => 20,
    ]
);

var_dump($farm->getAllProduction());