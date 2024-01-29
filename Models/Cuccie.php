<?php
    // Import delle classi da usare
    require_once __DIR__ . '/Product.php';
/**
 * Classe specifica per le cucce.
 */
class Cuccie extends Product {
    /** @var string Dimensioni della cuccia. */
    public $dimensioni;

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
    public function __construct(int $id,string $nome, float $prezzo,Category $categoria, string $imageUrl, string $dimensioni) {
        // How to Call the Parent Constructor
        parent::__construct($id, $nome, $prezzo, $categoria, $imageUrl);
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

    public function getAdditionalInfo(){
        return 'Dimensioni: '. $this->dimensioni;
    }
}
?>