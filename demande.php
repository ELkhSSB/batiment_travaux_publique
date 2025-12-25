<?php
        require "header.php";
        if(!isset($_SESSION['nomComplet'])){
            header("location: login.php");
            exit(0);
        }
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Démarrer un Projet</title>
    <link rel="stylesheet" href="css/demande.css">
</head>
<body>
    <main>
        <section class="project-form">
            <h1>Démarrer un Projet</h1>
            <form action="conroller/demmader.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom-projet">Nom du Projet :</label>
                    <input type="text" id="nom-projet" name="nom_projet" required>
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea id="description" name="description" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="besoins">Besoins Spécifiques :</label>
                    <textarea id="besoins" name="besoins" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="budget">Budget :</label>
                    <input type="number" id="budget" name="budget">
                </div>
                <div class="form-group">
                    <label for="anexex">Anexes :</label>
                    <input type="file" id="anexes" name="anexes">
                </div>
                <button type="submit" name="envoyer">Envoyer</button>
            </form>
        </section>
    </main>
    <?php
        require "footer.php";
    ?>
</body>
</html>
