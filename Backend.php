<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./css/backend.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pizzaroxy :)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <?php
  include("includes/connect.php");
  ?>

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
    <div class="ruimte">
      <button class="buttonsC">
        <p>Create</p>
      </button>
      <button class="buttonsU">
        <p>Update</p>
      </button>
      <button class="buttonsD">
        <p>Delete</p>
      </button>
    </div>

    <script src="/main.js"></script>

    <div class="footer">
      <p>Welcome owner ^^. u look tasty, just like the pizza's. :)</p>
    </div>
  </body>
</html>
