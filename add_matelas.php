<?php
if (!empty($_POST)) {
    // Le formulaire est envoyé !
    // Utilisation de la fonction strip_tags pour supprimer d'éventuelles balises HTML qui ce seraient glissées dans le champ input et palier à la faille XSS
    // Utilisation de la fonction trim pour supprimer d'éventuels espaces en début et fin de chaine
    $marque = trim(strip_tags($_POST["marque"]));
    $dimension = trim(strip_tags($_POST["dimension"]));
    $prix = trim(strip_tags($_POST["prix"]));
    $images = trim(strip_tags($_POST["images"])); // Remarque : Ceci devrait être un chemin vers l'image, pas une URL.

    $errors = [];

    // Valider que le champ marque est bien renseigné
    if (empty($marque)) {
        $errors["marque"] = "La marque du matelas est obligatoire";
    }

    // Valider que le champ dimension est bien renseigné
    if (empty($dimension)) {
        $errors["dimension"] = "La dimension du matelas est obligatoire";
    }

    // Valider que le champ prix est bien renseigné et est un nombre valide
    if (empty($prix) || !is_numeric($prix)) {
        $errors["prix"] = "Le prix du matelas doit être un nombre valide";
    }

    // Requête d'insertion en BDD du matelas s'il n'y a aucune erreur
    if (empty($errors)) {
        // Connexion à la base de données
        $dsn = "mysql:host=localhost;dbname=literie3000";
        $db = new PDO($dsn, "root", "");

        $query = $db->prepare("INSERT INTO matelas (marque, dimension, prix, images) VALUES (:marque, :dimension, :prix, :images)");
        $query->bindParam(":marque", $marque);
        $query->bindParam(":dimension", $dimension);
        $query->bindParam(":prix", $prix);
        $query->bindParam(":images", $images);

        if ($query->execute()) {
            // Le matelas a été ajouté avec succès
            echo "Le matelas a été ajouté avec succès.";
        } else {
            // Une erreur s'est produite lors de l'ajout du matelas
            echo "Une erreur s'est produite lors de l'ajout du matelas : " . $query->errorInfo()[2];
        }
    }
}
?>

<h1>Ajouter un nouveau matelas</h1>
<!-- Lorsque l'attribut action est vide les données du formulaire sont envoyées à la même page -->
<form action="" method="post">
    <div>
        <label for="inputMarque">Marque :</label>
        <input type="text" id="inputMarque" name="marque" value="<?= isset($marque) ? $marque : "" ?>">
        <?php if (isset($errors["marque"])) { ?>
            <span class="text-danger"><?= $errors["marque"] ?></span>
        <?php } ?>
    </div>
    <div>
        <label for="inputDimension">Dimension :</label>
        <input type="text" id="inputDimension" name="dimension" value="<?= isset($dimension) ? $dimension : "" ?>">
        <?php if (isset($errors["dimension"])) { ?>
            <span class="text-danger"><?= $errors["dimension"] ?></span>
        <?php } ?>
    </div>
    <div>
        <label for="inputPrix">Prix :</label>
        <input type="number" step="0.01" id="inputPrix" name="prix" value="<?= isset($prix) ? $prix : "" ?>">
        <?php if (isset($errors["prix"])) { ?>
            <span class="text-danger"><?= $errors["prix"] ?></span>
        <?php } ?>
    </div>
    <div>
        <label for="inputImages">Images :</label>
        <input type="text" id="inputImages" name="images" value="<?= isset($images) ? $images : "" ?>">
        <?php if (isset($errors["images"])) { ?>
            <span class="text-danger"><?= $errors["images"] ?></span>
        <?php } ?>
    </div>
    <button type="submit">Ajouter</button>
</form>
