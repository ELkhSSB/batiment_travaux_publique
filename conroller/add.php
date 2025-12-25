<?php
    require_once("database.php") ;

    //recuperation de données
    
    if(isset($_POST["email"]) && !empty($_POST["email"])){

        extract($_POST);
        $pwd_hash=password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO user1 (email, nomComplet, telephone, pwd) VALUES ('$email', '$name', '$tel', '$pwd_hash')";
     
        $result=mysqli_query($bd,$sql);
      
        // Redirection après insertion
        if ($result) {
            header("Location: ../login.php");
       
        } else {
            header("Location: ../sign_up.php");  
        }

    }



?>