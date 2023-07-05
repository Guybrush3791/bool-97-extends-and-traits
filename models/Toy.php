<?php

class Toy extends Product {

    use Edible;

    private $color;
    private $age;

    public function __construct($name, $weight, $price, Category $category, $color, $age, $edible) {
        
        parent :: __construct($name, $weight, $price, $category);

        $this -> setColor($color);
        $this -> setAge($age);

        $this -> setEdible($edible);
    }

    public function getColor() {

        return $this -> color;
    }
    public function setColor($color) {

        $this -> color = $color;
    }
    public function getAge() {

        return $this -> age;
    }
    public function setAge($age) {

        $this -> age = $age;
    }
}