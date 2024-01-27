<?php
    // Import delle classi da usare
    require_once __DIR__ . '/Product.php';
/**
 * Classe specifica per i prodotti giocattolo.
 */
class Giocattolo extends Prodotto {
    /** @var string Materiale del giocattolo. */
    private $materiale;

    /**
     * Costruttore della classe Giocattolo.
     *
     * @param int    $id        Identificatore univoco del prodotto.
     * @param string $nome      Nome del prodotto.
     * @param float  $prezzo    Prezzo del prodotto.
     * @param string $categoria Categoria del prodotto.
     * @param string $materiale Materiale del giocattolo.
     */
    public function __construct(int $id, string $nome, float $prezzo, string $categoria, string $materiale) {
        // How to Call the Parent Constructor 
        parent::__construct($id, $nome, $prezzo, $categoria);
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