<!-- Stampiamo delle card contenenti i dettagli dei prodotti,
come immagine, 
titolo, 
prezzo, 
icona della categoria
ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->



<?php
    // Import delle classi da usare
    include_once __DIR__ . '/Models/Category.php';
    include_once __DIR__ . '/Models/Product.php';
    include_once __DIR__ . '/Models/Cibo.php';
    include_once __DIR__ . '/Models/Cuccie.php';
    include_once __DIR__ . '/Models/Giocattoli.php';
    
    //Argomentare le nueve istanze di Categorie 
    $cani = new Category('cani', 'Appartenente alla razza canina');
    $gatti = new Category('gatti', 'Appartenente alla razza felini');


    $cereals = new Product('34','nome','23.21',$cani,'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.96IGOaKpG3kZZsXfn3EWGwHaEK%26pid%3DApi&f=1&ipt=f3f1889a00699f715716ffe52d0c265f7422fbbf189e7fe351305b50b3947734&ipo=images');
    $croccants = new Cuccie('34','nome','23.21',$gatti,'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.Wsi-SkLFC4BSH4LRuK_r8gHaEy%26pid%3DApi&f=1&ipt=6ca916acf61678e2ad56d289f648fd73a97bbe6b964cf2d84a1aae9fc8689dd5&ipo=images','medium');

    // Array Di prodotti
    $products = [ $cereals,$croccants];

?>

<!-- DOM -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Modalita Vieoport Responsive -->
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Animals E-Commerce</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <!-- HEader -->
        <header >
            <div class="row text-center p-3">
                <div class="col-12">
                    <h1>
                        Netflix
                    </h1>
                </div>
            </div>
        </header>
        <!-- Libreria -->
        <main >
            <section class="row">
                <!-- Ciclo For che scrolla l'array usata come libreria film -->
                <?php foreach ($products as $product) { ?>
                    <div class="col-3">
                        <div class="card text-center">
                            <!-- Copertina -->
                            <img src="<?php echo $product->getimageUrl(); ?>" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <!-- Titolo -->
                                <h5 class="card-title">
                                    <?php echo $product->getNome(); ?>
                                </h5>
                                <!-- Genere -->
                                <h5 class="card-title">
                                    <?php echo $product->getCategoria()->animal; ?>
                                </h5>
                                <!-- Costo e Azione Acquista -->
                                <a href="#" class="btn btn-success">
                                    Acquista per soli <?php echo $product->getPrezzo(); ?>&euro;
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </section>
        </main>
    </body>
</html>

