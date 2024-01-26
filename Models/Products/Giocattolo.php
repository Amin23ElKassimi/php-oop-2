<?php


// Classe specifica per i prodotti giocattolo
class Giocattolo extends Prodotto {
    private $materiale;

    public function __construct($id, $nome, $prezzo, $categoria, $materiale) {
        parent::__construct($id, $nome, $prezzo, $categoria);
        $this->materiale = $materiale;
    }

    public function getMateriale() {
        return $this->materiale;
    }
}