<?php

include '../../../config/connect.php';
include '../../../views/admin/reservation.php';


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $auteur = $_POST['auteur'];
    $description = $_POST['description'];
    $resume = $_POST['resume'];
    $nbrPage = $_POST['nombre_page'];
    $category_id = $_POST['category_id'];

    $image = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $folder = "../../img/" . $image;
    $query = "INSERT INTO `livres`(`name`, `auteur`, `description`, `resume`, `nbrPage`, `image`, `category_id`) 
    VALUES ('$name','$auteur','$description','$resume','$nbrPage','$folder','$category_id')";
    $result = mysqli_query($connect, $query);

    if (isset($result)) {
        move_uploaded_file($temp_name, $folder);
        header("location:AfficherLivre.php?msg=book added successfully");
    } else {
        echo ("error");
    }
}
