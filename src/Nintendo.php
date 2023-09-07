<?php

namespace Project9;

class Nintendo extends Product
{

    private array $requirements = [];

    public function __construct(string $name, string $genre, string $image, float $truePrice, int $tax, string $information, float $gain)
    {
        parent::__construct($name, $genre, $image, $truePrice, $tax, $information, $gain);
    }

    public function addRequirements(string $requirements)
    {
        $this->requirements[] = $requirements;
    }

    public function getInfo() : array
    {
        // TODO: Implement getInfo() method.
        return [$this->requirements];
    }

    public function setCategory()
    {
        // TODO: Implement setCategory() method.
        print "Nintendo";
    }
}