<?php
namespace App\Vanderson\Parser\Divisible;

class DivisibleByFive extends AbstractDivisibleParser
{
    protected function getDivisor(): int
    {
        return 5;
    }

    protected function getParsed(int $value)
    {
        return "Buzz";
    }

}