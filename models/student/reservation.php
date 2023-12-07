<?php
require_once __DIR__ . '/../../config/connect.php';

function display($id)
{
    global $connect;

    $query = "SELECT livres.id AS book_id, livres.name AS book_name, livres.auteur, livres.description AS book_description,
    livres.resume, livres.nbrPage, livres.image AS book_image, categories.nom AS category_name
FROM livres
JOIN categories ON livres.category_id = categories.id
WHERE livres.id=?";

    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    return $result;
}

function insert($id, $userId, $start_date, $end_date)
{
    global $connect;

    $query = "INSERT INTO `reservations`(`date_debut`, `date_fin`, `utilisateur_id`, `livre_id`) 
    VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "ssii", $start_date, $end_date, $userId, $id);

    $result = mysqli_stmt_execute($stmt);
    return $result;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}