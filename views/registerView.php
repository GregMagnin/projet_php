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
        <p>Inscrivez vous</p>
      </div>
        <hr />
      <div class="loginForm">
        <form action="../controllers/createUserController.php" method="post">
          <input type="text" id="username" name="name" required="required" placeholder="Nom complet"/>
          <br />

          <input type="password" id="password" name="psw" required="required" placeholder="Mot de passe" />
          <br />
          <label for="organisations">Choisissez votre organisation</label>
          <select name="organisations" id="organisations" placeholder="Organisations">
            <option value="1">Online Forma Pro</option>
            <option value="2">Web Force 3</option>
            <option value="3">La meilleur formation</option>
            <option value="4">W3C</option>
          </select>
          <br>
          <input type="submit" class="submit">
        </form>
      </div>
    </div>
  </div>
    
</body>
</html>

