<?php

$userName=$_SESSION['user_name'];

?>
<div class="">
    <div class="navigation">
      <ul>
        <li>
          <a href="#" class="logo">marionette<p>high school</p></a>
          <div class="rows">
            <img src="images/add.png">
            <h1>Add new task</h1>
          </div>
        </li>
        <li class="active">
          <a href="../admin/dashboard.php" class="active">
            <span class="title"><i class='bx bxs-home-circle'></i>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="../student/afficher.php">
            <span class="title"><i class='bx bxs-user'></i>Students</span>
          </a>
        </li>

        <li>
          <a href="../teacher/afficher.php">
            <span class="title"><i class='bx bxs-user'></i>Teachers</span>
          </a>
        </li>

        <li>
          <a href="../reservation.php">
            <span class="title"><i class='bx bxs-bookmark-alt'></i>Booking</span>
          </a>
        </li>

        <li>
          <a href="vistors.html">
            <span class="title"><i class='bx bxs-low-vision'></i>Visitors</span>
          </a>
        </li>

        <li>
          <a href="settings.html">
            <span class="title"><i class='bx bxs-cog'></i>Settings</span>
          </a>
        </li>
        <div>
          <a href="../admin/logout.php" class="logout">Logout</a>
        </div>
      </ul>

    </div>
  </div>

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
          <h1><?php echo $userName?></h1>
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