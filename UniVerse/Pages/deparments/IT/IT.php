<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT</title>

    <!-- Start Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->

    <!-- Start CSS Links -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/cssLinks.php'; ?>
    <link rel="stylesheet" href="/masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalCSS/swiper.css">
    <link rel="stylesheet" href="/masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalCSS/departments.css">
    <link rel="stylesheet" href="./IT.css">
    <!-- End CSS Links -->
</head>

<body>

    <!-- Start Navbar -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/navbar.php'; ?>
    <!-- End Navbar -->

    <div class="landing-page position-relative">
        <div class="go-links"><a href="../../courses/courses.php">Courses</a> > <a href="./IT.php">IT</a></div>
        <div id="container">
            <span id="text1"></span>
            <span id="text2"></span>
        </div>

        <svg id="filters">
            <defs>
                <filter id="threshold">
                    <feColorMatrix in="SourceGraphic" type="matrix" values="1 0 0 0 0
                          0 1 0 0 0
                          0 0 1 0 0
                          0 0 0 255 -140" />
                </filter>
            </defs>
        </svg>
    </div>


    <!-- Start Menu -->

    <button class="sticky-top filterBtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Menu <i class="fa-solid fa-arrow-right"></i></button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="sec1">
                <h3>Departments</h3>
                <ul class="departments mt-4">
                    <a href="">
                        <li>IT</li>
                    </a>
                    <a href="">
                        <li>Engineering</li>
                    </a>
                    <a href="">
                        <li>Medical school</li>
                    </a>
                    <a href="">
                        <li>Science</li>
                    </a>
                    <a href="">
                        <li>Architecture and Design</li>
                    </a>
                    <a href="">
                        <li>Languages and Literature</li>
                    </a>
                </ul>
            </div>
            <div class="sec2 mt-4">
                <h3>Filter</h3>
                <select name="" id="">
                    <option value="">Sort by</option>
                    <option value="">Price(High to Low)</option>
                    <option value="">Price(Low to High)</option>
                    <option value="">Ratings</option>
                </select>
                <ul class="departments mt-4">
                    <a href="">
                        <li>FREE Courses</li>
                    </a>
                    <a href="">
                        <li>Discounts</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Menu -->

    <!-- Start Courses -->

    <div class="courses section position-relative">
        <div class="container">
            <form action="" class="text-center">
                <input type="text" placeholder="Search for a course" class="w-50">
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <h2 class="main-heading mt-4 mb-4">Courses</h2>
            <div class="courses-box row gap-3 justify-content-center mt-3">
                <div class="course col-12 col-md-5 col-lg-3">
                    <div class="card">
                        <div class="image-box">
                            <img src="./images/data structures.jpg" alt="" />
                        </div>
                        <div class="course-name text-center mt-2 fw-bold">Data structures</div>
                        <div class="price-ratings text-center mt-2">
                            <div class="price">10$</div>
                            <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="profile-details d-flex justify-content-center">
                            <img src="./images/nooraldeen-modified.png" alt="" />
                            <div class="name-job">
                                <h3 class="name fw-normal">Nooraldeen</h3>
                            </div>
                        </div>
                        <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                    </div>
                </div>
                <div class="course col-12 col-md-5 col-lg-3">
                    <div class="card">
                        <div class="image-box">
                            <img src="./images/data structures.jpg" alt="" />
                        </div>
                        <div class="course-name text-center mt-2 fw-bold">Data structures</div>
                        <div class="price-ratings text-center mt-2">
                            <div class="price">10$</div>
                            <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="profile-details d-flex justify-content-center">
                            <img src="./images/nooraldeen-modified.png" alt="" />
                            <div class="name-job">
                                <h3 class="name fw-normal">Nooraldeen</h3>
                            </div>
                        </div>
                        <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                    </div>
                </div>
                <div class="course col-12 col-md-5 col-lg-3">
                    <div class="card">
                        <div class="image-box">
                            <img src="./images/data structures.jpg" alt="" />
                        </div>
                        <div class="course-name text-center mt-2 fw-bold">Data structures</div>
                        <div class="price-ratings text-center mt-2">
                            <div class="price">10$</div>
                            <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="profile-details d-flex justify-content-center">
                            <img src="./images/nooraldeen-modified.png" alt="" />
                            <div class="name-job">
                                <h3 class="name fw-normal">Nooraldeen</h3>
                            </div>
                        </div>
                        <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                    </div>
                </div>
                <div class="course col-12 col-md-5 col-lg-3">
                    <div class="card">
                        <div class="image-box">
                            <img src="./images/data structures.jpg" alt="" />
                        </div>
                        <div class="course-name text-center mt-2 fw-bold">Data structures</div>
                        <div class="price-ratings text-center mt-2">
                            <div class="price">10$</div>
                            <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="profile-details d-flex justify-content-center">
                            <img src="./images/nooraldeen-modified.png" alt="" />
                            <div class="name-job">
                                <h3 class="name fw-normal">Nooraldeen</h3>
                            </div>
                        </div>
                        <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                    </div>
                </div>
                <div class="course col-12 col-md-5 col-lg-3">
                    <div class="card">
                        <div class="image-box">
                            <img src="./images/data structures.jpg" alt="" />
                        </div>
                        <div class="course-name text-center mt-2 fw-bold">Data structures</div>
                        <div class="price-ratings text-center mt-2">
                            <div class="price">10$</div>
                            <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="profile-details d-flex justify-content-center">
                            <img src="./images/nooraldeen-modified.png" alt="" />
                            <div class="name-job">
                                <h3 class="name fw-normal">Nooraldeen</h3>
                            </div>
                        </div>
                        <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Courses -->



    <!-- Start Offers -->

    <div class="offers section">
        <h2 class="main-heading">Discounts</h2>
        <div class="container">
            <div class="swiper p-2">
                <div class="slide-container">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-box">
                                <img src="./images/software testing.jpg" alt="" />
                            </div>
                            <div class="course-name text-center mt-2 fw-bold">Software testing</div>
                            <div class="price-ratings text-center mt-2">
                                <div class="price">10$</div>
                                <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="profile-details d-flex justify-content-center">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name-job">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-box">
                                <img src="./images/data structures.jpg" alt="" />
                            </div>
                            <div class="course-name text-center mt-2 fw-bold">Data structures</div>
                            <div class="price-ratings text-center mt-2">
                                <div class="price">10$</div>
                                <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="profile-details d-flex justify-content-center">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name-job">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-box">
                                <img src="./images/java.png" alt="" />
                            </div>
                            <div class="course-name text-center mt-2 fw-bold">Java</div>
                            <div class="price-ratings text-center mt-2">
                                <div class="price">10$</div>
                                <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="profile-details d-flex justify-content-center">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name-job">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-box">
                                <img src="./images/OS.jpg" alt="" />
                            </div>
                            <div class="course-name text-center mt-2 fw-bold">Operating system</div>
                            <div class="price-ratings text-center mt-2">
                                <div class="price">10$</div>
                                <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="profile-details d-flex justify-content-center">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name-job">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-box">
                                <img src="./images/machine learning.jpg" alt="" />
                            </div>
                            <div class="course-name text-center mt-2 fw-bold">Machine learning</div>
                            <div class="price-ratings text-center mt-2">
                                <div class="price">10$</div>
                                <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="profile-details d-flex justify-content-center">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name-job">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- End Offers -->


    <!-- Start Best Selling -->

    <div class="best-selling section">
        <div class="container">
            <h2 class="main-heading">Best Selling<img src="./images/best seller.png" alt="" width="120px"></h2>
            
            <div class="best-courses row gap-3 justify-content-center">
            <div class="course col-12 col-md-5 col-lg-3">
                    <div class="card">
                        <div class="image-box">
                            <img src="./images/java.png" alt="" />
                        </div>
                        <div class="course-name text-center mt-2 fw-bold">Data structures</div>
                        <div class="price-ratings text-center mt-2">
                            <div class="price">10$</div>
                            <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="profile-details d-flex justify-content-center">
                            <img src="./images/nooraldeen-modified.png" alt="" />
                            <div class="name-job">
                                <h3 class="name fw-normal">Nooraldeen</h3>
                            </div>
                        </div>
                        <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                    </div>
                </div>
            <div class="course col-12 col-md-5 col-lg-3">
                    <div class="card">
                        <div class="image-box">
                            <img src="./images/software testing.jpg" alt="" />
                        </div>
                        <div class="course-name text-center mt-2 fw-bold">Data structures</div>
                        <div class="price-ratings text-center mt-2">
                            <div class="price">10$</div>
                            <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="profile-details d-flex justify-content-center">
                            <img src="./images/nooraldeen-modified.png" alt="" />
                            <div class="name-job">
                                <h3 class="name fw-normal">Nooraldeen</h3>
                            </div>
                        </div>
                        <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                    </div>
                </div>
            <div class="course col-12 col-md-5 col-lg-3">
                    <div class="card">
                        <div class="image-box">
                            <img src="./images/OS.jpg" alt="" />
                        </div>
                        <div class="course-name text-center mt-2 fw-bold">Data structures</div>
                        <div class="price-ratings text-center mt-2">
                            <div class="price">10$</div>
                            <span class="ratings"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="profile-details d-flex justify-content-center">
                            <img src="./images/nooraldeen-modified.png" alt="" />
                            <div class="name-job">
                                <h3 class="name fw-normal">Nooraldeen</h3>
                            </div>
                        </div>
                        <div class="info-add p-2">
                            <p class="mt-3">
                                Complete Data Structures Course: Build Strong Coding Foundations with In-Depth Concepts and Practical Applications.</p>
                            <span class="major">Major: Computer science</span>
                            <a href="" class="text-white">
                            <div class="profile-details d-flex">
                                <img src="./images/nooraldeen-modified.png" alt="" />
                                <div class="name">
                                    <h3 class="name fw-normal">Nooraldeen</h3>
                                </div>
                            </div>
                            </a>
                            <button class="myBtn sec-btn buyCourse">Buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Best Selling -->



    <!-- Start Footer -->

    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/footer.php'; ?>

    <!-- End Footer -->






    <!-- Start JS Links -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/jsLinks.php'; ?>
    <script src="/masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalJS/swiper.js"></script>
    <script src="./IT.js" type="module"></script>
    <script src="/masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalJS/departments.js" type="module"></script>
    <!-- End JS Links -->
</body>

</html>