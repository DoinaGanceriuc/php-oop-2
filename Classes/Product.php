<?php

class Product
{
    public $name;
    public $description;
    public $price;
    public $type;
    public $color;
    public $image_product;
    public $avaiable;

    public function __construct(string $name, string $description, float $price, string $type, string $color, string $image_product, bool $avaiable = true)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->type = $type;
        $this->color = $color;
        $this->image_product = $image_product;
        $this->avaiable = $avaiable;

    }

    public function getName()
    {
        return $this->name;
    }

}
