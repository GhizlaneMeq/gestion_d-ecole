<?php
include '../../models/student/reservation.php';

$id=$_GET['id'];

$result=display($id);
$row = mysqli_fetch_assoc($result);



?>



