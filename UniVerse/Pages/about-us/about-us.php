<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Start Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./about-us.css" rel="stylesheet">
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/cssLinks.php'; ?>

</head>

<body>

    <!-- Start Navbar -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/navbar.php'; ?>
    <!-- End Navbar -->

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">About</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="../Home/index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">About</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="./images/about2.png" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p>

                        Step into the world of <span class="fw-bold">UniVerse</span>, the ultimate peer-to-peer learning destination for students. Explore a diverse range of courses curated by your fellow peers, forging a dynamic and collaborative community dedicated to knowledge exchange. Embrace the opportunity to both share your expertise and expand your horizons. Join LearnTrade today and revolutionize your learning journey. .</p>
                    <a href="../tutorDashboard/addCourse.php"><button class="myBtn sec-btn">Add a course</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
                <h1>What Say Our Students</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left mb-4"></i>
                            <h4 class="font-weight-normal mb-4">
                                UniVerse redefines learning. Connecting with student-created courses has made my learning journey engaging and unique. A must-have for any curious mind!"
                            </h4>
                            <img class="img-fluid mx-auto mb-3" src="./images/nooraldeen-modified.png" alt="">
                            <h5 class="m-0">Nooraldeen</h5>
                            <span>Student</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left mb-4"></i>
                            <h4 class="font-weight-normal mb-4">
                                UniVerse redefines learning. Connecting with student-created courses has made my learning journey engaging and unique. A must-have for any curious mind!"
                            </h4>                            <img class="img-fluid mx-auto mb-3" src="./images/nooraldeen-modified.png" alt="">
                            <h5 class="m-0">Nooraldeen</h5>
                            <span>Student</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left mb-4"></i>
                            <h4 class="font-weight-normal mb-4">
                                UniVerse redefines learning. Connecting with student-created courses has made my learning journey engaging and unique. A must-have for any curious mind!"
                            </h4>                            <img class="img-fluid mx-auto mb-3" src="./images/nooraldeen-modified.png" alt="">
                            <h5 class="m-0">Nooraldeen</h5>
                            <span>Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Start Footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/footer.php'; ?>

    <!-- End Footer -->


    <!-- JavaScript Libraries -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/jsLinks.php'; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="./owl.carousel.min.js"></script>
    <script src="./main.js"></script>


</body>

</html>