
<?php

    require "header.php";

?>

<!DOCTYPE html>
<html>
<head>
  <title>Inscription</title>
  <style>
    body {
      font-family: sans-serif;
      background: linear-gradient(to top,rgba(0,0,0,0.3)50%,rgba(0,0,0,0.3)50%),url(images/BC.jpg);
      background-size: cover;
      background-repeat: no-repeat;
    }

    .container {
      width: 300px;
      margin: 80px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="file"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background: linear-gradient(to bottom right, #fcab3a, #f76c6c);
      color: white;
      padding: 12px 20px;
      margin: 10px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background: linear-gradient(to bottom right, #f76c6c, #fcab3a);
    }

    .signup-link {
      text-align: center;
      margin-top: 20px;
      color: #888;
    }

    .signup-link a {
      color: #888;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Inscription</h2>
    <form action="conroller/add.php" method="post">
      <input type="text" placeholder="Nom d'utilisateur" name="name" required>
      <input type="email" placeholder="Email" name="email"required>
      <input type="tel" name="tel" placeholder="Telephone" required>
      <input type="password" placeholder="Mot de passe" name="password"  required>
      <input type="file" value="votre image" name="image">
      <input type="submit" value="S'inscrire" name="envoyer">
    </form>
    <div class="signup-link">
      <p>Vous avez déjà un compte ? <a href="login.php">Connectez-vous</a></p>
    </div>
  </div>
</body>
</html>

<?php

    require "footer.php";

?>
