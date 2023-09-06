<?php

namespace Project9;

class XBox extends Product
{

    public function __construct(string $name, string $genre, string $image, float $truePrice, int $tax, string $information, float $gain)
    {
        parent::__construct($name, $genre, $image, $truePrice, $tax, $information, $gain);
    }

    public function getInfo()
    {
        // TODO: Implement getInfo() method.
    }

    public function setCategory()
    {
        // TODO: Implement setCategory() method.
        print "XBox";
    }
}
