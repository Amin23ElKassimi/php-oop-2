<?php
    // Import delle classi da usare
    require_once __DIR__ . '/Product.php';
/**
 * Classe specifica per i prodotti giocattolo.
 */
class Giocattolo extends Product {
    /** @var string Materiale del giocattolo. */
    private $materiale;

    /**
     * Costruttore della classe Giocattolo.
     *
     * @param int $ID Product Barcode 
     * @param string $Name Product      
     * @param float $_price The current price of the product
     * @param string|null $_imageUrl product
     * @param Category $Genere di 
     * @param string $materiale Materiale del giocattolo.
     */
    public function __construct(int $id,string $nome, float $prezzo,string $imageUrl, Category $categoria, string $materiale) {
        // How to Call the Parent Constructor 
        parent::__construct($id, $nome, $prezzo,$imageUrl, $categoria);
        $this->materiale = $materiale;
    }

    /**
     * Metodo per ottenere il materiale del giocattolo.
     *
     * @return string Materiale del giocattolo.
     */
    public function getMateriale(): string {
        return $this->materiale;
    }
}
?>