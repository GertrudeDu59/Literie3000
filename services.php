<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/63d06bf0f5.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include("templates/header.php"); ?>
    <div class="service">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="d-flex align-items-center justify-content-center flex-column my-5">
                        <a href="add_matelas.php"><i class="fa-sharp fa-solid fa-plus fa-2xl" style="color: #000000; vertical-align: middle;"></i></a>
                        <p class="lead my-3">Ajouter un matelas</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center justify-content-center flex-column my-5">
                        <a href="delete_matelas.php"><i class="fa-solid fa-trash fa-2xl" style="color: #000000; vertical-align: middle;"></i></a>
                        <p class="lead my-3">Supprimer un matelas</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center justify-content-center flex-column my-5">
                        <a href="#"><i class="fa-solid fa-pen-to-square fa-2xl" style="color: #000000; vertical-align: middle;"></i></a>
                        <p class="lead my-3">Modifier un matelas</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center justify-content-center flex-column my-5">
                        <a href="sleep.php"><i class="fa-solid fa-bed fa-2xl" style="color: #000000; vertical-align: middle;"></i></a>
                        <p class="lead my-3">Dormir sur un matelas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>