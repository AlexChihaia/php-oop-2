<?php

require_once './models/Category.php';

class Product
{
    private $id;
    private $name;
    private $description;
    private $category;
    private $price;
    private $image;
    private $is_available;

    public function __construct($_id, $_name, Category $_category)
    {
        $this->set_id($_id);
        $this->set_name($_name);
        $this->set_category($_category);
    }

    // getters
    public function get_id()
    {
        return $this->id;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_description()
    {
        return $this->description;
    }
    public function get_category()
    {
        return $this->category;
    }
    public function get_price()
    {
        return $this->price;
    }
    public function get_image()
    {
        return $this->image;
    }
    public function get_is_available()
    {
        return $this->is_available;
    }

    // setters
    public function set_id($_id)
    {
        $this->id = $_id;
    }
    public function set_name($_name)
    {
        $this->name = $_name;
    }
    public function set_description($_description)
    {
        $this->description = $_description;
    }
    public function set_category($_category)
    {
        $this->category = $_category;
    }
    public function set_price($_price)
    {
        $this->price = $_price;
    }
    public function set_image($_image)
    {
        $this->image = $_image;
    }
    public function set_is_available($_is_available)
    {
        $this->is_available = $_is_available;
    }
}
