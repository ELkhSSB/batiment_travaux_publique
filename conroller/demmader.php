<?php
session_start();
    require_once "database.php";

     //recuperation de données
     if(isset($_POST["envoyer"])){
 
         extract($_POST);
         $email=$_SESSION['email'];
         $name=$_SESSION['nomComplet'];
         $sql = "INSERT INTO demande (email, nomComplet, nom_projet, description,besoins,budget) VALUES ('$email', '$name', '$nom_projet', '$description', '$besoins' , $budget)";
      
         $result=mysqli_query($bd,$sql);
       
         // Redirection après insertion
         if ($result) {
            
            echo "<script>alert('Votre demande n'a pas été enregistrée, veuillez réessayer ultérieurement.');</script>";
         } else {
            echo "<script>alert('Votre demande est en cours de traitement, nous vous répondrons dès que possible.');</script>"; 
         }

         //application de tp 1 php 
         if (isset($_FILES['anexes']) ) // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
         { 
                $file_name = $_FILES['anexes']['name'];
                $file_size = $_FILES['anexes']['size'];
                $file_size_mo = round($file_size / (1024 * 1024), 2); 
                $file_tmp = $_FILES['anexes']['tmp_name'];
                $file_type = $_FILES['anexes']['type'];
                
                // Vérifier le format du fichier
                $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                if ($file_ext != 'pdf') {
                    $error = 'Le fichier doit être au format PDF.';
                }
                
                // Vérifier la taille du fichier
                if ($file_size > 4 * 1024 * 1024) { // 4 Mo en octets
                    $error = 'Le fichier ne doit pas dépasser 4 Mo.';
                }
                
                if (empty($error)) {
                    $date = date('Y-m-d_H-i-s');
                    $new_file_name = $_SESSION['nomComplet'].'_' . $date . '.pdf';
                    $upload_path = 'C:\wamp64\www\mini_proget\demandeProjet\ ' . $new_file_name;
                    
                    if (move_uploaded_file($file_tmp, $upload_path)) {
                        echo "Le fichier <b><i>$file_name [$file_size_mo Mo]</i></b> a été téléchargé avec succès.";
                    } else {
                        echo 'Une erreur s\'est produite lors du téléchargement du fichier.';
                    }
                } else {
                   /*  echo "<script>alert('$error')</script>"; */
                }
            } else {
                echo 'Une erreur s\'est produite lors du téléchargement du fichier.';
            }



 
     }
     header("location:../demande.php");


?>