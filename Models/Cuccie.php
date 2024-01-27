<?php
    // Import delle classi da usare
    require_once __DIR__ . '/Product.php';
/**
 * Classe specifica per le cucce.
 */
class Cuccia extends Product {
    /** @var string Dimensioni della cuccia. */
    private $dimensioni;

    /**
     * Costruttore della classe Cuccia.
     *
     * @param int $ID Product Barcode 
     * @param string $Name Product      
     * @param float $_price The current price of the product
     * @param string|null $_imageUrl product
     * @param Category $Genere di 
     * @param string $dimensioni Dimensioni della cuccia.
     */
    public function __construct(int $id,string $nome, float $prezzo,string $imageUrl, Category $categoria, string $dimensioni) {
        // How to Call the Parent Constructor
        parent::__construct($id, $nome, $prezzo,$imageUrl, $categoria);
        $this->dimensioni = $dimensioni;
    }

    /**
     * Metodo per ottenere le dimensioni della cuccia.
     *
     * @return string Dimensioni della cuccia.
     */
    public function getDimensioni(): string {
        return $this->dimensioni;
    }
}
?>