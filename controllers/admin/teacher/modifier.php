<?php

require_once '../../../config/connect.php';
require_once '../../../models/teacher.php';

$id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];
$subject_query = "SELECT * FROM `matieres`";
$subject_result = mysqli_query($connect, $subject_query);
$row=getInfos($id);


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cin = $_POST['cin'];
    $phone = $_POST['phone'];
    $genre = $_POST['genre'];
    $subject = $_POST['subject'];

    $image = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $folder = "../../assets/img/".$image;

    
    $result = update($id, $name, $email, $phone, $genre, $cin, $subject, $folder);

    if (isset($result)) {
        move_uploaded_file($temp_name, $folder);
        header("location:../../../views/admin/teacher/afficher.php?msg=teacher updated successfully");
    } else {
        echo ("error");
    }
}


 





?>