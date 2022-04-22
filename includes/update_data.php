<?php

    include('connect.php');

    if (isset ($_POST['update'])){

        $Naam = $_POST['naam'];
        $Plaatje = $_POST['afbeelding'];
        $Bescrhijving = $_POST['beschrijving'];
        $Prijs = $_POST['prijs'];
        $Type = $_POST['categorie'];
        $id = $_POST['id']; 



        $sql = "UPDATE producten SET naam=?, afbeelding=?, beschrijving=?, prijs=?, categorie=? WHERE id=?";
        $stmt = $connect->prepare($sql);
        $stmt->execute([$Naam, $Plaatje, $Bescrhijving, $Prijs, $Type, $id]);
    }

       

    
    header("Location: ../backend.php");
    exit();

?>