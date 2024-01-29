<?php
    // Import delle classi da usare
    require_once __DIR__ . '/Product.php';
/**
 * Classe specifica per i prodotti alimentari.
 */
class Cibo extends Product {
    public $tipo;

    /**
     * Costruttore della classe Cibo.
     *
     * @param int $ID Product Barcode 
     * @param string $Name Product      
     * @param float $_price The current price of the product
     * @param string|null $_imageUrl product
     * @param Category $Genere di 
     * @param string $Tipo di prodotto
     */
    public function __construct(int $id,string $nome, float $prezzo,Category $categoria, string $imageUrl, string $tipo) {
        // How to Call the Parent Constructor
        parent::__construct($id, $nome, $prezzo, $categoria, $imageUrl);
        $this->tipo = $tipo;
    }

    /**
     * Metodo per ottenere il tipo di cibo.
     *
     * @return string Tipo di cibo.
     */
    public function getTipo(): string {
        return $this->tipo;
    }
    public function getAdditionalInfo(){
        return 'Type: '. $this->tipo;
    }
}
?>