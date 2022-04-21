<?php

    include('includes/connect.php');

if(isset($_POST['delete'])){
    $stmt = $connect->prepare("DELETE FROM producten WHERE id = :id");
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->execute();

    header("Location: backend.php");
    exit();
    }
?>