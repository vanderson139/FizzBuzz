<?php
require_once __DIR__ . '/../vendor/autoload.php';


$data = new \App\Vanderson\Data(1, 100);

$one = new \App\Vanderson\Parser\Divisible\DivisibleByOne();
$three = new \App\Vanderson\Parser\Divisible\DivisibleByThree($one);
$five = new \App\Vanderson\Parser\Divisible\DivisibleByFive($three);
$fifteen = new \App\Vanderson\Parser\Divisible\DivisibleByFifteen($five);

$parser = new \App\Vanderson\Parser($fifteen, $data);

$parsedValues = $parser->parse();

foreach ($parsedValues as $value) {
    print $value . PHP_EOL;
}
