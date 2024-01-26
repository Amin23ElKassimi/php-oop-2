<?php

// Classe specifica per i prodotti alimentari
class Cibo extends Prodotto {
    private $tipo; // secco, umido, etc.

    public function __construct($id, $nome, $prezzo, $categoria, $tipo) {
        parent::__construct($id, $nome, $prezzo, $categoria);
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }
}

?>