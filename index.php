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
  include("includes/connect.php");
?>

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

      <div class="aandeslag">
        <div class="aandeslag_text">
          <p>wilt u iets bestellen?</p>
            </div>
              <div class="button_aandeslagJa">
                <li><a href="bestellen.php">
                  <button class="buttonJa">Ja</button>
                </a></li>
              </div>
            <div class="button_aandeslagNee">
              <li><a href="contact.php">
            <button class="buttonNee">Nee</button>
          </a></li>
        </div>
      </div>
    </div>
    
    <div class="slideshowplek">
      <div class="slideshow">
        
      </div>
    </div>  

    <div class="footer">
      <p>all information about us is on the page "Contact"</p>
    </div>
  </body>
</html>
<script src="/js/main.js"></script>