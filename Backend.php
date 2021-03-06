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

    <div class="buttoncreateplek">
      <a href="create.php">
        <button class="buttonsC">
          <p>Create</p>
        </button>
      </a>
    </div>

    <div class="middenstuk1">
      <?php
        include_once("includes/connect.php");

        $sql = "SELECT * FROM producten ORDER BY categorie DESC";
        $stmt = $connect->prepare($sql); $stmt->execute(); $result =
      $stmt->fetchAll(); foreach ($result as $product) { ?>

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
        <div class="ondergedeelte_in_plek">
          <p>toevoegen aan bestelling</p>
        </div>
        <div class="editbuttonsplek">
          <a href="upgrate.php?id=<?php echo $product['id']; ?>">
            <button class="buttonsU" class="item_update_butn">Update</button>
          </a>
            <form action="delete.php" method="post">
              <input
                class="inviz"
                type="text"
                name="id"
                value="<?php echo $product['id']; ?>"
              />
              <button type="submit" name="delete" class="item_delete_butn">
                Delete
              </button>
            </form>
          </div>
        </div>

      <?php 
        }
      ?>

      </div>
    </div>

    <div class="product_bijwerken"></div>

    <script src="/main.js"></script>

    <div class="footer">
      <p>Welcome owner ^^. u look tasty, just like the pizza's. :)</p>
    </div>
  </body>
</html>
