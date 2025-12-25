<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/test1.css">
    <title>Accueil - Entreprise BTP</title>
</head>
<body>
<?php

    require "header.php";

?>
    
    <main>
        <section class="hero">
            <div class="hero-text">
                <h1>Bienvenue chez Entreprise BTP</h1>
                <p>Nous construisons l'avenir avec des solutions innovantes et durables.</p>
                <a href="cPropos.php" class="btn-primary">En savoir plus</a>
            </div>
        </section>
        
        <section class="services">
            <h2>Nos Services</h2>
            <div class="service-container">
                <div class="service-item">
                    <img src="images/1.jpeg" alt="Service 1">
                    <h3>Construction</h3>
                    <p>Nous réalisons des projets de construction résidentielle et commerciale avec une qualité exceptionnelle.</p>
                </div>
                <div class="service-item">
                    <img src="images/2.jpeg" alt="Service 2">
                    <h3>Rénovation</h3>
                    <p>Nous rénovons et modernisons vos espaces pour répondre à vos besoins et préférences.</p>
                </div>
                <div class="service-item">
                    <img src="images/3.jpeg" alt="Service 3">
                    <h3>Travaux Publics</h3>
                    <p>Nous menons à bien des projets d'infrastructure et de travaux publics avec expertise et rigueur.</p>
                </div>
            </div>
            <a href="service.php" class="btn-primary">En savoir plus</a>
        </section>
        
        <section class="projects">
            <h2>Projets Récents</h2>
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
            <a href="Projets.php" class="btn-primary">En savoir plus</a>
        </section>
        
        <section class="testimonials">
            <h2>Témoignages</h2>
            <div class="testimonial-container">
                <div class="testimonial-item">
                    <p>"Entreprise BTP a transformé notre maison avec une qualité de travail exceptionnelle et une grande attention aux détails."</p>
                    <h4>- Jean Martin</h4>
                </div>
                <div class="testimonial-item">
                    <p>"Leur équipe a géré notre projet commercial avec professionnalisme et efficacité. Nous sommes extrêmement satisfaits."</p>
                    <h4>- Marie Dubois</h4>
                </div>
            </div>
            <a href="temoi.php" class="btn-primary">En savoir plus</a>
        </section>
        
        <section class="cta">
            <h2>Prêt à réaliser votre projet ?</h2>
            <a href="demande.php" class="btn-secondary">Contactez-nous</a>
        </section>
    </main>
    
    <?php

    require "footer.php";

    ?>
</body>
</html>
