<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Add course</title>

    <!-- Start Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->


    <!-- Start CSS Links -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/cssLinks.php'; ?>


    <!-- YOUR CUSTOM CSS -->
    <link href="./addCourse.css" rel="stylesheet">

</head>

<body>

    <div id="page" class="theia-exception">

        <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/navbar.php'; ?>

        <main>
            <section id="hero_in" class="courses">
                <div class="wrapper">
                    <div class="container">

                    </div>
                </div>
            </section>
            <!--/hero_in-->

            <div class="bg_color_1">
                <nav class="secondary_nav">
                    <div class="container">
                        <ul class="clearfix">
                            <li><a href="#description">Description</a></li>
                            <li><a href="#lessons">Lessons</a></li>
                            <li><a href="#reviews">Reviews</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="container section">
                    <div class="row">
                        <div class="col-lg-8">

                            <section id="description">
                                <h2>Description</h2>
                                <div id="wrapper">

                                    <form id="paper" method="get" action="">
                                        <textarea name="course-description" id="course-description" cols="30" rows="10" placeholder="Course description"></textarea>
                                    </form>

                                </div>
                            </section>
                            <!-- /section -->
                            <section id="lessons">
                                <div class="intro_title d-flex justify-content-between">
                                    <h2>Lessons</h2>
                                </div>
                                <div id="accordion_lessons" role="tablist" class="add_bottom_45">
                                    <div class="add-section p-2">
                                        <label for="addCourseSection">Add section:</label>
                                        <input type="text" id="addCourseSection">
                                        <button class="myBtn main-btn" style="margin: 10px" id="addSectionBtn">Add</button>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa-solid fa-plus"></i> Introdocution</a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_lessons">
                                            <div class="card-body">
                                                <div class="list_lessons">
                                                    <input type="file">
                                                    <!-- <ul>
                                                        <li><a href="" class="video">Health Science</a><span>00:59</span></li>
                                                        <li><a href="" class="video">Health and Social Care</a><span>00:59</span></li>
                                                        <li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
                                                    </ul> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /card -->


                                </div>
                                <!-- /accordion -->
                            </section>
                            <!-- /section -->

                            <section id="reviews">
                                <h2>Reviews</h2>
                                <div class="reviews-container">
                                    <small>No reviews</small>
                                </div>

                                <hr>

                                <!-- /review-container -->
                            </section>
                            <!-- /section -->
                        </div>
                        <!-- /col -->

                        <aside class="col-lg-4" id="sidebar">
                            <div class="box_detail">
                                <figure>
                                    <label for="coursePicture"><i class="fas fa-edit" id="playBtn"></i></label><img src="./images/default-image.jpg" alt="machine learning" class="img-fluid">
                                    <input type="file" id="coursePicture" hidden accept="image/*">
                                </figure>
                                <div class="price-publisher p-2 d-flex align-items-center justify-content-between gap-2">
                                    <div class="price">
                                        <small>Price(USD):</small>
                                        <input type="number" class="w-50" id="priceInput">
                                    </div>
                                </div>
                                <div class="saveCourse" id="saveCourse"><a href=""><button class="myBtn main-btn w-100 mt-2">Publish to Students</button></a></div>
                            </div>
                        </aside>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /bg_color_1 -->
        </main>
        <!--/main-->
    </div>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/footer.php'; ?>

    <!-- page -->

    <!-- COMMON SCRIPTS -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/jsLinks.php'; ?>
    <script src="../../GlobalJS/jquery-3.5.1.min.js"></script>
    <script src="../../GlobalJS/common_scripts.js"></script>
    <script src='./addCourse.js'></script>
    <script src="../../GlobalJS/main.js"></script>


</body>

</html>