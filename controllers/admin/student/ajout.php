<?php
include '../../../models/student.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $genre = $_POST['genre'];
  $level = $_POST['level'];
  $promotion = $_POST['promotion'];
  $image = $_FILES['image']['name'];
  $temp_name = $_FILES['image']['tmp_name'];
  $folder = "../../assets/img/" . $image;

  $utilisateur_result = insert($name,$email,$phone,$genre,$folder);

  if ($utilisateur_result) {
    $lastInsertedId = mysqli_insert_id($connect);
    $etudiant_result = insert_Etudiant($level,$promotion,$lastInsertedId);


    if ($etudiant_result) {
      move_uploaded_file($temp_name, $folder);
      header("location:../../../views/admin/student/afficher.php");
      exit();
    } else {
      echo "Error inserting student data";
    }
  } else {
    echo "Error inserting user data";
  }
}
