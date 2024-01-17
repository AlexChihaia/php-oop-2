<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    private $ingredients;
    private $expiration_date;
    private $is_gluten_free;
    private $is_vegan;

    //getter
    public function get_ingredients()
    {
        return $this->ingredients;
    }


    //setter
    public function set_ingredients($_ingredients)
    {
        $this->ingredients = $_ingredients;
    }
}
