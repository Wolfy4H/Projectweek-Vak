<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./css/betalen.css" />
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
      </div>
    </div>
    <div class="header_space"></div>

    <div class="formulieroutline">
      <div class="form">
        <div class="invullen">
          <form action="index.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="John doe" />

            <p>Time</p>
            <input type="int" name="Time" placeholder="18:30" />

            <p>People</p>
            <input type="int" name="people" placeholder="8" />

            <p>Age</p>
            <input type="number" name="age" placeholder="71" />

            <p>Pin-code</p>
            <input type="password" name="Pincode" placeholder="1111" />

            <p>Password</p>
            <input
              type="password"
              name="password"
              placeholder="DikkieDikDeKat#7"
            /><br /><br />

          <input type="submit" value="Submit" name="knop" />
        </div>
      </form>
        <?php
            if (isset( $_POST ['knop'])) {
            $username = $_POST["username"];
            echo $username;
        
            $pincode = $_POST["pin-code"];
            echo $pincode;
        
            $password = $_POST["password"];
            echo $password;
        
            $age = $_POST["age"];
            echo $age;
            }
        ?>
      </div>
    </div>

    <div class="footer">
      <p>all information about us is on the page "Contact"</p>
    </div>
  </body>
</html>
