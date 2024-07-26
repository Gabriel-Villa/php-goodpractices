<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Pvilla\PhpGoodpractices\Sum;

$sum = new Sum();

echo $sum->apply(1, 2);