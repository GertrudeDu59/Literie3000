<?php
    // Connexion à la base literie3000
    $dsn = "mysql:host=localhost;dbname=literie3000";
    $db = new PDO($dsn, "root", "");

    // Récupérer tous les matelas de la table matelas
    $query = $db->query("SELECT * FROM matelas");

    // truc de tableau associatif
    $matelas = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>literie3000</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/63d06bf0f5.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("templates/header.php"); ?>
    <!-- HeroBanner -->
    <section class="heroBanner">
        <h1 class="text-white m-5">Transformer la chambre de vos rêve en realité</h1>
    </section>
    
<div class="container">
    <div class="row">
    <?php
    foreach ($matelas as $matela) {
    ?>
        <div class="col-md-6 col-xl-6">
        <h2 class="display-5"><?= $matela["marque"] ?></h2>
        <div class="container d-flex justify-content-between">
            <p class="lead"><?= $matela["dimension"] ?></p>
            <p class="display-6"><?= $matela["prix"] ?>€</p>
        </div>
        <figure class="figure">
        <img class="figure-img img-fluid rounded" src="<?= $matela["images"] ?>" alt="">
        </figure>
        </div>
        <?php
    }
    ?>
    </div>
</div>
</body> 
</html>
            