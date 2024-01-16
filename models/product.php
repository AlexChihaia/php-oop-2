<?php
class Product
{
    public $id;
    public $name;
    public $price;
    public $image;
    public $category;
    public $type;

    public function __construct($id, $name, $price, $image, $category, $type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->type = $type;
    }
}

class Category
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Type
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}


$cani = new Category('Cani');

$gatti = new Category('Gatti');

$cibo = new Type('Cibo');


$croccantini = new Product('1', 'croccantini', 20, 'immagine', $cani, $cibo);


var_dump($cani, $gatti);
var_dump($croccantini);
