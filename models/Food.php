<?php
class Food extends Product {

    use Edible;

    private $expireDate;

    public function __construct($name, $weight, $price, Category $category, $expireDate) {

        parent :: __construct($name, $weight, $price, $category);

        $this -> setExpireDate($expireDate);

        $this -> setEdible(true);
    }

    public function getExpireDate() {

        return $this -> expireDate;
    }
    public function setExpireDate($expireDate) {

        $this -> expireDate = $expireDate;
    }
}