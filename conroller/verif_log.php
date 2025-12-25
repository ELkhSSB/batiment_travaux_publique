<?php
 session_start();
    require_once("database.php");

   
    //recuperation des données 
    if(isset($_POST["connect"]) && !empty($_POST["connect"])){
        extract($_POST);

        $sql= "SELECT * FROM user1 WHERE email='$emailE'";
        $result= mysqli_query($bd,$sql);
        if($data=mysqli_fetch_assoc($result)){
            extract($data);
            if(password_verify($password,$pwd)){
                $_SESSION['nomComplet']=$nomComplet;
                $_SESSION['email']=$email;
               header("location: ../demande.php");
            }else{
                header("location: ../login.php");
            }
        }
    }

?>