<?php
    // Import delle classi da usare
    require_once __DIR__ . '/Product.php';
/**
 * Classe specifica per le cucce.
 */
class Cuccia extends Prodotto {
    /** @var string Dimensioni della cuccia. */
    private $dimensioni;

    /**
     * Costruttore della classe Cuccia.
     *
     * @param int    $id        Identificatore univoco del prodotto.
     * @param string $nome      Nome del prodotto.
     * @param float  $prezzo    Prezzo del prodotto.
     * @param string $categoria Categoria del prodotto.
     * @param string $dimensioni Dimensioni della cuccia.
     */
    public function __construct(int $id, string $nome, float $prezzo, string $categoria, string $dimensioni) {
        // How to Call the Parent Constructor
        parent::__construct($id, $nome, $prezzo, $categoria);
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