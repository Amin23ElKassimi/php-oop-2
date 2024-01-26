<?php


// Classe specifica per le cucce
class Cuccia extends Prodotto {
    private $dimensioni;

    public function __construct($id, $nome, $prezzo, $categoria, $dimensioni) {
        parent::__construct($id, $nome, $prezzo, $categoria);
        $this->dimensioni = $dimensioni;
    }

    public function getDimensioni() {
        return $this->dimensioni;
    }
}





?>