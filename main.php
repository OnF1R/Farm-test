<?php

require_once __DIR__ . '/autoload.php';

use test\src\Farm;

$farm = new Farm;

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
