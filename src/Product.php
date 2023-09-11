<?php

namespace Project9;

abstract class Product
{
    private string $name;
    private string $image;
    private float $truePrice;
    private int $tax;
    private string $information;
    private float $gain;
    protected string $category;

    public function __construct(string $name, string $image, float $truePrice, int $tax, string $information, float $gain)
    {
        $this->name = $name;
        $this->image = $image;
        $this->truePrice = $truePrice;
        $this->tax = $tax;
        $this->information = $information;
        $this->gain = $gain;
    }

    public function getName() : string
    {
     return $this->name;
    }

    public function getCategory()
    {
     return $this->setCategory();
    }

    public function getCalculatePrice()
    {
      return $this->gain = $this->truePrice / 100 * $this->tax;
    }

    public function printInfo(): string
    {
        $totalproduct = "";
        foreach ($this->getInfo() as $item)
        {
            if (is_array($item))
            {
                foreach ($item as $subitem)
                {
                    $totalproduct .= "<ul style=\"list-style-type: circle\"><li>".$subitem ."</li></ul>";
                }
            }
            else
            {
                $totalproduct .= "<li>$item</li>";
            }

        }
        return $totalproduct;
    }

    abstract public function getInfo();

    abstract public function setCategory();

}