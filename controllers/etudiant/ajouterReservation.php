<?php
include '../../models/student/reservation.php';
session_start();

if (empty($_SESSION['user_id'])) {
    header("location:../index.php");
    exit();
}

$userId = $_SESSION['user_id'];

if (isset($_POST['submit'])) {
    $start_date = test_input($_POST['start_date']);
    $end_date = test_input($_POST['end_date']);
    
    $id = test_input($_POST['id']);

    if (empty($start_date) || empty($end_date) || empty($id)) {
        echo "Please fill in all the required fields.";
        exit();
    }

    $result = insert($id, $userId, $start_date, $end_date);

    if ($result) {
        header("location:../../views/student/reservation.php?id=$id");
        exit();
    } else {
        echo "Error inserting reservation data";
    }
}


?>
