<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:../index.php");
}

if (empty($_SESSION['user_name'])) {
    $userName = $_SESSION['user_name'];
}
?>
<?php
include '../../controllers/admin/booking/reservation.php';
include '../includes/addBook.php';
include '../includes/displayBook.php' 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Reservations</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="../../assets/css/dashboard/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .form-container {
            background-color: #B8C4FE;
            max-width: 500px;
            padding: 30px 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            color: #007bff;
        }

        .form-container button {
            background-color: #007bff;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <?php include '../includes/dashboard_aside.php'; ?>
    <div class="content">

        <div class="row tab">
            <div class="col-xl-6 col-md-6 mb-5" data-aos="fade-right" data-aos-duration="1500">
                <a href="#" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addBookModal">Add a Book</a>
                <a href="#" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#displayBookModal">Dispaly Books</a>
                <div class="card border-left-primary shadow h-100 custom-card">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Reservation ID</th>
                                        <th>User ID</th>
                                        <th>Book ID</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['utilisateur_id']; ?></td>
                                            <td><?php echo $row['livre_id']; ?></td>
                                            <td><?php echo $row['date_debut']; ?></td>
                                            <td><?php echo $row['date_fin']; ?></td>
                                            <td id="status_<?php echo $row['id']; ?>"><?php echo $row['status']; ?></td>
                                            <td>
                                                <?php
                                                if ($row['status'] === 'encour de traitement') {
                                                    echo '<button onclick="approveReservation(' . $row['id'] . ')">Approve</button> | <button onclick="rejectReservation(' . $row['id'] . ')">Reject</button>';
                                                } else {
                                                    echo 'Action not allowed';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        function approveReservation(reservationId) {
            $.ajax({
                type: "GET",
                url: "../../controllers/admin/booking/approve_reservation.php",
                data: {
                    id: reservationId
                },
                success: function(response) {
                    if (response === "Success") {
                        $("#status_" + reservationId).text("valider");
                    } else {
                        $("#status_" + reservationId).text("non valider");
                    }
                },
                error: function(error) {
                    console.error("Error approving reservation:", error);
                }
            });
        }

        function rejectReservation(reservationId) {
            $.ajax({
                type: "GET",
                url: "../../controllers/admin/booking/reject_reservation.php",
                data: {
                    id: reservationId
                },
                success: function(response) {
                    if (response === "Success") {
                        $("#status_" + reservationId).text("non valider");
                    } else {
                        $("#status_" + reservationId).text("Error rejecting");
                    }
                },
                error: function(error) {
                    console.error("Error rejecting reservation:", error);
                }
            });
        }

        AOS.init();
    </script>

</body>

</html>