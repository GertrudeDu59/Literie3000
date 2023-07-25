<?php
// Connexion à la base literie3000
$dsn = "mysql:host=localhost;dbname=literie3000";
$db = new PDO($dsn, "root", "");

// Suppression d'un matelas s'il y a une requête DELETE en cours
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['matelas_id']) && is_numeric($_POST['matelas_id'])) {
    $matelas_id = $_POST['matelas_id'];

    // Requête de suppression du matelas
    $query = $db->prepare("DELETE FROM matelas WHERE id = :matelas_id");
    $query->bindParam(":matelas_id", $matelas_id);

    if ($query->execute()) {
        // Rediriger vers la page d'affichage de la liste après la suppression réussie
        header("Location: delete_matelas.php");
        exit();
    } else {
        echo "Une erreur s'est produite lors de la suppression du matelas : " . $query->errorInfo()[2];
    }
}

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
    <title>Supprimer Matelas</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/63d06bf0f5.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("templates/header.php"); ?>
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
                <!-- Formulaire pour la suppression du matelas -->
                <form action="" method="post">
                    <input type="hidden" name="matelas_id" value="<?= $matela['id'] ?>">
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
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
