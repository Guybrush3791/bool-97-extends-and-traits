<?php

class Product {

    private $name;
    private $weight;
    private $price;

    private Category $category;

    public function __construct($name, $weight, $price, Category $category) {

        $this -> setName($name);
        $this -> setWeight($weight);
        $this -> setPrice($price);     
        
        $this -> setCategory($category);
    }

    public function getName() {

        return $this -> name;
    }
    public function setName($name) {

        $this -> name = $name;
    }
    public function getWeight() {

        return $this -> weight;
    }
    public function setWeight($weight) {

        $this -> weight = $weight;
    }
    public function getPrice() {

        return $this -> price;
    }
    public function setPrice($price) {

        if ($price < 0) {

            throw new Exception("Price can't be negative");
        }
    
        $this -> price = $price;
    }

    public function getCategory() {

        return $this -> category;
    }
    public function setCategory($category) {

        $this -> category = $category;
    }
}

