<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Start Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->


    <!-- Start CSS Links -->
    <?php include $_SERVER["DOCUMENT_ROOT"].'/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/cssLinks.php'; ?>
    <link rel="stylesheet" href="./Home.css">
    <!-- End CSS Links -->
</head>

<body>

    <!-- Start Navbar -->

    <?php include $_SERVER["DOCUMENT_ROOT"].'/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/navbar.php';?>
 
    <!-- End Navbar -->

    <!-- Start Landing Page -->

    <div class="landing-page position-relative">
        <div class="text" id="landingText">
            <h2>UniVerse</h2>
            <p>Unleash Your University Experience: Discover, Connect, and Grow! Embrace a dynamic online platform
                designed for students. Join us and embark on a transformative journey today!</p>
            <a href=""><button class="myBtn main-btn">More</button></a>
        </div>
    </div>

    <!-- End Landing Page -->

    <!-- Start Services -->

    <div class="services section" id="services">
        <div class="container">
            <h2 class="main-heading">Services</h2>
            <div class="services-cards row justify-content-center gap-5">
                <div class="service text-center col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="image">
                        <a href="../courses/courses.php"><img src="./images/coursesCard.png" alt=""></a>
                    </div>
                    <div class="text">
                        <p>Courses</p>
                    </div>
                </div>
                <div class="service text-center col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="image">
                        <a href=""><img src="./images/shopCard.png" alt=""></a>
                    </div>
                    <div class="text">
                        <p>Shop</p>
                    </div>
                </div>
                <div class="service text-center col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="image">
                        <a href=""><img src="./images/clubsCard.png" alt=""></a>
                    </div>
                    <div class="text">
                        <p>Clubs and Teams</p>
                    </div>
                </div>
                <div class="service text-center col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="image">
                        <a href=""><img src="./images/Private-tutorCard.png" alt=""></a>
                    </div>
                    <div class="text">
                        <p>Private tutor</p>
                    </div>
                </div>
                <div class="service text-center col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="image">
                        <a href=""><img src="./images/roommateCard.png" alt=""></a>
                    </div>
                    <div class="text">
                        <p>Find a roommate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Services -->

    <!-- Start Discounts -->

    <div class="discounts section">
        <div class="container">
            <h2 class="main-heading">Discounts</h2>
            <div class="content">
                <div class="left">
                    <div class="image">
                        <img src="./images/coursesDiscount.png" alt="">
                    </div>
                    <a href=""><button class="myBtn sec-btn">Courses</button></a>
                </div>
                <div class="right">
                    <div class="image">
                        <img src="./images/shopDiscount.png" alt="">
                    </div>
                    <a href=""><button class="myBtn main-btn">Shop</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- End Discounts -->

<?php include $_SERVER["DOCUMENT_ROOT"].'/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/footer.php';?>




    <!-- Start JS Links -->
    <?php include $_SERVER["DOCUMENT_ROOT"].'/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/jsLinks.php';?>
    <script src="./Home.js"></script>
    <!-- End JS Links -->
</body>

</html>