<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets</title>
    <link rel="stylesheet" href="css/csProjets.css">
</head>
<body>
    <?php 
        require "header.php";
    ?>

    <div class="project-container">
        <div class="project-item">
            <img src="images/res.jpeg" alt="Projet 1">
            <h3>Projet Résidentiel</h3>
            <p>Un magnifique complexe résidentiel alliant confort et modernité.</p>
        </div>
        <div class="project-item">
            <img src="images/centre_com2.jpg" alt="Projet 2">
            <h3>Centre Commercial</h3>
            <p>Un centre commercial innovant au cœur de la ville.</p>
        </div>
        <div class="project-item">
            <img src="images/route.jpeg" alt="Projet 3">
            <h3>Infrastructure Routière</h3>
            <p>Un projet de réhabilitation de routes pour une meilleure mobilité.</p>
        </div>
        
    </div>
        
 <?php 
        require "footer.php";
    ?>
</body>
</html>