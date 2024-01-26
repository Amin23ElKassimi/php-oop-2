

<?php
    // Import delle classi da usare
    include_once __DIR__ . '/Models/Category.php';
    include_once __DIR__ . '/Models/Product.php';


    // Array Di prodotti
    $products = [ $inception, $redemption, $fastfurios, $wednesday,
                $inception, $redemption, $fastfurios, $wednesday
    ];

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
                <?php foreach ($movies as $movie) { ?>
                    <div class="col-3">
                        <div class="card text-center">
                            <!-- Copertina -->
                            <img src="<?php echo $movie->imageUrl; ?>" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <!-- Titolo -->
                                <h5 class="card-title">
                                    <?php echo $movie->title; ?>
                                </h5>
                                <!-- Genere -->
                                <h6 class="card-subtitle">
                                    <?php echo $movie->genre->name; ?>
                                </h6>
                                <!-- Durata -->
                                <p class="card-text">
                                    Durata <?php echo $movie->duration; ?> Minuti
                                </p>
                                <!-- Anno Realese -->
                                <p class="card-text">
                                    Realese: <?php echo $movie->releaseYear; ?>
                                </p>
                                <!-- Costo e Azione Acquista -->
                                <a href="#" class="btn btn-success">
                                    Acquista per soli <?php echo $movie->getPrice(); ?>&euro;
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </section>
        </main>
    </body>
</html>

