<?php

// Classe principale per il prodotto
class Prodotto {
    // Variables
    private $id;
    private $nome;
    private $prezzo;
    private $categoria;

    // Construct
    public function __construct($id, $nome, $prezzo, $categoria) {
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }

    // Methods
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function getCategoria() {
        return $this->categoria;
    }
}


?>
