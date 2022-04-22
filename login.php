<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./css/login.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div class="header">
      <img class="header_logo" src="img/logoPizza.webp" />
      <div class="headertekst">
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="betalen.php">Betalen</a></li>
        <li><a href="bestellen.php">Bestellen</a></li>
        <li><a href="login.php">Login</a></li>
      </div>
    </div>
    <div class="header_space"></div>

    <?php
    include("includes/connect.php");
    ?>

    <div class="container">
      <img class="bg" src="Images/loginBG.jpg" alt="" />
      <div class="form">
        <form action="backend.php" method="post">
          <br />
          <p>username</p>
          <input
            class="usr"
            type="text"
            name="username"
            placeholder="username..."
          />
          <br />
          <p>password</p>
          <input
            class="psw"
            type="password"
            name="password"
            placeholder="Password..."
          />
          <br/>
            <a href="backend.php">
              <input class="sbt" type="submit" name="knop" value="Login" />
            </a>
          <button class="register">Register</button>
        </form>
      </div>
    </div>

    <script src="js/main.js"></script>

    <div class="footer">
      <p>all information about us is on the page "Contact"</p>
    </div>
  </body>
</html>
