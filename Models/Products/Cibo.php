<?php

/**
 * Classe specifica per i prodotti alimentari.
 */
class Cibo extends Prodotto {
    /** @var string Tipo di cibo (secco, umido, etc.). */
    private $tipo;

    /**
     * Costruttore della classe Cibo.
     *
     * @param int    $id        Identificatore univoco del prodotto.
     * @param string $nome      Nome del prodotto.
     * @param float  $prezzo    Prezzo del prodotto.
     * @param string $categoria Categoria del prodotto.
     * @param string $tipo      Tipo di cibo.
     */
    public function __construct(int $id, string $nome, float $prezzo, string $categoria, string $tipo) {
        parent::__construct($id, $nome, $prezzo, $categoria);
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

    // Altri metodi della classe Cibo...
}


?>