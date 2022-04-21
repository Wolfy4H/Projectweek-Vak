<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./css/bestellen.css" />
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
    if (!empty($_POST)){
    $search = $_POST['search'];
    $sql = "SELECT * FROM producten WHERE naam LIKE '%". $search. "%'";
    } else {
      $sql = "SELECT * FROM producten ORDER BY categorie DESC";
    }
    ?>

    <form action="bestellen.php" method="POST">
      <div class="search_bar">
        <input name="search" type="text" placeholder="Search.." /> 
      </div>
    </form>
      

    <div class="middenstuk1">
      <?php
        include_once("includes/connect.php");

        $stmt = $connect->prepare($sql); $stmt->execute(); $result =
        $stmt->fetchAll(); 

        foreach ($result as $product) {
      ?>

          <div class="container">
            <div class="bovenkanttekst">
              <p><?php echo $product['naam']; ?></p>
            </div>
            <div class="plek">
              <img
                class="pizzaplaatjes"
                src="<?php echo $product['afbeelding']; ?>"
                alt="PizzaSalami"
              />
            </div>
            <div class="ondergedeelte_in_plek"><a herf="index.php"><p>toevoegen aan bestelling</p></a></div>
          </div>

      <?php 
        }
      ?>

      </div>
    </div>

    <div class="footer">
      <p>all information about us is on the page "Contact"</p>
    </div>
  </body>
</html>
