<?php
namespace App\Vanderson\Parser\Divisible;

class DivisibleByFifteen extends AbstractDivisibleParser
{
    protected function getDivisor(): int
    {
        return 3*5;
    }

    protected function getParsed(int $value)
    {
        return "Xablau";
    }

}