<?php
require_once __DIR__ . '/../config/connect.php';

function display()
{
    global $connect;

    $query = "SELECT
    professeurs.id AS professeur_id,
    professeurs.matiere_id,
    matieres.nom AS subject_name,
    utilisateurs.image,
    utilisateurs.nom AS professeur_name,
    utilisateurs.email,
    utilisateurs.phone,
    utilisateurs.genre
    FROM
        professeurs
    JOIN utilisateurs ON professeurs.utilisateur_id = utilisateurs.id
    JOIN matieres ON professeurs.matiere_id = matieres.id";

    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    return $result;
}



function insert($name, $email, $phone, $genre, $folder)
{


    function generatePassword()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $password = '';

        for ($i = 0; $i < 8; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $password;
    }

    $generatedPassword = generatePassword();
    $hashedPassword = password_hash($generatedPassword, PASSWORD_DEFAULT);
    global $connect;

    $query = "INSERT INTO `utilisateurs`(`nom`, `email`, `phone`, `image`, `genre`, `role_id`, `password`) 
              VALUES (?, ?, ?, ?, ?, 2, ?)";

    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $phone, $folder, $genre, $hashedPassword);

    $utilisateur_result = mysqli_stmt_execute($stmt);
    return $utilisateur_result;
}

function insert_teacher($subject, $utilisateur_id, $cin)
{
    global $connect;

    $query = "INSERT INTO `professeurs`(`cin`, `matiere_id`, `utilisateur_id`) VALUES (?,?, ?)";

    $Teacher_stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($Teacher_stmt, "sii", $cin,  $subject, $utilisateur_id);
    $teacher_result = mysqli_stmt_execute($Teacher_stmt);

    return $teacher_result;
}

function delete($id)
{
    global $connect;
    $requet = "DELETE FROM `professeurs` WHERE id=$id";
    $result = mysqli_query($connect, $requet);

    return $result;
}

function getInfos($id)
{
    global $connect;

    $query = "SELECT professeurs.id AS professeur_id, professeurs.cin, professeurs.matiere_id, utilisateurs.image, utilisateurs.nom, utilisateurs.email, utilisateurs.phone, utilisateurs.genre
              FROM professeurs
              JOIN utilisateurs ON professeurs.utilisateur_id = utilisateurs.id
              WHERE professeurs.id = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    return ($result) ? mysqli_fetch_assoc($result) : null;
}



function update($id, $name, $email, $phone, $genre, $cin, $subject, $folder)
{
    global $connect;

    $query = "UPDATE professeurs
              JOIN utilisateurs ON professeurs.utilisateur_id = utilisateurs.id
              SET
                professeurs.cin = ?,
                professeurs.matiere_id = ?,
                utilisateurs.image = ?,
                utilisateurs.nom = ?,
                utilisateurs.email = ?,
                utilisateurs.phone = ?,
                utilisateurs.genre = ?
              WHERE
                professeurs.id = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "sisssssi", $cin, $subject, $folder, $name, $email, $phone, $genre, $id);

    return mysqli_stmt_execute($stmt);
}
