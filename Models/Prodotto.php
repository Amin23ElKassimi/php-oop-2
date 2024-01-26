<?php

// Classe principale per il prodotto
class Prodotto {
    // Variables
    private $id;
    private $nome;
    private $prezzo;
    private $categoria;
    private $imageUrl;

    
    /**
     * Costruttore della classe Movie. Usato come guida per i Prossimi Programmatori o x te stesso a mettere mano sulle funzioni dopo molto tempo.
     * @param int $ID Product Barcode 
     * @param string $Name Product      
     * @param float $_price The current price of the product
     * @param string|null $_imageUrl product
     * @param Category $Genere di   
     * 
     */
    // Construct
    public function __construct(int $id,string $nome, float $prezzo,string $imageUrl , Category $categoria) {
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
        $this->imageUrl = $imageUrl;
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
    
    public function getimageUrl() {
        return $this->imageUrl;
    }

    public function getCategoria() {
        return $this->categoria;
    }
}


?>
