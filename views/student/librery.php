<?php include '../../controllers/etudiant/librery.php' ?>
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
    <link rel="stylesheet" href="../../assets/css/librery.css">
</head>

<body>
    <?php include '../includes/navbar.php' ?>
    <div class="categories d-flex justify-content-center gap-1 mb-5">
        <h2>Filter BY  &nbsp;</h2>

        <div class="row g-3">
            <div class="col-md-4">
                <label for="category" class="form-label">Category:</label>
                <select class="form-control" id="category" name="category_id">
                    <option value="" selected disabled>All Categories</option>
                    <option value="1">Maths</option>
                    <option value="2">Physics</option>
                    <option value="3">Geology</option>
                    <option value="4">Divers</option>
                </select>
            </div>

            
</div>
    </div>



    <section class="container text-center p-1 bg-light">
        <div class="row">
            <?php while ($rows = mysqli_fetch_assoc($result)) : ?>
                <div class="card02 col-sm-12 col-md-6 col-lg-3">
                    <a href="./reservation.php?id=<?php echo $rows['book_id'] ?>"><img src="<?php echo $rows['image'] ?>" class="card-img-top" alt="book_image" width="100%" /></a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['book_name'] ?></h5>
                        <p class="card-star"><?php echo $rows['auteur'] ?></p>
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

    <script>
    function filterBooks() {
        // Get the selected category
        var category = document.getElementById('category').value;

        // Create an XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Define the AJAX request
        xhr.open('GET', 'filter_books.php?category=' + category, true);

        // Set up a callback function to handle the response
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Update the book display with the new data
                document.getElementById('book-container').innerHTML = xhr.responseText;
            }
        };

        // Send the request
        xhr.send();
    }
</script>

</body>

</html>