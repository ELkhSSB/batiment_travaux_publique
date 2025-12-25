<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleHeader.css">
    <title>Document</title>
</head>
<body>
<nav>
    <div class="logo">
        <img src="images/logo1.jpg" width="50px" alt="Logo de l'application">
        </div>
                <ul>
                    <li><a href="accueil.php">Accueil</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="Projets.php">Projets</a></li>
                    <li><a href="temoi.php">Témoignages</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="team.php">Équipes</a></li>
                    <?php
                        if (isset($_SESSION["nomComplet"])) {
                            echo "<li><a href='conroller/logout.php'>Déconnexion</a></li>";
                        }else    echo "<li><a href='login.php'>Connexion</a></li>";
                    ?>
                </ul>
            </nav>
</body>
</html>