<?php
include '../../../models/teacher.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $genre = $_POST['genre'];
  $subject = $_POST['subject'];
  $cin = $_POST['cin'];
  $image = $_FILES['image']['name'];
  $temp_name = $_FILES['image']['tmp_name'];
  $folder = "../../assets/img/" . $image;

  $utilisateur_result = insert($name,$email,$phone,$genre,$folder);

  if ($utilisateur_result) {
    $lastInsertedId = mysqli_insert_id($connect);

    $teacher_result = insert_teacher($subject,$lastInsertedId,$cin);


    if ($teacher_result){
      move_uploaded_file($temp_name, $folder);
      header("location:../../../views/admin/teacher/afficher.php");
      exit();
    } else {
      echo "Error inserting teacher data";
    }
  } else {
    echo "Error inserting user data";
  }
}
