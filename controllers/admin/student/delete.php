<?php
include '../../../models/student.php';

$id = $_GET["id"];

$result=delete($id);

if ($result) {
  header("Location:../../../views/admin/student/afficher.php?msg=Student deleted successfully");
} else {
  echo "Failed: " . mysqli_error($connect);
} 