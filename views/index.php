<?php
include '../config/connect.php';

session_start();
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];




    $select = "SELECT * FROM utilisateurs WHERE email = ? LIMIT 1";
    $stmt = mysqli_prepare($connect, $select);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo $password;
        echo '<br>'.$row['password'];



        if (password_verify($password,$row['password'])) {
            
            
            switch ($row['role_id']) {
                case 1:
                    $_SESSION['user_name'] = $row['nom'];
                    $_SESSION['user_id'] = $row['id'];
                    header("location:../views/admin/dashboard.php");
                    break;
                case 2:
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_name'] = $row['nom'];
                    header("location:../views/home.php");
                    break;
                case 3:
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_name'] = $row['nom'];
                    header("location:../views/home.php");
                    break;
                default:
                    echo 'Unknown role';
            }
        } else {
          
            $error[] = "Incorrect email or password!";
        }
    } else {
        $error[] = "Incorrect email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: hsl(218, 41%, 15%);
            color: hsl(218, 81%, 95%);
            font-family: 'Poppins', sans-serif;
        }

        .background-radial-gradient {
            height: 100vh;
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
                    hsl(218, 41%, 35%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%),
                radial-gradient(1250px circle at 100% 100%,
                    hsl(218, 41%, 45%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%);
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }

        .row {
            margin-top: 5%;
        }

        .error input {
            border: 3px solid red;
        }

        .success input {
            border: 3px solid green;
        }
    </style>
</head>

<body>
    <section class="background-radial-gradient overflow-hidden">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Welcome Back! <br />
                        <span style="color: hsl(218, 81%, 75%)">Log in to Your Account</span>
                    </h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form action="" method="POST">
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" />
                                    <p class="text-danger"></p>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                                    <p class="text-danger"></p>
                                </div>
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                    <label class="form-check-label" for="form2Example33">Remember me</label>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-block mb-4 col-12">Log in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>