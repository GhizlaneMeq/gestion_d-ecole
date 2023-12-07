<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:../index.php");
}

if (empty($_SESSION['user_name'])) {
    $userName = $_SESSION['user_name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marrionnettes high school</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <?php include './includes/navbar.php'  ?>
    <section class="home">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 description-home ">
                    <h1>
                        Embark on a Journey of Knowledge at marionnette hight school: Your
                        Path to Success Starts Here
                    </h1>
                    <p class="col-md-9">
                        Explore marionnette hight school's digital hub. Discover alumni
                        success stories, diverse clubs, and engaging activities. Unleash
                        your potential here.
                    </p>
                    <a href="#" class="btn p-2 ps-5 pe-5 me-5 f">Explore activities</a>
                    <a href="#" class="btn p-2 ps-5 pe-5 f">get started</a>
                </div>
                <div class="col-sm-6">
                    <img src="../assets/img/homeImg.png" alt="Image" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="card col-md-2 ">
                    <img src="../assets/img/liveChating.png" alt="live chating" class="card-img-top w-25">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">Live chating</h6>
                        <p class="card-text">This would prompt visitors to browse through the diverse range of
                            activities available at the</p>
                    </div>
                </div>
                <div class="card col-md-2   ">
                    <img src="../assets/img/liveChating.png" alt="live chating" class="card-img-top w-25">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">Live chating</h6>
                        <p class="card-text">This would prompt visitors to browse through the diverse range of
                            activities available at the</p>
                    </div>
                </div>
                <div class="card col-md-2  ">
                    <img src="../assets/img/liveChating.png" alt="live chating" class="card-img-top w-25">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">Live chating</h6>
                        <p class="card-text">This would prompt visitors to browse through the diverse range of
                            activities available at the</p>
                    </div>
                </div>
                <div class="card col-md-2 ">
                    <img src="../assets/img/liveChating.png" alt="live chating" class="card-img-top w-25">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">Live chating</h6>
                        <p class="card-text">This would prompt visitors to browse through the diverse range of
                            activities available at the</p>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="laureat" style="margin-top: 70px;">





        <div class="container-fluid" style="padding: 0 0;">
            <h2 class="text-center mb-5">Outstanding Achievements and Testimonials</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="../assets/img/laureat1.png" class="card-img-top laureat" alt="Image 1" />
                            <div class="card-body d-flex">
                                <a href="#" class="btn btn-primary text-primary profile">dd</a>
                                <a href="#" class="btn btn-primary ps-5 pe-5 name">Gizaam</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="../assets/img/laureat2.png" class="card-img-top laureat" alt="Image 1" />
                            <div class="card-body d-flex">
                                <a href="#" class="btn btn-primary text-primary profile">dd</a>
                                <a href="#" class="btn btn-primary ps-5 pe-5 name">Gizaam</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="../assets/img/laureat3.png" class="card-img-top laureat" alt="Image 1" />
                            <div class="card-body d-flex">
                                <a href="#" class="btn btn-primary text-primary profile">dd</a>
                                <a href="#" class="btn btn-primary ps-5 pe-5 name">Gizaam</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="../assets/img/laureat4.png" class="card-img-top laureat" alt="Image 1" />
                            <div class="card-body d-flex">
                                <a href="#" class="btn btn-primary text-primary profile">dd</a>
                                <a href="#" class="btn btn-primary ps-5 pe-5 name">Gizaam</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination mt-5"></div>
            </div>
        </div>
    </section>

    <section class="clubs-section">

        <div class="container">
            <h2 class="text-center mb-4">
                Exploring Passion Through Diversity: Our Range of Student Clubs
            </h2>
            <p class="text-center  mb-5">
                Explore a variety of clubs at Marionette High School, offering
                something for every passion. Join us to discover and thrive in a
                diverse community that celebrates individual interests and talents.
            </p>
            <div class="row">
                <div class="container col-md-6">
                    <div class="card mb-4" style="background-color: #D5E6FF">
                        <div class="d-flex ">
                            <div class="card-body">
                                <h5 class="card-title pt-5">
                                    Environmental Club: "Green Initiatives for a Brighter Future"
                                </h5>
                                <p class="card-text">
                                    Environmental Club: "Green Initiatives for a Brighter Future"
                                </p>
                            </div>
                            <img src="..//assets/img/EnvClub.png" class="club" alt="Environmental Club" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card" style="background-color: #5c45fd; color: white">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Debate and Public Speaking Club: "Eloquence in Discourse"
                                    </h5>
                                    <p class="card-text text-light">
                                        Hone persuasive skills and critical thinking in our lively
                                        debate forums.
                                    </p>
                                </div>
                                <img src="..//assets/img/publicSpkClub.png" class="w-50 ms-5 club" alt="Club 2" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color: rgba(42, 43, 106, 0.71);color: white;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        STEM Club: "Innovation in Science and Technology"
                                    </h5>
                                    <p class="card-text text-light">
                                        Explore coding, experiments, and robotics in our dynamic
                                        STEM community.
                                    </p>
                                </div>
                                <img src="..//assets/img/stemClub.png" class="club w-50 pt-5 ms-5" alt="Club 3" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container col-md-6">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card" style="background-color: #2a2b6a; color: white">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Art and Photography Club: "Visual Stories Unleashed"
                                    </h5>
                                    <p class="card-text text-light">
                                        Express creativity through diverse art forms and capture
                                        moments with a lens.
                                    </p>
                                </div>
                                <img src="..//assets/img/art.png" class=" w-75 club" alt="Club 2" />
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="card pb-2" style="background-color: #efedff">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Music and Performance Club: "Melodies in Motion"
                                    </h5>
                                    <p class="card-text">
                                        Share musical talent through performances and
                                        compositions.
                                    </p>
                                </div>
                                <img src="..//assets/img/music.png" class=" w-75 club" alt="Club 3" />
                            </div>
                        </div>
                    </div>
                    <div class="card pb-5" style="background-color: #8a79ff">
                        <div class="d-flex align-items-center">
                            <div class="card-body pt-5">
                                <h5 class="card-title">
                                    Cultural Diversity Club: "Unity in Diversity"
                                </h5>
                                <p class="card-text">
                                    Cultural Diversity Club: "Unity in Diversity"
                                </p>
                            </div>
                            <img src="..//assets/img/cultural.png" class="club pt-auto" alt="Environmental Club" style="width: 100px;" />
                        </div>
                    </div>

                </div>
            </div>


        </div>
        </div>
    </section>

    <section class="timeline" style="margin-top: 150px;">
        <div class="container">
            <h2 class="text-center mb-4">
                Exploring Passion Through Diversity: Our Range of Student Clubs
            </h2>
            <p class="text-center  mb-5">
                Explore a variety of clubs at Marionette High School, offering
                something for every passion. Join us to discover and thrive in a
                diverse community that celebrates individual interests and talents.
            </p>
            <div class="row">


                <div class="left-cards col-5">
                    <div class="card p-5" data-aos="fade-right" style="margin-top: 30px;background-color: rgba(92, 69, 253, 0.69);">
                        <h5>1965: Foundation of the School</h5>
                        <p>The establishment of the high school, marking its inception and the vision behind its
                            formation.</p>
                    </div>
                    <div class="card p-5" data-aos="fade-right" style="margin-top: 550px;background-color: rgba(92, 69, 253, 0.69);">
                        <h5>1965: Foundation of the School</h5>
                        <p>The establishment of the high school, marking its inception and the vision behind its
                            formation.</p>
                    </div>
                    <div class="card p-5" data-aos="fade-right" style="margin-top: 400px;background-color: rgba(92, 69, 253, 0.69);">
                        <h5>1965: Foundation of the School</h5>
                        <p>The establishment of the high school, marking its inception and the vision behind its
                            formation.</p>
                    </div>
                </div>
                <div class="col-1 position-relative ms-5">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="ctimeline"></div>
                </div>

                <div class="left-cards col-5">
                    <div class="card p-5" data-aos="fade-left" style="margin-top: 450px;background-color: rgba(92, 69, 253, 0.69);">
                        <h5>1965: Foundation of the School</h5>
                        <p>The establishment of the high school, marking its inception and the vision behind its
                            formation.</p>
                    </div>
                    <div class="card p-5" data-aos="fade-left" style="margin-top: 500px;background-color: rgba(92, 69, 253, 0.69);">
                        <h5>1965: Foundation of the School</h5>
                        <p>The establishment of the high school, marking its inception and the vision behind its
                            formation.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="mt-5">
        <div id="carouselExampleDark" class="carousel carousel-dark slide container-fluid">

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row row2 d-flex justify-content-between align-items-center  rounded-4">
                        <div class="col-md-6">
                            <div class="carousel-caption text-start">
                                <h5 class="mt-5">
                                    Artistic Endeavors of Maya: Exploring the World Through
                                    Brushstrokes
                                </h5>
                                <p style="width: 60%;">
                                    Delve into the world of Maya, an artist whose vivid imagination and talent reflect
                                    in her artwork. Through this feature, discover Maya's artistic journey, her
                                    inspirations, and the impact of art in her life. From her early influences to her
                                    latest masterpieces, Maya invites readers to experience the diverse emotions and
                                    stories her art conveys.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="../assets/img/blog.png" class="d-block pt-3 pb-3" alt="assets/img/blog.png" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="row row2 d-flex justify-content-between  rounded-4">
                        <div class="col-md-6">
                            <div class="carousel-caption text-start">
                                <h5>
                                    Artistic Endeavors of Maya: Exploring the World Through
                                    Brushstrokes
                                </h5>
                                <p class="w-75">
                                    Delve into the world of Maya, an artist whose vivid
                                    imagination and talent reflect in her artwork. Through this
                                    feature, discover Maya's artistic journey, her inspirations,
                                    and the impact of art in her life. From her early influences
                                    to her latest masterpieces, Maya invites readers to
                                    experience the diverse emotions and stories her art conveys.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="../assets/img/blog.png" class="d-block w-75" alt="assets/img/blog.png" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="row row2 d-flex justify-content-between  rounded-4">
                        <div class="col-md-6">
                            <div class="carousel-caption text-start">
                                <h5>
                                    Artistic Endeavors of Maya: Exploring the World Through
                                    Brushstrokes
                                </h5>
                                <p class="w-75">
                                    Delve into the world of Maya, an artist whose vivid
                                    imagination and talent reflect in her artwork. Through this
                                    feature, discover Maya's artistic journey, her inspirations,
                                    and the impact of art in her life. From her early influences
                                    to her latest masterpieces, Maya invites readers to
                                    experience the diverse emotions and stories her art conveys.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="../assets/img/blog.png" class="d-block w-75" alt="assets/img/blog.png" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="row row2 d-flex justify-content-between  rounded-4">
                        <div class="col-md-6">
                            <div class="carousel-caption text-start">
                                <h5>
                                    Artistic Endeavors of Maya: Exploring the World Through
                                    Brushstrokes
                                </h5>
                                <p class="w-75">
                                    Delve into the world of Maya, an artist whose vivid
                                    imagination and talent reflect in her artwork. Through this
                                    feature, discover Maya's artistic journey, her inspirations,
                                    and the impact of art in her life. From her early influences
                                    to her latest masterpieces, Maya invites readers to
                                    experience the diverse emotions and stories her art conveys.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="../assets/img/blog.png" class="d-block w-75" alt="assets/img/blog.png" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="row row2 d-flex justify-content-between rounded-4">
                        <div class="col-md-6">
                            <div class="carousel-caption text-start">
                                <h5>
                                    Artistic Endeavors of Maya: Exploring the World Through
                                    Brushstrokes
                                </h5>
                                <p class="w-75">
                                    Delve into the world of Maya, an artist whose vivid
                                    imagination and talent reflect in her artwork. Through this
                                    feature, discover Maya's artistic journey, her inspirations,
                                    and the impact of art in her life. From her early influences
                                    to her latest masterpieces, Maya invites readers to
                                    experience the diverse emotions and stories her art conveys.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="../assets/img/blog.png" class="d-block w-75" alt="assets/img/blog.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-indicators align-items-end">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4ww" aria-label="Slide 5"></button>
            </div>
        </div>
    </section>
    <footer>
        <div class="rows">
            <div class="copy">
                <a href="#" class="logo" aria-label="Read more"><img src="../assets/img/logo.png" alt="#"></a>
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
                    <li><a href="#" aria-label="Read more"><img src="../assets/img/Group-3.png" alt="#">Facebook</a>
                    </li>
                    <li><a href="#" aria-label="Read more"><img src="../assets/img/Group22.png" alt="#" class="tweet">Twitter</a></li>
                    <li><a href="#" aria-label="Read more"><img src="../assets/img/Group-1.png" alt="#">Github</a></li>
                    <li><a href="#" aria-label="Read more"><img src="../assets/img/Group-2.png" alt="#">Dribble</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>


    <script src="../https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="../https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                500: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
                1300: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });

        AOS.init();
        console.log(window.screen.availWidth);
    </script>

</body>

</html>