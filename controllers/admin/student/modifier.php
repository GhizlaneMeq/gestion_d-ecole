<?php
require_once '../../../config/connect.php';
require_once '../../../models/student.php';

$id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];

$row=getInfos($id);

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $genre = $_POST['genre'];
    $level = $_POST['level'];
    $promotion = $_POST['promotion'];

    $image = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $folder = "../../assets/img/".$image;

    
    $result = update($id, $name, $email, $phone, $genre, $level, $promotion, $folder);

    if (isset($result)) {
        move_uploaded_file($temp_name, $folder);
        header("location:../../../views/admin/student/afficher.php?msg=Etudiant updated successfully");
    } else {
        echo ("error");
    }
}




?>

