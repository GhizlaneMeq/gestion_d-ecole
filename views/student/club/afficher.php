
<?php include '../../../controllers/etudiant/club.php' ?>
<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:../index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Librery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../../../assets/css/librery.css">
</head>

<body>
    <?php include '../../includes/navbar.php' ?>
    <h5 ><a style="margin-left: 90%; color:aliceblue" class="btn btn-primary mt-5" href="">create a club</a></h5>
    <section class="container text-center p-1 bg-light">
        <div class="row">
        <?php while ($rows = mysqli_fetch_assoc($result)) :?>
            <div class="card02 col-sm-12 col-md-6 col-lg-3">
                <a href="./reservation.php?id=<?php echo $rows['id'] ?>"><img src="<?php echo $rows['image'] ?>" class="card-img-top" alt="book_image" width="100%" /></a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $rows['nom'] ?></h5>
                    <p class="card-star"><?php echo $rows['description'] ?></p>
                </div>
            </div>
        <?php endwhile ?>
        </div>
    </section>
    <footer>
        <div class="rows">
            <div class="copy">
                <a href="#" class="logo" aria-label="Read more"><img src="../..assets/img/logo.png" alt="#"></a>
                <h1>Terms of use | Privacy</h1>
                <p>Copyright by 2019 YourName, Inc</p>
            </div>
            <div class="det-foot">
                <h1>About Us</h1>
                <ul>
                    <li><a href="#" aria-label="Read more">Support Center</a></li>
                    <li><a href="#" aria-label="Read more">Customer Support</a></li>
                    <li><a href="#" aria-label="Read more">About Us</a></li>
                    <li><a href="#" aria-label="Read more">Copyright</a></li>
                </ul>
            </div>
            <div class="det-foot">
                <h1>Our Information</h1>
                <ul>
                    <li><a href="#" aria-label="Read more">Return Policy</a></li>
                    <li><a href="#" aria-label="Read more">Privacy Policy</a></li>
                    <li><a href="#" aria-label="Read more">Terms & Conditions</a></li>
                    <li><a href="#" aria-label="Read more">Site Map</a></li>
                </ul>
            </div>
            <div class="det-foot">
                <h1>My Account</h1>
                <ul>
                    <li><a href="#" aria-label="Read more">Press inquiries</a></li>
                    <li><a href="#" aria-label="Read more">Social media</a></li>
                    <li><a href="#" aria-label="Read more">directories</a></li>
                    <li><a href="#" aria-label="Read more">Images & B-roll</a></li>
                </ul>
            </div>
            <div class="det-foot">
                <h1>Connect</h1>
                <ul>
                    <li><a href="#" aria-label="Read more"><img src="../..assets/img/Group-3.png" alt="#">Facebook</a>
                    </li>
                    <li><a href="#" aria-label="Read more"><img src="../..assets/img/Group22.png" alt="#" class="tweet">Twitter</a>
                    </li>
                    <li><a href="#" aria-label="Read more"><img src="../..assets/img/Group-1.png" alt="#">Github</a></li>
                    <li><a href="#" aria-label="Read more"><img src="../..assets/img/Group-2.png" alt="#">Dribble</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="../..https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>