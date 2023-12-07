<?php
// approve_reservation.php

// Handle approval logic and update the reservation status in the database
// You should have your database connection logic here

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $reservation_id = $_GET['id'];

    // Connect to the database (use your actual database connection code)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gestion_ecole";

    $connect = new mysqli($servername, $username, $password, $dbname);

    // Example query to update reservation status to 'valider'
    $sql = "UPDATE reservations SET status = 'valider' WHERE id = $reservation_id";
    
    // You should use proper error handling in a production environment
    if (mysqli_query($connect, $sql)) {
        echo "Success";
    } else {
        echo "Error updating reservation status: " . mysqli_error($connect);
    }

    // Close the database connection
    mysqli_close($connect);
}
?>
