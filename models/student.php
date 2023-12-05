<?php
require_once __DIR__ . '/../config/connect.php';
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

function insert_Etudiant($level, $promotion, $utilisateur_id)
{
    global $connect;

    $query = "INSERT INTO `etudiants`(`level`, `promotion`, `utilisateur_id`) VALUES (?, ?, ?)";

    $Etudiant_stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($Etudiant_stmt, "ssi", $level, $promotion, $utilisateur_id);
    $etudiant_result = mysqli_stmt_execute($Etudiant_stmt);

    return $etudiant_result;
}

