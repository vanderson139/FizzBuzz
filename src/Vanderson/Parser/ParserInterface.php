<?php
namespace App\Vanderson\Parser;

interface ParserInterface
{
    public function next(): ?ParserInterface;

    public function match(int $value): bool;

    public function parse(int $value);
}
