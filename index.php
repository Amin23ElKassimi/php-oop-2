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


    $cereals = new Product('31234','Prodotto','63.81',$cani,'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Filfattoalimentare.it%2Fwp-content%2Fuploads%2F2020%2F09%2Fcane-croccantini-AdobeStock_302179902-1536x1024.jpeg&f=1&nofb=1&ipt=b2457d03a75aa0178f004ad1a1730dc881965bfab57e4d71822e655ed922af92&ipo=images');
    $croccants = new Cibo('34','CroCats','21.72',$gatti,'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.Wsi-SkLFC4BSH4LRuK_r8gHaEy%26pid%3DApi&f=1&ipt=6ca916acf61678e2ad56d289f648fd73a97bbe6b964cf2d84a1aae9fc8689dd5&ipo=images','Vegano');
    $cuccia = new Cuccie('231','HomeDog','12.21',$cani,'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fstatic.giardinaggio.net%2Farredamento-giardino%2Faccessori-da-esterno%2Fcome-costruire-una-cuccia-per-cani_O1.jpg&f=1&nofb=1&ipt=467af5756adb4614bae61ad149c023fb759615326132a4ab0b84edc7be16fbe9&ipo=images','medium');
    $toy = new Giocattolo('111','Toycats','123.55',$gatti,'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.thesprucepets.com%2Fthmb%2FzHuZO9tTPlF-QLg4cBGAq9vI8OE%3D%2F4895x3222%2Ffilters%3Afill(auto%2C1)%2Fkitten-playing-with-feather-toy-146242247-59e4b685054ad90011888c3c.jpg&f=1&nofb=1&ipt=843afb1b8ea48513c46dda5505e298445ab99687ea5d9bc3839a7c6afab8b8e0&ipo=images','Acciaio Armato');
    


    // Array Di prodotti
    $products = [ $cereals,$croccants,$cuccia, $toy];
    // var_dump($products);

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
                        Dammi la Zampa
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
                                <h6 class="card-title">
                                    <?php echo $product->getCategoria()->description; ?>
                                </h6>
                                <?php if ($product->getAdditionalInfo()){ ?>
                                    <p>
                                        <span class="text-danger">Additional info:</span>
                                        <br>

                                        <?php echo $product->getAdditionalInfo(); ?>
                                    </p>
                                <?php } ?>
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

