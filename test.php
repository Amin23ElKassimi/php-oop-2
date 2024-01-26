<?php

/**
 * Classe principale per il prodotto.
 */
class Prodotto {
    /** @var int Identificatore univoco del prodotto. */
    private $id;

    /** @var string Nome del prodotto. */
    private $nome;

    /** @var float Prezzo del prodotto. */
    private $prezzo;

    /** @var string Categoria del prodotto (Cani o Gatti). */
    private $categoria;

    /**
     * Costruttore della classe Prodotto.
     *
     * @param int    $id        Identificatore univoco del prodotto.
     * @param string $nome      Nome del prodotto.
     * @param float  $prezzo    Prezzo del prodotto.
     * @param string $categoria Categoria del prodotto.
     */
    public function __construct(int $id, string $nome, float $prezzo, string $categoria) {
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }

    // Altri metodi della classe Prodotto...
}






// Altri componenti della tua applicazione...
?>
