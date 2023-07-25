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
<nav class="sticky-top py-1 bg-dark">
    <div class="container d-flex justify-content-between">
        <a class="py-2" href="#">
          <img src="images/logo.png" class="logo" alt="">
        </a>
        <div class="box py-2">
            <a class="py-2 d-none d-md-inline-block" href="#"><img src="images/cart.png" alt="" width="40%"></a>
            <a class="py-2 d-none d-md-inline-block" href="#"><img src="images/user.png" alt="" width="50%"></i></a>
        </div>
    </div>
</nav>



  



    <div class="recipes">
    <?php
    foreach ($matelas as $matela) {
    ?>
        <div class="recipe">
            <img src="<?= $matela["images"] ?>" alt="">
        </div>
    <?php
    }
    ?>


</body> 
</html>
            