<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="containerLogin">
    <div class="loginBox">
      <div class="loginTitle">
        <p>Connectez vous</p>
      </div>
        <hr />
      <div class="loginForm">
        <form action="../controllers/loginController.php" method="post">
          <input type="text" id="username" name="name" required="required" placeholder="Nom complet"/>
          <br />

          <input type="password" id="password" name="psw" required="required" placeholder="Mot de passe" />
          <br />
          <input type="submit" class="submit">
        </form>
      </div>
    </div>
  </div>
    
</body>
</html>

