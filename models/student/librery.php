<?php
require_once __DIR__ . '/../../config/connect.php';

function display()
{
    global $connect;

    $query = "SELECT
    livres.id AS book_id,
    livres.name AS book_name,
    livres.auteur,
    livres.image,
    categories.id AS category_id,
    categories.nom AS category_name
FROM
    livres
JOIN
    categories ON livres.category_id = categories.id;
";

    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    return $result;
}


?>