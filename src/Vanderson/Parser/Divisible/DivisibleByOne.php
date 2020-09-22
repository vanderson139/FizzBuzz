<?php
namespace App\Vanderson\Parser\Divisible;

class DivisibleByOne extends AbstractDivisibleParser
{
    protected function getDivisor(): int
    {
        return 1;
    }

    protected function getParsed(int $value)
    {
        return $value;
    }

}