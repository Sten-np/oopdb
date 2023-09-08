<?php

namespace Project9;

class Playstation extends Product
{
    private string $genre;
    private array $requirements = [];

    public function __construct(string $name, string $image, float $truePrice, int $tax, string $information, float $gain)
    {
        parent::__construct($name, $image, $truePrice, $tax, $information, $gain);
    }

    public function setGenre(string $genre) : void
    {
        $this->genre = $genre;
    }

    public function addRequirements(string $requirements)
    {
        $this->requirements[] = $requirements;
    }

    public function getInfo() : array
    {
        // TODO: Implement getInfo() method.
        return [$this->genre, $this->requirements];
    }

    public function setCategory()
    {
        // TODO: Implement setCategory() method.
        print "Nintendo";
    }
}
