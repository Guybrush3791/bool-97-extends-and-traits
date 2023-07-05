<?php 

trait Edible {

    private $edible;

    public function getEdible() {

        return $this -> edible;
    }
    public function setEdible($edible) {

        $this -> edible = $edible;
    }
}