
<?php
    require_once "conroller/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Témoignages</title>
    
    <link rel="stylesheet" href="css/temoi1.css">
</head>
<body>
<?php

require "header.php";

?>
    <div class="background-image"></div>
    
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
                
                <div class="testimonial-item">
                    <p>"L'équipe d'Entreprise BTP a réalisé un travail remarquable sur la rénovation de notre bureau. Le résultat final a dépassé nos attentes, nous les recommandons vivement."</p>
                    <h4>- Pierre Lefevre</h4>
                </div>
                <div class="testimonial-item">
                    <p>"Nous avons fait appel à Entreprise BTP pour la construction de notre nouvelle maison et nous sommes très impressionnés par leur professionnalisme et leur expertise. Nous sommes ravis du résultat final!"</p>
                    <h4>- Sophie Tremblay</h4> 
                </div>
            
                <?php
                    $sql="SELECT * FROM temoi";
                    $result=mysqli_query($bd,$sql);
                    while($data=mysqli_fetch_assoc($result)){
                        extract($data);
                        echo "<div class=\"testimonial-item\">
                            <p>\"".$coment.".\"</p>
                            <h4>-".$nomComplet." </h4>
                            </div>";



                    }

                ?>
            </div>
        
    </div><br>


    <section class="com">
        <div class="container">
            <h2>Votre commentaire</h2>
            <form action="conroller/commenter.php" >
                <input type="text" placeholder="Nom" name="name" required>
                <input type="email" placeholder="Email" name="email" required><br>
                <textarea id="comment" placeholder="votre commentaire" name="com" required></textarea> <br>
                <button type="submit" class="btn" name="envoyer">S'envoyer</button>
            </form>
        </div>
    </section>
    <?php

require "footer.php";

?>
</body>
</html>
