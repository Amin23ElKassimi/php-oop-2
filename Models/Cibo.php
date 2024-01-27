<?php
    // Import delle classi da usare
    require_once __DIR__ . '/Product.php';
/**
 * Classe specifica per i prodotti alimentari.
 */
class Cibo extends Product {
    /** @var string Tipo di cibo (secco, umido, etc.). */
    private $tipo;

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
    public function __construct(int $id,string $nome, float $prezzo,string $imageUrl, Category $categoria, string $tipo) {
        // How to Call the Parent Constructor
        parent::__construct($id, $nome, $prezzo,$imageUrl, $categoria);
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
}
?>