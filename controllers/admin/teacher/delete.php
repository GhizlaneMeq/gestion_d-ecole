<?php
include '../../../models/teacher.php';

$id = $_GET["id"];

$result=delete($id);

if ($result) {
  header("Location:../../../views/admin/teacher/afficher.php?msg=teacher deleted successfully");
} else {
  echo "Failed: " . mysqli_error($connect);
} 