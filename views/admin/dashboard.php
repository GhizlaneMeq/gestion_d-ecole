<?php
session_start();
if(empty($_SESSION['user_id'])){
  header("location:../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="../../assets/css/dashboard/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


 <?php
 include '../includes/dashboard_aside.php';
 ?>

  <div class="content">
    <div class="row">
      <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="card border-left-primary shadow h-100 custom-card">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col-md-8 offset-md-2 text-center">
                <img class="rounded-circle mb-4" alt="avatar1" src="images/userimg.png">
                <div class="h3 mb-2 font-weight-bold text-black">Total Students</div>
                <div class="h5 mb-4 font-weight-bold text-gray-800">10,000+ / year</div>
                <div class="h6 mb-0 font-weight-bold text-gray-800">15% increase from last year</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-down" data-aos-duration="1500">
        <div class="card border-left-primary shadow h-100 custom-card">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col-md-8 offset-md-2 text-center">
                <img class="rounded-circle mb-4" alt="avatar1" src="images/visiimg.png">
                <div class="h3 mb-2 font-weight-bold text-black">Total Students</div>
                <div class="h5 mb-4 font-weight-bold text-gray-800">10,000+ / year</div>
                <div class="h6 mb-0 font-weight-bold text-gray-800">15% increase from last year</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="card border-left-primary shadow h-100 custom-card">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col-md-8 offset-md-2 text-center">
                <img class="rounded-circle mb-4" alt="avatar1" src="images/teachimg.png">
                <div class="h3 mb-2 font-weight-bold text-black">Total Students</div>
                <div class="h5 mb-4 font-weight-bold text-gray-800">10,000+ / year</div>
                <div class="h6 mb-0 font-weight-bold text-gray-800">15% increase from last year</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="row tab">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-6 col-md-6 mb-5" data-aos="fade-right" data-aos-duration="1500">
        <div class="card border-left-primary shadow h-100 custom-card">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Study-year</th>
                    <th>Rank</th>
                    <th>%</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>CHABAB Nabil</td>
                    <td>2022-2023</td>
                    <td>Exelent</td>
                    <td><img src="images/100.png"></td>
                  </tr>
                  <tr>
                    <td>MEQDAR Ghizlane</td>
                    <td>2022-2023</td>
                    <td>Exelent</td>
                    <td><img src="images/90.png"></td>
                  </tr>
                  <tr>
                    <td>Mohammed SADQ</td>
                    <td>2022-2023</td>
                    <td>Exelent</td>
                    <td><img src="images/80.png"></td>
                  </tr>
                  <tr>
                    <td>Omar ENNEDI</td>
                    <td>2022-2023</td>
                    <td>Exelent</td>
                    <td><img src="images/70.png"></td>
                  </tr>
                  <tr>
                    <td>Abdo DADLI</td>
                    <td>2022-2023</td>
                    <td>Exelent</td>
                    <td><img src="images/60.png"></td>
                  </tr>
                  <tr>
                    <td>Sanae LOUAFI</td>
                    <td>2022-2023</td>
                    <td>Exelent</td>
                    <td><img src="images/50.png"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="col-xl-6 col-md-6 mb-5" data-aos="fade-left" data-aos-duration="1500">
          <div class="card border-left-primary shadow h-100 custom-card">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col-md-8 offset-md-2 text-center">
                  <img src="images/900.png" alt="" srcset="" class="mb-4">
                  <div class="h5 mb-2 font-weight-bold text-black mb-4">This Year Success</div>
                  <div class="h6 mb-0 font-weight-bold text-gray-800 mb-4">15% increase from last year</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-5" data-aos="fade-left" data-aos-duration="1500">
          <div class="card border-left-primary shadow h-100 custom-card">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col-md-8 offset-md-2 text-center">
                  <img src="images/7000.png" alt="" srcset="" class="mb-4">
                  <div class="h5 mb-2 font-weight-bold text-black mb-4">This Year Success</div>
                  <div class="h6 mb-0 font-weight-bold text-gray-800 mb-4">15% increase from last year</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>



<script>
  AOS.init();
</script>
</html>