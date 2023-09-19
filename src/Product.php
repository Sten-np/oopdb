<?php

namespace Project9;

abstract class Product
{
    private string $name;
    private string $image;
    private float $price;
    private string $information;
    protected string $category;

    public function __construct(string $name, string $image, float $price, string $information)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->information = $information;
    }

    public function getName() : string
    {
     return $this->name;
    }

    public function getCategory()
    {
     return $this->setCategory();
    }

    public function getPrice(): float
    {
        return $this->price;
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