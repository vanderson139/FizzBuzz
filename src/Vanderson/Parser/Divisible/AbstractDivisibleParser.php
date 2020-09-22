<?php
namespace App\Vanderson\Parser\Divisible;

use App\Vanderson\Parser\AbstractParser;

abstract class AbstractDivisibleParser extends AbstractParser
{
    public function match(int $value): bool
    {
        return ($value % $this->getDivisor() === 0);
    }

    abstract protected function getDivisor(): int;
}
