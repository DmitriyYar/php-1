<?php

class Product
{
    private string $title;
    private ?float $price;
    private ?array $components;

    public function setProduct(string $_title, ?float $_price, ?array $components): void
    {
        $this->title = $_title;
        $this->price = $_price;
        $this->components[] = $components;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

class Cart
{
    private array $products = [];

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

//    public function fullCostCart(): float
//    {
//
//    }
}

$computer = new Product();
$computer->setProduct("Aсer", null,[["title" => "мышка", "price" => 5.30],["title" => "клавиатура", "price" => 2.30]]);

$phone1 = new Product();
$phone1->setProduct("Nokia", 63.90, []);

$phone2 = new Product();
$phone2->setProduct("Samsung", 95.20, []);


$cart = new Cart();
$cart->addProduct($computer);
$cart->addProduct($phone1);
$cart->addProduct($phone2);


var_dump($cart->getProducts());
