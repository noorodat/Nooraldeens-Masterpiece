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
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/cssLinks.php'; ?>
    <link rel="stylesheet" href="./Home.css">
    <!-- End CSS Links -->
</head>

<body>

    <!-- Start Navbar -->

    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/navbar.php'; ?>

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

    <div class="about-us section" id="about-us">
        <div class="container">
            <h2 class="main-heading">What do we do?</h2>
            <div class="about-content d-flex justify-content-between">
            <div class="text w-50">
                <p>Introducing UniVerse: the ultimate online hub tailored for university students. Discover diverse courses, forge clubs and teams, shop essentials, and even find your ideal roommate – all in one place. Simplifying your university experience, UniVerse is your go-to platform for academic and lifestyle needs.</p>
            </div>
            <div class="image">
                <img src="./images/about.png" alt="students">
            </div>
            </div>
        </div>
    </div>

    <div class="services section sectionColor" id="services">
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
                    <a href="" class="d-flex justify-content-center"><button class="myBtn sec-btn d-flex justify-content-center">Courses</button></a>
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

    <!-- Start subscription plans -->

    <div id="mainCoantiner">
  <!--dust particel-->
  <div class="margin-body section">
  
  <div>
    <div class="starsec"></div>
    <div class="starthird"></div>
    <div class="starfourth"></div>
    <div class="starfifth"></div>
  </div>
  <!--Dust particle end--->

  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="wpb_text_column wpb_content_element ">
          <div class="wpb_wrapper">
            <h2 class="main-heading">Pricing Plans</h2>
          </div>
        </div>
    </div>
  </div>
  
  <div class="row justify-content-center pricing-content">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pricing-column-wrapper">
         <div class="pricing-column">
              <div class="pricing-price-row">
                <div class="pricing-price-wrapper">
                  <div class="pricing-price">
                    <div class="pricing-cost">$20</div>
                    <div class="time">Per semester</div>
                  </div>
                </div>
              </div>
              <div class="pricing-row-title">
                <div class="pricing_row_title">UniSilver</div>
              </div>
              <figure class="pricing-row">Publish up to 3 courses</figure>
              <figure class="pricing-row"><span>Free Shipping at shop</span></figure>
              <figure class="pricing-row">access 1 course for free</figure>
              <figure class="pricing-row">Create up to 3 teams</figure>
              <div class="pricing-footer">
                <div class="gem-button-container gem-button-position-center"><a href="#" class="gem-button gem-green">Subscribe</a></div>
              </div>
            </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pricing-column-wrapper">
       <div class="pricing-column">
              <div class="pricing-price-row">
                <div class="pricing-price-wrapper">
                  <div class="pricing-price">
                    <div class="pricing-cost">30$</div>
                    <div class="time">Per semester</div>
                  </div>
                </div>
              </div>
              <div class="pricing-row-title">
                <div class="pricing_row_title">uniMaster</div>
              </div>
              <figure class="pricing-row">Publish up to 5 courses</figure>
              <figure class="pricing-row"><span>Free Shipping at shop</span></figure>
              <figure class="pricing-row">access 2 courses for free</figure>
              <figure class="pricing-row">Create up to 5 teams</figure>
              <div class="pricing-footer">
                <div class="gem-button-container gem-button-position-center"><a class="gem-button gem-purpel">Subscribe</a></div>
              </div>
            </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pricing-column-wrapper">
      <div class="pricing-column">
              <div class="pricing-price-row">
                <div class="pricing-price-wrapper">
                  <div class="pricing-price">
                    <div class="pricing-cost">40$</div>
                    <div class="time" style="display:inline-block;">Per semester</div>
                  </div>
                </div>
              </div>
              <div class="pricing-row-title">
                <div class="pricing_row_title">UniVersal</div>
              </div>
              <figure class="pricing-row">Publish unlimited courses</figure>
              <figure class="pricing-row"><span>Free Shipping at shop</span></figure>
              <figure class="pricing-row">access 4 courses for free</figure>
              <figure class="pricing-row">Create up to 10 teams</figure>
              <div class="pricing-footer">
                <div class="gem-button-container gem-button-position-center"><a class="gem-button gem-pink">Subscribe</a></div>
              </div>
            </div>
    </div>
  </div>

 </div>
</div>

    <!-- End subscription plans -->



    <!-- End plans -->

    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/footer.php'; ?>




    <!-- Start JS Links -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/jsLinks.php'; ?>
    <script src="./Home.js"></script>
    <!-- End JS Links -->
</body>

</html>