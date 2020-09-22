<?php
namespace App\Vanderson;

use App\Vanderson\Parser\ParserInterface;

class Parser
{
    /**
     * @var ParserInterface
     */
    private $parser;
    /**
     * @var Data
     */
    private $data;

    public function __construct(ParserInterface $parser, Data $data)
    {
        $this->parser = $parser;
        $this->data = $data;
    }

    public function parse(): array
    {
        $return = [];
        while ($this->data->hasNext()) {
            $value = $this->data->getNextItem();

            array_push($return, $this->parser->parse($value));
        }

        return $return;
    }
}
