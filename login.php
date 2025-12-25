
<?php

    require "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_in.css">
    
</head>
<body>


  <div class="cont">
    <center>
      <div class="forum">
        
        <form method="POST" action="conroller/verif_log.php">
            <h1>Login</h1>
            <span class="icon-user"><i class="fas fa-user"></i></span>

            <input type="text" name="emailE" placeholder="email" required>
            <span class="icon-lock">&#128274;</span>
            <input type="password" name="password" placeholder="Password" required>
            <input  class="btn" type="submit" name="connect" value="Se connecter"><br>
            <p class="link">vous n'avez pas de compte ?
                <a href="sign_up.php">click </a>ici<br>
            </p> 
    
  
        </form>
  
</div>
</center>
</div>
 
</body>
</html>

<?php

    require "footer.php";

?>