<?php

class Category{
    public $animal;
    public $description;

    /**
     * Constructs a new instance of type Category, given a name, a description and an optional image string url.
     *
     * @param string $_name Category's Animal
     * @param string $_description Category's description
     */
    public function __construct(string $_animal, string $_description){
        $this->animal = $_animal;
        $this->description = $_description;
    }
}
