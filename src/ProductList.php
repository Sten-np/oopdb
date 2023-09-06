<?php

namespace Project9;

class ProductList
{
    private array $products = [];

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }
}
