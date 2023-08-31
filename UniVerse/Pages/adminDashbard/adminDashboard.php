<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- favicon icon -->
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico" type="image/x-icon">

    <!-- Include fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Include google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Include bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Include aos CSS -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Include magnific-popup CSS -->
    <link rel="stylesheet" href="./css/magnific-popup.css">

    <!-- Include nice-select CSS -->
    <link rel="stylesheet" href="./css/nice-select.css">

    <!-- Include slick-theme CSS -->
    <link rel="stylesheet" href="./css/slick-theme.css">

    <!-- Include slick CSS -->
    <link rel="stylesheet" href="./css/slick.css">

    <!-- Include stylesheet CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/cssLinks.php'; ?>



</head>

<body>

    <!-- Start Navbar -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/navbar.php'; ?>
    <!-- End Navbar -->
    <!-- body wrap start -->
    <div class="body-wrap overflow-hidden">



        <!-- main body start -->
        <main>
            <!-- sidebar section start -->
            <section class="sidebar_section">
                <div class="sidebar_content_wrap">
                    <div class="container">
                        <div class="row">
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header align-items-center">
                                    <h5 class="mb-0">Organic Products</h5>
                                    <button type="button" class="btn-close text-reset text-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="prdc_ctg_product_content mt-1 d-flex align-items-center">
                                        <div class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3">
                                            <img src="./images/nooraldeen-modified.png" alt="image_not_found">
                                        </div>
                                        <div class="prdc_ctg_product_text">
                                            <div class="prdc_ctg_product_title my-2">
                                                <h5>Organic Cabbage</h5>
                                            </div>
                                            <div class="prdc_ctg_product_price mt-1 product_price">
                                                <span class="sale_price pe-1">$50.00</span>
                                                <del>$70.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prdc_ctg_product_content mt-1 d-flex align-items-center">
                                        <div class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3">
                                            <img src="/images/nooraldeen-modified.png" alt="image_not_found">
                                        </div>
                                        <div class="prdc_ctg_product_text">
                                            <div class="prdc_ctg_product_title my-2">
                                                <h5>Organic Cabbage</h5>
                                            </div>
                                            <div class="prdc_ctg_product_price mt-1 product_price">
                                                <span class="sale_price pe-1">$40.00</span>
                                                <del>$60.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prdc_ctg_product_content mt-1 d-flex align-items-center">
                                        <div class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3">
                                            <img src="assets/images/category/cat8.png" alt="image_not_found">
                                        </div>
                                        <div class="prdc_ctg_product_text">
                                            <div class="prdc_ctg_product_title my-2">
                                                <h5>Organic Cabbage</h5>
                                            </div>
                                            <div class="prdc_ctg_product_price mt-1 product_price">
                                                <span class="sale_price pe-1">$70.00</span>
                                                <del>$90.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total_price">
                                        <ul class="ul_li_block mb_30 clearfix">
                                            <li>
                                                <span>Subtotal:</span>
                                                <span>$215</span>
                                            </li>
                                            <li>
                                                <span>Vat 5%:</span>
                                                <span>$10.75</span>
                                            </li>
                                            <li>
                                                <span>Discount 15%:</span>
                                                <span>- $32.25</span>
                                            </li>
                                            <li>
                                                <span>Total:</span>
                                                <span>$191.8875</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sidebar_btns">
                                        <ul class="btns_group ul_li_block clearfix">
                                            <li><a href="cart.html">View Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sidebar section end -->


            <!-- vendor_dashboard_section - start
                  ================================================== -->
            <section class="vendor_dashboard_section bg_gray" data-aos="fade-up" data-aos-duration="2000">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3">
                            <div class="vd_tab_area">
                                <div class="vd_space">
                                    <div class="vd_info_wrap text-center">
                                        <div class="vd_image">
                                            <div class="image_wrap">
                                            </div>
                                            <button type="button" class="edit_btn">
                                                <i class="fas fa-camera-retro"></i>
                                            </button>
                                        </div>
                                        <h2 class="vd_mane">Nooraldeen</h2>
                                        <span class="vd_mail">noor.feraas@gmail.com</span>
                                    </div>
                                </div>

                                <ul class="vd_tab_nav nav ul_li_block" role="tablist">
                                    <li>
                                        <button class="active" data-bs-toggle="tab" data-bs-target="#tab_dashboard" type="button" role="tab" aria-selected="true">
                                        <i class="fa-solid fa-gauge"></i> Dashboard 
                                        </button>
                                    </li>
                                    <li>
                                        <button data-bs-toggle="tab" data-bs-target="#tab_products" type="button" role="tab" aria-selected="false">
                                        <i class="fa-solid fa-laptop"></i> Courses
                                        </button>
                                    </li>
                                    <li>
                                        <button data-bs-toggle="tab" data-bs-target="#tab_orders" type="button" role="tab" aria-selected="false">
                                        <i class="fa-solid fa-users"></i> Users 
                                        </button>
                                    </li>
                                    <li>
                                        <button data-bs-toggle="tab" data-bs-target="#tab_profile" type="button" role="tab" aria-selected="false">
                                        <i class="fa-solid fa-user"></i> Profile
                                        </button>
                                    </li>
                                    <li class="w-100">
                                        <a href="#">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab_dashboard" role="tabpanel">
                                    <div class="row">
                                        <div class="col col-lg-4">
                                            <div class="funfact_item" style="background-image: url('assets/images/funfact/funfact_bg_1.png');" data-aos="fade-up" data-aos-duration="1000">
                                                <div class="item_content">
                                                    <h3>Total Courses</h3>
                                                    <span>40</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-lg-4">
                                            <div class="funfact_item" style="background-image: url('assets/images/funfact/funfact_bg_2.png');" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="item_content">
                                                    <h3>Total Sales</h3>
                                                    <span>180</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-lg-4">
                                            <div class="funfact_item" style="background-image: url('assets/images/funfact/funfact_bg_3.png');" data-aos="fade-up" data-aos-duration="2000">
                                                <div class="item_content">
                                                    <h3>Total money</h3>
                                                    <span>$2600</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="">
                                            <div class="trending_products" data-aos="fade-up" data-aos-duration="2000">
                                                <div class="vd_title_wrap">
                                                    <h3>Trending courses</h3>
                                                </div>
                                                <div class="vd_shadow p-0">
                                                    <div class="vd_table table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Course Image</th>
                                                                    <th>Course Name</th>
                                                                    <th>Price</th>
                                                                    <th>Tutor</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="item_image">
                                                                            <img src="./images/machine learning.jpg" alt="image_not_found">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h4 class="item_title"><a href="">Machine learning
                                                                            </a></h4>
                                                                    </td>
                                                                    <td><span>$20</span></td>
                                                                    <td><a href=""><span>Nooraldeen</span></a></td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="item_image">
                                                                            <img src="./images/c++.png" alt="image_not_found">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h4 class="item_title"><a href="">C++
                                                                            </a></h4>
                                                                    </td>
                                                                    <td><span>$15</span></td>
                                                                    <td><a href=""><span>Nooraldeen</span></a></td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="item_image">
                                                                            <img src="./images/algorithms.png" alt="image_not_found">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h4 class="item_title"><a href="">Algorithms
                                                                            </a></h4>
                                                                    </td>
                                                                    <td><span>$20</span></td>
                                                                    <td><a href=""><span>Nooraldeen</span></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="recent_orders mt-4" data-aos="fade-up" data-aos-duration="2000">
                                        <div class="vd_title_wrap">
                                            <h3>Recent subscriptions</h3>
                                            <form action="#">
                                                <div class="select_option clearfix m-0">
                                                    <select>
                                                        <option data-display="Select">Nothing</option>
                                                        <option value="1" selected>Last 3 Weeks</option>
                                                        <option value="2">Last Month</option>
                                                        <option value="3">Last Year</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="vd_shadow p-0">
                                            <div class="vd_table table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>User</th>
                                                            <th>Pricing plan</th>
                                                            <th>Price</th>
                                                            <th>Status</th>
                                                            <th>Start Date</th>
                                                            <th>End date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><span>Mjd Malkawi</span></td>
                                                            <td><span>UniSilver</span></td>
                                                            <td><span>$20</span></td>
                                                            <td><span class="status_btn bg_green">Subscribed</span></td>
                                                            <td>8/30/2023</td>
                                                            <td>9/30/2023</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Bashar Oudat</span></td>
                                                            <td><span>UniMaster</span></td>
                                                            <td><span>$30</span></td>
                                                            <td><span class="status_btn bg_green">Subscribed</span></td>
                                                            <td>8/30/2023</td>
                                                            <td>9/30/2023</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Omar Migdady</span></td>
                                                            <td><span>UniVersal</span></td>
                                                            <td><span>$40</span></td>
                                                            <td><span class="status_btn bg_green">Subscribed</span></td>
                                                            <td>8/30/2023</td>
                                                            <td>9/30/2023</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Nooraldeen</span></td>
                                                            <td><span>UniMaster</span></td>
                                                            <td><span>$70</span></td>
                                                            <td><span class="status_btn bg_yellow">Expired</span></td>
                                                            <td>7/30/2023</td>
                                                            <td>8/30/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab_products" role="tabpanel">
                                    <div class="trending_products">
                                        <div class="search__container">
                                            <p class="search__title">
                                                Search for a course
                                            </p>
                                            <form action="" class="d-flex justify-content-center">
                                                <input class="search__input" type="text" placeholder="Search">
                                            </form>
                                        </div>
                                        <div class="vd_title_wrap">
                                            <h3>All courses</h3>
                                        </div>
                                        <div class="vd_shadow p-0">
                                            <div class="vd_table table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Course Image</th>
                                                            <th>Course Name</th>
                                                            <th>Price</th>
                                                            <th>Tutor</th>
                                                            <th>Students enrolled</th>
                                                            <th>Edit/Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="item_image">
                                                                    <img src="./images/c++.png" alt="image_not_found">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h4 class="item_title"><a href="" class="text-dark text-decoration-underline">C++</a>
                                                                </h4>
                                                            </td>
                                                            <td>
                                                                <ul class="category_list ul_li">
                                                                    <li>$15</li>
                                                                </ul>
                                                            </td>
                                                            <td><a href="" class="text-decoration-underline text-dark">Nooraldeen</a></td>
                                                            <td><span>30</span></td>
                                                            <td>
                                                                <ul class="btns_group ul_li">
                                                                    <li>
                                                                        <button type="button" class="bg_green">
                                                                            <i class="fas fa-edit"></i>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button type="button" class="bg_orange">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="item_image">
                                                                    <img src="./images/c++.png" alt="image_not_found">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h4 class="item_title"><a href="" class="text-dark text-decoration-underline">C++</a>
                                                                </h4>
                                                            </td>
                                                            <td>
                                                                <ul class="category_list ul_li">
                                                                    <li>$15</li>
                                                                </ul>
                                                            </td>
                                                            <td><a href="" class="text-decoration-underline text-dark">Nooraldeen</a></td>
                                                            <td><span>30</span></td>
                                                            <td>
                                                                <ul class="btns_group ul_li">
                                                                    <li>
                                                                        <button type="button" class="bg_green">
                                                                            <i class="fas fa-edit"></i>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button type="button" class="bg_orange">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="item_image">
                                                                    <img src="./images/c++.png" alt="image_not_found">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h4 class="item_title"><a href="" class="text-dark text-decoration-underline">C++</a>
                                                                </h4>
                                                            </td>
                                                            <td>
                                                                <ul class="category_list ul_li">
                                                                    <li>$15</li>
                                                                </ul>
                                                            </td>
                                                            <td><a href="" class="text-decoration-underline text-dark">Nooraldeen</a></td>
                                                            <td><span>30</span></td>
                                                            <td>
                                                                <ul class="btns_group ul_li">
                                                                    <li>
                                                                        <button type="button" class="bg_green">
                                                                            <i class="fas fa-edit"></i>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button type="button" class="bg_orange">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="item_image">
                                                                    <img src="./images/c++.png" alt="image_not_found">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h4 class="item_title"><a href="" class="text-dark text-decoration-underline">C++</a>
                                                                </h4>
                                                            </td>
                                                            <td>
                                                                <ul class="category_list ul_li">
                                                                    <li>$15</li>
                                                                </ul>
                                                            </td>
                                                            <td><a href="" class="text-dark text-decoration-underline text-dark">Nooraldeen</a></td>
                                                            <td><span>30</span></td>
                                                            <td>
                                                                <ul class="btns_group ul_li">
                                                                    <li>
                                                                        <button type="button" class="bg_green">
                                                                            <i class="fas fa-edit"></i>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button type="button" class="bg_orange">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab_orders" role="tabpanel">
                                    <div class="recent_orders">
                                        <div class="search__container">
                                            <p class="search__title">
                                                Search for a User
                                            </p>
                                            <form action="" class="d-flex justify-content-center">
                                                <input class="search__input" type="text" placeholder="Search">
                                            </form>
                                        </div>
                                        <div class="vd_title_wrap">
                                            <h3>Users</h3>
                                        </div>
                                        <div class="vd_shadow p-0">
                                            <div class="vd_table table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Email</th>
                                                            <th>Full name</th>
                                                            <th>Role</th>
                                                            <th>Subscription</th>
                                                            <th>Subscription times</th>
                                                            <th>Subscription status</th>
                                                            <th>Ban</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><span>noor.feraas@gmail.com</span></td>
                                                            <td><span>Noroaldeen Aloudat</span></td>
                                                            <td><span>Student</span></td>
                                                            <td><span>UniMaster</span></td>
                                                            <td><span>3</span></td>
                                                            <td><span class="status_btn bg_green">Subscribed</span></td>
                                                            <td>
                                                                <ul class="btns_group ul_li">
                                                                    <li>
                                                                        <button type="button" class="bg_orange">
                                                                            <i class="fa-solid fa-ban" style="color: white;"></i>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td><span>noor.feraas@gmail.com</span></td>
                                                            <td><span>Noroaldeen Aloudat</span></td>
                                                            <td><span>Student</span></td>
                                                            <td><span>UniMaster</span></td>
                                                            <td><span>3</span></td>
                                                            <td><span class="status_btn bg_green">Subscribed</span></td>
                                                            <td>
                                                                <ul class="btns_group ul_li">
                                                                    <li>
                                                                        <button type="button" class="bg_orange">
                                                                            <i class="fa-solid fa-ban" style="color: white;"></i>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>noor.feraas@gmail.com</span></td>
                                                            <td><span>Noroaldeen Aloudat</span></td>
                                                            <td><span>Student</span></td>
                                                            <td><span>UniMaster</span></td>
                                                            <td><span>3</span></td>
                                                            <td><span class="status_btn bg_green">Subscribed</span></td>
                                                            <td>
                                                                <ul class="btns_group ul_li">
                                                                    <li>
                                                                        <button type="button" class="bg_orange">
                                                                            <i class="fa-solid fa-ban" style="color: white;"></i>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>noor.feraas@gmail.com</span></td>
                                                            <td><span>Noroaldeen Aloudat</span></td>
                                                            <td><span>Student</span></td>
                                                            <td><span>UniMaster</span></td>
                                                            <td><span>3</span></td>
                                                            <td><span class="status_btn bg_green">Subscribed</span></td>
                                                            <td>
                                                                <ul class="btns_group ul_li">
                                                                    <li>
                                                                        <button type="button" class="bg_orange">
                                                                            <i class="fa-solid fa-ban" style="color: white;"></i>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>noor.feraas@gmail.com</span></td>
                                                            <td><span>Noroaldeen Aloudat</span></td>
                                                            <td><span>Student</span></td>
                                                            <td><span>UniMaster</span></td>
                                                            <td><span>3</span></td>
                                                            <td><span class="status_btn bg_green">Subscribed</span></td>
                                                            <td>
                                                                <ul class="btns_group ul_li">
                                                                    <li>
                                                                        <button type="button" class="bg_orange">
                                                                            <i class="fa-solid fa-ban" style="color: white;"></i>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab_profile" role="tabpanel">
                                    <div class="profile_table">
                                        <div class="vd_title_wrap">
                                            <h3>Profile</h3>

                                        </div>
                                        <div class="vd_shadow p-0">
                                            <div class="vd_table table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Info</th>
                                                            <th>Data</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><span><strong>Name:</strong></span></td>
                                                            <td><span>Nooraldeen Aloudat</span></td>
                                                            <td>
                                                                <button type="button" class="bg_green editBtn">
                                                                    <i class="fas fa-edit"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span><strong>Email Address:</strong></span></td>
                                                            <td><span>noor.feraas@gmail.com</span></td>
                                                            <td>
                                                                <button type="button" class="bg_green editBtn">
                                                                    <i class="fas fa-edit"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span><strong>Phone:</strong></span></td>
                                                            <td><span>0776795866</span></td>
                                                            <td>
                                                                <button type="button" class="bg_green editBtn">
                                                                    <i class="fas fa-edit"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span><strong>Added at:</strong></span></td>
                                                            <td><span>8/30/2023</span></td>
                                                            <td>
                                                                <button type="button" class="bg_green editBtn">
                                                                    <i class="fas fa-edit"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span><strong>Password</strong></span></td>
                                                            <td><span>****</span></td>
                                                            <td>
                                                                <a href="">reset</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- vendor_dashboard_section - end -->

        </main>
        <!-- main body end -->


    </div>
    <!-- body wrap end -->

    <!-- Include jquery js -->
    <script src="./js/jquery.min.js"></script>

    <!-- Include bootstrap-bundle js -->
    <script src="./js/bootstrap.bundle.min.js"></script>

    <!-- Include aos js -->
    <script src="./js/aos.js"></script>

    <!-- Include chart js -->
    <script src="./js/chart.js"></script>

    <!-- Include jquery-magnific-popup js -->
    <script src="./js/magnific-popup.min.js"></script>

    <!-- Include nice-select js -->
    <script src="./js/nice-select.min.js"></script>

    <!-- Include jquery-countdown js -->
    <script src="./js/countdown.min.js"></script>

    <!-- Include slick js -->
    <script src="./js/slick.min.js"></script>

    <!-- Include custom js -->
    <script src="./js/custom.js"></script>

</body>

</html>