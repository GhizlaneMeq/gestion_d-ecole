<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add reservation</title>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../../assets/css/dashboard/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .form-container {
            background-color: #B8C4FE;
            max-width: 500px;
            margin-left: 20%;
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


   <?php
   include '../includes/dashboard_aside.php';
   ?>
    <div class="header">
        <div class='bx bxs-chevron-left' id="remove"></div>
        <div class="tit">
            <h1>Dashboard</h1>
        </div>
        <div class="search">
            <input type="text" placeholder="Search">
            <div class="icons">
                <img src="images/bell.png" alt="" srcset="">
            </div>
            <div class="admin">
                <img src="images/me.jpg" alt="" srcset="">
                <div class="name">
                    <h1>CHABAB Nabil <span>admin</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="head d-flex justify-content-between">
        <h1>Overview</h1>
        <div class="dropdown date">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Last Week</button>
            <ul class="dropdown-menu rounded-4">
                <li><button class="dropdown-item" type="button">Last Day</button></li>
                <li><button class="dropdown-item" type="button">Last Month</button></li>
                <li><button class="dropdown-item" type="button">Last Year</button></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="form-container">
            <h2 class="text-center text-white">teacher Information</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>

                <div class="form-group">
                    <label for="genre">Genre:</label>
                    <select class="form-control" id="genre" name="genre" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/" required>
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Add Student</button>
            </form>
        </div>

    </div>


    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>



<script>
    AOS.init();
</script>

</html>