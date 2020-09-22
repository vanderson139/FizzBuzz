<?php
namespace App\Vanderson\Parser\Divisible;

class DivisibleByThree extends AbstractDivisibleParser
{
    protected function getDivisor(): int
    {
        return 3;
    }

    protected function getParsed(int $value)
    {
        return "Fizz";
    }

}