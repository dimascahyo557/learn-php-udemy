<?php

require_once __DIR__ . '/vendor/autoload.php';

use Dimascahyo557\BelajarPhpComposer\People;

echo "Hello Composer" . PHP_EOL;

$dimas = new People('Dimas Cahyo Nugroho');
echo $dimas->sayHello('Robi') . PHP_EOL;