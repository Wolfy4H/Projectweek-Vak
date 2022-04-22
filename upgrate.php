<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./css/styles.css" />
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
include("./includes/update.php")
?>

  <body>
  <div class="header">
        <img class="header_logo" src="img/logoPizza.webp" />
      <div class="headertekst">
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="betalen.php">Betalen</a></li>
        <li><a href="bestellen.php">Bestellen</a></li>
        <li><a href="login.php">login</a></li>
      </div>
    </div>
  <div class="header_space"></div>
    <!-- <div class="ruimte"> </div> -->
<div class="update_ruimte">

<form method="post" action="includes/update_data.php"  >
      <label for="naam">Name</label><br>
      <input type="text" id="fname" name="naam" value="<?php echo $i['naam'];?> "><br>
      <label for="beschrijving">Description</label><br>
      <input type="text" id="lname" name="beschrijving" value="<?php echo $i['beschrijving'];?> "><br>
      <label for="prijs">Price</label><br>
      <input type="text" id="price" name="prijs" value="<?php echo $i['prijs'];?> "><br>
      <label for="afbeelding">afbeeldingen</label><br>
      <input type="text" id="afbeelding" name="afbeelding" value="./img/" value="<?php echo $i['afbeelding'];?> "><br>
      <input
          type="text"
          hidden
          value="<?php echo $i['id'];?>"
          readonly
          name="id"
        />
      <label for="categoie">Select a category</label><br>
      <select name="categorie" >
          <option value="<?php echo $i['categorie'];?> "><?php echo $i['categorie'];?></option>
          <option value="Food">Food</option>
          <option value="Appetizers">Appetizers</option>
          <option value="Deserts">Deserts</option>
          <option value="Drinks">Drinks</option>
      </select><br><br>
      <input type="submit" value="Update Product" name="update">
  </form>
</div>
  

    <div class="footer">
      <p>all information about us is on the page "Contact"</p>
    </div>
  </body>
</html>
