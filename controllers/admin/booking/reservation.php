<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_ecole";

$connect = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM reservations ";
$result = mysqli_query($connect, $sql);

$query = "SELECT * FROM livres ";
$book_result = mysqli_query($connect, $query);
?>