<?php
require_once __DIR__ . '/Product.php';

class Game extends Product
{
    private $material;
    private $size;

    //getter
    public function get_material()
    {
        return $this->material;
    }
    public function get_size()
    {
        return $this->size;
    }


    //setter
    public function set_material($_material)
    {
        $this->material = $_material;
    }
    public function set_size($_size)
    {
        $this->size = $_size;
    }
}
