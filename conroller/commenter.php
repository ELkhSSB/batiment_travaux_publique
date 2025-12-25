<?php
     require_once("database.php") ;
     //recuperation des données

     if(isset($_GET["envoyer"]) ){
        extract($_GET);
        $commet=htmlspecialchars($com);
        $sql = "INSERT INTO temoi (email, nomComplet, coment) VALUES ('$email', '$name', '$commet')";
        $result=mysqli_query($bd,$sql);
      
     }
    

     header("location: ../temoi.php");

?>