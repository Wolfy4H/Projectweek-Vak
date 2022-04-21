<?php

    include ('../includes/connect.php');

    $sql = "INSERT INTO producten (naam, beschrijving, prijs, categorie, afbeelding)
    VALUES (:naam,:beschrijving,:prijs,:categorie,:afbeelding)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->bindParam(":categorie", $_POST['categorie']);
    $stmt->bindParam(":afbeelding", $_POST['afbeelding']);
    $stmt->execute();

    header('Location: ../backend.php');

?>