<?php
require_once __DIR__ . '/../../config/connect.php';

function display()
{
    global $connect;

    $query = "SELECT * FROM clubs";

    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    return $result;
}


?>