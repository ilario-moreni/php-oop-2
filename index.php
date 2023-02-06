<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include __DIR__.'./database.php';
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row row-cols-3 pt-5 flex-x flex-wrap justify-content-around">
            <?php foreach($arr_products as $product){ ?>
            <div class="col">
                <div class='card text-bg-success'>
                    <img src="<?php echo $product->img_url ?>" alt="">
                    <div class="card-header">
                        <?php
                    echo $product->name;

                    ?>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Prezzo: <?php echo $product->cost ?>&euro;</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">Categoria: <?php echo $product->animal ?></li>
                    </ul>

                    <?php
                    echo $product->animal;

                    ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>