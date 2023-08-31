<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>

    <!-- Start Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->

    <!-- Start CSS Links -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/cssLinks.php'; ?>
    <link rel="stylesheet" href="./courses.css">
    <link rel="stylesheet" href="/masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalCSS/swiper.css">
    <!-- End CSS Links -->
</head>

<body>

    <!-- Start Navbar -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/navbar.php'; ?>
    <!-- End Navbar -->

    <!-- Start Landing Page -->
    <div class="landing-page position-relative">
        <div class="text">
            <h2>Courses</h2>
            <p>From Students To Students</p>
        </div>
    </div>

    <!-- End Landing Page -->

    <!-- Start Departments -->
    <div class="departments section">
        <div class="container">
            <div class="search__container">
                <p class="search__title">
                    Search for a course
                </p>
                <form action="" class="d-flex justify-content-center">
                    <input class="search__input" type="text" placeholder="Search">
                </form>
            </div>
            <h2 class="main-heading">Departments</h2>

            <div class="departments-cards row justify-content-center gap-5">
                <div class="department col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="image">
                        <a href="../deparments/IT/IT.php"><img src="./images/IT.png" alt=""></a>
                        <p>IT</p>
                    </div>
                </div>
                <div class="department col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="image">
                        <a href="../deparments/Eng/Eng.php"><img src="./images/eng.png" alt=""></a>
                        <p>Engineering</p>
                    </div>
                </div>
                <div class="department col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="image">
                        <a href="../deparments/Med/Med.php"><img src="./images/med school.png" alt=""></a>
                        <p>Medical school</p>
                    </div>
                </div>
                <div class="department col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="image">
                        <a href="../deparments/Science/science.php"><img src="./images/science2.png" alt=""></a>
                        <p>Science</p>
                    </div>
                </div>
                <div class="department col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="image">
                        <a href="../deparments/archi-design/archi-design.php"><img src="./images/arch and design.png" alt=""></a>
                        <p>Architecture and Design</p>
                    </div>
                </div>
                <div class="department col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="image">
                        <a href="../deparments/langs-lit/langs-lit.php"><img src="./images/lit and lang.png" alt=""></a>
                        <p>Languages and Literature</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Departments -->

    <!-- Start Lateset Courses -->
    <div class="latest-courses section sectionColor">
        <div class="container">
            <h2 class="main-heading">Lateset Courses</h2>
        </div>
        <div class="container">
            <div class="wrapper">
                <ul class="carousel">
                    <li class="card">
                        <div class="img"><img src="./images/algorithms.png" alt="img" draggable="false">
                        </div>
                        <h2 class="text-center fs-5">Analysis and Design of Algorithms</h2>
                        <span class="price">10$</span>
                        <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        <div class="mt-2 fs-6 course-publisher"><img src="./images/nooraldeen-modified.png" alt="" width="30px">
                            <a href="">Nooraldeen</a>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./images/c++.png" alt="img" draggable="false"></div>
                        <h2 class="text-center fs-5">C++</h2>
                        <span class="price">15$</span>
                        <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        <div class="mt-2 fs-6 course-publisher"><img src="./images/nooraldeen-modified.png" alt="" width="30px">
                            <a href="">Nooraldeen</a>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./images/data structures.jpg" alt="img" draggable="false"></div>
                        <h2 class="text-center fs-5">Data Structures</h2>
                        <span class="price">10$</span>
                        <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        <div class="mt-2 fs-6 course-publisher"><img src="./images/nooraldeen-modified.png" alt="" width="30px">
                            <a href="">Nooraldeen</a>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./images/java.png" alt="img" draggable="false"></div>
                        <h2 class="text-center fs-5">Java</h2>
                        <span class="price">20$</span>
                        <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        <div class="mt-2 fs-6 course-publisher"><img src="./images/nooraldeen-modified.png" alt="" width="30px">
                            <a href="">Nooraldeen</a>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img"><img src="./images/software testing.jpg" alt="img" draggable="false"></div>
                        <h2 class="text-center fs-5">Software Testing</h2>
                        <span class="price">15$ <small><del>$25</del></small></span>
                        <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        <div class="mt-2 fs-6 course-publisher"><img src="./images/nooraldeen-modified.png" alt="" width="30px">
                            <a href="">Nooraldeen</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Latest Courses -->


    <!-- Start Join Us -->

    <div class="join-us section">
        <div class="container">
            <h2 class="main-heading">Join Us</h2>
            <div class="join-content">
                <div class="left">
                    <h2 class="display-5 fw-bold">Turn your knowledge into profit!</h2>
                    <p class="fs-3 mt-3">Publish your own courses on our website and not only empower
                        others but also earn money doing what you love.</p>
                    <button class="myBtn main-btn mt-3">Join Us</button>
                </div>
                <div class="right">
                    <div class="image">
                        <img src="./images/joinUs.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Join Us -->


    <!-- Start Instructors -->

    <div class="instructors section sectionColor">
        <div class="container">
            <h2 class="main-heading">Students Joined us</h2>
            <div class="row instructor-cards justify-content-center gap-5">
                <div class="instructor col-md-5 col-lg-3">
                    <div class="socials">
                        <div class="info">
                            <img src="./images/instructor.png" alt="" class="img-fluid">
                            <div class="info mt-2">
                                <p class="name fw-bold">Ali Ahmad</p>
                                <span class="major">Computer science</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="facebook"><a href=""><i class="fa-brands fa-facebook facebookIcon"></i></a></div>
                            <div class="facebook"><a href=""><i class="fa-brands fa-instagram instagramIcon"></i></a></div>
                            <div class="facebook"><a href=""><i class="fa-brands fa-linkedin linkedinIcon"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="instructor col-md-5 col-lg-3">
                    <div class="socials">
                        <div class="info">
                            <img src="./images/instructor.png" alt="" class="img-fluid">
                            <div class="info mt-2">
                                <p class="name fw-bold">Ali Ahmad</p>
                                <span class="major">Computer science</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="facebook"><a href=""><i class="fa-brands fa-facebook facebookIcon"></i></a></div>
                            <div class="facebook"><a href=""><i class="fa-brands fa-instagram instagramIcon"></i></a></div>
                            <div class="facebook"><a href=""><i class="fa-brands fa-linkedin linkedinIcon"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="instructor col-md-5 col-lg-3">
                    <div class="socials">
                        <div class="info">
                            <img src="./images/instructor.png" alt="" class="img-fluid">
                            <div class="info mt-2">
                                <p class="name fw-bold">Ali Ahmad</p>
                                <span class="major">Computer science</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="facebook"><a href=""><i class="fa-brands fa-facebook facebookIcon"></i></a></div>
                            <div class="facebook"><a href=""><i class="fa-brands fa-instagram instagramIcon"></i></a></div>
                            <div class="facebook"><a href=""><i class="fa-brands fa-linkedin linkedinIcon"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="instructor col-md-5 col-lg-3">
                    <div class="socials">
                        <div class="info">
                            <img src="./images/instructor.png" alt="" class="img-fluid">
                            <div class="info mt-2">
                                <p class="name fw-bold">Ali Ahmad</p>
                                <span class="major">Computer science</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="facebook"><a href=""><i class="fa-brands fa-facebook facebookIcon"></i></a></div>
                            <div class="facebook"><a href=""><i class="fa-brands fa-instagram instagramIcon"></i></a></div>
                            <div class="facebook"><a href=""><i class="fa-brands fa-linkedin linkedinIcon"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="instructor col-md-5 col-lg-3">
                    <div class="socials">
                        <div class="info">
                            <img src="./images/instructor.png" alt="" class="img-fluid">
                            <div class="info mt-2">
                                <p class="name fw-bold">Ali Ahmad</p>
                                <span class="major">Computer science</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="facebook"><a href=""><i class="fa-brands fa-facebook facebookIcon"></i></a></div>
                            <div class="facebook"><a href=""><i class="fa-brands fa-instagram instagramIcon"></i></a></div>
                            <div class="facebook"><a href=""><i class="fa-brands fa-linkedin linkedinIcon"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Instructors -->



    <!-- Start Footer -->

    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/footer.php'; ?>

    <!-- End Footer -->


    <!-- Start JS Links -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/jsLinks.php'; ?>
    <script src="./courses.js"></script>
    <!-- End JS Links -->
</body>

</html>